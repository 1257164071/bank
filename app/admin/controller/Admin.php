<?php
/**
 * 管理员管理
 * author:liuxl
 **/
namespace app\admin\controller;
use app\admin\model\RbacRole;
use app\admin\model\RbacNode;
use app\admin\model\RbacUser;
use app\admin\model\RbacAccess;
use app\admin\model\Bank;
use think\Db;
class Admin extends Base
{

    /*管理员列表*/
    public function adminlists(){
        $RbacUser = new RbacUser();
        $msglist = $RbacUser->getlist();
       // dump($msglist);die;   
        //$this->assign('page',$msglist->render());
        $this->assign('msglist',$msglist);
        return $this->fetch();
    }

    /*添加管理员*/
    public function adminadd(){
        if(request()->isPost())
        {
            $data = input('post.','','trim');
            $RbacUser = new RbacUser();
            $msg = $RbacUser->getone(['username'=>$data['username']]);
            if(!empty($msg)){
               $this->error('用户名已存在');
            }else{
                $data['password'] = sha1($data['password']);
                //属性字段
                $data['add_time'] = time();
                $data['edit_time'] = time();
                $data['last_login_time'] = time();
                $data['last_login_ip'] = request()->ip();
                $data['login_count'] = 0;
                $data['is_del'] = 0;
                $msg = $RbacUser->add($data);
            }
        }else{    
            $RbacRole = new RbacRole();
            $RbacRolelist = $RbacRole->getlist();
            //查询组织银行列表
            $Bank = new Bank();
            $banklist = $Bank->getlist();
            
            $this->assign('url',url('admin/admin/adminadd'));
            $this->assign('banklist',$banklist);
            $this->assign('RbacRolelist',$RbacRolelist);
            return $this->fetch();
        }
    }
    public function namecheck(){
        if(request()->isPost())
        {
            $username = input('username');
            $RbacUser = new RbacUser();
            $msg = $RbacUser->getone(['username'=>$username]);
            if(!empty($msg)){
                echo 1;
            }else{
                echo 0;
            }
        }
    }
    /*编辑管理员*/
    public function adminedit(){
        if(request()->isPost())
        {
            $data = input('post.','','trim');
            if(empty($data['password']) || $data['password'] == ''){
                $data['password'] =  $data['ypassword'];
            }else{
                $data['password'] = sha1($data['password']);
            }
            $data['edit_time'] = time();
            $data['last_login_time'] = time();
            $data['last_login_ip'] = request()->ip();
            $data['login_count'] = 0;
            $data['is_del'] = 0;
            $RbacUser = new RbacUser();
            $msg = $RbacUser->edit($data['id'],$data);
        }else{
            $id = input('id');
            $RbacUser = new RbacUser();
            $msg = $RbacUser->getone(['id'=>$id]);
            
            $RbacRole = new RbacRole();
            $RbacRolelist = $RbacRole->getlist();
            
            //查询组织银行列表
            $Bank = new Bank();
            $banklist = $Bank->getlist();
            
            $this->assign('RbacRolelist',$RbacRolelist);
            $this->assign('banklist',$banklist);
            $this->assign('msg', $msg);
            $this->assign('url',url('admin/admin/adminedit'));
            return $this->fetch('adminadd');
        }
    }
    
    /*删除管理员*/
    public function admindel(){
        if(request()->isPost())
        {
            $id = input('id');   //get id
            $RbacUser = new RbacUser();
            $msg = $RbacUser->del($id);
        }
    }
    /*账号启用*/
    public function adminstart(){
        if(request()->isPost())
        {
            $id = input('id');  
            $data  = [];
            $data['status'] = 1;
            $result = db('rbac_user')->where('id',$id)->update($data);
            if($result){
                api_success('启用成功！');
                //
            }else{
                api_error('启用失败！');
            }
        }
    }
    /*账号停用启用*/
    public function adminstop(){
    if(request()->isPost())
        {
            $id = input('id');  
            $data  = [];
            $data['status'] = 0;
            $result = db('rbac_user')->where('id',$id)->update($data);
            if($result){
                api_success('停用成功！');
                //
            }else{
                api_error('停用失败！');
            }
        }
    }

    /*角色管理*/
    public function rolelists(){
        $RbacRole = new RbacRole();
        $msglist = $RbacRole->getlist('','','','asc');
        $this->assign('msglist',$msglist);
        return $this->fetch();
    }

