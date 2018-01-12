<?php
/**
 * 营销管理
 */
namespace app\admin\controller;

class Spread extends Base
{

    /*营销首页*/
    public function lists(){

        return $this->fetch();
    }

    /*短信及邮件*/
    public function sms(){
        return $this->fetch();
    }




}