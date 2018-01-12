<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:58:"D:\Xampps\htdocs\bank/app/admin\view\client\clientadd.html";i:1500019518;s:46:"D:\Xampps\htdocs\bank/app/admin\view\base.html";i:1497005003;}*/ ?>
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

    
<link href="/static/lib/webuploader/0.1.5/webuploader.css" rel="stylesheet" type="text/css" />
<article class="cl pd-20">
	<form action="" method="post" class="form form-horizontal" id="form_client_add">
		<input type="hidden" name="id" value="<?php echo (isset($client['id']) && ($client['id'] !== '')?$client['id']:''); ?>" >
		<input type="hidden" name="lng" id="getLng" value="<?php echo (isset($client['lng']) && ($client['lng'] !== '')?$client['lng']:''); ?>" >
		<input type="hidden" name="lat" id="getLat" value="<?php echo (isset($client['lat']) && ($client['lat'] !== '')?$client['lat']:''); ?>">

		<div class="row cl">
			<label class="form-label col-xs-2 col-sm-2"><span class="c-red">*</span>客户名称：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo (isset($client['name']) && ($client['name'] !== '')?$client['name']:''); ?>" placeholder="客户名称"  name="name">
			</div>
		</div>


		<div class="row cl">
			<label class="form-label col-xs-2 col-sm-2"><span class="c-red">*</span>性别：</label>
			<div class="formControls col-xs-8 col-sm-9 skin-minimal">
				<div class="radio-box">
					<input name="sex" type="radio"  value="1" id="sex-1" checked >
					<label for="sex-1">男</label>
				</div>
				<div class="radio-box">
					<input type="radio" id="sex-2" value="0" name="sex" <?php echo (isset($client['sex']) && ($client['sex'] == '0')?'checked':''); ?>>
					<label for="sex-2">女</label>
				</div>

			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-2 col-sm-2"><span class="c-red">*</span>客户类型：</label>
			<div class="formControls col-xs-8 col-sm-9 skin-minimal">
				<div class="radio-box">
					<input name="type" type="radio" value="0" id="type-1" checked >
					<label for="type-1">农村</label>
				</div>
				<div class="radio-box">
					<input type="radio" id="type-2" value="1" name="type"<?php echo (isset($client['type']) && ($client['type'] == '1')?'checked':''); ?> >
					<label for="type-2">城市</label>
				</div>

			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-2 col-sm-2"><span class="c-red">*</span>证件类型：</label>
			<div class="formControls col-xs-8 col-sm-9 skin-minimal">
				<div class="radio-box">
					<input name="card_type" type="radio"value="0"  id="card_type-1" checked  >
					<label for="card_type-1">身份证</label>
				</div>
				<!--<div class="radio-box">-->
					<!--<input type="radio" id="card_type-2" value="1" name="card_type" <?php echo (isset($client['card_type']) && ($client['card_type'] == '1')?'checked':''); ?> >-->
					<!--<label for="card_type-2" value="0">其他</label>-->
				<!--</div>-->

			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-2 col-sm-2"><span class="c-red">*</span>证件号码：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo (isset($client['card_number']) && ($client['card_number'] !== '')?$client['card_number']:''); ?>" placeholder="证件号码"  name="card_number">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-2 col-sm-2"><span class="c-red">*</span>民族：</label>
			<div class="formControls col-xs-8 col-sm-9 skin-minimal">
				<div class="radio-box">
					<input name="nation_id" type="radio" value="1" id="nation-1" checked >
					<label for="nation-1">汉族</label>
				</div>
				<div class="radio-box">
					<input type="radio" id="nation-2" value="2" name="nation_id" <?php echo (isset($client['nation_id']) && ($client['nation_id'] == '2')?'checked':''); ?>>
					<label for="nation-2">少数民族</label>
				</div>

			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-2 col-sm-2"><span class="c-red">*</span>出生日期：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" onfocus="WdatePicker()" value="<?php echo (isset($client['born_date']) && ($client['born_date'] !== '')?date('Y-m-d',$client['born_date']):''); ?>"  name="born_date"class="input-text Wdate" >
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-2 col-sm-2"><span class="c-red">*</span>住址：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo (isset($client['address']) && ($client['address'] !== '')?$client['address']:''); ?>" placeholder="住址"  name="address">
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-2 col-sm-2"><span class="c-red">*</span>身份证有效期：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" onfocus="WdatePicker()"value="<?php echo (isset($client['valid_time']) && ($client['valid_time'] !== '')?date('Y-m-d',$client['valid_time']):''); ?>"  name="valid_time"class="input-text Wdate" >
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-2 col-sm-2"><span class="c-red">*</span>签发机关：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo (isset($client['issue_office']) && ($client['issue_office'] !== '')?$client['issue_office']:''); ?>" placeholder="签发机关"  name="issue_office">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-2 col-sm-2">关系人：</label>
			<div class="formControls col-xs-8 col-sm-9 skin-minimal">
				<div class="radio-box">
					<input name="relation_poeple" type="radio"  value="1" id="relation_people-1" checked>
					<label for="relation_people-1">是</label>
				</div>
				<div class="radio-box">
					<input type="radio" id="relation_people-2" value="0" name="relation_poeple" <?php echo (isset($client['relation_poeple']) && ($client['relation_poeple'] == '0')?'checked':''); ?> >
					<label for="relation_people-2">否</label>
				</div>

			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-2 col-sm-2">客户经理：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<span class="select-box" >
					<select class="select" name="belong_user_id"  >
						<option value="">==请选择==</option>
						<?php if(is_array($manger) || $manger instanceof \think\Collection || $manger instanceof \think\Paginator): $i = 0; $__LIST__ = $manger;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$manger): $mod = ($i % 2 );++$i;?>
						<option  <?php echo (isset($client['belong_user_id'])&&($client['belong_user_id']==$manger['id']))? 'selected="sleected"':'';?>  value="<?php echo $manger['id']; ?>"><?php echo $manger['real_name']; ?></option>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</select>
				</span>
			</div>
		</div>
		<div class="row cl">
		<label class="form-label col-xs-2 col-sm-2">所属机构：</label>
			<div class="formControls col-xs-8 col-sm-9"> <span class="select-box" style="width:390px;">
				<select class="select" name="belong_organization" size="1">
					<option value="">==请选择==</option>
					<?php if(is_array($banklist) || $banklist instanceof \think\Collection || $banklist instanceof \think\Paginator): $i = 0; $__LIST__ = $banklist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$bank): $mod = ($i % 2 );++$i;?>
					<option value="<?php echo $bank['id']; ?>" <?php if(isset($client['belong_organization']) && ($bank['id'] == $client['belong_organization'])): ?>selected="selected"<?php endif; ?>><?php echo $bank['bankname']; ?></option>
					<?php if(is_array($bank['child']) || $bank['child'] instanceof \think\Collection || $bank['child'] instanceof \think\Paginator): $i = 0; $__LIST__ = $bank['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$b): $mod = ($i % 2 );++$i;?>
					<option value="<?php echo $b['id']; ?>" <?php if(isset($client['belong_organization']) && ($b['id'] == $client['belong_organization'])): ?>selected="selected"<?php endif; ?> style="padding-left:30px;">|—<?php echo $b['bankname']; ?></option>
					<?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
				</select>
				</span>
			</div>

	</div>
		<div id="mapContainer" style="width:99%;height: 400px;margin: 10px;"></div>



				<div class="row cl">
					<div class="col-xs-8 col-sm-6 col-xs-offset-4 col-sm-offset-3">
						<input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
						<a href="javascript:" class="btn btn-default radius ml-50"  onclick="layer_close()"> 取消</a>
					</div>
				</div>
					<!--<a class="btn btn-primary radius"  onclick="add()"> 提交</a>-->

				<!--<input class="btn btn-primary radius" onclick="submit()" type="button" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">-->

	</form>
</article>



<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/static/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/static/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
<script type="text/javascript" src="/static/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="/static/lib/jquery.validation/1.14.0/messages_zh.js"></script>
<script type="text/javascript" src="/static/lib/webuploader/0.1.5/webuploader.min.js"></script>
<script type="text/javascript">
$(function(){
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});
	$("#form_client_add").validate({
		rules:{
			name:{
				required:true
			},
			card_number:{
				required:true
			},
			born_date:{
				required:true
			},
			address:{
				required:true
			},
			valid_time:{
				required:true
			},
			issue_office:{
				required:true
			},
			belong_organization:{
				required:true
			},
			belong_user_id:{
				required:true
			}

		},
		messages:{
			name:{
				required:'客户名称不能为空并填写真实姓名'
			},
			card_number:{
				required:'证件号码不能为空'
			},
			belong_organization:{
				required:'请选择所属机构'
			},
			born_date:{
				required:'出身日期不能为空'
			},
			address:{
				required:'身份证地址不能为空'
			},
			valid_time:{
				required:'身份证有效期不能为空'
			},
			issue_office:{
				required:'签发机关不能为空'
			},
			belong_user_id:{
				required:'请选择客户经理'
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
	})
});









//  function add(){
//
//
//	  $.ajax({
//		  url:'<?php echo url("client/clientadd"); ?>',
//		  type:'post',
//		  data:$('form').serialize(),
//		  success:function (data) {
//			  if(data.code==0){
//				  layer.msg(data.msg);
//				  parent.location.reload();
//				  setTimeout("parent.layer.close(parent.layer.getFrameIndex(window.name))",2000);
//
//			  }else{
//				  layer.msg(data.msg);
//			  }
//		  }
//	  });
//  }
//function edit(){
//
//	$.ajax({
//		url:'<?php echo url("client/edit"); ?>',
//		type:'post',
//		data:$('form').serialize(),
//		success:function (data) {
//			if(data.code==0){
//				layer.msg(data.msg);
//				parent.location.reload();
//				setTimeout("parent.layer.close(parent.layer.getFrameIndex(window.name))",2000);
//
//			}else{
//				layer.msg(data.msg);
//			}
//		}
//	});

//}



</script>

<script type="text/javascript" src="/static/mapv2/baidumap_offline_v2_load.js"></script>
<script type="text/javascript" src="/static/mapv2/tools/AreaRestriction_min.js"></script>

<link rel="stylesheet" type="text/css" href="/static/mapv2/css/baidu_map_v2.css"/>
<script type="text/javascript">
    // 百度地图API功能
    var map = new BMap.Map("mapContainer", {minZoom:6,maxZoom:15});
    var point = new BMap.Point(118.356685,35.09566);
    var b = new BMap.Bounds(new BMap.Point(59.188676,5.0598),new BMap.Point(161.919181,57.893376));
    try {
        BMapLib.AreaRestriction.setBounds(map, b);
    } catch (e) {
        alert(e);
    }
    map.centerAndZoom(point, 13);
    //map.enableScrollWheelZoom(true);     //开启鼠标滚轮缩放
    map.addControl(new BMap.NavigationControl());   //缩放按钮

    // 编写自定义函数,创建标注
    function addMarker(point){
        map.clearOverlays();
        var marker = new BMap.Marker(point);
        map.addOverlay(marker);
    }
    // 向地图添加标注


    function showInfo(e){
        addMarker(new BMap.Point(e.point.lng, e.point.lat));
        document.getElementById("getLng").value = e.point.lng;
        document.getElementById("getLat").value = e.point.lat;
    }
    map.addEventListener("click", showInfo);

    var reslng = document.getElementById("getLng").value;
    var reslat = document.getElementById("getLat").value;
    if( reslng!= ''&& reslat != ''){
        var pt = new BMap.Point(reslng, reslat);
        addMarker(pt);
        map.panTo(pt);//移到中心

    }


</script>
<style>
	.BMap_cpyCtrl{display: none;}
</style>





    </body>
</html>




