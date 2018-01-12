<?php

namespace app\admin\controller;
use think\Db;
use think\Controller;


class Incredit extends Base
{
    /*添加表内用信信息*/
    public function detail()
    {
        $loan_id = input('loan_id');
        $condition = [];
        $condition['loan_id'] = $loan_id;
        //贷款信息
        $loan = db('loan')->where(['id'=>$loan_id])->find();
        $this->assign('loan',$loan);
  
        //担保人
        $client_id = $loan['client_id'];
	    $loan_id = input('loan_id');
	    $condition = [];
	    $condition['client_id'] = $client_id;
	    $condition['loan_id'] = $loan_id;
	    $Guarantorlist = model('LoanGuarantor')->getlist($condition);
	    
	    $this->assign('client_id',$client_id);
	    $this->assign('loan_id',$loan_id);
	    $this->assign('Guarantorlist',$Guarantorlist);

	    //清收记录
	    $loan_id = input('loan_id');
	    $condition = [];
	    $condition['loan_id'] = $loan_id;
	    $backrecordlist = model('LoanBackrecord')->getlist($condition);
	    
	    //贷款信息
	   // $loan = db('intable_credit')->where(['id'=>$loan_id])->find();
	     
	    $this->assign('backrecordlist',$backrecordlist);
	   	//贷款涉诉状态
		$loan_ss_info = db('loan_ss_status')->where('loan_id',$loan_id)->find();

		$this->assign('loan_ss_info',$loan_ss_info);
        //审理情况
         $loan_shenli_info = db('loan_shenli')->where('loan_id',$loan_id)->find();
        $this->assign('loan_shenli_info',$loan_shenli_info);
        //执行情况
       $loan_zhixing_info =db('loan_zhixing')->where('loan_id',$loan_id)->find();
        $this->assign('loan_zhixing_info',$loan_zhixing_info);
        //保全情况
        $loan_baoquan_info= db('loan_baoquan')->where('loan_id',$loan_id)->select();

        $this->assign('loan_baoquan_info',$loan_baoquan_info);



        return $this->fetch();
    }
	/*添加表内用信信息*/
	public function add()
	{
		if(request()->isPost()){
			$data = input('post.');
            $data['provide_time_int'] = strtotime($data['provide_time_int']);
         	$data['arrive_time_int'] = strtotime($data['arrive_time_int']);
         
			//$res=model('Incredit')->add(input('post.'));
		    $res=$this->validate($data,'Incredit');
		    
			if(true==$res){
				$user = session('user');
				$result = db('loan')->insert($data);
				if($result){
					action_log('add_IntableCredit','IntableCredit',1,$user['id']);
					api_success('添加成功！');
				}else{
					api_error('添加失败！');
				}
			}else{
				api_error($res);
			}
		}
		$client=db('client')->where('id',input('client_id'))->find();

		$bank=db('bank')->where('is_del',0)->select();
		$this->assign("bank",$bank);
		$incredit['provide_time_int'] = time();
		$incredit['arrive_time_int'] = time();
		$incredit['settlement_time'] = time();
		$incredit['guarantee_way'] = 1;
		$incredit['loan_status'] = 1;
		$incredit['loan_using'] = 1;

		$this->assign('incredit',$incredit);

		$this->assign('add',1);
		$this->assign('business_type',get_name('business_type'));
		$this->assign('client_id',input('client_id'));
		$this->assign('card_number',input('card_number'));
		$this->assign('bank_id',$client['belong_organization']);
		return $this->fetch();
	}
	/*  修改表内用信信息*/
	public function edit()
	{
		if(request()->isPost()){
			$res=model('Incredit')->edit(input('post.'));
			if($res==true){
				api_success('修改成功！');
			}else{
				api_error('修改失败！');
			}
		}
		$incredit=db('loan')->where('id',input('id'))->find();
		$this->assign('incredit',$incredit);
		$this->assign('business_type',get_name('business_type'));
		return $this->fetch('add');
	}



	/* 真删除，删除了可以再加  */
	public function del(){
	    if(request()->isPost())
	    {
	        $id = input('id');   //get id
	        $msg = model('Incredit')->del($id);
	    }
	}
// 	public function del()
// 	{
// 		$res=model('Incredit')->where('id',input('id'))->delete();
// 		if($res){
// 			$this->success('删除成功！');
// 		}else{
// 			$this->error('删除失败！');
// 		}
// 	}
	
	/*担保人列表*/
	public function guarantorlist()
	{
	    $client_id = input('client_id');
	    $loan_id = input('loan_id');
	    $condition = [];
	    $condition['client_id'] = $client_id;
	    $condition['loan_id'] = $loan_id;
	    $msglist = model('LoanGuarantor')->getlist($condition);
	    
	    $this->assign('client_id',$client_id);
	    $this->assign('loan_id',$loan_id);
	    $this->assign('msglist',$msglist);
	    return $this->fetch();
	}
	

