<?php
namespace app\admin\validate;
use think\Validate;
class Bank extends Validate
{
    protected $rule = [
        'bankname'  => 'require|max:50',
    ];

    protected $message = [
        'bankname.require' => '名称必须填写',
        'bankname.max'     => '名称最多不能超过50个字符',
    ];
}