<?php
namespace app\admin\model;
use think\Model;
use think\Db;

class Sign extends Model
{
    protected $table="ym_sign";

    //添加不良记录的基本信息
    public function add($data)
    {


        $add_info=array(
            'client_id'=>$data['client_id'],
            'sign_website_number'=>$data['sign_website_number'],
            'sign_type'=>$data['sign_type'],
            'other_account_content'=>$data['other_account_content'],
            'sign_time'=>strtotime($data['sign_time']),
            'add_time'=>time()
        );

        $add_res=Db::name('sign')->insert($add_info);

        if($add_res){
            return true;
        }else{
            return false;
        }
    }

    //修改成员的基本信息

    public function edit($data)
    {
        $edit_info=array(
            'sign_website_number'=>$data['sign_website_number'],
            'sign_type'=>$data['sign_type'],
            'other_account_content'=>$data['other_account_content'],
            'sign_time'=>strtotime($data['sign_time']),
        );
        $edit_info=Db::name('sign')->where('id',$data['id'])->update($edit_info);
        if($edit_info){
            return true;
        }else{
            return false;
        }
    }


}

