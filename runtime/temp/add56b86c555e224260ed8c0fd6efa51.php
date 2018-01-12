<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:57:"F:\www\bank.cn/app/admin\view\incredit\backrecordadd.html";i:1497923387;s:39:"F:\www\bank.cn/app/admin\view\base.html";i:1507780640;}*/ ?>
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

    

<article class="cl pd-20">
	<form action="" method="post" class="form form-horizontal" id="form-admin-add">
	    <?php if(isset($add) && ($add == 1)): ?>
	    <input type="hidden" name="loan_id" value="<?php echo $loan_id; ?>" >
		<?php else: ?>
		<input type="hidden" name="id" value="<?php echo $msg['id']; ?>" >
		<?php endif; ?>
      
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-3"><span class="c-red">*</span>清收时间：</label>
			<div class="formControls col-xs-8 col-sm-9 ">
			    <input type="text" onfocus="WdatePicker()" value="<?php echo !empty($msg['back_time'])?$msg['back_time']:''; ?>"  name="back_time" class="input-text Wdate" >
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-3"><span class="c-red">*</span>清收处置进度：</label>
			<div class="formControls col-xs-8 col-sm-9 ">
				<input type="text" class="input-text" value="<?php echo !empty($msg['process'])?$msg['process']:''; ?>" placeholder="" id="process" name="process">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-3"><span class="c-red">*</span>调查人：</label>
			<div class="formControls col-xs-8 col-sm-9 ">
				<input type="text" class="input-text" value="<?php echo !empty($msg['back_name'])?$msg['back_name']:''; ?>" placeholder="" id="card" name="back_name">
			</div>
		</div>
		
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
			<input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
				
			</div>
		</div>
	</form>
</article>



<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/static/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/static/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
<script type="text/javascript" src="/static/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="/static/lib/jquery.validation/1.14.0/messages_zh.js"></script>
<script type="text/javascript">
$(function(){
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});
	
	$("#form-admin-add").validate({
		rules:{
			username:{
				required:true,
				minlength:4,
				maxlength:16
			},
		   <?php if(!isset($msg['username'])): ?>
			password:{
				required:true,
			},
			<?php endif; ?>
			password2:{
				<?php if(!isset($msg['username'])): ?>
				required:true,
				<?php endif; ?>
				equalTo: "#password"
			},
			
			sex:{
				required:true,
			},
			role_id:{
				required:true,
			}
		},
		messages:{
			username:{
				required:'用户名不能为空'
			},
			password:{
				required:'密码不能为空'
			},
			password2:{
				required:'密码必须一致'
			},
			sex:{
				required:'性别必须选择'
			},
			role_id:{
				required:'角色必须选择'
			}
		},
		onkeyup:false,
		focusCleanup:true,
		success:"valid",
		submitHandler:function(form){
			var $form = $(form);
			$.ajax({
				url:'<?php echo $url; ?>',
				type:'post',
				data:$form.serialize(),
				success:function (data) {
					if(data.code==0){
						layer.msg(data.msg);
						parent.location.reload();
						setTimeout("parent.layer.close(parent.layer.getFrameIndex(window.name))",2000);
					}else{
						layer.msg(data.msg);
					}
				}
			});
		}
	});

})


      
</script>



    </body>
</html>




