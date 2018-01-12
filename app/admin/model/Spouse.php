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
   		


		$data['born_date']=strtotime($data['born_date']);
	 	$data['valid_time']=strtotime($data['valid_time']);
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
			if(!empty($data['born_date'])){
				$data['born_date']=strtotime($data['born_date']);
			}
	   		if(!empty($data['valid_time'])){
		   		$data['valid_time']=strtotime($data['valid_time']);
			 }
   			$add_info=Db::name('spouse')->where(['id'=>$data['id']])->update($data);
			
			if($add_info){
				return true;
			}else{
				return false;
			}		
			
   		
		
		
   }
}

