<?php
namespace app\admin\model;
use think\Model;
use think\Db;
class Other extends Model
{
    protected $table="ym_other_message";


//添加
    public function add($data)
    {
        if(!empty($data)){

            $add_info=array(
                'client_id'		=>$data['client_id'],
                'class_result'		=>$data['class_result'],
                'family_people'	=>$data['family_people'],
                'family_money'				=>$data['family_money'],
                'family_debt'				=>$data['family_debt'],
                'family_year_income'	=>$data['family_year_income'],
                'family_year_spending'	=>$data['family_year_spending'],
                'wage_number'				=>$data['wage_number'],
                'wage_belong_bank'			=>$data['wage_belong_bank'],
                'add_time'				=>time()
            );


            $result=Db::name('other_message')->insert($add_info);
            if($result){
                return true;
            }else{
                return false;
            }
        }
        exit();
    }

    //修改
    public function edit($data)
    {
        if(!empty($data)){
            $edit_info=array(

                'class_result'		=>$data['class_result'],
                'family_people'	=>$data['family_people'],
                'family_money'				=>$data['family_money'],
                'family_debt'				=>$data['family_debt'],
                'family_year_income'	=>$data['family_year_income'],
                'family_year_spending'	=>$data['family_year_spending'],
                'wage_number'				=>$data['wage_number'],
                'wage_belong_bank'			=>$data['wage_belong_bank']

            );


            $result=Db::name('other_message')->where('client_id',$data['client_id'])->update($edit_info);
            if($result){
                return true;
            }else{
                return false;
            }
        }
        exit();
    }
}