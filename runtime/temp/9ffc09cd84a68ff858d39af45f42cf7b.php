<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:58:"F:\www\bank.cn/app/admin\view\incredit\backrecordlist.html";i:1499147402;s:39:"F:\www\bank.cn/app/admin\view\base.html";i:1497005003;}*/ ?>
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
		<!-- 
			<div class="text-c"> 日期范围：
				<input type="text" onfocus="" id="datemin" class="input-text Wdate" style="width:120px;">
				-
				<input type="text" onfocus="" id="datemax" class="input-text Wdate" style="width:120px;">
				<input type="text" class="input-text" style="width:250px" placeholder="输入管理员名称" id="" name="">
				<button type="submit" class="btn btn-success" id="" name=""><i class="Hui-iconfont">&#xe665;</i> 搜用户</button>
			</div> -->
			<div class="cl pd-5 bg-1 bk-gray">
				<span class="l">  <a href="javascript:;" onclick="admin_add('添加清收记录','<?php echo url('admin/incredit/backrecordadd',array('loan_id'=>$loan_id)); ?>','','580')" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加清收记录</a> </span>
				<span class="r">共有：<strong><?php echo count($msglist);?></strong> 个</span>
			</div>
			<div class="mt-20">
			<table class="table table-border table-bordered table-hover table-bg table-sort">
				<thead>
					<tr>
						<th scope="col" colspan="9">清收列表</th>
					</tr>
					<tr class="text-c">
					    <th width="25" style="display:none;"></th>
						<th width="160">清收时间</th>
						<th width="">清收处置进度</th>
						<th width="140">调查人</th>
						<th width="150">录入时间</th>
						<th width="160">操作</th>
					</tr>
				</thead>
				<tbody>
				    <?php if(is_array($msglist) || $msglist instanceof \think\Collection || $msglist instanceof \think\Paginator): $i = 0; $__LIST__ = $msglist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$msg): $mod = ($i % 2 );++$i;?>
					<tr class="text-c">
						<td style="display:none;"><input type="checkbox" name="id[]" value="<?php echo $msg['id']; ?>"></td>
						<td><?php echo date("Y-m-d",$msg['back_time']); ?></td>
						<td><?php echo $msg['process']; ?></td>
						<td><?php echo $msg['back_name']; ?></td>
						<td><?php echo date("Y-m-d",$msg['addtime']); ?></td>
						<td class="td-status">
						<a title="编辑" href="javascript:;" onclick="admin_edit('编辑','<?php echo url('admin/incredit/backrecordedit',array('id'=>$msg['id'])); ?>','1','800','500')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i> 编辑</a>
						<a title="删除" href="javascript:;" onclick="msg_del(this,'<?php echo $msg['id']; ?>')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i> 删除</a>
						</td>
					</tr>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</tbody>
			</table>
			</div>
			
			<h4>清收建议</h4>
		<form action="" method="post" class="form form-horizontal" id="form-admin-add">
	    <input type="hidden" name="id" value="<?php echo $loan_id; ?>" >
	    <div class="row cl">
			<label class="form-label col-xs-3 col-sm-3">诉讼状态：</label>
			<div class="formControls col-xs-8 col-sm-9 ">
				<div class="radio-box">
					<input type="radio" name="ss_status"  <?php if(!isset($msg['ss_status'])): ?>checked="checked"<?php else: if($msg['ss_status'] == 1): ?>checked="checked"<?php endif; endif; ?> value="1">
					<label for="sex-1">未诉</label>
				</div>
				<div class="radio-box">
					<input type="radio" name="ss_status" <?php if(!isset($loan['ss_status'])): else: if($loan['ss_status'] == 2): ?>checked="checked"<?php endif; endif; ?> value="2">
					<label for="sex-2">审理</label>
				</div>
				<div class="radio-box">
					<input type="radio" name="ss_status" <?php if(!isset($loan['ss_status'])): else: if($loan['ss_status'] == 3): ?>checked="checked"<?php endif; endif; ?> value="3">
					<label for="sex-2">判决</label>
				</div>
				<div class="radio-box">
					<input type="radio" name="ss_status" <?php if(!isset($loan['ss_status'])): else: if($loan['ss_status'] == 4): ?>checked="checked"<?php endif; endif; ?> value="4">
					<label for="sex-2">执行</label>
				</div>
				<div class="radio-box">
					<input type="radio" name="ss_status" <?php if(!isset($loan['ss_status'])): else: if($loan['ss_status'] == 5): ?>checked="checked"<?php endif; endif; ?> value="5">
					<label for="sex-2">上诉</label>
				</div>
				<div class="radio-box">
					<input type="radio" name="ss_status" <?php if(!isset($loan['ss_status'])): else: if($loan['ss_status'] == 6): ?>checked="checked"<?php endif; endif; ?> value="6">
					<label for="sex-2">再审</label>
				</div>
				<div class="radio-box">
					<input type="radio" name="ss_status" <?php if(!isset($loan['ss_status'])): else: if($loan['ss_status'] == 7): ?>checked="checked"<?php endif; endif; ?> value="6">
					<label for="sex-2">结案</label>
				</div>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-3">诉讼案号：</label>
			<div class="formControls col-xs-8 col-sm-9 ">
				<input type="text" class="input-text" value="<?php echo !empty($loan['ss_num'])?$loan['ss_num']:''; ?>" placeholder="" id="ss_num" name="ss_num">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-3">执行案号：</label>
			<div class="formControls col-xs-8 col-sm-9 ">
				<input type="text" class="input-text" value="<?php echo !empty($loan['ss_zx_num'])?$loan['ss_zx_num']:''; ?>" placeholder="" id="ss_zx_num" name="ss_zx_num">
			</div>
		</div>
        <div class="row cl">
			<label class="form-label col-xs-3 col-sm-3">其他说明：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<textarea name="qs_description" cols="" rows="" class="textarea"  placeholder="说点什么...100个字符以内" dragonfly="true" onKeyUp="textarealength(this,100)"><?php echo !empty($loan['qs_description'])?$loan['qs_description']:''; ?></textarea>
				<p class="textarea-numberbar"><em class="textarea-length">0</em>/100</p>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-3">分类结果：</label>
			<div class="formControls col-xs-8 col-sm-9 ">
				<input type="text" class="input-text" value="<?php echo !empty($loan['qs_classjg'])?$loan['qs_classjg']:''; ?>" placeholder="" id="qs_classjg" name="qs_classjg">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-3">拟清收处置措施：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<textarea name="qs_jgjy" cols="" rows="" class="textarea"  placeholder="说点什么...100个字符以内" dragonfly="true" onKeyUp="textarealength(this,100)"><?php echo !empty($loan['qs_jgjy'])?$loan['qs_jgjy']:''; ?></textarea>
				<p class="textarea-numberbar"><em class="textarea-length">0</em>/100</p>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-3">调查人签字：</label>
			<div class="formControls col-xs-8 col-sm-9 ">
				<input type="text" class="input-text" value="<?php echo !empty($loan['qs_sign'])?$loan['qs_sign']:''; ?>" placeholder="" id="qs_sign" name="qs_sign">
			</div>
		</div>
		
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-3">签字日期：</label>
			<div class="formControls col-xs-8 col-sm-9">
				  <input type="text" onfocus="WdatePicker()" value="<?php if(isset($loan['qs_sign_date']) && ($loan['qs_sign_date'] != 0)): ?><?php echo date("Y-m-d",$loan['qs_sign_date']); endif; ?>"  name="qs_sign_date" class="input-text Wdate" >
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
<script type="text/javascript" src="/static/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/static/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">

