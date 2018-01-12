<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/3
 * Time: 15:41
 */

namespace app\admin\controller;
use think\Db;
use think\Controller;


class Picupload extends Base
{

/** 附件展示 */
    public function index()
    {
       $pic=db('client_picture')->where(['is_del'=>0,'client_id'=>input('client_id')])->select();
        foreach($pic as $k=>$v){
            $arr=explode('##',$v['picurl']);
            $info[$k]['picurl']=$arr[0];
        }
        $this->assign('pic',$pic);
        $this->assign('client',session('client'));
        $this->assign('title1','辅助信息');
        $this->assign('title2','附件上传');
        $this->assign('controller',request()->controller());
        return $this->fetch();
    }
    /*删除附件信息*/
    public function del()
    {
        $id=input('pic_id');
        if(is_numeric($id)&&isset($id)){
            $res=model('Picupload')->where('id',$id)->update(['is_del'=>1]);
            if($res){
                $this->success('删除成功！');
            }else{
                $this->error('删除失败！');
            }
            exit();
        }

    }
/*图片上传*/
    public function upload(){

        // 获取表单上传文件 例如上传了001.jpg

        $file = request()->file('file');
        $filename=date('Ymd',time()).input('client_id').rand('1000','9999');

        $info = $file->move(ROOT_PATH . 'public/uploads/'.date('Ymd',time()),$filename,false);
        if($info){

             api_success('添加成功！',['picurl'=>'/public/uploads/'.date('Ymd',time()).'/'.$info->getSaveName().'##']);
//
        }else{
            // 上传失败获取错误信息
            api_error($file->getError()) ;
        }
    }


    /*添加附件信息*/
    public function add()
    {
        if(request()->isPost()){
            $res=model('Picupload')->add(input('post.'));
            if($res==true){
                api_success('添加成功！');
            }else{
                api_error('添加失败！');
            }
        }
        $this->assign('client_id',input('client_id'));
        return $this->fetch('add');
    }
    /*修改附件信息*/
    public function edit()
    {
        if(request()->isPost()){
            $res=model('Picupload')->edit(input('post.'));
            if($res==true){
                api_success('修改成功！');
            }else{
                api_error('修改失败！');
            }
        }

        $deposit=model('Picupload')->where('id',input('deposit_id'))->find();
        $this->assign('deposit',$deposit);
        return $this->fetch('add');
    }

    /*查看上传的详情*/
    public function  detail()
    {
        $id=input('pic_id');
        if(is_numeric($id)&&!empty($id)){
            $data=model("Picupload")->alias('p')->join('ym_client c','p.client_id=c.id','left')
                ->join('ym_bank b','c.belong_organization=b.id','left')
                ->field('p.*,c.name,b.bankname')->where('p.id',$id)->find();
            $arr=explode('##',rtrim($data['picurl'],'##'));
            $this->assign('data',$data);
            $this->assign('list',$arr);
            return $this->fetch();

        }
        exit();
    }
}