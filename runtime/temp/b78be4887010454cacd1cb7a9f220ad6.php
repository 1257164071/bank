<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:44:"F:\www\bank.cn/app/admin\view\other\add.html";i:1507617995;s:39:"F:\www\bank.cn/app/admin\view\base.html";i:1507780640;}*/ ?>
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
    <form action="" method="post" class="form form-horizontal" id="other">

        <input type="hidden" name="client_id" value="<?php echo input('client_id'); ?>" >

        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">评级结果：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <span class="select-box" style="width: 150px;">
					<select class="select" name="class_result"  >
                        <option value="">评级结果</option>
                        <option  <?php if(isset($other['class_result'])&&$other['class_result']==1){ echo  'selected="selected"'; }?> value="1">逾期客户</option>
                        <option <?php if(isset($other['class_result'])&&$other['class_result']==2){ echo  'selected="selected"'; }?> value="2">有记录客户</option>
                        <option <?php if(isset($other['class_result'])&&$other['class_result']==3){ echo  'selected="selected"'; }?> value="3">普通客户</option>
                        <option <?php if(isset($other['class_result'])&&$other['class_result']==4){ echo  'selected="selected"'; }?> value="4">潜在客户</option>
                        <option <?php if(isset($other['class_result'])&&$other['class_result']==5){ echo  'selected="selected"'; }?> value="5">优质客户</option>
                        <option <?php if(isset($other['class_result'])&&$other['class_result']==6){ echo  'selected="selected"'; }?> value="6">金钻客户</option>
                    </select>
				</span>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">家庭总人数：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($other['family_people']) && ($other['family_people'] !== '')?$other['family_people']:''); ?>" placeholder="家庭总人数"  name="family_people">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">家庭总资产（万元）：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($other['family_money']) && ($other['family_money'] !== '')?$other['family_money']:''); ?>" placeholder="家庭总资产"  name="family_money">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">家庭总负债（万元）：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($other['family_debt']) && ($other['family_debt'] !== '')?$other['family_debt']:''); ?>" placeholder="家庭总负债"  name="family_debt">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">家庭年收入（万元）：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($other['family_year_income']) && ($other['family_year_income'] !== '')?$other['family_year_income']:''); ?>" placeholder="家庭年收入"  name="family_year_income">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">家庭年支出（万元）：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($other['family_year_spending']) && ($other['family_year_spending'] !== '')?$other['family_year_spending']:''); ?>" placeholder="家庭年支出"  name="family_year_spending">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">工资账号：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($other['wage_number']) && ($other['wage_number'] !== '')?$other['wage_number']:''); ?>" placeholder="工资账号"  name="wage_number">
            </div>
        </div>

        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">工资账号所属银行：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($other['wage_belong_bank']) && ($other['wage_belong_bank'] !== '')?$other['wage_belong_bank']:''); ?>" placeholder="工资账号所属银行"  name="wage_belong_bank">
            </div>
        </div>
        <div class="row cl">
            <div class="col-xs-8 col-sm-6 col-xs-offset-4 col-sm-offset-3">
                <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
            </div>
        </div>
        <!--<div class="row cl">-->
            <!--<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">-->
                <!--<?php if(isset($other)&&$other!=''): ?>-->
                <!--<a class="btn btn-primary radius"  onclick="edit()"> 提交</a>-->
                <!--<?php else: ?>-->
                <!--<a class="btn btn-primary radius"  onclick="add()"> 提交</a>-->
                <!--<?php endif; ?>-->
                <!--&lt;!&ndash;<input class="btn btn-primary radius" onclick="submit()" type="button" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">&ndash;&gt;-->
            <!--</div>-->
        <!--</div>-->
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
        $("#other").validate({
            rules:{
                // family_people:{
                //     required:true
                // }
                // family_money:{
                //     required:true
                // },
                // famil_debt:{
                //     required:true
                // },
                // family_year_income:{
                //     required:true
                // },
                // family_year_spending:{
                //     required:true
                // }


            },
            messages:{
                // family_people:{
                //     required:'请填写家庭总人数'
                // }
//                 family_money:{
//                     required:'请填写家庭总资产'
//                 },
// //                famil_debt:{
// //
// //                },
//                 family_year_income:{
//                     required:'请填写家庭年收入'
//                 },
//                 family_year_spending:{
//                     required:'请填写家庭年支出'
//                 }
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

//    function add(){
//        $.ajax({
//            url:'<?php echo url("other/add"); ?>',
//            type:'post',
//            data:$('form').serialize(),
//            success:function (data) {
//                if(data.code==0){
//                    layer.msg(data.msg);
//                    parent.location.reload();
//                    setTimeout("parent.layer.close(parent.layer.getFrameIndex(window.name))",2000);
//                }else{
//                    layer.msg(data.msg);
//                }
//            }
//        });
//    }
//    function edit(){
//        $.ajax({
//            url:'<?php echo url("other/edit"); ?>',
//            type:'post',
//            data:$('form').serialize(),
//            success:function (data) {
//                if(data.code==0){
//                    layer.msg(data.msg);
//                    parent.location.reload();
//                    setTimeout("parent.layer.close(parent.layer.getFrameIndex(window.name))",2000);
//                }else{
//                    layer.msg(data.msg);
//                }
//            }
//        });

   // }



</script>



    </body>
</html>




