<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/5
 * 存款信息
 */

namespace app\admin\controller;
use think\Controller;
use app\admin\model\Bank;
use think\Db;

class Deposit  extends Base
{
/*存款信息*/
    public function index()
    {
        $deposit_info=db('deposit')->alias('d')->join('client c','d.client_id=c.id')->join('ym_rbac_user u','d.lancun_worker=u.id')->join('ym_bank bk','d.bank_id=bk.id')->where(['d.is_del'=>0,'d.client_id'=>input('client_id')])->field('d.*,c.name,c.card_number,u.real_name,bk.bankname')->select();
		$this->assign('info',$deposit_info);

		$this->assign('client',session('client'));
		$this->assign('title1','辅助信息');
		$this->assign('title2','存款信息');
		$this->assign('controller',request()->controller());
		return $this->fetch();
    }

    /*添加存款信息*/
    public function add()
    {
        if(request()->isPost()){
            $res = model('Deposit')->add(input('post.','','trim'));
            
//             if($res[]==true){
//                 api_success('添加成功！');
//             }else{
//                 api_error('添加失败！');
//             }
        }
        //查询组织银行列表
        $Bank = new Bank();
        $banklist = $Bank->getlist();
        $this->assign('banklist',$banklist);
        
        $user = session('user');
        
        //揽储员工
        $bankpid = $Bank->bankpid($user['bank_id']);
        $lanchu_workers = db('rbac_user')->where(['status'=>1,'bank_id'=>['in',$bankpid],'role_id'=>['in',[7,9,10]],'id'=>['not in',[6,9,12,269]]])->field('id,real_name')->select();
        $this->assign('lanchu_workers',$lanchu_workers);
        
//      echo db('rbac_user')->getLastSql();
//      dump($bank_users);die;
        $deposit['opening_time'] = date('Y-m-d',time());
        $deposit['save_time'] = date('Y-m-d',time());
        $this->assign('deposit',$deposit);
        $this->assign('client_id',input('client_id'));
        $this->assign('url',url('admin/deposit/add'));
        return $this->fetch();
    }
    /*修改存款信息*/
    public function edit()
    {
        if(request()->isPost()){
            $res = model('Deposit')->edit(input('post.','','trim'));
            if($res==true){
                api_success('修改成功！');
            }else{
                api_error('修改失败！');
            }
        }
        //查询组织银行列表
        $Bank = new Bank();
        $banklist = $Bank->getlist();
        $this->assign('banklist',$banklist);
        
        $user = session('user');
        
        //揽储员工
        $bankpid = $Bank->bankpid($user['bank_id']);
        $lanchu_workers = db('rbac_user')->where(['status'=>1,'bank_id'=>['in',$bankpid],'role_id'=>19])->field('id,real_name')->select();
        $this->assign('lanchu_workers',$lanchu_workers);

        $deposit=model('Deposit')->where('id',input('deposit_id'))->find();
        $deposit['save_time'] = date('Y-m-d',$deposit['save_time']);
        $deposit['opening_time'] = date('Y-m-d',$deposit['opening_time']);
        $this->assign('deposit',$deposit);
        $this->assign('url',url('admin/deposit/addedit'));
        return $this->fetch('add');
    }
    
    /* 真删除，删除了可以再加  */
    public function del(){
        if(request()->isPost())
        {
            $id = input('id');   //get id
            $msg = model('Deposit')->del($id);
        }
    }
    
    /*删除存款信息*/
    public function dels()
    {
        $id=input('deposit_id');
        if(is_numeric($id)&&isset($id)){
            $res=model('Deposit')->where('id',$id)->update(['is_del'=>1]);
            if($res){
                $this->success('删除成功！');
            }else{
                $this->error('删除失败！');
            }
            exit();
        }
    
    }
}