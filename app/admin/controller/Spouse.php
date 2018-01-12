<?php

namespace app\admin\controller;
use think\Db;
use think\Controller;
//use  app\admin\model\Spouse;

class Spouse extends Base
{	
	public function index(){

		$spouse_info=model('Spouse')->where('is_del',0)->select();
		$data=array(
			'total'=>Db::name('spouse_message')->where('is_del',0)->count(),
			'rows'=>$spouse_info
		);
		echo json_encode($data);

	}

	//删除配偶的基本信息
	public function delSpouse()
	{
		if(request()->isPost()){
			$ids=input('ids');
			$res=Db::name('spousemsg')->where('id','in',$ids)->update(['is_del'=>1]);
		 	returnApisuccess('删除成功！！！',$res);

		}
	}

	//添加配偶的基本信息
	public function addspousemsg()
	{
		$add_info=model('Spouse')->add(input('post.'));
		if($add_info==true){
			returnApisuccess('添加成功！');
		}else{
			returnApiError('添加失败！');
		}
	}

	// //修改传输的数据
	public function spousemsg()
	{
		$info=Db::name('spouse_message')->where(['id'=>input('id')])->select();
		$json=json_encode($info);
		echo $json;
	}
	public function editspousemsg()
	{
		if(request()->isPost()){
			$data=input('post.');
			$edit_info=model('Spouse')->edit($data);
			if($edit_info==true){
				returnApisuccess('修改成功！');
			}else{
				returnApiError('修改失败！');
			}
		}
	}


}