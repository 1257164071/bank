<?php
namespace app\admin\model;
use think\Model;
use think\Db;

class Outcredit extends Model
{     
   
   protected $table="ym_outtable_credit";



  //添加表外的用信信息

   public function add($data)
   {
         

            $add_info=array(
               'client_id'=>$data['client_id'],
               'contact_number'=>$data['contact_number'],
               'ious_number'=>$data['ious_number'],
               'guarantor'=>$data['guarantor'],
               'loan_remain'=>$data['loan_remain'],
               'debt_money'=>$data['debt_money'],
               'provide_money'=>$data['provide_money'],
               'use_rate'=>$data['use_rate'],
               'loan_status'=>$data['loan_status'],
               'provide_time'=>strtotime($data['provide_time']),
               'arrive_time'=>strtotime($data['arrive_time']),
                'account_status'=>$data['account_status'],
                'loan_form'=>$data['loan_form'],
                'guarantee_way'=>$data['guarantee_way'],
               'refund_record'=>$data['refund_record'],
               'add_time'=>time()
            );
            
            
            
            $add_res=Db::name('outtable_credit')->insert($add_info);
         
         if($add_res){
            return true;
         }else{
            return false;
         }     
         
         
      
      
   }

     //修改表外的用信信息

   public function edit($data)
   {
         
            

            
      if(isset($data)){
          $edit_info=array(

              'contact_number'=>$data['contact_number'],
              'ious_number'=>$data['ious_number'],
              'guarantor'=>$data['guarantor'],
              'loan_remain'=>$data['loan_remain'],
              'debt_money'=>$data['debt_money'],
              'provide_money'=>$data['provide_money'],
              'use_rate'=>$data['use_rate'],
              'loan_status'=>$data['loan_status'],
              'provide_time'=>strtotime($data['provide_time']),
              'arrive_time'=>strtotime($data['arrive_time']),
              'account_status'=>$data['account_status'],
              'loan_form'=>$data['loan_form'],
              'guarantee_way'=>$data['guarantee_way'],
              'refund_record'=>$data['refund_record']

          );
         $edit_res=Db::name('outtable_credit')->where('id',$data['id'])->update($edit_info);
         if($edit_res){
            return true;
         }else{
            return false;
         }     
      }     
      
         
         
      
      
   }
}

