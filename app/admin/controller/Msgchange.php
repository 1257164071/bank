<?php


namespace app\admin\controller;
use think\Db;
use think\Controller;
//成员变更记录
//暂时模块不添加


class Msgchange extends Controller
{
    /*客户信息变更记录*/
    public function index()
    {
        $msgchange=model('Msgchange')->where(['is_del'=>0,'client_id'=>input('client_id')])->select();
        $this->assign('info',$msgchange);
        $this->assign('client',session('client'));
        $this->assign('title1','辅助信息');
        $this->assign('title2','成员信息变更记录');
        return $this->fetch();
    }
}