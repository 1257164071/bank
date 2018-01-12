<?php
namespace app\admin\model;
use think\Model;
use think\Db;

class FamilyMember extends Model
{     
   
   protected $table="ym_family_member";

  //添加成员的基本信息

   public function add($data)
   {
            $add_info=array(
               'client_id'=>$data['client_id'],
               'members_name'=>$data['members_name'],
               'members_relation'=>$data['members_relation'],
               'user_id'=>$data['user_id'],
               'is_independent_income'=>$data['is_independent_income'],
               'add_time'=>time()
            );
   			$add_res=Db::name('family_member')->insert($add_info);
			if($add_res){
				return true;
			}else{
				return false;
			}
   }

     //修改成员的基本信息

   public function edit($data)
   {
         $edit_info=Db::name('family_member')->where('id',$data['id'])->update($data);
         if($edit_info){
            return true;
         }else{
            return false;
         }     
      }

}

