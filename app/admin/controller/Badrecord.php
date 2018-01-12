<?php

namespace app\admin\controller;
use think\Db;
use think\Controller;


class Badrecord extends Base
{	
//	//展示不良记录
//	public function index()
//	{
//		$bad_info=db('bad_record')->alias('r')->join('user u','r.user_id=u.id','left')->field('r.*,u.username name')->where(['r.is_del'=>0,'r.client_id'=>input('client_id')])->select();
//		$this->assign('info',$bad_info);
//
//		$this->assign('client',session('client'));
//		$this->assign('title1','辅助信息');
//		$this->assign('title2','不良记录');
//		return $this->fetch();
//
//	}

	/*删除不良记录*/
	public function del()
	{
		$client_id=model('BadRecord')->where('id',input('record_id'))->field('client_id')->find();
		$bad_record=model('BadRecord')->where(['is_del'=>0,'client_id'=>$client_id])->count();
		if($bad_record==1){
			db('base_msg')->where(['is_del'=>0,'client_id'=>$client_id])->update(['bad_record'=>0]);
		}
		$res=model('BadRecord')->where('id',input('record_id'))->update(['is_del'=>1]);
		if($res){
			$this->success('删除成功！');
			//api_success('删除成功！');
		}else{
			$this->error('删除失败！');
//			api_error('删除失败！');
		}
	}
    /*添加不良记录*/
	public function add()
	{
		if(request()->isPost()){
			$res=model('BadRecord')->add(input('post.'));
			if($res==true){
				api_success('添加成功！');
			}else{
				api_error('添加失败！');
			}
		}
		$record_type=db('property_value')->field('name,value')->where('property_id',1)->select();
		$this->assign('record_type',$record_type);
		$this->assign('client_id',input('client_id'));
		$this->assign('build',db('user')->select());
		return $this->fetch();
	}
	/*编辑不良记录*/
	public function edit()
	{
		if(request()->isPost()){
			$res=model('BadRecord')->edit(input('post.'));
			if($res==true){
				api_success('修改成功！');
			}else{
				api_error('修改失败！');
			}
		}
		$record_type=db('property_value')->field('name,value')->where('property_id',1)->select();
		$this->assign('record_type',$record_type);
		$record=db('bad_record')->where(['is_del'=>0,'id'=>input('record_id')])->find();
		$this->assign('build',db('user')->select());
		$this->assign('record',$record);
		return $this->fetch('add');
	}


}