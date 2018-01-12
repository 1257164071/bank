<?php
namespace app\admin\controller;
use think\Controller;

class Base extends Controller
{
    function __construct(){
        parent::__construct();
       //检查是否登录
        $this->checkLogin();
        
        //查询权限节点
        $user = session('user');
        $user['bankname'] = db('bank')->where('id',$user['bank_id'])->value('bankname');
        $this->assign('user',$user);
        if(!empty($user)){
            $condition = [];
            $condition['id'] = $user['role_id'];
            //查询角色
            $role = db('rbac_role')->where($condition)->find();
            //查询节点
            $nodes = [];
            $nodes = db('rbac_access')->alias('a')->join('rbac_node b ','b.id= a.node_id')->where('a.role_id = '.$user['role_id'])->field('a.*,b.*')->order('b.sort','asc')->select();
            $nodes = node_merge($nodes,null,8);
            $this->assign('nodes',$nodes);

            $action = request()->action();
            //绝对权限 具体到每一个控制器
//             $actions = db('rbac_access')->alias('a')->join('rbac_node b ','b.id= a.node_id')->where('a.role_id = '.$user['role_id'])->column('b.name');
//             array_push($actions,'logout','index');   //不受权限控制的控制器
//             if(!in_array($action, $actions)){
//                 die('没有权限');
//             }

           //相对权限控制   加节点是显示和隐藏 ：还有一种情况是 让他有权限，但是不现实菜单。
            $allactions = db('rbac_access')->alias('a')->join('rbac_node b ','b.id= a.node_id')->column('b.name'); //所有节点
            if(in_array($action, $allactions)){    //当前控制器 属于应用控制器 
                $actions = db('rbac_access')->alias('a')->join('rbac_node b ','b.id= a.node_id')->where('a.role_id = '.$user['role_id'])->column('b.name');
                if(!in_array($action, $actions)){   //当前控制器 属于用户权限
                   die('没有权限');
                }
            }
        }
    }

    /*检查是否登录*/
    protected function checkLogin(){
        $uid = session('uid');
        $username = session('username');
       
    
        if(empty($uid) || empty($username)){
            $this->redirect('admin/user/login');
        }
      
    }

}
?>