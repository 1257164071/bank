<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:54:"D:\Xampps\htdocs\bank/app/admin\view\incredit\add.html";i:1498902699;s:46:"D:\Xampps\htdocs\bank/app/admin\view\base.html";i:1497005003;}*/ ?>
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
        <?php else: ?>
        <input type="hidden" name="client_id" value="<?php echo $incredit['client_id']; ?>" >
        <input type="hidden" name="id" value="<?php echo $incredit['id']; ?>" >
        <?php endif; ?>

      
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>合同号：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($incredit['contact_number']) && ($incredit['contact_number'] !== '')?$incredit['contact_number']:''); ?>" placeholder="合同号"  name="contact_number">
            </div>
        </div>
         <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>借据号：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($incredit['ious_number'] ) && ($incredit['ious_number']  !== '')?$incredit['ious_number'] :''); ?>" placeholder="借据号"  name="ious_number">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">担保方式：</label>
            <div class="formControls col-xs-8 col-sm-9"> 
                <input name="guarantee_way" type="radio" <?php if(isset($incredit['guarantee_way']) && $incredit['guarantee_way'] == 1): ?>checked="checked"<?php endif; ?> value="1">
				<label for="sex-1">保证</label>
				<input name="guarantee_way" type="radio" <?php if(isset($incredit['guarantee_way']) && $incredit['guarantee_way'] == 2): ?>checked="checked"<?php endif; ?> value="2">
				<label for="sex-1">抵押</label>
				<input name="guarantee_way" type="radio" <?php if(isset($incredit['guarantee_way']) && $incredit['guarantee_way'] == 3): ?>checked="checked"<?php endif; ?> value="3">
				<label for="sex-1">质押</label>
				<input name="guarantee_way" type="radio" <?php if(isset($incredit['guarantee_way']) && $incredit['guarantee_way'] == 4): ?>checked="checked"<?php endif; ?> value="4">
				<label for="sex-1">留置</label>
				<input name="guarantee_way" type="radio" <?php if(isset($incredit['guarantee_way']) && $incredit['guarantee_way'] == 5): ?>checked="checked"<?php endif; ?> value="5">
				<label for="sex-1">定金</label>
            </div>
        </div>
         <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">抵押物：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($incredit['mortgage']) && ($incredit['mortgage'] !== '')?$incredit['mortgage']:''); ?>" placeholder=""  name="mortgage">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">贷款用途：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input name="loan_using" type="radio" <?php if(isset($incredit['loan_using']) && $incredit['loan_using'] == 1): ?>checked="checked"<?php endif; ?> value="1">
				<label for="sex-1">个人贷款</label>
				<input name="loan_using" type="radio" <?php if(isset($incredit['loan_using']) && $incredit['loan_using'] == 2): ?>checked="checked"<?php endif; ?> value="2">
				<label for="sex-1">企业贷款</label>
				<input name="loan_using" type="radio" <?php if(isset($incredit['loan_using']) && $incredit['loan_using'] == 3): ?>checked="checked"<?php endif; ?> value="3">
				<label for="sex-1">房贷</label>
				<input name="loan_using" type="radio" <?php if(isset($incredit['loan_using']) && $incredit['loan_using'] == 4): ?>checked="checked"<?php endif; ?> value="4">
				<label for="sex-1">车贷</label>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>贷款金额(万元)：</label>
            <div class="formControls col-xs-8 col-sm-9">
             <?php if(isset($add) && $add==1): ?>
                <input type="text" class="input-text" value="<?php echo (isset($incredit['loan_money']) && ($incredit['loan_money'] !== '')?$incredit['loan_money']:''); ?>" placeholder="贷款金额"  name="loan_money">
             <?php else: ?>
                <input type="hidden" class="input-text" value="<?php echo (isset($incredit['loan_money']) && ($incredit['loan_money'] !== '')?$incredit['loan_money']:''); ?>" placeholder="贷款金额"  name="loan_money">
                <?php echo (isset($incredit['loan_money']) && ($incredit['loan_money'] !== '')?$incredit['loan_money']:''); endif; ?>
            </div>
        </div>

        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>发放金额（万元）：</label>
            <div class="formControls col-xs-8 col-sm-9">
            <?php if(isset($add) && $add==1): ?>
                <input type="text" class="input-text" value="<?php echo (isset($incredit['provide_loan_money']) && ($incredit['provide_loan_money'] !== '')?$incredit['provide_loan_money']:''); ?>" placeholder="发放金额"  name="provide_loan_money">
            <?php else: ?>
                <?php echo (isset($incredit['provide_loan_money']) && ($incredit['provide_loan_money'] !== '')?$incredit['provide_loan_money']:''); ?>
                  <input type="hidden" class="input-text" value="<?php echo (isset($incredit['provide_loan_money']) && ($incredit['provide_loan_money'] !== '')?$incredit['provide_loan_money']:''); ?>" placeholder="发放金额"  name="provide_loan_money">
             <?php endif; ?>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">欠息金额（万元）：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($incredit['debt_money']) && ($incredit['debt_money'] !== '')?$incredit['debt_money']:''); ?>" placeholder="欠息金额"  name="debt_money">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>执行利率：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($incredit['use_rate']) && ($incredit['use_rate'] !== '')?$incredit['use_rate']:''); ?>" placeholder="执行利率"  name="use_rate">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">发放日期：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" onfocus="WdatePicker()" value="<?php echo (isset($incredit['provide_time']) && ($incredit['provide_time'] !== '')?date('Y-m-d',$incredit['provide_time']):''); ?>"  name="provide_time"class="input-text Wdate" >
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">到期日期：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" onfocus="WdatePicker()" value="<?php echo (isset($incredit['arrive_time']) && ($incredit['arrive_time'] !== '')?date('Y-m-d',$incredit['arrive_time']):''); ?>"  name="arrive_time"class="input-text Wdate" >
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">结算日期：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" onfocus="WdatePicker()" value="<?php echo (isset($incredit['settlement_time']) && ($incredit['settlement_time'] !== '')?date('Y-m-d',$incredit['settlement_time']):''); ?>"  name="settlement_time"class="input-text Wdate" >
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">账户状态：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input name="loan_status" type="radio" <?php if(isset($incredit['loan_status']) && $incredit['loan_status'] == 1): ?>checked="checked"<?php endif; ?> value="1">
				<label for="sex-1">还款中</label>
				<input name="loan_status" type="radio" <?php if(isset($incredit['loan_status']) && $incredit['loan_status'] == 2): ?>checked="checked"<?php endif; ?> value="2">
				<label for="sex-1">还清</label>
				<input name="loan_status" type="radio" <?php if(isset($incredit['loan_status']) && $incredit['loan_status'] == 3): ?>checked="checked"<?php endif; ?> value="3">
				<label for="sex-1">逾期</label>
				<input name="loan_status" type="radio" <?php if(isset($incredit['loan_status']) && $incredit['loan_status'] == 4): ?>checked="checked"<?php endif; ?> value="4">
				<label for="sex-1">逾期-清收完成</label>
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