	/*添加担保人*/
	public function guarantoradd()
	{
	    if(request()->isPost()){
	         model('LoanGuarantor')->add(input('post.'));
	    }
	    $this->assign('add',1);
	    $this->assign('loan_id',input('loan_id'));
	    $this->assign('client_id',input('client_id'));
	    $this->assign('url',url('admin/incredit/guarantoradd'));
	    return $this->fetch();
	}
	
	/* 修改表内用信信息*/
	public function guarantoredit()
	{
	    if(request()->isPost()){
	        $res=model('LoanGuarantor')->edit(input('post.'));
	    }
	    $msg=db('loan_guarantor')->where('id',input('id'))->find();
	    $this->assign('msg',$msg);
	    $this->assign('url',url('admin/incredit/guarantoredit'));
	    return $this->fetch('guarantoradd');
	}
	
	
	
	/*删除表内用信信息*/
	public function guarantordel()
	{
	    $res=model('LoanGuarantor')->del(input('id'));
	}
	
	/*清收列表*/
	public function backrecordlist()
	{
	    if(request()->isPost()){
	        $data = input('post.');
	        $data['qs_sign_date'] = strtotime($data['qs_sign_date']);
	        $res=db('loan')->where('id',input('id'))->update($data);
	        if($res==true){
	            api_success('添加成功！');
	        }else{
	            api_error('添加失败！');
	        }
	    }
	    $loan_id = input('loan_id');
	    $condition = [];
	    $condition['loan_id'] = $loan_id;
	    $msglist = model('LoanBackrecord')->getlist($condition);
	    
	    //贷款信息
	    $loan = db('loan')->where(['id'=>$loan_id])->find();
	    $this->assign('loan',$loan);
	     
	    $this->assign('loan_id',$loan_id);
	    $this->assign('msglist',$msglist);
	    $this->assign('url',url('admin/incredit/backrecordlist'));
	    return $this->fetch('backrecordlist');
	}
	
	
	/*添加清收*/
	public function backrecordadd()
	{
	    if(request()->isPost()){
	        $data = input('post.');
	        $data['addtime'] = time();
	        model('LoanBackrecord')->add($data);
	    }
	    
	    $msg['backtime'] = date("Y-m-d",time());
	    $this->assign('add',1);
	    $this->assign('msg',$msg);
	    $this->assign('loan_id',input('loan_id'));
	    $this->assign('url',url('admin/incredit/backrecordadd'));
	    return $this->fetch('backrecordadd');
	}
	
	/*修改清收*/
	public function backrecordedit()
	{
	    if(request()->isPost()){
	        $res=model('LoanBackrecord')->edit(input('post.'));
	    }
	    $msg=db('loan_backrecord')->where('id',input('id'))->find();
	    $msg['back_time'] = date("Y-m-d",$msg['back_time']);
	    $this->assign('msg',$msg);
	    $this->assign('url',url('admin/incredit/backrecordedit'));
	    return $this->fetch('backrecordadd');
	}
	
	/*删除清收*/
	public function backrecorddel()
	{
	    $res=model('LoanBackrecord')->del(input('id'));
	}
	
	/*不良贷款尽职调查表*/
	public function check()
	{
	    $client_id = input('client_id');
	    $loan_id = input('loan_id');
	    $condition = [];
	    $condition['loan_id'] = $loan_id;
	    //贷款信息
	    $loan = db('loan')->where(['id'=>$loan_id])->find();
	    $client = db('client')->where(['id'=>$client_id])->find(); 
	    $base_msg = db('base_msg')->where(['client_id'=>$client_id])->find();
	    $fund = db('family_fund')->where(['client_id'=>$client_id])->find();
	    //清收记录
	    $LoanBackrecordlist = model('LoanBackrecord')->getlist($condition);
	    
	    $condition['client_id'] = $client_id;
	    //担保人
	    $LoanGuarantorlist = model('LoanGuarantor')->getlist($condition);
	    $this->assign('loan',$loan);
	    $this->assign('fund',$fund);
	    $this->assign('client',$client);
	    $this->assign('base_msg',$base_msg);
	    $this->assign('Backrecordcount',count($LoanBackrecordlist)+1);
	    $this->assign('LoanBackrecordlist',$LoanBackrecordlist);
	    $this->assign('LoanGuarantor',$LoanGuarantorlist);
	    return $this->fetch();
	}
	
	/*贷款涉诉状态*/

