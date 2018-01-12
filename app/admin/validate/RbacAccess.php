<?php
namespace app\admin\validate;
use think\Validate;
class RbacAccess extends Validate
{
    protected $rule = [
        'role_id'  => 'require',
        'node_id'  => 'require',
        'level'  => 'require',
    ]; 
}