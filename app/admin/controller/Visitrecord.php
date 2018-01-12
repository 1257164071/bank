<?php

namespace app\admin\controller;
use think\Db;
use think\Controller;


class Visitrecord extends Base
{
    /* 营销管理的我的客户显示*/
    public function show()
    {

        $user = session('user');
        $where = ' c.is_del=0 and c.belong_user_id= ' . $user['id'];
        if (request()->isPost()) {
            //客户名称查询
            $post = input('post.');
            $this->assign('post', $post);
            //  dump($post);die;
            if (isset($post['name']) && !empty($post['name'])) {
                $where .= ' and c.name like "%' . $post['name'] . '%"';
            }
            //客户的等级查询
            if (isset($post['client_grade']) && is_numeric($post['client_grade'])) {
                $where .= ' and c.client_grade=' . $post['client_grade'];
            }
            //客户的省查询
            if (isset($post['province']) && !empty($post['province'])) {
                $where .= ' and b.province=' . $post['province'];
            }
            //客户的城市查询
            if (isset($post['city']) && !empty($post['city'])) {
                $where .= ' and b.city=' . $post['city'];
            }
            //客户的区查询
            if (isset($post['area']) && !empty($post['area'])) {
                $where .= ' and b.area=' . $post['area'];
            }
            //客户的小区搜索
            if (isset($post['current_address']) && !empty($post['current_address'])) {
                $where .= ' and b.current_address like "%' . $post['current_address'] . '%"';
            }
            //联系方式查询
            if (isset($post['tel_number']) && !empty($post['tel_number'])) {
                $where .= ' and c.tel_number=' . $post['tel_number'];
            }
        }

        $info = Db::name('client')->alias('c')
            ->join('ym_base_msg b', 'b.client_id=c.id', 'left')
            ->where($where)->field('c.id,c.name,c.card_number,c.client_grade,c.tel_number,b.current_address')->distinct(true)->order('c.id desc')->paginate(10);

        $this->assign('page', $info->render());
        $this->assign('info', $info);
        return $this->fetch();
    }

    /*查看拜访记录的详情*/
    public function detail()
    {
        $client_id = input('client_id');
        if (is_numeric($client_id) && !empty($client_id)) {

            $info = db('visit_record')->alias('v')->join('ym_client c', 'v.client_id=c.id', 'left')->field('c.name,v.*')->where(['v.is_del' => 0, 'v.client_id' => $client_id])->order('v.id asc')->select();
    
            $this->assign('info', $info);
            return $this->fetch();
        }

        exit();
    }

    /*添加客户拜访记录*/
    public function add()
    {
        if (request()->isPost()) {
            $res = model('Visitrecord')->add(input('post.'));
            if ($res == true) {
                api_success('添加成功！');
            } else {
                api_error('添加失败！');
            }
        }

        return $this->fetch();
    }
    /*图片上传*/
    public function visit_upload(){

        // 获取表单上传文件 例如上传了001.jpg

        $file = request()->file('file');
        $filename=date('Ymd',time()).rand('1000','9999');

        $info = $file->move(ROOT_PATH . 'public/uploads/visit',$filename,false);
        if($info){

            api_success('添加成功！',['picurl'=>'/public/uploads/visit/'.$info->getSaveName().'##']);
//
        }else{
            // 上传失败获取错误信息
            api_error($file->getError()) ;
        }
    }


    /*编辑客户拜访记录*/
    public function edit()
    {
        if (request()->isPost()) {
            $res = model('Visitrecord')->edit(input('post.'));
            if ($res == true) {
                api_success('修改成功！');
            } else {
                api_error('修改失败！');
            }
        }
        $visit = db('visit_record')->where(['is_del' => 0, 'id' => input('visit_id')])->find();
        $this->assign('visit', $visit);
        return $this->fetch('add');
    }

    /*删除拜访记录*/
    public function del()
    {
        $res = model('Visitrecord')->where('id', input('visit_id'))->update(['is_del' => 1]);
        if ($res) {
            $this->success('删除成功！');

        } else {
            $this->error('删除失败！');

        }
    }
    public  function visit_detail(){
        $visit_id=input('visit_id');
        if(!empty($visit_id)&&is_numeric($visit_id)){
            $visit=db('visit_record')->alias('r')->join('ym_client c','r.client_id=c.id','left')->where('r.id',$visit_id)->field('r.*,c.name')->find();

            $arr=explode('##',rtrim($visit['picurl'],'##'));
            $this->assign('list',$arr);
            $this->assign('visit',$visit);
        }
        return $this->fetch();
    }


