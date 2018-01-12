<?php
namespace app\admin\controller;
use think\Db;
class Index extends Base
{
    /*后台主页*/
    public function index()
    {
        //统计客户总量
        // $sqlclient = "SELECT COUNT(id) AS clientnum from ym_client";
        // $resclientnum = Db::query($sqlclient);
        // $this->assign('resclientnum',$resclientnum);

        // //开通电子银行
        // $sqlebanknum = "SELECT COUNT(id)  AS ebanknum FROM ym_ebank";
        // $ebanknum = Db::query($sqlebanknum);
        // $this->assign('ebanknum',$ebanknum);
            $user = session('user');
            $loantable = get_name('select_loantable');
            $intable_credit = 'ym_loan';
            //非行长 支行长登录，不调用走势图，降低数据库压力
            if($user['role_id']!=10){
                //统计电子开通数量
                $sql1 = "SELECT *  FROM ym_sign_analyse";

                $res1 = Db::query($sql1);
                $kk = $res1[0];
                $dep1 = ['网银','短信版','客户端','WAP版','短信通','POS','快捷支付'];
                $det1 = [$kk['wangyin'],$kk['duanxinban'],$kk['kehuduan'],$kk['wap'],$kk['duanxintong'],$kk['pos'],$kk['quickpay']];
                $this->assign('dep1',json_encode($dep1));
                $this->assign('det1',json_encode($det1));
                
                //支行发放贷款排行
                $sql2 = "SELECT SUM(provide_loan_money) AS sum,belong_organization FROM  ym_loan GROUP BY belong_organization having sum > 1 ORDER BY sum desc";
                $res2 = Db::query($sql2);
                //dump($res1);die;
                $dep2 = [];
                $det2 = [];
                if ($res2){
                    foreach ($res2 as $k => $v){
                        $dep2[$k] = $v['belong_organization'];
                        $det2[$k] = $v['sum'];
                    }
                }
                //dump($res1);dump(json_encode($dep).json_encode($det));exit();
                $this->assign('dep2',json_encode($dep2));
                $this->assign('det2',json_encode($det2));

                $sql3 = "SELECT SUM(remian_money) AS sum,belong_organization FROM ym_loan GROUP BY belong_organization having sum>10000000 ORDER BY sum desc";
                $res3 = Db::query($sql3);
                //dump($res1);die;
                $dep3 = [];
                $det3 = [];
                if ($res3){
                    foreach ($res3 as $k => $v){
                        $dep3[$k] = $v['belong_organization'];
                        $det3[$k] = $v['sum'];
                    }
                }
                $this->assign('dep3',json_encode($dep3));
                $this->assign('det3',json_encode($det3));
            }
        //贷款总额
        $sqlloan = "SELECT SUM(provide_loan_money) AS loannum  FROM ".$intable_credit;
        $resloan = Db::query($sqlloan);
        $this->assign('resloan',$resloan);

        //行长和超级管理员
        if($user['role_id'] == 7 or $user['role_id'] == 13 or $user['role_id'] == 20){    
             //网格化
            $banklist = db('client')->query('select belong_organization,count(belong_organization) as count from ym_client GROUP BY belong_organization having count > 1 ORDER BY belong_organization asc');
            foreach($banklist as $k=>$v){
                $bank = db('bank')->where('id',$v['belong_organization'])->find();
                $jl_num = db('rbac_user')->where('bank_id',$v['belong_organization'])->count();
                $banklist[$k]['bankname'] = $bank['bankname'];
                $banklist[$k]['jl_num'] = $jl_num;
            }
            $this->assign('banklist',$banklist);
        }
        //支行长
        if($user['role_id'] == 9){
             $banklist = db('client')->query('select belong_organization,count(belong_organization) as count from ym_client where belong_organization ='.$user['bank_id']);
            foreach($banklist as $k=>$v){
                $bank = db('bank')->where('id',$v['belong_organization'])->find();
                $jl_num = db('rbac_user')->where('bank_id',$v['belong_organization'])->count();
                $banklist[$k]['bankname'] = $bank['bankname'];
                $banklist[$k]['jl_num'] = $jl_num;
            }
            $this->assign('banklist',$banklist);
        }  
        //客户经理
        if($user['role_id'] == 10){
            $grid=db('grid')->where(['xiaoqu_manger'=>$user['id']])->select();
            //查询客户数量
            foreach($grid as $k=>$v){
                $grid[$k]['count'] = db('client')->where('grid',$v['id'])->count('id');
            }
            $this->assign('gridlist',$grid);
        }  
        return $this->fetch();
    }

    public function test(){
        $base_msg = db('base_msg')->where('id','gt',44472)->field('id,corresponding_address')->limit(200)->order('id asc')->select();

        foreach($base_msg as $bg){
            $str = strtr($bg['corresponding_address'],array(' '=>''));
            $result = file_get_contents('http://api.map.baidu.com/geocoder/v2/?address='.$str.'&output=json&ak=Bnri1fKeSDqQ9z5G9ckvfGue&callback=showLocation');

            if(isset($result) && !empty($result)){

                $step1 = str_replace('showLocation&&showLocation(','',$result);
                $step2 = str_replace(')','',$step1);
                $step3 = json_decode($step2, true);
                if(!empty($step3['result']['location'])){
                    $data = [];
                    $data['id'] = $bg['id'];
                    $data['lng'] = $step3['result']['location']['lng'];
                    $data['lat'] = $step3['result']['location']['lat'];
                    db('base_msg')->update($data);
                }
            }
        }
        echo 'over';
    }

    /*获取地区*/
    public function region(){

        $data['pid_code'] = input('region_id');
        if (empty( $data['pid_code'])){
            exit(json_encode('<option value="">==请选择==</option>'));
        }else{
            $res = db('area')->where($data)->select();
            $res || exit(json_encode('<option value="">==请选择==</option>'));
            $str = '<option value="">==请选择==</option>';
            foreach($res as $k=>$v){
                $str .= '<option value="'.$v['code'].'">'.$v['name'].'</option>';
            }
            exit(json_encode($str));
        }
    }
    
    /*检索小区*/
    public function checkgrid(){
        if(request()->isPost())
        {
            $grid = input('grid');
            $condition = [];
            $condition['name'] = ['like',"%".$grid."%"];
            $msg = db('grid')->where($condition)->order('sort','asc')->field('id,name,sort')->select();
            $str = '';
            if(!empty($msg) && !empty($grid)){
                foreach($msg as $k=>$v){
                    $str .= '<div class="gridarea"><input type="radio" name="grid" value="'.$v['id'].'">'.$v['name'].'</div>';
                }
            }else{
                $str .= '<div class="gridarea">没到搜索到小区，请新增后再搜索</div>';
            }
            exit(json_encode($str));
        }
    }
    /*
	 * 清理缓存
	 */
    public function clearcache()
    {
        \think\Cache::clear();
        $this->success ('清理缓存成功');
    }


}
