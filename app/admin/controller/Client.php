<?php

namespace app\admin\controller;
use think\Db;
use think\Controller;
use app\admin\model\Bank;


class Client extends Base
{

	/*客户列表*/
	public function clientlist()
	{
	   //$where['is_del']=0;
	   $where = '';
	   $post=input('get.');
	   if(!empty($post)){

			$start_add_time=input('start_add_time');
			$end_add_time=input('end_add_time');
			$card_number=trim(input('card_number'));
			$name=trim(input('client_name'));
			$belong_organization=input('belong_organization');
			$belong_manger=trim(input('belong_manger'));
			$client_grade=input('client_grade');
			$class=input('class');
			$card_class1708=input('card_class1708');
			$wangyin=input('wangyin');
			$duanxinban=input('duanxinban');
			$kehuduan=input('kehuduan');
			$wap=input('wap');
			$quickpay=input('quickpay');
			$duanxintong=input('duanxintong');
			$sex=input('sex');
			//升降级明细
			$sj_warning=input('sj_warning');
			//揽存renyuan
			$lancun_man=input('lancun_man');
			//地址
			$gridname=input('gridname');
			//年龄
			$age=input('age');
		


			//$post=input('post.');

			//日期查询
			if (!empty($start_add_time)){
				$where['add_time'] = ['>=', strtotime($start_add_time)];
			}
			if (!empty($end_add_time)) {
				$where['add_time'] = ['<=',strtotime($end_add_time)];
			}
			if (!empty($start_add_time) && !empty($end_add_time)) {
				$where['add_time'] = ['between', [strtotime($start_add_time), strtotime($end_add_time)]];
			}
			//客户名称查询
			if(!empty($name)){
				$where['name']=['like',"%".$name."%"];
			}
			//客户的证件号码
			
			if(!empty($card_number)){
				$where['card_number']=$card_number;

			}
			//性别查询
			if(!empty($sex)){
				if($sex=='nan'){
					$where['sex']=1;
				}elseif ($sex=='nv') {
					$where['sex']=2;
				}

				
			}
			//年龄搜索
			if(!empty($age)){
				if($age==1){
					$where['age']=['<=',30];
				}
				if($age==2){
					$where['age']=[['>',30],['<=',40],'and'];
				}
				if($age==3){
					$where['age']=[['>',40],['<=',50],'and'];
					
				}
				if($age==4){
					$where['age']=[['>',50],['<=',60],'and'];
					
				}
				if($age==5){
					$where['age']=['>',60];
				}

			}
			//升降级预警
			if(!empty($sj_warning)){
				if($sj_warning==1){
					$where['sj_warning']='正常';
				}
				if($sj_warning==2){
					$where['sj_warning']='即将升';
				}
				if($sj_warning==3){
					$where['sj_warning']='即将降';
				}
			}
			//所属客户经理
			if(!empty($lancun_man)){
				$where['lancun_man']=['like','%'.$lancun_man.'%'];
			}
			//地址
			if(!empty($gridname)){
				$where['gridname']=['like','%'.$gridname.'%'];
			}
			//vip等级查询
			if(is_numeric($class)){
					$where['class']=$class;
			}
			//等级201708
			if(is_numeric($card_class1708)){
				$where['card_class1708']=$card_class1708;
			}
			//网银
			if(!empty($wangyin)&&isset($wangyin)){
				if(!is_numeric($wangyin)){
					$where['wangyin']=0;
				}else{
					$where['wangyin']=['>',0];
				}
				//$where['wangyin']=$post['wangyin'];
				
			}
			//短信版
			if(!empty($duanxinban)&&isset($duanxinban)){
				if(!is_numeric($duanxinban)){
					$where['duanxinban']=0;
				}else{
					$where['duanxinban']=['>',0];
				}
			}
			//客户端
			if(!empty($kehuduan)&&isset($kehuduan)){
				if(!is_numeric($kehuduan)){
					$where['kehuduan']=0;
				}else{
					$where['kehuduan']=['>',0];
				}
			}
			
			//wap
			if(!empty($wap)&&isset($wap)){
				if(!is_numeric($wap)){
					$where['wap']=0;
				}else{
					$where['wap']=['>',0];
				}
			}
			
			//短信通
			if(!empty($duanxintong)&&isset($duanxintong)){
				if(!is_numeric($duanxintong)){
					$where['duanxintong']=0;
				}else{
					$where['duanxintong']=['>',0];
				}
			}
			
			//pos
			if(!empty($pos)&&isset($pos)){
				if(!is_numeric($pos)){
					$where['pos']=0;
				}else{
					$where['pos']=['>',0];
				}
			}
			
			//快捷支付
			if(!empty($quickpay)&&isset($quickpay)){
				if(!is_numeric($quickpay)){
					$where['quickpay']=0;
				}else{
					$where['quickpay']=['>',0];
				}
			}
			
			//客户评级查询
			if(!empty($client_grade)&&$client_grade!=0){
				$where['client_grade']=$client_grade;
			}
			//所属机构查询
			if(!empty($belong_organization)){

				$where['belong_organization']=$belong_organization;
			}
			//所属客户经理查询
			if(!empty($belong_manger)){
				$manager_id=db('rbac_user')->where(['status'=>0,'user_name'=>['like',"%".$belong_manger."%"]])->field('id')->find();
				$where['belong_user_id']=$manager_id;
			}
			$this->assign('post',$post);
        }

        //业务经理只能看到自己的客户
		$user = session('user');

        if($user['role_id']==10){
			//$where['belong_user_id'] = $user['id'];
			$mygrid = db('grid')->where('xiaoqu_manger',$user['id'])->column('id');
            $where['grid'] = array('in',$mygrid);
		}
      
		if($user['role_id']==9){
           // $bank_manager = db('rbac_user')->
			$bank_jingli = db('rbac_user')->where('bank_id',$user['bank_id'])->column('id');
            $gridwhere['xiaoqu_manger'] = array('in',$bank_jingli);
			$mygrid = db('grid')->where($gridwhere)->column('id');
            $where['grid'] = array('in',$mygrid);
		}

		 $count=db('client')->where($where)->count('id');

		if(isset($post['names'])){
			
			$data=db('client')->where($where)->field('id,client_number,name,card_type,card_number,sex,nation_id,address,tel_number,client_grade,current_address,issue_office,lng,lat,gridtype,gridname,lou,danyuan,hu')->limit(10000)->order('id','desc')->select();
			if(!empty($data)){

				$this->client_export($data);
			}else{
				$this->error('没有数据导出，请重试');
//				api_success('没有数据导出，请重试');
			}
		}else{
			$clients=Db::name('client')->where($where)->field('id,client_number,name,sex,tel_number,card_number,gridname,sign_website_name,wangyin,duanxinban,kehuduan,wap,duanxintong,quickpay,fuhe_card,citiao_card,card_class1512,card_class1612,card_class1710,sj_warning,cunkuan_section,lancun_man,lng,lat,age')->order('grid desc,tel_number desc')->paginate(20,false,['query'=>$post]);
			//echo db('client')->getlastsql();die;
		}
         
		$this->assign('page',$clients->render());
		$bank=db('bank')->where('is_del',0)->select();
		$this->assign("bank",$bank);
		$this->assign('class',get_name('class'));
		$this->assign('card_class1708',get_name('card_class1708'));
		$this->assign('title1','客户信息管理');
		$this->assign('title2','客户信息列表');
		$this->assign('clients',$clients);
		$this->assign('count',$count);
		return $this->fetch();

	}
    //业务经理只能看到自己的客户
	public function myclient()
	{
		$user = session('user');
        $where['belong_user_id'] = $user['id'];

		$count = db('client')->where($where)->count('id');
		$clients = db('client')->where($where)->field('id,client_number,name,sex,sex_name,card_number,gridname')->order('id','desc')->paginate(20);

		$this->assign('page',$clients->render());
		$this->assign('title1','客户信息管理');
		$this->assign('title2','客户信息列表');
		$this->assign('clients',$clients);
		$this->assign('count',$count);
		return $this->fetch();
	}

	public function caiji(){
        $res = db('grid')->order('id','desc')->select();
        $this->assign("gridlist",$res);
        return $this->fetch();
	}

	/*添加客户*/
	public function clientadd(){
		$user = session('user');
		if(request()->isPost()){
			$data=input('post.');
			$data['belong_user_id'] = $user['id'];
			$gridname = db('grid')->where('id',$data['grid'])->value('name');
			$card_number = db('client')->where('card_number',$data['card_number'])->value('card_number');
			if(!empty($card_number)){
				$this->error('此客户和身份证已经存在');
			}
			$data['gridname'] = $gridname;
			$res=$this->validate($data,'Client');
			if(true==$res){
				$result=model('Client')->add($data);
				if($result){
					$user=session('user');
					action_log('add_client','Client',1,$user['id']);
					api_success('添加成功！');
				}else{
					api_error('添加失败！');
				}
			}else{
				api_error($res);
			}
		}
		$grid = input('grid');
	    $gridmsg = db('grid')->where('id',$grid)->find();
	    $this->assign('gridmsg',$gridmsg);
	
		//查询组织银行列表
		// $Bank = new Bank();
		// $banklist = $Bank->getlist();
		// $this->assign('banklist',$banklist);

		// $user=session('user');
		// $id=db('bank')->where('pid',$user['bank_id'])->field('id')->select();
		// $ids='';
		// foreach($id as $k=>$v){
		// 	$ids.=$v['id'].',';
		// }

		//todo行长可以看所有 经理看本行 liuxl
		//$where = '';
		//$ids=$ids.$user['bank_id'];
		//$where='bank_id in ('.$ids.')';
        //银行和客户经理
		// $banks = db('bank')->where(['is_del'=>0])->field('id,bankname')->select();
  //       foreach($banks as $k=>$b){
  //           $banks[$k]['manager'] = db('rbac_user')->where(['bank_id'=>$b['id'],'role_id'=>array('in',array(7,9,10)),'id'=>array('not in',array(6,9,12,269))])->field('id,real_name')->select();
  //       }

		//$this->assign('manger',db('rbac_user')->where($where)->select());
		$this->assign('url',url('clientadd'));
		// $this->assign('user',$user);
		//$this->assign('banks',$banks);
		$this->assign('type',get_name('type'));
		$this->assign('live_status',get_name('live_status'));
		$this->assign('physical_condition',get_name('physical_condition'));
		$this->assign('highest_education',get_name('highest_education'));
		$this->assign('highest_degree',get_name('highest_degree'));
		return $this->fetch();
	}