function admin_add(title,url,w,h){
	layer_show(title,url,w,h);
}
/*删除*/
function msg_del(obj,id){
	layer.confirm('删除须谨慎，确认要删除吗？',function(index){
		$.ajax({
			type: 'POST',
			url: '<?php echo url('admin/incredit/backrecorddel'); ?>',
			dataType: 'json',
			data:'id='+id,
			success: function(data){
				if(data.code==0){
					$(obj).parents("tr").remove();
					layer.msg('已删除!',{icon:1,time:1000});
					//window.location.href = '<?php echo url('admin/admin/adminlists'); ?>';
				}else{
					layer.msg(data.msg);
				}
			},
			error:function(data) {
				console.log(data.msg);
			},
		});		
	});
}
/*管理员-编辑*/
function admin_edit(title,url,id,w,h){
	layer_show(title,url,w,h);
}
/*管理员-停用*/
function admin_stop(obj,id){
	layer.confirm('确认要停用吗？',function(index){
		//此处请求后台程序，下方是成功后的前台处理……
		
		$(obj).parents("tr").find(".td-manage").prepend('<a onClick="admin_start(this,id)" href="javascript:;" title="启用" style="text-decoration:none"><i class="Hui-iconfont">&#xe615;</i></a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-default radius">已禁用</span>');
		$(obj).remove();
		layer.msg('已停用!',{icon: 5,time:1000});
	});
}

/*管理员-启用*/
function admin_start(obj,id){
	layer.confirm('确认要启用吗？',function(index){
		//此处请求后台程序，下方是成功后的前台处理……
		
		$(obj).parents("tr").find(".td-manage").prepend('<a onClick="admin_stop(this,id)" href="javascript:;" title="停用" style="text-decoration:none"><i class="Hui-iconfont">&#xe631;</i></a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已启用</span>');
		$(obj).remove();
		layer.msg('已启用!', {icon: 6,time:1000});
	});
}

$("#form-admin-add").validate({
	rules:{
		username:{
			required:true,
			minlength:4,
			maxlength:16
		}
	},
	messages:{
		username:{
			required:'用户名不能为空'
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
</script>



    </body>
</html>




