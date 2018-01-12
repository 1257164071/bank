<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:46:"F:\www\bank.cn/app/admin\view\grid\wangge.html";i:1512033762;s:39:"F:\www\bank.cn/app/admin\view\base.html";i:1507780640;}*/ ?>
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
.table tr td{width:2%;height:20px;padding:0;overflow: hidden;min-width: 65px;}
.table tr td a{display:block;width:100%;height:20px;line-height:20px;text-decoration:none; color:#043C99;font-size:14px}
.c-buliang{background-color:red;}
.c-whites{background-color:#fff;}
.c-blue{background-color:#ddd;}
.c-yellow{background-color:#2EA0F1;}
.c-baijin{background-color:#86DB49;}
.c-red{background-color:#CB4A2A;}
.c-green{background-color:yellow;}
#intro{float:right;}
#intro li{float:left;height:35px;line-height:25px;}
#intro li span{display:inline-block;width:60px;height:20px;margin-left:20px; margin-right:10px;}
</style>
<article class="cl pd-20">
	<h4 class="text-c"><?php echo (isset($gridmsg['name']) && ($gridmsg['name'] !== '')?$gridmsg['name']:''); ?>-客户分布图</h4><br/>
	<ul id="intro">
	    <li><span class="c-buliang"></span>逾期客户</li>
		<li><span class="c-blue"></span>有记录客户</li>
		<li><span class="c-whites"></span>普通客户</li>
		<li><span class="c-yellow"></span>潜在客户</li>
		<li><span class="c-baijin"></span>优质客户</li>
		<li><span class="c-green"></span>金钻客户</li>
	</ul>
	<div style="clear:both;"></div>
	      <!-- 无户号 -->
		 	  <?php if(isset($pos['wu'])): ?>
		 	  无户号客户：
              <table class="table table-border table-bordered">
			  <tr class="text-c">
				    <?php if(is_array($pos['wu']) || $pos['wu'] instanceof \think\Collection || $pos['wu'] instanceof \think\Paginator): if( count($pos['wu'])==0 ) : echo "" ;else: foreach($pos['wu'] as $k=>$vo): ?>
		             <td>
		                  <a href="<?php echo url('admin/client/clientdetail',array('client_id'=>$vo['id'])); ?>" <?php if($vo['class_result'] == 1): ?>class="c-buliang"<?php endif; if($vo['class_result'] == 2): ?>class="c-blue"<?php endif; if($vo['class_result'] == 3): ?>class="c-whites"<?php endif; if($vo['class_result'] == 4): ?>class="c-yellow"<?php endif; if($vo['class_result'] == 5): ?>class="c-baijin"<?php endif; if($vo['class_result'] == 6): ?>class="c-green"<?php endif; if(isset($vo) && !empty($vo)): ?>title="姓名：<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?> 住址：<?php echo (isset($vo['hunit']) && ($vo['hunit'] !== '')?$vo['hunit']:''); ?>  身份证：<?php echo (isset($vo['card_number']) && ($vo['card_number'] !== '')?$vo['card_number']:''); ?>"<?php endif; ?> target="_blank"><?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?></a>
		             </td>
		             <?php if(($k+1)%20 == 0): ?>  
		              </tr><tr class="text-c">    
		             <?php endif; endforeach; endif; else: echo "" ;endif; ?>   
	            </tr> 
	            </table>
	            <br/>
		 	  <?php endif; ?>
         <!-- 有户号 -->
	     <?php if(isset($gridmsg) && !empty($gridmsg['gridtype'])): if(is_array($pos['you']) || $pos['you'] instanceof \think\Collection || $pos['you'] instanceof \think\Paginator): if( count($pos['you'])==0 ) : echo "" ;else: foreach($pos['you'] as $k=>$vo): ?>
			 <h3><?php echo $k; ?>号楼</h3>
			  <table class="table table-border table-bordered">
			  <tr class="text-c">
			     <?php $__FOR_START_31551__=1;$__FOR_END_31551__=161;for($i=$__FOR_START_31551__;$i < $__FOR_END_31551__;$i+=1){ ?>
		             <td>
		             	 <a <?php if(isset($vo[$i]) && !empty($vo[$i])): ?>href="<?php echo url('admin/client/clientdetail',array('client_id'=>$vo[$i]['id'])); ?>"<?php else: ?>href="javascript:void(0)"<?php endif; if(isset($vo[$i]) && !empty($vo[$i])): if($vo[$i]['class_result'] == 1): ?>class="c-buliang"<?php endif; if($vo[$i]['class_result'] == 2): ?>class="c-blue"<?php endif; if($vo[$i]['class_result'] == 3): ?>class="c-whites"<?php endif; if($vo[$i]['class_result'] == 4): ?>class="c-yellow"<?php endif; if($vo[$i]['class_result'] == 5): ?>class="c-baijin"<?php endif; if($vo[$i]['class_result'] == 6): ?>class="c-green"<?php endif; endif; if(isset($vo[$i]) && !empty($vo[$i])): ?>title="姓名：<?php echo (isset($vo[$i]['name']) && ($vo[$i]['name'] !== '')?$vo[$i]['name']:''); ?> 住址：<?php echo (isset($vo[$i]['hunit']) && ($vo[$i]['hunit'] !== '')?$vo[$i]['hunit']:''); ?>  身份证：<?php echo (isset($vo[$i]['card_number']) && ($vo[$i]['card_number'] !== '')?$vo[$i]['card_number']:''); ?>"<?php endif; ?> target="_blank"><?php echo (isset($vo[$i]['name']) && ($vo[$i]['name'] !== '')?$vo[$i]['name']:''); ?></a>
		             </td>
		             <?php if($i%20 == 0): ?>  
		              </tr><tr class="text-c">    
		             <?php endif; } ?>   
	            </tr> 
	            </table>
	            <br>
			 <?php endforeach; endif; else: echo "" ;endif; else: ?>
		      
			  <table class="table table-border table-bordered">
			  <tr class="text-c">
				    <?php $__FOR_START_7006__=1;$__FOR_END_7006__=10001;for($i=$__FOR_START_7006__;$i < $__FOR_END_7006__;$i+=1){ ?>
		             <td>
		                 <?php if(isset($pos[$i]) && !empty($pos[$i])): ?>
		             	 <a <?php if(isset($pos[$i]) && !empty($pos[$i])): ?>href="<?php echo url('admin/client/clientdetail',array('client_id'=>$pos[$i]['id'])); ?>"<?php else: ?>href="javascript:void(0)"<?php endif; if(isset($pos[$i]) && !empty($pos[$i])): if($pos[$i]['class_result'] == 1): ?>class="c-buliang"<?php endif; if($pos[$i]['class_result'] == 2): ?>class="c-blue"<?php endif; if($pos[$i]['class_result'] == 3): ?>class="c-whites"<?php endif; if($pos[$i]['class_result'] == 4): ?>class="c-yellow"<?php endif; if($pos[$i]['class_result'] == 5): ?>class="c-baijin"<?php endif; if($pos[$i]['class_result'] == 6): ?>class="c-green"<?php endif; endif; ?>title="姓名：<?php echo (isset($pos[$i]['name']) && ($pos[$i]['name'] !== '')?$pos[$i]['name']:''); ?> 住址：<?php echo (isset($pos[$i]['hunit']) && ($pos[$i]['hunit'] !== '')?$pos[$i]['hunit']:''); ?>  身份证：<?php echo (isset($pos[$i]['card_number']) && ($pos[$i]['card_number'] !== '')?$pos[$i]['card_number']:''); ?> 户号：<?php echo (isset($pos[$i]['hu']) && ($pos[$i]['hu'] !== '')?$pos[$i]['hu']:''); ?>号" target="_blank"><?php echo (isset($pos[$i]['name']) && ($pos[$i]['name'] !== '')?$pos[$i]['name']:''); ?><!-- <sub><?php echo (isset($pos[$i]['hu']) && ($pos[$i]['hu'] !== '')?$pos[$i]['hu']:''); ?></sub> --></a>
		             	 <?php endif; ?>
		             </td>
		             <?php if($i%20 == 0): ?>  
		              </tr><tr class="text-c">    
		             <?php endif; } ?>   
	            </tr> 
	            </table>
	            <br>
		 <?php endif; ?>
		</article>
       <br><br>


    </body>
</html>




