<?php

namespace app\admin\validate;

use think\Validate;

class Sign extends Validate
{
    protected $rule = [
        'sign_website_number'              =>  'require',
        'sign_type'      =>  'require',
        'sign_time'         =>'require'

    ];

    protected $message = [
        'sign_website_number.require'  =>'签约网点号不能为空',
        'sign_type.require'  =>'请选择签约类型',
        'sign_time.require'  =>'签约时间不能为空'


    ];

    // // 自定义验证规则
    // protected function checkName($value,$rule,$data)
    // {
    //     return $rule == $value ? true : '名称错误';
    // }
}