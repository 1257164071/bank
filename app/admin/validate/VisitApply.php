<?php
namespace app\admin\validate;
use think\Validate;

class VisitApply extends Validate
{
    protected $rule = [
        'type'=>'require',
        'apply_content'=>'require'


    ];

    protected $message = [
        'type.require' => '申请类型必须选择',
        'apply_content.require' => '申请描述必须填写'
    ];
}