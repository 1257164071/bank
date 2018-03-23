<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/1
 * Time: 10:48
 */
namespace app\admin\controller;
class  Finance extends Base{
    public function add(){
        if(request()->isPost()){
            $data=input('post.');


            $res=db('financial_info')->insert($data);
            if($res){
                api_success('添加成功！');
            }else{
                api_error('添加失败！');
            }

        }

        $this->assign('income_project',get_name('income_project'));
        $this->assign('house',get_name('house'));
        $this->assign('land',get_name('land'));
        $this->assign('car',get_name('car'));
        $this->assign('manage_project',get_name('manage_project'));
        $this->assign('client_id',input('client_id'));
        return $this->fetch();
    }
    public function edit(){
        if(request()->isPost()){
            $data=input('post.');



            $res=db('financial_info')->where('id',$data['id'])->update($data);
            if($res){
                api_success('修改成功！');
            }else{
                api_error('未进行任何修改！');
            }

        }
        $finance_info=db('financial_info')->where('client_id',input('client_id'))->find();
        $this->assign('finance_info',$finance_info);
        $this->assign('income_project',get_name('income_project'));
        $this->assign('house',get_name('house'));
        $this->assign('land',get_name('land'));
        $this->assign('car',get_name('car'));
        $this->assign('manage_project',get_name('manage_project'));
        return $this->fetch('add');
    }
}
