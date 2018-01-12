<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:49:"F:\www\bank.cn/app/admin\view\incredit\check.html";i:1504164191;s:39:"F:\www\bank.cn/app/admin\view\base.html";i:1507780640;}*/ ?>
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
          <h4 class="text-c">不良贷款尽职调查分类管理简表</h4><br/>
		  <table class="table table-border table-bordered table-hover">
                    <tr class="text-c">
                    	<td rowspan="5">基本信息</td>
                    	<td>贷出日</td>
                    	<td colspan="2">到期日</td>
                    	<td colspan="2">合同金额</td>
                    	<td colspan="2">余额</td>
                    	<td colspan="2">担保方式</td>
                    	<td colspan="2">帐户形态</td>
                    </tr>
                    <tr class="text-c">
                    	<td><?php echo date("Y-m-d",$loan['provide_time_int']); ?></td>
                    	<td colspan="2"><?php echo date("Y-m-d",$loan['arrive_time_int']); ?></td>
                    	<td colspan="2"><?php echo $loan['loan_money']; ?></td>
                    	<td colspan="2"><?php echo $loan['remian_money']; ?></td>
                    	<td colspan="2"> 
                        

                                <?php if($loan['guarantee_way'] == 1): ?>保证 
                                <?php elseif($loan['guarantee_way'] == 2): ?>抵押 
                                <?php elseif($loan['guarantee_way'] == 3): ?>质押
                                <?php elseif($loan['guarantee_way'] == 4): ?>留置
                                <?php elseif($loan['guarantee_way'] == 5): ?>定金
                                <?php endif; ?>
                        </td>
                    	<td colspan="2"> 
                        <?php echo $loan['account_status']; ?>
                        </td>
                    </tr>
                    <tr class="text-c">
                    	<td rowspan="3">涉诉信息</td>
                    	<td>诉讼状态</td>
                    	<td colspan="8">
                   				<?php if(isset($loan['ss_status'])): if($loan['ss_status'] == 1): ?>未诉
                                <?php elseif($loan['ss_status'] == 2): ?>审理
                                <?php elseif($loan['ss_status'] == 3): ?>判决
                                <?php elseif($loan['ss_status'] == 4): ?>执行
                                <?php elseif($loan['ss_status'] == 5): ?>上诉
								<?php elseif($loan['ss_status'] == 6): ?>再审
								<?php elseif($loan['ss_status'] == 7): ?>结案
                                <?php endif; endif; ?>
                        </td>
                    </tr>
                    <tr class="text-c">
                    	<td>审理案号</td>
                    	<td colspan="8"><?php echo (isset($loan['ss_num']) && ($loan['ss_num'] !== '')?$loan['ss_num']:""); ?></td>
                    </tr>
                    <tr class="text-c">
                    	<td>执行案号</td>
                    	<td colspan="8"><?php echo (isset($loan['ss_zx_num']) && ($loan['ss_zx_num'] !== '')?$loan['ss_zx_num']:""); ?></td>
                    </tr>
                    <tr class="text-c">
                        <td colspan="2">尽职调查项目</td>
                    	<td>借款人</td>
                    	<td>担保人</td>
                        <td>担保人</td>
                        <td>担保人</td>
                        <td>担保人</td>
                        <td>担保人</td>
                        <td>担保人</td>
                        <td>担保人</td>
                    	<td>其他</td>
                    </tr>
                    <tr>
                        <td rowspan="8">借款基本信息</td>
                        <td>姓名</td>
                        <td><?php echo (isset($client['name']) && ($client['name'] !== '')?$client['name']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['0']['real_name']) && ($LoanGuarantor['0']['real_name'] !== '')?$LoanGuarantor['0']['real_name']:''); ?><?php echo (isset($loan['garantor']) && ($loan['garantor'] !== '')?$loan['garantor']:""); ?></td>
                        <td><?php echo (isset($LoanGuarantor['1']['real_name']) && ($LoanGuarantor['1']['real_name'] !== '')?$LoanGuarantor['1']['real_name']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['2']['real_name']) && ($LoanGuarantor['2']['real_name'] !== '')?$LoanGuarantor['2']['real_name']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['3']['real_name']) && ($LoanGuarantor['3']['real_name'] !== '')?$LoanGuarantor['3']['real_name']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['4']['real_name']) && ($LoanGuarantor['4']['real_name'] !== '')?$LoanGuarantor['4']['real_name']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['5']['real_name']) && ($LoanGuarantor['5']['real_name'] !== '')?$LoanGuarantor['5']['real_name']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['6']['real_name']) && ($LoanGuarantor['6']['real_name'] !== '')?$LoanGuarantor['6']['real_name']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['7']['real_name']) && ($LoanGuarantor['7']['real_name'] !== '')?$LoanGuarantor['7']['real_name']:''); ?></td>
                    </tr>
                    <tr>
                        <td>责任关系</td>
                        <td>本人</td>
                        <td><?php echo (isset($LoanGuarantor['0']['relation']) && ($LoanGuarantor['0']['relation'] !== '')?$LoanGuarantor['0']['relation']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['1']['relation']) && ($LoanGuarantor['1']['relation'] !== '')?$LoanGuarantor['1']['relation']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['2']['relation']) && ($LoanGuarantor['2']['relation'] !== '')?$LoanGuarantor['2']['relation']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['3']['relation']) && ($LoanGuarantor['3']['relation'] !== '')?$LoanGuarantor['3']['relation']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['4']['relation']) && ($LoanGuarantor['4']['relation'] !== '')?$LoanGuarantor['4']['relation']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['5']['relation']) && ($LoanGuarantor['5']['relation'] !== '')?$LoanGuarantor['5']['relation']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['6']['relation']) && ($LoanGuarantor['6']['relation'] !== '')?$LoanGuarantor['6']['relation']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['7']['relation']) && ($LoanGuarantor['7']['relation'] !== '')?$LoanGuarantor['7']['relation']:''); ?></td>
                    </tr>
                    <tr>
                        <td>身份证号码</td>
                        <td><?php echo (isset($client['card_number']) && ($client['card_number'] !== '')?$client['card_number']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['0']['card']) && ($LoanGuarantor['0']['card'] !== '')?$LoanGuarantor['0']['card']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['1']['card']) && ($LoanGuarantor['1']['card'] !== '')?$LoanGuarantor['1']['card']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['2']['card']) && ($LoanGuarantor['2']['card'] !== '')?$LoanGuarantor['2']['card']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['3']['card']) && ($LoanGuarantor['3']['card'] !== '')?$LoanGuarantor['3']['card']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['4']['card']) && ($LoanGuarantor['4']['card'] !== '')?$LoanGuarantor['4']['card']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['5']['card']) && ($LoanGuarantor['5']['card'] !== '')?$LoanGuarantor['5']['card']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['6']['card']) && ($LoanGuarantor['6']['card'] !== '')?$LoanGuarantor['6']['card']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['7']['card']) && ($LoanGuarantor['7']['card'] !== '')?$LoanGuarantor['7']['card']:''); ?></td>
                    </tr>
                    <tr>
                        <td>现住址</td>
                        <td><?php echo (isset($client['address']) && ($client['address'] !== '')?$client['address']:''); ?><?php echo (isset($base_msg['current_address']) && ($base_msg['current_address'] !== '')?$base_msg['current_address']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['0']['address']) && ($LoanGuarantor['0']['address'] !== '')?$LoanGuarantor['0']['address']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['1']['address']) && ($LoanGuarantor['1']['address'] !== '')?$LoanGuarantor['1']['address']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['2']['address']) && ($LoanGuarantor['2']['address'] !== '')?$LoanGuarantor['2']['address']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['3']['address']) && ($LoanGuarantor['3']['address'] !== '')?$LoanGuarantor['3']['address']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['4']['address']) && ($LoanGuarantor['4']['address'] !== '')?$LoanGuarantor['4']['address']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['5']['address']) && ($LoanGuarantor['5']['address'] !== '')?$LoanGuarantor['5']['address']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['6']['address']) && ($LoanGuarantor['6']['address'] !== '')?$LoanGuarantor['6']['address']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['7']['address']) && ($LoanGuarantor['7']['address'] !== '')?$LoanGuarantor['7']['address']:''); ?></td>
                    </tr>
                    <tr>
                        <td>工作单位</td>
                        <td><?php echo (isset($base_msg['workunit']) && ($base_msg['workunit'] !== '')?$base_msg['workunit']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['0']['workunit']) && ($LoanGuarantor['0']['workunit'] !== '')?$LoanGuarantor['0']['workunit']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['1']['workunit']) && ($LoanGuarantor['1']['workunit'] !== '')?$LoanGuarantor['1']['workunit']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['2']['workunit']) && ($LoanGuarantor['2']['workunit'] !== '')?$LoanGuarantor['2']['workunit']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['3']['workunit']) && ($LoanGuarantor['3']['workunit'] !== '')?$LoanGuarantor['3']['workunit']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['4']['workunit']) && ($LoanGuarantor['4']['workunit'] !== '')?$LoanGuarantor['4']['workunit']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['5']['workunit']) && ($LoanGuarantor['5']['workunit'] !== '')?$LoanGuarantor['5']['workunit']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['6']['workunit']) && ($LoanGuarantor['6']['workunit'] !== '')?$LoanGuarantor['6']['workunit']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['7']['workunit']) && ($LoanGuarantor['7']['workunit'] !== '')?$LoanGuarantor['7']['workunit']:''); ?></td>
                    </tr>
                    <tr>
                        <td>经营项目</td>
                        <td><?php echo (isset($base_msg['industry_category']) && ($base_msg['industry_category'] !== '')?$base_msg['industry_category']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['0']['business']) && ($LoanGuarantor['0']['business'] !== '')?$LoanGuarantor['0']['business']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['1']['business']) && ($LoanGuarantor['1']['business'] !== '')?$LoanGuarantor['1']['business']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['2']['business']) && ($LoanGuarantor['2']['business'] !== '')?$LoanGuarantor['2']['business']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['3']['business']) && ($LoanGuarantor['3']['business'] !== '')?$LoanGuarantor['3']['business']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['4']['business']) && ($LoanGuarantor['4']['business'] !== '')?$LoanGuarantor['4']['business']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['5']['business']) && ($LoanGuarantor['5']['business'] !== '')?$LoanGuarantor['5']['business']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['6']['business']) && ($LoanGuarantor['6']['business'] !== '')?$LoanGuarantor['6']['business']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['7']['business']) && ($LoanGuarantor['7']['business'] !== '')?$LoanGuarantor['7']['business']:''); ?></td>
                    </tr>
                    <tr>
                        <td>联系方式</td>
                        <td><?php echo (isset($base_msg['tel_number']) && ($base_msg['tel_number'] !== '')?$base_msg['tel_number']:''); ?>/<?php echo (isset($base_msg['phone_number']) && ($base_msg['phone_number'] !== '')?$base_msg['phone_number']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['0']['mobile']) && ($LoanGuarantor['0']['mobile'] !== '')?$LoanGuarantor['0']['mobile']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['1']['mobile']) && ($LoanGuarantor['1']['mobile'] !== '')?$LoanGuarantor['1']['mobile']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['2']['mobile']) && ($LoanGuarantor['2']['mobile'] !== '')?$LoanGuarantor['2']['mobile']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['3']['mobile']) && ($LoanGuarantor['3']['mobile'] !== '')?$LoanGuarantor['3']['mobile']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['4']['mobile']) && ($LoanGuarantor['4']['mobile'] !== '')?$LoanGuarantor['4']['mobile']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['5']['mobile']) && ($LoanGuarantor['5']['mobile'] !== '')?$LoanGuarantor['5']['mobile']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['6']['mobile']) && ($LoanGuarantor['6']['mobile'] !== '')?$LoanGuarantor['6']['mobile']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['7']['mobile']) && ($LoanGuarantor['7']['mobile'] !== '')?$LoanGuarantor['7']['mobile']:''); ?></td>
                    </tr>
                    <tr>
                        <td>抵押物</td>
                        <td><?php echo (isset($loan['mortgage']) && ($loan['mortgage'] !== '')?$loan['mortgage']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['0']['mortgage']) && ($LoanGuarantor['0']['mortgage'] !== '')?$LoanGuarantor['0']['mortgage']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['1']['mortgage']) && ($LoanGuarantor['1']['mortgage'] !== '')?$LoanGuarantor['1']['mortgage']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['2']['mortgage']) && ($LoanGuarantor['2']['mortgage'] !== '')?$LoanGuarantor['2']['mortgage']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['3']['mortgage']) && ($LoanGuarantor['3']['mortgage'] !== '')?$LoanGuarantor['3']['mortgage']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['4']['mortgage']) && ($LoanGuarantor['4']['mortgage'] !== '')?$LoanGuarantor['4']['mortgage']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['5']['mortgage']) && ($LoanGuarantor['5']['mortgage'] !== '')?$LoanGuarantor['5']['mortgage']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['6']['mortgage']) && ($LoanGuarantor['6']['mortgage'] !== '')?$LoanGuarantor['6']['mortgage']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['7']['mortgage']) && ($LoanGuarantor['7']['mortgage'] !== '')?$LoanGuarantor['7']['mortgage']:''); ?></td>
                    </tr>
                   <tr>
                        <td rowspan="6">查控财产信息</td>
                        <td>存款股金类</td>
                        <td><?php echo (isset($fund['fund']) && ($fund['fund'] !== '')?$fund['fund']:''); ?><br><?php if(isset($fund['fund_ck_date']) && $fund['fund_ck_date'] != '0'): ?><span class="c-red">[查控中：<?php echo date("Y-m-d",$fund['fund_ck_date']); ?>]</span><?php endif; ?></td>
                        <td><?php echo (isset($LoanGuarantor['0']['fund']) && ($LoanGuarantor['0']['fund'] !== '')?$LoanGuarantor['0']['fund']:''); ?><br><?php if(isset($LoanGuarantor['0']['fund_ck_date']) && $LoanGuarantor['0']['fund_ck_date'] != '0'): ?><span class="c-red">[查控中：<?php echo date("Y-m-d",$LoanGuarantor['0']['fund_ck_date']); ?>]</span><?php endif; ?></td>
                        <td><?php echo (isset($LoanGuarantor['1']['fund']) && ($LoanGuarantor['1']['fund'] !== '')?$LoanGuarantor['1']['fund']:''); ?><br><?php if(isset($LoanGuarantor['1']['fund_ck_date']) && $LoanGuarantor['1']['fund_ck_date'] != '0'): ?><span class="c-red">[查控中：<?php echo date("Y-m-d",$LoanGuarantor['1']['fund_ck_date']); ?>]</span><?php endif; ?></td>
                        <td><?php echo (isset($LoanGuarantor['2']['fund']) && ($LoanGuarantor['2']['fund'] !== '')?$LoanGuarantor['2']['fund']:''); ?><br><?php if(isset($LoanGuarantor['2']['fund_ck_date']) && $LoanGuarantor['2']['fund_ck_date'] != '0'): ?><span class="c-red">[查控中：<?php echo date("Y-m-d",$LoanGuarantor['2']['fund_ck_date']); ?>]</span><?php endif; ?></td>
                        <td><?php echo (isset($LoanGuarantor['3']['fund']) && ($LoanGuarantor['3']['fund'] !== '')?$LoanGuarantor['3']['fund']:''); ?><br><?php if(isset($LoanGuarantor['3']['fund_ck_date']) && $LoanGuarantor['3']['fund_ck_date'] != '0'): ?><span class="c-red">[查控中：<?php echo date("Y-m-d",$LoanGuarantor['3']['fund_ck_date']); ?>]</span><?php endif; ?></td>
                        <td><?php echo (isset($LoanGuarantor['4']['fund']) && ($LoanGuarantor['4']['fund'] !== '')?$LoanGuarantor['4']['fund']:''); ?><br><?php if(isset($LoanGuarantor['4']['fund_ck_date']) && $LoanGuarantor['4']['fund_ck_date'] != '0'): ?><span class="c-red">[查控中：<?php echo date("Y-m-d",$LoanGuarantor['4']['fund_ck_date']); ?>]</span><?php endif; ?></td>
                        <td><?php echo (isset($LoanGuarantor['5']['fund']) && ($LoanGuarantor['5']['fund'] !== '')?$LoanGuarantor['5']['fund']:''); ?><br><?php if(isset($LoanGuarantor['5']['fund_ck_date']) && $LoanGuarantor['5']['fund_ck_date'] != '0'): ?><span class="c-red">[查控中：<?php echo date("Y-m-d",$LoanGuarantor['5']['fund_ck_date']); ?>]</span><?php endif; ?></td>
                        <td><?php echo (isset($LoanGuarantor['6']['fund']) && ($LoanGuarantor['6']['fund'] !== '')?$LoanGuarantor['6']['fund']:''); ?><br><?php if(isset($LoanGuarantor['6']['fund_ck_date']) && $LoanGuarantor['6']['fund_ck_date'] != '0'): ?><span class="c-red">[查控中：<?php echo date("Y-m-d",$LoanGuarantor['6']['fund_ck_date']); ?>]</span><?php endif; ?></td>
                        <td><?php echo (isset($LoanGuarantor['7']['fund']) && ($LoanGuarantor['7']['fund'] !== '')?$LoanGuarantor['7']['fund']:''); ?><br><?php if(isset($LoanGuarantor['7']['fund_ck_date']) && $LoanGuarantor['7']['fund_ck_date'] != '0'): ?><span class="c-red">[查控中：<?php echo date("Y-m-d",$LoanGuarantor['7']['fund_ck_date']); ?>]</span><?php endif; ?></td>
                    </tr>
                    <tr>
                        <td>房产土地类</td>
                        <td><?php echo (isset($fund['house']) && ($fund['house'] !== '')?$fund['house']:''); ?><br><?php if(isset($fund['house_ck_date']) && $fund['house_ck_date'] != '0'): ?><span class="c-red">[查控中：<?php echo date("Y-m-d",$fund['house_ck_date']); ?>]</span><?php endif; ?></td>
                        <td><?php echo (isset($LoanGuarantor['0']['house']) && ($LoanGuarantor['0']['house'] !== '')?$LoanGuarantor['0']['house']:''); ?><br><?php if(isset($LoanGuarantor['0']['house_ck_date']) && $LoanGuarantor['0']['house_ck_date'] != '0'): ?><span class="c-red">[查控中：<?php echo date("Y-m-d",$LoanGuarantor['0']['house_ck_date']); ?>]</span><?php endif; ?></td>
                        <td><?php echo (isset($LoanGuarantor['1']['house']) && ($LoanGuarantor['1']['house'] !== '')?$LoanGuarantor['1']['house']:''); ?><br><?php if(isset($LoanGuarantor['1']['house_ck_date']) && $LoanGuarantor['1']['house_ck_date'] != '0'): ?><span class="c-red">[查控中：<?php echo date("Y-m-d",$LoanGuarantor['1']['house_ck_date']); ?>]</span><?php endif; ?></td>
                        <td><?php echo (isset($LoanGuarantor['2']['house']) && ($LoanGuarantor['2']['house'] !== '')?$LoanGuarantor['2']['house']:''); ?><br><?php if(isset($LoanGuarantor['2']['house_ck_date']) && $LoanGuarantor['2']['house_ck_date'] != '0'): ?><span class="c-red">[查控中：<?php echo date("Y-m-d",$LoanGuarantor['2']['house_ck_date']); ?>]</span><?php endif; ?></td>
                        <td><?php echo (isset($LoanGuarantor['3']['house']) && ($LoanGuarantor['3']['house'] !== '')?$LoanGuarantor['3']['house']:''); ?><br><?php if(isset($LoanGuarantor['3']['house_ck_date']) && $LoanGuarantor['3']['house_ck_date'] != '0'): ?><span class="c-red">[查控中：<?php echo date("Y-m-d",$LoanGuarantor['3']['house_ck_date']); ?>]</span><?php endif; ?></td>
                        <td><?php echo (isset($LoanGuarantor['4']['house']) && ($LoanGuarantor['4']['house'] !== '')?$LoanGuarantor['4']['house']:''); ?><br><?php if(isset($LoanGuarantor['4']['house_ck_date']) && $LoanGuarantor['4']['house_ck_date'] != '0'): ?><span class="c-red">[查控中：<?php echo date("Y-m-d",$LoanGuarantor['4']['house_ck_date']); ?>]</span><?php endif; ?></td>
                        <td><?php echo (isset($LoanGuarantor['5']['house']) && ($LoanGuarantor['5']['house'] !== '')?$LoanGuarantor['5']['house']:''); ?><br><?php if(isset($LoanGuarantor['5']['house_ck_date']) && $LoanGuarantor['5']['house_ck_date'] != '0'): ?><span class="c-red">[查控中：<?php echo date("Y-m-d",$LoanGuarantor['5']['house_ck_date']); ?>]</span><?php endif; ?></td>
                        <td><?php echo (isset($LoanGuarantor['6']['house']) && ($LoanGuarantor['6']['house'] !== '')?$LoanGuarantor['6']['house']:''); ?><br><?php if(isset($LoanGuarantor['6']['house_ck_date']) && $LoanGuarantor['6']['house_ck_date'] != '0'): ?><span class="c-red">[查控中：<?php echo date("Y-m-d",$LoanGuarantor['6']['house_ck_date']); ?>]</span><?php endif; ?></td>
                        <td><?php echo (isset($LoanGuarantor['7']['house']) && ($LoanGuarantor['7']['house'] !== '')?$LoanGuarantor['7']['house']:''); ?><br><?php if(isset($LoanGuarantor['7']['house_ck_date']) && $LoanGuarantor['7']['house_ck_date'] != '0'): ?><span class="c-red">[查控中：<?php echo date("Y-m-d",$LoanGuarantor['7']['house_ck_date']); ?>]</span><?php endif; ?></td>
                    </tr>
                    <tr>
                        <td>车辆类</td>
                        <td><?php echo (isset($fund['car']) && ($fund['car'] !== '')?$fund['car']:''); ?><br><?php if(isset($fund['car_ck_date']) && $fund['car_ck_date'] != '0'): ?><span class="c-red">[查控中：<?php echo date("Y-m-d",$fund['car_ck_date']); ?>]</span><?php endif; ?></td>
                        <td><?php echo (isset($LoanGuarantor['0']['car']) && ($LoanGuarantor['0']['car'] !== '')?$LoanGuarantor['0']['car']:''); ?><br><?php if(isset($LoanGuarantor['0']['car_ck_date']) && $LoanGuarantor['0']['car_ck_date'] != '0'): ?><span class="c-red">[查控中：<?php echo date("Y-m-d",$LoanGuarantor['0']['car_ck_date']); ?>]</span><?php endif; ?></td>
                        <td><?php echo (isset($LoanGuarantor['1']['car']) && ($LoanGuarantor['1']['car'] !== '')?$LoanGuarantor['1']['car']:''); ?><br><?php if(isset($LoanGuarantor['1']['car_ck_date']) && $LoanGuarantor['1']['car_ck_date'] != '0'): ?><span class="c-red">[查控中：<?php echo date("Y-m-d",$LoanGuarantor['1']['car_ck_date']); ?>]</span><?php endif; ?></td>
                        <td><?php echo (isset($LoanGuarantor['2']['car']) && ($LoanGuarantor['2']['car'] !== '')?$LoanGuarantor['2']['car']:''); ?><br><?php if(isset($LoanGuarantor['2']['car_ck_date']) && $LoanGuarantor['2']['car_ck_date'] != '0'): ?><span class="c-red">[查控中：<?php echo date("Y-m-d",$LoanGuarantor['2']['car_ck_date']); ?>]</span><?php endif; ?></td>
                        <td><?php echo (isset($LoanGuarantor['3']['car']) && ($LoanGuarantor['3']['car'] !== '')?$LoanGuarantor['3']['car']:''); ?><br><?php if(isset($LoanGuarantor['3']['car_ck_date']) && $LoanGuarantor['3']['car_ck_date'] != '0'): ?><span class="c-red">[查控中：<?php echo date("Y-m-d",$LoanGuarantor['3']['car_ck_date']); ?>]</span><?php endif; ?></td>
                        <td><?php echo (isset($LoanGuarantor['4']['car']) && ($LoanGuarantor['4']['car'] !== '')?$LoanGuarantor['4']['car']:''); ?><br><?php if(isset($LoanGuarantor['4']['car_ck_date']) && $LoanGuarantor['4']['car_ck_date'] != '0'): ?><span class="c-red">[查控中：<?php echo date("Y-m-d",$LoanGuarantor['4']['car_ck_date']); ?>]</span><?php endif; ?></td>
                        <td><?php echo (isset($LoanGuarantor['5']['car']) && ($LoanGuarantor['5']['car'] !== '')?$LoanGuarantor['5']['car']:''); ?><br><?php if(isset($LoanGuarantor['5']['car_ck_date']) && $LoanGuarantor['5']['car_ck_date'] != '0'): ?><span class="c-red">[查控中：<?php echo date("Y-m-d",$LoanGuarantor['5']['car_ck_date']); ?>]</span><?php endif; ?></td>
                        <td><?php echo (isset($LoanGuarantor['6']['car']) && ($LoanGuarantor['6']['car'] !== '')?$LoanGuarantor['6']['car']:''); ?><br><?php if(isset($LoanGuarantor['6']['car_ck_date']) && $LoanGuarantor['6']['car_ck_date'] != '0'): ?><span class="c-red">[查控中：<?php echo date("Y-m-d",$LoanGuarantor['6']['car_ck_date']); ?>]</span><?php endif; ?></td>
                        <td><?php echo (isset($LoanGuarantor['7']['car']) && ($LoanGuarantor['7']['car'] !== '')?$LoanGuarantor['7']['car']:''); ?><br><?php if(isset($LoanGuarantor['7']['car_ck_date']) && $LoanGuarantor['7']['car_ck_date'] != '0'): ?><span class="c-red">[查控中：<?php echo date("Y-m-d",$LoanGuarantor['7']['car_ck_date']); ?>]</span><?php endif; ?></td>
                    </tr>
                      <tr>
                        <td>地产类</td>
                        <td><?php echo (isset($fund['land']) && ($fund['land'] !== '')?$fund['land']:''); ?><br><?php if(isset($fund['land_ck_date']) && $fund['land_ck_date'] != '0'): ?><span class="c-red">[查控中：<?php echo date("Y-m-d",$fund['land_ck_date']); ?>]</span><?php endif; ?></td>
                        <td><?php echo (isset($LoanGuarantor['0']['land']) && ($LoanGuarantor['0']['land'] !== '')?$LoanGuarantor['0']['land']:''); ?><br><?php if(isset($LoanGuarantor['0']['land_ck_date']) && $LoanGuarantor['0']['land_ck_date'] != '0'): ?><span class="c-red">[查控中：<?php echo date("Y-m-d",$LoanGuarantor['0']['land_ck_date']); ?>]</span><?php endif; ?></td>
                        <td><?php echo (isset($LoanGuarantor['1']['land']) && ($LoanGuarantor['1']['land'] !== '')?$LoanGuarantor['1']['land']:''); ?><br><?php if(isset($LoanGuarantor['1']['land_ck_date']) && $LoanGuarantor['1']['land_ck_date'] != '0'): ?><span class="c-red">[查控中：<?php echo date("Y-m-d",$LoanGuarantor['1']['land_ck_date']); ?>]</span><?php endif; ?></td>
                        <td><?php echo (isset($LoanGuarantor['2']['land']) && ($LoanGuarantor['2']['land'] !== '')?$LoanGuarantor['2']['land']:''); ?><br><?php if(isset($LoanGuarantor['2']['land_ck_date']) && $LoanGuarantor['2']['land_ck_date'] != '0'): ?><span class="c-red">[查控中：<?php echo date("Y-m-d",$LoanGuarantor['2']['land_ck_date']); ?>]</span><?php endif; ?></td>
                        <td><?php echo (isset($LoanGuarantor['3']['land']) && ($LoanGuarantor['3']['land'] !== '')?$LoanGuarantor['3']['land']:''); ?><br><?php if(isset($LoanGuarantor['3']['land_ck_date']) && $LoanGuarantor['3']['land_ck_date'] != '0'): ?><span class="c-red">[查控中：<?php echo date("Y-m-d",$LoanGuarantor['3']['land_ck_date']); ?>]</span><?php endif; ?></td>
                        <td><?php echo (isset($LoanGuarantor['4']['land']) && ($LoanGuarantor['4']['land'] !== '')?$LoanGuarantor['4']['land']:''); ?><br><?php if(isset($LoanGuarantor['4']['land_ck_date']) && $LoanGuarantor['4']['land_ck_date'] != '0'): ?><span class="c-red">[查控中：<?php echo date("Y-m-d",$LoanGuarantor['4']['land_ck_date']); ?>]</span><?php endif; ?></td>
                        <td><?php echo (isset($LoanGuarantor['5']['land']) && ($LoanGuarantor['5']['land'] !== '')?$LoanGuarantor['5']['land']:''); ?><br><?php if(isset($LoanGuarantor['5']['land_ck_date']) && $LoanGuarantor['5']['land_ck_date'] != '0'): ?><span class="c-red">[查控中：<?php echo date("Y-m-d",$LoanGuarantor['5']['land_ck_date']); ?>]</span><?php endif; ?></td>
                        <td><?php echo (isset($LoanGuarantor['6']['land']) && ($LoanGuarantor['6']['land'] !== '')?$LoanGuarantor['6']['land']:''); ?><br><?php if(isset($LoanGuarantor['6']['land_ck_date']) && $LoanGuarantor['6']['land_ck_date'] != '0'): ?><span class="c-red">[查控中：<?php echo date("Y-m-d",$LoanGuarantor['6']['land_ck_date']); ?>]</span><?php endif; ?></td>
                        <td><?php echo (isset($LoanGuarantor['7']['land']) && ($LoanGuarantor['7']['land'] !== '')?$LoanGuarantor['7']['land']:''); ?><br><?php if(isset($LoanGuarantor['7']['land_ck_date']) && $LoanGuarantor['7']['land_ck_date'] != '0'): ?><span class="c-red">[查控中：<?php echo date("Y-m-d",$LoanGuarantor['7']['land_ck_date']); ?>]</span><?php endif; ?></td>
                    </tr>
                      <tr>
                        <td>公司类</td>
                        <td><?php echo (isset($fund['company']) && ($fund['company'] !== '')?$fund['company']:''); ?><br><?php if(isset($fund['company_ck_date']) && $fund['company_ck_date'] != '0'): ?><span class="c-red">[查控中：<?php echo date("Y-m-d",$fund['company_ck_date']); ?>]</span><?php endif; ?></td>
                        <td><?php echo (isset($LoanGuarantor['0']['company']) && ($LoanGuarantor['0']['company'] !== '')?$LoanGuarantor['0']['company']:''); ?><br><?php if(isset($LoanGuarantor['0']['company_ck_date']) && $LoanGuarantor['0']['company_ck_date'] != '0'): ?><span class="c-red">[查控中：<?php echo date("Y-m-d",$LoanGuarantor['0']['company_ck_date']); ?>]</span><?php endif; ?></td>
                        <td><?php echo (isset($LoanGuarantor['1']['company']) && ($LoanGuarantor['1']['company'] !== '')?$LoanGuarantor['1']['company']:''); ?><br><?php if(isset($LoanGuarantor['1']['company_ck_date']) && $LoanGuarantor['1']['company_ck_date'] != '0'): ?><span class="c-red">[查控中：<?php echo date("Y-m-d",$LoanGuarantor['1']['company_ck_date']); ?>]</span><?php endif; ?></td>
                        <td><?php echo (isset($LoanGuarantor['2']['company']) && ($LoanGuarantor['2']['company'] !== '')?$LoanGuarantor['2']['company']:''); ?><br><?php if(isset($LoanGuarantor['2']['company_ck_date']) && $LoanGuarantor['2']['company_ck_date'] != '0'): ?><span class="c-red">[查控中：<?php echo date("Y-m-d",$LoanGuarantor['2']['company_ck_date']); ?>]</span><?php endif; ?></td>
                        <td><?php echo (isset($LoanGuarantor['3']['company']) && ($LoanGuarantor['3']['company'] !== '')?$LoanGuarantor['3']['company']:''); ?><br><?php if(isset($LoanGuarantor['3']['company_ck_date']) && $LoanGuarantor['3']['company_ck_date'] != '0'): ?><span class="c-red">[查控中：<?php echo date("Y-m-d",$LoanGuarantor['3']['company_ck_date']); ?>]</span><?php endif; ?></td>
                        <td><?php echo (isset($LoanGuarantor['4']['company']) && ($LoanGuarantor['4']['company'] !== '')?$LoanGuarantor['4']['company']:''); ?><br><?php if(isset($LoanGuarantor['4']['company_ck_date']) && $LoanGuarantor['4']['company_ck_date'] != '0'): ?><span class="c-red">[查控中：<?php echo date("Y-m-d",$LoanGuarantor['4']['company_ck_date']); ?>]</span><?php endif; ?></td>
                        <td><?php echo (isset($LoanGuarantor['5']['company']) && ($LoanGuarantor['5']['company'] !== '')?$LoanGuarantor['5']['company']:''); ?><br><?php if(isset($LoanGuarantor['5']['company_ck_date']) && $LoanGuarantor['5']['company_ck_date'] != '0'): ?><span class="c-red">[查控中：<?php echo date("Y-m-d",$LoanGuarantor['5']['company_ck_date']); ?>]</span><?php endif; ?></td>
                        <td><?php echo (isset($LoanGuarantor['6']['company']) && ($LoanGuarantor['6']['company'] !== '')?$LoanGuarantor['6']['company']:''); ?><br><?php if(isset($LoanGuarantor['6']['company_ck_date']) && $LoanGuarantor['6']['company_ck_date'] != '0'): ?><span class="c-red">[查控中：<?php echo date("Y-m-d",$LoanGuarantor['6']['company_ck_date']); ?>]</span><?php endif; ?></td>
                        <td><?php echo (isset($LoanGuarantor['7']['company']) && ($LoanGuarantor['7']['company'] !== '')?$LoanGuarantor['7']['company']:''); ?><br><?php if(isset($LoanGuarantor['7']['company_ck_date']) && $LoanGuarantor['7']['company_ck_date'] != '0'): ?><span class="c-red">[查控中：<?php echo date("Y-m-d",$LoanGuarantor['7']['company_ck_date']); ?>]</span><?php endif; ?></td>
                    </tr>
                    <tr>
                        <td>设备存货类</td>
            			<td><?php echo (isset($fund['device']) && ($fund['device'] !== '')?$fund['device']:''); ?><br><?php if(isset($fund['device_ck_date']) && $fund['device_ck_date'] != '0'): ?><span class="c-red">[查控中：<?php echo date("Y-m-d",$fund['device_ck_date']); ?>]</span><?php endif; ?></td>
                        <td><?php echo (isset($LoanGuarantor['0']['device']) && ($LoanGuarantor['0']['device'] !== '')?$LoanGuarantor['0']['device']:''); ?><br><?php if(isset($LoanGuarantor['0']['device_ck_date']) && $LoanGuarantor['0']['device_ck_date'] != '0'): ?><span class="c-red">[查控中：<?php echo date("Y-m-d",$LoanGuarantor['0']['device_ck_date']); ?>]</span><?php endif; ?></td>
                        <td><?php echo (isset($LoanGuarantor['1']['device']) && ($LoanGuarantor['1']['device'] !== '')?$LoanGuarantor['1']['device']:''); ?><br><?php if(isset($LoanGuarantor['1']['device_ck_date']) && $LoanGuarantor['1']['device_ck_date'] != '0'): ?><span class="c-red">[查控中：<?php echo date("Y-m-d",$LoanGuarantor['1']['device_ck_date']); ?>]</span><?php endif; ?></td>
                        <td><?php echo (isset($LoanGuarantor['2']['device']) && ($LoanGuarantor['2']['device'] !== '')?$LoanGuarantor['2']['device']:''); ?><br><?php if(isset($LoanGuarantor['2']['device_ck_date']) && $LoanGuarantor['2']['device_ck_date'] != '0'): ?><span class="c-red">[查控中：<?php echo date("Y-m-d",$LoanGuarantor['2']['device_ck_date']); ?>]</span><?php endif; ?></td>
                        <td><?php echo (isset($LoanGuarantor['3']['device']) && ($LoanGuarantor['3']['device'] !== '')?$LoanGuarantor['3']['device']:''); ?><br><?php if(isset($LoanGuarantor['3']['device_ck_date']) && $LoanGuarantor['3']['device_ck_date'] != '0'): ?><span class="c-red">[查控中：<?php echo date("Y-m-d",$LoanGuarantor['3']['device_ck_date']); ?>]</span><?php endif; ?></td>
                        <td><?php echo (isset($LoanGuarantor['4']['device']) && ($LoanGuarantor['4']['device'] !== '')?$LoanGuarantor['4']['device']:''); ?><br><?php if(isset($LoanGuarantor['4']['device_ck_date']) && $LoanGuarantor['4']['device_ck_date'] != '0'): ?><span class="c-red">[查控中：<?php echo date("Y-m-d",$LoanGuarantor['4']['device_ck_date']); ?>]</span><?php endif; ?></td>
                        <td><?php echo (isset($LoanGuarantor['5']['device']) && ($LoanGuarantor['5']['device'] !== '')?$LoanGuarantor['5']['device']:''); ?><br><?php if(isset($LoanGuarantor['5']['device_ck_date']) && $LoanGuarantor['5']['device_ck_date'] != '0'): ?><span class="c-red">[查控中：<?php echo date("Y-m-d",$LoanGuarantor['5']['device_ck_date']); ?>]</span><?php endif; ?></td>
                        <td><?php echo (isset($LoanGuarantor['6']['device']) && ($LoanGuarantor['6']['device'] !== '')?$LoanGuarantor['6']['device']:''); ?><br><?php if(isset($LoanGuarantor['6']['device_ck_date']) && $LoanGuarantor['6']['device_ck_date'] != '0'): ?><span class="c-red">[查控中：<?php echo date("Y-m-d",$LoanGuarantor['6']['device_ck_date']); ?>]</span><?php endif; ?></td>
                        <td><?php echo (isset($LoanGuarantor['7']['device']) && ($LoanGuarantor['7']['device'] !== '')?$LoanGuarantor['7']['device']:''); ?><br><?php if(isset($LoanGuarantor['7']['device_ck_date']) && $LoanGuarantor['7']['device_ck_date'] != '0'): ?><span class="c-red">[查控中：<?php echo date("Y-m-d",$LoanGuarantor['7']['device_ck_date']); ?>]</span><?php endif; ?></td>
                    </tr>
                    <tr>
                        <td><a href="javascript:void('0')" title="(住房公积金、个税、投资、应收款项等)">其他</a></td>
                        <td></td>
                        <td><?php echo (isset($fund['other']) && ($fund['other'] !== '')?$fund['other']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['0']['other']) && ($LoanGuarantor['0']['other'] !== '')?$LoanGuarantor['0']['other']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['1']['other']) && ($LoanGuarantor['1']['other'] !== '')?$LoanGuarantor['1']['other']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['2']['other']) && ($LoanGuarantor['2']['other'] !== '')?$LoanGuarantor['2']['other']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['3']['other']) && ($LoanGuarantor['3']['other'] !== '')?$LoanGuarantor['3']['other']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['4']['other']) && ($LoanGuarantor['4']['other'] !== '')?$LoanGuarantor['4']['other']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['5']['other']) && ($LoanGuarantor['5']['other'] !== '')?$LoanGuarantor['5']['other']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['6']['other']) && ($LoanGuarantor['6']['other'] !== '')?$LoanGuarantor['6']['other']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['7']['other']) && ($LoanGuarantor['7']['other'] !== '')?$LoanGuarantor['7']['other']:''); ?></td>
                    </tr>
                    <tr>
                        <td>优先赔偿权</td>
                        <td></td>
                        <td><?php if(isset($fund['0']['rightfirst']) && $fund['0']['rightfirst'] == 1): ?><span class="c-red">优先</span><?php endif; ?></td>
                        <td><?php if(isset($LoanGuarantor['0']['rightfirst']) && $LoanGuarantor['0']['rightfirst'] == 1): ?><span class="c-red">优先</span><?php endif; ?></td>
						<td><?php if(isset($LoanGuarantor['1']['rightfirst']) && $LoanGuarantor['1']['rightfirst'] == 1): ?><span class="c-red">优先</span><?php endif; ?></td>
						<td><?php if(isset($LoanGuarantor['2']['rightfirst']) && $LoanGuarantor['2']['rightfirst'] == 1): ?><span class="c-red">优先</span><?php endif; ?></td>
						<td><?php if(isset($LoanGuarantor['3']['rightfirst']) && $LoanGuarantor['3']['rightfirst'] == 1): ?><span class="c-red">优先</span><?php endif; ?></td>
						<td><?php if(isset($LoanGuarantor['4']['rightfirst']) && $LoanGuarantor['4']['rightfirst'] == 1): ?><span class="c-red">优先</span><?php endif; ?></td>
						<td><?php if(isset($LoanGuarantor['5']['rightfirst']) && $LoanGuarantor['5']['rightfirst'] == 1): ?><span class="c-red">优先</span><?php endif; ?></td>
						<td><?php if(isset($LoanGuarantor['6']['rightfirst']) && $LoanGuarantor['6']['rightfirst'] == 1): ?><span class="c-red">优先</span><?php endif; ?></td>
						<td><?php if(isset($LoanGuarantor['7']['rightfirst']) && $LoanGuarantor['7']['rightfirst'] == 1): ?><span class="c-red">优先</span><?php endif; ?></td>
                    </tr>
                    <tr>
                        <td colspan="2">其他关联诉讼信息</td>
                        <td><?php echo (isset($fund['inlaw']) && ($fund['inlaw'] !== '')?$fund['inlaw']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['0']['inlaw']) && ($LoanGuarantor['0']['inlaw'] !== '')?$LoanGuarantor['0']['inlaw']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['1']['inlaw']) && ($LoanGuarantor['1']['inlaw'] !== '')?$LoanGuarantor['1']['inlaw']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['2']['inlaw']) && ($LoanGuarantor['2']['inlaw'] !== '')?$LoanGuarantor['2']['inlaw']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['3']['inlaw']) && ($LoanGuarantor['3']['inlaw'] !== '')?$LoanGuarantor['3']['inlaw']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['4']['inlaw']) && ($LoanGuarantor['4']['inlaw'] !== '')?$LoanGuarantor['4']['inlaw']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['5']['inlaw']) && ($LoanGuarantor['5']['inlaw'] !== '')?$LoanGuarantor['5']['inlaw']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['6']['inlaw']) && ($LoanGuarantor['6']['inlaw'] !== '')?$LoanGuarantor['6']['inlaw']:''); ?></td>
                        <td><?php echo (isset($LoanGuarantor['7']['inlaw']) && ($LoanGuarantor['7']['inlaw'] !== '')?$LoanGuarantor['7']['inlaw']:''); ?></td>
                    </tr>
                     <tr class="text-c">
                        <td colspan="2">还款意愿</td>
                        <td><?php if(isset($fund['returnwant']) && $fund['returnwant'] == 1): ?><span class="c-red">有</span><?php endif; ?></td>
                        <td><?php if(isset($LoanGuarantor['0']['returnwant']) && $LoanGuarantor['0']['returnwant'] == 1): ?><span class="c-red">有</span><?php endif; ?></td>
						<td><?php if(isset($LoanGuarantor['1']['returnwant']) && $LoanGuarantor['1']['returnwant'] == 1): ?><span class="c-red">有</span><?php endif; ?></td>
						<td><?php if(isset($LoanGuarantor['2']['returnwant']) && $LoanGuarantor['2']['returnwant'] == 1): ?><span class="c-red">有</span><?php endif; ?></td>
						<td><?php if(isset($LoanGuarantor['3']['returnwant']) && $LoanGuarantor['3']['returnwant'] == 1): ?><span class="c-red">有</span><?php endif; ?></td>
						<td><?php if(isset($LoanGuarantor['4']['returnwant']) && $LoanGuarantor['4']['returnwant'] == 1): ?><span class="c-red">有</span><?php endif; ?></td>
						<td><?php if(isset($LoanGuarantor['5']['returnwant']) && $LoanGuarantor['5']['returnwant'] == 1): ?><span class="c-red">有</span><?php endif; ?></td>
						<td><?php if(isset($LoanGuarantor['6']['returnwant']) && $LoanGuarantor['6']['returnwant'] == 1): ?><span class="c-red">有</span><?php endif; ?></td>
						<td><?php if(isset($LoanGuarantor['7']['returnwant']) && $LoanGuarantor['7']['returnwant'] == 1): ?><span class="c-red">有</span><?php endif; ?></td>
                    </tr>
                    <tr class="text-c">
                        <td>其他说明</td>
                        <td colspan="10"><?php echo (isset($loan['qs_description']) && ($loan['qs_description'] !== '')?$loan['qs_description']:''); ?></td>
                    </tr>
                    <tr class="text-c">
                        <td>分类结果</td>
                        <td colspan="10"><?php echo (isset($loan['qs_classjg']) && ($loan['qs_classjg'] !== '')?$loan['qs_classjg']:''); ?></td>
                    </tr>
                    <tr class="text-c">
                        <td>拟清收处置<br/>措施建议</td>
                        <td colspan="10"><?php echo (isset($loan['qs_jgjy']) && ($loan['qs_jgjy'] !== '')?$loan['qs_jgjy']:''); ?></td>
                    </tr>
                    <tr class="text-c">
                        <td>调查人签字</td>
                        <td colspan="10"><span style="width:60%;display:inline-block;text-align:left;">调查人:<?php echo (isset($loan['qs_sign']) && ($loan['qs_sign'] !== '')?$loan['qs_sign']:''); ?> </span><?php if(isset($loan['qs_sign_date']) && $loan['qs_sign_date'] != 0): ?><?php echo date('Y年m月d日',$loan['qs_sign_date']); endif; ?></td>
                    </tr>
                    <tr class="text-c">
                        <td rowspan="<?php echo $Backrecordcount; ?>">清收处置工作</td>
                        <td><strong>时间</strong></td>
                        <td colspan="8"><strong>清收处置进度</strong></td>
                        <td><strong>调查人</strong></td>
                    </tr>
                    <?php if(isset($LoanBackrecordlist)): if(is_array($LoanBackrecordlist) || $LoanBackrecordlist instanceof \think\Collection || $LoanBackrecordlist instanceof \think\Paginator): $i = 0; $__LIST__ = $LoanBackrecordlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$msg): $mod = ($i % 2 );++$i;?>
                     <tr class="text-c">
                        <td><?php echo date("Y-m-d",$msg['back_time']); ?></td>
                        <td colspan="8"><?php echo $msg['process']; ?></td>
                        <td><?php echo $msg['back_name']; ?></td>
                     </tr>
					 <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                    </tr>
                </table>
		</article>
       <br><br>


    </body>
</html>




