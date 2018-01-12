<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:45:"F:\www\bank.cn/app/admin\view\credit\add.html";i:1498301315;s:39:"F:\www\bank.cn/app/admin\view\base.html";i:1507780640;}*/ ?>
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
        <?php if(!empty($client_id)&&isset($client_id)): ?>
        <input type="hidden" name="client_id" value="<?php echo $client_id; ?>" >
        <?php else: ?>
        <input type="hidden" name="id" value="<?php echo $credit['id']; ?>" >
        <?php endif; ?>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">授信业务品种：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <div class="radio-box">
                    <input name="credit_type" type="radio" value="1" id="credit_type-1" checked >
                    <label for="credit_type-1">表内授信</label>
                </div>
                <div class="radio-box">
                    <input type="radio" id="credit_type-2" value="2" name="credit_type" <?php echo (isset($credit['credit_type']) && ($credit['credit_type'] == '2')?'checked':''); ?>>
                    <label for="credit_type-2">表外授信</label>
                </div>
                <!--<input type="text" class="input-text" value="<?php echo (isset($credit['credit_type']) && ($credit['credit_type'] !== '')?$credit['credit_type']:''); ?>" placeholder="授信业务品种"  name="credit_type">-->
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">使用方式：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($credit['use_way']) && ($credit['use_way'] !== '')?$credit['use_way']:''); ?>" placeholder="使用方式"  name="use_way">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">授信金额(万元)：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($credit['credit_money']) && ($credit['credit_money'] !== '')?$credit['credit_money']:''); ?>" placeholder="授信金额"  name="credit_money">
            </div>
        </div>

        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">利率浮动幅度：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($credit['cate_range']) && ($credit['cate_range'] !== '')?$credit['cate_range']:''); ?>" placeholder="利率浮动幅度"  name="cate_range">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">授信起始日期：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" onfocus="WdatePicker()" value="<?php echo (isset($credit['credit_start_time']) && ($credit['credit_start_time'] !== '')?date('Y-m-d',$credit['credit_start_time']):''); ?>"  name="credit_start_time"class="input-text Wdate" >
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">授信结束日期：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" onfocus="WdatePicker()" value="<?php echo (isset($credit['credit_end_time']) && ($credit['credit_end_time'] !== '')?date('Y-m-d',$credit['credit_end_time']):''); ?>"  name="credit_end_time"class="input-text Wdate" >
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">主办客户经理：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <span class="select-box" style="width: 150px;">
					<select class="select" name="belong_user_id"  >
                        <option value="">选择操作员</option>
                        <?php if(is_array($build) || $build instanceof \think\Collection || $build instanceof \think\Paginator): $i = 0; $__LIST__ = $build;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$build): $mod = ($i % 2 );++$i;?>
                        <option  <?php if(isset($credit)&&($credit['belong_user_id']==$build['id'])): ?> selected="selected"<?php endif; ?> value="<?php echo $build['id']; ?>"><?php echo $build['real_name']; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
				</span>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">使用机构：</label>
            <div class="formControls col-xs-8 col-sm-9">
				<span class="select-box" >
					<select class="select" name="use_organization"  >
                        <option value="0">使用机构</option>
                        <?php if(is_array($bank) || $bank instanceof \think\Collection || $bank instanceof \think\Paginator): $i = 0; $__LIST__ = $bank;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$bank): $mod = ($i % 2 );++$i;?>
                        <option  <?php echo (isset($credit['use_organization'])&&($credit['use_organization']==$bank['id']))? 'selected="sleected"':'';?>  value="<?php echo $bank['id']; ?>"><?php echo $bank['bankname']; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>

                    </select>
				</span>
            </div>
        </div>
        <div class="row cl">
            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                <?php if(isset($credit)&&$credit!=''): ?>
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
            url:'<?php echo url("credit/add"); ?>',
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
            url:'<?php echo url("credit/edit"); ?>',
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




