<?php
namespace app\admin\validate;
use think\Validate;
class RbacRole extends Validate
{
    protected $rule = [
        'name'  => 'require|max:50',
    ];

    protected $message = [
        'name.require' => '角色名称必须填写',
        'name.max'     => '角色名称最多不能超过50个字符',
    ];
}