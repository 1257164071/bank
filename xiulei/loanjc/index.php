<?php
ini_set("display_errors",0);
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/29
 * Time: 16:07
 */
//Array
//(
//    [qs_method] => 现金
//    [arrive_time] => 2017-11-30
//    [provide_loan_money] => 20000
//    [qs_bj_money] =>
//    [qs_jl_benji_money] =>
//    [qs_lixi_money] =>
//    [qs_jl_lixi_money] =>
//    [qs_fy_money] =>
//    [qs_jl_fy_money] =>
//    [qs_js_sum] =>
//)
//if('2017-11-30' > '2017-11-29'){
//    echo 1111;  //OK
//}
if($_POST){
   if(!empty($_POST['arrive_time'])){
      $arrive_time = $_POST['arrive_time'];
      $_POST['arrive_time'] = mb_substr($_POST['arrive_time'],0,4).'-'.mb_substr($_POST['arrive_time'],4,2).'-'.mb_substr($_POST['arrive_time'],6,2);
   }

   if($_POST['qs_method'] == '现金'){
      if($_POST['arrive_time'] < '2006-12-31'){
         $qs_jl_benji_money = $_POST['qs_bj_money'] * 0.4;
         $qs_jl_lixi_money = $_POST['qs_lixi_money'] * 0.45;
         $qs_jl_fy_money = $_POST['qs_fy_money'] * 0.4;
         $benji = '40%';
         $lixi = '45%';
         $feiyong = '40%';
      }elseif($_POST['arrive_time'] > '2007-01-01' && $_POST['arrive_time'] < '2008-12-31'){
         $qs_jl_benji_money = $_POST['qs_bj_money'] * 0.3;
         $qs_jl_lixi_money = $_POST['qs_lixi_money'] * 0.35;
         $qs_jl_fy_money = $_POST['qs_fy_money'] * 0.3;
         $benji = '30%';
         $lixi = '35%';
         $feiyong = '30%';
      }elseif($_POST['arrive_time'] > '2009-01-01' && $_POST['arrive_time'] < '2009-12-31'){
         $qs_jl_benji_money = $_POST['qs_bj_money'] * 0.2;
         $qs_jl_lixi_money = $_POST['qs_lixi_money'] * 0.25;
         $qs_jl_fy_money = $_POST['qs_fy_money'] * 0.2;
         $benji = '20%';
         $lixi = '25%';
         $feiyong = '20%';
      }elseif($_POST['arrive_time'] > '2010-01-01' && $_POST['arrive_time'] < '2010-12-31'){
         $qs_jl_benji_money = $_POST['qs_bj_money'] * 0.1;
         $qs_jl_lixi_money = $_POST['qs_lixi_money'] * 0.15;
         $qs_jl_fy_money = $_POST['qs_fy_money'] * 0.1;
         $benji = '10%';
         $lixi = '15%';
         $feiyong = '10%';
      }elseif($_POST['arrive_time'] > '2011-01-01' && $_POST['arrive_time'] < '2012-12-31'){
         $qs_jl_benji_money = $_POST['qs_bj_money'] * 0.08;
         $qs_jl_lixi_money = $_POST['qs_lixi_money'] * 0.13;
         $qs_jl_fy_money = $_POST['qs_fy_money'] * 0.08;
         $benji = '8%';
         $lixi = '13%';
         $feiyong = '8%';
      }elseif($_POST['arrive_time'] > '2013-01-01' && $_POST['arrive_time'] < '2014-12-31'){
         $qs_jl_benji_money = $_POST['qs_bj_money'] * 0.06;
         $qs_jl_lixi_money = $_POST['qs_lixi_money'] * 0.11;
         $qs_jl_fy_money = $_POST['qs_fy_money'] * 0.06;
         $benji = '6%';
         $lixi = '11%';
         $feiyong = '6%';
      }elseif($_POST['arrive_time'] > '2015-01-01' && $_POST['arrive_time'] < '2015-12-31'){
         $qs_jl_benji_money = $_POST['qs_bj_money'] * 0.05;
         $qs_jl_lixi_money = $_POST['qs_lixi_money'] * 0.08;
         $qs_jl_fy_money = $_POST['qs_fy_money'] * 0.05;
         $benji = '5%';
         $lixi = '8%';
         $feiyong = '5%';
      }
      $jl_sum = $qs_jl_benji_money + $qs_jl_lixi_money +  $qs_jl_fy_money;
   }elseif($_POST['qs_method'] == '债权转让' || $_POST['qs_method'] == '内部招标'){

      $qs_sum = $_POST['qs_bj_money'] + $_POST['qs_lixi_money'] + $_POST['qs_fy_money'];
      if($qs_sum < $_POST['remian_money']){
         $qs_jl_benji_money = $_POST['qs_bj_money'] * 0.03;
         $qs_jl_lixi_money = $_POST['qs_lixi_money'] * 0.03;
         $qs_jl_fy_money = $_POST['qs_fy_money'] * 0.03;
         $benji = '3%';
         $lixi = '3%';
         $feiyong = '3%';
         $jl_sum = $qs_jl_benji_money + $qs_jl_lixi_money +  $qs_jl_fy_money;
      }else{
         $edu = ($_POST['qs_bj_money']+$_POST['qs_lixi_money']+$_POST['qs_fy_money'])/($_POST['remian_money']+$_POST['yj_lixi']);
         if($edu > 1) $edu = 1;

         if($_POST['arrive_time'] < '2006-12-31'){
            $qs_jl_benji_money = $_POST['qs_bj_money'] * 0.4;
            $qs_jl_lixi_money = $_POST['qs_lixi_money'] * 0.45;
            $qs_jl_fy_money = $_POST['qs_fy_money'] * 0.4;
            $benji = '40%';
            $lixi = '45%';
            $feiyong = '40%';
         }elseif($_POST['arrive_time'] > '2007-01-01' && $_POST['arrive_time'] < '2008-12-31'){
            $qs_jl_benji_money = $_POST['qs_bj_money'] * 0.3;
            $qs_jl_lixi_money = $_POST['qs_lixi_money'] * 0.35;
            $qs_jl_fy_money = $_POST['qs_fy_money'] * 0.3;
            $benji = '30%';
            $lixi = '35%';
            $feiyong = '30%';
         }elseif($_POST['arrive_time'] > '2009-01-01' && $_POST['arrive_time'] < '2009-12-31'){
            $qs_jl_benji_money = $_POST['qs_bj_money'] * 0.2;
            $qs_jl_lixi_money = $_POST['qs_lixi_money'] * 0.25;
            $qs_jl_fy_money = $_POST['qs_fy_money'] * 0.2;
            $benji = '20%';
            $lixi = '25%';
            $feiyong = '20%';
         }elseif($_POST['arrive_time'] > '2010-01-01' && $_POST['arrive_time'] < '2010-12-31'){
            $qs_jl_benji_money = $_POST['qs_bj_money'] * 0.1;
            $qs_jl_lixi_money = $_POST['qs_lixi_money'] * 0.15;
            $qs_jl_fy_money = $_POST['qs_fy_money'] * 0.1;
            $benji = '10%';
            $lixi = '15%';
            $feiyong = '10%';
         }elseif($_POST['arrive_time'] > '2011-01-01' && $_POST['arrive_time'] < '2012-12-31'){
            $qs_jl_benji_money = $_POST['qs_bj_money'] * 0.08;
            $qs_jl_lixi_money = $_POST['qs_lixi_money'] * 0.13;
            $qs_jl_fy_money = $_POST['qs_fy_money'] * 0.08;
            $benji = '8%';
            $lixi = '13%';
            $feiyong = '8%';
         }elseif($_POST['arrive_time'] > '2013-01-01' && $_POST['arrive_time'] < '2014-12-31'){
            $qs_jl_benji_money = $_POST['qs_bj_money'] * 0.06;
            $qs_jl_lixi_money = $_POST['qs_lixi_money'] * 0.11;
            $qs_jl_fy_money = $_POST['qs_fy_money'] * 0.06;
            $benji = '6%';
            $lixi = '11%';
            $feiyong = '6%';
         }elseif($_POST['arrive_time'] > '2015-01-01' && $_POST['arrive_time'] < '2015-12-31'){
            $qs_jl_benji_money = $_POST['qs_bj_money'] * 0.05;
            $qs_jl_lixi_money = $_POST['qs_lixi_money'] * 0.08;
            $qs_jl_fy_money = $_POST['qs_fy_money'] * 0.05;
            $benji = '5%';
            $lixi = '8%';
            $feiyong = '5%';
         }

         $qs_jl_benji_money = $qs_jl_benji_money * $edu;
         $qs_jl_lixi_money = $qs_jl_lixi_money * $edu;
         $qs_jl_fy_money = $qs_jl_fy_money * $edu;
         $jl_sum = $qs_jl_benji_money + $qs_jl_lixi_money +  $qs_jl_fy_money;
      }

   }elseif($_POST['qs_method'] == '盘活重组'){
     
      $qs_jl_lixi_money = $_POST['qs_lixi_money'] * 0.03;
   
     
      $lixi = '3%';
     
      $jl_sum =  $qs_jl_lixi_money ;
   }
}
require('index_view.html');
?>