    /*角色添加*/
    public function roleadd(){
        //$data = ['name'=>'超级管理员','pid'=>1,'ss'=>2];
        if(request()->isPost())
        {
            $data = input('post.','','trim');
            $RbacRole = new RbacRole();
            $msg = $RbacRole->add($data);
        }else{
            return $this->fetch();
        }
    }
    
    /*角色修改*/
    public function roleedit(){
        if(request()->isPost())
        {
            $data = input('post.','','trim');
            $RbacRole = new RbacRole();
            $msg = $RbacRole->edit($data['id'],$data);
        }else{
            $id = input('id');
            $RbacRole = new RbacRole();
            $msg = $RbacRole->getone($id);
            $this->assign('msg', $msg);
            return $this->fetch('roleadd');
        }
    }
    
    /*角色删除*/
    public function roledel(){
        if(request()->isPost())
        {
            $id = input('id');   //get id
            $RbacRole = new RbacRole();
            $msg = $RbacRole->del($id);
        }else{
            return $this->fetch();
        }
    }
    
    /*节点列表*/
    public function nodelists(){
        $field = array('id','name','title','pid');
        $RbacNode = new RbacNode();
        $nodes = $RbacNode->getlist('asc','',$field);
        $nodelist = node_merge($nodes);
        $this->assign('nodelist',$nodelist);
        return $this->fetch();
    }
    
    public function addnodelevel(){
       $pid = input('pid');
       $level = input('level','1'); 
       
       switch($level){
           case 1:
               $type = '应用';
               break;
           case 2:
               $type = '控制器';
               break;
           case 3:
               $type = '方法';
               break;               
       }
       return $this->fetch();
    }
    
    /*节点增加*/
    public function nodeadd(){
        if(request()->isPost())
        {
            $data = input('post.','','trim');
            $RbacNode = new RbacNode();
            $msg = $RbacNode->add($data);
        }else{
            $pid = input('pid',0);
            $level = input('level',1);
            switch($level){
               case 1:
                   $type = '应用';
                   break;
               case 2:
                   $type = '控制器';
                   break;
               case 3:
                   $type = '方法';
                   break;         
            }
            
            $id = input('id');
            $this->assign('pid',$pid);
            $this->assign('level',$level);
            $this->assign('type',$type);
            return $this->fetch();
        }
    }
    
    /*节点修改*/
    public function nodeedit(){
        if(request()->isPost())
        {
            $data = input('post.','','trim');
            $RbacNode = new RbacNode();
            $msg = $RbacNode->edit($data['id'],$data);
        }else{
            $id = input('id',0);
            
            $level = input('level',1);
            switch($level){
                case 1:
                    $type = '应用';
                    break;
                case 2:
                    $type = '控制器';
                    break;
                case 3:
                    $type = '方法';
                    break;
            }
            $RbacNode = new RbacNode();
            $msg = $RbacNode->getone($id);
            $this->assign('msg', $msg);
            $this->assign('type',$type);
            return $this->fetch('nodeadd');
        }
    }
    
    /*节点删除*/
    public function nodedel(){
        if(request()->isPost())
        {
            $id = input('id');   //get id
            $RbacNode = new RbacNode();    //实例化节点模型
            $msg = $RbacNode->del($id);
        }else{
            return $this->fetch();
        }
    }

    /*权限列表*/
	public function access(){
		$rid = input('rid', 0, 'intval');
		$field = array('id', 'name', 'title', 'pid');
		$field = array('id','name','title','pid');
		$RbacNode = new RbacNode();
		$node = $RbacNode->getlist('asc','',$field,'','sort');
	
		//原有权限
		$condition=['role_id' => $rid];
		$RbacAccess = new RbacAccess();
		$access = $RbacAccess->getnode($condition);
		
		$nodes = node_merge($node,$access);
		$this->assign('nodes',$nodes);
		$this->assign('access',$access);
		$this->assign('rid',$rid);
		return $this->fetch();
	}
	/*权限配置*/
	public function setaccess(){
	    if(request()->isPost())
	    {
    	    $access = input('post.');
    		$rid = input('rid');
    		//删除原来的权限
    		$RbacAccess = new RbacAccess();
    		$condition = array('role_id' => $rid);
    	    $RbacAccess->del($condition);
    	    if(!empty($access['access'])){
        		$data = array();
        		foreach ($access['access'] as $v){
        			$tmp = explode('_', $v);
        			$data[] = array(
        				'role_id' => $rid,
        				'node_id' => $tmp[0],
        				'level' => $tmp[1],
        			);
        		}
        		$RbacAccess->add($data);
    	    }else{
    	        api_success('设置成功！');
    	    }
	    }
	}

}