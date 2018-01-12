<?php

namespace app\admin\controller;
use think\Db;
use think\Controller;


class Personcredit extends Base
{
    //展示个人征信信息和不良信息
    public function index()
    {

        $percredit=db('personal_credit')->where(['is_del'=>0,'client_id'=>input('client_id')])->select();
        $bad_info=db('bad_record')->alias('r')->join('rbac_user u','r.user_id=u.id','left')->field('r.*,u.real_name name')->where(['r.is_del'=>0,'r.client_id'=>input('client_id')])->select();
        $this->assign('info',$bad_info);
        $this->assign('percredit',$percredit);
        $this->assign('client',session('client'));
        $this->assign('title1','辅助信息');
        $this->assign('title2','个人征信信息');
        $this->assign('controller',request()->controller());
        return $this->fetch();

    }

    /*删除不良记录*/
    public function del()
    {
        $res=model('BadRecord')->where('id',input('record_id'))->update(['is_del'=>1]);
        if($res){
            $this->success('删除成功！');
            //api_success('删除成功！');
        }else{
            $this->error('删除失败！');
//			api_error('删除失败！');
        }
    }
    /*添加不良记录*/
    public function add()
    {
        if(request()->isPost()){
            $res=model('BadRecord')->add(input('post.'));
            if($res==true){
                api_success('添加成功！');
            }else{
                api_error('添加失败！');
            }
        }
        $record_type=db('property_value')->field('name,value')->where('property_id',1)->select();
        $this->assign('record_type',$record_type);
        $this->assign('client_id',input('client_id'));
        $this->assign('build',db('rbac_user')->select());
        return $this->fetch('badrecord/add');
    }
    /*编辑不良记录*/
    public function edit()
    {
        if(request()->isPost()){
            $res=model('BadRecord')->edit(input('post.'));
            if($res==true){
                api_success('修改成功！');
            }else{
                api_error('修改失败！');
            }
        }
        $record_type=db('property_value')->field('name,value')->where('property_id',1)->select();
        $this->assign('record_type',$record_type);
        $record=db('bad_record')->where(['is_del'=>0,'id'=>input('record_id')])->find();
        $this->assign('build',db('rbac_user')->select());
        $this->assign('record',$record);
        return $this->fetch('badrecord/add');
    }

    /*删除个人征信信息*/
    public function percreditdel()
    {
        $res=model('Personcredit')->where('id',input('personcredit_id'))->update(['is_del'=>1]);
        if($res){
            $this->success('删除成功！');

        }else{
            $this->error('删除失败！');
        }
    }
/*添加个人征信信息*/
    public function personcreditadd()
    {

        $this->assign('build',db('rbac_user')->select());
        return $this->fetch('add');
    }
/*修改个人征信信息*/
    public function personcreditedit()
    {
        return $this->fetch('add');
    }


}