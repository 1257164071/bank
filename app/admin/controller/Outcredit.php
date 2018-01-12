<?php

namespace app\admin\controller;
use think\Db;
use think\Controller;


class Outcredit extends Controller
{
	/*添加表外用信信息*/
	public function add()
	{
		if(request()->isPost()){

			$res=model('Outcredit')->add(input('post.'));
			if($res==true){
				api_success('添加成功！');
			}else{
				api_error('添加失败！');
			}
		}
		$bank=db('bank')->where('is_del',0)->select();
		$this->assign("bank",$bank);

		$this->assign('client_id',input('client_id'));
		return $this->fetch();
	}
	/*  修改表外用信信息*/
	public function edit()
	{
		if(request()->isPost()){

			$res=model('Outcredit')->edit(input('post.'));
			if($res==true){
				api_success('修改成功！');
			}else{
				api_error('修改失败！');
			}
		}
		$outcredit=model('Outcredit')->where('id',input('id'))->find();
		$this->assign('outcredit',$outcredit);
		$bank=db('bank')->where('is_del',0)->select();

		$this->assign("bank",$bank);
		return $this->fetch('add');
	}



	/*删除表外用信信息*/
	public function del()
	{
		$res=model('Outcredit')->where('id',input('id'))->update(['is_del'=>1]);
		if($res){
			$this->success('删除成功！');
		}else{
			$this->error('删除失败！');
		}
	}

}