<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:53:"D:\Xampps\htdocs\bank/app/admin\view\grid\wangge.html";i:1498787441;s:46:"D:\Xampps\htdocs\bank/app/admin\view\base.html";i:1497005003;}*/ ?>
<!DOCTYPE HTML>
<html lang="zh-CN">
    <head>
        <meta charset="utf-8">
        <meta name="renderer" content="webkit|ie-comp|ie-stand">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
        <title>管理系统</title>
        <link rel="Bookmark" href="/favicon.ico" >
        <link rel="Shortcut Icon" href="/favicon.ico" />
        <!--[if lt IE 9]>
        <script type="text/javascript" src="/static/lib/html5shiv.js"></script>
        <script type="text/javascript" src="/static/lib/respond.min.js"></script>
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="/static/h-ui/css/H-ui.min.css" />
        <link rel="stylesheet" type="text/css" href="/static/h-ui.admin/css/H-ui.admin.css" />
        <link rel="stylesheet" type="text/css" href="/static/lib/Hui-iconfont/1.0.8/iconfont.css" />
        <link rel="stylesheet" type="text/css" href="/static/h-ui.admin/skin/default/skin.css" id="skin" />
        <link rel="stylesheet" type="text/css" href="/static/h-ui.admin/css/style.css" />

        <script type="text/javascript" src="/static/lib/jquery/1.9.1/jquery.min.js"></script>
        <script type="text/javascript" src="/static/lib/layer/2.4/layer.js"></script>
        <script type="text/javascript" src="/static/h-ui/js/H-ui.js"></script>
        <script type="text/javascript" src="/static/h-ui.admin/js/H-ui.admin.page.js"></script>


        <script type="text/javascript" src="/static/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
        <script type="text/javascript" src="/static/lib/jquery.validation/1.14.0/validate-methods.js"></script>
        <script type="text/javascript" src="/static/lib/jquery.validation/1.14.0/messages_zh.js"></script>
    </head>

    <body>

    
<style type="text/css">
.table tr td{width:2%;height:30px;padding:0;}
.table tr td a{display:block;width:100%;height:30px;line-height:30px;text-decoration:none; color:#000;font-size:16px}
.c-buliang{background-color:red;}
.c-white{background-color:#fff;}
.c-blue{background-color:#86DB49;}
.c-yellow{background-color:yellow;}
.c-white{border:1px solid #ccc}
.c-baijin{background-color:#ddd;}
.c-red{background-color:#CB4A2A;}
.c-green{background-color:#2EA0F1;}
#intro{float:right;}
#intro li{float:left;height:35px;line-height:25px;}
#intro li span{display:inline-block;width:60px;height:25px;margin-left:20px; margin-right:10px;}
</style>
<article class="cl pd-20">
	<h4 class="text-c"><?php echo (isset($gridmsg['name']) && ($gridmsg['name'] !== '')?$gridmsg['name']:''); ?>-网格分布图</h4><br/>
	<ul id="intro">
	    <li><span class="c-buliang"></span>不良客户</li>
		<li><span class="c-blue"></span>潜在客户</li>
		<li><span class="c-white"></span>普通客户</li>
		<li><span class="c-yellow"></span>黄金客户</li>
		<li><span class="c-baijin"></span>白金客户</li>
		<li><span class="c-red"></span>红钻客户</li>
		<li><span class="c-green"></span>金钻客户</li>
	</ul>
	<div style="clear:both;"></div>
		 <?php if(is_array($pos) || $pos instanceof \think\Collection || $pos instanceof \think\Paginator): if( count($pos)==0 ) : echo "" ;else: foreach($pos as $k=>$vo): ?>
		 <h3><?php echo $k; ?>号楼</h3>
		  <table class="table table-border table-bordered">
		  <tr class="text-c">
		     <?php $__FOR_START_16105__=1;$__FOR_END_16105__=161;for($i=$__FOR_START_16105__;$i < $__FOR_END_16105__;$i+=1){ ?>
	             <td>
	             	 <a <?php if(isset($vo[$i]) && !empty($vo[$i])): ?>href="<?php echo url('admin/client/clientdetail',array('client_id'=>$vo[$i]['id'])); ?>"<?php else: ?>href="javascript:void(0)"<?php endif; if(isset($vo[$i]) && !empty($vo[$i])): if($vo[$i]['bad_record'] == 1): ?>class="c-buliang"<?php else: if($vo[$i]['class_result'] == 1): ?>class="c-blue"<?php endif; if($vo[$i]['class_result'] == 3): ?>class="c-yellow"<?php endif; if($vo[$i]['class_result'] == 4): ?>class="c-baijin"<?php endif; if($vo[$i]['class_result'] == 5): ?>class="c-red"<?php endif; if($vo[$i]['class_result'] == 6): ?>class="c-green"<?php endif; endif; endif; if(isset($vo[$i]) && !empty($vo[$i])): ?>title="住址：<?php echo (isset($vo[$i]['hunit']) && ($vo[$i]['hunit'] !== '')?$vo[$i]['hunit']:''); ?>  身份证：<?php echo (isset($vo[$i]['card_number']) && ($vo[$i]['card_number'] !== '')?$vo[$i]['card_number']:''); ?>"<?php endif; ?> target="_blank"><?php echo (isset($vo[$i]['name']) && ($vo[$i]['name'] !== '')?$vo[$i]['name']:''); ?></a>
	             </td>
	             <?php if($i%20 == 0): ?>  
	              </tr><tr class="text-c">    
	             <?php endif; } ?>   
            </tr> 
            </table>
            <br>
		 <?php endforeach; endif; else: echo "" ;endif; ?>
		</article>
       <br><br>


    </body>
</html>




