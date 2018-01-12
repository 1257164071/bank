<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:59:"F:\www\bank.cn/app/admin\view\familymember\member_show.html";i:1509526153;s:39:"F:\www\bank.cn/app/admin\view\base.html";i:1507780640;}*/ ?>
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
<h2 style="text-align: center">成员信息</h2>
    <table class="table table-border table-bordered table-hover">
        <tr>
            <td style="width: 55px;">成员名称</td><td style="width: 200px;"><?php echo (isset($member_info['members_name']) && ($member_info['members_name'] !== '')?$member_info['members_name']:''); ?></td>
            <td style="width: 55px;">性别</td><td style="width: 200px;"><?php if($member_info['sex']==0): ?>女<?php else: ?>男<?php endif; ?></td>

        </tr>
        <tr>
            <td>民族</td><td><?php if($member_info['nation_id']==1): ?>汉族<?php else: ?>少数民族<?php endif; ?></td>
            <td>国籍</td><td><?php echo (isset($member_info['card_number']) && ($member_info['card_number'] !== '')?$member_info['card_number']:''); ?></td>
        </tr>
        <tr>
            <td>证件类型</td><td><?php if($member_info['card_type']==0): ?>身份证<?php else: ?>其他<?php endif; ?></td>
            <td>证件号码</td><td><?php echo (isset($member_info['card_number']) && ($member_info['card_number'] !== '')?$member_info['card_number']:''); ?></td>
        </tr>
        <tr>
            <td>出生日期</td><td><?php echo date('Y-m-d',$member_info['born_date']); ?></td>
            <td>住址</td><td><?php echo (isset($member_info['address']) && ($member_info['address'] !== '')?$member_info['address']:''); ?></td>
        </tr>
        <tr>
            <td>签发机关</td><td><?php echo (isset($member_info['issue_office']) && ($member_info['issue_office'] !== '')?$member_info['issue_office']:''); ?></td>
            <td>有效期限</td><td><?php echo date('Y-m-d',$member_info['valid_time']); ?></td>
        </tr>

        <tr>
            <td>联系方式（手机）</td><td><?php if(!empty($member_info['tel_number'])): ?><?php echo $member_info['tel_number']; endif; ?></td>
            <td>联系方式（电话）</td><td><?php if(!empty($member_info['phone_number'])): ?> <?php echo $member_info['phone_number']; endif; ?></td>
        </tr>
        <tr>
            <td>工作单位</td><td><?php echo (isset($member_info['work_place']) && ($member_info['work_place'] !== '')?$member_info['work_place']:''); ?></td>
            <td>从事职业</td><td><?php echo (isset($member_info['professional']) && ($member_info['professional'] !== '')?$member_info['professional']:''); ?></td>
        </tr>
        <tr>
            <td>健康状况</td><td ><?php if((!empty($member_info['physical_condition']))): ?><?php echo get_name('physical_condition',$member_info['physical_condition']); endif; ?></td>
            <td>保险情况</td><td><?php echo (isset($member_info['insurance']) && ($member_info['insurance'] !== '')?$member_info['insurance']:''); ?></td>
        </tr>
    </table>
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





</script>



    </body>
</html>




