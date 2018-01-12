<?php
namespace app\admin\validate;
use think\Validate;
class LoanBackrecord extends Validate
{
    protected $rule = [
        'back_time'  => 'require',
        'back_name' => 'require'
    ];

    protected $message = [
        'back_time.require' => '清收时间必须填写',
        'back_name.require' => '请收人必须填写'
    ];
}