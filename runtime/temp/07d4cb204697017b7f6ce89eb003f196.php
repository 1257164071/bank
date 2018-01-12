<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:57:"F:\www\bank.cn/app/admin\view\incredit\guarantorlist.html";i:1504417571;s:39:"F:\www\bank.cn/app/admin\view\base.html";i:1497005003;}*/ ?>
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
				<span class="l">  <?php if(count($msglist) < 7){ ?><a href="javascript:;" onclick="admin_add('添加担保人','<?php echo url('admin/incredit/guarantoradd',array('client_id'=>$client_id,'loan_id'=>$loan_id)); ?>','','560')" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加担保人</a><?php }else{ ?>至多可以添加6个担保人<?php } ?> </span>
				<span class="r">共有：<strong><?php echo count($msglist);?></strong> 个</span>
			</div>
			<div class="mt-20">
			<table class="table table-border table-bordered table-hover table-bg table-sort">
				<thead>
					<tr>
						<th scope="col" colspan="9">担保人列表</th>
					</tr>
					<tr class="text-c">
					    <th style="display:none;"></th>
						<th>姓名</th>
						<th>性别</th>
						<th>身份关系</th>
						<th>身份证号</th>
						<th>单位</th>
						<th>地址</th>
						<th>优先赔偿</th>
						<th>还款意愿</th>
						<th>操作</th>
					</tr>
				</thead>
				<tbody>
				    <?php if(is_array($msglist) || $msglist instanceof \think\Collection || $msglist instanceof \think\Paginator): $i = 0; $__LIST__ = $msglist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$msg): $mod = ($i % 2 );++$i;?>
					<tr class="text-c">
						<td style="display:none;"><input type="checkbox" name="id[]" value="<?php echo $msg['id']; ?>"></td>
						<td><?php echo $msg['real_name']; ?></td>
						<td><?php if($msg['sex'] == 1): ?>男<?php else: ?>女<?php endif; ?></td>
						<td><?php echo $msg['relation']; ?></td>
						<td><?php echo $msg['card']; ?></td>
						<td><?php echo $msg['workunit']; ?></td>
						<td><?php echo $msg['address']; ?></td>
						<td><?php if($msg['rightfirst'] == 1): ?><span class="c-red">优先</span><?php else: ?>否<?php endif; ?></td>
						<td><?php if($msg['returnwant'] == 1): ?><span class="c-red">有</span><?php endif; ?></td>
						<!-- 
						<td><?php echo (isset($msg['fund']) && ($msg['fund'] !== '')?$msg['fund']:"—"); ?><br/><?php if(isset($msg['fund_ck_date']) && $msg['fund_ck_date'] != '0'): ?><span class="c-red">[查控中：<?php echo date("Y-m-d",$msg['fund_ck_date']); ?>]</span><?php endif; ?></td>
						<td><?php echo (isset($msg['house']) && ($msg['house'] !== '')?$msg['house']:"—"); ?><br/><?php if(isset($msg['house_ck_date']) && $msg['house_ck_date'] != '0'): ?><span class="c-red">[查控中：<?php echo date("Y-m-d",$msg['house_ck_date']); ?>]</span><?php endif; ?></td>
						<td><?php echo (isset($msg['car']) && ($msg['car'] !== '')?$msg['car']:"—"); ?><br/><?php if(isset($msg['car_ck_date']) && $msg['car_ck_date'] != '0'): ?><span class="c-red">[查控中：<?php echo date("Y-m-d",$msg['car_ck_date']); ?>]</span><?php endif; ?></td>
						<td><?php echo (isset($msg['land']) && ($msg['land'] !== '')?$msg['land']:"—"); ?><br/><?php if(isset($msg['land_ck_date']) && $msg['land_ck_date'] != '0'): ?><span class="c-red">[查控中：<?php echo date("Y-m-d",$msg['land_ck_date']); ?>]</span><?php endif; ?></td>
						<td><?php echo (isset($msg['company']) && ($msg['company'] !== '')?$msg['company']:"—"); ?><br/><?php if(isset($msg['company_ck_date']) && $msg['company_ck_date'] != '0'): ?><span class="c-red">[查控中：<?php echo date("Y-m-d",$msg['company_ck_date']); ?>]</span><?php endif; ?></td>
						 -->
						<td class="td-status">
						<a title="编辑" href="javascript:;" onclick="admin_edit('管理员编辑','<?php echo url('admin/incredit/guarantoredit',array('id'=>$msg['id'])); ?>','1','800','500')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i> 编辑</a>
						<a title="删除" href="javascript:;" onclick="msg_del(this,'<?php echo $msg['id']; ?>')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i> 删除</a>
						</td>
					</tr>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</tbody>
			</table>
			</div>
		</article>




<!--请在下方写此页面业务相关的脚本--> 

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
			url: '<?php echo url('admin/incredit/guarantordel'); ?>',
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
</script>



    </body>
</html>




