<?php
namespace app\admin\model;
use think\Model;
use think\Db;

class Spouse extends Model
{     
   
   protected $table="ym_spouse";




  //添加配偶的基本信息

   public function add($data)
   {
   		



   			$data['add_time']=time();
   			$add_info=Db::name('spouse')->insert($data);
			
			if($add_info){
				return true;
			}else{
				return false;
			}		
			
   		
		
		
   }

     //修改配偶的基本信息

   public function edit($data)
   {

   			$add_info=Db::name('spouse')->where(['id'=>$data['id']])->update($data);
			
			if($add_info){
				return true;
			}else{
				return false;
			}		
			
   		
		
		
   }
}

