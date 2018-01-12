<?php
/**
 * 网格地图类.
 */

namespace app\admin\controller;


class Grid extends Base
{

    /*网格列表*/
    public function gridlist(){
        $user = session('user');
        $res = db('grid')->alias('g')->join('ym_rbac_user u','g.xiaoqu_manger=u.id')->field('g.*,u.real_name')->where('user_id',$user['id'])->order('id','asc')->select();

        $this->assign("gridlist",$res);
        return $this->fetch();
    }

     public function allgrid(){

        $user = session('user');
        $res = db('grid')->order('id','asc')->select();

        $this->assign("gridlist",$res);
        return $this->fetch();
    }

    /*添加网格*/
    public function gridadd(){
        if (request()->isPost()){
            $data['name'] = input('name');
            $data['data'] = input('data');
            $data['remark'] = input('remark');
            empty($data['name']) && api_error('请填写网格名！');

            $id = input('id');
            if (!empty($id) && is_numeric($id)){
                $data['id'] = $id;
                $res = db('grid')->update($data);
            }else{
                $res = db('grid')->insert($data);
            }

            if($res){
                api_success('保存成功！');
            }else{
                api_error('保存失败！');
            }
        }else{
            $gridata = 0;
            if (input('id')){
                $data['id'] = input('id');
                $res = db('grid')->where($data)->find();
                $gridata = $res['data'];
                $this->assign('grid',$res);
            }
            $this->assign('gridata',$gridata);
            return $this->fetch();
        }
        exit();
    }


    /*获取用户坐标*/
    public function getloc(){
        if(request()->isPost()){

        }else{
            $res = db('client')->where('is_del',0)->field('id,name,card_number,lng,lat')->select();
            if($res){
                //获取数组内元素个数
                $num =count($res);
                //通过循环向每个元素中添加center索引，因为前台JS调用的值有center属性
                for ($i=0; $i<$num; $i++) {
                    $res[$i]['center'] = $res[$i]['lng'].",".$res[$i]['lat'];
                    $res[$i]['href'] = url('admin/client/clientdetail',['client_id'=>$res[$i]['id']]);
                }
                $this->assign('locs',json_encode($res));
            }
            return $this->fetch();
        }
        exit();
    }
    
    /*小区列表*/
    public function gridlists(){

        $user = session('user');
        //可以查看所有小区的角色
        $lookallrole = ['13'];
        // if(!in_array($user['role_id'],$lookallrole)){
        //     $res = db('grid')->alias('g')->join('ym_rbac_user u','g.xiaoqu_manger=u.id','left')->field('g.*,u.real_name')->where('g.xiaoqu_manger',$user['id'])->order('g.guestnum','desc')->select();
        // }else{
        //     $res = db('grid')->alias('g')->join('ym_rbac_user u','g.xiaoqu_manger=u.id','left')->field('g.*,u.real_name')->order('g.guestnum','desc')->select();
        // }
        // foreach($res as $k=>$v){
        //     $count = db('client')->where('grid',$v['id'])->count();
        //     $res[$k]['guestnum'] = $count;
        // }
         // dump($res);die;
        $gridlist = db('client')->query('select grid,count(grid) as count from ym_client GROUP BY grid having count > 0 ORDER BY count desc');
        foreach($gridlist as $k=>$v){
            $grid = db('grid')->where('id',$v['grid'])->find();
            $gridlists[$v['grid']]['id'] = $grid['id'];
            $gridlists[$v['grid']]['name'] = $grid['name'];
            $gridlists[$v['grid']]['gridtype'] = $grid['gridtype'];
            $gridlists[$v['grid']]['manger_name'] = $grid['manger_name'];
            $gridlists[$v['grid']]['count'] = $v['count'];
        }
        $grids = db('grid')->select();
        foreach($grids as $k=>$v){
            $grids[$k]['count'] = isset($gridlists[$v['id']]['count'])?$gridlists[$v['id']]['count']:'';
        }
        array_multisort($grids,SORT_DESC);
        $this->assign("gridlist",$grids);
        return $this->fetch();
    }
    
