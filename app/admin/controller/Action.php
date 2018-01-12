<?php
// +----------------------------------------------------------------------
// 行为日志
// +----------------------------------------------------------------------

namespace app\admin\controller;

class Action extends Base {

    /**
     * 用户行为列表
     * 
     */
    public function listAction(){
        //获取列表数据
        $Action =   \think\Db::name('Action')->where(array('status'=>array('gt',-1)));
        $list   =   $this->lists($Action);
        int_to_string($list);
        // 记录当前列表页的cookie
        Cookie('__forward__',$_SERVER['REQUEST_URI']);
        $this->assign('_list', $list);
        $this->assign('meta_title','用户行为');
        return $this->fetch();
    }

    /**
     * 新增行为
     * 
     */
    public function addAction(){
        $this->assign('meta_title','新增行为');
        $this->assign('data',null);
        return $this->fetch('editaction');
    }

    /**
     * 编辑行为
     * 
     */
    public function editAction(){
        $id = input('id');
        empty($id) && $this->error('参数不能为空！');
        $data = \think\Db::name('Action')->field(true)->find($id);

        $this->assign('data',$data);
        $this->assign('meta_title', '编辑行为');
        return $this->fetch('editaction');
    }

    /**
     * 更新行为
     * 
     */
    public function saveAction(){
        $validate = validate('action');
        if(!$validate->check(input())){
            return $this->error($validate->getError());
        }
        $res = model('Action')->updates();
        if(!$res){
            $this->error(model('Action')->getError());
        }else{
            $this->success(isset($res['id'])?'更新成功！':'新增成功！', Cookie('__forward__'));
        }
    }
    /**
     * 通用分页列表数据集获取方法
     *
     *  可以通过url参数传递where条件,例如:  index.html?name=asdfasdfasdfddds
     *  可以通过url空值排序字段和方式,例如: index.html?_field=id&_order=asc
     *  可以通过url参数r指定每页数据条数,例如: index.html?r=5
     *
     * @param sting|Model  $model   模型名或模型实例
     * @param array        $where   where查询条件(优先级: $where>$_REQUEST>模型设定)
     * @param array|string $order   排序条件,传入null时使用sql默认排序或模型属性(优先级最高);
     *                              请求参数中如果指定了_order和_field则据此排序(优先级第二);
     *                              否则使用$order参数(如果$order参数,且模型也没有设定过order,则取主键降序);
     *
     * @param boolean      $field   单表模型用不到该参数,要用在多表join时为field()方法指定参数
     * 
     *
     * @return array|false
     * 返回数据集
     */
    protected  function lists ($model,$where=array(),$order='',$field=true){
        $options    =   array();
        $REQUEST    =  (array)input('request.');
        if(is_string($model)){
            $model  =   \think\Db::name($model);
        }
        $pk         =   $model->getPk();

        if($order===null){
            //order置空
        }else if ( isset($REQUEST['_order']) && isset($REQUEST['_field']) && in_array(strtolower($REQUEST['_order']),array('desc','asc')) ) {
            $options['order'] = '`'.$REQUEST['_field'].'` '.$REQUEST['_order'];
        }elseif( $order==='' && empty($options['order']) && !empty($pk) ){
            $options['order'] = $pk.' desc';
        }elseif($order){
            $options['order'] = $order;
        }
        unset($REQUEST['_order'],$REQUEST['_field']);

        if(empty($where)){
            $where  =   array('status'=>array('egt',0));
        }
        if( !empty($where)){
            $options['where']   =   $where;
        }

        $total        =   $model->where($options['where'])->count();

        if( isset($REQUEST['r']) ){
            $listRows = (int)$REQUEST['r'];
        }else{
            $listRows = config('list_rows') > 0 ? config('list_rows') : 20;
        }
        // 分页查询
        $list = $model->where($options['where'])->order($order)->field($field)->paginate($listRows);
        // 获取分页显示
        $page = $list->render();
        // 模板变量赋值
        $this->assign('_page', $page);
        $this->assign('_total',$total);
        if($list && !is_array($list)){
            $list=$list->toArray();
        }
        return $list['data'];//TODO 可以返回带分页的$list
    }

