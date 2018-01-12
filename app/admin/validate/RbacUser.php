<?php
namespace app\admin\validate;
use think\Validate;
class RbacUser extends Validate
{
    protected $rule = [
        'username'  => 'require|min:4|max:30|alphaNum',
        'password'  => 'require',
        'real_name'  => 'require',
        'sex'  => 'require',
        'mobile'  => 'number|length:11',
        'email'  => 'email',
        'bank_id'  => 'require',
        'role_id'  => 'require',
        'edit_time'  => 'require',
        'last_login_time'  => 'require',
        'last_login_ip'  => 'require',
        'login_count'  => 'require',
        'is_del'  => 'require',
    ];

    protected $message = [
        'name.require' => '用户名必须填写',
        'name.max'     => '用户名4-30个数字/字母',
        'name.min'     => '用户名4-30个数字/字母',
        'name.alphaNum'     => '用户名6-30个数字/字母',
        'password.require'  => '',
        'real_name.require'  => '',
        'sex.require'  => '',
        'mobile.number'  => '|手机号必须是数字',
        'mobile.length'  => '|手机号长度为11位',
        'email.email'  => '',
    ];
}

