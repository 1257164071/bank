<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件

//生成随机的字符串
function  randomString()
{
    $str='ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $rndstr='';
    for($i=0;$i<2;$i++){
        $rndcode=rand(0,25);
        $rndstr.=$str[$rndcode];
    }
    return $rndstr;
}

/*上传数据表*/
function uploadfile()
{
    $fileKey = key($_FILES);
    $dir = input('dir');
    echo $dir;
    die;

    if($dir=='')return json_encode(['msg'=>'没有指定文件目录！','status'=>-1]);
    //$dirs = WSTConf("CONF.wstUploads");
    // if(!in_array($dir, $dirs)){
    // 	return json_encode(['msg'=>'非法文件目录！','status'=>-1]);
    // }
    //上传文件
    $file = request()->file($fileKey);

    if($file===null){
        return json_encode(['msg'=>'上传文件不存在或超过服务器限制','status'=>-1]);
    }
    $validate = new \think\Validate([
        ['fileExt','fileExt:xls,xlsx,xlsm','只允许上传后缀为xls,xlsx,xlsm的文件']
    ]);
    $data = ['fileExt'=> $file];
    if (!$validate->check($data)) {
        return json_encode(['msg'=>$validate->getError(),'status'=>-1]);
    }
    $info = $file->rule('uniqid')->move(ROOT_PATH.'/upload/'.$dir."/".date('Y-m'));
    //保存路径
    $filePath = $info->getPathname();
    $filePath = str_replace(ROOT_PATH,'',$filePath);
    $filePath = str_replace('\\','/',$filePath);
    $name = $info->getFilename();
    $filePath = str_replace($name,'',$filePath);
    if($info){
        return json_encode(['status'=>1,'name'=>$info->getFilename(),'route'=>$filePath]);
    }else{
        //上传失败获取错误信息
        return $file->getError();
    }
}


/*输出成功*/
function api_success($msg = 'ok',$data = [],$code = 0){
    if(!is_string($msg)||!is_numeric($code)){
        api_success('4001','参数错误');
    }
    if (empty($data)){
        $data = [];
    }
    $ret['msg'] = $msg;
    $ret['data'] = $data;
    $ret['code'] = $code;
    header('Content-Type:application/json; charset=utf-8');
    exit(json_encode($ret, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT));
}

/*api_error 输出错误*/
function api_error($msg = '',$data = [],$code = 1){
    api_success($msg,$data,$code);
}

/**
 * 格式化字节大小
 * @param  number $size      字节数
 * @param  string $delimiter 数字和单位分隔符
 * @return string            格式化后的带单位的大小
 * @author 麦当苗儿 <zuojiazi@vip.qq.com>
 */
function format_bytes($size, $delimiter = '') {
    $units = array('B', 'KB', 'MB', 'GB', 'TB', 'PB');
    for ($i = 0; $size >= 1024 && $i < 5; $i++) {
        $size /= 1024;
    }

    return round($size, 2) . $delimiter . $units[$i];
}

/**
 * 检测用户是否登录
 * @return integer 0-未登录，大于0-当前登录用户ID
 */
function is_login() {
    $user = session('uid');
    if (empty($user)) {
        return 0;
    } else {
        return $user;
    }
}

/**
 * 获取客户端IP地址
 * @param integer $type 返回类型 0 返回IP地址 1 返回IPV4地址数字
 * @param boolean $adv 是否进行高级模式获取（有可能被伪装）
 * @return mixed
 */
