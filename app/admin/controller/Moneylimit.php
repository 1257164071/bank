<?php

namespace app\admin\controller;
use think\Db;
use think\Controller;


class Moneylimit extends Controller
{	

  /*添加客户的额度信息*/
	public function add()
	{
		if(request()->isPost()){

			$res=model('Moneylimit')->add(input('post.'));
			if($res==true){
				api_success('添加成功！');
			}else{
				api_error('添加失败！');
			}
		}
		$bank=db('bank')->where('is_del',0)->select();
		$this->assign("bank",$bank);
		$this->assign('build',db('rbac_user')->select());
		$this->assign('client_id',input('client_id'));
		return $this->fetch();
	}
   /*  修改客户 的 额度信息*/
	public function edit()
	{
		if(request()->isPost()){

			$res=model('Moneylimit')->edit(input('post.'));
			if($res==true){
				api_success('修改成功！');
			}else{
				api_error('修改失败！');
			}
		}
		$moneylimit=model('Moneylimit')->where('id',input('id'))->find();
		$this->assign('moneylimit',$moneylimit);
		$bank=db('bank')->where('is_del',0)->select();
		$this->assign('build',db('rbac_user')->select());
		$this->assign("bank",$bank);
		return $this->fetch('add');
	}
	/*删除额度信息*/
	public function del()
	{
		$res=model('Moneylimit')->where('id',input('id'))->update(['is_del'=>1]);
		if($res){
			$this->success('删除成功！');
		}else{
			$this->error('删除失败！');
		}
	}

}