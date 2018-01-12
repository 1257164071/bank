<?php
/**
 * 管理员控制器
 **/
namespace app\admin\controller;
use think\Controller;
use think\Db;

class User extends Controller
{
    /* 用户登录  */
    public function login()
    {
        if(request()->isPost())
        {
            $data['username']=input('username');
            $data['password']=input('password');
            $result=$this->validate($data,'User');
            if($result!==true){
                $this->error($result);
            }
            
            $user = Db::name('rbac_user')->where(['username'=>$data['username']])->find();

            if($user){
                if($user['password'] == sha1($data['password'])){
                    if(($user['status'] == 0) || empty($user['status'])){
                        $this->error('账号被禁用，请联系管理员！');
                    }
                    session('username',$user['username']);
                    session('uid',$user['id']);
                    session('user',$user);
                    action_log('user_login','rbac_user',$user['id'],$user['id']);

                    $up['last_login_time'] = time();
                    $up['last_login_ip'] = request()->ip();
                    $up['login_count'] = $user['login_count']+1;

                    Db::name('rbac_user')->where('id', $user['id'])->update($up);
                   	$this->redirect('admin/index/index');
                }else{
                    $this->error('用户名或密码错误！');
                }
            }else{
                $this->error('用户不存在！');
            }
        }else{
            return $this->fetch();
        }
        exit();
    }

    

   
    /* 用户登出 */
    public function logout()
    {
        session(null);
        $this->success('退出成功','admin/user/login');
    }
   

 /*
   * 修改密码*/
    public function edit_pwd(){
        if(request()->isPost()) {
            $post = input('post.');
            if ($post['repwd1'] != $post['repwd2']) {
                api_error('两次密码不一致，请重新输入！');
            }
            $password = db('rbac_user')->where('id', $post['user_id'])->field('password')->find();
            if (sha1($post['password']) != $password['password']) {
                api_error('原始密码错误！');
            }
            $data['password'] = sha1($post['repwd1']);
            $res = db('rbac_user')->where('id', $post['user_id'])->update($data);
            if ($res) {
                api_success('修改成功！');
            } else {
                api_error('修改失败,请重试!');
            }
        }
        $this->assign('user_id',input('user_id'));
        return $this->fetch();
    }



}