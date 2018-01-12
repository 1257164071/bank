<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:57:"F:\www\bank.cn/app/admin\view\familymember\spouseadd.html";i:1509430109;s:39:"F:\www\bank.cn/app/admin\view\base.html";i:1507780640;}*/ ?>
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
        <input type="hidden" name="id" value="<?php echo $info['id']; ?>" >
        <?php endif; ?>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>配偶名称：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($info['spouse_name']) && ($info['spouse_name'] !== '')?$info['spouse_name']:''); ?>" placeholder="配偶名称"  name="spouse_name">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">性别：</label>
            <div class="formControls col-xs-8 col-sm-9 skin-minimal">
                <div class="radio-box">
                    <input name="spouse_sex" type="radio"  value="1" id="sex-1" checked >
                    <label for="sex-1">男</label>
                </div>
                <div class="radio-box">
                    <input type="radio" id="sex-2" value="0" name="spouse_sex" <?php echo (isset($info['spouse_sex']) && ($info['spouse_sex'] == '0')?'checked':''); ?>>
                    <label for="sex-2">女</label>
                </div>

            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">证件类型：</label>
            <div class="formControls col-xs-8 col-sm-9 skin-minimal">
                <div class="radio-box">
                    <input name="card_type" type="radio"value="0"  id="card_type-1" checked  >
                    <label for="card_type-1">身份证</label>
                </div>
                <div class="radio-box">
                    <input type="radio" id="card_type-2" value="1" name="card_type" <?php echo (isset($info['card_type']) && ($info['card_type'] == '1')?'checked':''); ?> >
                    <label for="card_type-2" >其他</label>
                </div>

            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>证件号码：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($info['card_number']) && ($info['card_number'] !== '')?$info['card_number']:''); ?>" placeholder="证件号码"  name="card_number">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">出生日期：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" onfocus="WdatePicker()" value="<?php echo (isset($info['born_date']) && ($info['born_date'] !== '')?date('Y-m-d',$info['born_date']):''); ?>"  name="born_date"class="input-text Wdate" style="width:300px;">&nbsp;(例如：2017-01-01)
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">住址：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($info['address']) && ($info['address'] !== '')?$info['address']:''); ?>" placeholder="住址"  name="address">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">签发机关：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($info['issue_office']) && ($info['issue_office'] !== '')?$info['issue_office']:''); ?>" placeholder="签发机关"  name="issue_office">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">身份证有效期：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" onfocus="WdatePicker()"value="<?php echo (isset($info['valid_time']) && ($info['valid_time'] !== '')?date('Y-m-d',$info['valid_time']):''); ?>"  name="valid_time"class="input-text Wdate" style="width:300px;">&nbsp;(例如：2017-01-01)
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">联系方式（手机）：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($info['tel_number']) && ($info['tel_number'] !== '')?$info['tel_number']:''); ?>" placeholder="联系方式（手机）"  name="tel_number">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">联系方式（电话）：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($info['phone_number']) && ($info['phone_number'] !== '')?$info['phone_number']:''); ?>" placeholder="联系方式（电话）"  name="phone_number">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">工作单位：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($info['work_place']) && ($info['work_place'] !== '')?$info['work_place']:''); ?>" placeholder="工作单位"  name="work_place">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">从事职业：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($info['professional']) && ($info['professional'] !== '')?$info['professional']:''); ?>" placeholder="从事职业"  name="professional">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">健康状况：</label>
            <div class="formControls col-xs-8 col-sm-9">
             <span class="select-box" style="width: 150px;">
                <select class="select" name="physical_condition"  >
                    <option value="">健康状况</option>
                    <?php if(is_array($physical_condition) || $physical_condition instanceof \think\Collection || $physical_condition instanceof \think\Paginator): $key = 0; $__LIST__ = $physical_condition;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($key % 2 );++$key;?>
                    <option  <?php echo (isset($info['physical_condition'])&&($info['physical_condition']==$key-1))? 'selected="sleected"':'';?>  value="<?php echo $key-1; ?>"><?php echo $list; ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
             </span>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">是否有独立经济收入：</label>
            <div class="formControls col-xs-8 col-sm-9 skin-minimal">
                <div class="radio-box">
                    <input name="is_independent_income" type="radio" value="0" id="farmer-1" checked >
                    <label for="farmer-1">否</label>
                </div>
                <div class="radio-box">
                    <input type="radio" id="farmer-2" value="1" name="is_independent_income"<?php echo (isset($info['is_independent_income']) && ($info['is_independent_income'] == '1')?'checked':''); ?> >
                    <label for="farmer-2">是</label>
                </div>

            </div>
        </div>
        <div class="row cl">
            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                <?php if(isset($info)&&$info!=''): ?>
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
            url:'<?php echo url("familymember/spouseadd"); ?>',
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
            url:'<?php echo url("familymember/spouseedit"); ?>',
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