    /*我的拜访记录*/
    public function lists()
    {


        $user = session('user');
        $where = ' v.is_del=0 and v.user_id= ' . $user['id'];
        if (request()->isPost()) {
            //客户名称查询
            $post = input('post.');
            $this->assign('post', $post);
            //  dump($post);die;
            if (isset($post['name']) && !empty($post['name'])) {
                $where .= ' and c.name like "%' . $post['name'] . '%"';
            }
            //日期查询
            if (isset($post['start_visit_time']) && !empty($post['start_visit_time'])) {
                $where .= ' and v.visit_time >= ' . strtotime($post['start_visit_time']);

            }
            if (isset($post['end_visit_time']) && !empty($post['end_visit_time'])) {
                $where .= ' and v.visit_time <= ' . strtotime($post['end_visit_time']);
            }
            if (!empty($post['start_visit_time']) && !empty($post['end_visit_time'])) {
                $where .= ' and v.visit_time >= ' . strtotime($post['start_visit_time']) . ' and v.visit_time <= ' . strtotime($post['end_visit_time']);
            }
            //联系方式查询
            if (is_numeric($post['tel_number']) && !empty($post['tel_number'])) {
                $where .= ' and c.tel_number=' . $post['tel_number'];
               
            }

        }
        $info = db('visit_record')->alias('v')
            ->join('ym_client c', 'v.client_id=c.id', 'left')
            ->join('ym_base_msg b', 'v.client_id=b.client_id', 'left')
            ->join('ym_visit_apply va', 'va.record_id=v.id', 'left')
            ->where($where)->field('v.*,c.name,c.card_number,b.current_address,c.tel_number,va.status')
            ->order('v.visit_time desc')->paginate(10);

        $this->assign('page', $info->render());
        $this->assign('info', $info);
        return $this->fetch();
    }

    /*客户经理申请*/
    public function apply()
    {
        if (request()->isPost()) {
            $data = input('post.');
            $result = $this->validate($data, 'VisitApply');
            if ($result !== true) {
                api_error($result);
            } else {
//                 dump($data);
//                die;

                $visit = model('visitrecord')->find($data['record_id']);
                $add=array(
                    'client_id'=>$data['client_id'],
                    'user_id'=>$data['user_id'],
                    'apply_content'=>$data['apply_content'],
                    'type'=>$data['type'],
                    'status'=>1,
                    'add_time'=>time()

                );
                $res = $visit->apply()->save($add);
                if ($res == true) {
                    api_success('添加成功！');
                } else {
                    api_error('添加失败！');
                }
            }

        }
        return $this->fetch();
    }
    public function applydetail()
    {


        $info =db('visit_apply')->alias('a')
            ->join('ym_client c','c.id=a.client_id','left')
            ->join('ym_rbac_user u','a.approver=u.id','left')
            ->where(['record_id'=>input('record_id')])->field('a.*,c.name,u.real_name')->find();
//        dump($info);
//        die;
        $this->assign('info',$info);
        return $this->fetch();
    }
    public function applyedit(){
        if (request()->isPost()) {
            $res = model('VisitApply')->edit(input('post.'));
            if ($res == true) {
                api_success('修改成功！');
            } else {
                api_error('修改失败！');
            }
        }
        $apply = db('visit_apply')->where([ 'id' => input('id')])->find();
        $this->assign('apply', $apply);
        return $this->fetch('apply');
    }


