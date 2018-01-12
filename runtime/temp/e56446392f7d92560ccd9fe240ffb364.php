<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:49:"F:\www\bank.cn/app/admin\view\admin\adminadd.html";i:1508054129;s:39:"F:\www\bank.cn/app/admin\view\base.html";i:1507780640;}*/ ?>
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
	    <?php if(isset($msg['password']) && $msg['password'] != ''): ?>
	    <input type="hidden" name="id" value="<?php echo $msg['id']; ?>" >
		<input type="hidden" name="ypassword" value="<?php echo $msg['password']; ?>" >
		<?php endif; ?>
       <div id="tishi"></div>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-2"><span class="c-red">*</span>用户名：</label>
			<div class="formControls col-xs-9 col-sm-10" id="uname">
			    <?php if(isset($msg['username'])): ?>
			    <?php echo $msg['username']; ?><input type="hidden" name="username" value="<?php echo $msg['username']; ?>" >
			    <?php else: ?>
				<input type="text" class="input-text" value="<?php echo !empty($msg['username'])?$msg['username']:''; ?>" placeholder="" id="username" name="username" >
				<?php endif; ?>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-2"><?php echo !empty($msg['password'])?'重置':'<span class="c-red">*</span>'; ?>密码：</label>
			<div class="formControls col-xs-9 col-sm-10">
				<input type="password" class="input-text" autocomplete="off" value="" placeholder="密码" id="password" name="password">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-2"><?php echo !empty($msg['password'])?'':'<span class="c-red">*</span>'; ?>确认：</label>
			<div class="formControls col-xs-9 col-sm-10">
				 <input type="password" class="input-text" autocomplete="off"  placeholder="确认新密码" id="password2" name="password2">  
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-2"><span class="c-red">*</span>姓名：</label>
			<div class="formControls col-xs-9 col-sm-10 ">
				<input type="text" class="input-text" value="<?php echo !empty($msg['real_name'])?$msg['real_name']:''; ?>" placeholder="" id="realname" name="real_name">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-2"><span class="c-red">*</span>性别：</label>
			<div class="formControls col-xs-9 col-sm-10 skin-minimal">
				<div class="radio-box">
					<input name="sex" type="radio" id="sex-1" checked value="1">
					<label for="sex-1">男</label>
				</div>
				<div class="radio-box">
					<input type="radio" id="sex-2" name="sex" value="0">
					<label for="sex-2">女</label>
				</div>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-2">手机：</label>
			<div class="formControls col-xs-9 col-sm-10">
				<input type="text" class="input-text" value="<?php echo !empty($msg['mobile'])?$msg['mobile']:''; ?>" placeholder="" id="mobile" name="mobile">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-2">邮箱：</label>
			<div class="formControls col-xs-9 col-sm-10">
				<input type="text" class="input-text" placeholder="@" name="email" id="email" value="<?php echo !empty($msg['email'])?$msg['email']:''; ?>">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-2"><span class="c-red">*</span>银行：</label>
			<div class="formControls col-xs-9 col-sm-10"> <span class="select-box" style="width:350px;">
				<select class="select" name="bank_id" size="1">
					<option value="0">==请选择==</option>
					<?php if(is_array($banklist) || $banklist instanceof \think\Collection || $banklist instanceof \think\Paginator): $i = 0; $__LIST__ = $banklist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$bank): $mod = ($i % 2 );++$i;?>
						<option value="<?php echo $bank['id']; ?>" <?php if(isset($msg['bank_id']) && ($bank['id'] == $msg['bank_id'])): ?>selected="selected"<?php endif; ?>><?php echo $bank['bankname']; ?></option>
						<?php if(is_array($bank['child']) || $bank['child'] instanceof \think\Collection || $bank['child'] instanceof \think\Paginator): $i = 0; $__LIST__ = $bank['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$b): $mod = ($i % 2 );++$i;?>
						    <option value="<?php echo $b['id']; ?>" <?php if(isset($msg['bank_id']) && ($b['id'] == $msg['bank_id'])): ?>selected="selected"<?php endif; ?> style="padding-left:30px;padding-left:30px;">&nbsp;&nbsp;&nbsp;&nbsp;|—<?php echo $b['bankname']; ?></option>
						<?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
				</select>
				</span> </div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-2"><span class="c-red">*</span>角色：</label>
			<div class="formControls col-xs-9 col-sm-10"> <span class="select-box" style="width:150px;">
				<select class="select" name="role_id" size="1" id="role_id">
				    <option value="">==请选择==</option>
					<?php if(is_array($RbacRolelist) || $RbacRolelist instanceof \think\Collection || $RbacRolelist instanceof \think\Paginator): $i = 0; $__LIST__ = $RbacRolelist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$role): $mod = ($i % 2 );++$i;?>
					<option value="<?php echo $role['id']; ?>" <?php if(isset($msg['role_id']) && ($role['id'] == $msg['role_id'])): ?>selected="selected"<?php endif; ?>><?php echo $role['name']; ?></option>
				    <?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
				</span> </div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-2">备注：</label>
			<div class="formControls col-xs-9 col-sm-10">
				<textarea name="remark" cols="" rows="" class="textarea"  placeholder="说点什么...100个字符以内" dragonfly="true" onKeyUp="textarealength(this,100)"><?php echo !empty($msg['remark'])?$msg['remark']:''; ?></textarea>
				<p class="textarea-numberbar"><em class="textarea-length">0</em>/100</p>
			</div>
		</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
			<input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
			<a href="javascript:" class="btn btn-default radius"  onclick="layer_close()"> 取消</a>
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
			real_name:{
				required:true,
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
				required:'用户名必填'
			},
			password:{
				required:'密码必填'
			},
			password2:{
				required:'密码必须一致'
			},
			password2:{
				required:'姓名必填'
			},
			sex:{
				required:'性别必选'
			},
			role_id:{
				required:'角色必选'
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


       $(document).ready(function(){
           check();
       });
       function check(){
           $('#username').blur(function(){
               var a=$(this).val();
               var changUrl="<?php echo url('admin/admin/namecheck'); ?>";
               $.post(changUrl,{username:a},function(str){
                   if(str=='1'){
                       $('#uname').append("<label id=\"username-error\" class=\"error\" for=\"username\">您输入的用户名已存在，请重新输入</label>");
                   }
               });
           });
       }

</script>



    </body>
</html>




