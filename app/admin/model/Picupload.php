<?php
namespace app\admin\model;
use think\Model;
use think\Db;
class Picupload extends Model
{
    protected $table="ym_client_picture";


//添加
    public function add($data)
    {
        if(!empty($data)){

            $add_info=array(
                'client_id'		=>$data['client_id'],
                'picurl'		=>$data['picurl'],
                'content'	=>$data['content'],
                'add_time'				=>time()
            );
            $result=Db::name('client_picture')->insert($add_info);
            if($result){
                return true;
            }else{
                return false;
            }
        }
        exit();
    }

    //修改
    public function edit($data)
    {
        if(!empty($data)){
            $edit_info=array(
                'account'		=>$data['account'],
                'opening_bank'	=>$data['opening_bank'],
                'opening_time'				=>strtotime($data['opening_time']),
                'account_status'				=>$data['account_status'],
                'currency'	=>$data['currency'],
                'deposit_type'	=>$data['deposit_type'],
                'deposit_way'				=>$data['deposit_way'],
                'cold_time'			=>strtotime($data['cold_time']),
                'lancun_worker'			=>$data['lancun_worker']

            );


            $result=Db::name('deposit')->where('id',$data['id'])->update($edit_info);
            if($result){
                return true;
            }else{
                return false;
            }
        }
        exit();
    }
}