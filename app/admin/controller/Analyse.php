<?php
/**
 * 数据分析
 */
namespace app\admin\controller;
use think\Db;
class Analyse extends Base
{
    function __construct()
    {
        parent::__construct();
        $this->get_select_loantable();
    }

    /*    private function getbank(){
        $bank=db('bank')->where('is_del',0)->select();
        $this->assign("banklist",$bank);

        $bankid = input('bankid');
        $bankname = input('bankname');
        empty($bankname) && $bankname = '所有银行';
        $this->assign('bankname',$bankname);
        if (!empty($bankid) && is_numeric($bankid)){
            $this->where = 'WHERE bank_id = '.$bankid;
            $this->where2 = 'WHERE belong_organization = '.$bankid;
        }
    }
    protected  $where = '';
    protected  $where2 = '';*/

    private function get_select_loantable(){
        $loantable = get_name('select_loantable');
        $this->intable_credit = 'ym_'.end($loantable);
    }
    //最新月份的贷款表
    protected  $intable_credit = 'loan';


    /*数据分析首页*/
    public function index(){
        return $this->fetch();
    }

    /*数据分析*/
    public function chart1(){

       /* //按月统计存款
        $sql = "SELECT FROM_UNIXTIME(save_time,'%Y%m') months,COUNT(id) AS count,SUM(save_amt) AS sum FROM ym_deposit ".$this->where. " GROUP BY months";
        //dump($sql);exit();
        $res1 = Db::query($sql);


        $dep = [];
        $det = [];
        if ($res1){
            foreach ($res1 as $k => $v){
                $dep[] += $v['months'];
                $det[] += $v['sum'];
            }
        }
        //dump($res);dump(json_encode($dep));exit();
        $this->assign('dep',json_encode($dep));
        $this->assign('det',json_encode($det));

        //按月统计贷款
        $sql2 = "SELECT FROM_UNIXTIME(provide_time,'%Y%m') AS months,COUNT(id) AS count,SUM(provide_loan_money) AS sum FROM ym_intable_credit ".$this->where. " GROUP BY months";
        $res2 = Db::query($sql2);
        $cre = [];
        $crt = [];
        if ($res2){
            foreach ($res2 as $k => $v){
                $cre[] += $v['months'];
                $crt[] += $v['sum'];
            }
        }
        //dump($res);dump(json_encode($dep));exit();
        $this->assign('cre',json_encode($cre));
        $this->assign('crt',json_encode($crt));*/

        //统计电子开通数量

        $sql1 = "SELECT SUM(wangyin) AS a ,SUM(duanxinban) AS b ,SUM(kehuduan) AS c ,SUM(wap) AS d ,SUM(duanxintong) AS e ,SUM(pos) AS f ,SUM(quickpay) AS g ,SUM(tonglianpay) AS h FROM ym_ebank";

        $res1 = Db::query($sql1);
        $kk = $res1[0];
        $dep = ['网银','短信版','客户端','WAP版','短信通','POS','快捷支付','通联支付'];
        $det = [$kk['a'],$kk['b'],$kk['c'],$kk['d'],$kk['e'],$kk['f'],$kk['g'],$kk['h']];
        $this->assign('dep',json_encode($dep));
        $this->assign('det',json_encode($det));
        return $this->fetch();
    }

    /*客户贷款排行*/
    public function chart2(){
        //$res1 = Db::query("SELECT client_id,ym_client.name ,SUM(save_amt) AS sum ,client_number FROM ym_deposit JOIN ym_client ON (ym_deposit.client_id = ym_client.id) GROUP BY client_id ORDER BY sum LIMIT 20");

        $sql = "SELECT provide_loan_money,client_name,card_number FROM ym_loan ORDER BY provide_loan_money DESC LIMIT 100";
        $res1 = Db::query($sql);

        $dep = [];
        $det = [];
        if ($res1){
            $res1 = array_reverse($res1);
            foreach ($res1 as $k => $v){
                $dep[$k] = $v['client_name'].$v['card_number'];
                $det[$k] = $v['provide_loan_money'];
            }
        }
        //dump($res1);dump(json_encode($dep).json_encode($det));exit();
        $this->assign('dep',json_encode($dep));
        $this->assign('det',json_encode($det));

        return $this->fetch();
    }

    /*支行贷款排行*/
    public function chart3(){
        $sql = "SELECT SUM(provide_loan_money) AS sum,belong_organization FROM ym_loan GROUP BY belong_organization having sum > 1 ORDER BY sum desc";
        $res1 = Db::query($sql);
        //dump($res1);die;
        $dep = [];
        $det = [];
        if ($res1){
            foreach ($res1 as $k => $v){
                $dep[$k] = $v['belong_organization'];
                $det[$k] = $v['sum'];
            }
        }
        //dump($res1);dump(json_encode($dep).json_encode($det));exit();
        $this->assign('dep',json_encode($dep));
        $this->assign('det',json_encode($det));

        return $this->fetch();
    }

    /*支行贷款余额排行*/
    public function yue(){
        $sql = "SELECT SUM(remian_money) AS sum,belong_organization FROM ym_loan  GROUP BY belong_organization having sum>10000000 ORDER BY sum desc";
        $res1 = Db::query($sql);
        //dump($res1);die;
        $dep = [];
        $det = [];
        if ($res1){
            foreach ($res1 as $k => $v){
                $dep[$k] = $v['belong_organization'];
                $det[$k] = $v['sum'];
            }
        }
        //dump($res1);dump(json_encode($dep).json_encode($det));exit();
        $this->assign('dep',json_encode($dep));
        $this->assign('det',json_encode($det));

        return $this->fetch();
    }

    /*客户级别*/
    public function chart4(){
        $sql = "SELECT class_result,COUNT(class_result) AS count FROM ym_other_message  GROUP BY class_result";
        $res1 = Db::query($sql);

        $dep = [];
        $det = [];
        if ($res1){
            foreach ($res1 as $k => $v){
                switch ($v['class_result'])
                {
                    case 1:
                        $aa = '逾期客户';    break;
                    case 2:
                        $aa = '有记录客户';  break;
                   
                    case 4:
                        $aa = '潜在客户';    break;
                    case 5:
                        $aa = '优质客户';    break;
                    case 6:
                        $aa = '金钻客户';    break;
                    default:
                        $aa = '潜在客户';

                }
                $dep[$k] = $aa;
                $det[$k]['value'] = $v['count'];
                $det[$k]['name'] = $aa;

            }
        }
       // dump($res1);echo(json_encode($dep).json_encode($det));
        $this->assign('dep',json_encode($dep));
        $this->assign('det',json_encode($det));

        return $this->fetch();
    }





}