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
       $data['born_date']=strtotime($data['born_date']);
       $data['valid_time']=strtotime($data['valid_time']);
       $data['add_time']=time();
//            $add_info=array(
//               'client_id'=>$data['client_id'],
//               'members_name'=>$data['members_name'],
//               'members_relation'=>$data['members_relation'],
//               'user_id'=>$data['user_id'],
//               'add_time'=>time()
//            );
   			$add_res=Db::name('family_member')->insert($data);
			if($add_res){
				return true;
			}else{
				return false;
			}
   }

     //修改成员的基本信息

   public function edit($data)
   {
       if(!empty($data['born_date'])){
           $data['born_date']=strtotime($data['born_date']);
       }
       if(!empty($data['valid_time'])){
           $data['valid_time']=strtotime($data['valid_time']);
       }
         $edit_info=Db::name('family_member')->where('id',$data['id'])->update($data);
         if($edit_info){
            return true;
         }else{
            return false;
         }     
      }

}

