<?php
namespace app\admin\model;
use think\Model;


class VisitApply extends Model
{
    protected $table="ym_visit_apply";


    //添加
    public function add($data)
    {

        // $visit_num=db('visit_record')->where(['client_id'=>$data['client_id'],'is_del'=>0])->field('visit_num')->order('id desc')->find();
        $add_info=array(
            'client_id'=>$data['client_id'],
            'user_id'=>$data['user_id'],
            'type'=>$data['type'],
            'apply_content'=>$data['apply_content'],
            'status'=>1,

            'add_time'=>time()
        );

        $add_res=db('visit_apply')->insert($add_info);

        if($add_res){
            return true;
        }else{
            return false;
        }
    }
    //添加
    public function edit($data)
    {

        // $visit_num=db('visit_record')->where(['client_id'=>$data['client_id'],'is_del'=>0])->field('visit_num')->order('id desc')->find();
        $edit_info=array(


            'type'=>$data['type'],
            'apply_content'=>$data['apply_content']



        );

        $res=db('visit_apply')->where('id',$data['id'])->update($edit_info);

        if($res){
            return true;
        }else{
            return false;
        }
    }
}