    /*添加小区*/
    public function gridadds(){
        if (request()->isPost()){
           
            $manger_id = input('xiaoqu_manger');
          
            $manger_name = db('rbac_user')->where('id',$manger_id)->value('real_name');
            $data['name'] = input('name');
            $data['data'] = input('data');
            $data['user_id'] = input('user_id');
            $data['sort'] = input('sort');
            $data['xiaoqu_manger'] = input('xiaoqu_manger');
            $data['manger_name'] =  $manger_name;
            $data['remark'] = input('remark');
    
            empty($data['name']) && api_error('请填写小区名！');
            $id = input('id');
            if (!empty($id) && is_numeric($id)){
                $data['id'] = $id;
                $res = db('grid')->update($data);
            }else{
                $res = db('grid')->insert($data);
            }
            if($res){
                api_success('保存成功！');
            }else{
                api_error('保存失败！');
            }
        }else{
            $gridata = 0;
            if (input('id')){
                $data['id'] = input('id');
                $res = db('grid')->where($data)->find();
                $gridata = $res['data'];
                $this->assign('grid',$res);
            }
            $alluser = db('rbac_user')->alias('u')->join('bank b','u.bank_id = b.id')->order('bank_id','asc')->field('u.id,u.bank_id,u.real_name,b.bankname')->select();
    
            $jia = '';
            foreach($alluser as $k=>$v){
                if($jia != $v['bank_id']){
                    $jia = $v['bank_id'];
                    $alluser[$k]['level']= $v['bankname'];
                }
            }
            $user=session('user');
            $where=' 1=1 and u.role_id=10 ';
           if($user['bank_id']!=1){
               $id=db('bank')->where('pid',$user['bank_id'])->field('id')->select();
               $ids='';
               foreach($id as $k=>$v){
                   $ids.=$v['id'].',';
               }
               $ids=$ids.$user['bank_id'];
               $where.='and  u.is_del=0  and  u.bank_id in ('.$ids.')';
           }
           //银行机构和客户经理
            $banks = db('bank')->where(['is_del'=>0])->field('id,bankname')->select();

            foreach($banks as $k=>$b){
                $banks[$k]['manager'] = db('rbac_user')->where(['bank_id'=>$b['id'],'role_id'=>array('in',array(7,9,10)),'id'=>array('not in',array(6,9,12,269))])->field('id,real_name')->select();
            }
            $this->assign('banks',$banks);
            $this->assign('alluser',$alluser);
            $this->assign('gridata',$gridata);
            //$this->assign('user',$user);
            return $this->fetch();
        }
        exit();
    }

    public function wangge(){
        $id = input('id');
        if(!empty($id)){
            $gridmsg = db('grid')->where(['id'=>$id])->find();
            $this->assign('gridmsg',$gridmsg);
            
            $clientlist = db('client')->where('grid',$id)->field('id,name,sex,card_number,address,hu,class_result,housenum,housepos')->select();
         
            $pos = [];
            $lou = [];
            if(isset($gridmsg) && !empty($gridmsg['gridtype'])){
                foreach($clientlist as $k=>$v){
                    if($v['hu'] == 0){
                        $pos['wu'][$k] = $v;  //无户号
                    }else{
                        $louvar = substr($v['housenum'],-8,-5);
                        $pos['you'][$louvar][$v['housepos']] = $v;
                        if(substr($v['housenum'],-5,-4) != 0){
                            $pos['you'][$louvar][$v['housepos']]['hunit'] =  substr($v['housenum'],-8,-5).'号楼'.substr($v['housenum'],-5,-4).'单元'.intval(substr($v['housenum'],-4)).'室';
                        }else{
                            $pos['you'][$louvar][$v['housepos']]['hunit'] =  substr($v['housenum'],-8,-5).'号楼'.intval(substr($v['housenum'],-4)).'室';
                        }
                        $lou[$k] = $louvar;
                    }
                }
            }else{
                foreach($clientlist as $k=>$v){
                    if($v['hu'] == 0){
                        $pos['wu'][$k] = $v;    //无户号
                    }else{
                        $louvar = $v['hu'];
                        $pos[$louvar] = $v;
                    }
                }
            }
           
            $this->assign('pos',$pos);
            $this->assign('gridmsg',$gridmsg);
            $this->assign('clientlist',$clientlist);
        }
       // dump($clientlist);
        return $this->fetch();
    }

