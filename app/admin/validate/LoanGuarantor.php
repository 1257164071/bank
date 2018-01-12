<?php
namespace app\admin\validate;
use think\Validate;
class LoanGuarantor extends Validate
{
    protected $rule = [
        'real_name'  => 'require|max:20',
        'card' => 'require',
        'mobile' => 'require',
        'mortgage' => 'require',
        'address' => 'require'
    ];

    protected $message = [
        'real_name.require' => '担保人姓名必须填写',
        'real_name.max'     => '担保人姓名不能超过20个字符',
        'card.require' => '身份证必须填写',
        'mobile.require' => '联系方式必须填写',
        'mortgage.require' => '抵押物必须填写',
        'address.require' => '地址必须填写',
    ];
}