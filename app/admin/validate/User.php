<?php

namespace app\admin\validate;

use think\Validate;

class User extends Validate
{
    protected $rule = [
        'username'  =>  'require|min:4|max:12',
        'password'  =>  'require',
        //'captcha'   =>  'require'
    ];

    protected $message = [
        'username.require'  =>'账号不能为空！',
        'username.min'      =>'请输入4-12位的用户名',
        'username.max'      =>'请输入4-12位的用户名',
        'password.require'  =>'密码不能为空',
        //'captcha.require'   =>'验证码不能为空'                
    ];

    // // 自定义验证规则
    // protected function checkName($value,$rule,$data)
    // {
    //     return $rule == $value ? true : '名称错误';
    // }
}