    //营销活动
    public function activeshow()
    {
        $user = session('user');
        $where = ' is_del=0 and user_id= ' . $user['id'];
        $info=db('activity')->where($where)->order('id desc')->paginate(10);
        $this->assign('page',$info->render());
        $this->assign('info',$info);

        return  $this->fetch();
    }
    /*图片上传*/
    public function upload(){

        // 获取表单上传文件 例如上传了001.jpg

        $file = request()->file('file');
        $filename=date('Ymd',time()).rand('1000','9999');

        $info = $file->move(ROOT_PATH . 'public/uploads/activity',$filename,false);
        if($info){
            api_success('添加成功！',['picurl'=>'/public/uploads/activity/'.$info->getSaveName().'##']);
//
        }else{
            // 上传失败获取错误信息
            api_error($file->getError()) ;
        }
    }
    public function activeadd()
    {
        if(request()->isPost()){
            $data=input('post.');
            $res=$this->validate($data,'Activity');
            if(true==$res){
                $result=model('Activity')->add($data);
                if($result){
                    $user=session('user');
                    action_log('add_activity','Activity',1,$user['id']);
                    api_success('添加成功！');
                }else{
                    api_error('添加失败！');

                }
            }else{
                api_error($res);
            }

        }
        $this->assign('user',session('user'));
        $this->assign('url',url('activeadd'));
        return $this->fetch();
    }
    public function activeedit()
    {
        if(request()->isPost()){
            $res=model('Activity')->edit(input('post.'));
            if($res==true){
                $user=session('user');
                action_log('edit_activity','Activity',1,$user['id']);
                api_success('修改成功！');
            }else{
                api_error('修改失败！');
            }
        }
        $activity_id=input('activity_id');
        if(!empty($activity_id)&&is_numeric($activity_id)){
            $activity=db('activity')->where('id',$activity_id)->find();
            $this->assign('activity',$activity);
        }
        $this->assign('url',url('activeedit'));
        return $this->fetch('activeadd');
    }
    public function activedel()
    {
        $res = model('Activity')->where('id', input('activity_id'))->update(['is_del' => 1]);
        if ($res) {
            $this->success('删除成功！');

        } else {
            $this->error('删除失败！');

        }
    }
    public function activedetail()
    {    $activity_id=input('activity_id');
        if(!empty($activity_id)&&is_numeric($activity_id)){
            $activity=db('activity')->alias('a')->join('ym_rbac_user u','a.user_id=u.id','left')->where('a.id',$activity_id)->field('a.*,u.real_name')->find();
            $arr=explode('##',rtrim($activity['pic_url'],'##'));
            $this->assign('list',$arr);
            $this->assign('activity',$activity);
        }
        return $this->fetch();
    }
      //活动的准备和费用
    public function activezhunbei()
    {
       $activity_id=input('activity_id');
       if(!empty($activity_id)){
            $zhunbei_info=db('activity_zhunbei')->alias('z')->join('ym_activity a','z.activity_id=a.id','left')->field('z.*,a.title')->where(['activity_id'=>$activity_id])->paginate(10);
       }
        $this->assign('page',$zhunbei_info->render());
        $this->assign('activity_id',$activity_id);
        $this->assign('title1','营销管理');
        $this->assign('title2','活动的准备和费用');
        $this->assign('info',$zhunbei_info);
        
        return $this->fetch();
    }
    //活动准备的添加
    public function activezhunbei_add()
    {
        if(request()->isPost()){
            $data=input('post.');
            $data['add_time']=time();
            $result=db('activity_zhunbei')->insert($data);
            if($result){
                $user=session('user');
                action_log('add_activity_zhunbei','Visitrecord',1,$user['id']);
                api_success('添加成功！');
            }else{
                api_error('添加失败！');

            }
            

        }
        $this->assign('activity_id',input('activity_id'));        
        $this->assign('url',url('activezhunbei_add'));
        return $this->fetch();
    }
    //活动准备的修改
    public function activezhunbei_edit()
    {
        if(request()->isPost()){
            $data=input('post.');
            $res=db('activity_zhunbei')->where(['id'=>$data['id']])->update($data);
            if($res==true){
                $user=session('user');
                action_log('edit_activity_zhunbei','Visitrecord',1,$user['id']);
                api_success('修改成功！');
            }else{
                api_error('修改失败！');
            }
        }
        $id=input('id');
        if(!empty($id)&&is_numeric($id)){
            $zhunbei_info=db('activity_zhunbei')->where('id',$id)->find();
            $this->assign('info',$zhunbei_info);
        }
        
        $this->assign('url',url('activezhunbei_edit'));
        return $this->fetch('activezhunbei_add');
    }
    //活动准备的删除
    public function activezhunbei_del()
    {
        $id=input('id');
        $res = db('activity_zhunbei')->where(['id'=>$id])->delete();
        if ($res) {
            $this->success('删除成功！');

        } else {
            $this->error('删除失败！');

        }
    }
    //活动的效果和心得
    public function activeresult()
    {
        $activity_id=input('activity_id');
        if(!empty($activity_id)){
             $result_info=db('activity_result')->alias('r')->join('ym_activity a','r.activity_id=a.id','left')->field('r.*,a.title')->where(['activity_id'=>$activity_id])->paginate(10);
        }
         $this->assign('page',$result_info->render());
         $this->assign('activity_id',$activity_id);
         $this->assign('title1','营销管理');
         $this->assign('title2','活动的效果和心得');
         $this->assign('info',$result_info);
         
         return $this->fetch();
    }
    //活动的效果和心得的添加
    public function activeresult_add()
    {
        if(request()->isPost()){
            $data=input('post.');
            $data['add_time']=time();
            $result=db('activity_result')->insert($data);
            if($result){
                $user=session('user');
                action_log('add_activity_result','Visitrecord',1,$user['id']);
                api_success('添加成功！');
            }else{
                api_error('添加失败！');

            }
            

        }
        $this->assign('activity_id',input('activity_id'));        
        $this->assign('url',url('activeresult_add'));
        return $this->fetch();
    }
    //活动的效果和心得的修改
    public function activeresult_edit(){
        if(request()->isPost()){
            $data=input('post.');
            $res=db('activity_result')->where(['id'=>$data['id']])->update($data);
            if($res==true){
                $user=session('user');
                action_log('edit_activeresult','Visitrecord',1,$user['id']);
                api_success('修改成功！');
            }else{
                api_error('修改失败！');
            }
        }
        $id=input('id');
        if(!empty($id)&&is_numeric($id)){
            $result_info=db('activity_result')->where('id',$id)->find();
            $this->assign('info',$result_info);
        }
        
        $this->assign('url',url('activeresult_edit'));
        return $this->fetch('activeresult_add');
    }
    //活动的效果和心得的删除
    public function activeresult_del()
    {
        $id=input('id');
        $res = db('activity_result')->where(['id'=>$id])->delete();
        if ($res) {
            $this->success('删除成功！');

        } else {
            $this->error('删除失败！');

        }
    }
}