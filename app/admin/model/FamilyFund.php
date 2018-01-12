<?php
/**
 * Rbac-客户-资产
 * author:liuxl
 **/
namespace app\admin\model;
use think\Model;
use think\Db;

class FamilyFund extends Model
{
    //需要调用`Model`的`initialize`方法
    protected function initialize()
    {
        parent::initialize();    //TODO:自定义的初始化
    }
    
    protected $type = [
        'fund_ck_date'    =>  'timestamp',
        'house_ck_date'    =>  'timestamp',
        'car_ck_date'    =>  'timestamp',
        'land_ck_date'    =>  'timestamp',
        'company_ck_date'    =>  'timestamp',
        'device_ck_date'    =>  'timestamp'
    ];
    
    
    /* 查询担保人  */
    public function getone($id){
        if(!empty($id)){
            $msg = $this->where('id',$id)->find();  //查询数据
        }
        return $msg;
    }
    
    /* 查询担保人 */
    public function getlist($condition='',$limit=15,$order_key='id',$order='asc'){
        $msglist = Db::table('ym_family_fund')->where($condition)->limit($limit)->order($order_key,$order)->select();  //查询数据       
        return $msglist;     
    }

    /* 添加担保人 */
    public function add($data){
       if(!empty($data)){      
           $result = $this->validate(true)->allowField(true)->save($data);  //验证并添加数据
           ($result === false)?api_error($this->getError()): api_success('添加成功！');
       }
   }
   
   /* 修改担保人 */
   public function edit($data){
       if(!empty($data)){
           $result = $this->validate(true)->allowField(true)->save($data,$data['id']);  //验证并添加数据
           ($result === false)?api_error($this->getError()): api_success('修改成功！');
       }
   }
   
   /* 删除担保人 */
   public function del($id){
       if(!empty($id)){
           $result = $this->where('id',$id)->delete();  //验证并添加数据
           ($result === false)?api_error($this->getError()): api_success('删除成功！');
       }
   }
}
?>