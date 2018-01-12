<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:50:"F:\www\bank.cn/app/admin\view\client\tese_add.html";i:1509610175;s:39:"F:\www\bank.cn/app/admin\view\base.html";i:1507780640;}*/ ?>
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
        
        <input type="hidden" name="card_number" value="<?php echo $card_number; ?>" >
      
        <h3 class="text-c">品行信息</h3>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">家庭关系：</label>
            <div class="formControls col-xs-8 col-sm-9 skin-minimal">
                <span class="select-box">
                    <select class="select" name="pinxing_familyrelation">
                        <option value="" selected="selected">==请选择==</option>
                        <option <?php if(isset($tese['pinxing_familyrelation'])&&($tese['pinxing_familyrelation'] == 1)): ?>selected="selected"<?php endif; ?> value="1">和睦</option>
                        <option <?php if(isset($tese['pinxing_familyrelation'])&&($tese['pinxing_familyrelation'] == 2)): ?>selected="selected"<?php endif; ?> value="2">一般</option>
                        <option <?php if(isset($tese['pinxing_familyrelation'])&&($tese['pinxing_familyrelation'] == 3)): ?>selected="selected"<?php endif; ?> value="3">不和睦</option>
                    </select>
                </span>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">社会声誉：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <span class="select-box">
                    <select class="select" name="pinxing_shengyu">
                        <option value="" selected="selected">==请选择==</option>
                        <option <?php if(isset($tese['pinxing_shengyu'])&&($tese['pinxing_shengyu'] == 1)): ?>selected="selected"<?php endif; ?> value="1">良好</option>
                        <option <?php if(isset($tese['pinxing_shengyu'])&&($tese['pinxing_shengyu'] == 2)): ?>selected="selected"<?php endif; ?> value="2">一般</option>
                        <option <?php if(isset($tese['pinxing_shengyu'])&&($tese['pinxing_shengyu'] == 3)): ?>selected="selected"<?php endif; ?> value="3">较差</option>
                    </select>
                </span> 
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">不良行为：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <span class="select-box">
                    <select class="select" name="pinxing_buliang">
                        <option value="" selected="selected">==请选择==</option>
                        <option <?php if(isset($tese['pinxing_buliang'])&&($tese['pinxing_buliang'] == 1)): ?>selected="selected"<?php endif; ?> value="1">无</option>
                        <option <?php if(isset($tese['pinxing_buliang'])&&($tese['pinxing_buliang'] == 2)): ?>selected="selected"<?php endif; ?> value="2">酗酒</option>
                        <option <?php if(isset($tese['pinxing_buliang'])&&($tese['pinxing_buliang'] == 3)): ?>selected="selected"<?php endif; ?> value="3">斗殴</option>
                        <option <?php if(isset($tese['pinxing_buliang'])&&($tese['pinxing_buliang'] == 4)): ?>selected="selected"<?php endif; ?> value="4">赌博</option>
                        <option <?php if(isset($tese['pinxing_buliang'])&&($tese['pinxing_buliang'] == 5)): ?>selected="selected"<?php endif; ?> value="5">奢侈浪费</option>
                        <option <?php if(isset($tese['pinxing_buliang'])&&($tese['pinxing_buliang'] == 6)): ?>selected="selected"<?php endif; ?> value="6">高息借贷</option>
                        <option <?php if(isset($tese['pinxing_buliang'])&&($tese['pinxing_buliang'] == 7)): ?>selected="selected"<?php endif; ?> value="7">存在债务纠纷或涉诉</option>
                        <option <?php if(isset($tese['pinxing_buliang'])&&($tese['pinxing_buliang'] == 8)): ?>selected="selected"<?php endif; ?> value="8">受过行政处罚</option>
                        <option <?php if(isset($tese['pinxing_buliang'])&&($tese['pinxing_buliang'] == 9)): ?>selected="selected"<?php endif; ?> value="9">其他不良行为</option>
                    </select>
                </span>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">诚信情况：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <span class="select-box">
                    <select class="select" name="pinxing_chengxin">
                        <option value="" selected="selected">==请选择==</option>
                        <option <?php if(isset($tese['pinxing_chengxin'])&&($tese['pinxing_chengxin'] == 1)): ?>selected="selected"<?php endif; ?> value="1">诚实守信</option>
                        <option <?php if(isset($tese['pinxing_chengxin'])&&($tese['pinxing_chengxin'] == 2)): ?>selected="selected"<?php endif; ?> value="2">信用一般</option>
                        <option <?php if(isset($tese['pinxing_chengxin'])&&($tese['pinxing_chengxin'] == 3)): ?>selected="selected"<?php endif; ?> value="3">信用较差</option>
                    </select>
                </span>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">创新能力：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <span class="select-box">
                    <select class="select" name="pinxing_chuangxin">
                        <option value="" selected="selected">==请选择==</option>
                        <option <?php if(isset($tese['pinxing_chuangxin'])&&($tese['pinxing_chuangxin'] == 1)): ?>selected="selected"<?php endif; ?> value="1">较强</option>
                        <option <?php if(isset($tese['pinxing_chuangxin'])&&($tese['pinxing_chuangxin'] == 2)): ?>selected="selected"<?php endif; ?> value="2">一般</option>
                        <option <?php if(isset($tese['pinxing_chuangxin'])&&($tese['pinxing_chuangxin'] == 3)): ?>selected="selected"<?php endif; ?> value="3">较差</option>
                    </select>
                </span>
            </div>
        </div>
        <h3 class="text-c">种植信息</h3>
         <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">种植种类：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <span class="select-box">
                    <select class="select" name="zhongzhi_class">
                        <option value="" selected="selected">==请选择==</option>
                        <option <?php if(isset($tese['zhongzhi_class'])&&($tese['zhongzhi_class'] == 1)): ?>selected="selected"<?php endif; ?> value="1">蔬菜</option>
                        <option <?php if(isset($tese['zhongzhi_class'])&&($tese['zhongzhi_class'] == 2)): ?>selected="selected"<?php endif; ?> value="2">水果</option>
                        <option <?php if(isset($tese['zhongzhi_class'])&&($tese['zhongzhi_class'] == 3)): ?>selected="selected"<?php endif; ?> value="3">粮食作物</option>
                        <option <?php if(isset($tese['zhongzhi_class'])&&($tese['zhongzhi_class'] == 3)): ?>selected="selected"<?php endif; ?> value="3">其他</option>
                    </select>
                </span>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">种植亩数：</label>
            <div class="formControls col-xs-8 col-sm-9">
                 <input type="text" class="input-text" value="<?php if(isset($tese['zhongzhi_num']) && $tese['zhongzhi_num'] != 0): ?><?php echo (isset($tese['zhongzhi_num']) && ($tese['zhongzhi_num'] !== '')?$tese['zhongzhi_num']:''); endif; ?>" placeholder="种植亩数"  name="zhongzhi_num" style="width:70%;">&nbsp;亩
            </div>
        </div>
         <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">种植模式：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <span class="select-box">
                    <select class="select" name="zhongzhi_mode">
                        <option value="" selected="selected">==请选择==</option>
                        <option <?php if(isset($tese['zhongzhi_mode'])&&($tese['zhongzhi_mode'] == 1)): ?>selected="selected"<?php endif; ?> value="1">露天</option>
                        <option <?php if(isset($tese['zhongzhi_mode'])&&($tese['zhongzhi_mode'] == 2)): ?>selected="selected"<?php endif; ?> value="2">大棚</option>
                    </select>
                </span>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">亩产：</label>
            <div class="formControls col-xs-8 col-sm-9">
                 <input type="text" class="input-text" value="<?php if(isset($tese['zhongzhi_muchan']) && $tese['zhongzhi_muchan'] != 0): ?><?php echo (isset($tese['zhongzhi_muchan']) && ($tese['zhongzhi_muchan'] !== '')?$tese['zhongzhi_muchan']:''); endif; ?>" placeholder="亩产"  name="zhongzhi_muchan" style="width:70%;">&nbsp;斤
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">经营年限：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" onfocus="WdatePicker()" value="<?php echo (isset($tese['zhongzhi_years']) && ($tese['zhongzhi_years'] != '')?$tese['zhongzhi_years']:''); ?>"  name="zhongzhi_years" class="input-text Wdate" style="width:70%;">&nbsp;选择最早经营年份
            </div>
        </div>
        <h3 class="text-c">养殖信息</h3>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">养殖种类：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <span class="select-box">
                    <select class="select" name="yangzhi_class">
                        <option value="" selected="selected">==请选择==</option>
                        <option <?php if(isset($tese['yangzhi_class'])&&($tese['yangzhi_class'] == 1)): ?>selected="selected"<?php endif; ?> value="1">家禽</option>
                        <option <?php if(isset($tese['yangzhi_class'])&&($tese['yangzhi_class'] == 2)): ?>selected="selected"<?php endif; ?> value="2">家畜</option>
                        <option <?php if(isset($tese['yangzhi_class'])&&($tese['yangzhi_class'] == 3)): ?>selected="selected"<?php endif; ?> value="3">淡水养殖</option>
                        <option <?php if(isset($tese['yangzhi_class'])&&($tese['yangzhi_class'] == 4)): ?>selected="selected"<?php endif; ?> value="4">海水养殖</option>
                        <option <?php if(isset($tese['yangzhi_class'])&&($tese['yangzhi_class'] == 5)): ?>selected="selected"<?php endif; ?> value="5">其他</option>
                    </select>
                </span>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">数量：</label>
            <div class="formControls col-xs-8 col-sm-9">
                 <input type="text" class="input-text" value="<?php if(isset($tese['yangzhi_num']) && $tese['yangzhi_num'] != 0): ?><?php echo (isset($tese['yangzhi_num']) && ($tese['yangzhi_num'] !== '')?$tese['yangzhi_num']:''); endif; ?>" placeholder="数量"  name="yangzhi_num" style="width:80%;">&nbsp;
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">经营年限：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" onfocus="WdatePicker()" value="<?php echo (isset($tese['yangzhi_years']) && ($tese['yangzhi_years'] != '')?$tese['yangzhi_years']:''); ?>"  name="yangzhi_years" class="input-text Wdate" style="width:70%;">&nbsp;选择最早经营年份
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">固定资产：</label>
            <div class="formControls col-xs-8 col-sm-9">
                 <input type="text" class="input-text" value="<?php echo (isset($tese['yangzhi_zichan']) && ($tese['yangzhi_zichan'] !== '')?$tese['yangzhi_zichan']:''); ?>" placeholder="固定资产"  name="yangzhi_zichan" style="width:70%;">&nbsp;
            </div>
        </div>
        <h3 class="text-c">工作信息</h3>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">是否固定工作：</label>
            <div class="formControls col-xs-8 col-sm-9 skin-minimal">
                 <div class="radio-box">
                    <input type="radio" id="is_poor-2" value="" name="guding_work" checked>
                    <label for="is_poor-2">未调查</label>
                </div>
                <div class="radio-box">
                    <input name="guding_work" type="radio"  value="1" id="is_poor-1" <?php echo (isset($tese['guding_work']) && ($tese['guding_work'] == '1')?'checked':''); ?> >
                    <label for="is_poor-1">是</label>
                </div>
                <div class="radio-box">
                    <input type="radio" id="is_poor-2" value="2" name="guding_work" <?php echo (isset($tese['guding_work']) && ($tese['guding_work'] == '2')?'checked':''); ?>>
                    <label for="is_poor-2">否</label>
                </div>

            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">工作单位名称：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($tese['work_place']) && ($tese['work_place'] !== '')?$tese['work_place']:''); ?>" placeholder="工作单位名称"  name="work_place">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">工作单位地址：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($tese['work_address']) && ($tese['work_address'] !== '')?$tese['work_address']:''); ?>" placeholder="工作单位地址"  name="work_address">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">单位地址邮编：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($tese['work_postcode']) && ($tese['work_postcode'] !== '')?$tese['work_postcode']:''); ?>" placeholder="单位地址邮编"  name="work_postcode">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">单位工作起始年份：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" onfocus="WdatePicker()" value="<?php echo (isset($tese['start_work']) && ($tese['start_work'] != '')?date('Y-m-d',$tese['start_work']):''); ?>" name="start_work"class="input-text Wdate" >
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">职称：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <span class="select-box" style="width: 150px;">
                    <select class="select" name="job_title"  >
                        <option value="" selected="selected">==请选择==</option>
                        <option <?php if(isset($tese['job_title'])&&($tese['job_title'] == 1)): ?>selected="selected"<?php endif; ?> value="1">未知</option>
                        <option <?php if(isset($tese['job_title'])&&($tese['job_title'] == 2)): ?>selected="selected"<?php endif; ?> value="2">无</option>
                        <option <?php if(isset($tese['job_title'])&&($tese['job_title'] == 3)): ?>selected="selected"<?php endif; ?> value="3">初级</option>
                        <option <?php if(isset($tese['job_title'])&&($tese['job_title'] == 4)): ?>selected="selected"<?php endif; ?> value="4">中级</option>
                        <option <?php if(isset($tese['job_title'])&&($tese['job_title'] == 5)): ?>selected="selected"<?php endif; ?> value="5">高级</option>
                    </select>
                </span>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">职务：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <span class="select-box" style="width: 150px;">
                    <select class="select" name="duty"  >
                        <option value="" selected="selected">==请选择==</option>
                        <option <?php if(isset($tese['duty'])&&($tese['duty'] == 1)): ?>selected="selected"<?php endif; ?> value="1">未知</option>
                        <option <?php if(isset($tese['duty'])&&($tese['duty'] == 2)): ?>selected="selected"<?php endif; ?> value="2">一般员工</option>
                        <option <?php if(isset($tese['duty'])&&($tese['duty'] == 3)): ?>selected="selected"<?php endif; ?> value="3">中级领导</option>
                        <option <?php if(isset($tese['duty'])&&($tese['duty'] == 4)): ?>selected="selected"<?php endif; ?> value="4">高级领导</option>
                        <option <?php if(isset($tese['duty'])&&($tese['duty'] == 5)): ?>selected="selected"<?php endif; ?> value="5">其他</option>
                    </select>
                </span>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">职务细分：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <span class="select-box" style="width: 150px;">
                    <select class="select" name="duty_xifen"  >
                        <option value="" selected="selected">==请选择==</option>
                        <option <?php if(isset($tese['duty_xifen'])&&($tese['duty_xifen'] == 1)): ?>selected="selected"<?php endif; ?> value="1">未知</option>
                        <option <?php if(isset($tese['duty_xifen'])&&($tese['duty_xifen'] == 2)): ?>selected="selected"<?php endif; ?> value="2">无</option>
                        <option <?php if(isset($tese['duty_xifen'])&&($tese['duty_xifen'] == 3)): ?>selected="selected"<?php endif; ?> value="3">初级</option>
                        <option <?php if(isset($tese['duty_xifen'])&&($tese['duty_xifen'] == 4)): ?>selected="selected"<?php endif; ?> value="4">中级</option>
                        <option <?php if(isset($tese['duty_xifen'])&&($tese['duty_xifen'] == 5)): ?>selected="selected"<?php endif; ?> value="5">高级</option>
                    </select>
                </span>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">职业：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($tese['occupation']) && ($tese['occupation'] !== '')?$tese['occupation']:''); ?>" placeholder="职业"  name="occupation">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">单位联系方式（固话）：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($tese['unit_phone']) && ($tese['unit_phone'] !== '')?$tese['unit_phone']:''); ?>" placeholder="单位联系方式（固话）"  name="unit_phone">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">医疗保险上年度合计缴纳金额：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($tese['pay_amount']) && ($tese['pay_amount'] !== '')?$tese['pay_amount']:''); ?>" placeholder="医疗保险上年度合计缴纳金额"  name="pay_amount">
            </div>
        </div>
        
         <h3 class="text-c">经营信息</h3>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">有无经营信息：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <span class="select-box" style="width: 150px;">
                    <select class="select" name="jingying_has"  >
                        <option value="" selected="selected">==请选择==</option>
                        <option <?php if(isset($tese['jingying_has'])&&($tese['jingying_has'] == 1)): ?>selected="selected"<?php endif; ?> value="1">有</option>
                        <option <?php if(isset($tese['jingying_has'])&&($tese['jingying_has'] == 2)): ?>selected="selected"<?php endif; ?> value="2">无</option>
                    </select>
                </span>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">字号名称：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($tese['jingying_zihao']) && ($tese['jingying_zihao'] !== '')?$tese['jingying_zihao']:''); ?>" placeholder="字号名称"  name="jingying_zihao">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">经营者姓名：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($tese['jingying_name']) && ($tese['jingying_name'] !== '')?$tese['jingying_name']:''); ?>" placeholder="经营者姓名"  name="jingying_name">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">营业执照号码:</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($tese['jingying_number']) && ($tese['jingying_number'] !== '')?$tese['jingying_number']:''); ?>" placeholder="营业执照号码"  name="jingying_number">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">经营场所：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($tese['jingying_address']) && ($tese['jingying_address'] !== '')?$tese['jingying_address']:''); ?>" placeholder="经营场所"  name="jingying_address">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">经营范围：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($tese['jingying_range']) && ($tese['jingying_range'] !== '')?$tese['jingying_range']:''); ?>" placeholder="经营范围"  name="jingying_range">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">客户类型：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <span class="select-box" style="width: 150px;">
                    <select class="select" name="jingying_guest_type"  >
                        <option value="" selected="selected">==请选择==</option>
                        <option <?php if(isset($tese['jingying_guest_type'])&&($tese['jingying_guest_type'] == 1)): ?>selected="selected"<?php endif; ?> value="1">农民</option>
                        <option <?php if(isset($tese['jingying_guest_type'])&&($tese['jingying_guest_type'] == 2)): ?>selected="selected"<?php endif; ?> value="2">城镇居民</option>
                        <option <?php if(isset($tese['jingying_guest_type'])&&($tese['jingying_guest_type'] == 3)): ?>selected="selected"<?php endif; ?> value="3">个体工商户</option>
                    </select>
                </span>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">经营年限：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" onfocus="WdatePicker()" value="<?php echo (isset($tese['jingying_years']) && ($tese['jingying_years'] != '')?$tese['jingying_years']:''); ?>" name="jingying_years"class="input-text Wdate">
            </div>
        </div>
         <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">运营车辆数量：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($tese['jingying_cars']) && ($tese['jingying_cars'] !== '')?$tese['jingying_cars']:''); ?>" placeholder="运营车辆数量"  name="jingying_cars">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">员工人数：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($tese['jingying_workers']) && ($tese['jingying_workers'] !== '')?$tese['jingying_workers']:''); ?>" placeholder="员工人数"  name="jingying_workers">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">人身工伤保险员工数量：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($tese['jingying_baoxian']) && ($tese['jingying_baoxian'] !== '')?$tese['jingying_baoxian']:''); ?>" placeholder="人身工伤保险员工数量"  name="jingying_baoxian">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">经营场地属性：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <span class="select-box" style="width: 150px;">
                    <select class="select" name="jingying_cdsx"> 
                        <option value="" selected="selected">==请选择==</option>
                        <option <?php if(isset($tese['jingying_cdsx'])&&($tese['jingying_cdsx'] == 1)): ?>selected="selected"<?php endif; ?> value="1">自由</option>
                        <option <?php if(isset($tese['jingying_cdsx'])&&($tese['jingying_cdsx'] == 2)): ?>selected="selected"<?php endif; ?> value="2">租赁</option>
                        <option <?php if(isset($tese['jingying_cdsx'])&&($tese['jingying_cdsx'] == 3)): ?>selected="selected"<?php endif; ?> value="3">自由租赁</option>
                    </select>
                </span>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">自有经营场地建筑面积：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($tese['jingying_zyjymj']) && ($tese['jingying_zyjymj'] !== '')?$tese['jingying_zyjymj']:''); ?>" placeholder="自有经营场地建筑面积"  name="jingying_zyjymj">
            </div>
        </div>
         <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">租赁经营场地建筑面积：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($tese['jingying_zljymj']) && ($tese['jingying_zljymj'] !== '')?$tese['jingying_zljymj']:''); ?>" placeholder="租赁经营场地建筑面积"  name="jingying_zljymj">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">pos商户：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <span class="select-box" style="width: 150px;">
                    <select class="select" name="jingying_pos"> 
                        <option value="" selected="selected">==请选择==</option>
                        <option <?php if(isset($tese['jingying_pos'])&&($tese['jingying_pos'] == 1)): ?>selected="selected"<?php endif; ?> value="1">我行</option>
                        <option <?php if(isset($tese['jingying_pos'])&&($tese['jingying_pos'] == 2)): ?>selected="selected"<?php endif; ?> value="2">他行</option>
                        <option <?php if(isset($tese['jingying_pos'])&&($tese['jingying_pos'] == 3)): ?>selected="selected"<?php endif; ?> value="3">无</option>
                    </select>
                </span>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">机具安装日期：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" onfocus="WdatePicker()" value="<?php echo (isset($tese['jingying_azdate']) && ($tese['jingying_azdate'] != '')?$tese['jingying_azdate']:''); ?>" name="jingying_azdate"class="input-text Wdate">
            </div>
        </div>

        <div class="row cl">
            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                <?php if(isset($tese)&&$tese!=''): ?>
                <a class="btn btn-primary radius"  onclick="edit()"> 提交</a>
                <?php else: ?>
                <a class="btn btn-primary radius"  onclick="add()"> 提交</a>
                <?php endif; ?>
                <input type="reset" value="重置" class="btn btn-primary radius" >
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
            url:'<?php echo url("admin/client/tese_add"); ?>',
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
            url:'<?php echo url("admin/client/tese_edit"); ?>',
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




