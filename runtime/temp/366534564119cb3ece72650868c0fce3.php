<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:47:"F:\www\bank.cn/app/admin\view\incredit\add.html";i:1509783303;s:39:"F:\www\bank.cn/app/admin\view\base.html";i:1507780640;}*/ ?>
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
        <?php if(isset($add) && $add==1): ?>
        <input type="hidden" name="client_id" value="<?php echo $client_id; ?>" >
        <input type="hidden" name="card_number" value="<?php echo $card_number; ?>" >
        <input type="hidden" name="bank_id" value="<?php echo $bank_id; ?>" >
        <?php else: ?>
        <input type="hidden" name="client_id" value="<?php echo $incredit['client_id']; ?>" >
        <input type="hidden" name="id" value="<?php echo $incredit['id']; ?>" >
        <?php endif; ?>

        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">业务种类</label>
            <div class="formControls col-xs-8 col-sm-9">
                <span class="select-box" >
                    <select class="select" name="business_type"  >
                        <option value="">==请选择==</option>
                        <?php if(is_array($business_type) || $business_type instanceof \think\Collection || $business_type instanceof \think\Paginator): $key = 0; $__LIST__ = $business_type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($key % 2 );++$key;?>
                            <option <?php echo (isset($incredit['business_type'])&&($incredit['business_type']==$key-1))? 'selected="sleected"':'';?> value="<?php echo $key-1; ?>"><?php echo $list; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </span>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">贷款账号</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($incredit['loan_account']) && ($incredit['loan_account'] !== '')?$incredit['loan_account']:''); ?>" placeholder="贷款账号"  name="loan_account">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">扣款账号</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($incredit['koukuan_account']) && ($incredit['koukuan_account'] !== '')?$incredit['koukuan_account']:''); ?>" placeholder="扣款账号"  name="koukuan_account">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">科目号</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($incredit['subject_number']) && ($incredit['subject_number'] !== '')?$incredit['subject_number']:''); ?>" placeholder="科目号"  name="subject_number">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">借据号</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($incredit['ious_number']) && ($incredit['ious_number'] !== '')?$incredit['ious_number']:''); ?>" placeholder="借据号"  name="ious_number">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">发放时间</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" onfocus="WdatePicker()" value="<?php echo (isset($incredit['provide_time_int']) && ($incredit['provide_time_int'] !== '')?date('Y-m-d',$incredit['provide_time_int']):''); ?>"  name="provide_time_int"class="input-text Wdate" >
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">发放金额</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($incredit['provide_loan_money']) && ($incredit['provide_loan_money'] !== '')?$incredit['provide_loan_money']:''); ?>" placeholder="发放金额"  name="provide_loan_money">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">客户号</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($incredit['client_number']) && ($incredit['client_number'] !== '')?$incredit['client_number']:''); ?>" placeholder="客户号"  name="client_number">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">客户名称</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($incredit['client_name']) && ($incredit['client_name'] !== '')?$incredit['client_name']:''); ?>" placeholder="客户名称"  name="client_name">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">担保方式</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($incredit['guarantee_way']) && ($incredit['guarantee_way'] !== '')?$incredit['guarantee_way']:''); ?>" placeholder="担保方式"  name="guarantee_way">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3" style="color:red;">账户形态</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="radio" name="account_status_int" value="1" <?php if(isset($add) && $add==1): ?>checked="checked"<?php endif; if(isset($incredit['account_status_int']) && $incredit['account_status_int'] == 1): ?>checked="checked"<?php endif; ?>/>正常&nbsp;&nbsp;
                <input type="radio" name="account_status_int" value="2" <?php if(isset($incredit['account_status_int']) && $incredit['account_status_int'] == 2): ?>checked="checked"<?php endif; ?>/>逾期&nbsp;&nbsp;
                <input type="radio" name="account_status_int" value="3" <?php if(isset($incredit['account_status_int']) && $incredit['account_status_int'] == 3): ?>checked="checked"<?php endif; ?>/>部分逾期&nbsp;&nbsp;
                <input type="radio" name="account_status_int" value="4" <?php if(isset($incredit['account_status_int']) && $incredit['account_status_int'] == 4): ?>checked="checked"<?php endif; ?>/>非应计&nbsp;&nbsp;
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">五星分类</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($incredit['fivestar_type']) && ($incredit['fivestar_type'] !== '')?$incredit['fivestar_type']:''); ?>" placeholder="五星分类"  name="fivestar_type">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">贷款形态（五级）</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($incredit['five_loan_form']) && ($incredit['five_loan_form'] !== '')?$incredit['five_loan_form']:''); ?>" placeholder="贷款形态（五级）"  name="five_loan_form">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">贷款形态（十级）</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($incredit['ten_loan_form']) && ($incredit['ten_loan_form'] !== '')?$incredit['ten_loan_form']:''); ?>" placeholder="贷款形态（十级）"  name="ten_loan_form">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">支付方式</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($incredit['pay_way']) && ($incredit['pay_way'] !== '')?$incredit['pay_way']:''); ?>" placeholder="支付方式"  name="pay_way">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">主营业务</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($incredit['main_business']) && ($incredit['main_business'] !== '')?$incredit['main_business']:''); ?>" placeholder="主营业务"  name="main_business">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">企业状态</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($incredit['holding_way']) && ($incredit['holding_way'] !== '')?$incredit['holding_way']:''); ?>" placeholder="企业状态"  name="holding_way">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">控股方式</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($incredit['guarantee_way']) && ($incredit['guarantee_way'] !== '')?$incredit['guarantee_way']:''); ?>" placeholder="控股方式"  name="guarantee_way">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">关系人类型</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($incredit['relation_type']) && ($incredit['relation_type'] !== '')?$incredit['relation_type']:''); ?>" placeholder="关系人类型"  name="relation_type">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">到期日</label>
            <div class="formControls col-xs-8 col-sm-9">
                 <input type="text" onfocus="WdatePicker()" value="<?php echo (isset($incredit['arrive_time_int']) && ($incredit['arrive_time_int'] !== '')?date('Y-m-d',$incredit['arrive_time_int']):''); ?>"  name="arrive_time_int"class="input-text Wdate" >
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">期限</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($incredit['time_limit']) && ($incredit['time_limit'] !== '')?$incredit['time_limit']:''); ?>" placeholder="到期日"  name="time_limit">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">展期到期时间</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" onfocus="WdatePicker()" value="<?php echo (isset($incredit['zhanqi_arrive_time']) && ($incredit['zhanqi_arrive_time'] !== '')?$incredit['zhanqi_arrive_time']:''); ?>"  name="zhanqi_arrive_time"class="input-text Wdate" >
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">首贷日</label>
            <div class="formControls col-xs-8 col-sm-9">
                 <input type="text" onfocus="WdatePicker()" value="<?php echo (isset($incredit['firstloan_time']) && ($incredit['firstloan_time'] !== '')?$incredit['firstloan_time']:''); ?>"  name="firstloan_time"class="input-text Wdate" >
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">贷款用途</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($incredit['loan_using']) && ($incredit['loan_using'] !== '')?$incredit['loan_using']:''); ?>" placeholder="贷款用途"  name="loan_using">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">贷款用途说明</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($incredit['loan_using_detail']) && ($incredit['loan_using_detail'] !== '')?$incredit['loan_using_detail']:''); ?>" placeholder="贷款用途"  name="loan_using_detail">
            </div>
        </div>

        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">发放类型</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($incredit['provide_type']) && ($incredit['provide_type'] !== '')?$incredit['provide_type']:''); ?>" placeholder="贷款用途"  name="provide_type">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">利率</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($incredit['use_rate']) && ($incredit['use_rate'] !== '')?$incredit['use_rate']:''); ?>" placeholder="贷款用途"  name="use_rate">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">利率执行方式</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($incredit['rate_runmode']) && ($incredit['rate_runmode'] !== '')?$incredit['rate_runmode']:''); ?>" placeholder="利率执行方式"  name="rate_runmode">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">利率浮动比例</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($incredit['float_rate']) && ($incredit['float_rate'] !== '')?$incredit['float_rate']:''); ?>" placeholder="利率浮动比例"  name="float_rate">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">贷款余额</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($incredit['remian_money']) && ($incredit['remian_money'] !== '')?$incredit['remian_money']:''); ?>" placeholder="贷款余额"  name="remian_money">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">借新还旧次数</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($incredit['jxhj_number']) && ($incredit['jxhj_number'] !== '')?$incredit['jxhj_number']:''); ?>" placeholder="借新还旧次数"  name="jxhj_number">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">首次借新还旧日期</label>
            <div class="formControls col-xs-8 col-sm-9">
                 <input type="text" onfocus="WdatePicker()" value="<?php echo (isset($incredit['first_jxhj_time']) && ($incredit['first_jxhj_time'] !== '')?$incredit['first_jxhj_time']:''); ?>"  name="first_jxhj_time"class="input-text Wdate" >
            </div>
        </div>
		<div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">已收利息</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($incredit['yishou_interest']) && ($incredit['yishou_interest'] !== '')?$incredit['yishou_interest']:''); ?>" placeholder="已收利息"  name="yishou_interest">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">本金逾期次数</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($incredit['outdate_number']) && ($incredit['outdate_number'] !== '')?$incredit['outdate_number']:''); ?>" placeholder="本金逾期次数"  name="outdate_number">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">逾期本金</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($incredit['outdate_benji']) && ($incredit['outdate_benji'] !== '')?$incredit['outdate_benji']:''); ?>" placeholder="逾期本金"  name="outdate_benji">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">本金逾期天数</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($incredit['benjin_outdate_day']) && ($incredit['benjin_outdate_day'] !== '')?$incredit['benjin_outdate_day']:''); ?>" placeholder="本金逾期天数"  name="benjin_outdate_day">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">利息逾期天数</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($incredit['interest_outdate_day']) && ($incredit['interest_outdate_day'] !== '')?$incredit['interest_outdate_day']:''); ?>" placeholder="利息逾期天数"  name="interest_outdate_day">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">合同金额</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($incredit['loan_money']) && ($incredit['loan_money'] !== '')?$incredit['loan_money']:''); ?>" placeholder="合同金额"  name="loan_money">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">授权金额</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($incredit['shouquan_money']) && ($incredit['shouquan_money'] !== '')?$incredit['shouquan_money']:''); ?>" placeholder="授权金额"  name="shouquan_money">
            </div>
        </div>
		<div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">欠息金额</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($incredit['debt_money']) && ($incredit['debt_money'] !== '')?$incredit['debt_money']:''); ?>" placeholder="欠息金额"  name="debt_money">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">表内欠息金额</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($incredit['intable_debt_money']) && ($incredit['intable_debt_money'] !== '')?$incredit['intable_debt_money']:''); ?>" placeholder="表内欠息金额"  name="intable_debt_money">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">表外欠息金额</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($incredit['outtable_debt_money']) && ($incredit['outtable_debt_money'] !== '')?$incredit['outtable_debt_money']:''); ?>" placeholder="表外欠息金额"  name="outtable_debt_money">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">第一责任人</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($incredit['first_dutyofficer']) && ($incredit['first_dutyofficer'] !== '')?$incredit['first_dutyofficer']:''); ?>" placeholder="第一责任人"  name="first_dutyofficer">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">责任金额</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($incredit['duty_money']) && ($incredit['duty_money'] !== '')?$incredit['duty_money']:''); ?>" placeholder="责任金额"  name="duty_money">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">业务号</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($incredit['business_number']) && ($incredit['business_number'] !== '')?$incredit['business_number']:''); ?>" placeholder="业务号"  name="business_number">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">担保人</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($incredit['garantor']) && ($incredit['garantor'] !== '')?$incredit['garantor']:''); ?>" placeholder="担保人"  name="garantor">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">主办客户经理</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($incredit['main_manager']) && ($incredit['main_manager'] !== '')?$incredit['main_manager']:''); ?>" placeholder="主办客户经理"  name="main_manager">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">协办客户经理</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($incredit['assist_manager']) && ($incredit['assist_manager'] !== '')?$incredit['assist_manager']:''); ?>" placeholder="协办客户经理"  name="assist_manager">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">信用等级</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($incredit['credit_class']) && ($incredit['credit_class'] !== '')?$incredit['credit_class']:''); ?>" placeholder="信用等级"  name="credit_class">
            </div>
        </div>
         <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">结息方式</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($incredit['jiexi_way']) && ($incredit['jiexi_way'] !== '')?$incredit['jiexi_way']:''); ?>" placeholder="结息方式"  name="jiexi_way">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">结清日期</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" onfocus="WdatePicker()" value="<?php echo (isset($incredit['jieqing_time']) && ($incredit['jieqing_time'] !== '')?$incredit['jieqing_time']:''); ?>"  name="jieqing_time"class="input-text Wdate" >
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">核心入账机构</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($incredit['core_inorganization']) && ($incredit['core_inorganization'] !== '')?$incredit['core_inorganization']:''); ?>" placeholder="核心入账机构"  name="core_inorganization">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">所属机构</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($incredit['belong_organization']) && ($incredit['belong_organization'] !== '')?$incredit['belong_organization']:''); ?>" placeholder="所属机构"  name="belong_organization">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">行业分类</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($incredit['hangye_class']) && ($incredit['hangye_class'] !== '')?$incredit['hangye_class']:''); ?>" placeholder="行业分类"  name="hangye_class">
            </div>
        </div>
         <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">行业细分</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($incredit['hangye_xifen']) && ($incredit['hangye_xifen'] !== '')?$incredit['hangye_xifen']:''); ?>" placeholder="行业细分"  name="hangye_xifen">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">贷款天数</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($incredit['loan_day']) && ($incredit['loan_day'] !== '')?$incredit['loan_day']:''); ?>" placeholder="贷款天数"  name="loan_day">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">欠息日期</label>
            <div class="formControls col-xs-8 col-sm-9">
                 <input type="text" onfocus="WdatePicker()" value="<?php echo (isset($incredit['debt_time']) && ($incredit['debt_time'] !== '')?$incredit['debt_time']:''); ?>"  name="debt_time"class="input-text Wdate" >
            </div>
        </div>
       <!--  <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">日期</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($incredit['date']) && ($incredit['date'] !== '')?$incredit['date']:''); ?>" placeholder="日期"  name="date">
            </div>
        </div> -->
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">过期日期</label>
            <div class="formControls col-xs-8 col-sm-9">
                 <input type="text" onfocus="WdatePicker()" value="<?php echo (isset($incredit['outdate']) && ($incredit['outdate'] !== '')?$incredit['outdate']:''); ?>"  name="outdate"class="input-text Wdate" >
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">日息</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($incredit['daily_interest']) && ($incredit['daily_interest'] !== '')?$incredit['daily_interest']:''); ?>" placeholder="日息"  name="daily_interest">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">逾期</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($incredit['outdate_money']) && ($incredit['outdate_money'] !== '')?$incredit['outdate_money']:''); ?>" placeholder="逾期"  name="outdate_money">
            </div>
        </div>
       <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">首次欠息日期</label>
            <div class="formControls col-xs-8 col-sm-9">
                 <input type="text" onfocus="WdatePicker()" value="<?php echo (isset($incredit['first_debt_time']) && ($incredit['first_debt_time'] !== '')?$incredit['first_debt_time']:''); ?>"  name="first_debt_time"class="input-text Wdate" >
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">欠息天数</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($incredit['debt_day']) && ($incredit['debt_day'] !== '')?$incredit['debt_day']:''); ?>" placeholder="欠息天数"  name="debt_day">
            </div>
        </div>
         <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">欠息次数</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($incredit['debt_number']) && ($incredit['debt_number'] !== '')?$incredit['debt_number']:''); ?>" placeholder="欠息次数"  name="debt_number">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">逾期天数</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($incredit['outdate_day']) && ($incredit['outdate_day'] !== '')?$incredit['outdate_day']:''); ?>" placeholder="逾期天数"  name="outdate_day">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">联系电话</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($incredit['contact_phone']) && ($incredit['contact_phone'] !== '')?$incredit['contact_phone']:''); ?>" placeholder="联系电话"  name="contact_phone">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">对私移动电话</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($incredit['duisi_phone']) && ($incredit['duisi_phone'] !== '')?$incredit['duisi_phone']:''); ?>" placeholder="对私移动电话"  name="duisi_phone">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">通讯地址</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($incredit['corresponding_address']) && ($incredit['corresponding_address'] !== '')?$incredit['corresponding_address']:''); ?>" placeholder="通讯地址"  name="corresponding_address">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">居住地址</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($incredit['address']) && ($incredit['address'] !== '')?$incredit['address']:''); ?>" placeholder="居住地址"  name="address">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">币种</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($incredit['currency']) && ($incredit['currency'] !== '')?$incredit['currency']:''); ?>" placeholder="币种"  name="currency">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">特色产品</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($incredit['tese_product']) && ($incredit['tese_product'] !== '')?$incredit['tese_product']:''); ?>" placeholder="特色产品 如买卖通、养殖贷款"  name="tese_product">
            </div>
        </div>
        <div class="row cl">
            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                <?php if(isset($add)&&$add==1): ?>
                <a class="btn btn-primary radius"  onclick="add()"> 提交</a>
                <?php else: ?>
                <a class="btn btn-primary radius"  onclick="edit()"> 提交</a>
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
    $(function(){
        $('.skin-minimal input').iCheck({
            checkboxClass: 'icheckbox-blue',
            radioClass: 'iradio-blue',
            increaseArea: '20%'
        });
    });

    function add(){
        $.ajax({
            url:'<?php echo url("admin/incredit/add"); ?>',
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
            url:'<?php echo url("admin/incredit/edit"); ?>',
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




