<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/3
 * Time: 15:41
 */

namespace app\admin\controller;
use think\Db;
use think\Controller;


class Other extends Base
{
/*添加其他信息*/
    public function add()
    {
        if(request()->isPost()){

            $data=input('post.');
            $result=$this->validate($data,'Other');
            if(true!==$result){
                api_error($result);
            }else{
                $info=model('Other')->add($data);

                if($info==true){
                    $user=session('user');
                    action_log('add_other','Other',1,$user['id']);
                    api_success('添加成功！');
                }else{
                    api_error('添加失败！');
                }
            }


        }
        $this->assign('url',url('add'));
        $this->assign('client_id',input('client_id'));
        return $this->fetch();
    }
/*修改其他信息*/
    public function edit()
    {
        if(request()->isPost()){
            $res=model('Other')->edit(input('post.'));
            if($res==true){
                $user=session('user');
                action_log('edit_other','Other',1,$user['id']);
                api_success('修改成功！');
            }else{
                api_error('修改失败！');
            }
        }
        $other=model('Other')->where(['is_del'=>0,'client_id'=>input('client_id')])->find();
        $this->assign('other',$other);
        $this->assign('url',url('edit'));
        return $this->fetch('add');
    }
}