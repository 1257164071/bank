<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:55:"F:\www\bank.cn/app/admin\view\dataconfig\configadd.html";i:1496744700;s:39:"F:\www\bank.cn/app/admin\view\base.html";i:1507780640;}*/ ?>
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


	<form action="" method="post" class="form form-horizontal" id="form-member-add">
		<input type="hidden" name="id" value="<?php echo (isset($client['id']) && ($client['id'] !== '')?$client['id']:''); ?>" >


		<div class="row cl">
			<label class="form-label col-xs-2 col-sm-2"><span class="c-red">*</span>CODE</label>
			<div class="formControls col-xs-10 col-sm-10">
				<input type="text" class="input-text" value="<?php echo (isset($client['code']) && ($client['code'] !== '')?$client['code']:''); ?>" placeholder="CODE"  name="code">
			</div>
		</div>


		<div class="row cl">
			<label class="form-label col-xs-2 col-sm-2"><span class="c-red">*</span>名称</label>
			<div class="formControls col-xs-10 col-sm-10">
				<input type="text" class="input-text" value="<?php echo (isset($client['name']) && ($client['name'] !== '')?$client['name']:''); ?>" placeholder="名称"  name="name">
			</div>
		</div>


		<div class="row cl">
			<label class="form-label col-xs-2 col-sm-2"><span class="c-red">*</span>值</label>
			<div class="formControls col-xs-10 col-sm-10">
				<textarea name="value" class="textarea" id="" cols="30" rows="10" placeholder="值"><?php echo (isset($client['value']) && ($client['value'] !== '')?$client['value']:''); ?></textarea>
			</div>
		</div>



		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">

					<a class="btn btn-primary radius"  onclick="add()"> 提交</a>

				<!--<input class="btn btn-primary radius" onclick="submit()" type="button" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">-->
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
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});


});

  function add(){
	  $.ajax({
		  url:'<?php echo url("admin/dataconfig/configadd"); ?>',
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




