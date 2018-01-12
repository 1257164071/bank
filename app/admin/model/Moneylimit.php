<?php
namespace app\admin\model;
use think\Model;
use think\Db;

class Moneylimit extends Model
{     
   
   protected $table="ym_moneylimit";



  //添加额度信息

   public function add($data)
   {
   		

            $add_info=array(
               'client_id'=>$data['client_id'],
               'moneylimit_number'=>$data['moneylimit_number'],
               'moneylimit_type'=>$data['moneylimit_type'],
               'business_type'=>$data['business_type'],
               'start_time'=>strtotime($data['start_time']),
               'end_time'=>strtotime($data['end_time']),
               'last_time'=>strtotime($data['last_time']),
               'money_type'=>$data['money_type'],
               'moneylimit_money'=>$data['moneylimit_money'],
               'occupy_money'=>$data['occupy_money'],
               'usable_money'=>$data['usable_money'],
               'use_way'=>$data['use_way'],
               'business_carrier'=>$data['business_carrier'],
               'moneylimit_status'=>$data['moneylimit_status'],
               'belong_organization'=>$data['belong_organization'],
               'belong_user_id'=>$data['belong_user_id'],
               'add_time'=>time()
            );

   			
   			
   			$add_res=Db::name('moneylimit')->insert($add_info);
			
			if($add_res){
				return true;
			}else{
				return false;
			}		
			
   		
		
		
   }

     //修改额度信息

   public function edit($data)
   {
        $edit_info=array(
            'moneylimit_number'=>$data['moneylimit_number'],
            'moneylimit_type'=>$data['moneylimit_type'],
            'moneylimit_info'=>$data['moneylimit_info'],
            'business_type'=>$data['business_type'],
            'start_time'=>strtotime($data['start_time']),
            'end_time'=>strtotime($data['end_time']),
            'last_time'=>strtotime($data['last_time']),
            'money_type'=>$data['money_type'],
            'moneylimit_money'=>$data['moneylimit_money'],
            'occupy_money'=>$data['occupy_money'],
            'usable_money'=>$data['usable_money'],
            'use_way'=>$data['use_way'],
            'business_carrier'=>$data['business_carrier'],
            'moneylimit_status'=>$data['moneylimit_status'],
            'belong_organization'=>$data['belong_organization'],
            'belong_user_id'=>$data['belong_user_id'],
        );
         $edit_res=Db::name('moneylimit')->where('id',$data['id'])->update($edit_info);
         if($edit_res){
            return true;
         }else{
            return false;
         }     

		
			
   		
		
		
   }
}

