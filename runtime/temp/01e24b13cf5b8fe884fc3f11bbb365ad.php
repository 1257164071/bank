<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:60:"F:\www\bank.cn/app/admin\view\incredit\loan_zhixing_add.html";i:1505723185;s:39:"F:\www\bank.cn/app/admin\view\base.html";i:1507780640;}*/ ?>
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
		<?php if(!empty($loan_zhixing_info)): ?>
			<input type="hidden" name="id" value="<?php echo $loan_zhixing_info['id']; ?>">
		<?php else: ?>
			<input type="hidden" name="loan_id" value="<?php echo input('loan_id'); ?>">
		<?php endif; ?>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-2">执行标的:</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo (isset($loan_zhixing_info['zzbiaodi']) && ($loan_zhixing_info['zzbiaodi'] !== '')?$loan_zhixing_info['zzbiaodi']:''); ?>" placeholder="执行标的"  name="zzbiaodi">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-2">申请执行时间:</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" onfocus="WdatePicker()" value="<?php echo (isset($loan_zhixing_info['sszx_time']) && ($loan_zhixing_info['sszx_time'] !== '')?date('Y-m-d',$loan_zhixing_info['sszx_time']):''); ?>"  name="sszx_time" class="input-text Wdate" >
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-2">执行案号</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo (isset($loan_zhixing_info['zx_anhao']) && ($loan_zhixing_info['zx_anhao'] !== '')?$loan_zhixing_info['zx_anhao']:''); ?>" placeholder="执行案号"  name="zx_anhao">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-2">经办人</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo (isset($loan_zhixing_info['zxjingbanren']) && ($loan_zhixing_info['zxjingbanren'] !== '')?$loan_zhixing_info['zxjingbanren']:''); ?>" placeholder="经办人"  name="zxjingbanren">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-2">经办法官</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo (isset($loan_zhixing_info['zxjbfg']) && ($loan_zhixing_info['zxjbfg'] !== '')?$loan_zhixing_info['zxjbfg']:''); ?>" placeholder="经办法官"  name="zxjbfg">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-2">执行送达时间:</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" onfocus="WdatePicker()" value="<?php echo (isset($loan_zhixing_info['zxsd_time']) && ($loan_zhixing_info['zxsd_time'] !== '')?date('Y-m-d',$loan_zhixing_info['zxsd_time']):''); ?>"  name="zxsd_time" class="input-text Wdate" >
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-2">是否提出执行异议:</label>
			<div class="formControls col-xs-8 col-sm-9 skin-minimal">
				<div class="radio-box">
					<input name="has_zxyy" type="radio"  value="1" id="sqzhixing_1" checked>
					<label for="sqzhixing_1">是</label>
				</div>
				<div class="radio-box">
					<input type="radio" id="sqzhixing_2" value="0" name="has_zxyy"<?php echo (isset($loan_zhixing_info['has_zxyy']) && ($loan_zhixing_info['has_zxyy'] == '0')?'checked':''); ?> >
					<label for="sqzhixing_2">否</label>
				</div>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-2">执行异议内容:</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo (isset($loan_zhixing_info['zxyy_content']) && ($loan_zhixing_info['zxyy_content'] !== '')?$loan_zhixing_info['zxyy_content']:''); ?>" placeholder="执行异议内容"  name="zxyy_content">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-2">回收标的:</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo (isset($loan_zhixing_info['shbiaodi']) && ($loan_zhixing_info['shbiaodi'] !== '')?$loan_zhixing_info['shbiaodi']:''); ?>" placeholder="回收标的"  name="shbiaodi">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-2">未回收标的:</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo (isset($loan_zhixing_info['wshbiaodi']) && ($loan_zhixing_info['wshbiaodi'] !== '')?$loan_zhixing_info['wshbiaodi']:''); ?>" placeholder="未回收标的"  name="wshbiaodi">
			</div>
		</div> 
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-2">终结本次执行时间:</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" onfocus="WdatePicker()" value="<?php echo (isset($loan_zhixing_info['zjbczx_time']) && ($loan_zhixing_info['zjbczx_time'] !== '')?date('Y-m-d',$loan_zhixing_info['zjbczx_time']):''); ?>"  name="zjbczx_time" class="input-text Wdate" >
			</div>
		</div>    
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-2">恢复执行时间:</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" onfocus="WdatePicker()" value="<?php echo (isset($loan_zhixing_info['hfzx_time']) && ($loan_zhixing_info['hfzx_time'] !== '')?date('Y-m-d',$loan_zhixing_info['hfzx_time']):''); ?>"  name="hfzx_time" class="input-text Wdate" >
			</div>
		</div>      
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-2">终结执行时间:</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" onfocus="WdatePicker()" value="<?php echo (isset($loan_zhixing_info['zjzx_time']) && ($loan_zhixing_info['zjzx_time'] !== '')?date('Y-m-d',$loan_zhixing_info['zjzx_time']):''); ?>"  name="zjzx_time" class="input-text Wdate" >
			</div>
		</div> 
		
		<div class="row cl">
			<div class="col-xs-8 col-sm-6 col-xs-offset-4 col-sm-offset-3">
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




