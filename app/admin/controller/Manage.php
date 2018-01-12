<?php

namespace app\admin\controller;
use think\Db;
use think\Controller;


class Manage extends Base
{
    public function index()
    {
        $user=session('user');

        $id=db('bank')->where('pid',$user['bank_id'])->field('id')->select();
        $ids='';
        foreach($id as $k=>$v){
            $ids.=$v['id'].',';
        }
        $ids=$ids.$user['bank_id'];
        $where=' u.is_del=0 and  u.bank_id in ('.$ids.')';

        if(request()->isPost()) {
            //客户名称查询
            $post = input('post.');
            $this->assign('post', $post);
            //  dump($post);die;
            if (isset($post['name']) && !empty($post['name'])) {
                $where .= ' and c.name like "%' . $post['name'] . '%"';
            }
//            //日期查询
//            if (isset($post['start_visit_time']) && !empty($post['start_visit_time'])) {
//                $where .= ' and v.visit_time >= ' . strtotime($post['start_visit_time']);
//
//            }
//            if (isset($post['end_visit_time']) && !empty($post['end_visit_time'])) {
//                $where .= ' and v.visit_time <= ' . strtotime($post['end_visit_time']);
//            }
//            if (!empty($post['start_visit_time']) && !empty($post['end_visit_time'])) {
//                $where .= ' and v.visit_time >= ' . strtotime($post['start_visit_time']) . ' and v.visit_time <= ' . strtotime($post['end_visit_time']);
//            }
            //联系方式查询
            if (isset($post['mobile']) && !empty($post['mobile'])) {
                $where .= ' and u.mobile=' . $post['mobile'];
            }
            //客户经理查询
            if (isset($post['real_name']) && !empty($post['real_name'])) {
                $where .= ' and u.real_name like "%' . $post['real_name'] . '%"';
            }
            //客户的等级查询
            if(isset($post['client_grade'])&&is_numeric($post['client_grade'])){
                $where.=' and c.client_grade='.$post['client_grade'];
            }
        }
        $info=db('rbac_user')->alias('u')
         //  ->fetchSql(true)
            ->join('ym_bank b','u.bank_id=b.id','left')
            ->join('ym_client c','c.belong_user_id=u.id','left')
            ->where($where)->field('u.*,b.bankname,c.name,c.id client_id,c.client_grade,c.card_number')->paginate(10);
        //echo $info;
       // die;
//        foreach($info as $v){
//            echo $v['client_grade'];
//            echo '<hr>';
//        }
//          dump($info);
//        die;
        $this->assign('page',$info->render());
        $this->assign('info',$info);
        return $this->fetch();
    }

/*展示营销活动内容*/
    public function applying()
    {
        $user=session('user');
        $id=db('bank')->where('pid',$user['bank_id'])->field('id')->select();
        $ids='';
        foreach($id as $k=>$v){
            $ids.=$v['id'].',';
        }
        $ids=$ids.$user['bank_id'];
        $where=' u.bank_id in ('.$ids.')';
        if(request()->isPost()) {
            //客户名称查询
            $post = input('post.');
            $this->assign('post', $post);
            //  dump($post);die;
            if (isset($post['name']) && !empty($post['name'])) {
                $where .= ' and c.name like "%' . $post['name'] . '%"';
            }


            //客户经理查询
            if (isset($post['real_name']) && !empty($post['real_name'])) {
                $where .= ' and u.real_name like "%' . $post['real_name'] . '%"';
            }
            //客户的等级查询
            if(isset($post['client_grade'])&&is_numeric($post['client_grade'])){
                $where.=' and c.client_grade='.$post['client_grade'];
            }
        }

        $data=db('visit_apply')->alias('va')
            ->join('ym_rbac_user u','u.id=va.user_id','left')
            ->join('ym_bank b','u.bank_id=b.id','left')
            ->join('ym_client c','c.id=va.client_id','left')
            ->where($where)->field('va.*,b.bankname,c.id clinet_id,c.name,u.real_name')->paginate(10);
        $this->assign('data',$data);
        $this->assign('page',$data->render());
        return $this->fetch();
    }
     public  function shenpi()
     {
         if(request()->isPost()){
             $user=session('user');
             $res=db('visit_apply')->where(['client_id'=>input('client_id'),'user_id'=>input('user_id')])->update(['status'=>input('status'),'shenpi_content'=>input('shenpi_content'),'approver'=>$user['id'],'approve_time'=>time()]);
            if($res){
                api_success('审批成功');
            }else{
                api_error('审批失败');
            }
         }
         return $this->fetch();
     }
//营销活动
    public function activity()
    {
        $user=session('user');
        $id=db('bank')->where('pid',$user['bank_id'])->field('id')->select();
        $ids='';
        foreach($id as $k=>$v){
            $ids.=$v['id'].',';
        }
        $ids=$ids.$user['bank_id'];
        $where='a.is_del=0 and u.bank_id in ('.$ids.')';
        $info=db('activity')->alias('a')
            ->join('ym_rbac_user u','u.id=a.user_id','left')->where($where)->field('a.*,u.real_name')->paginate(10);
        $this->assign('page',$info->render());
        $this->assign('info',$info);
        return $this->fetch();
    }

}