	/*身份信息编辑*/
	public function edit()
	{
		$user=session('user');
		if(request()->isPost()){
			$data = input('post.');
			$gridname = db('grid')->where('id',$data['grid'])->value('name');
			$data['gridname'] = $gridname;
			$res=model('client')->edit($data);
			if($res==true){
				action_log('edit_client','Client',1,$user['id']);
				api_success('修改成功！');
			}else{
				api_error('没有任何修改');
			}
		}
		$client_id=input('client_id');
		if(!empty($client_id)&&is_numeric($client_id)){
			$client=db('client')->where('id',$client_id)->find();
			if(!empty($client)){
				if($client['tel_number'] == 0){
					$client['tel_number'] = '';
				}
				if($client['born_date'] == 0){
					$client['born_date'] = '';
				}
				if($client['valid_time'] == 0){
					$client['valid_time'] = '';
				}
				if($client['married_record_date'] == 0){
					$client['married_record_date'] = '';
				}
			}
			$this->assign('client',$client);
		}
		// $Bank = new Bank();
		// $banklist = $Bank->getlist();
		// $this->assign('banklist',$banklist);
		 //银行和客户经理
		// $banks = db('bank')->where(['is_del'=>0])->field('id,bankname')->select();
  //       foreach($banks as $k=>$b){
  //           $banks[$k]['manager'] = db('rbac_user')->where(['bank_id'=>$b['id'],'role_id'=>array('in',array(7,9,10)),'id'=>array('not in',array(6,9,12,269))])->field('id,real_name')->select();
  //       }
  //       $this->assign('banks',$banks);
		$this->assign('url',url('edit'));
		$this->assign('type',get_name('type'));
		$this->assign('live_status',get_name('live_status'));
		$this->assign('physical_condition',get_name('physical_condition'));
		$this->assign('highest_education',get_name('highest_education'));
		$this->assign('highest_degree',get_name('highest_degree'));
		return $this->fetch('clientadd');
	}
	
    /*查看客户详情*/
    public function clientdetail()
	{
		$card_number=input('card_number');
		if(!empty($card_number)&&is_numeric($card_number)){
			$client=db('client')->where('card_number',$card_number)->find();
			session('client',$client);
			if(isset($client['province'])){
			    $client['province_name'] = db('area')->where(['code'=>$client['province']])->value('name');
    			$client['city_name'] = db('area')->where(['code'=>$client['city']])->value('name');
    			$client['area_name'] = db('area')->where(['code'=>$client['area']])->value('name');
    			$client['grid_name'] = db('grid')->where(['id'=>$client['grid']])->value('name');
			}
			$this->assign('client',$client);
			// $conduct=db('conduct')->where('client_id',$client_id)->find();
			// $this->assign('conduct',$conduct);

		}
		//特色信息
		if(!empty($client['card_number'])){
			$tese=db('ClientTese')->where('card_number',$client['card_number'])->find();
			$this->assign('tese',$tese);
		}
		//财产信息
			$finance_info =db('financial_info')->where('card_number',$card_number)->find();
			$this->assign('finance_info',$finance_info);

		$this->assign('title1','客户信息管理');
		$this->assign('title2','客户信息详情');
		$this->assign('controller',request()->controller());

		 return $this->fetch('');
	}

	//删除客户
    public function del(){
        $id=input('client_id');
        if(is_numeric($id)&&!empty($id)) {
            $ok = false;
            $ok = Db::name('client')->where('id', $id)->delete();
            if($ok>0){
                $user=session('user');
                action_log('del_client','Client',1,$user['id']);
                $this->success('删除成功！');
            }else{
                $this->error('稍后重试！');
            }
        }
    }
  
	//批量删除客户人员
	public function delpatch()
	{
		$id=input('post.');
		$ids=implode(",",$id['id']);
		// 启动事务
		Db::startTrans();
		try {
			$res1=Db::name('client')->where('id','in', $ids)->update(['is_del' => 1]);
			$res2=Db::name('base_msg')->where('client_id','in', $ids)->update(['is_del' => 1]);
			$res3=Db::name('other_message')->where('client_id','in', $ids)->update(['is_del' => 1]);

			if ($res1&&$res2&&$res3){
				// 提交事务
				Db::commit();
				$ok = true;
			}else{
				throw new \Exception('异常消息');
			}

		} catch (\Exception $e) {
			// 回滚事务
			Db::rollback();

		}
		if($ok){
			$this->success('删除成功！', 'clientlist');
		}else{
			$this->error('稍后重试！');
		}

	}

	/*图片路径写入数据库*/
	public function uploadpost(){
		if(request()->isPost()){
			$res=db('client')->where('id',input('id'))->update(['pic_url'=>input('pic_url')]);
			if($res){
				api_success('添加头像成功！');
				//
			}else{
				api_error('添加头像失败！');
			}
		}
		return $this->fetch('pic_upload');
	}

	/**上传客户头像*/
    public  function pic_upload()
	{
		if(request()->isPost()){
			$file = request()->file('file');
			$filename=date('Ymd',time()).input('client_id').rand('1000','9999');

			$info = $file->move(ROOT_PATH . 'public/uploads/clients',$filename,false);
			if($info){
				$user=session('user');
				action_log('pic_upload','Client',1,$user['id']);
				api_success('添加成功！',['pic_url'=>'/public/uploads/clients/'.$info->getSaveName()]);
	//
			}else{
				// 上传失败获取错误信息
				api_error($file->getError()) ;
			}
		}
	    return $this->fetch();

	}

	
/*  存款信息单表  筛选*/
	public function deposit(){
		//查询组织银行列表
		$Bank = new Bank();
		$banklist = $Bank->getlist();
		$this->assign('banklist',$banklist);
		//$this->assign('manger',db('rbac_user')->select());
		///$this->assign('client_grade',get_name('client_grade'));
		$this->assign('deposit_type',get_name('deposit_type'));
		$this->assign('client_grade',get_name('client_grade'));
		$this->assign('title1','客户信息管理');
		$this->assign('title2','存款信息筛选');
		return $this->fetch();


	}
	public function depositres()
	{
		$post=input('get.');
		if(isset($post['names'])&&$post['names']!='undefined'){
			$selects = ' deposit.id,';
			$selects .= str_replace('-', '.', rtrim($post['names'], ','));
			//搜索的字段转换为数组
			$arr = explode(',', $selects);
			foreach ($arr as $k => $v) {
				$arry = explode('.', $v);
				$data[$k] = $arry[1];
			}
		}else{
			$this->error('请选择所要展示的字段');
		}
		$where=' 1=1 and deposit.is_del=0 ';
		//开户行
		if(!empty($post['bank_id'])&&isset($post['bank_id']))
		{
			$where.=' and deposit.bank_id='.$post['bank_id'];
		}
		//账户状态
		if(!empty($post['account'])&&isset($post['account'])){
			$where.=' and deposit.account="'.$post['account'].'"';
		}

		
		//存款类型
		if(!empty($post['deposit_type'])&&isset($post['deposit_type']))
		{
			$where.=' and deposit.deposit_type='.$post['deposit_type'];
		}
		//存款时间
		if(!empty($post['start_save_time'])){
			$where.=' and deposit.save_time >='.strtotime($post['start_save_time']);
		}
		if(!empty($post['end_save_time'])){
			$where.=' and deposit.save_time <='.strtotime($post['end_save_time']);
		}
		if(!empty($post['end_save_time'])&&!empty($post['start_save_time'])){
			$where.=' and deposit.save_time >='.strtotime($post['start_save_time']).' and deposit.save_time <='.strtotime($post['end_provide_time']);
		}
		//存款金额
		if(!empty($post['start_save_amt'])){
			$where.=' and deposit.save_amt >='.$post['start_save_amt'];
		}
		if(!empty($post['end_debt_money'])){
			$where.=' and deposit.save_amt <='.$post['end_save_amt'];
		}
		if(!empty($post['start_save_amt'])&&!empty($post['end_save_amt'])){
			$where.=' and deposit.save_amt >='.$post['start_save_amt'].' and deposit.save_amt <='.$post['end_save_amt'];
		}
		$info= db('deposit')->alias('deposit')->where($where)->paginate(10,false,['query'=>$post]);
		

		
		$this->assign('page',$info->render());
		$info=json_decode(json_encode($info),true);
		$res=$info['data'];
		foreach($data as $k=>$v){
			//$name[$k]=get_name('search_code',$v);
			if($v=='save_time'){
				foreach($res as $k=>$vo){
					$res[$k]['save_time']=date('Y-m-d',$vo['save_time']);
				}
			}
			if($v=='account_status'){
				foreach($res as $k=>$vo){
					$res[$k]['account_status']=$vo['account_status']? '冻结':'正常';
				}
			}
			if($v=='bank_id'){
				foreach($res as $k=>$vo){
					if(!empty($vo['bank_id'])){
						$where1=' id ='.$vo['bank_id'];
						$bankname=db('bank')->where($where1)->field('bankname')->find();

						$res[$k]['bank_id']=$bankname['bankname'];
					}
				}
			}
            if($v=="deposit_type"){
                foreach($res as $k=>$vo){
                    if(!empty($vo['deposit_type'])){
                        $res[$k]['deposit_type']=get_name('deposit_type',$vo['deposit_type']);
                    }
                }
            }
			
		}

		$this->assign('where',$where);
		$this->assign('selects',$selects);
		$this->assign('data',$data);
		$this->assign('title1','客户信息管理');
		$this->assign('title2','客户查询结果');
		$this->assign('result',$res);
		return $this->fetch();

	} 

