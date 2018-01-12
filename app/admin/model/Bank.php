<?php
namespace app\admin\model;
use think\Model;
use think\Db;

class Bank extends Model
{
    //需要调用`Model`的`initialize`方法
    protected function initialize()
    {
        parent::initialize();    //TODO:自定义的初始化
    }
    
    /* 查询用户  */
    public function getone($id){
        if(!empty($id)){
            $msg = $this->where('id',$id)->find();  //查询数据
        }
        return $msg;
    }
    
   
    //返回上级银行
    public function bankpid($id){
        $bank = Db::table('ym_bank')->where(['id'=>$id])->find();
        $pid = ($bank['pid'] != 0) ? $bank['pid'] : $bank['id'];
        $bank = Db::table('ym_bank')->where(['pid'=>$pid])->column('id');
        array_push($bank,$pid);
        return $bank;
    }
    
   //查询一级银行
   public function banklevel(){
         $banklevel = Db::table('ym_bank')->where(['pid'=>0])->order('id', 'asc')->select();
         return $banklevel;
   }
   
   /* 查询角色 */
   public function getlist($condition=[],$order_key='id',$order='asc'){
       $msglist = Db::table('ym_bank')->where(['pid'=>0])->order('id',$order)->select();  //查询数据
       foreach($msglist as $key=>$msg){
           $msglist[$key]['child'] = Db::table('ym_bank')->where(['pid'=>$msg['id']])->order($order_key,$order)->select();  //查询数据
       }
       return $msglist;
   }
   
   /* 添加角色 */
   public function add($data){
       if(!empty($data)){
           $result = $this->validate(true)->allowField(true)->save($data);  //验证并添加数据
           ($result === false)?api_error($this->getError()): api_success('添加成功！');
       }
   }
    
   /* 修改角色 */
   public function edit($id,$data){
       if(!empty($id) && !empty($data)){
           $result = $this->validate(true)->allowField(true)->save($data,$id);  //验证并添加数据
           ($result === false)?api_error($this->getError()): api_success('修改成功！');
       }
   }
    
   /* 删除角色 */
   public function del($id){
       if(!empty($id)){
           $result = $this->where('id',$id)->delete();  //验证并添加数据
           ($result === false)?api_error($this->getError()): api_success('删除成功！');
       }
   }  
}
?>