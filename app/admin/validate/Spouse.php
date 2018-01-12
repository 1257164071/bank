<?php

namespace app\admin\validate;
use think\Db;
use think\Validate;

class Spouse extends Validate
{
    protected $rule = [
        'spouse_name'  =>  'require',
        'spouse_sex'  =>  'require',
        'card_type'  =>  'require',
        'card_number'  =>  'require',


        
        
    ];

    protected $message = [
        'spouse_name.require'  =>'请填写配偶名称',
        'spouse_sex.require'  =>'请选择配偶性别',
        'card_type.require'  =>'请选择证件类型',
        'card_number.require'  =>'请填写证件号码',

        
                      
    ];

    // 自定义验证规则

}