    public function dkss_add1()
	{
		if(request()->isPost()){
			$res=model('Incredit')->add(input('post.'));
// 			if($res==true){
// 				api_success('添加成功！');
// 			}else{
// 				api_error('添加失败！');
// 			}
		}

		$loan_id = input('loan_id');

		$client=db('client')->where('id',input('client_id'))->find();

		$bank=db('bank')->where('is_del',0)->select();
		$this->assign("bank",$bank);
		$incredit['provide_time_int'] = time();
		$incredit['arrive_time_int'] = time();
		$incredit['settlement_time'] = time();
		$incredit['guarantee_way'] = 1;
		$incredit['loan_status'] = 1;
		$incredit['loan_using'] = 1;

		$this->assign('incredit',$incredit);

		$this->assign('add',1);
//		$this->assign('loan',$loan);
		$this->assign('client_id',input('client_id'));
		$this->assign('bank_id',$client['belong_organization']);
		return $this->fetch();
	}

	public function dkss_edit()
	{
		if(request()->isPost()){
			$res=model('Incredit')->edit(input('post.'));
			if($res==true){
				api_success('修改成功！');
			}else{
				api_error('修改失败！');
			}
		}
		$incredit=db('loan')->where('id',input('id'))->find();
		$this->assign('incredit',$incredit);
		return $this->fetch('add');
	}



	/* 真删除，删除了可以再加  */
	public function dkss_del(){
	    if(request()->isPost())
	    {
	        $id = input('id');   //get id
	        $msg = model('Incredit')->del($id);
	    }
	}

	/*贷款涉诉状态添加*/
	public function  dkss_add()
   {
       if(request()->isPost()){
            $post=input('post.');
            $post['sqshencha']=strtotime($post['sqshencha']);
            $res= db('loan_ss_status')->insert($post);
            if($res){
                api_success('添加成功！');
            }else{
                api_error('添加失败!');
            }
       }
        $this->assign('url',url('dkss_add'));
        return $this->fetch();
    }
/*
 * 贷款涉诉状态删除
 * */
    public function loan_ss_del(){
        $id=input('id');
        if(is_numeric($id) &&!empty($id)){
            $res = db('loan_ss_status')->where('id',$id)->delete();
            if($res){
                $this->success('删除成功!');
            }else{
                $this->error('删除失败!');
            }
        }
    }

