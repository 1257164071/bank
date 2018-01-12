<?php
namespace app\admin\validate;
use think\Validate;
class RbacNode extends Validate
{
    protected $rule = [
        'name'  => 'require|max:50',
        'status'  => 'require',
    ];

    protected $message = [
        'name.require' => '角色名称必须填写',
        'name.max'     => '角色名称最多不能超过50个字符',
        'status.require' =>  '是否开启必须选择',
    ];
}