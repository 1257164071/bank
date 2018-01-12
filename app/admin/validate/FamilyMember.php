<?php

namespace app\admin\validate;

use think\Validate;

class FamilyMember extends Validate
{
    protected $rule = [
        'members_name'              =>  'require',
        'members_relation'      =>  'require',
        'user_id'         =>'require'
    ];

    protected $message = [
        'members_name.require'  =>'请填写成员名称',
        'members_relation.require'  =>'请填写成员关系',
        'user_id.require'  =>'请填写创建人'



    ];

    // // 自定义验证规则
    // protected function checkName($value,$rule,$data)
    // {
    //     return $rule == $value ? true : '名称错误';
    // }
}