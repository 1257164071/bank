<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:46:"F:\www\bank.cn/app/admin\view\basemsg\add.html";i:1508033539;s:39:"F:\www\bank.cn/app/admin\view\base.html";i:1507780640;}*/ ?>
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

    
<style type="text/css">
.gridlist{border:1px solid #3bb4f2;border-top:0;border-bottom:0;width:228px;}
.gridarea{height:28px;line-height:25px;border-bottom:1px solid #3bb4f2;padding-left:10px;}

</style>
<article class="cl pd-20">
    <form action="" method="post" class="form form-horizontal" id="form-member-add">
        <input type="hidden" name="client_id" value="<?php echo (isset($client_id) && ($client_id !== '')?$client_id:''); ?>" >
        <input type="hidden" name="id" value="<?php echo (isset($base['id']) && ($base['id'] !== '')?$base['id']:''); ?>" >
 
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">婚姻状况：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <span class="select-box">
                    <select class="select" name="marriage_status">
                        <option value="">选择婚姻状况</option>
                        <option <?php if(isset($base['marriage_status'])&&($base['marriage_status'] == 0)): ?>selected="selected"<?php endif; ?> value="0">未婚</option>
                        <option <?php if(isset($base['marriage_status'])&&($base['marriage_status'] == 1)): ?>selected="selected"<?php endif; ?> value="1">已婚</option>
                        <option <?php if(isset($base['marriage_status'])&&($base['marriage_status'] == 2)): ?>selected="selected"<?php endif; ?> value="2">离异</option>
                    </select>
                </span>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">结婚证登记日期：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" onfocus="WdatePicker()" value="<?php echo (isset($base['married_record_date']) && ($base['married_record_date'] !== '')?date('Y-m-d',$base['married_record_date']):''); ?>"  name="married_record_date"class="input-text Wdate" >
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">有无子女：</label>
            <div class="formControls col-xs-8 col-sm-9 skin-minimal">
                <div class="radio-box">
                    <input name="children" type="radio"  value="1" id="children-1" checked >
                    <label for="children-1">有</label>
                </div>
                <div class="radio-box">
                    <input type="radio" id="children-2" value="0" name="children" <?php echo (isset($base['children']) && ($base['children'] == '0')?'checked':''); ?>>
                    <label for="children-2">无</label>
                </div>

            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">是否涉农：</label>
            <div class="formControls col-xs-8 col-sm-9 skin-minimal">
                <div class="radio-box">
                    <input name="is_farmer" type="radio" value="0" id="farmer-1" checked >
                    <label for="farmer-1">否</label>
                </div>
                <div class="radio-box">
                    <input type="radio" id="farmer-2" value="1" name="is_farmer"<?php echo (isset($base['is_farmer']) && ($base['is_farmer'] == '1')?'checked':''); ?> >
                    <label for="farmer-2">是</label>
                </div>

            </div>
        </div>
        
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>行政区划（省）：</label>
            <div class="formControls col-xs-8 col-sm-9">
                  <select name="province" id="province" class="select" style="height:32px;">
                     <?php if(isset($province)): ?>
                     <option value="<?php echo $province['code']; ?>" selected="selected"><?php echo $province['name']; ?></option>
                     <?php endif; ?>
	                 <?php echo get_province(); ?>
	              </select>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>行政区划（市）：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <select name="city" id="city" class="select" style="height:32px;">
                    <?php if(isset($city)): ?>
                    <option value="<?php echo $city['code']; ?>" selected="selected"><?php echo $city['name']; ?></option>
                    <?php endif; ?>
                    <option value="">==请选择==</option>
                </select>
              
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>行政区划（区）：</label>
            <div class="formControls col-xs-8 col-sm-9">
                  <select name="area" id="area" class="select" style="height:32px;">
	                    <?php if(isset($area)): ?>
	                    <option value="<?php echo $area['code']; ?>" selected="selected"><?php echo $area['name']; ?></option>
	                    <?php endif; ?>
	                  <option value="">==请选择==</option>
	              </select>
            </div>
        </div>
         <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>小区/村镇：</label>
            <div class="formControls col-xs-8 col-sm-9">
             <input type="text" class="input-text" style="width:230px" placeholder="输入小区" value="" name="search" id="grid">
             <a class="btn btn-primary radius"  onclick="grid()">搜索</a>
             <a class="btn btn-primary radius"  onclick="gridadd()">新增</a>
             <div id="gridlist" class="gridlist">
              <?php if(isset($gridnow) && !empty($gridnow)): ?>
                <div class="gridarea"><input name="grid" value="<?php echo $gridnow['id']; ?>" type="radio" checked="checked"><?php echo $gridnow['name']; ?></div>
              <?php endif; ?>
             </div>
            </div>
        </div>
         <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>户号：</label>
            <div class="formControls col-xs-8 col-sm-9">
	             <input type="text" class="input-text" style="width:50px" placeholder="" value="<?php echo (isset($hs['lou']) && ($hs['lou'] !== '')?$hs['lou']:''); ?>" name="lou" id="">号楼&nbsp;&nbsp;
	             <select name="danyuan">
	                <option value="0" <?php if(isset($hs['danyuan']) && $hs['danyuan'] == 0): ?>selected="selected"<?php endif; ?>>选择</option>
	             	<option value="1" <?php if(isset($hs['danyuan']) && $hs['danyuan'] == 1): ?>selected="selected"<?php endif; ?>>1单元</option>
	             	<option value="2" <?php if(isset($hs['danyuan']) && $hs['danyuan'] == 2): ?>selected="selected"<?php endif; ?>>2单元</option>
	             	<option value="3" <?php if(isset($hs['danyuan']) && $hs['danyuan'] == 3): ?>selected="selected"<?php endif; ?>>3单元</option>
	             	<option value="4" <?php if(isset($hs['danyuan']) && $hs['danyuan'] == 4): ?>selected="selected"<?php endif; ?>>4单元</option>
	             	<option value="5" <?php if(isset($hs['danyuan']) && $hs['danyuan'] == 5): ?>selected="selected"<?php endif; ?>>5单元</option>
	             	<option value="6" <?php if(isset($hs['danyuan']) && $hs['danyuan'] == 6): ?>selected="selected"<?php endif; ?>>6单元</option>
	             </select> 单元   &nbsp;&nbsp;
	             <input type="text" class="input-text" style="width:50px" placeholder="" value="<?php echo (isset($hs['hu']) && ($hs['hu'] !== '')?$hs['hu']:''); ?>" name="hu" id=""> 户号(例如：301)    &nbsp;&nbsp;
	               <select name="huxing">
                       <option value="1" <?php if(isset($base['huxing'])&&($base['huxing'] == 1)): ?>selected="selected"<?php endif; ?>>1户</option>
	                   <option value="2" <?php if(isset($base['huxing'])&&($base['huxing'] == 2)): ?>selected="selected"<?php endif; ?>>2户</option>
	                   <option value="3" <?php if(isset($base['huxing'])&&($base['huxing'] == 3)): ?>selected="selected"<?php endif; if(!isset($base['huxing']) || empty($base['huxing'])): ?>selected="selected"<?php endif; ?>>3户</option>
	                   <option value="4" <?php if(isset($base['huxing'])&&($base['huxing'] == 4)): ?>selected="selected"<?php endif; ?>>4户</option>
	                   <option value="5" <?php if(isset($base['huxing'])&&($base['huxing'] == 5)): ?>selected="selected"<?php endif; ?>>5户</option>
	                   <option value="6" <?php if(isset($base['huxing'])&&($base['huxing'] == 6)): ?>selected="selected"<?php endif; ?>>6户</option>
	                   <option value="7" <?php if(isset($base['huxing'])&&($base['huxing'] == 7)): ?>selected="selected"<?php endif; ?>>7户</option>
	                   <option value="8" <?php if(isset($base['huxing'])&&($base['huxing'] == 8)): ?>selected="selected"<?php endif; ?>>8户</option>
	                   <option value="9" <?php if(isset($base['huxing'])&&($base['huxing'] == 9)): ?>selected="selected"<?php endif; ?>>9户</option>
	                   <option value="10" <?php if(isset($base['huxing'])&&($base['huxing'] == 10)): ?>selected="selected"<?php endif; ?>>10户</option>
	                   <option value="15" <?php if(isset($base['huxing'])&&($base['huxing'] == 15)): ?>selected="selected"<?php endif; ?>>15户</option>
	                   <option value="20" <?php if(isset($base['huxing'])&&($base['huxing'] == 20)): ?>selected="selected"<?php endif; ?>>20户</option>
	                   <option value="25" <?php if(isset($base['huxing'])&&($base['huxing'] == 25)): ?>selected="selected"<?php endif; ?>>25户</option>
	                   <option value="30" <?php if(isset($base['huxing'])&&($base['huxing'] == 30)): ?>selected="selected"<?php endif; ?>>30户</option>
	                   <option value="50" <?php if(isset($base['huxing'])&&($base['huxing'] == 50)): ?>selected="selected"<?php endif; ?>>50户</option>
	              </select>
	                                   户/ 每层
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">现住地址：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($base['current_address']) && ($base['current_address'] !== '')?$base['current_address']:''); ?>" placeholder="现住地址"  name="current_address">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">现住址邮编：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($base['current_postcode']) && ($base['current_postcode'] !== '')?$base['current_postcode']:''); ?>" placeholder="现住址邮编"  name="current_postcode">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">通讯地址：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($base['corresponding_address']) && ($base['corresponding_address'] !== '')?$base['corresponding_address']:''); ?>" placeholder="通讯地址"  name="corresponding_address">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">通讯邮编：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($base['corresponding_postcode']) && ($base['corresponding_postcode'] !== '')?$base['corresponding_postcode']:''); ?>" placeholder="通讯邮编"  name="corresponding_postcode">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">最高学位：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <span class="select-box">
                    <select class="select" name="highest_degree">
                        <option value="">选择学位</option>
                        <option <?php if(isset($base['highest_degree'])&&($base['highest_degree'] == 0)): ?>selected="selected"<?php endif; ?> value="0">无</option>
                        <option <?php if(isset($base['highest_degree'])&&($base['highest_degree'] == 1)): ?>selected="selected"<?php endif; ?> value="1">学士学位</option>
                        <option <?php if(isset($base['highest_degree'])&&($base['highest_degree'] == 2)): ?>selected="selected"<?php endif; ?> value="2">硕士学位</option>
                        <option <?php if(isset($base['highest_degree'])&&($base['highest_degree'] == 3)): ?>selected="selected"<?php endif; ?> value="3">博士学位</option>
                    </select>
                </span>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">最高学历：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <span class="select-box">
                    <select class="select" name="highest_education">
                        <option value="">选择学历</option>
                        <option <?php if(isset($base['marriage_status'])&&($base['marriage_status'] == 0)): ?>selected="selected"<?php endif; ?> value="0">初中水平</option>
                        <option <?php if(isset($base['marriage_status'])&&($base['marriage_status'] == 1)): ?>selected="selected"<?php endif; ?> value="1">高中水平</option>
                        <option <?php if(isset($base['marriage_status'])&&($base['marriage_status'] == 2)): ?>selected="selected"<?php endif; ?> value="2">大专</option>
                        <option <?php if(isset($base['marriage_status'])&&($base['marriage_status'] == 3)): ?>selected="selected"<?php endif; ?> value="3">本科</option>
                        <option <?php if(isset($base['marriage_status'])&&($base['marriage_status'] == 4)): ?>selected="selected"<?php endif; ?> value="4">硕士</option>
                        <option <?php if(isset($base['marriage_status'])&&($base['marriage_status'] == 5)): ?>selected="selected"<?php endif; ?> value="5">博士</option>
                    </select>
                </span>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">行业：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($base['industry_category']) && ($base['industry_category'] !== '')?$base['industry_category']:''); ?>" placeholder="行业分类"  name="industry_category">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">居住状况：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($base['live_status']) && ($base['live_status'] !== '')?$base['live_status']:''); ?>" placeholder="居住状况"  name="live_status">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">是否扶贫户：</label>
            <div class="formControls col-xs-8 col-sm-9 skin-minimal">
                <div class="radio-box">
                    <input name="is_poor" type="radio"  value="1" id="is_poor-1" checked>
                    <label for="is_poor-1">是</label>
                </div>
                <div class="radio-box">
                    <input type="radio" id="is_poor-2" value="0" name="is_poor" <?php echo (isset($base['is_poor']) && ($base['is_poor'] == '0')?'checked':''); ?> >
                    <label for="is_poor-2">否</label>
                </div>

            </div>
        </div>
         <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">工作单位：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($base['workunit']) && ($base['workunit'] !== '')?$base['workunit']:''); ?>" placeholder="居住状况"  name="workunit">
            </div>
        </div>
        <div class="row cl">
            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                <?php if(isset($base)&&$base!=''): ?>
                <a class="btn btn-primary radius"  onclick="edit()"> 提交</a>
                <?php else: ?>
                <a class="btn btn-primary radius"  onclick="add()"> 提交</a>
                <?php endif; ?>
                <!--<input class="btn btn-primary radius" onclick="submit()" type="button" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">-->
            </div>
        </div>
    </form>
</article>



<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/static/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/static/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
<script type="text/javascript" src="/static/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="/static/lib/jquery.validation/1.14.0/messages_zh.js"></script>
<script type="text/javascript" src="http://webapi.amap.com/maps?v=1.3&key=33b529efc5e27ef1eb1f674704afd789"></script>
<script type="text/javascript">

$("#province").change(function () {
    $("#area option").remove();
    $("#area").append('<option value="">==请选择==</option>');
    setRegion(this,"city"); });
$("#city").change(function () {  setRegion(this,"area"); });

function setRegion(parent,child){
    $.post('/admin/index/region', {region_id:$(parent).val()},
            function(data){
                $("#"+child).html(data);
            },
            "JSON");
}

    $(function(){
        $('.skin-minimal input').iCheck({
            checkboxClass: 'icheckbox-blue',
            radioClass: 'iradio-blue',
            increaseArea: '20%'
        });


    });

    function add(){
        $.ajax({
            url:'<?php echo url("basemsg/add"); ?>',
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
    function edit(){
        $.ajax({
            url:'<?php echo url("basemsg/edit"); ?>',
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

    function grid(){
         var grid = $('#grid').val();
         var changUrl="<?php echo url('admin/index/checkgrid'); ?>";  
         $.post(changUrl,{grid:grid},function(data){
             $("#gridlist").html(data);
         },"json");
    }
    

    function gridadd(){
         var grid = $('#grid').val();
         var changUrl="<?php echo url('admin/dataconfig/gridadd'); ?>";  
         $.ajax({
   		  url:'<?php echo url("admin/dataconfig/gridadd"); ?>',
   		  type:'post',
   		  data:{name:grid},
   		  success:function(data){
   			  if(data.code==0){
   				  layer.msg(data.msg);
   			  }else{
   				  layer.msg(data.msg);
   			  }
   		  }
   	  });
    }

</script>



    </body>
</html>




