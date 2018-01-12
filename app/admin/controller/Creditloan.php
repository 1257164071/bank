<?php

namespace app\admin\controller;
use think\Db;
use think\Controller;


class Creditloan extends Base
{
    public  function index()
    {
       $client_number = db('client')->where(['card_number'=>input('card_number')])->value('client_number');
       $incredit = db('loan')->where(['card_number'=>input('card_number')])->whereOr(['client_number'=>$client_number])->group('business_number')->order('provide_time_int desc')->select();

        $this->assign('incredit',$incredit);

        $this->assign('client',session('client'));
        $this->assign('controller',request()->controller());
        $this->assign('card_number',input('card_number'));
        $this->assign('title1','辅助信息');
        $this->assign('title2','信贷信息');
        return $this->fetch();
    }

}