    /*
     *
     * 按客户经理划分小区
     *
     * */
    public function manger(){

        $user=session('user');
        $where=' 1=1 and u.role_id=10 ';
        if($user['bank_id']!=1){
            $id=db('bank')->where('pid',$user['bank_id'])->field('id')->select();
            $ids='';
            foreach($id as $k=>$v){
                $ids.=$v['id'].',';
            }
            $ids=$ids.$user['bank_id'];
            $where.='and  u.is_del=0  and  u.bank_id in ('.$ids.')';
        }

        $manger =db('rbac_user')->alias('u')->join('bank b','u.bank_id = b.id')->order('bank_id','asc')
            ->where($where)->field('u.id,u.bank_id,u.real_name,b.bankname')->paginate(5);
        $this->assign('page',$manger->render());
        $manger=json_decode(json_encode($manger),true);
        $manger=$manger['data'];
        
        foreach($manger as $k=>$v){
            $manger[$k]['xiaoqu']=db('grid')->where(['xiaoqu_manger'=>$v['id']])->select();
        }

        $this->assign('manger',$manger);
        return $this->fetch();

    }

    /*总行看所有支行*/
    public function allbank(){
        //调出所有支行
        $count =db('bank')->where(['is_del'=>0])->count();
        $allbank =db('bank')->where(['is_del'=>0])->select();
        //支行的客户经理

        foreach($allbank as $k=>$v ){
           $allbank[$k]['manager']=db('rbac_user')->where(['role_id'=>10,'bank_id'=>$v['id']])->count();
        }

        $this->assign('count',$count);
        $this->assign('bank',$allbank);
        return $this->fetch();
    }

    /*支行查看所有客户经理*/
    public function banktree(){

        $id=input('bank_id');
       // $bankname = input('bankname');

        $role_id = session('user.role_id');
        if (9 == $role_id){
            $id = session('user.bank_id');
        }

        if(empty($id)){
            $this->error('你不是支行长');
        }

        if(is_numeric($id)&&!empty($id)){
            $bankname=db('bank')->where(['is_del'=>0,'id'=>$id])->field('bankname')->find();

            $client_manger= db('rbac_user')->where(['bank_id' => $id,'role_id'=>10])->select();
            if(empty($client_manger)){
                $this->error('本部门没有客户经理！');
            }
            foreach($client_manger as $k=>$v){
                $client_manger[$k]['grid']=db('grid')->where(['xiaoqu_manger'=>$v['id']])->count();
                $client_manger[$k]['grid_name']=db('grid')->where(['xiaoqu_manger'=>$v['id']])->field('name,id')->select();
            }


//            if (empty($bankname)){
//                $resbank = db('bank')->where('id',$id)->find();
//                $bankname = $resbank['bankname'];
//            }
            $this->assign('id',$id);
            $this->assign('bankname',$bankname['bankname']);
            $this->assign('client_manger',$client_manger);
            return $this->fetch();
        }

    }

    /*客户经理查看负责的小区*/
    public function clientmanger(){


        $id=input('manger_id');

        $role_id = session('user.role_id');
        if (10 == $role_id){
            $id = session('uid');
        }

        if(empty($id)){
            $this->error('你不是客户经理');
        }

        if(is_numeric($id)&&!empty($id)){


            $grid=db('grid')->where(['xiaoqu_manger'=>$id])->select();
            //查询客户数量


            foreach($grid as $k=>$v){
                $grid[$k]['count'] = db('client')->where('grid',$v['id'])->count('id');

            }


            if(empty($grid)){
                $this->error('本客户经理没有负责小区！');
            }
            $nname = input('name');
            empty($nname) && $nname = session('user.real_name');
            $this->assign('name',$nname);
            $this->assign('grid',$grid);
            return $this->fetch();
        }
    }




}