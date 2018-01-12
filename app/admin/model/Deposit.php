<?php
namespace app\admin\model;
use think\Model;
use think\Db;
class Deposit extends Model
{
    protected $table="ym_deposit";


//添加
    public function add($data)
    {
        if(!empty($data)){
            $add_info=array(
                'client_id'		=>$data['client_id'],
                'account'		=>$data['account'],
                'save_amt'		=>$data['save_amt'],
                'bank_id'	=> $data['bank_id'],
                'opening_time'				=>strtotime($data['opening_time']),
                'account_status'				=>$data['account_status'],
                'currency'	=>$data['currency'],
                'deposit_type'	=>$data['deposit_type'],
                'save_time'			=>strtotime($data['save_time']),
                'lancun_worker'			=>$data['lancun_worker'],
                'add_time'				=>time()
            );
           
        
            $result = $this->validate(true)->allowField(true)->save($add_info);
                
            
            ($result === false)?api_error($this->getError()): api_success('添加成功！');
        }
        exit();
    }

    //修改
    public function edit($data)
    {
        if(!empty($data)){
            $edit_info=array(
                'id' => $data['id'],
                'account'		=>$data['account'],
                'save_amt'		=>$data['save_amt'],
                'bank_id'	=>$data['bank_id'],
                'opening_time'				=>strtotime($data['opening_time']),
                'account_status'				=>$data['account_status'],
                'currency'	=>$data['currency'],
                'deposit_type'	=>$data['deposit_type'],
                'save_time'			=>strtotime($data['save_time']),
                'lancun_worker'			=>$data['lancun_worker']
            );
       
            $result = $this->validate(true)->allowField(true)->save($edit_info,$edit_info['id']);
            ($result === false)?api_error($this->getError()): api_success('修改成功！');
        }
        exit();
    }

   /* 删除  */
   public function del($id){
       if(!empty($id)){
           $deposit = db('deposit')->where('id',$id)->find();
           //事务控制 添加存款和存款记录
           Db::startTrans();
           try{
               $this->where('id',$id)->delete();
               model('BaseMsg')->save_money($deposit['save_amt'],$deposit['client_id'],'minus');
               Db::commit();
               $result = true;
           }catch(\Exception $e) {
               $result = false;
               Db::rollback();
           }
           $result =   //验证并添加数据
           ($result === false)?api_error($this->getError()): api_success('删除成功！');
       }
   }
}