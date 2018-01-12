<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:45:"F:\www\bank.cn/app/admin\view\user\login.html";i:1499501099;}*/ ?>
﻿<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
	<META HTTP-EQUIV="Pragma" CONTENT="no-cache">
	<META HTTP-EQUIV="Cache-Control" CONTENT="no-cache">
	<META HTTP-EQUIV="Expires" CONTENT="0">
	<!--[if lt IE 9]>
    <script type="text/javascript" src="/static/lib/html5shiv.js"></script>
    <script type="text/javascript" src="/static/lib/respond.min.js"></script>
    <![endif]-->
    <link href="/static/h-ui/css/H-ui.min.css" rel="stylesheet" type="text/css" />
    <link href="/static/h-ui.admin/css/H-ui.login.css" rel="stylesheet" type="text/css" />
    <link href="/static/h-ui.admin/css/style.css" rel="stylesheet" type="text/css" />
    <link href="/static/lib/Hui-iconfont/1.0.8/iconfont.css" rel="stylesheet" type="text/css" />

    <title>网格化管理系统</title>

</head>
<body>
<input type="hidden" id="TenantId" name="TenantId" value="" />
<div class="header"></div>
<div class="loginWraper">
	<div  class="loginBox radius ">
		<form class="form form-horizontal radius " action="<?php echo url('admin/user/login'); ?>" method="post" id="loginform">
			<div class="row cl">
				<label class="form-label col-xs-2"><i class="Hui-iconfont">&#xe60d;</i></label>
				<div class="formControls col-xs-10">
					<input id="username" name="username" type="text" placeholder="账号" class="input-text radius  size-L">
				</div>
			</div>
			<div class="row cl" >
				<label class="form-label col-xs-2"><i class="Hui-iconfont">&#xe60e;</i></label>
				<div class="formControls col-xs-10">
					<input id="password" name="password" type="password" placeholder="密码" class="input-text radius  size-L">
				</div>
			</div>
			<!--<div class="row cl">
				<div class="formControls col-xs-8 col-xs-offset-3">
					<input class="input-text size-L" type="text" placeholder="验证码" onblur="if(this.value==''){this.value='验证码:'}" onclick="if(this.value=='验证码:'){this.value='';}" value="验证码:" style="width:150px;">
					<img src="">
					<a id="kanbuq" href="javascript:;">看不清，换一张</a>
				</div>
			</div>-->
			<!--<div class="row cl">
				<div class="formControls col-xs-8 col-xs-offset-3">
					<label for="online">
						<input type="checkbox" name="online" id="online" value="">
						使我保持登录状态</label>
				</div>
			</div>-->
			<div class="row cl">
				<div class="formControls col-xs-9 col-xs-offset-3">
					<input name="" type="submit" class="btn btn-success radius size-L loginbtn" value="&nbsp;登&nbsp;&nbsp;&nbsp;&nbsp;录&nbsp;">
					<input name="" type="reset" class="btn btn-default radius size-L" value="&nbsp;取&nbsp;&nbsp;&nbsp;&nbsp;消&nbsp;">
				</div>
			</div>
		</form>
	</div>
</div>
<div class="footer">
    © 2017 罗庄农村商业银行 . All rights reserved.  (请使用IE9+、Chrome 或 Firefox 浏览器访问本系统以获得更好的体验.)
</div>

<script type="text/javascript" src="/static/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/static/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="/static/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
<script type="text/javascript" src="/static/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="/static/lib/jquery.validation/1.14.0/messages_zh.js"></script>
<script>
    /*$('.form-horizontal').submit(function() {
        alert($(this).serialize());
        return false;
    });*/

    $(function() {
        $("#loginform").validate({
            rules:{
                username:{
                    required:true
                },
                password:{
                    required:true
                }

            },
            messages:{
                username:{
                    required:'账号不能为空'
                },
                password:{
                    required:'密码不能为空'
                }
            },
            onkeyup:false,
            focusCleanup:true,
            success:"valid",
            submitHandler:function(form){
                form.submit();
            }
        });
    });
</script>
</body>
</html>