<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:60:"F:\www\bank.cn/app/admin\view\incredit\loan_baoquan_add.html";i:1505802602;s:39:"F:\www\bank.cn/app/admin\view\base.html";i:1507780640;}*/ ?>
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
		<?php if(!empty($loan_baoquan_info)): ?>
			<input type="hidden" name="id" value="<?php echo $loan_baoquan_info['id']; ?>">
		<?php else: ?>
			<input type="hidden" name="loan_id" value="<?php echo input('loan_id'); ?>">
		<?php endif; ?>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-2">保全标的:</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo (isset($loan_baoquan_info['bqbiaodi']) && ($loan_baoquan_info['bqbiaodi'] !== '')?$loan_baoquan_info['bqbiaodi']:''); ?>" placeholder="保全标的"  name="bqbiaodi">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-2">查封财产类别:</label>
			<div class="formControls col-xs-8 col-sm-9">
				<span class="select-box" >
					<select class="select" name="cfcc_type"  >
						<option value="">==请选择==</option>
					 	<?php if(is_array($cfcc_type) || $cfcc_type instanceof \think\Collection || $cfcc_type instanceof \think\Paginator): $key = 0; $__LIST__ = $cfcc_type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($key % 2 );++$key;?>
                            <option <?php echo (isset($loan_baoquan_info['cfcc_type'])&&($loan_baoquan_info['cfcc_type']==$key-1))? 'selected="sleected"':'';?> value="<?php echo $key-1; ?>"><?php echo $list; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
					</select>
				</span>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-2">查封起日:</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" onfocus="WdatePicker()" value="<?php echo (isset($loan_baoquan_info['cfqr_time']) && ($loan_baoquan_info['cfqr_time'] !== '')?date('Y-m-d',$loan_baoquan_info['cfqr_time']):''); ?>"  name="cfqr_time" class="input-text Wdate" >
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-2">查封止日:</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" onfocus="WdatePicker()" value="<?php echo (isset($loan_baoquan_info['cfzr_time']) && ($loan_baoquan_info['cfzr_time'] !== '')?date('Y-m-d',$loan_baoquan_info['cfzr_time']):''); ?>"  name="cfzr_time" class="input-text Wdate" >
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-2">续封止日:</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" onfocus="WdatePicker()" value="<?php echo (isset($loan_baoquan_info['xfzr_time']) && ($loan_baoquan_info['xfzr_time'] !== '')?date('Y-m-d',$loan_baoquan_info['xfzr_time']):''); ?>"  name="xfzr_time" class="input-text Wdate" >
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-2">查封财产详情</label>
			<div class="formControls col-xs-8 col-sm-9">
			<textarea name="cf_detail"  class="formControls col-xs-12 col-sm-12">
			<?php echo (isset($loan_baoquan_info['cf_detail']) && ($loan_baoquan_info['cf_detail'] !== '')?$loan_baoquan_info['cf_detail']:''); ?></textarea>
				
				<!-- <input type="text" class="input-text" value="<?php echo (isset($loan_baoquan_info['zx_anhao']) && ($loan_baoquan_info['zx_anhao'] !== '')?$loan_baoquan_info['zx_anhao']:''); ?>" placeholder="执行案号"  name="zx_anhao"> -->
			</div>
		</div>
		
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-2">是否提出财产保全异议:</label>
			<div class="formControls col-xs-8 col-sm-9 skin-minimal">
				<div class="radio-box">
					<input name="is_bqyy" type="radio"  value="1" id="sqzhixing_1" checked>
					<label for="sqzhixing_1">是</label>
				</div>
				<div class="radio-box">
					<input type="radio" id="sqzhixing_2" value="0" name="is_bqyy"<?php echo (isset($loan_baoquan_info['is_bqyy']) && ($loan_baoquan_info['is_bqyy'] == '0')?'checked':''); ?> >
					<label for="sqzhixing_2">否</label>
				</div>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-2">财产保全异议内容:</label>
			<div class="formControls col-xs-8 col-sm-9">
			<textarea name="bqyy_content" class="formControls col-xs-12 col-sm-12" ><?php echo (isset($loan_baoquan_info['bqyy_content']) && ($loan_baoquan_info['bqyy_content'] !== '')?$loan_baoquan_info['bqyy_content']:''); ?></textarea>
				<!-- <input type="text" class="input-text" value="<?php echo (isset($loan_baoquan_info['zxyy_content']) && ($loan_baoquan_info['zxyy_content'] !== '')?$loan_baoquan_info['zxyy_content']:''); ?>" placeholder="执行异议内容"  name="zxyy_content"> -->
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




