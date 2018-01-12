<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:48:"F:\www\bank.cn/app/admin\view\admin\nodeadd.html";i:1497343953;s:39:"F:\www\bank.cn/app/admin\view\base.html";i:1507780640;}*/ ?>
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
	<form action="" method="post" class="form form-horizontal" id="form-admin-node-add">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span><?php echo $type; ?>名称：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo !empty($msg['name'])?$msg['name']:''; ?>" placeholder="" id="roleName" name="name" datatype="*4-16" nullmsg="">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span><?php echo $type; ?>描述：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo !empty($msg['title'])?$msg['title']:''; ?>" placeholder="" id="roleName" name="title" datatype="*4-16" nullmsg="">
			</div>
		</div>
		<div class="row cl" style="display:none;">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>是否开启：</label>
			<div class="formControls col-xs-8 col-sm-9">
			   <div class="radio-box">
					<input type="radio" name="status" <?php if(!isset($msg['status']) || $msg['status'] != 0): ?>checked="checked"<?php endif; ?> value="1">
					<label>是</label>
				</div>
				<div class="radio-box">
					<input type="radio" name="status" <?php if(isset($msg['status']) && $msg['status'] == 0): ?>checked="checked"<?php endif; ?> value="0">
					<label>否</label>
				</div>
			</div>
		</div>
		
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">排序：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo !empty($msg['sort'])?$msg['sort']:''; ?>" placeholder="" id="" name="sort">
			</div>
		</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
			
				<?php if(isset($msg) && $msg!=''): ?>
					<a class="btn btn-primary radius"  onclick="edit()"> 提交</a>
					<input type="hidden" name="id" value="<?php echo $msg['id']; ?>">
				<?php else: ?>
					<input type="hidden" name="pid" value="<?php echo $pid; ?>" />
				    <input type="hidden" name="level" value="<?php echo $level; ?>" />
					<a class="btn btn-primary radius"  onclick="add()"> 提交</a>
				<?php endif; ?>
			</div>
		</div>
	</form>
</article>


<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/static/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
<script type="text/javascript" src="/static/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="/static/lib/jquery.validation/1.14.0/messages_zh.js"></script>
<script type="text/javascript">
$(function(){
	$(".permission-list dt input:checkbox").click(function(){
		$(this).closest("dl").find("dd input:checkbox").prop("checked",$(this).prop("checked"));
	});
	$(".permission-list2 dd input:checkbox").click(function(){
		var l =$(this).parent().parent().find("input:checked").length;
		var l2=$(this).parents(".permission-list").find(".permission-list2 dd").find("input:checked").length;
		if($(this).prop("checked")){
			$(this).closest("dl").find("dt input:checkbox").prop("checked",true);
			$(this).parents(".permission-list").find("dt").first().find("input:checkbox").prop("checked",true);
		}
		else{
			if(l==0){
				$(this).closest("dl").find("dt input:checkbox").prop("checked",false);
			}
			if(l2==0){
				$(this).parents(".permission-list").find("dt").first().find("input:checkbox").prop("checked",false);
			}
		}
	});
	
	$("#form-admin-node-add").validate({
		rules:{
			roleName:{
				required:true,
			},
		},
		onkeyup:false,
		focusCleanup:true,
		success:"valid",
		submitHandler:function(form){
			$(form).ajaxSubmit();
			var index = parent.layer.getFrameIndex(window.name);
			parent.layer.close(index);
		}
	});
});

function add(){
	  $.ajax({
		  url:'<?php echo url("admin/admin/nodeadd"); ?>',
		  type:'post',
		  data:$('form').serialize(),
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
function edit(){
	$.ajax({
		url:'<?php echo url("admin/admin/nodeedit"); ?>',
		type:'post',
		data:$('form').serialize(),
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
</script>



    </body>
</html>