function get_client_ip($type = 0, $adv = false) {
    $type      = $type ? 1 : 0;
    static $ip = NULL;
    if ($ip !== NULL) {
        return $ip[$type];
    }

    if ($adv) {
        if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $arr = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
            $pos = array_search('unknown', $arr);
            if (false !== $pos) {
                unset($arr[$pos]);
            }

            $ip = trim($arr[0]);
        } elseif (isset($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (isset($_SERVER['REMOTE_ADDR'])) {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
    } elseif (isset($_SERVER['REMOTE_ADDR'])) {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    // IP地址合法验证
    $long = sprintf("%u", ip2long($ip));
    $ip   = $long ? array($ip, $long) : array('0.0.0.0', 0);
    return $ip[$type];
}

/**
 * 记录行为日志，并执行该行为的规则
 * @param string $action 行为标识
 * @param string $model 触发行为的模型名
 * @param int $record_id 触发行为的记录id
 * @param int $user_id 执行行为的用户id
 * @return boolean
 */
function action_log($action = null, $model = null, $record_id = 1, $user_id = null) {

    //参数检查
    if (empty($action) || empty($model) || empty($record_id)) {
        return '参数不能为空';
    }
    if (empty($user_id)) {
        $user_id = is_login();
    }

    //查询行为,判断是否执行
    $action_info = db('Action')->getByName($action);
    if ($action_info['status'] != 1) {
        return '该行为被禁用或删除';
    }

    //插入行为日志
    $data['action_id']   = $action_info['id'];
    $data['user_id']     = $user_id;
    $data['action_ip']   = ip2long(get_client_ip());
    $data['model']       = $model;
    $data['record_id']   = $record_id;
    $data['create_time'] = time();

    //解析日志规则,生成日志备注
    if (!empty($action_info['log'])) {
        if (preg_match_all('/\[(\S+?)\]/', $action_info['log'], $match)) {
            $log['user']   = $user_id;
            $log['record'] = $record_id;
            $log['model']  = $model;
            $log['time']   = time();
            $log['data']   = array('user' => $user_id, 'model' => $model, 'record' => $record_id, 'time' => time());
            foreach ($match[1] as $value) {
                $param = explode('|', $value);
                if (isset($param[1])) {
                    $replace[] = call_user_func($param[1], $log[$param[0]]);
                } else {
                    $replace[] = $log[$param[0]];
                }
            }
            $data['remark'] = str_replace($match[0], $replace, $action_info['log']);
        } else {
            $data['remark'] = $action_info['log'];
        }
    } else {
        //未定义日志规则，记录操作url
        $data['remark'] = '操作url：' . $_SERVER['REQUEST_URI'];
    }

    db('ActionLog')->insert($data);
    
}

/**
 * select返回的数组进行整数映射转换
 */
function int_to_string(&$data,$map=array('status'=>array(1=>'正常',-1=>'删除',0=>'禁用',2=>'未审核',3=>'草稿'))) {
    if($data === false || $data === null ){
        return $data;
    }
    $data = (array)$data;
    foreach ($data as $key => $row){
        foreach ($map as $col=>$pair){
            if(isset($row[$col]) && isset($pair[$row[$col]])){
                $data[$key][$col.'_text'] = $pair[$row[$col]];
            }
        }
    }
    return $data;
}

/**
 * 根据条件字段获取数据
 * @param mixed $value 条件，可用常量或者数组
 * @param string $condition 条件字段
 * @param string $field 需要返回的字段，不传则返回整个数据
 * @author 
 */
function get_document_field($value = null, $condition = 'id', $field = null){
    if(empty($value)){
        return false;
    }

    //拼接参数
    $map[$condition] = $value;
    $info = \think\Db::name('Model')->where($map);
    if(empty($field)){
        $info = $info->field(true)->find();
    }else{
        $info = $info->value($field);
    }
    return $info;
}

/**
 * 获取行为数据
 * @param string $id 行为id
 * @param string $field 需要获取的字段
 * @author 
 */
function get_action($id = null, $field = null){
    if(empty($id) && !is_numeric($id)){
        return false;
    }
    $list = cache('action_list');
    if(empty($list[$id])){
        $map = array('status'=>array('gt', -1), 'id'=>$id);
        $list[$id] = db('Action')->where($map)->field(true)->find();
    }
    return empty($field) ? $list[$id] : $list[$id][$field];
}

/**
 * 获取行为类型
 * @param intger $type 类型
 * @param bool $all 是否返回全部类型
 * @author 
 */
function get_action_type($type, $all = false){
    $list = array(
        1=>'系统',
        2=>'用户',
    );
    if($all){
        return $list;
    }
    return $list[$type];
}

/**
 * 根据用户ID获取用户昵称
 * @param  integer $uid 用户ID
 * @return string       用户昵称
 */
function get_nickname($uid = 0){
    static $list;
    if(!($uid && is_numeric($uid))){ //获取当前登录用户名
        return session('username');
    }
    
    /* 获取缓存数据 */
    if(empty($list)){
        $list = cache('sys_user_nickname_list');
    }

    /* 查找用户信息 */
    $key = "u{$uid}";
    if(isset($list[$key])){ //已缓存，直接使用
        $name = $list[$key];
    } else { //调用接口获取用户信息
        $info = db('rbac_user')->field('username')->find($uid);
        if($info !== false && $info['username'] ){
            $nickname = $info['username'];
            $name = $list[$key] = $nickname;
            /* 缓存用户 */
            $count = count($list);
            $max   = config('USER_MAX_CACHE');
            while ($count-- > $max) {
                array_shift($list);
            }
            cache('sys_user_nickname_list', $list);
        } else {
            $name = '';
        }
    }
    return $name;
}
/**
 * 时间戳格式化
 * @param int $time
 * @return string 完整的时间显示
 * @author 
 */
function time_format($time = NULL,$format='Y-m-d H:i'){
    $time = $time === NULL ? NOW_TIME : intval($time);
    return date($format, $time);
}

// 获取数据的状态操作
function show_status_op($status) {
    switch ($status){
        case 0  : return    '启用';     break;
        case 1  : return    '禁用';     break;
        case 2  : return    '审核';       break;
        default : return    false;      break;
    }
}



/*获取属性值*/
function get_value($pid=''){
    $res=db('property_value')->where(['property_id'=>$pid])->find();
    return $res;
}

/*省份列表*/
function get_province(){
    $res = db('area')->where(['pid_code'=>1])->select();

    echo '<option value="">==请选择省==</option>';
    if ($res){
        foreach($res as $k=>$v){
            echo '<option value="'.$v['code'].'">'.$v['name'].'</option>';
        }
    }

}

/**
 * 数据转csv格式的excle
 * @param  array $data      需要转的数组
 * @param  string $header   要生成的excel表头
 * @param  string $filename 生成的excel文件名
 *      示例数组：
$data = array(
'1,2,3,4,5',
'6,7,8,9,0',
'1,3,5,6,7'
);
$header='用户名,密码,头像,性别,手机号';
 */
function create_csv($data,$header=null,$filename='simple.csv'){
    // 如果手动设置表头；则放在第一行
    if (!is_null($header)) {
        array_unshift($data, $header);
    }
    // 防止没有添加文件后缀
    //$filename=str_replace('.csv', '', $filename).'.csv';
    $filename= time().'.csv';
    ob_clean();
    Header( "Content-type:  application/octet-stream ");
    Header( "Accept-Ranges:  bytes ");
    Header( "Content-Disposition:  attachment;  filename=".$filename);
    foreach( $data as $k => $v){
        // 如果是二维数组；转成一维
        if (is_array($v)) {
            $v=implode(',', $v);
        }
        // 替换掉换行
        $v=preg_replace('/\n*/','',$v);
        // 解决导出的数字会显示成科学计数法的问题
        $v=str_replace(',', "\t,", $v);
        // 转成gbk以兼容office乱码的问题
        echo iconv('UTF-8','GBK',$v)."\t\r\n";
    }
    exit();
}

/*权限节点递归合并*/
function node_merge($node, $access = null, $pid = 0){
    $arr = array();
    foreach($node as $v){
        if(is_array($access)){
            $v['access'] = in_array($v['id'], $access) ? 1 : 0;
        }
        if($v['pid'] == $pid){
            $v['child'] = node_merge($node, $access, $v['id']);
            $arr[] =$v;
        }
    }
    return $arr;
}

/**
 *  将数组转成对象
 */
function array2object($array) {
  if (is_array($array)) {
    $obj = new StdClass();
    foreach ($array as $key => $val){
      $obj->$key = $val;
    }
  }
  else { $obj = $array; }
  return $obj;
}
/**
 *  将对象转成数组
 */
function object2array($object) {
  if (is_object($object)) {
    foreach ($object as $key => $value) {
      $array[$key] = $value;
    }
  }
  else {
    $array = $object;
  }
  return $array;
}


/*
 * 获取字典的属性名
 * $code  属性的字段
 * $value  具体的属性值
 * */
function get_name($code,$value='')
{
    if (isset($code) && !empty($code)) {
        $info = db('dataconfig')->where(['code' => $code])->field('value')->find();

        $arr = explode(';', rtrim($info['value'], ';'));
        foreach ($arr as $v) {
            $v = trim($v);
            $arry = explode(':', $v);
            $data[$arry[0]] = $arry[1];
        }
        if (!empty($value) && isset($value)) {
                return $data[$value];
        }
        return $data;
    }
    exit();
}


