<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:52:"F:\www\bank.cn/app/admin\view\incredit\dkss_add.html";i:1505534557;s:39:"F:\www\bank.cn/app/admin\view\base.html";i:1507780640;}*/ ?>
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
		<?php if(!empty($loan_ss_info)): ?>
			<input type="hidden" name="id" value="<?php echo $loan_ss_info['id']; ?>">
		<?php else: ?>
			<input type="hidden" name="loan_id" value="<?php echo input('loan_id'); ?>">
		<?php endif; ?>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-2">诉前审查：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" onfocus="WdatePicker()" value="<?php echo (isset($loan_ss_info['sqshencha']) && ($loan_ss_info['sqshencha'] !== '')?date('Y-m-d',$loan_ss_info['sqshencha']):''); ?>"  name="sqshencha" class="input-text Wdate" >
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-2">一审：</label>
			<div class="formControls col-xs-8 col-sm-9 skin-minimal">
				<div class="radio-box">
					<input name="yishen" type="radio"  value="1" id="yishen_1" checked>
					<label for="yishen_1">再审</label>
				</div>
				<div class="radio-box">
					<input type="radio" id="yishen_2" value="2" name="yishen" <?php echo (isset($loan_ss_info['yishen']) && ($loan_ss_info['yishen'] == '2')?'checked':''); ?>>
					<label for="yishen_2">重审</label>
				</div>

			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-2">上诉：</label>
			<div class="formControls col-xs-8 col-sm-9 skin-minimal">
				<div class="radio-box">
					<input name="shangsu" type="radio"  value="1" id="shangsu_1" checked>
					<label for="shangsu_1">再审</label>
				</div>
				<div class="radio-box">
					<input type="radio" id="shangsu_2" value="2" name="shangsu"<?php echo (isset($loan_ss_info['shangsu']) && ($loan_ss_info['shangsu'] == '2')?'checked':''); ?>  >
					<label for="shangsu_2">重审</label>
				</div>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-2">申请执行：</label>
			<div class="formControls col-xs-8 col-sm-9 skin-minimal">
				<div class="radio-box">
					<input name="sqzhixing" type="radio"  value="1" id="sqzhixing_1" checked>
					<label for="sqzhixing_1">是</label>
				</div>
				<div class="radio-box">
					<input type="radio" id="sqzhixing_2" value="0" name="sqzhixing"<?php echo (isset($loan_ss_info['sqzhixing']) && ($loan_ss_info['sqzhixing'] == '0')?'checked':''); ?> >
					<label for="sqzhixing_2">否</label>
				</div>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-2">执行异议：</label>
			<div class="formControls col-xs-8 col-sm-9 skin-minimal">
				<div class="radio-box">
					<input name="zxyiyi" type="radio"  value="1" id="zxyiyi_1" checked>
					<label for="zxyiyi_1">是</label>
				</div>
				<div class="radio-box">
					<input type="radio" id="zxyiyi_2" value="0" name="zxyiyi" <?php echo (isset($loan_ss_info['zxyiyi']) && ($loan_ss_info['zxyiyi'] == '0')?'checked':''); ?> >
					<label for="zxyiyi_2">否</label>
				</div>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-2">检察院检察：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo (isset($loan_ss_info['jcyjiancha']) && ($loan_ss_info['jcyjiancha'] !== '')?$loan_ss_info['jcyjiancha']:''); ?>" placeholder="检察院检察"  name="jcyjiancha">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-2">其他：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo (isset($loan_ss_info['ss_other']) && ($loan_ss_info['ss_other'] !== '')?$loan_ss_info['ss_other']:''); ?>" placeholder="其他"  name="ss_other">
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




