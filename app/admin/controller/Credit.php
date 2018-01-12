<?php

namespace app\admin\controller;
use think\Db;
use think\Controller;


class Credit extends Base
{
    //首页
    public function index(){
        //$moneyinfo=db('moneylimit')->alias('m')->join('ym_bank b','m.belong_organization=b.id','left')->join('ym_rbac_user u','m.belong_user_id=u.id','left')->where(['m.is_del'=>0,'m.client_id'=>input('client_id')])->field('m.*,b.bankname,u.username manager')->select();
        $credit=db('credit_message')->alias('c')->join('ym_bank b','c.use_organization=b.id','left')->join('ym_rbac_user u','c.belong_user_id=u.id','left')->where(['c.is_del'=>0,'c.client_id'=>input('client_id')])->field('c.*,b.bankname,u.real_name manager')->select();
      //  $incredit=db('intable_credit')->alias('i')->join('ym_bank b','i.belong_organization=b.id','left')->where(['i.is_del'=>0,'i.client_id'=>input('client_id')])->field('i.*,b.bankname')->select();

        //$outcredit=db('outtable_credit')->where(['is_del'=>0,'client_id'=>input('client_id')])->select();
       // $this->assign('outcredit',$outcredit);

       // $this->assign('incredit',$incredit);

        $this->assign('credit',$credit);
       // $this->assign('moneyinfo',$moneyinfo);
        $this->assign('client',session('client'));
        $this->assign('controller',request()->controller());
        $this->assign('title1','辅助信息');
        $this->assign('title2','信贷信息');
        return $this->fetch();
    }

	/*添加授信用信信息*/
	public function add()
	{
		if(request()->isPost()){

			$res=model('Credit')->add(input('post.'));
			if($res==true){
				api_success('添加成功！');
			}else{
				api_error('添加失败！');
			}
		}
		$bank=db('bank')->where('is_del',0)->select();
		$this->assign("bank",$bank);
		$user=session('user');
		$id=db('bank')->where('pid',$user['bank_id'])->field('id')->select();
		$ids='';
		foreach($id as $k=>$v){
			$ids.=$v['id'].',';
		}
		$ids=$ids.$user['bank_id'];
		$where=' is_del=0 and bank_id in ('.$ids.')';

		$this->assign('build',db('rbac_user')->where($where)->select());
		//$this->assign('build',db('rbac_user')->select());
		$this->assign('client_id',input('client_id'));
		return $this->fetch();
	}
	/*  修改授信用信信息*/
	public function edit()
	{
		if(request()->isPost()){

			$res=model('Credit')->edit(input('post.'));
			if($res==true){
				api_success('修改成功！');
			}else{
				api_error('修改失败！');
			}
		}
		$credit=model('Credit')->where('id',input('id'))->find();
		$this->assign('credit',$credit);
		$bank=db('bank')->where('is_del',0)->select();
		$this->assign('build',db('rbac_user')->select());
		$this->assign("bank",$bank);
		return $this->fetch('add');
	}
	/*删除授信用信信息*/
	public function del()
	{
		$res=model('Credit')->where('id',input('id'))->update(['is_del'=>1]);
		if($res){
			$this->success('删除成功！');
		}else{
			$this->error('删除失败！');
		}
	}

}