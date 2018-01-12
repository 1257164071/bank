<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:50:"F:\www\bank.cn/app/admin\view\incredit\detail.html";i:1509933707;s:39:"F:\www\bank.cn/app/admin\view\base.html";i:1507780640;}*/ ?>
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
                 <br/>
                 <table class="table table-border table-bordered table-hover">
                     <tr>
                        <td scope="col" colspan="2" style="text-align: center;font-weight: bold;">贷款信息</td>
                    </tr>
                    <tr class="text-c">
                    	<td>业务种类</td>
                    	<td><?php if((!empty($loan['business_type']))): ?><?php echo get_name('business_type',$loan['business_type']); endif; ?></td>
                    </tr>
                    <tr class="text-c">
                    	<td>贷款账号</td>
                    	<td><?php echo $loan['loan_account']; ?></td>
                    </tr>
                    <tr class="text-c">
                    	<td>扣款账号</td>
                    	<td><?php echo $loan['koukuan_account']; ?></td>
                    </tr>
                     <tr class="text-c">
                         <td>科目号</td>
                         <td><?php echo $loan['subject_number']; ?></td>
                     </tr>
                     <tr class="text-c">
                         <td>借据号</td>
                         <td><?php echo $loan['ious_number']; ?></td>
                     </tr>
                     <tr class="text-c">
                         <td>发放时间</td>
                         <td><?php echo date("Y-m-d",$loan['provide_time_int']); ?></td>
                     </tr>
                     <tr class="text-c">
                         <td>发放金额</td>
                         <td><?php echo $loan['provide_loan_money']; ?></td>
                     </tr>
                     <tr class="text-c">
                         <td>客户号</td>
                         <td><?php echo $loan['client_number']; ?></td>
                     </tr>
                     <tr class="text-c">
                         <td>客户名称</td>
                         <td><?php echo $loan['client_name']; ?></td>
                     </tr>
                     <tr class="text-c">
                         <td>担保方式</td>
                         <td><?php echo $loan['guarantee_way']; ?></td>
                     </tr>
                     <tr class="text-c">
                         <td style="color:red;">账户形态</td>
                         <td><?php echo $loan['account_status']; ?></td>
                     </tr>
                     <tr class="text-c">
                         <td>五星分类</td>
                         <td><?php echo $loan['fivestar_type']; ?></td>
                     </tr>
                     <tr class="text-c">
                         <td>贷款形态（五级）</td>
                         <td><?php echo $loan['five_loan_form']; ?></td>
                     </tr>
                     <tr class="text-c">
                         <td>贷款形态（十级）</td>
                         <td><?php echo $loan['ten_loan_form']; ?></td>
                     </tr>
                     <tr class="text-c">
                         <td>支付方式</td>
                         <td><?php echo $loan['pay_way']; ?></td>
                     </tr>
                     <tr class="text-c">
                         <td>主营业务</td>
                         <td><?php echo $loan['main_business']; ?></td>
                     </tr>
                     <tr class="text-c">
                         <td>企业状态</td>
                         <td><?php echo $loan['holding_way']; ?></td>
                     </tr>
                     <tr class="text-c">
                         <td>控股方式</td>
                         <td><?php echo $loan['guarantee_way']; ?></td>
                     </tr>
                     <tr class="text-c">
                         <td>关系人类型</td>
                         <td><?php echo $loan['relation_type']; ?></td>
                     </tr>
                     <tr class="text-c">
                         <td>到期日</td>
                         <td><?php echo date("Y-m-d",$loan['arrive_time_int']); ?></td>
                     </tr>
                     <tr class="text-c">
                         <td>期限</td>
                         <td><?php echo $loan['time_limit']; ?></td>
                     </tr>
                     <tr class="text-c">
                         <td>展期到期时间</td>
                         <td><?php echo $loan['zhanqi_arrive_time']; ?></td>
                     </tr>
                     <tr class="text-c">
                         <td>首贷日</td>
                         <td><?php echo $loan['firstloan_time']; ?></td>
                     </tr>
                     <tr class="text-c">
                         <td>贷款用途</td>
                         <td><?php echo $loan['loan_using']; ?></td>
                     </tr>

                     <tr class="text-c">
                         <td>贷款用途说明</td>
                         <td><?php echo $loan['loan_using_detail']; ?></td>
                     </tr>
                     <tr class="text-c">
                         <td>发放类型</td>
                         <td><?php if(!empty($loan['provide_type'])): ?><?php echo get_name('provide_type',$loan['provide_type']); endif; ?></td>
                     </tr>
                     <tr class="text-c">
                         <td>利率</td>
                         <td><?php echo $loan['use_rate']; ?></td>
                     </tr>
                     <tr class="text-c">
                         <td>利率执行方式</td>
                         <td><?php if(!empty($loan['rate_runmode'])): ?><?php echo get_name('rate_runmode',$loan['rate_runmode']); endif; ?></td>
                     </tr>
                     <tr class="text-c">
                         <td>利率浮动比例</td>
                         <td><?php echo $loan['float_rate']; ?></td>
                     </tr>
                     <tr class="text-c">
                         <td>贷款余额</td>
                         <td><?php echo $loan['remian_money']; ?></td>
                     </tr>
                     <tr class="text-c">
                         <td>借新还旧次数</td>
                         <td><?php echo $loan['jxhj_number']; ?></td>
                     </tr>
                     <tr class="text-c">
                         <td>首次借新还旧日期</td>
                         <td><?php echo $loan['first_jxhj_time']; ?></td>
                     </tr>
                     <tr class="text-c">
                         <td>已收利息</td>
                         <td><?php echo $loan['yishou_interest']; ?></td>
                     </tr>
                      <tr class="text-c">
                         <td style="color:red;">本金逾期次数</td>
                         <td><?php echo $loan['outdate_number']; ?></td>
                     </tr>
                     <tr class="text-c">
                         <td>逾期本金</td>
                         <td><?php echo $loan['outdate_benji']; ?></td>
                     </tr>
                     <tr class="text-c">
                         <td>本金逾期天数</td>
                         <td><?php echo $loan['benjin_outdate_day']; ?></td>
                     </tr>
                     <tr class="text-c">
                         <td>利息逾期天数</td>
                         <td><?php echo $loan['interest_outdate_day']; ?></td>
                     </tr>
                     <tr class="text-c">
                         <td>合同金额</td>
                         <td><?php echo $loan['loan_money']; ?></td>
                     </tr>
                     <tr class="text-c">
                         <td>授权金额</td>
                         <td><?php echo $loan['shouquan_money']; ?></td>
                     </tr>
                     <tr class="text-c">
                         <td>欠息金额</td>
                         <td><?php echo $loan['debt_money']; ?></td>
                     </tr>
                     <tr class="text-c">
                         <td>表内欠息金额</td>
                         <td><?php echo $loan['intable_debt_money']; ?></td>
                     </tr>
                     <tr class="text-c">
                         <td>表外欠息金额</td>
                         <td><?php echo $loan['outtable_debt_money']; ?></td>
                     </tr>
                     <tr class="text-c">
                         <td>第一责任人</td>
                         <td><?php echo $loan['first_dutyofficer']; ?></td>
                     </tr>
                     <tr class="text-c">
                         <td>责任金额</td>
                         <td><?php echo $loan['duty_money']; ?></td>
                     </tr>
                     <tr class="text-c">
                         <td>业务号</td>
                         <td><?php echo $loan['business_number']; ?></td>
                     </tr>
                     <tr class="text-c">
                         <td>担保人</td>
                         <td><?php echo $loan['garantor']; ?></td>
                     </tr>
                     <tr class="text-c">
                         <td>主办客户经理</td>
                         <td><?php echo $loan['main_manager']; ?></td>
                     </tr>
                     <tr class="text-c">
                         <td>协办客户经理</td>
                         <td><?php echo $loan['assist_manager']; ?></td>
                     </tr>
                     <tr class="text-c">
                         <td>证件号码</td>
                         <td><?php echo $loan['card_number']; ?></td>
                     </tr>
                     <tr class="text-c">
                         <td>信用等级</td>
                         <td><?php echo $loan['credit_class']; ?></td>
                     </tr>
                     <tr class="text-c">
                         <td>结息方式</td>
                         <td><?php echo $loan['jiexi_way']; ?></td>
                     </tr>
                     <tr class="text-c">
                         <td>结清日期</td>
                         <td><?php echo $loan['jieqing_time']; ?></td>
                     </tr>
                     <tr class="text-c">
                         <td>核心入账机构</td>
                         <td><?php echo $loan['core_inorganization']; ?></td>
                     </tr>                  
                     <tr class="text-c">
                         <td>所属机构</td>
                         <td><?php echo $loan['belong_organization']; ?></td>
                     </tr>
                     <tr class="text-c">
                         <td>行业分类</td>
                         <td><?php echo $loan['hangye_class']; ?></td>
                     </tr>
                     <tr class="text-c">
                         <td>行业细分</td>
                         <td><?php echo $loan['hangye_xifen']; ?></td>
                     </tr>
                     <tr class="text-c">
                         <td>贷款天数</td>
                         <td><?php echo $loan['loan_day']; ?></td>
                     </tr>
                     <tr class="text-c">
                         <td>欠息日期</td>
                         <td><?php echo $loan['debt_time']; ?></td>
                     </tr>
                     <tr class="text-c">
                         <td>日期</td>
                         <td><?php echo $loan['date']; ?></td>
                     </tr>
                     <tr class="text-c">
                         <td>过期日期</td>
                         <td><?php echo $loan['outdate']; ?></td>
                     </tr>
                     <tr class="text-c">
                         <td>日息</td>
                         <td><?php echo $loan['daily_interest']; ?></td>
                     </tr>
                     <tr class="text-c">
                         <td>逾期</td>
                         <td><?php echo $loan['outdate_money']; ?></td>
                     </tr>
                     <tr class="text-c">
                         <td>首次欠息日期</td>
                         <td><?php echo $loan['first_debt_time']; ?></td>
                     </tr>
                     <tr class="text-c">
                         <td>欠息天数</td>
                         <td><?php echo $loan['debt_day']; ?></td>
                     </tr>
                     <tr class="text-c">
                         <td style="colorred;">欠息次数</td>
                         <td><?php echo $loan['debt_number']; ?></td>
                     </tr>
                     <tr class="text-c">
                         <td>逾期天数</td>
                         <td><?php echo $loan['outdate_day']; ?></td>
                     </tr>
                     <tr class="text-c">
                         <td>联系电话</td>
                         <td><?php echo $loan['contact_phone']; ?></td>
                     </tr>
                     <tr class="text-c">
                         <td>对私移动电话</td>
                         <td><?php echo $loan['duisi_phone']; ?></td>
                     </tr>
                     <tr class="text-c">
                         <td>通讯地址</td>
                         <td><?php echo $loan['corresponding_address']; ?></td>
                     </tr>
                     <tr class="text-c">
                         <td>居住地址</td>
                         <td><?php echo $loan['address']; ?></td>
                     </tr>
                     <tr class="text-c">
                         <td>比种</td>
                         <td><?php echo $loan['currency']; ?></td>
                     </tr>
                     <tr class="text-c">
                         <td>特色产品</td>
                         <td><?php echo $loan['tese_product']; ?></td>
                     </tr>

                 </table>
                 <br>
         <div class="cl pd-5  bk-gray">
        <span>  <?php if(count($Guarantorlist) < 7){ ?><a href="javascript:;" onclick="guarantor_add('添加担保人','<?php echo url('admin/incredit/guarantoradd',array('client_id'=>$client_id,'loan_id'=>$loan_id)); ?>','600','500')" class="btn btn-primary radius">添加担保人</a><?php }else{ ?>至多可以添加6个担保人<?php } ?> </span>
        <!-- <span>共有：<strong><?php echo count($Guarantorlist);?></strong> 个</span> -->
        &nbsp;&nbsp;
        <span>  <a href="javascript:;" onclick="backrecord_add('添加清收记录','<?php echo url('admin/incredit/backrecordadd',array('loan_id'=>$loan_id)); ?>','600','500')" class="btn btn-primary radius">添加清收记录</a> </span>
        <!-- <span>共有：<strong><?php echo count($backrecordlist);?></strong> 个</span> -->
        <span>  <a href="javascript:;" onclick="backrecord_add('添加贷款涉诉状态','<?php echo url('admin/incredit/dkss_add',array('loan_id'=>$loan_id)); ?>','600','500')" class="btn btn-primary radius">涉诉状态</a> </span>

        <span>  <a href="javascript:;" onclick="backrecord_add('添加审理情况','<?php echo url('admin/incredit/loan_shenli_add',array('loan_id'=>$loan_id)); ?>','600','500')" class="btn btn-primary radius">审理情况</a> </span>

        <span>  <a href="javascript:;" onclick="backrecord_add('添加执行情况','<?php echo url('admin/incredit/loan_zhixing_add',array('loan_id'=>$loan_id)); ?>','600','500')" class="btn btn-primary radius">执行情况</a> </span>

        <span>  <a href="javascript:;" onclick="backrecord_add('添加保全情况','<?php echo url('admin/incredit/loan_baoquan_add',array('loan_id'=>$loan_id)); ?>','600','500')" class="btn btn-primary radius">保全情况</a> </span>
    </div>
        <div class="mt-20">
            <table class="table table-border table-bordered table-hover table-bg table-sort">
                <thead>
                    <tr>
                        <td scope="col" colspan="9" style="text-align: center;font-weight: bold;">担保人列表</td>
                    </tr>
                    <tr class="text-c">
                        <td style="display:none;"></td>
                        <td>姓名</td>
                        <td>性别</td>
                        <td>身份关系</td>
                        <td>身份证号</td>
                        <td>单位</td>
                        <td>地址</td>
                        <td>优先赔偿</td>
                        <td>还款意愿</td>
                        <td>操作</td>
                    </tr>
                </thead>
                <tbody>
                    <?php if(is_array($Guarantorlist) || $Guarantorlist instanceof \think\Collection || $Guarantorlist instanceof \think\Paginator): $i = 0; $__LIST__ = $Guarantorlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$msg): $mod = ($i % 2 );++$i;?>
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
                        <td class="td-status">
                        <a title="编辑" href="javascript:;" onclick="guarantor_edit('管理员编辑','<?php echo url('admin/incredit/guarantoredit',array('id'=>$msg['id'])); ?>','1','600','500')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i> 编辑</a>
                        <a title="删除" href="javascript:;" onclick="guarantor_del(this,'<?php echo $msg['id']; ?>')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i> 删除</a>
                        </td>
                    </tr>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>
        </div>
        <!-- 担保人 -->
        <br>
        <!-- 清收记录 -->
        <div class="mt-20">
            <table class="table table-border table-bordered table-hover table-bg table-sort">
                <thead>
                    <tr>
                        <td scope="col" colspan="9" style="text-align: center;font-weight: bold;">清收列表</td>
                    </tr>
                    <tr class="text-c">
                        <td style="display:none;"></td>
                        <td>清收时间</td>
                        <td>清收处置进度</td>
                        <td>调查人</td>
                        <td>录入时间</td>
                        <td>操作</td>
                    </tr>
                </thead>
                <tbody>
                    <?php if(is_array($backrecordlist) || $backrecordlist instanceof \think\Collection || $backrecordlist instanceof \think\Paginator): $i = 0; $__LIST__ = $backrecordlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$msg): $mod = ($i % 2 );++$i;?>
                    <tr class="text-c">
                        <td style="display:none;"><input type="checkbox" name="id[]" value="<?php echo $msg['id']; ?>"></td>
                        <td><?php echo date("Y-m-d",$msg['back_time']); ?></td>
                        <td><?php echo $msg['process']; ?></td>
                        <td><?php echo $msg['back_name']; ?></td>
                        <td><?php echo date("Y-m-d",$msg['addtime']); ?></td>
                        <td class="td-status">
                        <a title="编辑" href="javascript:;" onclick="backrecord_edit('编辑','<?php echo url('admin/incredit/backrecordedit',array('id'=>$msg['id'])); ?>','1','800','500')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i> 编辑</a>
                        <a title="删除" href="javascript:;" onclick="backrecord_del(this,'<?php echo $msg['id']; ?>')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i> 删除</a>
                        </td>
                    </tr>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>
        </div>
        <!-- 清收记录 -->
        <br>
          <!-- 贷款涉诉状态 -->
    <?php if(!empty($loan_ss_info)): ?>
    <div class="mt-20">
        <table class="table table-border table-bordered table-hover table-bg table-sort">
            <thead>
            <tr>
                <td scope="col" colspan="9" style="text-align: center;font-weight: bold;">贷款涉诉状态</td>
            </tr>
            <tr class="text-c">
                <th style="display:none;"></th>
                <th>诉前审查</th>
                <th>一审</th>
                <th>上诉</th>
                <th>申请执行</th>
                <th>执行异议</th>
                <th>检察院检察</th>
                <th>其他</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            <tr class="text-c">
                <td style="display:none;"></td>
                <td><?php echo date('Y-m-d',$loan_ss_info['sqshencha']); ?></td>
                <td><?php if($loan_ss_info['yishen']==1): ?>再审<?php else: ?>重审<?php endif; ?></td>
                <td><?php if($loan_ss_info['shangsu']==1): ?>再审<?php else: ?>重审<?php endif; ?></td>
                <td><?php if($loan_ss_info['sqzhixing']==1): ?>是<?php else: ?>否<?php endif; ?></td>
                <td><?php if($loan_ss_info['zxyiyi']==1): ?>是<?php else: ?>否<?php endif; ?></td>
                <td><?php echo $loan_ss_info['jcyjiancha']; ?></td>
                <td><?php echo $loan_ss_info['ss_other']; ?></td>
                <td>
                    <a href="javascript:;" onclick="backrecord_add('修改贷款涉诉状态','<?php echo url('admin/incredit/loan_ss_edit',array('id'=>$loan_ss_info['id'])); ?>','600','500')" ><i class="Hui-iconfont">&#xe6df;</i>编辑</a>
                    <a title="删除" href="<?php echo url('loan_ss_del',array('id'=>$loan_ss_info['id'])); ?>" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i>删除</a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <?php endif; ?>
    <!-- 贷款涉诉状态 -->
    <!--审理情况开始-->
    <?php if(!empty($loan_shenli_info)): ?>
    <div class="mt-20">
        <table class="table table-border table-bordered table-hover table-bg table-sort">
            <thead>
            <tr>
                <td scope="col" colspan="9" style="text-align: center;font-weight: bold;">审理情况</td>
            </tr>
            </thead>
            <thead>
            <tr class="text-c" >
                <th>贷款形态</th>
                <th>起诉标的</th>
                <th>立案时间</th>
                <th>审理案号</th>
                <th>受理法院</th>
                <th>案件负责人</th>
            </tr>
            </thead>
            <tbody>
            <tr class="text-c">
                <td><?php if((!empty($loan_shenli_info['account_status']))): ?><?php echo get_name('account_status',$loan_shenli_info['account_status']); endif; ?></td>
                <td><?php echo $loan_shenli_info['qsbiaodi']; ?></td>
                <td><?php echo date('Y-m-d',$loan_shenli_info['lian_time']); ?></td>
                <td><?php echo $loan_shenli_info['shenli_anhao']; ?></td>
                <td><?php echo $loan_shenli_info['shouli_fayuan']; ?></td>
                <td><?php echo $loan_shenli_info['anjian_fzr']; ?></td>


            </tr>
            </tbody>
            <thead>
            <tr class="text-c">
                <th>经办人</th>
                <th>经办法官</th>
                <th>诉讼费</th>
                <th>开庭送达时间</th>
                <th>开庭时间</th>
                <th>撤诉或驳回</th>
            </tr>
            </thead>
            <tbody>
            <tr class="text-c">
                <td><?php echo $loan_shenli_info['jingbanren']; ?></td>
                <td><?php echo $loan_shenli_info['jingbanfg']; ?></td>
                <td><?php echo $loan_shenli_info['susongfei']; ?></td>
                <td><?php echo date('Y-m-d',$loan_shenli_info['ktsd_time']); ?></td>
                <td><?php echo date('Y-m-d',$loan_shenli_info['kt_time']); ?></td>
                <td><?php if(!empty($loan_shenli_info['csbh'])&&$loan_shenli_info['csbh']==1): ?>撤诉<?php elseif($loan_shenli_info['csbh']==2): ?>撤诉<?php endif; ?></td>


            </tr>
            </tbody>
            <thead>
            <tr class="text-c">
                <th>判决或调解</th>
                <th>判决结果</th>
                <th>判决(调解)时间</th>
                <th>判决送达时间</th>
                <th>上诉时间</th>
                <th>再、重审案号</th>
            </tr>
            </thead>
            <tbody>
            <tr class="text-c">
                <td><?php if(!empty($loan_shenli_info['pjtiaojie'])&&$loan_shenli_info['pjtiaojie']==1): ?>判决<?php elseif($loan_shenli_info['pjtiaojie']==2): ?>调解<?php endif; ?></td>
                <td><?php if(!empty($loan_shenli_info['pjjieguo'])&&$loan_shenli_info['pjjieguo']==1): ?>胜诉<?php elseif($loan_shenli_info['pjjieguo']==2): ?>全部败诉<?php elseif($loan_shenli_info['pjjieguo']==3): ?>部分败诉<?php endif; ?></td>
                <td><?php echo date('Y-m-d',$loan_shenli_info['pj_time']); ?></td>
                <td><?php echo date('Y-m-d',$loan_shenli_info['pjsd_time']); ?></td>
                <td><?php echo date('Y-m-d',$loan_shenli_info['ss_time']); ?></td>
                <td><?php echo $loan_shenli_info['zsanhao']; ?></td>


            </tr>
            </tbody>
            <thead>
            <tr class="text-c">
                <th>判决生效时间</th>
                <th>操作</th><th colspan="4"> </th>
            </tr>
            </thead>
            <tbody>
            <tr class="text-c">
                <td><?php echo date('Y-m-d',$loan_shenli_info['pjsx_time']); ?></td>
                <td>
                    <a href="javascript:;" onclick="backrecord_add('修改审理情况','<?php echo url('admin/incredit/loan_shenli_edit',array('id'=>$loan_shenli_info['id'])); ?>','600','500')" ><i class="Hui-iconfont">&#xe6df;</i>编辑</a>
                    <a title="删除" href="<?php echo url('loan_shenli_del',array('id'=>$loan_shenli_info['id'])); ?>" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i>删除</a>
                </td>
                <td colspan="4"> </td>
            </tr>
            </tbody>



        </table>
    </div>
    <?php endif; ?>
    <!-- 审理情况结束 -->
    <!-- 执行情况开始 -->
    <?php if(!empty($loan_zhixing_info)): ?>
    <div class="mt-20">
        <table class="table table-border table-bordered table-hover table-bg table-sort">
            <thead>
            <tr>
                <td scope="col" colspan="9" style="text-align: center;font-weight: bold;">执行情况</td>
            </tr>
            </thead>
            <thead>
            <tr class="text-c" >
                <th>执行标的</th>
                <th>申请执行时间</th>
                <th>执行案号</th>
                <th>经办人</th>
                <th>经办法官</th>
                <th>执行送达时间</th>
            </tr>
            </thead>
            <tbody>
            <tr class="text-c" >
                <td><?php echo $loan_zhixing_info['zzbiaodi']; ?></td>
                <td><?php echo date('Y-m-d',$loan_zhixing_info['sszx_time']); ?></td>
                <td><?php echo $loan_zhixing_info['zx_anhao']; ?></td>
                <td><?php echo $loan_zhixing_info['zxjingbanren']; ?></td>
                <td><?php echo $loan_zhixing_info['zxjbfg']; ?></td>
                <td><?php echo date('Y-m-d',$loan_zhixing_info['zxsd_time']); ?></td>
            </tr>
            </tbody>
            <thead>
            <tr class="text-c" >
                <th>是否提出执行异议</th>
                <th>执行异议内容</th>
                <th>回收标的</th>
                <th>未回收标的</th>
                <th>终结本次执行时间</th>
                <th>恢复执行时间</th>
            </tr>
            </thead>
            <tbody>
            <tr class="text-c" >
                <td><?php if(!empty($loan_zhixing_info['has_zxyy'])&&$loan_zhixing_info['has_zxyy']==1): ?>是<?php else: ?>否<?php endif; ?></td>
                <td><?php echo $loan_zhixing_info['zxyy_content']; ?></td>
                <td><?php echo $loan_zhixing_info['shbiaodi']; ?></td>
                <td><?php echo $loan_zhixing_info['wshbiaodi']; ?></td>
                <td><?php echo date('Y-m-d',$loan_zhixing_info['zjbczx_time']); ?></td>
                <td><?php echo date('Y-m-d',$loan_zhixing_info['hfzx_time']); ?></td>
            </tr>
            </tbody>
            <thead>
            <tr class="text-c" >
                <th>终结执行时间</th>
                <th>操作</th>
                <th colspan="4"> </th>
            </tr>
            </thead>
            <tbody>
            <tr class="text-c" >
                <td><?php echo date('Y-m-d',$loan_zhixing_info['zjzx_time']); ?></td>
                <td>
                    <a href="javascript:;" onclick="backrecord_add('修改执行情况','<?php echo url('admin/incredit/loan_zhixing_edit',array('id'=>$loan_zhixing_info['id'])); ?>','600','500')" ><i class="Hui-iconfont">&#xe6df;</i>编辑</a>
                    <a title="删除" href="<?php echo url('loan_zhixing_del',array('id'=>$loan_zhixing_info['id'])); ?>" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i>删除</a>
                </td>
                <td colspan="4"></td>
            </tr>
            </tbody>
        </table>
    </div>
    <?php endif; ?>
    <!-- 执行情况结束 -->
        <!-- 保全情况 -->
    <?php if(!empty($loan_baoquan_info)): ?>
    <div class="mt-20">
        <table class="table table-border table-bordered table-hover table-bg table-sort">
            <thead>
            <tr>
                <td scope="col" colspan="9" style="text-align: center;font-weight: bold;">保全情况</td>
            </tr>
            </thead>
            <thead>
            <tr class="text-c" >
                <th>保全标的</th>
                <th>查封财产类别</th>
                <th>查封起日</th>
                <th>查封止日</th>
                <th>续封止日</th>
                <th>是否提出财产保全异议</th>
                <th>操作</th>
            </tr>
            </thead>
            <?php if(is_array($loan_baoquan_info) || $loan_baoquan_info instanceof \think\Collection || $loan_baoquan_info instanceof \think\Paginator): $i = 0; $__LIST__ = $loan_baoquan_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$loan_baoquan_info): $mod = ($i % 2 );++$i;?>
            <tbody>
            <tr  class="text-c">
                <td><a style="color: blue;" href="javascript:;" onclick="backrecord_add('保全情况详情','<?php echo url('admin/incredit/loan_baoquan_detail',array('id'=>$loan_baoquan_info['id'])); ?>','600','500')" ><?php echo $loan_baoquan_info['bqbiaodi']; ?></a></td>
                <td><?php if((!empty($loan_baoquan_info['cfcc_type']))): ?><?php echo get_name('cfcc_type',$loan_baoquan_info['cfcc_type']); endif; ?></td>
                <td><?php echo date('Y-m-d',$loan_baoquan_info['cfqr_time']); ?></td>
                <td><?php echo date('Y-m-d',$loan_baoquan_info['cfzr_time']); ?></td>
                <td><?php echo date('Y-m-d',$loan_baoquan_info['xfzr_time']); ?></td>
                <td><?php if(!empty($loan_baoquan_info['is_bqyy'])&&$loan_baoquan_info['is_bqyy']==1): ?>是<?php else: ?>否<?php endif; ?></td>
                <td>
                    <a href="javascript:;" onclick="backrecord_add('修改保全情况','<?php echo url('admin/incredit/loan_baoquan_edit',array('id'=>$loan_baoquan_info['id'])); ?>','600','500')" ><i class="Hui-iconfont">&#xe6df;</i>编辑</a>
                    <a title="删除" href="<?php echo url('loan_baoquan_del',array('id'=>$loan_baoquan_info['id'])); ?>" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i>删除</a>
                </td>
            </tr>
            </tbody>
            <?php endforeach; endif; else: echo "" ;endif; ?>
          
        </table>
    </div>
    <?php endif; ?>
    <!-- 保全情况 -->
		</article>

      

<script type="text/javascript" src="/static/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/static/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">

function guarantor_add(title,url,w,h){
    layer_show(title,url,w,h);
}
/*删除*/
function guarantor_del(obj,id){
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
function guarantor_edit(title,url,id,w,h){
    layer_show(title,url,w,h);
}
/*清收记录-编辑*/
function backrecord_add(title,url,w,h){
    layer_show(title,url,w,h);
}

function backrecord_edit(title,url,id,w,h){
    layer_show(title,url,w,h);
}
/*删除*/
function backrecord_del(obj,id){
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


</script>


    </body>
</html>