	/*
	 *
	 * 存款信息筛选
	 *
	 * */

	public function depositselect(){

		//查询组织银行列表
		$Bank = new Bank();
		$banklist = $Bank->getlist();
		$this->assign('banklist',$banklist);
		$this->assign('manger',db('rbac_user')->select());
		$this->assign('client_grade',get_name('client_grade'));
		$this->assign('deposit_type',get_name('deposit_type'));
		$this->assign('client_grade',get_name('client_grade'));
		$this->assign('title1','客户信息管理');
		$this->assign('title2','存款信息筛选');
		return $this->fetch();
	}
	public function depositresult($where,$selects,$post){

		$selects.=' ,case when base.is_del is null then "0" else base.is_del end bdel,case when spouse.is_del is null then "0" else spouse.is_del end sdel ,case when other.is_del is null then "0" else other.is_del end  odel';
		$where.=' and deposit.is_del=0';
		$having='odel=0 and sdel=0 and bdel=0';
//
		$sql=db('client')->alias('c')
			->fetchSql(true)
			->join("ym_base_msg base ",'c.id=base.client_id','left')
			->join('ym_other_message other','c.id=other.client_id','left')
			->join('ym_spouse spouse','c.id=spouse.client_id','left')
			->join('ym_deposit deposit','c.id=deposit.client_id','left')
			->where($where)->field($selects)->having($having)
			->select();

//		$total=db('client')->alias('c')->join([$depositsql=> 'deposit'],'c.id=deposit.client_id','left')->count('deposit.id');

		$total=db('client')->alias('c')->join('ym_deposit deposit','c.id=deposit.client_id','left')->where(['c.is_del'=>0,'deposit.is_del'=>0])->count('deposit.id');
		$res=db('client')->alias('c')
//			->fetchSql(true)
			->join("ym_base_msg base ",'c.id=base.client_id','left')
			->join('ym_other_message other','c.id=other.client_id','left')
			->join('ym_spouse spouse','c.id=spouse.client_id','left')
			->join('ym_deposit deposit','c.id=deposit.client_id','left')
			->where($where)->field($selects)->having($having)
//			->select();
			->paginate(10,$total,[
				'query'=>$post
			]);
//		dump($res);
//		die;
		//->limit(0,10)->select();

			$info=['res'=>$res,'sql'=>$sql,'total'=>$total];


		return $info;

	}
		/*
	 * 贷款筛选单表查询
	 * 2017.8.31
	 * */
	public function loan(){
        $count = db('loan')->count('id');
		$incredit = db('loan')->field('id,business_number,client_number,client_name,card_number,provide_time_int,loan_money,remian_money,use_rate,account_status_int,arrive_time_int')->order('provide_time_int desc')->paginate(20);
        $this->assign('incredit',$incredit);

        $this->assign('page',$incredit->render());
        $this->assign('count',$count);
         //信用等级
		$this->assign('credit_class',get_name('credit_class'));
		//获取业务种类
		$this->assign('business_type',get_name('business_type'));
		//科目号名称
		$this->assign('subject_number',get_name('subject_number'));
		//利率执行方式
		$this->assign('rate_runmode',get_name('rate_runmode'));
		//贷款账户形态
		$this->assign('account_status',get_name('account_status'));
		$this->assign('provide_type',get_name('provide_type'));
		$this->assign('loan_using',get_name('loan_using'));

		$this->assign('loan_status',get_name('loan_status'));
		$this->assign('guarantee_way',get_name('guarantee_way'));
		$this->assign('client_grade',get_name('client_grade'));
		$this->assign('title1','客户信息管理');
		$this->assign('title2','贷款信息筛选');

		return $this->fetch();
	}
	public function loanres(){
		$post=input('get.');
		$field = 'id,business_number,client_number,client_name,card_number,provide_time_int,loan_money,remian_money,use_rate,account_status_int,arrive_time_int';
		$where='1 = 1';
		//客户名称
		if(!empty($post['client_name'])){
			$where.=' and client_name ="'.$post['client_name'].'"';
		}
		//证件号码
		if(!empty($post['card_number'])){
			$where.=' and card_number="'.$post['card_number'].'"';
		}
		//账户的状态
		if(!empty($post['account_status'])){
			$where.=' and account_status_int='.$post['account_status'];
		}
		//贷款用途
		if(!empty($post['loan_using'])){
			$where.=' and loan_using='.$post['loan_using'];
		}
		//贷款金额
		if(!empty($post['start_remian_money'])){
			$where.=' and remian_money >='.$post['start_remian_money'];
		}
		if(!empty($post['end_remian_money'])){
			$where.=' and remian_money <='.$post['end_remian_money'];
		}
		if(!empty($post['start_remian_money'])&&!empty($post['end_remian_money'])){
			$where.=' and remian_money >='.$post['start_remian_money'].' and remian_money <='.$post['end_remian_money'];
		}
		//担保方式
		if(!empty($post['guarantee_way'])){
			$where.=' and guarantee_way='.$post['guarantee_way'];
		}
		//贷款发放日期
		if(!empty($post['start_provide_time'])){
			$where.=' and provide_time >='.strtotime($post['start_provide_time']);
		}
		if(!empty($post['end_provide_time'])){
			$where.=' and provide_time <='.strtotime($post['end_provide_time']);
		}
		if(!empty($post['end_provide_time'])&&!empty($post['start_provide_time'])){
			$where.=' and provide_time >='.strtotime($post['start_provide_time']).' and provide_time <='.strtotime($post['end_provide_time']);
		}


		//贷款到期日期
		if(!empty($post['start_arrive_time'])){
			$where.=' and arrive_time >='.strtotime($post['start_arrive_time']);
		}
		if(!empty($post['end_arrive_time'])){
			$where.=' and arrive_time <='.strtotime($post['end_arrive_time']);
		}
		if(!empty($post['end_arrive_time'])&&!empty($post['start_arrive_time'])){
			$where.=' and arrive_time >='.strtotime($post['start_arrive_time']).' and arrive_time <='.strtotime($post['end_arrive_time']);
		}
		//欠息金额
		if(!empty($post['start_debt_money'])){
			$where.=' and debt_money >='.$post['start_debt_money'];
		}
		if(!empty($post['end_debt_money'])){
			$where.=' and debt_money <='.$post['end_debt_money'];
		}
		if(!empty($post['start_debt_money'])&&!empty($post['end_debt_money'])){
			$where.=' and debt_money >='.$post['start_debt_money'].' and debt_money <='.$post['end_debt_money'];
		}
		//发放类型
		if(!empty($post['provide_type'])){
			$where.=' and provide_type ='.$post['provide_type'];
		}
		//业务种类
		if(!empty($post['business_type'])&&!empty($post['business_type'])){
			$where.=' and business_type='.$post['business_type'];
		}
//		信用等级
		if(!empty($post['credit_class'])&&!empty($post['credit_class'])){
			$where.=' and credit_class='.$post['credit_class'];
		}
		//贷款账号
		if(!empty($post['loan_account'])&&!empty($post['loan_account'])){
			$where.=' and loan_account="'.$post['loan_account'].'"';
		}
		//扣款账号
		if(!empty($post['koukuan_account'])&&!empty($post['koukuan_account'])){
			$where.=' and koukuan_account="'.$post['koukuan_account'].'"';
		}
		//科目号名称
		if(!empty($post['subject_number'])&&!empty($post['subject_number'])){
			$where.=' and subject_number='.$post['subject_number'];
		}
		//客户号
		if(!empty($post['client_number'])&&!empty($post['client_number'])){
			$where.=' and client_number='.$post['client_number'];
		}
		//借据号
		if(!empty($post['ious_number'])&&!empty($post['ious_number'])){
			$where.=' and ious_number='.$post['ious_number'];
		}
		//贷款形态（五级）
		if(!empty($post['five_loan_form'])&&!empty($post['five_loan_form'])){
			$where.=' and five_loan_form='.$post['five_loan_form'];
		}
		//贷款形态（十级）
		if(!empty($post['ten_loan_form'])&&!empty($post['ten_loan_form'])){
			$where.=' and ten_loan_form='.$post['ten_loan_form'];
		}
		//利率执行方式
		if(!empty($post['rate_runmode'])&&!empty($post['rate_runmode'])){
			$where.=' and rate_runmode='.$post['rate_runmode'];
		}
		//首贷日
		if(!empty($post['start_firstloan_time'])){
			$where.=' and firstloan_time >='.strtotime($post['start_firstloan_time']);
		}
		if(!empty($post['end_firstloan_time'])){
			$where.=' and firstloan_time <='.strtotime($post['end_firstloan_time']);
		}
		if(!empty($post['end_firstloan_time'])&&!empty($post['start_firstloan_time'])){
			$where.=' and firstloan_time >='.strtotime($post['start_firstloan_time']).' and firstloan_time <='.strtotime($post['end_firstloan_time']);
		}
		//主办客户经理
		if(!empty($post['main_manager'])&&!empty($post['main_manager'])){
			$where.=' and main_manager="'.$post['main_manager'].'"';
		}
			//业务编号
		if(!empty($post['business_number'])){
			$where.=" and business_number ='".trim($post['business_number'])."'";
		}
		//合同金额
		if(!empty($post['start_contract_money'])){
			$where.=' and loan_money >='.$post['start_contract_money'];
		}
	
		if(!empty($post['end_contract_money'])){
			$where.=' and loan_money <='.$post['end_contract_money'];
		}
		if(!empty($post['start_contract_money'])&&!empty($post['end_contract_money'])){
			$where.=' and loan_money >='.$post['start_contract_money'].' and loan_money <='.$post['end_contract_money'];
		}
		//发放金额
		// if(!empty($post['start_provide_money'])){
		// 	$where.=' and provide_loan_money >='.$post['start_provide_money'];
		// }
		// if(!empty($post['end_provide_money'])){
		// 	$where.=' and provide_loan_money <='.$post['end_provide_money'];
		// }
		if(!empty($post['start_provide_money'])&&!empty($post['end_provide_money'])){
			$where.=' and provide_loan_money >='.$post['start_provide_money'].' and provide_loan_money <='.$post['end_provide_money'];
		}

		$count = db('loan')->where($where)->count('id');
		$loan_money = db('loan')->where($where)->sum('loan_money');
		$remian_money = db('loan')->where($where)->sum('remian_money');
		$info = db('loan')->where($where)->order('provide_time_int desc')->paginate(15,false,['query'=>$post]);
		$sql = db('loan')->field('id,business_number,client_number,client_name,card_number,provide_time_int,loan_money,remian_money,use_rate,account_status_int,arrive_time_int')->where($where)->order('provide_time_int desc')->limit(40000)->select();
		
		$this->assign('page',$info->render());
		$info=json_decode(json_encode($info),true);
		$res=$info['data'];

		$this->assign('where',$where);
		//$this->assign('selects',$selects);
		$this->assign('count',$count);
		$this->assign('loan_money',$loan_money);
		$this->assign('remian_money',$remian_money);
		$this->assign('field',$field);
		$this->assign('title1','客户信息管理');
		$this->assign('title2','客户查询结果');
		$this->assign('loanlist',$res);
		return $this->fetch();
	}
	/*
	 *
	 *贷款信息筛选
	 *
	 * */

