<?php

namespace app\admin\controller; 
use think\Db;
use think\Controller;


class Basemsg extends Base
{
/*添加客户的基本信息*/
    public function  add()
    {
        if(request()->isPost()){
            $data=input('post.');
            $result=$this->validate($data,'BaseMsg');
            if(true!==$result){
                api_error($result);
            }else{
                $res=model('BaseMsg')->add(input('post.'));
                if($res==true){
                    $user=session('user');
                    action_log('add_basemsg','BaseMsg',1,$user['id']);
                    api_success('添加成功！');
                }else{
                    api_error('添加失败！');
                }
            }

        }
        $grid = db('grid')->field('id,name,sort')->select();
        $this->assign('grid',$grid);
        $this->assign('client_id',input('client_id'));
        return $this->fetch();
    }
    /*修改客户的基本信息*/
    public function  edit()
    {
        if(request()->isPost()){
            $res=model('BaseMsg')->edit(input('post.'));
            if($res==true){
                $user=session('user');
                action_log('edit_basemsg','BaseMsg',1,$user['id']);
                api_success('修改成功！');
            }else{
                api_error('修改失败！');
            }
        }
        $base=model('BaseMsg')->where(['is_del'=>0,'client_id'=>input('client_id')])->find();
        //省 市 区 小区
        $province = db('area')->where(['code'=>$base['province']])->find();
        $city = db('area')->where(['code'=>$base['city']])->find();
        $area = db('area')->where(['code'=>$base['area']])->find();
        $gridmsg = db('grid')->where(['id'=>$base['grid']])->find();
        $grid = db('grid')->field('id,name,sort')->select();
        $hs = [];
        if(!empty($base)){
            $hs['lou'] = substr($base['housenum'],-8,-5);
            $hs['danyuan'] = substr($base['housenum'],-5,-4);
            $hs['hu'] = intval(substr($base['housenum'],-4));
//             $hs['jilou'] = intval(substr($base['housenum'],-4,-2));
//             $hs['jishi'] = intval(substr($base['housenum'],-2));
//             if(!empty($hs['danyuan'])){
//                 $hs['housepos'] = $hs['lou']*$hs['danyuan']*$hs['jilou']*$hs['jishi'];
//             }else{
//                 $hs['housepos'] = $hs['lou']*$hs['jilou']*$hs['jishi'];
//             }
        }
        if($base['married_record_date']==''){
            $base['married_record_date'] = time();
        }
        $this->assign('grid',$grid);
        $this->assign('client_id',input('client_id'));
        $this->assign('province',$province);
        $this->assign('city',$city);
        $this->assign('area',$area);
        $this->assign('gridnow',$gridmsg);
        $this->assign('base',$base);
        $this->assign('hs',$hs);
        return $this->fetch('add');
    }

}