    /*
     * 贷款涉诉状态编辑
     * */
    public function loan_ss_edit(){
        $id=input('id');
        if(request()->isPost()){
            $post=input('post.');
            $post['sqshencha']=strtotime($post['sqshencha']);

            $res =db('loan_ss_status')->where('id',$post['id'])->update($post);
            if($res){
                api_success('修改成功！');
            }else{
                api_error('修改失败!');
            }
        }
        if(is_numeric($id) &&!empty($id)){
            $loan_ss_info = db('loan_ss_status')->where('id',$id)->find();
            $this->assign('loan_ss_info',$loan_ss_info);
        }
        $this->assign('url',url('loan_ss_edit'));
        return $this->fetch('dkss_add');
    }
	/*执行情况*/
	public  function loan_zhixing_add()
	{
		if(request()->isPost()){
			$post=input('post.');

			$post['sszx_time']=strtotime($post['sszx_time']);
			$post['zjbczx_time']=strtotime($post['zjbczx_time']);
			$post['zxsd_time']=strtotime($post['zxsd_time']);

			$post['hfzx_time']=strtotime($post['hfzx_time']);
			$post['zjzx_time']=strtotime($post['zjzx_time']);


			$res= db('loan_zhixing')->insert($post);
			if($res){
				api_success('添加成功！');
			}else{
				api_error('添加失败!');
			}
		}
		$this->assign('url',url('loan_zhixing_add'));
		return $this->fetch();

	}
	/*
     执行情况删除

    */
	public function loan_zhixing_del(){
		$id=input('id');
		if(is_numeric($id) &&!empty($id)){
			$res = db('loan_zhixing')->where('id',$id)->delete();
			if($res){
				$this->success('删除成功!');
			}else{
				$this->error('删除失败!');
			}
		}

	}
	/*执行情况修改*/
	public function loan_zhixing_edit()
	{
		$id=input('id');
		if(request()->isPost()){
			$post=input('post.');
			$post['sszx_time']=strtotime($post['sszx_time']);
			$post['zjbczx_time']=strtotime($post['zjbczx_time']);
			$post['zxsd_time']=strtotime($post['zxsd_time']);

			$post['hfzx_time']=strtotime($post['hfzx_time']);
			$post['zjzx_time']=strtotime($post['zjzx_time']);

			$res =db('loan_zhixing')->where('id',$post['id'])->update($post);
			if($res){
				api_success('修改成功！');
			}else{
				api_error('修改失败!');
			}
		}
		if(is_numeric($id) &&!empty($id)){
			$loan_zhixing_info = db('loan_zhixing')->where('id',$id)->find();
			$this->assign('loan_zhixing_info',$loan_zhixing_info);
		}
		$this->assign('url',url('loan_zhixing_edit'));
		return $this->fetch('loan_zhixing_add');
	}
	/*保全情况  添加*/
	public  function loan_baoquan_add(){
		if(request()->isPost()){
			$post=input('post.');

			$post['cfqr_time']=strtotime($post['cfqr_time']);
			$post['cfzr_time']=strtotime($post['cfzr_time']);
			$post['xfzr_time']=strtotime($post['xfzr_time']);
			$res= db('loan_baoquan')->insert($post);
			if($res){
				api_success('添加成功！');
			}else{
				api_error('添加失败!');
			}
		}

		$this->assign('cfcc_type',get_name('cfcc_type'));
		$this->assign('url',url('loan_baoquan_add'));
		return $this->fetch();

	}
	/*保全情况删除*/
	public function loan_baoquan_del()
	{
		$id=input('id');
		if(is_numeric($id) &&!empty($id)){
			$res = db('loan_baoquan')->where('id',$id)->delete();
			if($res){
				$this->success('删除成功!');
			}else{
				$this->error('删除失败!');
			}
		}
	}
	/*保全情况编辑*/
	public function loan_baoquan_edit()
	{
		$id=input('id');
		if(request()->isPost()){
			$post=input('post.');
			$post['cfqr_time']=strtotime($post['cfqr_time']);
			$post['cfzr_time']=strtotime($post['cfzr_time']);
			$post['xfzr_time']=strtotime($post['xfzr_time']);

			$res =db('loan_baoquan')->where('id',$post['id'])->update($post);
			if($res){
				api_success('修改成功！');
			}else{
				api_error('修改失败!');
			}
		}
		if(is_numeric($id) &&!empty($id)){
			$loan_baoquan_info = db('loan_baoquan')->where('id',$id)->find();
			$this->assign('loan_baoquan_info',$loan_baoquan_info);
		}
		$this->assign('cfcc_type',get_name('cfcc_type'));
		$this->assign('url',url('loan_baoquan_edit'));
		return $this->fetch('loan_baoquan_add');
	}
/*审理情况 添加*/
	public function loan_shenli_add()
	{
		if(request()->isPost()){
			$post=input('post.');

			$post['lian_time']=strtotime($post['lian_time']);
			$post['ktsd_time']=strtotime($post['ktsd_time']);
			$post['kt_time']=strtotime($post['kt_time']);
			$post['pj_time']=strtotime($post['pj_time']);
			$post['pjsd_time']=strtotime($post['pjsd_time']);
			$post['ss_time']=strtotime($post['ss_time']);
			$post['pjsx_time']=strtotime($post['pjsx_time']);
			// dump($post);
			// die;

			$res= db('loan_shenli')->insert($post);
			if($res){
				api_success('添加成功！');
			}else{
				api_error('添加失败!');
			}
		}

		$this->assign('account_status',get_name('account_status'));
		$this->assign('url',url('loan_shenli_add'));
		return $this->fetch();

	}
	/*审理情况 编辑*/
	public function loan_shenli_edit()
	{
		$id=input('id');
		if(request()->isPost()){
			$post=input('post.');
			$post['lian_time']=strtotime($post['lian_time']);
			$post['ktsd_time']=strtotime($post['ktsd_time']);
			$post['kt_time']=strtotime($post['kt_time']);
			$post['pj_time']=strtotime($post['pj_time']);
			$post['pjsd_time']=strtotime($post['pjsd_time']);
			$post['ss_time']=strtotime($post['ss_time']);
			$post['pjsx_time']=strtotime($post['pjsx_time']);

			$res =db('loan_shenli')->where('id',$post['id'])->update($post);
			if($res){
				api_success('修改成功！');
			}else{
				api_error('修改失败!');
			}
		}
		if(is_numeric($id) &&!empty($id)){
			$loan_shenli_info = db('loan_shenli')->where('id',$id)->find();
			$this->assign('loan_shenli_info',$loan_shenli_info);
		}
		$this->assign('account_status',get_name('account_status'));
		$this->assign('url',url('loan_shenli_edit'));
		return $this->fetch('loan_shenli_add');
	}
	/*审理情况  删除*/
	public function loan_shenli_del()
	{
		$id=input('id');
		if(is_numeric($id) &&!empty($id)){
			$res = db('loan_shenli')->where('id',$id)->delete();
			if($res){
				$this->success('删除成功!');
			}else{
				$this->error('删除失败!');
			}
		}
	}
	/*保全情况详情*/
	public function loan_baoquan_detail()
	{
		$id=input('id');
		if(is_numeric($id)&&isset($id))
		{
			$loan_baoquan_info = db('loan_baoquan')->where('id',$id)->find();
			$this->assign('loan_baoquan_info',$loan_baoquan_info);
			return $this->fetch();
		}
	}
}