	public function loanselect(){

		//查询组织银行列表
		$Bank = new Bank();
		$banklist = $Bank->getlist();
		$this->assign('banklist',$banklist);

        ////信用等级
		$this->assign('credit_class',get_name('credit_class'));
		//		获取业务种类
		$this->assign('business_type',get_name('business_type'));

		//科目号名称
		$this->assign('subject_number',get_name('subject_number'));
		//利率执行方式
		$this->assign('rate_runmode',get_name('rate_runmode'));
		//贷款账户形态
		$this->assign('account_status',get_name('account_status'));
		$this->assign('provide_type',get_name('provide_type'));
//		$this->assign('manger1',db('rbac_user')->select());
		$this->assign('manger',db('rbac_user')->select());
		$this->assign('loan_using',get_name('loan_using'));

		$this->assign('loan_status',get_name('loan_status'));
		$this->assign('guarantee_way',get_name('guarantee_way'));
		$this->assign('client_grade',get_name('client_grade'));
		$this->assign('title1','客户信息管理');
		$this->assign('title2','贷款信息筛选');

		return $this->fetch();
	}
	public function loanresult($where,$selects,$post){

		$selects.=' ,case when base.is_del is null then "0" else base.is_del end bdel,case when spouse.is_del is null then "0" else spouse.is_del end sdel ,case when other.is_del is null then "0" else other.is_del end  odel';
		$where.=' and intable.is_del=0';
		$having='odel=0 and sdel=0 and bdel=0';
//
		$sql=db('client')->alias('c')
			->fetchSql(true)
			->join("ym_base_msg base ",'c.id=base.client_id','left')
			->join('ym_other_message other','c.id=other.client_id','left')
			->join('ym_spouse spouse','c.id=spouse.client_id','left')
			->join('ym_intable_credit intable','c.id=intable.client_id','left')
			->where($where)->field($selects)->having($having)
			->select();


		$total=10000;
		$res=db('client')->alias('c')
//			->fetchSql(true)
			->join("ym_base_msg base ",'c.id=base.client_id','left')
			->join('ym_other_message other','c.id=other.client_id','left')
			->join('ym_spouse spouse','c.id=spouse.client_id','left')
			->join('ym_intable_credit intable','c.id=intable.client_id','left')
			->where($where)->field($selects)->having($having)
//			->select();
			->paginate(10,$total,[
				'query'=>$post
			]);


		$info=[
			'res'=>$res,
			'sql'=>$sql,
			'total'=>$total
		];
		return $info;

	}
	/*
 *
 *签约信息筛选
 *
 * */

	public function signselect(){
		//查询组织银行列表
		$Bank = new Bank();
		$banklist = $Bank->getlist();
		$this->assign('banklist',$banklist);
		//签约类型
		$this->assign('sign_type',get_name('sign_type'));
		$this->assign('client_grade',get_name('client_grade'));
		$this->assign('manger',db('rbac_user')->select());
		$this->assign('title1','客户信息管理');
		$this->assign('title2','签约信息筛选');

		return $this->fetch();
	}

