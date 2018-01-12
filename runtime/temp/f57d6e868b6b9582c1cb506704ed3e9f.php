<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:48:"F:\www\bank.cn/app/admin\view\user\edit_pwd.html";i:1508228038;s:39:"F:\www\bank.cn/app/admin\view\base.html";i:1507780640;}*/ ?>
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
    <form action="" method="post" class="form form-horizontal" id="form-admin-add">
        <input type="hidden" name="user_id" value="<?php echo $user_id; ?>" >
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-2"><span class="c-red">*</span>用户名：</label>
            <div class="formControls col-xs-9 col-sm-10" >
                <input type="text" class="input-text" disabled="disabled" value="<?php echo \think\Session::get('user.username'); ?>"   name="username" >
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-2">原始密码：</label>
            <div class="formControls col-xs-9 col-sm-10">
                <input type="password" class="input-text" autocomplete="off" value="" placeholder="原始密码" name="password">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-2">新密码：</label>
            <div class="formControls col-xs-9 col-sm-10">
                <input type="password" class="input-text" autocomplete="off" value="" placeholder="新密码"  name="repwd1">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-2">确认密码：</label>
            <div class="formControls col-xs-9 col-sm-10">
                <input type="password" class="input-text" autocomplete="off"  placeholder="确认新密码"  name="repwd2">
            </div>
        </div>





        <div class="row cl">
            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
                <a href="javascript:" class="btn btn-default radius"  onclick="layer_close()"> 取消</a>
            </div>
        </div>
    </form>
</article>



<!--请在下方写此页面业务相关的脚本-->
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

        $("#form-admin-add").validate({

        onkeyup:false,
                focusCleanup:true,
                success:"valid",
                submitHandler:function(form){
            var $form = $(form);
            $.ajax({
                url:'<?php echo url("admin/user/edit_pwd"); ?>',
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
    });

    })


    $(document).ready(function(){
        check();
    });
    function check(){
        $('#username').blur(function(){
            var a=$(this).val();
            var changUrl="<?php echo url('admin/admin/namecheck'); ?>";
            $.post(changUrl,{username:a},function(str){
                if(str=='1'){
                    $('#uname').append("<label id=\"username-error\" class=\"error\" for=\"username\">您输入的用户名已存在，请重新输入</label>");
                }
            });
        });
    }

</script>



    </body>
</html>




