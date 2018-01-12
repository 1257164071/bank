<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/31
 * Time: 8:52成功
 */

namespace app\admin\controller;
use think\Db;
use think\Controller;

//工作信息
class Conduct extends Base
{
    public function add(){
        if(request()->isPost()){
            $data=input('post.');
            $data['start_work']=time($data['start_work']);

            $res=db('conduct')->insert($data);
            if($res){
               api_success('添加成功！');
            }else{
                api_error('添加失败！');
            }

        }

        $this->assign('job_title',get_name('job_title'));
        $this->assign('duty',get_name('duty'));
        $this->assign('duty_xifen',get_name('duty_xifen'));
        $this->assign('client_id',input('client_id'));
        return $this->fetch();
    }
    public function edit(){
        if(request()->isPost()){
            $data=input('post.');
            if(!empty($data['start_work'])){
                $data['start_work']=time($data['start_work']);
            }


            $res=db('conduct')->where('id',$data['id'])->update($data);
            if($res){
                api_success('修改成功！');
            }else{
                api_error('修改失败！');
            }

        }
        $conduct=db('conduct')->where('client_id',input('client_id'))->find();
        $this->assign('conduct',$conduct);
        $this->assign('job_title',get_name('job_title'));
        $this->assign('duty',get_name('duty'));
        $this->assign('duty_xifen',get_name('duty_xifen'));
        return $this->fetch('add');

    }
}