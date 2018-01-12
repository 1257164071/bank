<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:53:"D:\Xampps\htdocs\bank/app/admin\view\deposit\add.html";i:1498301315;s:46:"D:\Xampps\htdocs\bank/app/admin\view\base.html";i:1497005003;}*/ ?>
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
        <input type="hidden" name="id" value="<?php echo $deposit['id']; ?>" >
        <?php endif; ?>

        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>账号：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($deposit['account']) && ($deposit['account'] !== '')?$deposit['account']:''); ?>" placeholder="账号"  name="account">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>存款金额：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($deposit['save_amt']) && ($deposit['save_amt'] !== '')?$deposit['save_amt']:''); ?>" placeholder="账号"  name="save_amt" style="width:90%;"> &nbsp;元&nbsp;(￥)
            </div>
        </div>
       <div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>开户银行：</label>
			<div class="formControls col-xs-8 col-sm-9"> <span class="select-box" style="width:390px;">
				<select class="select" name="bank_id" size="1">
					<option value="">==请选择==</option>
					<?php if(is_array($banklist) || $banklist instanceof \think\Collection || $banklist instanceof \think\Paginator): $i = 0; $__LIST__ = $banklist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$bank): $mod = ($i % 2 );++$i;?>
						<option value="<?php echo $bank['id']; ?>" <?php if(isset($deposit['bank_id']) && ($bank['id'] == $deposit['bank_id'])): ?>selected="selected"<?php endif; ?>><?php echo $bank['bankname']; ?></option>
						<?php if(is_array($bank['child']) || $bank['child'] instanceof \think\Collection || $bank['child'] instanceof \think\Paginator): $i = 0; $__LIST__ = $bank['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$b): $mod = ($i % 2 );++$i;?>
						    <option value="<?php echo $b['id']; ?>" <?php if(isset($deposit['bank_id']) && ($b['id'] == $deposit['bank_id'])): ?>selected="selected"<?php endif; ?> style="padding-left:30px;">|—<?php echo $b['bankname']; ?></option>
						<?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
				</select>
				</span> 
			</div>
		</div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">开户日期：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" onfocus="WdatePicker()" value="<?php echo (isset($deposit['opening_time']) && ($deposit['opening_time'] !== '')?$deposit['opening_time']:''); ?>"  name="opening_time"class="input-text Wdate" >
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">账户状态：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="radio" name="account_status" value="0" <?php if(!isset($deposit['account_status']) || $deposit['account_status'] != 1): ?>checked="checked"<?php endif; ?>>
                                          正常&nbsp;&nbsp;                        
                <input type="radio" name="account_status" value="1" <?php if(isset($deposit['account_status']) && $deposit['account_status'] == 1): ?>checked="checked"<?php endif; ?>>
                                          冻结&nbsp;&nbsp;                        
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">存款方式：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <strong>定期</strong>&nbsp;&nbsp;        
                <input type="radio" name="deposit_type" value="2" <?php if(!isset($deposit['deposit_type']) || $deposit['deposit_type'] == 2): ?>checked="checked"<?php endif; ?>>
                                          整存整取&nbsp;&nbsp;                        
                <input type="radio" name="deposit_type" value="3" <?php if(isset($deposit['deposit_type']) && $deposit['deposit_type'] == 3): ?>checked="checked"<?php endif; ?>>
                                          零存整取&nbsp;&nbsp;                        
                <input type="radio" name="deposit_type" value="4" <?php if(isset($deposit['deposit_type']) && $deposit['deposit_type'] == 4): ?>checked="checked"<?php endif; ?>>
                                          整存零取&nbsp;&nbsp;                           
                <input type="radio" name="deposit_type" value="5" <?php if(isset($deposit['deposit_type']) && $deposit['deposit_type'] == 5): ?>checked="checked"<?php endif; ?>>
                                          存本取息&nbsp;&nbsp;                          
                <input type="radio" name="deposit_type" value="6" <?php if(isset($deposit['deposit_type']) && $deposit['deposit_type'] == 6): ?>checked="checked"<?php endif; ?>>
                                          定活两便&nbsp;&nbsp;                         
                <input type="radio" name="deposit_type" value="7" <?php if(isset($deposit['deposit_type']) && $deposit['deposit_type'] == 7): ?>checked="checked"<?php endif; ?>>
                                          通知存款<br/>
                <strong>活期</strong>&nbsp;&nbsp; 
                <input type="radio" name="deposit_type" value="1" <?php if(isset($deposit['deposit_type']) && $deposit['deposit_type'] == 1): ?>checked="checked"<?php endif; ?>>
                                          活期存款
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">币种：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="radio" name="currency" value="1" checked="checked">
                                          人民币
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">存款日期：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" onfocus="WdatePicker()" value="<?php echo (isset($deposit['save_time']) && ($deposit['save_time'] !== '')?$deposit['save_time']:''); ?>"  name="save_time"class="input-text Wdate" >
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">揽存员工：</label>
            <div class="formControls col-xs-8 col-sm-9"> <span class="select-box" style="width:120px;">
				<select class="select" name="lancun_worker" size="1">
					<option value="">==请选择==</option>
					<?php if(is_array($lanchu_workers) || $lanchu_workers instanceof \think\Collection || $lanchu_workers instanceof \think\Paginator): $i = 0; $__LIST__ = $lanchu_workers;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$worker): $mod = ($i % 2 );++$i;?>
						<option value="<?php echo $worker['id']; ?>" <?php if(isset($deposit['lancun_worker']) && ($worker['id'] == $deposit['lancun_worker'])): ?>selected="selected"<?php endif; ?>><?php echo $worker['real_name']; ?></option>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
				</span> 
			</div>
        </div>

        <div class="row cl">
            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                <?php if(!empty($client_id)&&isset($client_id)): ?>
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
            url:'<?php echo url("admin/deposit/add"); ?>',
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
            url:'<?php echo url("admin/deposit/edit"); ?>',
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




