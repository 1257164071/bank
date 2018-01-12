<?php
namespace app\admin\model;
use think\Model;
use think\Db;

class Incredit extends Model
{     
   
   protected $table="ym_loan";

  //添加表内的用信信息
//   public function add($data)
//   {
//        $add_info=array(
//           'client_id'=>$data['client_id'],
//           'contact_number'=>$data['contact_number'],
//           'ious_number'=>$data['ious_number'],
//           'guarantee_way'=>$data['guarantee_way'],
//           'mortgage'=>$data['mortgage'],
//           'loan_using'=>$data['loan_using'],
//           'provide_loan_money'=>$data['provide_loan_money'],
//           'loan_money'=>$data['loan_money'],
//           'debt_money'=>$data['debt_money'],
//           'use_rate'=>$data['use_rate'],
//           'provide_time'=>strtotime($data['provide_time']),
//           'arrive_time'=>strtotime($data['arrive_time']),
//           'settlement_time'=>strtotime($data['settlement_time']),
//           'loan_status'=>$data['loan_status'],
//           'add_time'=>time()
//        );
//
//// 		$add_res=Db::name('intable_credit')->insert($add_info);
//// 		if($add_res){
//// 			return true;
//// 		}else{
//// 			return false;
//// 		}
//        //$result = $this->validate(true)->allowField(true)->save($add_info);  //验证并添加数据
//
//        //事务控制 添加贷款和贷款记录
//        Db::startTrans();
//        try{
//            $this->validate(true)->allowField(true)->save($add_info);
//            model('BaseMsg')->loan_money(input('loan_money','','trim'),input('client_id','','trim'));
//            Db::commit();
//            $result = true;
//        }catch(\Exception $e) {
//            $result = false;
//            Db::rollback();
//        }
//        ($result === false)?api_error($this->getError()):api_success('添加成功！');
//   }

    //添加表内的用信信息
    public function add($data)
    {
         $data['provide_time_int'] = strtotime($data['provide_time_int']);
         $data['arrive_time_int'] = strtotime($data['arrive_time_int']);

        $result = $this->validate(true)->allowField(true)->save($data);
        ($result === false)?api_error($this->getError()):api_success('添加成功！');
    }


    //修改表内的用信信息
   public function edit($data)
   {

       $data['provide_time_int'] = strtotime($data['provide_time_int']);
       $data['arrive_time_int'] = strtotime($data['arrive_time_int']);

       $result = $this->validate(true)->allowField(true)->save($data,$data['id']);
       ($result === false)?api_error($this->getError()):api_success('修改成功！');
    }
    //修改表内的用信信息 v1
//    public function edit($data)
//    {
//        $edit_info=array(
//            'id'=>$data['id'],
//            'contact_number'=>$data['contact_number'],
//            'ious_number'=>$data['ious_number'],
//            'guarantee_way'=>$data['guarantee_way'],
//            'mortgage'=>$data['mortgage'],
//            'loan_using'=>$data['loan_using'],
//            'provide_loan_money'=>$data['provide_loan_money'],
//            'loan_money'=>$data['loan_money'],
//            'debt_money'=>$data['debt_money'],
//            'use_rate'=>$data['use_rate'],
//            'provide_time'=>strtotime($data['provide_time']),
//            'arrive_time'=>strtotime($data['arrive_time']),
//            'settlement_time'=>strtotime($data['settlement_time']),
//            'loan_status'=>$data['loan_status']
//        );
//        $loan_status = db('intable_credit')->where('id',$data['id'])->value('loan_status');
//
//        Db::startTrans();
//        try{
//            $this->validate(true)->allowField(true)->save($edit_info,$edit_info['id']);
//
//            if($data['loan_status'] == 3){
//                $bad_record = db('base_msg')->where('client_id',$data['client_id'])->value('bad_record');
//                if($loan_status != 3 ){
//                    $geng['bad_record'] = $bad_record + 1;
//                }else{
//                    $geng['bad_record'] = $bad_record;
//                }
//                // dump($loan_status);die;
//                db('base_msg')->where('client_id',$data['client_id'])->update($geng);
//
//            }
//            if($data['loan_status'] == 4){
//                $bad_record = db('base_msg')->where('client_id',$data['client_id'])->value('bad_record');
//                $geng['bad_record'] = ($loan_status != 4)?($bad_record - 1):$bad_record;
//                db('base_msg')->where('client_id',$data['client_id'])->update($geng);
//            }
//            Db::commit();
//            $result = true;
//        }catch(\Exception $e) {
//            $result = false;
//            Db::rollback();
//        }
//        ($result === false)?api_error($this->getError()):api_success('修改成功！');
//
//    }
    
    /* 删除  */
    public function del($id){
        if(!empty($id)){
            $intable_credit = db('loan')->where('id',$id)->find();
            //事务控制 添加存款和存款记录
            Db::startTrans();
            try{
                $this->where('id',$id)->delete();
                model('BaseMsg')->loan_money($intable_credit['loan_money'],$intable_credit['client_id'],'minus');
                Db::commit();
                $result = true;
            }catch(\Exception $e) {
                $result = false;
                Db::rollback();
            }
            $result =   //验证并添加数据
            ($result === false)?api_error($this->getError()):api_success('删除成功！');
        }
    }
}

