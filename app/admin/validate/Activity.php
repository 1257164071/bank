<?php
namespace app\admin\validate;
use think\Validate;

class Activity extends Validate
{
    protected $rule = [
        'title'=>'require',
        'hold_time'=>'require'


    ];

    protected $message = [
        'title.require' => '标题必须填写',
        'hold_time.require' => '举行时间必须填写'
    ];
}