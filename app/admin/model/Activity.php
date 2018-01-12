<?php
namespace app\admin\model;
use think\Model;
use think\Db;

class Activity extends Model
{

    protected $table="ym_activity";

//    // //关联不良信息表（一对多）
//    public function record()
//    {
//        return $this->hasMany('BadRecord','client_id');
//    }
//    //   //关联家庭成员表（一对一）
//    //   public function family()
//    //   {
//    // 	return $this->hasOne('family_members','uid')->setAlias(['id'=>'family_id']);
//    //   }
//    public function base()
//    {
//        return $this->hasOne('BaseMsg','client_id');
//    }

    //添加
    public function add($data)
    {
        if(!empty($data)) {
            $add = array(
                'user_id'=>$data['user_id'],
                'title' => $data['title'],
                'pic_url' => $data['picurl'],
                'description' => $data['description'],
                'hold_time' =>strtotime($data['hold_time']),
                'add_time' => time()
            );

            $add_info = Db::name('activity')->insert($add);

            return $add_info;

        }
        return false;
    }

    //修改
    public function edit($data)
    {
        if(!empty($data)) {
            $info = array(

                'title' => $data['title'],
//                'pic_url' => $data['picurl'],
                'description' => $data['description'],
                'hold_time' => strtotime($data['hold_time'])

            );

            $result = Db::name('activity')->where('id', $data['id'])->update($info);
            if ($result) {
                return true;
            } else {
                return false;
            }
        }
        return false;

    }

}