	public function signresult($where,$selects,$post){
		$selects.=' ,case when base.is_del is null then "0" else base.is_del end bdel,case when spouse.is_del is null then "0" else spouse.is_del end sdel ,case when other.is_del is null then "0" else other.is_del end  odel';
		$where.=' and sign.is_del=0';
		$having='odel=0 and sdel=0 and bdel=0';
//
		$sql=db('client')->alias('c')
			->fetchSql(true)
			->join("ym_base_msg base ",'c.id=base.client_id','left')
			->join('ym_other_message other','c.id=other.client_id','left')
			->join('ym_spouse spouse','c.id=spouse.client_id','left')
			->join('ym_sign sign','c.id=sign.client_id','left')
			->where($where)->field($selects)->having($having)
			->select();
//		$total=db('client')->alias('c')->join([$depositsql=> 'deposit'],'c.id=deposit.client_id','left')->count('deposit.id');

		$total=db('client')->alias('c')->join('ym_sign sign','c.id=sign.client_id','left')->where(['c.is_del'=>0,'sign.is_del'=>0])->count('sign.id');
		$res=db('client')->alias('c')
//			->fetchSql(true)
			->join("ym_base_msg base ",'c.id=base.client_id','left')
			->join('ym_other_message other','c.id=other.client_id','left')
			->join('ym_spouse spouse','c.id=spouse.client_id','left')
			->join('ym_sign sign','c.id=sign.client_id','left')
			->where($where)->field($selects)->having($having)
//			->select();
			->paginate(10,$total,[
				'query'=>$post
			]);

		$info=['res'=>$res,'sql'=>$sql,'total'=>$total];
		return $info;

	}
   /*客户筛选*/
	public function clientselect()
	{

		//查询组织银行列表
		$Bank = new Bank();
		$banklist = $Bank->getlist();
		$this->assign('banklist',$banklist);

////信用等级
		$this->assign('credit_class',get_name('credit_class'));
		//		获取业务种类
		$this->assign('business_type',get_name('business_type'));
		//签约类型
		$this->assign('sign_type',get_name('sign_type'));
		//科目号名称
		$this->assign('subject_number',get_name('subject_number'));
		//利率执行方式
		$this->assign('rate_runmode',get_name('rate_runmode'));
		//贷款账户形态
		$this->assign('account_status',get_name('account_status'));
		$this->assign('provide_type',get_name('provide_type'));

		$this->assign('manger',db('rbac_user')->select());
		$this->assign('loan_using',get_name('loan_using'));
		$this->assign('deposit_type',get_name('deposit_type'));
		$this->assign('loan_status',get_name('loan_status'));
		$this->assign('guarantee_way',get_name('guarantee_way'));
		$this->assign('client_grade',get_name('client_grade'));
		$this->assign('title1','客户信息管理');
		$this->assign('title2','客户条件筛选');

		$total = db('client')->count('id');
		$clients = db('client')->field('id,client_number,name,sex,card_number,tel_number,client_grade,gridname,sign_website_name,wangyin,duanxinban,kehuduan,wap,duanxintong,quickpay,fuhe_card,citiao_card,lancun_man')->order('grid desc,id desc')->paginate(20);
		
		//$info=['res'=>$clients,'sql'=>$sql,'total'=>$total];

		$this->assign('page',$clients->render());
		$this->assign('card_class1708',get_name('card_class1708'));
		$this->assign('total',$total);
        $this->assign('clients',$clients);

		return $this->fetch();
	}
	public function clientresult()
	{
		$post=input();
		$where = '1 = 1';
	
		if(!empty($post['name'])){
			$where .=' and name = "'.$post['name'].'"';
		}

		//客户经理查询
		if(!empty($post['belong_user_id'])){
			$where .=' and belong_user_id = '.$post['belong_user_id'];
		}
		//工作单位
		if(!empty($post['workunit'])){
			$where .=' and workunit like "%'.$post['workunit'].'%"';
		}
		//现住址
		if(!empty($post['current_address'])){
			$where .=' and current_address like "%'.$post['current_address'].'%"';
		}
		//婚姻状况查询

		if(isset($post['marriage_status'])&&$post['marriage_status']!=''){
			$where.=' and marriage_status='.$post['marriage_status'];
		}
		//有无子女查询
		if(isset($post['children'])&&$post['children']==0)
		{
			$where.=' and children=0';
		}elseif(isset($post['children'])&&$post['children']==1){
			$where.=' and children='.$post['children'];
		}

		
		//是否涉农查询
		if(isset($post['is_farmer'])&&$post['is_farmer']==0)
		{
			$where.=' and is_farmer=0';
		}elseif(isset($post['is_farmer'])&&$post['is_farmer']==1){
			$where.=' and is_farmer='.$post['is_farmer'];
		}
		
		//有无不良记录
		if(isset($post['bad_record'])&&$post['bad_record']==0)
		{
			$where.=' and bad_record=0';
		}elseif(isset($post['bad_record'])&&$post['bad_record']==1){
			$where.=' and bad_record='.$post['bad_record'];
		}
		
		//是否扶贫
		if(isset($post['is_poor'])&&$post['is_poor']==0)
		{
			$where.=' and is_poor=0';
		}elseif(isset($post['is_poor'])&&$post['is_poor']==1){
			$where.=' and is_poor='.$post['is_poor'];
		}
		
		//手机号
		if(!empty($post['tel_number'])&&is_numeric($post['tel_number'])){
			$where.=' and tel_number='.$post['tel_number'];
			
		}
	

		//所属机构
		if(!empty($post['belong_organization'])){
			$where.=' and belong_organization='.$post['belong_organization'];
		}
		//账户的状态
		if(!empty($post['account_status'])){
			$where.=' and lm.account_status='.$post['account_status'];
		}
		

		//证件号码
		if(!empty($post['card_number'])){
			$where.=' and card_number="'.$post['card_number'].'"';
		}
		
		//家庭总资产
		if(!empty($post['start_family_money'])){
			$where.=' and amily_money >='.$post['start_family_money'];
		}
		if(!empty($post['end_family_money'])){
			$where.=' and family_money <='.$post['end_family_money'];
		}
		if(!empty($post['start_family_money'])&&!empty($post['end_family_money'])){
			$where.=' and family_money >='.$post['start_family_money'].' and family_money <='.$post['end_family_money'];
		}
		//家庭总欠债
		if(!empty($post['start_family_debt'])){
			$where.=' and family_debt >='.$post['start_family_debt'];
		}
		if(!empty($post['end_family_debt'])){
			$where.=' and family_debt <='.$post['end_family_debt'];
		}
		if(!empty($post['start_family_debt'])&&!empty($post['end_family_debt'])){
			$where.=' and family_debt >='.$post['start_family_debt'].' and family_debt <='.$post['end_family_debt'];
		}
		//家庭年收入
		if(!empty($post['start_family_year_income'])){
			$where.=' and family_year_income >='.$post['start_family_year_income'];
		}
		if(!empty($post['end_family_year_income'])){
			$where.=' and family_year_income <='.$post['end_family_year_income'];
		}
		if(!empty($post['start_family_year_income'])&&!empty($post['end_family_year_income'])){
			$where.=' and family_year_income >='.$post['start_family_year_income'].' and family_year_income <='.$post['end_family_year_income'];
		}
		//家庭年支出
		if(!empty($post['start_family_year_spending'])){
			$where.=' and family_year_spending >='.$post['start_family_year_spending'];
		}
		if(!empty($post['end_family_year_spending'])){
			$where.=' and family_year_spending <='.$post['end_family_year_spending'];
		}
		if(!empty($post['start_family_year_spending'])&&!empty($post['end_family_year_spending'])){
			$where.=' and family_year_spending >='.$post['start_family_year_spending'].' and other.family_year_spending <='.$post['end_family_year_spending'];
		}
		//等级201708
		
		if(!empty($post['card_class1708'])){
			$where.=' and card_class1708 = '.$post['card_class1708'];
		}
		//网银

			if(!empty($post['wangyin'])&&isset($post['wangyin'])){
				if(!is_numeric($post['wangyin'])){
					$where.=' and wangyin =0';
				}else{
					$where.=' and wangyin >0 ';
				}
				//$where['wangyin']=$post['wangyin'];
				
			}
			//短信版
			if(!empty($post['duanxinban'])&&isset($post['duanxinban'])){
				if(!is_numeric($post['duanxinban'])){
					$where.=' and duanxinban =0';
				}else{
					$where.=' and duanxinban >0 ';
				}
				//$where['wangyin']=$post['wangyin'];
				
			}
			//客户端
			if(!empty($post['kehuduan'])&&isset($post['kehuduan'])){
				if(!is_numeric($post['kehuduan'])){
					$where.=' and kehuduan =0';
				}else{
					$where.=' and kehuduan >0 ';
				}
				//$where['wangyin']=$post['wangyin'];
				
			}
			//wap
			if(!empty($post['wap'])&&isset($post['wap'])){
				if(!is_numeric($post['wap'])){
					$where.=' and wap =0';
				}else{
					$where.=' and wap >0 ';
				}
				//$where['wangyin']=$post['wangyin'];
				
			}
			//短信通
			if(!empty($post['duanxintong'])&&isset($post['duanxintong'])){
				if(!is_numeric($post['duanxintong'])){
					$where.=' and duanxintong =0';
				}else{
					$where.=' and duanxintong >0 ';
				}
				//$where['wangyin']=$post['wangyin'];
				
			}
			//快捷支付
			if(!empty($post['quickpay'])&&isset($post['quickpay'])){
				if(!is_numeric($post['quickpay'])){
					$where.=' and quickpay =0';
				}else{
					$where.=' and quickpay >0 ';
				}
				//$where['wangyin']=$post['wangyin'];
				
			}
		//有效复合卡
			if (!empty($post['fuhe_card'])) {
				if($post['fuhe_card']=='无'){
					$where.=' and fuhe_card =" "';
				}
				if($post['fuhe_card']=='有'){
					$where.= ' and fuhe_card="有"';
				}
			}
			if (!empty($post['citiao_card'])) {
				if($post['citiao_card']=='无'){
					$where.=' and citiao_card =" "';
				}
				if($post['citiao_card']=='有'){
					$where.= ' and citiao_card="有"';
				}
			}
			//揽存人员
			if(!empty($post['lancun_man'])){
				$where.=' and lancun_man ="'.$post['lancun_man'].'"';

			}

		$count = Db::name('client')->where($where)->count('id');
		
		$res = Db::name('client')->where($where)->field('id,client_number,name,sex,card_number,gridname,sign_website_name,wangyin,duanxinban,kehuduan,wap,duanxintong,quickpay,fuhe_card,citiao_card,lancun_man')->order('grid desc,id desc')->paginate(20,false,['query'=>$post]);
		
		$this->assign('page',$res->render());
		$this->assign('where',$where);
		$this->assign('count',$count);

		$this->assign('title1','客户信息管理');
		$this->assign('title2','客户查询结果');
		$this->assign('result',$res);
		return $this->fetch('clientresult');
	}
	/*客户筛选导出*/
	public function clientresult_export()
	{
		$post= input('post.');
		$res=db('client')->field('client_number,name,sex,card_number,nation_id,tel_number,born_date,issue_office,marriage_status,married_record_date,children,is_farmer,industry_category,live_status,is_poor,bad_record,guarantor,grid,current_address,current_postcode,highest_degree,highest_education,workunit')->where($post['where'])->limit(10000)->select();
			foreach ($res as $k => $vo) {
				$res[$k]['sex']=$vo['sex']?'男':'女';
				$res[$k]['nation_id']=$vo['nation_id']?'少数民族':'汉';
				$res[$k]['born_date']=date('Y-m-d',$vo['born_date']);
				if($vo['marriage_status']==1){
					$res[$k]['marriage_status']='已婚';

				}elseif ($vo['marriage_status']==2) {
					$res[$k]['marriage_status']='离异';
					
				}else{
					$res[$k]['marriage_status']='未婚';

				}
				$res[$k]['married_record_date']=date('Y-m-d',$vo['married_record_date']);
				$res[$k]['children']=$vo['children']?'有':'无';
				$res[$k]['is_farmer']=$vo['is_farmer']?'是':'否';
				$res[$k]['is_poor']=$vo['is_poor']?'是':'否';
				$res[$k]['bad_record']=$vo['bad_record']?'有':'无';
				$res[$k]['guarantor']=$vo['guarantor']?'是':'否';
				$res[$k]['highest_degree']=is_array(get_name('highest_degree',$vo['highest_degree']))?'无':get_name('highest_degree',$vo['highest_degree']);
				$res[$k]['highest_education']=is_array(get_name('highest_education',$vo['highest_education']))?'初中水平':get_name('highest_education',$vo['highest_education']);

			}

			$data=['客户编号','姓名','性别','身份证','民族','联系方式','出生日期','签发机关','婚姻状况','结婚登记日期','有无子女','是否涉农','固话','行业','居住状况','是否扶贫户','有无不良记录','是否担保过贷款','小区','现住地址','现住址邮编','最高学位','最高学历','工作单位'];
			create_csv($res,$data);

	}
	/*存款筛选的导出*/
	public function deposit_export(){
		$post=input('post.');
		$where= $post['where'];
		$selects=$post['selects'];
		

		//$res=\think\DB::query(input('where'));
		$res=db('deposit')->alias('deposit')->where($where)->field($selects)->select();
		
		
		$arr=explode(',',$selects);
		foreach ($arr as $k => $v) {
			$arry = explode('.', $v);
			$data[$k] = $arry[1];
		}
		foreach($data as $k=>$v){
			$name[$k]=get_name('search_code',$v);
			if($v=='save_time'){
				foreach($res as $k=>$vo){
					$res[$k]['save_time']=date('Y-m-d',$vo['save_time']);
				}
			}
			if($v=='account_status'){
				foreach($res as $k=>$vo){
					$res[$k]['account_status']=$vo['account_status']? '冻结':'正常';
				}
			}
			if($v=='bank_id'){
				foreach($res as $k=>$vo){
					if(!empty($vo['bank_id'])){
						$where1=' id ='.$vo['bank_id'];
						$bankname=db('bank')->where($where1)->field('bankname')->find();

						$res[$k]['bank_id']=$bankname['bankname'];
					}
				}
			}
            if($v=="deposit_type"){
                foreach($res as $k=>$vo){
                    if(!empty($vo['deposit_type'])){
                        $res[$k]['deposit_type']=get_name('deposit_type',$vo['deposit_type']);
                    }
                }
            }
			
		}

		
		$user=session('user');
		action_log('client_export','Client',1,$user['id']);
		create_csv($res,$name);
	}