    /**
     * 设置一条或者多条数据的状态
     * $Model 模型名称
     */
    public function setStatus($Model=false){
        if(empty($Model)){
            $Model=request()->controller();
        }
        $ids    =   input('ids/a');
        $status =   input('status');
        if(empty($ids)){
            $this->error('请选择要操作的数据');
        }
        $map['id'] = array('in',$ids);
        switch ($status){
            case -1 :
                $this->delete($Model, $map, array('success'=>'删除成功','error'=>'删除失败'));
                break;
            case 0  :
                $this->forbid($Model, $map, array('success'=>'禁用成功','error'=>'禁用失败'));
                break;
            case 1  :
                $this->resume($Model, $map, array('success'=>'启用成功','error'=>'启用失败'));
                break;
            default :
                $this->error('参数错误');
                break;
        }
    }
    /**
     * 条目假删除
     * @param string $model 模型名称,供D函数使用的参数
     * @param array  $where 查询时的where()方法的参数
     * @param array  $msg   执行正确和错误的消息 array('success'=>'','error'=>'', 'url'=>'','ajax'=>false)
     *                     url为跳转页面,ajax是否ajax方式(数字则为倒数计时秒数)
     * * 
     */
    protected function delete ( $model , $where = array() , $msg = array( 'success'=>'删除成功！', 'error'=>'删除失败！')) {
        $data['status']  =   -1;
        $this->editRow(   $model , $data, $where, $msg);
    }
    /**
     * 禁用条目
     * @param string $model 模型名称,供D函数使用的参数
     * @param array  $where 查询时的 where()方法的参数
     * @param array  $msg   执行正确和错误的消息,可以设置四个元素 array('success'=>'','error'=>'', 'url'=>'','ajax'=>false)
     *                     url为跳转页面,ajax是否ajax方式(数字则为倒数计时秒数)
     * * 
     */
    protected function forbid ( $model , $where = array() , $msg = array( 'success'=>'状态禁用成功！', 'error'=>'状态禁用失败！')){
        $data    =  array('status' => 0);
        $this->editRow( $model , $data, $where, $msg);
    }

    /**
     * 恢复条目
     * @param string $model 模型名称,供D函数使用的参数
     * @param array  $where 查询时的where()方法的参数
     * @param array  $msg   执行正确和错误的消息 array('success'=>'','error'=>'', 'url'=>'','ajax'=>false)
     *                     url为跳转页面,ajax是否ajax方式(数字则为倒数计时秒数)
     * * 
     */
    protected function resume (  $model , $where = array() , $msg = array( 'success'=>'状态恢复成功！', 'error'=>'状态恢复失败！')){
        $data    =  array('status' => 1);
        $this->editRow(   $model , $data, $where, $msg);
    }
    /**
     * 对数据表中的单行或多行记录执行修改 GET参数id为数字或逗号分隔的数字
     *
     * @param string $model 模型名称,供M函数使用的参数
     * @param array  $data  修改的数据
     * @param array  $where 查询时的where()方法的参数
     * @param array  $msg   执行正确和错误的消息 array('success'=>'','error'=>'', 'url'=>'','ajax'=>false)
     *                     url为跳转页面,ajax是否ajax方式(数字则为倒数计时秒数)
     * * 
     */
    final protected function editRow ( $model ,$data, $where , $msg=false ){
        $id=input('id/a');
        if(!empty($id)){
            $id    = array_unique($id);
            $id    = is_array($id) ? implode(',',$id) : $id;
            //如存在id字段，则加入该条件
            $fields = db()->getTableFields(array('table'=>config('database.prefix').$model));

            if(in_array('id',$fields) && !empty($id)){
                $where = array_merge( array('id' => array('in', $id )) ,(array)$where );
            }
        }

        $msg   = array_merge( array( 'success'=>'操作成功！', 'error'=>'操作失败！', 'url'=>'' ,'ajax'=>var_export(Request()->isAjax(), true)) , (array)$msg );

        if( db($model)->where($where)->update($data)!==false ) {
            $this->success($msg['success']);
        }else{
            $this->error($msg['error']);
        }
    }

    /**
     * 行为日志列表
     * 
     */
    public function actionLog(){
        //获取列表数据
//         $map['status']    =   array('gt', -1);
//         $list   =   $this->lists('ActionLog', $map);
//         int_to_string($list);
        
        $list = db('action_log')->alias('al')->join("action a",'al.action_id = a.id')->join("rbac_user r",'al.user_id = r.id')->field('al.*,a.name,a.title,r.real_name')->order('al.create_time','desc')->paginate(20);
       
        $this->assign('_list', $list);
        return $this->fetch();
    }

    /**
     * 查看行为日志
     * 
     */
    public function edit($id = 0){
        empty($id) && $this->error('参数错误！');

        $info = db('ActionLog')->alias('al')->join("rbac_user r",'al.user_id = r.id')->field('al.*,r.real_name')->find($id);
        $this->assign('info', $info);
        $this->assign('meta_title', '查看行为日志');
        return $this->fetch();
    }

    /**
     * 删除日志
     * @param mixed $ids
     * 
     */
    public function remove($ids = 0){
        empty($ids) && $this->error('参数错误！');
        if(is_array($ids)){
            $map['id'] = array('in', $ids);
        }elseif (is_numeric($ids)){
            $map['id'] = $ids;
        }
        $res = \think\Db::name('ActionLog')->where($map)->delete();
        if($res !== false){
            $this->success('删除成功！');
        }else {
            $this->error('删除失败！');
        }
    }

    /**
     * 清空日志
     */
    public function clear(){
        $res =  \think\Db::name('ActionLog')->where('1=1')->delete();
        if($res !== false){
            $this->success('日志清空成功！');
        }else {
            $this->error('日志清空失败！');
        }
    }

}