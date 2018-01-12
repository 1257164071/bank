<?php
/**
 * Rbac-角色-权限
 * author:liuxl
 **/
namespace app\admin\model;
use think\Model;
use think\Db;

class RbacAccess extends Model
{
    //需要调用`Model`的`initialize`方法
    protected function initialize()
    {
        parent::initialize();    //TODO:自定义的初始化
    }
    
    /* 查询用户  */
    public function getone($id){
        if(!empty($id)){
            $msg = Db::table('ym_rbac_access')->where('id',$id)->find();  //查询数据
        }
        return $msg;
    }
    
    /* 查询节点 */
    public function getnode($condition=[]){
        $msglist = Db::table('ym_rbac_access')->where($condition)->column('node_id'); //查询数据       
        return $msglist;     
    }

    /* 添加节点 */
    public function add($data){
       if(!empty($data)){
           $result = $this->validate(true)->allowField(true)->insertAll($data);  //验证并添加数据
           ($result === false)?api_error($this->getError()): api_success('设置成功！');
       }
   }
   
   /* 修改节点 */
   public function edit($id,$data){
       if(!empty($id) && !empty($data)){
           $result = $this->validate(true)->allowField(true)->save($data,$id);  //验证并添加数据
           ($result === false)?api_error($this->getError()): api_success('修改成功！');
       }
   }
   
   /* 删除节点 */
   public function del($condition=[]){
           $result = $this->where($condition)->delete();  //验证并添加数据
   }
}
?>