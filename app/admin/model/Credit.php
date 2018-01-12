<?php
namespace app\admin\model;
use think\Model;
use think\Db;

class Credit extends Model
{     
   
   protected $table="ym_credit_message";



  //添加表内的用信信息

   public function add($data)
   {
   		

            $add_info=array(
               'client_id'=>$data['client_id'],
                'credit_type'=>$data['credit_type'],
               'use_way'=>$data['use_way'],
               'credit_money'=>$data['credit_money'],
               'cate_range'=>$data['cate_range'],
               'credit_start_time'=>strtotime($data['credit_start_time']),
               'credit_end_time'=>strtotime($data['credit_end_time']),
               'belong_user_id'=>$data['belong_user_id'],
               'use_organization'=>$data['use_organization'],
               'add_time'=>time()
            );
   			$add_res=Db::name('credit_message')->insert($add_info);
			if($add_res){
				return true;
			}else{
				return false;
			}		
			
   		
		
		
   }

     //修改授信用信信息

   public function edit($data)
   {
   		
   			

   			
   	if(isset($data)){
        $edit_info=array(

            'credit_type'=>$data['credit_type'],
            'use_way'=>$data['use_way'],
            'credit_money'=>$data['credit_money'],
            'cate_range'=>$data['cate_range'],
            'credit_start_time'=>strtotime($data['credit_start_time']),
            'credit_end_time'=>strtotime($data['credit_end_time']),
            'belong_user_id'=>$data['belong_user_id'],
            'use_organization'=>$data['use_organization'],

        );

         $edit_res=Db::name('credit_message')->where('id',$data['id'])->update($edit_info);
         if($edit_res){
            return true;
         }else{
            return false;
         }     
      }		
		
			
   		
		
		
   }
}

