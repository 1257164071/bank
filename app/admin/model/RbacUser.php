<?php
/**
 * Rbac-用户
 * author:liuxl
 **/
namespace app\admin\model;
use think\Model;
use think\Db;

class RbacUser extends Model
{
    //需要调用`Model`的`initialize`方法
    protected function initialize()
    {
        parent::initialize();    //TODO:自定义的初始化
    }
    
    /* 查询用户  */
    public function getone($condition=[]){
        if(!empty($condition)){
            $msg = Db::table('ym_rbac_user')->where($condition)->find();  //查询数据
            return $msg;
        }
    }
    
    /* 查询用户列表  */
    public function getlist($order='desc',$condition='',$order_key='a.id'){
        $msglist = Db::table('ym_rbac_user')->alias('a')->join('ym_rbac_role b','b.id = a.role_id')->join('ym_bank c','c.id = a.bank_id')->field('a.*,b.name,c.bankname')->order('a.id','asc')->select();  //查询数据       
        return $msglist;     
    }

    /* 添加用户 */
    public function add($data){ 
       if(!empty($data)){
           //print_r($data);die;
           $result = $this->validate(true)->allowField(true)->save($data);  //验证并添加数据
           ($result === false)?api_error($this->getError()): api_success('添加成功！');
       }
   }
   
   /* 修改用户 */
   public function edit($id,$data){
       if(!empty($id) && !empty($data)){
           $result = $this->validate(true)->allowField(true)->save($data,$id);  //验证并添加数据
           ($result === false)?api_error($this->getError()): api_success('修改成功！');
       }
   }
   
   /* 删除用户 */
   public function del($id){
       if(!empty($id)){
           $result = $this->where('id',$id)->delete();  
           ($result === false)?api_error($this->getError()): api_success('删除成功！');
       }
   }
}
?>