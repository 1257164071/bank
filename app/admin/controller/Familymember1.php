<?php

namespace app\admin\controller;
use think\Db;
use think\Controller;


class Familymember extends Base
{	
	/*展示家庭成员*/
	public function index()
	{  
		$family_info=db('family_member')->alias('m')->where(['m.is_del'=>0,'m.client_id'=>input('client_id')])->join('ym_rbac_user u','u.id=m.user_id','left')->field('m.*,u.real_name builder')->select();
		$spouse_info=db('spouse')->where(['is_del'=>0,'client_id'=>input('client_id')])->select();
		$this->assign('info',$family_info);
		$this->assign('spouse_info',$spouse_info);
		$this->assign('client',session('client'));
		$this->assign('title1','辅助信息');
		$this->assign('title2','家庭成员信息');
		$this->assign('controller',request()->controller());
		return $this->fetch();
	}
/*添加成员信息*/
	public function add()
	{   if(request()->isPost()){
			$data = input('post.');
		    $result=$this->validate($data,'FamilyMember');
			if(true!==$result){
				api_error($result);
			}else{
				$info=model('FamilyMember')->add($data);

					if($info==true){
						api_success('添加成功！');
					}else{
						api_error('添加失败！');
					}
			}
		}
		$this->assign('client_id',input('client_id'));
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
		return $this->fetch();
	}
/*编辑成员信息*/
	public function  edit()
	{
		if(request()->isPost()){
			$res=model('FamilyMember')->edit(input('post.'));
			if($res==true){
				api_success('编辑成功！');
			}else{
				api_error('编辑失败！');
			}
		}
		$family=db('family_member')->where(['is_del'=>0,'id'=>input('member_id')])->find();


		$this->assign('build',db('rbac_user')->select());
		$this->assign('family',$family);
		return $this->fetch('add');
	}
	/*删除成员信息*/
	public function del()
	{
		$res=model('FamilyMember')->where('id',input('member_id'))->update(['is_del'=>1]);
		if($res){
			$this->success('删除成功！');
			//api_success('删除成功！');
		}else{
			$this->error('删除失败！');
//			api_error('删除失败！');
		}
	}
/*配偶信息的删除*/
	public  function spousedel()
	{
		$res=model('Spouse')->where(['client_id'=>input('client_id'),'is_del'=>0])->update(['is_del'=>1]);
		if($res){
			$this->success('删除成功！');
			//api_success('删除成功！');
		}else{
			$this->error('删除失败！');
//			api_error('删除失败！');
		}
	}
/*配偶信息的修改*/
	public function spouseedit()
	{

		if(request()->isPost()){
			$res=model('Spouse')->edit(input('post.'));
			if($res==true){
				api_success('编辑成功！');
			}else{
				api_error('编辑失败！');
			}
		}

		$info=model('Spouse')->where(['client_id'=>input('client_id'),'is_del'=>0])->find();
		$this->assign('info',$info);
		return $this->fetch('spouseadd');
	}
/*配偶信息的添加*/
	public function spouseadd()
	{
		if(request()->isPost()){
			$spouse=model('Spouse');
			$data=input('post.');
			$result=$this->validate($data,'Spouse');
			if(true!==$result){
				api_error($result);
			}else
			{
				$info=model('Spouse')->add($data);
				if ($info == true) {
					api_success('添加成功！');
				} else {
					api_error('添加失败！');
				}
			}

		}
		$this->assign('client_id',input('client_id'));
		return $this->fetch('spouseadd');
	}
}