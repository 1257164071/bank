<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/3
 * Time: 14:09
 * 模块  签约
 */
namespace app\admin\controller;
use think\Db;
use think\Controller;


class Sign extends Base
{
   /*显示签约信息*/
    public function index()
    {
        $sign=db('sign')->where(['card_number'=>input('card_number')])->find();
		$this->assign('sign',$sign);
        $this->assign('client',session('client'));
        $this->assign('title1','辅助信息');
        $this->assign('title2','签约信息');
        $this->assign('controller',request()->controller());
        return $this->fetch();
    }
/*
 * 添加签约信息
 * */
    public function add()
    {
        if(request()->isPost()) {

            $data=input('post.');
            $result=$this->validate($data,'Sign');
            if(true!==$result){
                api_error($result);
            }else{
                $res=model('Sign')->add($data);
                if($res==true){
                    api_success('添加成功！');
                }else{
                    api_error('添加失败！');
                }

            }

        }
//        if(request()->isPost()){
//            $res=model('Sign')->add(input('post.'));
//            if($res==true){
//                api_success('添加成功！');
//            }else{
//                api_error('添加失败！');
//            }
//        }
        $bank=db('bank')->where('is_del',0)->select();
        $this->assign('bank',$bank);
        $this->assign('sign_type',get_name('sign_type'));
//        var_dump(get_name('sign_type'));
//        die;
        $this->assign('client_id',input('client_id'));

        return $this->fetch();
    }

    /*编辑签约信息*/
    public function edit()
    {
        if(request()->isPost()){
            $res=model('Sign')->edit(input('post.'));
            if($res==true){
                api_success('修改成功！');
            }else{
                api_error('修改失败！');
            }
        }
        $bank=db('bank')->where('is_del',0)->select();
        $this->assign('bank',$bank);
        $this->assign('sign_type',get_name('sign_type'));
        $sign=db('sign')->where(['is_del'=>0,'id'=>input('sign_id')])->find();
        $this->assign('sign_type',get_name('sign_type'));
        $this->assign('sign',$sign);
        return $this->fetch('add');
    }
    /*删除签约信息*/
    public function del(){
        $res=model('Sign')->where('id',input('sign_id'))->update(['is_del'=>1]);
        if($res){
            $this->success('删除成功！');
            //api_success('删除成功！');
        }else{
            $this->error('删除失败！');
//			api_error('删除失败！');
        }
    }
}