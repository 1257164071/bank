<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:43:"F:\www\bank.cn/app/admin\view\sign\add.html";i:1499150200;s:39:"F:\www\bank.cn/app/admin\view\base.html";i:1507780640;}*/ ?>
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
        <?php if(!empty($client_id)&&(isset($client_id))): ?>
        <input type="hidden" name="client_id" value="<?php echo $client_id; ?>" >
        <?php else: ?>
        <input type="hidden" name="id" value="<?php echo input('sign_id'); ?>" >
        <?php endif; ?>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">签约网点：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <span class="select-box" style="width: 350px;">
					<select class="select" name="sign_website_number"  >
                        <option value="">==请选择==</option>
                        <?php if(is_array($bank) || $bank instanceof \think\Collection || $bank instanceof \think\Paginator): $i = 0; $__LIST__ = $bank;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$name): $mod = ($i % 2 );++$i;?>
                        <option  <?php if(isset($sign)&&($sign['sign_website_number']==$name['id'])): ?> selected="selected"<?php endif; ?> value="<?php echo $name['id']; ?>"><?php echo $name['bankname']; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
				</span>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">签约类型：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <span class="select-box" style="width: 150px;">
					<select class="select" name="sign_type"  >
                        <option value="">==请选择==</option>
                        <?php if(is_array($sign_type) || $sign_type instanceof \think\Collection || $sign_type instanceof \think\Paginator): $key = 0; $__LIST__ = $sign_type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sign_type): $mod = ($key % 2 );++$key;?>
                        <option  <?php if(isset($sign)&&($sign['sign_type']==$key-1)): ?> selected="selected"<?php endif; ?> value="<?php echo $key-1; ?>"><?php echo $sign_type; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
				</span>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">签约时间：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" onfocus="WdatePicker()" value="<?php echo (isset($sign['sign_time']) && ($sign['sign_time'] !== '')?date('Y-m-d',$sign['sign_time']):''); ?>"  name="sign_time"class="input-text Wdate" >
            </div>
        </div>
      
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">加挂账号信息：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($sign['other_account_content']) && ($sign['other_account_content'] !== '')?$sign['other_account_content']:''); ?>" placeholder="加挂账号信息"  name="other_account_content">
            </div>
        </div>



        <div class="row cl">
            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                <?php if(isset($sign)&&$sign!=''): ?>
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
    $(function(){
        $('.skin-minimal input').iCheck({
            checkboxClass: 'icheckbox-blue',
            radioClass: 'iradio-blue',
            increaseArea: '20%'
        });


    });

    function add(){
        $.ajax({
            url:'<?php echo url("sign/add"); ?>',
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
            url:'<?php echo url("sign/edit"); ?>',
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