	/*贷款筛选的导出*/
	public  function result_export(){

		$post=input('post.');
		$where= $post['where'];
		$selects=$post['selects'];

		if(isset($post['start_provide_time'])&&!empty($post['start_provide_time'])){
			$where.=' and provide_time_int >='.strtotime($post['start_provide_time']);
		}

		if(isset($post['end_provide_time'])&&!empty($post['end_provide_time'])){
			$where.=' and provide_time_int <='.strtotime($post['end_provide_time']);
		}

		if(isset($post['start_provide_time'])&&!empty($post['start_provide_time'])&&isset($post['end_provide_time'])&&!empty($post['end_provide_time'])){
			$where.=' and provide_time_int >='.strtotime($post['start_provide_time']).' and provide_time_int <='.strtotime($post['end_provide_time']);
		}
		
		$columns = array('ID','客户编号','业务号','业务种类','贷款账号','扣款账号','科目号','借据号','发放时间','发放金额','客户号','客户名称','担保方式','账户形态','账户形态','五星分类','贷款形态（五级）','贷款形态（十级）','支付方式','主营业务','企业状态','控股方式','关系人类型','到期日','到期日时间戳','期限','展期到期时间','首贷日','首贷日时间戳','贷款用途','贷款用途说明','发放类型','利率','利率执行方式','利率浮动比例%','贴息比例','贷款余额','借新还旧次数','首次借新还旧日期','已收利息','本金逾期天数','利息逾期天数','合同金额','授权金额','欠息金额','表内欠息金额','表外欠息金额','第一责任人','责任金额','担保人','主办客户经理','协办客户经理','证件号码','信用等级','结息方式','结清日期','核心入账机构','逾期本金','本金逾期次数','所属机构','网点号','行业分类','行业细分 ','贷款天数','欠息日期','日期','过期日期','日息','逾期','首次欠息日期','欠息天数','欠息次数','逾期天数','联系电话','对私移动电话','通讯地址','居住地址','比种','特色产品','办理人','添加时间','诉讼状态','诉讼案号','执行案号','其他说明','分类结果','拟清收处置措施','调查人签字','调查人签字日期');

		$res=db('loan')->where($where)->field('id,client_id,business_number,business_type,loan_account,koukuan_account,subject_number,ious_number,provide_time,provide_loan_money,client_number,client_name,guarantee_way,account_status,account_status_int,fivestar_type,five_loan_form,ten_loan_form,pay_way,main_business,enterprise_state,holding_way,relation_type,arrive_time,arrive_time_int,time_limit,zhanqi_arrive_time,firstloan_time,firstloan_time_int,loan_using,loan_using_detail,provide_type,use_rate,rate_runmode,float_rate,discount,remian_money,jxhj_number,first_jxhj_time,yishou_interest,benjin_outdate_day,interest_outdate_day,loan_money,shouquan_money,debt_money,intable_debt_money,outtable_debt_money,first_dutyofficer,duty_money,garantor,main_manager,assist_manager,card_number,credit_class,jiexi_way,jieqing_time,core_inorganization,outdate_benji,outdate_number,belong_organization,bank_id,hangye_class,hangye_xifen,loan_day,debt_time,date,outdate,daily_interest,outdate_money,first_debt_time,debt_day,debt_number,outdate_day,contact_phone,duisi_phone,corresponding_address,address,currency,tese_product,user_id,addtime')->limit(10000)->select();
		
		$user=session('user');
		action_log('client_export','Client',1,$user['id']);
		create_csv($res,$columns);
	}



/*客户列表导出*/
	public function client_export($info=array()){
		foreach($info as $k=>$v){
			$info[$k]['card_type']=$v['card_type']?'其他':'身份证';
			$info[$k]['sex']=$v['sex']?'男':'女';
			$info[$k]['nation_id']=$v['sex']?'':'汉族';
			$info[$k]['gridtype']=$v['gridtype']?'村镇':'城市';
			if(is_array(get_name('client_grade',$v['client_grade']))){
				$info[$k]['client_grade']='';
			}else{
				$info[$k]['client_grade']=get_name('client_grade',$v['client_grade']);
			}
		}
		
		$data=array('ID','客户编号','客户名称','证件类型','证件号码','性别','民族','住址','手机号','省联社评级','现住址','身份签发机关','经度','纬度','城市/村镇','小区名','楼','单元','户');
		create_csv($info,$data);
	}

	/*
	 * 客户信息的导入
	 *
	 *
	 * */
   public  function daoru()
   {
//	   echo ROOT_PATH;
//	   die;
	   return $this->fetch();
   }
  	public function clientimport()
	{
		if (request()->isPost()) {
			$file = request()->file('file');

			if ($file === null) {
				api_error('上传文件不存在或超过服务器限制');
			}
			$validate = new \think\Validate([
				['fileExt', 'fileExt:xls,xlsx,xlsm', '只允许上传后缀为xls,xlsx,xlsm的文件']
			]);
			$data = ['fileExt' => $file];
			if (!$validate->check($data)) {
				api_error($validate->getError());
				//return json_encode(['msg'=>$validate->getError(),'status'=>-1]);
			}
			$filename = date('Ymd', time()) . rand('1000', '9999');
			$info = $file->move(ROOT_PATH . 'public/temp', $filename, false);
			$filePath = $info->getPathname();
			$filePath = str_replace(ROOT_PATH, '', $filePath);
			$filePath = str_replace('\\', '/', $filePath);
			$name = $info->getFilename();
			$filePath = str_replace($name, '', $filePath);

			//return json_encode(['status' => 1, 'name' => $info->getFilename(), 'route' => $filePath]);
			$import = model('Import');
			$import->importclients( $info->getFilename(),$filePath);
		}
		exit();






  	}
  		/*
	*电子银行的删除
	***/
	public function delete()
	{
		$id=input('id');
		if(isset($id)&&!empty($id)){
			$result=db('ebank')->where(['id',$id])->delete();
			if($result){
				$this->success('删除成功！');
			}else{
				$this->error('删除失败，请重试！');
			}
		}
	}
	/**
	*电子银行导入
	*
	*/
	public function ebank_daoru(){
		 return $this->fetch();
	}

