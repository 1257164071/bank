<?php
namespace app\admin\validate;
use think\Validate;
class Deposit extends Validate
{
    protected $rule = [
        'account' => 'require|min:15|max:25|number',
        'save_amt' => 'require|float',
        'bank_id' => 'require',
        'save_time' => 'require',
        'lancun_worker' => 'require'
    ];

    protected $message = [
        'account.require' => '账号必须填写',
        'account.max'     => '请输入正确的银行卡账号',
        'account.min'     => '请输入正确的银行卡账号',
        'account.number'     => '账号必须是数字',
        'save_amt.require' => '存款金额必须填写',
        'save_amt.float' => '存款金额必须是数字',
        'bank_id.require' => '开户行必须选择',
        'save_time.require' => '存款时间必须选择',
        'lancun_worker.require' => '揽储员工必须选择'
    ];
}

