<?php

namespace app\admin\controller;
use think\Db;
use think\Controller;


class Familyfund extends Base
{
  
	/*担保人列表*/
	public function index()
	{
	    
	    $client_id = input('client_id');

	    $condition = [];
	    $condition['client_id'] = $client_id;
	    
	    $clients = db('family_fund')->where(['client_id'=>$client_id])->find();
	    $this->assign('client_id',$client_id);
	    $this->assign('clients',$clients);
	    $this->assign('controller','Familyfund');
	    $this->assign('client',session('client'));
	    return $this->fetch();
	}
	

	/*添加*/
	public function add()
	{
	    if(request()->isPost()){
	         model('family_fund')->add(input('post.'));
	    }
	    $this->assign('add',1);
	    $this->assign('client_id',input('client_id'));
	    $this->assign('url',url('admin/familyfund/add'));
	    return $this->fetch();
	}
	
	/*  修改*/
	public function edit()
	{
	    if(request()->isPost()){
	        $res=model('family_fund')->edit(input('post.'));
	    }
	    $msg=db('family_fund')->where('id',input('id'))->find();
	    $this->assign('msg',$msg);
	    $this->assign('url',url('admin/familyfund/edit'));
	    return $this->fetch('add');
	}
	
	
	
	/*删除*/
	public function del()
	{
	  
	}
	
	
}