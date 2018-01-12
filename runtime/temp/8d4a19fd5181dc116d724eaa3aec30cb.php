<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:46:"F:\www\bank.cn/app/admin\view\finance\add.html";i:1509610244;s:39:"F:\www\bank.cn/app/admin\view\base.html";i:1507780640;}*/ ?>
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
        <input type="hidden" name="id" value="<?php echo $finance_info['id']; ?>" >
        <?php endif; ?>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">家庭总资产：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($finance_info['total_assets']) && ($finance_info['total_assets'] !== '')?$finance_info['total_assets']:''); ?>" placeholder="家庭总资产"  name="total_assets">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">家庭总负债：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($finance_info['total_debt']) && ($finance_info['total_debt'] !== '')?$finance_info['total_debt']:''); ?>" placeholder="家庭总负债"  name="total_debt">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">个人月收入：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($finance_info['month_income']) && ($finance_info['month_income'] !== '')?$finance_info['month_income']:''); ?>" placeholder="个人月收入"  name="month_income">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">年总收入：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($finance_info['year_income']) && ($finance_info['year_income'] !== '')?$finance_info['year_income']:''); ?>" placeholder="年总收入"  name="year_income">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">年总支出：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($finance_info['year_expend']) && ($finance_info['year_expend'] !== '')?$finance_info['year_expend']:''); ?>" placeholder="年总支出"  name="year_expend">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">收入项目：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <span class="select-box" style="width: 150px;">
					<select class="select" name="income_project"  >
                        <option value="">==请选择==</option>
                        <?php if(is_array($income_project) || $income_project instanceof \think\Collection || $income_project instanceof \think\Paginator): $key = 0; $__LIST__ = $income_project;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($key % 2 );++$key;?>
                        <option  <?php if(isset($finance_info)&&($finance_info['income_project']==$key-1)): ?> selected="selected"<?php endif; ?> value="<?php echo $key-1; ?>"><?php echo $list; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
				</span>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">年均收入金额：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($finance_info['annual_income']) && ($finance_info['annual_income'] !== '')?$finance_info['annual_income']:''); ?>" placeholder="年均收入金额"  name="annual_income">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">日常支出：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($finance_info['daily_spending']) && ($finance_info['daily_spending'] !== '')?$finance_info['daily_spending']:''); ?>" placeholder="日常支出"  name="daily_spending">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">教育支出：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($finance_info['education_spending']) && ($finance_info['education_spending'] !== '')?$finance_info['education_spending']:''); ?>" placeholder="教育支出"  name="education_spending">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">医疗保健支出：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($finance_info['yiliao_spending']) && ($finance_info['yiliao_spending'] !== '')?$finance_info['yiliao_spending']:''); ?>" placeholder="医疗保健支出"  name="yiliao_spending">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">赡养老人支出：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($finance_info['support']) && ($finance_info['support'] !== '')?$finance_info['support']:''); ?>" placeholder="赡养老人支出"  name="support">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">其他支出：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($finance_info['other_spending']) && ($finance_info['other_spending'] !== '')?$finance_info['other_spending']:''); ?>" placeholder="其他支出"  name="other_spending">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">年均支出金额：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($finance_info['annual_spending']) && ($finance_info['annual_spending'] !== '')?$finance_info['annual_spending']:''); ?>" placeholder="年均支出金额"  name="annual_spending">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">行内借款：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($finance_info['hangnei_jiekuan']) && ($finance_info['hangnei_jiekuan'] !== '')?$finance_info['hangnei_jiekuan']:''); ?>" placeholder="行内借款"  name="hangnei_jiekuan">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">他行借款：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($finance_info['tahang_jiekuan']) && ($finance_info['tahang_jiekuan'] !== '')?$finance_info['tahang_jiekuan']:''); ?>" placeholder="他行借款"  name="tahang_jiekuan">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">民间借贷：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($finance_info['minjian_jiedai']) && ($finance_info['minjian_jiedai'] !== '')?$finance_info['minjian_jiedai']:''); ?>" placeholder="民间借贷"  name="minjian_jiedai">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">信用卡透支：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($finance_info['creditcard_touzhi']) && ($finance_info['creditcard_touzhi'] !== '')?$finance_info['creditcard_touzhi']:''); ?>" placeholder="信用卡透支"  name="creditcard_touzhi">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">应付账款：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($finance_info['yingfu_zhangkuan']) && ($finance_info['yingfu_zhangkuan'] !== '')?$finance_info['yingfu_zhangkuan']:''); ?>" placeholder="应付账款"  name="yingfu_zhangkuan">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">预收账款：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($finance_info['yushou_zhangkuan']) && ($finance_info['yushou_zhangkuan'] !== '')?$finance_info['yushou_zhangkuan']:''); ?>" placeholder="预收账款"  name="yushou_zhangkuan">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">其他负债：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($finance_info['other_fuzhai']) && ($finance_info['other_fuzhai'] !== '')?$finance_info['other_fuzhai']:''); ?>" placeholder="其他负债"  name="other_fuzhai">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">房产：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <span class="select-box" style="width: 150px;">
					<select class="select" name="house"  >
                        <option value="">==请选择==</option>
                        <?php if(is_array($house) || $house instanceof \think\Collection || $house instanceof \think\Paginator): $key = 0; $__LIST__ = $house;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($key % 2 );++$key;?>
                        <option  <?php if(isset($finance_info)&&($finance_info['house']==$key-1)): ?> selected="selected"<?php endif; ?> value="<?php echo $key-1; ?>"><?php echo $list; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
				</span>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">土地：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <span class="select-box" style="width: 150px;">
					<select class="select" name="land"  >
                        <option value="">==请选择==</option>
                        <?php if(is_array($land) || $land instanceof \think\Collection || $land instanceof \think\Paginator): $key = 0; $__LIST__ = $land;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($key % 2 );++$key;?>
                        <option  <?php if(isset($finance_info)&&($finance_info['land']==$key-1)): ?> selected="selected"<?php endif; ?> value="<?php echo $key-1; ?>"><?php echo $list; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
				</span>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">现金：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($finance_info['cash']) && ($finance_info['cash'] !== '')?$finance_info['cash']:''); ?>" placeholder="现金"  name="cash">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">存款：</label>
            <div class="formControls col-xs-8 col-sm-9 skin-minimal">
                <div class="radio-box">
                    <input type="radio" id="is_poor-2" value="1" name="deposit" checked>
                    <label for="is_poor-2">本行存款</label>
                </div>
                <div class="radio-box">
                    <input name="deposit" type="radio"  value="2" id="is_poor-1" <?php echo (isset($client['guding_work']) && ($client['guding_work'] == '2')?'checked':''); ?> >
                    <label for="is_poor-1">他行存款</label>
                </div>


            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">车辆：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <span class="select-box" style="width: 150px;">
					<select class="select" name="car"  >
                        <option value="">==请选择==</option>
                        <?php if(is_array($car) || $car instanceof \think\Collection || $car instanceof \think\Paginator): $key = 0; $__LIST__ = $car;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($key % 2 );++$key;?>
                        <option  <?php if(isset($finance_info)&&($finance_info['car']==$key-1)): ?> selected="selected"<?php endif; ?> value="<?php echo $key-1; ?>"><?php echo $list; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
				</span>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">股权：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($finance_info['equity']) && ($finance_info['equity'] !== '')?$finance_info['equity']:''); ?>" placeholder="股权"  name="equity">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">机械设备：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($finance_info['equipment']) && ($finance_info['equipment'] !== '')?$finance_info['equipment']:''); ?>" placeholder="机械设备"  name="equipment">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">存货：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($finance_info['inventory']) && ($finance_info['inventory'] !== '')?$finance_info['inventory']:''); ?>" placeholder="存货"  name="inventory">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">应收账款：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($finance_info['accounts_receivable']) && ($finance_info['accounts_receivable'] !== '')?$finance_info['accounts_receivable']:''); ?>" placeholder="应收账款"  name="accounts_receivable">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">预付款项：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($finance_info['prepayments']) && ($finance_info['prepayments'] !== '')?$finance_info['prepayments']:''); ?>" placeholder="预付款项"  name="prepayments">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">对外投资：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($finance_info['foreign_investment']) && ($finance_info['foreign_investment'] !== '')?$finance_info['foreign_investment']:''); ?>" placeholder="对外投资"  name="foreign_investment">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">理财：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($finance_info['manage_money']) && ($finance_info['manage_money'] !== '')?$finance_info['manage_money']:''); ?>" placeholder="理财"  name="manage_money">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">其他：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($finance_info['other']) && ($finance_info['other'] !== '')?$finance_info['other']:''); ?>" placeholder="其他"  name="other">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">生产经营项目：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <span class="select-box" style="width: 150px;">
					<select class="select" name="manage_project"  >
                        <option value="">==请选择==</option>
                        <?php if(is_array($manage_project) || $manage_project instanceof \think\Collection || $manage_project instanceof \think\Paginator): $key = 0; $__LIST__ = $manage_project;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($key % 2 );++$key;?>
                        <option  <?php if(isset($finance_info)&&($finance_info['manage_project']==$key-1)): ?> selected="selected"<?php endif; ?> value="<?php echo $key-1; ?>"><?php echo $list; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
				</span>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">年经营项目收入：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($finance_info['project_income']) && ($finance_info['project_income'] !== '')?$finance_info['project_income']:''); ?>" placeholder="年经营项目收入"  name="project_income">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">年经营项目支出：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo (isset($finance_info['project_spend']) && ($finance_info['project_spend'] !== '')?$finance_info['project_spend']:''); ?>" placeholder="年经营项目支出"  name="project_spend">
            </div>
        </div>




        <div class="row cl">
            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                <?php if(isset($finance_info)&&$finance_info!=''): ?>
                <a class="btn btn-primary radius"  onclick="edit()"> 提交</a>
                <?php else: ?>
                <a class="btn btn-primary radius"  onclick="add()"> 提交</a>
                <?php endif; ?>
                <input type="reset" value="重置" class="btn btn-primary radius" >
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
            url:'<?php echo url("finance/add"); ?>',
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
            url:'<?php echo url("finance/edit"); ?>',
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




