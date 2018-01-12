<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:57:"D:\xampps\htdocs\work\bank/app/admin\view\user\login.html";i:1512741080;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>网格化管理系统</title>
	<style type="text/css">
	    body,div{margin:0;padding:0;}
	    body{
			background: #3283AC;
	    }
		#header{
			position: absolute;
			width: 100%;
			height: 60px;
			background: #426374 url(/static/h-ui.admin/images/logo.png) no-repeat 0 center;
			z-index: 2;
		}
		#main{
			position: absolute;
			width: 100%;
			height:auto;
			left: 0;
			top: 0;
			bottom: 0;
			right: 0;
			z-index: 1;
			background: #3283AC url(/static/h-ui.admin//images/admin-login-bg.jpg) no-repeat center;
			overflow: hidden;
		}
		#footer{
			width: 100%;
			height:77px;
			line-height:77px;
			text-align: center;
			color: #fff;
			font-size: 12px;
			background-color: #426374; 
			position:absolute; 
			bottom: 0;
			z-index: 99; /*对火狐debug有重要影响，不加这个网页底部不随debug上浮*/
		}
		.loginBox{
		    position: absolute;
		    width: 320px;
		    height: auto;	
		    left: 52%;
		    top: 30%;
		    padding: 15px 35px 35px 20px;
		    border:1px solid #CCC;
		    border-radius: 20px;
		    background-color:#99C0D7;
		}
		.loginBox input{height:30px;line-height: 30px;border-radius: 20px;}
		.input-text{width: 80%;border:1px solid #CCC;padding-left:20px;margin:10px 0;}
		.form-label{padding-left:10px;}
	</style>
</head>
<body>
    <div id="header"></div>	
	<div id="main">
		<div  class="loginBox radius ">
			<form class="form form-horizontal radius " action="<?php echo url('admin/user/login'); ?>" method="post" id="loginform">
				<div class="row cl">
					<label class="form-label col-xs-2">账号:</label>
					<div class="formControls col-xs-10">
						<input id="username" name="username" type="text" placeholder="账号" class="input-text">
					</div>
				</div>
				<div class="row cl" >
					<label class="form-label col-xs-2">密码:</label>
					<div class="formControls col-xs-10">
						<input id="password" name="password" type="password" placeholder="密码" class="input-text">
					</div>
				</div>
				
				<div class="row cl">
					<div class="formControls col-xs-9 col-xs-offset-3">
						<input name="" type="submit" class="btn btn-success radius size-L loginbtn" value="&nbsp;登&nbsp;&nbsp;&nbsp;&nbsp;录&nbsp;">
						<input name="" type="reset" class="btn btn-default radius size-L" value="&nbsp;取&nbsp;&nbsp;&nbsp;&nbsp;消&nbsp;">
					</div>
				</div>
			</form>
		</div>
	</div>
	<div id="footer">
		  © 2017 罗庄农村商业银行 . 汇农聚集商行天下
	</div>	         
</body>
</html>