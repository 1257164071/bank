<?php

namespace app\admin\validate;

use think\Validate;

class Other extends Validate
{
    protected $rule = [
        //'family_people'              =>  'require'
        // 'family_money'      =>  'require',
        // 'family_debt'         =>'require',
        // 'family_year_income'           =>'require',
        // 'family_year_spending'         =>'require'

    ];

    protected $message = [
       // 'family_people.require'  =>'请填写家庭总人数'
        // 'family_money.require'  =>'请填写家庭总资产',
        // 'family_debt.require'  =>'请填写家庭总欠债',
        // 'family_year_income.require'  =>'请填写家庭年收入',
        // 'family_year_spending.require'  =>'请填写家庭年支出'


    ];

    // // 自定义验证规则
    // protected function checkName($value,$rule,$data)
    // {
    //     return $rule == $value ? true : '名称错误';
    // }
}