	public function ebankimport()
	{
		if (request()->isPost()) {
			$file = request()->file('file');

			if ($file === null) {
				//api_error('上传文件不存在或超过服务器限制');
				echo '<script type="text/javascript"> alert( "上传文件不存在或超过服务器限制"); parent.location.reload();</script>';
				exit();
			}
			$validate = new \think\Validate([
				['fileExt', 'fileExt:xls,xlsx,xlsm', '只允许上传后缀为xls,xlsx,xlsm的文件']
			]);
			$data = ['fileExt' => $file];
			if (!$validate->check($data)) {
				//api_error($validate->getError());
				echo '<script type="text/javascript"> alert( "'.$validate->getError().'"); parent.location.reload();</script>';
				exit();
			}
			$filename = 'ebank'.date('Ymd', time()) . rand('1000', '9999');
			$info = $file->move(ROOT_PATH . 'public/temp', $filename, false);
			$filePath = $info->getPathname();
			$filePath = str_replace(ROOT_PATH, '', $filePath);
			$filePath = str_replace('\\', '/', $filePath);
			$name = $info->getFilename();
			$filePath = str_replace($name, '', $filePath);

			//return json_encode(['status' => 1, 'name' => $info->getFilename(), 'route' => $filePath]);
			$import = model('Import');
			$import->ebankimport( $info->getFilename(),$filePath);
		}
		exit();


	}
		/*
	*电子银行

	*/
	public function ebank(){

		$where='1=1';
		$post=input('get.');
		if(!empty($post)){
				// dump($post);
				// die;
			
			//客户名称查询
			if(!empty($post['name'])&&isset($post['name'])){
				$where.='  and name like "%'.$post['name'].'%"';
				
			}
			 
			//证件号码查询
			if(!empty($post['card_number'])&&isset($post['card_number'])){
				$where.=' and card_number = "'.trim($post['card_number']).'"';
				
			}
			//网银
			if(!empty($post['wangyin'])&&isset($post['wangyin'])){
				if(!is_numeric($post['wangyin'])){
					$where.=' and wangyin = 0';
				}else{
					$where.=' and wangyin > 0';
				}
				//$where['wangyin']=$post['wangyin'];
				
			}
			//短信版
			if(!empty($post['duanxinban'])&&isset($post['duanxinban'])){
				//$where['duanxinban']=$post['duanxinban'];
				if(!is_numeric($post['duanxinban'])){
					$where.=' and duanxinban = 0';
				}else{
					$where.=' and duanxinban >0 ';
				}
			}
			//客户端
			if(!empty($post['kehuduan'])&&isset($post['kehuduan'])){
				//$where['kehuduan']=$post['kehuduan'];
				if(!is_numeric($post['kehuduan'])){
					$where.=' and kehuduan = 0';
				}else{
					$where.=' and kehuduan > 0 ';
				}
			}
			//wap
			if(!empty($post['wap'])&&isset($post['wap'])){
				if(!is_numeric($post['wap'])){
					$where.=' and wap = 0';
				}else{
				//$where['wap']=$post['wap'];
					$where.=' and wap > 0 ';
				}
			}
			//短信通
			if(!empty($post['duanxintong'])&&isset($post['duanxintong'])){
				//$where['duanxintong']=$post['duanxintong'];
				if(!is_numeric($post['duanxintong'])){
					$where.=' and duanxintong = 0';
				}else{
					$where.=' and duanxintong > 0 ';
				}
			}
			//pos
			if(!empty($post['pos'])&&isset($post['pos'])){
				//$where['pos']=$post['pos'];
				if(!is_numeric($post['pos'])){
					$where.=' and pos = 0';
				}else{
					$where.=' and pos > 0';
				}
			}
			//快捷支付
			if(!empty($post['quickpay'])&&isset($post['quickpay'])){
				//$where['quickpay']=$post['quickpay'];
				if(!is_numeric($post['quickpay'])){
					$where.=' and quickpay = 0';
				}else{
					$where.=' and quickpay > 0 ';
				}
			}
			

			$this->assign('post',$post);
        }


		if(isset($post['names'])){
			$count = Db::name('ebank')->where($where)->count();
			$info=Db::name('ebank')->where($where)->limit(50000)->select();

			if(!empty($info)){
				$this->ebank_export($info);
			}else{
				$this->error('没有数据导出，请重试');
			}
		}else{
			$count = Db::name('ebank')->where($where)->count();
			$info=Db::name('ebank')->where($where)->paginate(20,false,['query'=>$post]);
			//更新签约统计表 统计
			$res = Db::query( "SELECT SUM(wangyin) AS a ,SUM(duanxinban) AS b ,SUM(kehuduan) AS c ,SUM(wap) AS d ,SUM(duanxintong) AS e ,SUM(pos) AS f ,SUM(quickpay) AS g  FROM ym_ebank");
            $rese = $res['0'];
			$data = [];
			$data['wangyin'] = $rese['a'];
			$data['duanxinban'] = $rese['b'];
			$data['kehuduan'] = $rese['c'];
			$data['wap'] = $rese['d'];
			$data['duanxintong'] = $rese['e'];
			$data['pos'] = $rese['f'];
			$data['quickpay'] = $rese['g'];
			$analyse = db('sign_analyse')->where('id',1)->update($data);
		}

    	$this->assign('count',$count);
		$this->assign('page',$info->render());
		$this->assign('title1','客户信息管理');
		$this->assign('title2','电子银行管理');
		$this->assign('info',$info);
		return $this->fetch();
	}

	/*电子银行的导出*/ 
	public function ebank_export($info=[]){
		
			$data=array('ID','网点号','姓名','证件号码','网银','短信版','客户端','wap','短信通','pos','快捷支付','通联支付');
			create_csv($info,$data);
		
	}
    //身份证重复检查
	public function cardcheck(){
        if(request()->isPost())
        {
            $card_number = input('card_number');
           	$card = db('client')->where('card_number',$card_number)->value('card_number');
            if(!empty($card)){
                echo 1;
            }else{
                echo 0;
            }
        }
    }

    //信e贷 特色信息添加
    public function tese_add(){

		if(request()->isPost()){
			$data=input('post.');
			switch ($data['pinxing_familyrelation']) {
				case '1':
					$data['pinxing_familyrelation_name'] = '和睦';
					break;
				case '2':
					$data['pinxing_familyrelation_name'] = '一般';
					break;
				case '3':
					$data['pinxing_familyrelation_name'] = '不和睦';
					break;
				default:
				    $data['pinxing_familyrelation_name'] = '';
			}
			switch ($data['pinxing_shengyu']) {
				case '1':
					$data['pinxing_shengyu_name'] = '良好';
					break;
				case '2':
					$data['pinxing_shengyu_name'] = '一般';
					break;
				case '3':
					$data['pinxing_shengyu_name'] = '较差';
					break;
				default:
				    $data['pinxing_shengyu_name'] = '';
			}
			switch ($data['pinxing_buliang']) {
				case '1':
					$data['pinxing_buliang_name'] = '无';
					break;
				case '2':
					$data['pinxing_buliang_name'] = '酗酒';
					break;
				case '3':
					$data['pinxing_buliang_name'] = '斗殴';
					break;
				case '4':
					$data['pinxing_buliang_name'] = '赌博';
					break;
				case '5':
					$data['pinxing_buliang_name'] = '奢侈浪费';
					break;
				case '6':
					$data['pinxing_buliang_name'] = '高息借贷';
					break;
				case '7':
					$data['pinxing_buliang_name'] = '存在债务纠纷或涉诉';
					break;
				case '8':
					$data['pinxing_buliang_name'] = '受过行政出发';
					break;
				case '9':
					$data['pinxing_buliang_name'] = '其他不良行为';
					break;
				default:
				    $data['pinxing_buliang_name'] = '';
			}
			switch ($data['pinxing_chengxin']) {
				case '1':
					$data['pinxing_chengxin_name'] = '诚实守信';
					break;
				case '2':
					$data['pinxing_chengxin_name'] = '信用一般';
					break;
				case '3':
					$data['pinxing_chengxin_name'] = '信用较差';
					break;
				default:
				    $data['pinxing_chengxin_name'] = '';
			}
			switch ($data['pinxing_chuangxin']) {
				case '1':
					$data['pinxing_chuangxin_name'] = '较强';
					break;
				case '2':
					$data['pinxing_chuangxin_name'] = '一般';
					break;
				case '3':
					$data['pinxing_chuangxin_name'] = '较差';
					break;
				default:
				    $data['pinxing_chuangxin_name'] = '';
			}
			switch ($data['zhongzhi_class']) {
				case '1':
					$data['zhongzhi_class_name'] = '蔬菜';
					break;
				case '2':
					$data['zhongzhi_class_name'] = '水果';
					break;
				case '3':
					$data['zhongzhi_class_name'] = '粮食作物';
					break;
				case '4':
					$data['zhongzhi_class_name'] = '其他';
					break;
				default:
				    $data['zhongzhi_class_name'] = '';
			}
			switch ($data['zhongzhi_mode']) {
				case '1':
					$data['zhongzhi_mode_name'] = '大棚';
					break;
				case '2':
					$data['zhongzhi_mode_name'] = '露天';
					break;
				default:
				    $data['zhongzhi_mode_name'] = '';
			}
			switch ($data['yangzhi_class']) {
				case '1':
					$data['yangzhi_class_name'] = '家禽';
					break;
				case '2':
					$data['yangzhi_class_name'] = '家畜';
					break;
				case '3':
					$data['yangzhi_class_name'] = '淡水养殖';
					break;
				case '4':
					$data['yangzhi_class_name'] = '海水养殖';
					break;
				case '5':
					$data['yangzhi_class_name'] = '其他';
					break;
				default:
				    $data['yangzhi_class_name'] = '';
			}
			switch ($data['guding_work']) { 
				case '1':
					$data['guding_work_name'] = '有';
					break;
				case '2':
					$data['guding_work_name'] = '无';
					break;
				default:
				    $data['guding_work_name'] = '';
			}
			switch ($data['job_title']) { 
				case '1':
					$data['job_title_name'] = '未知';
					break;
				case '2':
					$data['job_title_name'] = '无';
					break;
				case '3':
					$data['job_title_name'] = '初级';
					break;
				case '4':
					$data['job_title_name'] = '中级';
					break;
				case '5':
					$data['job_title_name'] = '高级';
					break;
				default:
				    $data['job_title_name'] = '';
			}
			switch ($data['duty']) { 
				case '1':
					$data['duty_name'] = '未知';
					break;
				case '2':
					$data['duty_name'] = '无';
					break;
				case '3':
					$data['duty_name'] = '初级';
					break;
				case '4':
					$data['duty_name'] = '中级';
					break;
				case '5':
					$data['duty_name'] = '高级';
					break;
				default:
				    $data['duty_name'] = '';
			}
			switch ($data['duty_xifen']) { 
				case '1':
					$data['duty_xifen_name'] = '未知';
					break;
				case '2':
					$data['duty_xifen_name'] = '无';
					break;
				case '3':
					$data['duty_xifen_name'] = '初级';
					break;
				case '4':
					$data['duty_xifen_name'] = '中级';
					break;
				case '5':
					$data['duty_xifen_name'] = '高级';
					break;
				default:
				    $data['duty_xifen_name'] = '';
			}
			switch ($data['jingying_guest_type']) { 
				case '1':
					$data['jingying_guest_type_name'] = '农民';
					break;
				case '2':
					$data['jingying_guest_type_name'] = '城镇居民';
					break;
				case '3':
					$data['jingying_guest_type_name'] = '个体工商户';
					break;
				default:
				    $data['jingying_guest_type_name'] = '';
			}
			switch ($data['jingying_cdsx']) { 
				case '1':
					$data['jingying_cdsx_name'] = '自由';
					break;
				case '2':
					$data['jingying_cdsx_name'] = '租赁';
					break;
				case '3':
					$data['jingying_cdsx_name'] = '自由租赁';
					break;
				default:
				    $data['jingying_cdsx_name'] = '';
			}
			switch ($data['jingying_pos']) {
				case '1':
					$data['jingying_pos_name'] = '我行';
					break;
				case '2':
					$data['jingying_pos_name'] = '他行';
					break;
				case '3':
					$data['jingying_pos_name'] = '无';
					break;
				default:
				    $data['jingying_pos_name'] = '';
			}
	       
			$res=$this->validate($data,'Tese');
			if(true==$res){
				$result=db('ClientTese')->insert($data);
				if($result){
					$user=session('user');
					action_log('add_tese','ClientTese',1,$user['id']);
					api_success('添加成功！');
				}else{
					api_error('添加失败！');
				}
			}else{
				api_error($res);
			}
		}

		$this->assign('job_title',get_name('job_title'));
        $this->assign('duty',get_name('duty'));
        $this->assign('duty_xifen',get_name('duty_xifen'));

		$this->assign('tese','');
		$this->assign('card_number',input('card_number'));
		return $this->fetch();
	}

