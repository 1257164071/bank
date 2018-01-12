<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:59:"F:\www\bank.cn/app/admin\view\incredit\loan_shenli_add.html";i:1509679551;s:39:"F:\www\bank.cn/app/admin\view\base.html";i:1507780640;}*/ ?>
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
		<?php if(!empty($loan_shenli_info)): ?>
			<input type="hidden" name="id" value="<?php echo $loan_shenli_info['id']; ?>">
		<?php else: ?>
			<input type="hidden" name="loan_id" value="<?php echo input('loan_id'); ?>">
		<?php endif; ?>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-2">贷款形态:</label>
			<div class="formControls col-xs-8 col-sm-9">
				<span class="select-box" >
					<select class="select" name="account_status"  >
						<option value="">==请选择==</option>
						<?php if(is_array($account_status) || $account_status instanceof \think\Collection || $account_status instanceof \think\Paginator): $key = 0; $__LIST__ = $account_status;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($key % 2 );++$key;?>
						<option <?php echo (isset($loan_shenli_info['account_status'])&&($loan_shenli_info['account_status']==$key-1))? 'selected="sleected"':'';?> value="<?php echo $key-1; ?>"><?php echo $list; ?></option>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</select>
				</span>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-2">起诉标的:</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo (isset($loan_shenli_info['qsbiaodi']) && ($loan_shenli_info['qsbiaodi'] !== '')?$loan_shenli_info['qsbiaodi']:''); ?>" placeholder="起诉标的"  name="qsbiaodi">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-2">立案时间:</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" onfocus="WdatePicker()" value="<?php echo (isset($loan_shenli_info['lian_time']) && ($loan_shenli_info['lian_time'] !== '')?date('Y-m-d',$loan_shenli_info['lian_time']):''); ?>"  name="lian_time" class="input-text Wdate" >
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-2">审理案号:</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo (isset($loan_shenli_info['shenli_anhao']) && ($loan_shenli_info['shenli_anhao'] !== '')?$loan_shenli_info['shenli_anhao']:''); ?>" placeholder="审理案号"  name="shenli_anhao">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-2">受理法院:</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo (isset($loan_shenli_info['shouli_fayuan']) && ($loan_shenli_info['shouli_fayuan'] !== '')?$loan_shenli_info['shouli_fayuan']:''); ?>" placeholder="受理法院"  name="shouli_fayuan">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-2">案件负责人:</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo (isset($loan_shenli_info['anjian_fzr']) && ($loan_shenli_info['anjian_fzr'] !== '')?$loan_shenli_info['anjian_fzr']:''); ?>" placeholder="案件负责人"  name="anjian_fzr">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-2">经办人:</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo (isset($loan_shenli_info['jingbanren']) && ($loan_shenli_info['jingbanren'] !== '')?$loan_shenli_info['jingbanren']:''); ?>" placeholder="经办人"  name="jingbanren">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-2">经办法官:</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo (isset($loan_shenli_info['jingbanfg']) && ($loan_shenli_info['jingbanfg'] !== '')?$loan_shenli_info['jingbanfg']:''); ?>" placeholder="经办法官"  name="jingbanfg">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-2">诉讼费:</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo (isset($loan_shenli_info['susongfei']) && ($loan_shenli_info['susongfei'] !== '')?$loan_shenli_info['susongfei']:''); ?>" placeholder="诉讼费"  name="susongfei">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-2">开庭送达时间:</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" onfocus="WdatePicker()" value="<?php echo (isset($loan_shenli_info['ktsd_time']) && ($loan_shenli_info['ktsd_time'] !== '')?date('Y-m-d',$loan_shenli_info['ktsd_time']):''); ?>"  name="ktsd_time" class="input-text Wdate" >
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-2">开庭时间:</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" onfocus="WdatePicker()" value="<?php echo (isset($loan_shenli_info['kt_time']) && ($loan_shenli_info['kt_time'] !== '')?date('Y-m-d',$loan_shenli_info['kt_time']):''); ?>"  name="kt_time" class="input-text Wdate" >
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-2">撤诉或驳回:</label>
			<div class="formControls col-xs-8 col-sm-9">
				<span class="select-box" >
					<select class="select" name="csbh"  >
						<option value="">==请选择==</option>
						<option <?php if(isset($loan_shenli_info['csbh'])&&$loan_shenli_info['csbh']==1){ echo  'selected="selected"'; }?> value="1">撤诉</option>
						<option <?php if(isset($loan_shenli_info['csbh'])&&$loan_shenli_info['csbh']==2){ echo  'selected="selected"'; }?> value="2">驳回</option>
					 	
					</select>
				</span>
			</div>
		</div>
			<div class="row cl">
			<label class="form-label col-xs-3 col-sm-2">判决或调解:</label>
			<div class="formControls col-xs-8 col-sm-9">
				<span class="select-box" >
					<select class="select" name="pjtiaojie"  >
						<option value="">==请选择==</option>
						<option <?php if(isset($loan_shenli_info['pjtiaojie'])&&$loan_shenli_info['pjtiaojie']==1){ echo  'selected="selected"'; }?> value="1">判决</option>
						<option <?php if(isset($loan_shenli_info['pjtiaojie'])&&$loan_shenli_info['pjtiaojie']==2){ echo  'selected="selected"'; }?> value="2">调解</option>
					 	
					</select>
				</span>
			</div>
		</div>
			<div class="row cl">
			<label class="form-label col-xs-3 col-sm-2">判决结果:</label>
			<div class="formControls col-xs-8 col-sm-9">
				<span class="select-box" >
					<select class="select" name="pjjieguo"  >
						<option value="">==请选择==</option>
						<option <?php if(isset($loan_shenli_info['pjjieguo'])&&$loan_shenli_info['pjjieguo']==1){ echo  'selected="selected"'; }?> value="1">胜诉</option>
						<option <?php if(isset($loan_shenli_info['pjjieguo'])&&$loan_shenli_info['pjjieguo']==2){ echo  'selected="selected"'; }?> value="2">全部败诉</option>
						<option <?php if(isset($loan_shenli_info['pjjieguo'])&&$loan_shenli_info['pjjieguo']==3){ echo  'selected="selected"'; }?> value="3">部分败诉</option>
					 	
					</select>
				</span>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-2">判决(调解)时间:</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" onfocus="WdatePicker()" value="<?php echo (isset($loan_shenli_info['pj_time']) && ($loan_shenli_info['pj_time'] !== '')?date('Y-m-d',$loan_shenli_info['pj_time']):''); ?>"  name="pj_time" class="input-text Wdate" >
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-2">判决送达时间:</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" onfocus="WdatePicker()" value="<?php echo (isset($loan_shenli_info['pjsd_time']) && ($loan_shenli_info['pjsd_time'] !== '')?date('Y-m-d',$loan_shenli_info['pjsd_time']):''); ?>"  name="pjsd_time" class="input-text Wdate" >
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-2">上诉时间:</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" onfocus="WdatePicker()" value="<?php echo (isset($loan_shenli_info['ss_time']) && ($loan_shenli_info['ss_time'] !== '')?date('Y-m-d',$loan_shenli_info['ss_time']):''); ?>"  name="ss_time" class="input-text Wdate" >
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-2">再、重审案号:</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo (isset($loan_shenli_info['zsanhao']) && ($loan_shenli_info['zsanhao'] !== '')?$loan_shenli_info['zsanhao']:''); ?>" placeholder="再、重审案号"  name="zsanhao">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-2">判决生效时间:</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" onfocus="WdatePicker()" value="<?php echo (isset($loan_shenli_info['pjsx_time']) && ($loan_shenli_info['pjsx_time'] !== '')?date('Y-m-d',$loan_shenli_info['pjsx_time']):''); ?>"  name="pjsx_time" class="input-text Wdate" >
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




