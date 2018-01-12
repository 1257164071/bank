<?php
namespace app\admin\model;
use think\Model;
use think\Db;
class BaseMsg extends Model
{
	protected $table="ym_base_msg";



	public  function client()
	{
		return $this->belongsTo('Client');
	}
//添加客户的基本信息
	public function add($data)
	{
     	if(!empty($data)){
     	    if(!empty($data['lou']) && !empty($data['hu'])){
     	        $data['lou'] = intval($data['lou']);
     	        $data['danyuan'] = intval($data['danyuan']);
     	        $data['hu'] = intval($data['hu']);
     	        $data['jilou'] = intval(substr($data['hu'],-4,-2));
     	        $data['jishi'] = intval(substr($data['hu'],-2));
     	        if(!empty($data['danyuan']) && $data['danyuan'] != 0){
     	            $data['housepos'] = $data['danyuan']*(($data['jilou']-1)*$data['huxing']+$data['jishi']);
     	        }else{
     	            $data['housepos'] = ($data['jilou']-1)*$data['huxing']+$data['jishi'];
     	        }
     	    }
     		$add_info=array(
     			'client_id'		=>$data['client_id'],
     			'marriage_status'		=>$data['marriage_status'],
     			'married_record_date'	=>strtotime($data['married_record_date']),
     			'children'				=>$data['children'],
     			'is_farmer'				=>$data['is_farmer'],
     			'province'	=>$data['province'],
     			'city'	=>$data['city'],
     			'area'				=>$data['area'],
     		    'grid'				=>isset($data['grid'])?$data['grid']:'',
     			'current_address'		=>$data['current_address'],
				'current_postcode'		=>$data['current_postcode'],
     			'corresponding_address'	=>$data['corresponding_address'],
				'corresponding_postcode'	=>$data['corresponding_postcode'],
				'highest_degree'		=>$data['highest_degree'],
     			'highest_education'		=>$data['highest_education'],
     			'industry_category'		=>$data['industry_category'],
				'live_status'		=>$data['live_status'],
				'is_poor'		=>$data['is_poor'],
     		    'workunit'		=>$data['workunit'],
     		    'housenum'		=>$data['lou'].$data['danyuan'].sprintf("%04d",$data['hu']),
     		    'housepos'		=>isset($data['housepos'])?$data['housepos']:'',
     		    'huxing'		=>$data['huxing'],
				'add_time'				=>time()
 			);
     		
 			$result=Db::name('base_msg')->insert($add_info);
 			if($result){
 				return true;
 			}else{
 				return false;
 			}
		}
		exit();
	}

	//修改客户的基本信息
	public function edit($data)
	{
		if(!empty($data)){
		    if(!empty($data['lou']) && !empty($data['hu'])){
		        $data['lou'] = intval($data['lou']);
		        $data['danyuan'] = intval($data['danyuan']);
		        $data['hu'] = intval($data['hu']);
		        $data['jilou'] = intval(substr($data['hu'],-4,-2));
		        $data['jishi'] = intval(substr($data['hu'],-2));
		        if(!empty($data['danyuan']) && $data['danyuan'] != 0){
     	            $data['housepos'] = $data['danyuan']*(($data['jilou']-1)*$data['huxing']+$data['jishi']);
     	        }else{
     	            $data['housepos'] = ($data['jilou']-1)*$data['huxing']+$data['jishi'];
     	        }
		    }
			$info=array(
			    'id' => $data['id'],
				'marriage_status'		=>$data['marriage_status'],
				'married_record_date'	=>strtotime($data['married_record_date']),
				'children'				=>$data['children'],
				'is_farmer'				=>$data['is_farmer'],
				'province'	=>$data['province'],
				'city'	=>$data['city'],
				'area'				=>$data['area'],
			    'grid'				=>isset($data['grid'])?$data['grid']:'',
				'current_address'		=>$data['current_address'],
				'current_postcode'		=>$data['current_postcode'],
				'corresponding_address'	=>$data['corresponding_address'],
				'corresponding_postcode'	=>$data['corresponding_postcode'],
				'highest_degree'		=>$data['highest_degree'],
				'highest_education'		=>$data['highest_education'],
				'industry_category'		=>$data['industry_category'],
				'live_status'		=>$data['live_status'],
				'is_poor'		=>$data['is_poor'],
			    'workunit'		=>$data['workunit'],
			    'housenum'		=>intval($data['lou']).$data['danyuan'].sprintf("%04d",$data['hu']),
			    'housepos'		=>isset($data['housepos'])?$data['housepos']:'',
			    'huxing'		=>$data['huxing']
			);

// 			$result=Db::name('base_msg')->where('client_id',$data['client_id'])->update($info);
//  			if($result){
//  				return true;
//  			}else{
//  				return false;
//  			}

			$result = $this->validate(true)->allowField(true)->save($info,$info['id']);
			($result === false)?api_error($this->getError()): api_success('修改成功！');
		}
		exit();
	}
	//存款-累计-记录变更-表
	public function save_money($money,$client_id,$change_type='add'){
	   $save_money = db('base_msg')->where('client_id',$client_id)->value('save_money');
	   $data = [];
	   if($change_type == 'add'){
    	   $data['save_money'] =  $save_money + $money;
    	   $result = db('base_msg')->where('client_id',$client_id)->update($data);
	   }
	   if($change_type == 'minus'){
	       $data['save_money'] =  $save_money - $money;
	       $result = db('base_msg')->where('client_id',$client_id)->update($data);
	   }
	   //echo db('base_msg')->getlastsql();die;
	   if($result == 1){
	       $record = [];
	       $record['client_id'] = $client_id;
	       $record['save_amt'] = $money;
	       $record['change_type'] = $change_type;
	       $record['prev_amt'] = $save_money;
	       $record['now_amt'] = $data['save_money'];
	       $record['time'] = time();
	       db('save_record')->insert($record);
// 	       echo db('save_record')->getlastsql();die;
	   }
	}
	//贷款-累计-记录变更-表
	public function loan_money($money,$client_id,$change_type='add'){
	    $loan_money = db('base_msg')->where('client_id',$client_id)->value('loan_money');
	    $data = [];
	    if($change_type == 'add'){
	        $data['loan_money'] =  $loan_money + $money;
	        $result = db('base_msg')->where('client_id',$client_id)->update($data);
	    }
	    if($change_type == 'minus'){
	        $data['loan_money'] =  $loan_money - $money;
	        $result = db('base_msg')->where('client_id',$client_id)->update($data);
	    }
	    //echo db('base_msg')->getlastsql();
	    if($result == 1){
	        $record = [];
	        $record['client_id'] = $client_id;
	        $record['loan_amt'] = $money;
	        $record['change_type'] = $change_type;
	        $record['prev_amt'] = $loan_money;
	        $record['now_amt'] = $data['loan_money'];
	        $record['time'] = time();
	      
	        db('loan_record')->insert($record);
	       // echo db('loan_record')->getlastsql();die;
	    } 
	}
}