	public function tese_edit(){
		$card_number = input('card_number');
		if(request()->isPost()){
			$data=input('post.');
			switch ($data['pinxing_familyrelation']) {
				case '1':
					$data['pinxing_familyrelation_name'] = '和睦';
					break;
				case '2':
					$data['pinxing_familyrelation_name'] = '一般';
					break;
				case '3':
					$data['pinxing_familyrelation_name'] = '不和睦';
					break;
				default:
				    $data['pinxing_familyrelation_name'] = '';
			}
			switch ($data['pinxing_shengyu']) {
				case '1':
					$data['pinxing_shengyu_name'] = '良好';
					break;
				case '2':
					$data['pinxing_shengyu_name'] = '一般';
					break;
				case '3':
					$data['pinxing_shengyu_name'] = '较差';
					break;
				default:
				    $data['pinxing_shengyu_name'] = '';
			}
			switch ($data['pinxing_buliang']) {
				case '1':
					$data['pinxing_buliang_name'] = '无';
					break;
				case '2':
					$data['pinxing_buliang_name'] = '酗酒';
					break;
				case '3':
					$data['pinxing_buliang_name'] = '斗殴';
					break;
				case '4':
					$data['pinxing_buliang_name'] = '赌博';
					break;
				case '5':
					$data['pinxing_buliang_name'] = '奢侈浪费';
					break;
				case '6':
					$data['pinxing_buliang_name'] = '高息借贷';
					break;
				case '7':
					$data['pinxing_buliang_name'] = '存在债务纠纷或涉诉';
					break;
				case '8':
					$data['pinxing_buliang_name'] = '受过行政出发';
					break;
				case '9':
					$data['pinxing_buliang_name'] = '其他不良行为';
					break;
				default:
				    $data['pinxing_buliang_name'] = '';
			}
			switch ($data['pinxing_chengxin']) {
				case '1':
					$data['pinxing_chengxin_name'] = '诚实守信';
					break;
				case '2':
					$data['pinxing_chengxin_name'] = '信用一般';
					break;
				case '3':
					$data['pinxing_chengxin_name'] = '信用较差';
					break;
				default:
				    $data['pinxing_chengxin_name'] = '';
			}
			switch ($data['pinxing_chuangxin']) {
				case '1':
					$data['pinxing_chuangxin_name'] = '较强';
					break;
				case '2':
					$data['pinxing_chuangxin_name'] = '一般';
					break;
				case '3':
					$data['pinxing_chuangxin_name'] = '较差';
					break;
				default:
				    $data['pinxing_chuangxin_name'] = '';
			}
			switch ($data['zhongzhi_class']) {
				case '1':
					$data['zhongzhi_class_name'] = '蔬菜';
					break;
				case '2':
					$data['zhongzhi_class_name'] = '水果';
					break;
				case '3':
					$data['zhongzhi_class_name'] = '粮食作物';
					break;
				case '4':
					$data['zhongzhi_class_name'] = '其他';
					break;
				default:
				    $data['zhongzhi_class_name'] = '';
			}
			switch ($data['zhongzhi_mode']) {
				case '1':
					$data['zhongzhi_mode_name'] = '大棚';
					break;
				case '2':
					$data['zhongzhi_mode_name'] = '露天';
					break;
				default:
				    $data['zhongzhi_mode_name'] = '';
			}
			switch ($data['guding_work']) { 
				case '1':
					$data['guding_work_name'] = '有';
					break;
				case '2':
					$data['guding_work_name'] = '无';
					break;
				default:
				    $data['guding_work_name'] = '';
			}
			switch ($data['yangzhi_class']) { 
				case '1':
					$data['yangzhi_class_name'] = '无';
					break;
				case '2':
					$data['yangzhi_class_name'] = '乡镇（街道）';
					break;
				case '3':
					$data['yangzhi_class_name'] = '县级';
					break;
				case '4':
					$data['yangzhi_class_name'] = '市级';
					break;
				case '5':
					$data['yangzhi_class_name'] = '其他';
					break;
				default:
				    $data['yangzhi_class_name'] = '省级';
			}
			switch ($data['job_title']) { 
				case '1':
					$data['job_title_name'] = '未知';
					break;
				case '2':
					$data['job_title_name'] = '无';
					break;
				case '3':
					$data['job_title_name'] = '初级';
					break;
				case '4':
					$data['job_title_name'] = '中级';
					break;
				case '5':
					$data['job_title_name'] = '高级';
					break;
				default:
				    $data['job_title_name'] = '';
			}
			switch ($data['duty']) { 
				case '1':
					$data['duty_name'] = '未知';
					break;
				case '2':
					$data['duty_name'] = '无';
					break;
				case '3':
					$data['duty_name'] = '初级';
					break;
				case '4':
					$data['duty_name'] = '中级';
					break;
				case '5':
					$data['duty_name'] = '高级';
					break;
				default:
				    $data['duty_name'] = '';
			}
			switch ($data['duty_xifen']) { 
				case '1':
					$data['duty_xifen_name'] = '未知';
					break;
				case '2':
					$data['duty_xifen_name'] = '无';
					break;
				case '3':
					$data['duty_xifen_name'] = '初级';
					break;
				case '4':
					$data['duty_xifen_name'] = '中级';
					break;
				case '5':
					$data['duty_xifen_name'] = '高级';
					break;
				default:
				    $data['duty_xifen_name'] = '';
			}
			switch ($data['jingying_guest_type']) { 
				case '1':
					$data['jingying_guest_type_name'] = '农民';
					break;
				case '2':
					$data['jingying_guest_type_name'] = '城镇居民';
					break;
				case '3':
					$data['jingying_guest_type_name'] = '个体工商户';
					break;
				default:
				    $data['jingying_guest_type_name'] = '';
			}
			switch ($data['jingying_cdsx']) { 
				case '1':
					$data['jingying_cdsx_name'] = '自由';
					break;
				case '2':
					$data['jingying_cdsx_name'] = '租赁';
					break;
				case '3':
					$data['jingying_cdsx_name'] = '自由租赁';
					break;
				default:
				    $data['jingying_cdsx_name'] = '';
			}
			switch ($data['jingying_pos']) {
				case '1':
					$data['jingying_pos_name'] = '我行';
					break;
				case '2':
					$data['jingying_pos_name'] = '他行';
					break;
				case '3':
					$data['jingying_pos_name'] = '无';
					break;
				default:
				    $data['jingying_pos_name'] = '';
			}

			$res=$this->validate($data,'Tese');
			if(true==$res){
				$result = db('ClientTese')->where('card_number',$card_number)->update($data);
				if($result){
					$user=session('user');
					action_log('edit_tese','ClientTese',1,$user['id']);
					api_success('编辑成功！');
				}else{
					api_error('没有任何修改！');
					
				}
			}else{
				api_error($res);
			}
		}
		if(!empty($card_number)){
			$tese = db('ClientTese')->where('card_number',$card_number)->find();
			$this->assign('tese',$tese);
			if($tese['zhongzhi_years'] == 0){
				$tese['zhongzhi_years'] = '';
			}
		}
		$this->assign('card_number',$card_number);
		return $this->fetch('tese_add');
	}
}