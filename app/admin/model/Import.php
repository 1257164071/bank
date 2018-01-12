<?php
namespace app\admin\model;
use think\Model;
use think\Loader;
use think\Db;

class Import
{
    public function importclients($name="",$filepath=""){
        $user=session('user');
        Loader::import('phpexcel.PHPExcel.IOFactory');
        if(!empty($name)&&!empty($filepath)) {
//            echo ROOT_PATH . $filepath . $name;
//            die;
            $objReader = \PHPExcel_IOFactory::load(ROOT_PATH . $filepath . $name);
            $objReader->setActiveSheetIndex(0);
            $sheet = $objReader->getActiveSheet();
            $rows = $sheet->getHighestRow();
            $cells = $sheet->getHighestColumn();
            //数据集合
            $readData = [];
            $baseData=[];
            $importNum = 0;


            Db::startTrans();
            try {
                //循环读取每个单元格的数据
                for ($row = 2; $row <= $rows; $row++) {
                    $clients = [];
                    $clients['name'] = trim($sheet->getCell("A" . $row)->getValue());
                    if ($clients['name'] == '') break;
                    $clients['sex'] = (trim($sheet->getCell("B" . $row)->getValue()) == '男') ? 1 : 0;
                    $clients['type'] = (trim($sheet->getCell("C" . $row)->getValue()) == '城市') ? 1 : 0;
                    $clients['card_type'] = (trim($sheet->getCell("D" . $row)->getValue()) == '身份证') ? 0 : 1;
                    $clients['card_number'] = trim($sheet->getCell("E" . $row)->getValue());
                    $clients['nation_id'] = (trim($sheet->getCell("F" . $row)->getValue()) == '汉') ? 0 : 1;
                    $clients['born_date'] = strtotime(trim($sheet->getCell("G" . $row)->getValue()));
                    $clients['address'] = trim($sheet->getCell("H" . $row)->getValue());
                    $clients['valid_time'] = strtotime(trim($sheet->getCell("I" . $row)->getValue()));
                    $clients['issue_office'] = trim($sheet->getCell("J" . $row)->getValue());
                    $clients['gridtype'] = (trim($sheet->getCell("K" . $row)->getValue()) == '村镇') ? 1 : 0;
                    $clients['gridname'] = trim($sheet->getCell("L" . $row)->getValue());
                    $clients['huxing'] = (int)(trim($sheet->getCell("M" . $row)->getValue()));
                    $clients['lou'] = (int)(trim($sheet->getCell("N" . $row)->getValue()));
                    $clients['danyuan'] =(int)(trim($sheet->getCell("O" . $row)->getValue()));
                    $clients['hu'] = (int)(trim($sheet->getCell("P" . $row)->getValue()));
                    $clients['add_time'] = time();
                    $clients['belong_user_id']=$user['id'];
                    $readData[] = $clients;
                    $importNum++;

                }
//                dump($readData);
//                    ie;
                if(count($readData)>0){
                    $res=model('Client')->saveAll($readData);

                }

//                for ($row = 2; $row <= $rows; $row++) {//行数是以第3行开始
//                    //$tmpclientsCatId = 0;
//                    $clients = [];
//                    $base=[];
//
//                    $clients['name'] = trim($sheet->getCell("A" . $row)->getValue());
//                    if ($clients['name'] == '') break;//如果某一行第一列为空则停止导入
//                    $clients['client_number'] = randomString() . rand(100000, 999999);
//                    $clients['thumb'] = '';
//                    $clients['pic_url'] = '';
//                    $clients['sex'] = (trim($sheet->getCell("B" . $row)->getValue()) == '男') ? 1 : 0;
//                    $clients['type'] = (trim($sheet->getCell("C" . $row)->getValue()) == '城市') ? 1 : 0;
//                    $clients['card_type'] = (trim($sheet->getCell("D" . $row)->getValue()) == '身份证') ? 0 : 1;
//                    $clients['card_number'] = trim($sheet->getCell("E" . $row)->getValue());
//                    $clients['nation_id'] = (trim($sheet->getCell("F" . $row)->getValue()) == '汉') ? 0 : 1;
//                    $clients['born_date'] = strtotime(trim($sheet->getCell("G" . $row)->getValue()));
//                    $clients['address'] = trim($sheet->getCell("H" . $row)->getValue());
//                    $clients['valid_time'] = strtotime(trim($sheet->getCell("I" . $row)->getValue()));
//                    $clients['issue_office'] = trim($sheet->getCell("J" . $row)->getValue());
//                    $clients['relation_poeple'] = (trim($sheet->getCell("K" . $row)->getValue()) == '是') ? 1 : 0;
//                    // $clients['client_type'] = trim($sheet->getCell("C".$row)->getValue());
//                    $clients['add_time'] = time();
//                    if(trim($sheet->getCell("L" . $row)->getValue()) == '已婚'){
//                        $base['marriage_status']=1;
//                    }elseif(trim($sheet->getCell("L" . $row)->getValue()) == '未婚'){
//                        $base['marriage_status']=0;
//                    }else{
//                        $base['marriage_status']=2;
//                    }
//                    $base['married_record_date']=(trim($sheet->getCell("M" . $row)->getValue())=='') ? '':strtotime(trim($sheet->getCell("M" . $row)->getValue()));
//                    $base['children'] = (trim($sheet->getCell("N" . $row)->getValue()) == '有') ? 1 : 0;
//                    $base['is_farmer'] = (trim($sheet->getCell("O" . $row)->getValue()) == '是') ? 1 : 0;
//                    $base['tel_number'] = trim($sheet->getCell("P" . $row)->getValue()) ;
//                    $base['phone_number'] = trim($sheet->getCell("Q" . $row)->getValue()) ;
//                    $base['grid'] = trim($sheet->getCell("R" . $row)->getValue()) ;
//                    $base['current_address'] = trim($sheet->getCell("S" . $row)->getValue()) ;
//                    $base['current_postcode'] = trim($sheet->getCell("T" . $row)->getValue()) ;
//                    $base['corresponding_address'] = trim($sheet->getCell("U" . $row)->getValue()) ;
//                    $base['corresponding_postcode'] = trim($sheet->getCell("V" . $row)->getValue()) ;
//                    $base['current_address'] = (trim($sheet->getCell("W" . $row)->getValue())=='是')?1:0 ;
//                    $base['add_time']=time();
//                   // $base['current_postcode'] = trim($sheet->getCell("R" . $row)->getValue()) ;
//                    //$base['marriage_status']= (trim($sheet->getCell("L" . $row)->getValue()) == '') ? 1 : 0;
//                    $readData[] = $clients;
//                    $baseData[]=$base;
//                    $importNum++;
//                }
//                // dump($readData);
//                // die;
//                if (count($readData) > 0) {
//                    $client=model('Client');
//                    $list = $client->saveAll($readData);
//                    $data =  json_decode( json_encode( $list),true);
//                    foreach($data as $vo){
//                        foreach($baseData as $k =>$v){
//                            $baseData[$k]['client_id']=$data[$k]['id'];
//                        }
//
//                    }
//
//                    model('BaseMsg')->saveAll($baseData);
//
//                }



                Db::commit();




                echo '<script type="text/javascript"> alert( "添加'.$importNum.'条成功"); parent.location.reload();</script>';
            } catch (\Exception $e) {
                Db::rollback();
                echo '<script type="text/javascript"> alert( "导入数据失败，请重试！"); parent.location.reload();</script>';
                //return json_encode(WSTReturn('导入商品失败', -1));
            }
        }
        exit();
    }
 /*
    *电子银行导入
    */
    public function ebankimport($name="",$filepath="")
    {
        Loader::import('phpexcel.PHPExcel.IOFactory');
        if(!empty($name)&&!empty($filepath)) {
//            echo ROOT_PATH . $filepath . $name;
//            die;
            $objReader = \PHPExcel_IOFactory::load(ROOT_PATH . $filepath . $name);
            $objReader->setActiveSheetIndex(0);
            $sheet = $objReader->getActiveSheet();
            $rows = $sheet->getHighestRow();
            $cells = $sheet->getHighestColumn();
            //数据集合
            $readData = [];
           
            $importNum = 0;


            Db::startTrans();
            try {
                //循环读取每个单元格的数据
                for ($row = 2; $row <= $rows; $row++) {

                    //$tmpclientsCatId = 0;
                    $ebank = [];
                    $ebank['sign_website_number'] = trim($sheet->getCell("A" . $row)->getValue());
                    $ebank['name'] = trim($sheet->getCell("B" . $row)->getValue());
                    $ebank['client_number'] = trim($sheet->getCell("C" . $row)->getValue());
                    if ($ebank['client_number'] == '') break;//如果某一行证件号码为空则停止导入
                  //  $ebank['client_number'] = trim($sheet->getCell("D" . $row)->getValue());
                    $ebank['wangyin'] = trim($sheet->getCell("E" . $row)->getValue());
                    $ebank['duanxinban'] = trim($sheet->getCell("F" . $row)->getValue());
                    $ebank['kehuduan'] = trim($sheet->getCell("G" . $row)->getValue());
                    $ebank['wap'] = trim($sheet->getCell("H" . $row)->getValue());
                    $ebank['duanxintong'] = trim($sheet->getCell("I" . $row)->getValue());
                    $ebank['pos'] = trim($sheet->getCell("J" . $row)->getValue());
                    $ebank['quickpay'] = trim($sheet->getCell("K" . $row)->getValue());
                    $ebank['tonglianpay'] = trim($sheet->getCell("L" . $row)->getValue());
                   
                    
                    
                  
                    
                    $readData[] = $ebank;
                  
                    $importNum++;
                }
                // dump($readData);
                // die;
                if (count($readData) > 0) {
                    $ebank=model('Ebank');
                    $list = $ebank->saveAll($readData);
                }



                Db::commit();




                echo '<script type="text/javascript"> alert( "添加'.$importNum.'条成功"); parent.location.reload();</script>';
            } catch (\Exception $e) {
                Db::rollback();
                echo '<script type="text/javascript"> alert( "导入数据失败，请重试！"); parent.location.reload();</script>';
                //return json_encode(WSTReturn('导入商品失败', -1));
            }
        }
        exit();
    }



}
