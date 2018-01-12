<?php
namespace app\admin\model;
use think\Model;
use think\Db;

class Visitrecord extends Model
{
    protected $table="ym_visit_record";


    public function apply()
    {
         return $this->hasMany('VisitApply','record_id');
    }
    //添加
    public function add($data)
    {

       // $visit_num=db('visit_record')->where(['client_id'=>$data['client_id'],'is_del'=>0])->field('visit_num')->order('id desc')->find();
        $add_info=array(
            'client_id'=>$data['client_id'],
            'user_id'=>$data['user_id'],
            'content'=>$data['content'],
            //'visit_num'=>$visit_num+1,
            'visit_time'=>strtotime($data['visit_time']),
            'add_time'=>time()
        );

        $add_res=db('visit_record')->insert($add_info);

        if($add_res){
            return true;
        }else{
            return false;
        }
    }

    //修改

    public function edit($data)
    {
        $edit_info=array(

            'content'=>$data['content'],
            'visit_time'=>strtotime($data['visit_time'])

        );
        $edit_info=db('visit_record')->where('id',$data['id'])->update($edit_info);
        if($edit_info){
            return true;
        }else{
            return false;
        }
    }


}

