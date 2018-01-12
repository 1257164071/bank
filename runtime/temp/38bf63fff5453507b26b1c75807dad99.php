<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:49:"F:\www\bank.cn/app/admin\view\familyfund\add.html";i:1498124849;s:39:"F:\www\bank.cn/app/admin\view\base.html";i:1507780640;}*/ ?>
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
		<input type="hidden" name="client_id" value="<?php echo $client_id; ?>" >
		<?php else: ?>
		<input type="hidden" name="id" value="<?php echo $msg['id']; ?>" >
		<?php endif; ?>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-3">存款股金类：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo !empty($msg['fund'])?$msg['fund']:''; ?>" placeholder="" id="fund" name="fund">
				查控（设置查控期限）  <input type="text" onfocus="WdatePicker()" value=""  name="fund_ck_date" class="input-text Wdate" >
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-3">房产土地类：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text"  name="house" value="<?php echo !empty($msg['house'])?$msg['house']:''; ?>">
				查控（设置查控期限）  <input type="text" onfocus="WdatePicker()" value="<?php if(isset($msg['house_ck_date']) && ($msg['house_ck_date'] != 0)): ?><?php echo date("Y-m-d",$msg['house_ck_date']); endif; ?>"  name="house_ck_date" class="input-text Wdate" >
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-3">车辆类：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text"  name="car" value="<?php echo !empty($msg['car'])?$msg['car']:''; ?>">
				查控（设置查控期限）  <input type="text" onfocus="WdatePicker()" value="<?php if(isset($msg['car_ck_date']) && ($msg['car_ck_date'] != 0)): ?><?php echo date("Y-m-d",$msg['car_ck_date']); endif; ?>"  name="car_ck_date" class="input-text Wdate" >
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-3">地产：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text"  name="land" value="<?php echo !empty($msg['land'])?$msg['land']:''; ?>">
				查控（设置查控期限）  <input type="text" onfocus="WdatePicker()" value="<?php if(isset($msg['land_ck_date']) && ($msg['land_ck_date'] != 0)): ?><?php echo date("Y-m-d",$msg['land_ck_date']); endif; ?>"  name="land_ck_date" class="input-text Wdate" >
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-3">公司：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text"  name="company" value="<?php echo !empty($msg['company'])?$msg['company']:''; ?>">
				查控（设置查控期限）  <input type="text" onfocus="WdatePicker()" value="<?php if(isset($msg['company_ck_date']) && ($msg['company_ck_date'] != 0)): ?><?php echo date("Y-m-d",$msg['company_ck_date']); endif; ?>"  name="company_ck_date" class="input-text Wdate" >
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-3">设备存货类：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text"  name="device" value="<?php echo !empty($msg['device'])?$msg['device']:''; ?>">
				查控（设置查控期限）  <input type="text" onfocus="WdatePicker()" value="<?php if(isset($msg['device_ck_date']) && ($msg['device_ck_date'] != 0)): ?><?php echo date("Y-m-d",$msg['device_ck_date']); endif; ?>"  name="device_ck_date" class="input-text Wdate" >
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-3">优先赔偿权：</label>
			<div class="formControls col-xs-8 col-sm-9">
					<div class="radio-box">
					<input name="rightfirst" type="radio" id="sex-1" <?php if(!isset($msg['rightfirst'])): else: if($msg['rightfirst'] == 1): ?>checked="checked"<?php endif; endif; ?> value="1">
					<label>优先</label>
				</div>
				<div class="radio-box">
					<input name="rightfirst" type="radio" id="sex-2" <?php if(!isset($msg['rightfirst'])): ?>checked="checked"<?php else: if($msg['rightfirst'] == 0): ?>checked="checked"<?php endif; endif; ?> value="0">
					<label>否</label>
				</div>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-3">还款意愿：</label>
			<div class="formControls col-xs-8 col-sm-9">
					<div class="radio-box">
					<input name="returnwant" type="radio" id="sex-1" <?php if(!isset($msg['returnwant'])): else: if($msg['returnwant'] == 1): ?>checked="checked"<?php endif; endif; ?> value="1">
					<label>有</label>
				</div>
				<div class="radio-box">
					<input name="returnwant" type="radio" id="sex-2" <?php if(!isset($msg['returnwant'])): ?>checked="checked"<?php else: if($msg['returnwant'] == 0): ?>checked="checked"<?php endif; endif; ?> value="0">
					<label>无</label>
				</div>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-3">涉诉信息：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<textarea name="inlaw" cols="" rows="" class="textarea"  placeholder="说点什么...100个字符以内" dragonfly="true" onKeyUp="textarealength(this,100)"><?php echo !empty($msg['inlaw'])?$msg['inlaw']:''; ?></textarea>
				<p class="textarea-numberbar"><em class="textarea-length">0</em>/100</p>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-3">备注：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<textarea name="other" cols="" rows="" class="textarea"  placeholder="说点什么...100个字符以内" dragonfly="true" onKeyUp="textarealength(this,100)"><?php echo !empty($msg['other'])?$msg['other']:''; ?></textarea>
				<p class="textarea-numberbar"><em class="textarea-length">0</em>/100</p>
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
			
		},
		messages:{
			
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




