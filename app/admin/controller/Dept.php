<?php
/**
 * 部门
 * author:liuxl
 **/
namespace app\admin\controller;
use think\Model;
use app\admin\model\Bank;
use think\Controller;


class Dept extends Base
{
    /*部门列表*/
    public function index(){
        return view('index');
    }
    //添加银行
    public function add(){
        $data = ['bankname'=>'12121','pid'=>1];
        $Bank = new Bank;
        $Bank->add($data);

        if(request()->isPost())
        {
            $data=input('post.');
            $Bank = new Bank;      
            $Bank->add($data);    
        }else{
            return view('bank');
        }
    }

}