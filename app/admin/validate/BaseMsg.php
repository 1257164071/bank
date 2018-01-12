<?php
namespace app\admin\validate;
use think\Validate;
class BaseMsg extends Validate
{
    protected $rule = [
        //'tel_number'=>'require',
        //'province'=>'require',
       // 'city'=>'require',
       // 'area'=>'require',
       // 'grid'  => 'require'
    ];

    protected $message = [
//         'tel_number.require' => '联系方式必须填写',
//         'province.require' => '省必须选择',
//         'city.require' => '市必须选择',
//         'area.require' => '区必须选择',
//         'grid.require' => '小区必须选择'

    ];
}