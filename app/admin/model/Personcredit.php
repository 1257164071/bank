<?php
namespace app\admin\model;
use think\Model;
use think\Db;

class Personcredit extends Model
{

    protected $table="ym_personal_credit";


/*添加个人的征信信息*/
    public function add($data)
    {


        $add_info=array(
            'client_id'=>$data['client_id'],
            'user_id'=>$data['user_id'],
            'record_type'=>$data['record_type'],
            'content'=>$data['content'],
            'record_time'=>strtotime($data['record_time']),
            'add_time'=>time()
        );

        $add_res=Db::name('bad_record')->insert($add_info);

        if($add_res){
            return true;
        }else{
            return false;
        }
    }

/*修改个人的征信信息*/

    public function edit($data)
    {
        $edit_info=array(
            'user_id'=>$data['user_id'],
            'record_type'=>$data['record_type'],
            'content'=>$data['content'],
            'record_time'=>strtotime($data['record_time'])
        );
        $edit_info=Db::name('bad_record')->where('id',$data['id'])->update($edit_info);
        if($edit_info){
            return true;
        }else{
            return false;
        }
    }



}

