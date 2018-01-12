<?php

namespace app\admin\validate;

use think\Validate;

class Client extends Validate
{
    protected $rule = [
        'name'              =>  'require',
        'card_number'      =>  'require',
        // 'born_date'         =>'require',
        // 'address'           =>'require',
        // 'valid_time'         =>'require',
        // 'issue_office'      =>'require',
        'belong_user_id'               =>'require',
        'belong_organization'               =>'require',
        // 'lng'=>'require',
        // 'lat'=>'require'
    ];

    protected $message = [
        'name.require'  =>'客户名称不能为空并填写真实姓名',
        // 'born_date.require'  =>'出身日期不能为空',
        // 'address.require'  =>'身份证地址不能为空',
        // 'issue_office.require'  =>'签发机关不能为空',
        'belong_user_id.require'  =>'客户经理不能为空',
        'belong_organization.require'  =>'所属机构不能为空',
        'card_number.require'  =>'证件号码不能为空',
        // 'lng.require'  =>'请在地图上选择您的位置',
        // 'lat.require'  =>'请在地图上选择您的位置'
                      
    ];

    // // 自定义验证规则
    // protected function checkName($value,$rule,$data)
    // {
    //     return $rule == $value ? true : '名称错误';
    // }
}