<?php

namespace app\admin\controller;
use think\Db;
use think\Controller;


class Creditloan extends Base
{
    public  function index()
    {
       $incredit = db('intable_credit')->where(['client_id'=>input('client_id')])->select();

        $this->assign('incredit',$incredit);

        $this->assign('client',session('client'));
        $this->assign('controller',request()->controller());
        $this->assign('title1','辅助信息');
        $this->assign('title2','信贷信息');
        return $this->fetch();
    }

}