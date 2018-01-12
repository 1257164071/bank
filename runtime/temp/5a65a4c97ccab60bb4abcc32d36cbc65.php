<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:63:"D:\xampps\htdocs\work\bank/app/admin\view\client\clientadd.html";i:1509610402;s:51:"D:\xampps\htdocs\work\bank/app/admin\view\base.html";i:1507780640;}*/ ?>
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
			<label class="form-label col-xs-2 col-sm-2">客户类型：</label>
			<div class="formControls col-xs-8 col-sm-9 skin-minimal">
				<!-- <div class="radio-box">
					<input name="type" type="radio" value="0" id="type-1" <?php if(isset($client['type']) && ($client['type'] == '0')): ?>checked<?php else: ?>checked<?php endif; ?>>
					<label for="type-1">农村</label>
				</div>
				<div class="radio-box">
					<input type="radio" id="type-2" value="1" name="type" <?php if(isset($client['type']) && ($client['type'] == '1')): ?>checked<?php endif; ?>>
					<label for="type-2">城市</label>
				</div> -->
                <span class="select-box" style="width: 150px;">
                <select class="select" name="type"  >
                    <option value="">客户类型</option>
                    <?php if(is_array($type) || $type instanceof \think\Collection || $type instanceof \think\Paginator): $key = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($key % 2 );++$key;?>
                    <option  <?php echo (isset($client['type'])&&($client['type']==$key-1))? 'selected="selected"':'';?>  value="<?php echo $key-1; ?>"><?php echo $list; ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
             </span>
			</div>
		</div>
		<input name="card_type" type="hidden"value="0"  id="card_type-1" checked  >
		<div class="row cl">
			<label class="form-label col-xs-2 col-sm-2"><span class="c-red">*</span>身份证号码：</label>
			<div class="formControls col-xs-8 col-sm-9" id="card">
				<input type="text" class="input-text" value="<?php echo (isset($client['card_number']) && ($client['card_number'] !== '')?$client['card_number']:''); ?>" placeholder="证件号码"  name="card_number" id="card_number">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-2 col-sm-2">民族：</label>
			<div class="formControls col-xs-8 col-sm-9 skin-minimal">
				<div class="radio-box">
					<input name="nation_id" type="radio" value="1" id="nation-1" <?php if(isset($client['nation_id']) && ($client['nation_id'] == '1')): ?>checked<?php else: ?>checked<?php endif; ?>>
					<label for="nation-1">汉族</label>
				</div>
				<div class="radio-box">
					<input type="radio" id="nation-2" value="2" name="nation_id" <?php if(isset($client['nation_id']) && ($client['nation_id'] == '2')): ?>checked<?php endif; ?>>
					<label for="nation-2">少数民族</label>
				</div>

			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-2 col-sm-2">出生日期：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" onfocus="WdatePicker()" value="<?php echo (isset($client['born_date']) && ($client['born_date'] !== '')?date('Y-m-d',$client['born_date']):''); ?>"  name="born_date"class="input-text Wdate" style="width:300px;">&nbsp;(例如：2017-01-01)
			</div>
		</div>
		<div class="row cl">
            <label class="form-label col-xs-2 col-sm-2">联系方式：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($client['tel_number']) && ($client['tel_number'] !== '')?$client['tel_number']:''); ?>" placeholder="联系方式（手机）"  name="tel_number">
            </div>
        </div>
		<div class="row cl">
			<label class="form-label col-xs-2 col-sm-2">住址：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo (isset($client['address']) && ($client['address'] !== '')?$client['address']:''); ?>" placeholder="住址"  name="address">
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-2 col-sm-2">身份证有效期：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" onfocus="WdatePicker()"value="<?php echo (isset($client['valid_time']) && ($client['valid_time'] !== '')?date('Y-m-d',$client['valid_time']):''); ?>"  name="valid_time"class="input-text Wdate" style="width:300px;">&nbsp;(例如：2017-01-01)
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-2 col-sm-2">签发机关：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo (isset($client['issue_office']) && ($client['issue_office'] !== '')?$client['issue_office']:''); ?>" placeholder="签发机关"  name="issue_office">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-2 col-sm-2">采集经理：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="radio" name="belong_user_id" value="<?php echo $user['id']; ?>" checked="checked"> <?php echo $user['real_name']; ?>
                <input type="hidden" name="belong_username" value="<?php echo $user['real_name']; ?>">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-2 col-sm-2">采集机构：</label>
			<div class="formControls col-xs-8 col-sm-9"> 
				<input type="radio" name="belong_organization" value="<?php echo $user['bank_id']; ?>" checked="checked"> <?php echo $user['bankname']; ?>
                <input type="hidden" name="bankname" value="<?php echo $user['bankname']; ?>">
			</div>
	    </div>
	      <div class="row cl">
            <label class="form-label col-xs-2 col-sm-2">婚姻状况：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <span class="select-box">
                    <select class="select" name="marriage_status">
                        <option value="" selected="selected">选择婚姻状况</option>
                        <option <?php if(isset($client['marriage_status'])&&($client['marriage_status'] == 1)): ?>selected="selected"<?php endif; ?> value="1">未婚</option>
                        <option <?php if(isset($client['marriage_status'])&&($client['marriage_status'] == 2)): ?>selected="selected"<?php endif; ?> value="2">已婚</option>
                        <option <?php if(isset($client['marriage_status'])&&($client['marriage_status'] == 3)): ?>selected="selected"<?php endif; ?> value="3">丧偶</option>
                        <option <?php if(isset($client['marriage_status'])&&($client['marriage_status'] == 4)): ?>selected="selected"<?php endif; ?> value="4">离婚</option>
                    </select>
                </span>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-2 col-sm-2">结婚证登记日期：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" onfocus="WdatePicker()" value="<?php echo (isset($client['married_record_date']) && ($client['married_record_date'] !== '')?date('Y-m-d',$client['married_record_date']):''); ?>"  name="married_record_date"class="input-text Wdate" style="width:300px;">&nbsp;(例如：2017-01-01)
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-2 col-sm-2">有无子女：</label>
            <div class="formControls col-xs-8 col-sm-9 skin-minimal">
                <div class="radio-box">
                    <input name="children" type="radio"  value="1" id="children-1" checked >
                    <label for="children-1">有</label>
                </div>
                <div class="radio-box">
                    <input type="radio" id="children-2" value="0" name="children" <?php echo (isset($client['children']) && ($client['children'] == '0')?'checked':''); ?>>
                    <label for="children-2">无</label>
                </div>

            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-2 col-sm-2">是否涉农：</label>
            <div class="formControls col-xs-8 col-sm-9 skin-minimal">
                <div class="radio-box">
                    <input name="is_farmer" type="radio" value="0" id="farmer-1" checked >
                    <label for="farmer-1">否</label>
                </div>
                <div class="radio-box">
                    <input type="radio" id="farmer-2" value="1" name="is_farmer"<?php echo (isset($client['is_farmer']) && ($client['is_farmer'] == '1')?'checked':''); ?> >
                    <label for="farmer-2">是</label>
                </div>

            </div>
        </div>
        
        <div class="row cl">
            <label class="form-label col-xs-2 col-sm-2">行政区划：</label>
            <div class="formControls col-xs-8 col-sm-9">
	            <input type="radio" name="province" value="370000" checked="checked"> 山东省
	            <input type="radio" name="city" value="371300" checked="checked"> 临沂市
	            <input type="radio" name="area" value="371311" checked="checked"> 罗庄区
            </div>
        </div>
         <div class="row cl">
            <label class="form-label col-xs-2 col-sm-2">小区/村镇：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <div class="gridarea"><input name="grid" value="<?php echo (isset($gridmsg['id']) && ($gridmsg['id'] !== '')?$gridmsg['id']:''); ?><?php echo (isset($client['grid']) && ($client['grid'] !== '')?$client['grid']:''); ?>" type="radio" checked="checked"><?php echo (isset($gridmsg['name']) && ($gridmsg['name'] !== '')?$gridmsg['name']:''); ?><?php echo (isset($client['gridname']) && ($client['gridname'] !== '')?$client['gridname']:''); ?></div>
            </div>
        </div>
         <div class="row cl">
            <label class="form-label col-xs-2 col-sm-2">户号：</label>
            <div class="formControls col-xs-8 col-sm-9">
	             <input type="text" class="input-text" style="width:50px" placeholder="" value="<?php echo (isset($client['lou']) && ($client['lou'] !== '')?$client['lou']:''); ?>" name="lou" id="">号楼&nbsp;&nbsp;
	             <select name="danyuan">
	                <option value="0" <?php if(isset($client['danyuan']) && $client['danyuan'] == 0): ?>selected="selected"<?php endif; ?>>选择</option>
	             	<option value="1" <?php if(isset($client['danyuan']) && $client['danyuan'] == 1): ?>selected="selected"<?php endif; ?>>1单元</option>
	             	<option value="2" <?php if(isset($client['danyuan']) && $client['danyuan'] == 2): ?>selected="selected"<?php endif; ?>>2单元</option>
	             	<option value="3" <?php if(isset($client['danyuan']) && $client['danyuan'] == 3): ?>selected="selected"<?php endif; ?>>3单元</option>
	             	<option value="4" <?php if(isset($client['danyuan']) && $client['danyuan'] == 4): ?>selected="selected"<?php endif; ?>>4单元</option>
	             	<option value="5" <?php if(isset($client['danyuan']) && $client['danyuan'] == 5): ?>selected="selected"<?php endif; ?>>5单元</option>
	             	<option value="6" <?php if(isset($client['danyuan']) && $client['danyuan'] == 6): ?>selected="selected"<?php endif; ?>>6单元</option>
	             </select> 单元   &nbsp;&nbsp;
	             <input type="text" class="input-text" style="width:50px" placeholder="" value="<?php echo (isset($client['hu']) && ($client['hu'] !== '')?$client['hu']:''); ?>" name="hu" id=""> 户号(例如：301)    &nbsp;&nbsp;
	               <select name="huxing">
                       <option value="1" <?php if(isset($client['huxing'])&&($client['huxing'] == 1)): ?>selected="selected"<?php endif; ?>>1户</option>
	                   <option value="2" <?php if(isset($client['huxing'])&&($client['huxing'] == 2)): ?>selected="selected"<?php endif; ?>>2户</option>
	                   <option value="3" <?php if(isset($client['huxing'])&&($client['huxing'] == 3)): ?>selected="selected"<?php endif; if(!isset($client['huxing']) || empty($client['huxing'])): ?>selected="selected"<?php endif; ?>>3户</option>
	                   <option value="4" <?php if(isset($client['huxing'])&&($client['huxing'] == 4)): ?>selected="selected"<?php endif; ?>>4户</option>
	                   <option value="5" <?php if(isset($client['huxing'])&&($client['huxing'] == 5)): ?>selected="selected"<?php endif; ?>>5户</option>
	                   <option value="6" <?php if(isset($client['huxing'])&&($client['huxing'] == 6)): ?>selected="selected"<?php endif; ?>>6户</option>
	                   <option value="7" <?php if(isset($client['huxing'])&&($client['huxing'] == 7)): ?>selected="selected"<?php endif; ?>>7户</option>
	                   <option value="8" <?php if(isset($client['huxing'])&&($client['huxing'] == 8)): ?>selected="selected"<?php endif; ?>>8户</option>
	                   <option value="9" <?php if(isset($client['huxing'])&&($client['huxing'] == 9)): ?>selected="selected"<?php endif; ?>>9户</option>
	                   <option value="10" <?php if(isset($client['huxing'])&&($client['huxing'] == 10)): ?>selected="selected"<?php endif; ?>>10户</option>
	                   <option value="15" <?php if(isset($client['huxing'])&&($client['huxing'] == 15)): ?>selected="selected"<?php endif; ?>>15户</option>
	                   <option value="20" <?php if(isset($client['huxing'])&&($client['huxing'] == 20)): ?>selected="selected"<?php endif; ?>>20户</option>
	                   <option value="25" <?php if(isset($client['huxing'])&&($client['huxing'] == 25)): ?>selected="selected"<?php endif; ?>>25户</option>
	                   <option value="30" <?php if(isset($client['huxing'])&&($client['huxing'] == 30)): ?>selected="selected"<?php endif; ?>>30户</option>
	                   <option value="50" <?php if(isset($client['huxing'])&&($client['huxing'] == 50)): ?>selected="selected"<?php endif; ?>>50户</option>
	              </select>
	                                   户/ 每层
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-2 col-sm-2">现住地址：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($client['current_address']) && ($client['current_address'] !== '')?$client['current_address']:''); ?>" placeholder="现住地址"  name="current_address">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-2 col-sm-2">现住址邮编：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($client['current_postcode']) && ($client['current_postcode'] !== '')?$client['current_postcode']:''); ?>" placeholder="现住址邮编"  name="current_postcode">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-2 col-sm-2">通讯地址：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($client['corresponding_address']) && ($client['corresponding_address'] !== '')?$client['corresponding_address']:''); ?>" placeholder="通讯地址"  name="corresponding_address">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-2 col-sm-2">通讯邮编：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($client['corresponding_postcode']) && ($client['corresponding_postcode'] !== '')?$client['corresponding_postcode']:''); ?>" placeholder="通讯邮编"  name="corresponding_postcode">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-2 col-sm-2">最高学位：</label>
            <div class="formControls col-xs-8 col-sm-9">
            <span class="select-box" style="width: 150px;">
                    <select class="select" name="highest_degree"  >
                        <option value="">最高学位</option>
                        <?php if(is_array($highest_degree) || $highest_degree instanceof \think\Collection || $highest_degree instanceof \think\Paginator): $key = 0; $__LIST__ = $highest_degree;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($key % 2 );++$key;?>
                        <option  <?php echo (isset($client['highest_degree'])&&($client['highest_degree']==$key-1))? 'selected="selected"':'';?>  value="<?php echo $key-1; ?>"><?php echo $list; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                 </span>
                <!-- <span class="select-box">
                    <select class="select" name="highest_degree">
                        <option value="">选择学位</option>
                        <option <?php if(isset($client['highest_degree'])&&($client['highest_degree'] == 0)): ?>selected="selected"<?php endif; ?> value="0">无</option>
                        <option <?php if(isset($client['highest_degree'])&&($client['highest_degree'] == 1)): ?>selected="selected"<?php endif; ?> value="1">学士学位</option>
                        <option <?php if(isset($client['highest_degree'])&&($client['highest_degree'] == 2)): ?>selected="selected"<?php endif; ?> value="2">硕士学位</option>
                        <option <?php if(isset($client['highest_degree'])&&($client['highest_degree'] == 3)): ?>selected="selected"<?php endif; ?> value="3">博士学位</option>
                    </select>
                </span> -->
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-2 col-sm-2">最高学历：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <span class="select-box" style="width: 150px;">
                        <select class="select" name="highest_education"  >
                            <option value="">最高学历</option>
                            <?php if(is_array($highest_education) || $highest_education instanceof \think\Collection || $highest_education instanceof \think\Paginator): $key = 0; $__LIST__ = $highest_education;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($key % 2 );++$key;?>
                            <option  <?php echo (isset($client['highest_education'])&&($client['highest_education']==$key-1))? 'selected="selected"':'';?>  value="<?php echo $key-1; ?>"><?php echo $list; ?></option>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                 </span>
                <!-- <span class="select-box">
                    <select class="select" name="highest_education">
                        <option value="">选择学历</option>
                        <option <?php if(isset($client['marriage_status'])&&($client['marriage_status'] == 1)): ?>selected="selected"<?php endif; ?> value="1">初中水平</option>
                        <option <?php if(isset($client['marriage_status'])&&($client['marriage_status'] == 2)): ?>selected="selected"<?php endif; ?> value="2">高中水平</option>
                        <option <?php if(isset($client['marriage_status'])&&($client['marriage_status'] == 3)): ?>selected="selected"<?php endif; ?> value="3">大专</option>
                        <option <?php if(isset($client['marriage_status'])&&($client['marriage_status'] == 4)): ?>selected="selected"<?php endif; ?> value="4">本科</option>
                        <option <?php if(isset($client['marriage_status'])&&($client['marriage_status'] == 5)): ?>selected="selected"<?php endif; ?> value="5">硕士</option>
                        <option <?php if(isset($client['marriage_status'])&&($client['marriage_status'] == 6)): ?>selected="selected"<?php endif; ?> value="6">博士</option>
                    </select>
                </span> -->
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-2 col-sm-2">行业：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($client['industry_category']) && ($client['industry_category'] !== '')?$client['industry_category']:''); ?>" placeholder="行业分类"  name="industry_category">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-2 col-sm-2">居住状况：</label>
            <div class="formControls col-xs-8 col-sm-9">
             <span class="select-box" style="width: 150px;">
                <select class="select" name="live_status"  >
                    <option value="">居住状况</option>
                    <?php if(is_array($live_status) || $live_status instanceof \think\Collection || $live_status instanceof \think\Paginator): $key = 0; $__LIST__ = $live_status;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($key % 2 );++$key;?>
                    <option  <?php echo (isset($client['live_status'])&&($client['live_status']==$key-1))? 'selected="selected"':'';?>  value="<?php echo $key-1; ?>"><?php echo $list; ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
             </span>
            </div>
        </div>
         <div class="row cl">
            <label class="form-label col-xs-2 col-sm-2">健康状况：</label>
            <div class="formControls col-xs-8 col-sm-9">
             <span class="select-box" style="width: 150px;">
                <select class="select" name="physical_condition"  >
                    <option value="">健康状况</option>
                    <?php if(is_array($physical_condition) || $physical_condition instanceof \think\Collection || $physical_condition instanceof \think\Paginator): $key = 0; $__LIST__ = $physical_condition;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($key % 2 );++$key;?>
                    <option  <?php echo (isset($client['physical_condition'])&&($client['physical_condition']==$key-1))? 'selected="selected"':'';?>  value="<?php echo $key-1; ?>"><?php echo $list; ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
             </span>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-2 col-sm-2">是否扶贫户：</label>
            <div class="formControls col-xs-8 col-sm-9 skin-minimal">
                <div class="radio-box">
                    <input name="is_poor" type="radio"  value="1" id="is_poor-1" <?php echo (isset($client['is_poor']) && ($client['is_poor'] == '1')?'checked':''); ?> >
                    <label for="is_poor-1">是</label>
                </div>
                <div class="radio-box">
                    <input type="radio" id="is_poor-2" value="0" name="is_poor" checked>
                    <label for="is_poor-2">否</label>
                </div>

            </div>
        </div>
         <div class="row cl">
            <label class="form-label col-xs-2 col-sm-2">工作单位：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($client['workunit']) && ($client['workunit'] !== '')?$client['workunit']:''); ?>" placeholder="工作单位"  name="workunit">
            </div>
        </div>
		 <div class="row cl">
            <label class="form-label col-xs-2 col-sm-2">评级结果：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <span class="select-box" style="width: 150px;">
					<select class="select" name="class_result"  >
                        <option value="">评级结果</option>
                        <option  <?php if(isset($client['class_result'])&&$client['class_result']==1){ echo  'selected="selected"'; }?> value="1">逾期客户</option>
                        <option <?php if(isset($client['class_result'])&&$client['class_result']==2){ echo  'selected="selected"'; }?> value="2">有记录客户</option>
                        <option <?php if(isset($client['class_result'])&&$client['class_result']==3){ echo  'selected="selected"'; }?> value="3">普通客户</option>
                        <option <?php if(isset($client['class_result'])&&$client['class_result']==4){ echo  'selected="selected"'; }?> value="4">潜在客户</option>
                        <option <?php if(isset($client['class_result'])&&$client['class_result']==5){ echo  'selected="selected"'; }?> value="5">优质客户</option>
                        <option <?php if(isset($client['class_result'])&&$client['class_result']==6){ echo  'selected="selected"'; }?> value="6">金钻客户</option>
                    </select>
				</span>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-2 col-sm-2">家庭总人数：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($client['family_people']) && ($client['family_people'] !== '')?$client['family_people']:''); ?>" placeholder="家庭总人数"  name="family_people">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-2 col-sm-2">家庭总资产：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($client['family_money']) && ($client['family_money'] !== '')?$client['family_money']:''); ?>" placeholder="家庭总资产"  name="family_money">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-2 col-sm-2">家庭总负债：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($client['family_debt']) && ($client['family_debt'] !== '')?$client['family_debt']:''); ?>" placeholder="家庭总负债"  name="family_debt">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-2 col-sm-2">家庭年收入：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($client['family_year_income']) && ($client['family_year_income'] !== '')?$client['family_year_income']:''); ?>" placeholder="家庭年收入"  name="family_year_income">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-2 col-sm-2">家庭年支出：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($client['family_year_spending']) && ($client['family_year_spending'] !== '')?$client['family_year_spending']:''); ?>" placeholder="家庭年支出"  name="family_year_spending">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-2 col-sm-2">工资账号：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($client['wage_number']) && ($client['wage_number'] !== '')?$client['wage_number']:''); ?>" placeholder="工资账号"  name="wage_number">
            </div>
        </div>

        <div class="row cl">
            <label class="form-label col-xs-2 col-sm-2">工资账号所属银行：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($client['wage_belong_bank']) && ($client['wage_belong_bank'] !== '')?$client['wage_belong_bank']:''); ?>" placeholder="工资账号所属银行"  name="wage_belong_bank">
            </div>
        </div>

		<div id="mapContainer" style="width:99%;height: 400px;margin: 10px;"></div>
				<div class="row cl">
					<div class="col-xs-8 col-sm-6 col-xs-offset-4 col-sm-offset-3">
						<input class="btn btn-primary radius ml-50" type="submit" value="提交">
                        <input type="reset" value="重置" class="btn btn-primary radius" >
						<a href="javascript:" class="btn btn-default radius"  onclick="layer_close()"> 取消</a>
					</div>
				</div>
					

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
			// born_date:{
			// 	required:true
			// },
			// address:{
			// 	required:true
			// },
			// valid_time:{
			// 	required:true
			// },
			// issue_office:{
			// 	required:true
			// },
			belong_organization:{
				required:true
			},
			belong_user_id:{
				required:true
			}

		},
		messages:{
			name:{
				required:'客户名称不能为空'
			},
			card_number:{
				required:'证件号码不能为空'
			},
			belong_organization:{
				required:'请选择所属机构'
			},
			// born_date:{
			// 	required:'出身日期不能为空'
			// },
			// address:{
			// 	required:'身份证地址不能为空'
			// },
			// valid_time:{
			// 	required:'身份证有效期不能为空'
			// },
			// issue_office:{
			// 	required:'签发机关不能为空'
			// },
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

//身份证重复检查
	$(document).ready(function(){
       check();
    });
    function check(){
       $('#card_number').blur(function(){
           var a=$(this).val();
           var changUrl="<?php echo url('admin/client/cardcheck'); ?>";
           $.post(changUrl,{card_number:a},function(str){
               if(str=='1'){
                   $('#card').append("<label id=\"username-error\" class=\"error\" for=\"username\">身份证已存在 ! ! </label>");
               }
           });
       });
    }

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




