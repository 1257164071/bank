<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:54:"D:\Xampps\htdocs\bank/app/admin\view\admin\access.html";i:1498812222;s:46:"D:\Xampps\htdocs\bank/app/admin\view\base.html";i:1497005003;}*/ ?>
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

    
<style>
	.app{
		width:94%;
		height:auto;
		overflow:hidden;
		margin:20px auto;
		padding:10px 20px;
		border:#ccc solid 1px;
	}
	.app dl{
		margin:10px 0;
		border:#ccc solid 1px;
		height:auto;
		overflow:hidden;
	}
	.app dl dt{
		display:block;
		height:36px;
		line-height:36px;
		background:#e6e6e6;
		text-index:10px;
		padding:0 10px;
	}
	.app dl dd{
		float:left;
		margin:0 10px;
		padding:10px 15px;
	}

</style>
<section class="cl pd-20">
	<form action="" method="post" class="form form-horizontal" id="form-admin-role-add">
		
		<div class="row cl">
			<label class="form-label col-xs-2 col-sm-1">选择:</label>
			<div class="formControls col-xs-10 col-sm-11">
			 
			   <?php if(is_array($nodes) || $nodes instanceof \think\Collection || $nodes instanceof \think\Paginator): $i = 0; $__LIST__ = $nodes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$app): $mod = ($i % 2 );++$i;?>
				<dl class="permission-list">
					<dt>
						<label>
							<!--  <input type="checkbox" value="<?php echo $app['id']; ?>_1" name="access[]" id="user-Character-0" <?php if($app["access"]): ?>checked='checked'<?php endif; ?> > -->
							<?php echo $app['title']; ?></label>
					</dt>
					<dd>
					   <?php if(is_array($app['child']) || $app['child'] instanceof \think\Collection || $app['child'] instanceof \think\Paginator): $i = 0; $__LIST__ = $app['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$action): $mod = ($i % 2 );++$i;?>
						<dl class="cl permission-list2">
							<dt>
								<label class="">
									<input type="checkbox" value="<?php echo $action['id']; ?>_2" name="access[]" id="user-Character-0-0" <?php if($action["access"]): ?>checked="checked"<?php endif; ?>>
									<b><?php echo $action['title']; ?></b></label>
							</dt>
							<dd>
								<label class="">
								<?php if(is_array($action['child']) || $action['child'] instanceof \think\Collection || $action['child'] instanceof \think\Paginator): $i = 0; $__LIST__ = $action['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$method): $mod = ($i % 2 );++$i;?>
									<input type="checkbox" value="<?php echo $method['id']; ?>_3" name="access[]" id="user-Character-0-0-0" <?php if($method["access"]): ?>checked="checked"<?php endif; ?>>
									<?php echo $method['title']; ?></label>
								<?php endforeach; endif; else: echo "" ;endif; ?>
							</dd>
						</dl>
					   <?php endforeach; endif; else: echo "" ;endif; ?>
					</dd>
				</dl>
			<?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
		</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
			    <input type="hidden" name="rid" value="<?php echo $rid; ?>" />
				<input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;确定&nbsp;&nbsp;">
				<a href="javascript:" class="btn btn-default radius"  onclick="layer_close()"> 取消</a>
			</div>
		</div>
</section>


<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/static/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/static/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/static/lib/laypage/1.2/laypage.js"></script>
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
	
	$("#form-admin-role-add").validate({
		onkeyup:false,
		focusCleanup:true,
		success:"valid",
		submitHandler:function(form){
			var $form = $(form);
			$.ajax({
				url:"<?php echo url('admin/admin/setaccess'); ?>",
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
	
	
	
	
});
</script>





    </body>
</html>




