<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:61:"D:\Xampps\htdocs\bank/app/admin\view\client\clientselect.html";i:1499676421;s:46:"D:\Xampps\htdocs\bank/app/admin\view\base.html";i:1497005003;s:48:"D:\Xampps\htdocs\bank/app/admin\view\header.html";i:1498812223;s:46:"D:\Xampps\htdocs\bank/app/admin\view\menu.html";i:1499140648;s:48:"D:\Xampps\htdocs\bank/app/admin\view\footer.html";i:1495788367;}*/ ?>
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

    
        <header class="navbar-wrapper">
    <div class="navbar navbar-fixed-top">
        <div class="container-fluid cl"> <a class="logo navbar-logo f-l mr-10" href="<?php echo url('admin/index/index'); ?>">罗庄农商银行网格化管理系统</a>  <span class="logo navbar-slogan f-l mr-10 hidden-xs"> </span> <a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="javascript:;">&#xe667;</a>

            <nav id="Hui-userbar" class="nav navbar-nav navbar-userbar hidden-xs">
                <ul class="cl">
                    <li> （<?php echo (\think\Session::get('user.real_name')  ?: ''); ?>） </li>
                    <li class="dropDown dropDown_hover"> <a href="#" class="dropDown_A" style="min-width: 95px;"><?php echo \think\Session::get('username'); ?> <i class="Hui-iconfont">&#xe6d5;</i></a>
                        <ul class="dropDown-menu menu radius box-shadow">
                            <!--<li><a href="javascript:;" onClick="myselfinfo()"><i class="Hui-iconfont Hui-iconfont-user2"></i> 个人信息</a></li>-->
                            <li><a href="/dc.php"><i class="Hui-iconfont Hui-iconfont-fabu"></i> 数据字典</a></li>
                            <li><a href="<?php echo url('admin/index/clearcache'); ?>"><i class="Hui-iconfont Hui-iconfont-xiangpicha"></i> 清理缓存</a></li>
                            <li><a href="<?php echo url('admin/user/logout'); ?>"><i class="Hui-iconfont Hui-iconfont-power"></i> 退出系统</a></li>
                        </ul>
                    </li>
                    <!--<li id="Hui-msg"> <a href="#" title="消息"><span class="badge badge-danger">1</span><i class="Hui-iconfont" style="font-size:18px">&#xe68a;</i></a> </li>-->
                    <li id="Hui-skin" class="dropDown right dropDown_hover"> <a href="javascript:" class="dropDown_A" title="换肤"><i class="Hui-iconfont" style="font-size:18px">&#xe62a;</i></a>
                        <ul class="dropDown-menu menu radius box-shadow">
                            <li><a href="javascript:" data-val="default" title="默认">默认</a></li>
                            <li><a href="javascript:" data-val="black" title="黑色">黑色</a></li>
                            <li><a href="javascript:" data-val="green" title="绿色">绿色</a></li>
                            <li><a href="javascript:" data-val="red" title="红色">红色</a></li>
                            <li><a href="javascript:" data-val="yellow" title="黄色">黄色</a></li>
                            <li><a href="javascript:" data-val="orange" title="橙色">橙色</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>


        
<aside class="Hui-aside">

    <div class="menu_dropdown bk_2">
<!--
        <dl id="menu-member">
            <dt><i class="Hui-iconfont">&#xe60d;</i> 客户信息<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a href="<?php echo url('admin/client/clientlist'); ?>" title="客户列表">客户列表</a></li>
                    <li><a href="<?php echo url('admin/client/clientselect'); ?>" title="客户筛选">客户筛选</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-picture">
            <dt><i class="Hui-iconfont">&#xe6c0;</i> 网格地图<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a href="<?php echo url('admin/grid/gridlist'); ?>" title="网格分布">网格分布</a></li>
                    <li><a href="<?php echo url('admin/grid/getloc'); ?>" title="地图统计">地图统计</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-article">
            <dt><i class="Hui-iconfont">&#xe6cf;</i> 营销管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a href="<?php echo url('admin/spread/lists'); ?>" title="营销管理">营销管理</a></li>
                    <li><a href="<?php echo url('admin/spread/sms'); ?>" title="营销互动">营销互动</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-tongji">
            <dt><i class="Hui-iconfont">&#xe61e;</i> 数据分析<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a href="<?php echo url('admin/analyse/charts_1'); ?>" title="折线图">折线图</a></li>
                    <li><a href="charts-2.html" title="时间轴折线图">时间轴折线图</a></li>
                    <li><a href="charts-3.html" title="区域图">区域图</a></li>
                    <li><a href="charts-4.html" title="柱状图">柱状图</a></li>
                    <li><a href="charts-5.html" title="饼状图">饼状图</a></li>
                    <li><a href="charts-6.html" title="3D柱状图">3D柱状图</a></li>
                    <li><a href="charts-7.html" title="3D饼状图">3D饼状图</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-admin">
            <dt><i class="Hui-iconfont">&#xe62d;</i> 权限管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a href="<?php echo url('admin/admin/adminlists'); ?>" title="管理员列表">管理员列表</a></li>
                    <li><a href="<?php echo url('admin/admin/rolelists'); ?>" title="角色管理">角色管理</a></li>
                    <li><a href="<?php echo url('admin/admin/nodelists'); ?>" title="节点管理">节点管理</a></li>
                </ul>
            </dd>
        </dl>

        <dl id="menu-system">
            <dt><i class="Hui-iconfont">&#xe61d;</i> 系统设置<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a href="<?php echo url('admin/dataconfig/configlist'); ?>">配置管理</a></li>
                    <li><a href="<?php echo url('admin/dataconfig/database'); ?>">数据库备份</a></li>
                </ul>
            </dd>
        </dl>
-->
        <?php if(!(empty($nodes) || (($nodes instanceof \think\Collection || $nodes instanceof \think\Paginator ) && $nodes->isEmpty()))): if(is_array($nodes) || $nodes instanceof \think\Collection || $nodes instanceof \think\Paginator): $i = 0; $__LIST__ = $nodes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$action): $mod = ($i % 2 );++$i;?>
        <dl id="menu-<?php echo $action['name']; ?>">
            <dt><i class="Hui-iconfont"><?php echo $action['icon']; ?></i> <?php echo $action['title']; ?><i class="Hui-iconfont menu_dropdown-arrow Hui-iconfont-arrow2-bottom"></i></dt>
            <dd>
                <ul>
                    <?php if(is_array($action['child']) || $action['child'] instanceof \think\Collection || $action['child'] instanceof \think\Paginator): $i = 0; $__LIST__ = $action['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$method): $mod = ($i % 2 );++$i;?>
                    <li><a href="/admin/<?php echo $action['name']; ?>/<?php echo $method['name']; ?>"><?php echo $method['title']; ?></a></li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </dd>
        </dl>
        <?php endforeach; endif; else: echo "" ;endif; endif; ?>

        
    </div>
</aside>
<div class="dislpayArrow hidden-xs"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>

<script type="text/javascript">
    var urlstr = location.href;
    var urlstatus=false;
    $(".menu_dropdown li a").each(function () {
        if ((urlstr).indexOf($(this).attr('href')) > -1&&$(this).attr('href')!='') {
            $(this).parent().addClass('current');
            $(this).parent().parent().parent().css("display","block");
            urlstatus = true;
        } else {
            $(this).parent().removeClass('current');
        }
    });
</script>


            

<section class="Hui-article-box">
    <nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> <?php echo $title1; ?><span class="c-gray en">&gt;</span><?php echo $title2; ?><a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
    <div class="Hui-article">
        <form action="<?php echo url('client/clientresult'); ?>" method="get">
            <div class="panel panel-secondary mt-21">
                <div class="panel-header">选择筛选条件</div>
                <div class="panel-body">
                    <table class="table table-border table-bordered table-hover">
                        <tr>
                            <td style="width: 70px;">客户名称</td>
                            <td style="width: 200px;"><input type="text" class="input-text" name="name"/></td>
                            <td style="width: 70px;">证件号码</td>
                            <td style="width: 200px;">
                                <input type="text" class="input-text" name="card_number"/>
                            </td>
                            <td style="width: 70px;">婚姻状况</td>
                            <td style="width: 200px;">
                                <span class="select-box" >
                                    <select class="select" name="marriage_status"  >
                                        <option value="">==请选择==</option>
                                        <option value="0">未婚</option>
                                        <option value="1">已婚</option>
                                        <option value="2">离异</option>
                                    </select>
				                </span>
                            </td>
                            <td style="width: 70px;">客户经理</td>
                            <td style="width: 200px;">
                                <span class="select-box" >
                                    <select class="select" name="belong_user_id"  >
                                        <option value="">==请选择==</option>
                                        <?php if(is_array($manger) || $manger instanceof \think\Collection || $manger instanceof \think\Paginator): if( count($manger)==0 ) : echo "" ;else: foreach($manger as $key=>$user): ?>
                                         <option    value="<?php echo $user['id']; ?>"><?php echo $user['real_name']; ?></option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
				                </span>
                            </td>


                        </tr>
                        <tr>
                            <td style="width: 70px;">配偶姓名</td><td style="width: 200px;"><input type="text" class="input-text" name="spouse_name"/></td>
                            <td style="width: 70px;">配偶证件号码</td><td style="width: 200px;"><input type="text" class="input-text" name="spouse_card_number"/></td>
                            <td style="width: 70px;">有无不良记录</td>
                            <td style="width: 200px;">
                                <div class="radio-box">
                                    <input name="bad_record" type="radio"  value="0" id="bad_record0" >
                                    <label for="bad_record0">无</label>
                                </div>
                                <div class="radio-box">
                                    <input type="radio" id="bad_record1" value="1" name="bad_record" >
                                    <label for="bad_record1">有</label>
                                </div>
                            </td>

                            <td style="width: 70px;">所属机构</td>
                            <td style="width: 200px;">
                                <span class="select-box" >
                                        <select class="select" name="belong_organization"  >
                                            <option value="">==请选择==</option>
                                            <?php if(is_array($banklist) || $banklist instanceof \think\Collection || $banklist instanceof \think\Paginator): $i = 0; $__LIST__ = $banklist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$bank): $mod = ($i % 2 );++$i;?>
                                                <option value="<?php echo $bank['id']; ?>" ><?php echo $bank['bankname']; ?></option>
                                                <?php if(is_array($bank['child']) || $bank['child'] instanceof \think\Collection || $bank['child'] instanceof \think\Paginator): $i = 0; $__LIST__ = $bank['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$b): $mod = ($i % 2 );++$i;?>
                                                <option value="<?php echo $b['id']; ?>"  style="padding-left:30px;">|—<?php echo $b['bankname']; ?></option>
                                                <?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>贷款账户状态</td>
                            <td>
                                <span class="select-box" >
                                        <select class="select" name="loan_status"  >
                                            <option value="">==请选择==</option>
                                            <?php if(is_array($loan_status) || $loan_status instanceof \think\Collection || $loan_status instanceof \think\Paginator): $key = 0; $__LIST__ = $loan_status;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($key % 2 );++$key;?>
                                            <option value="<?php echo $key-1; ?>"><?php echo $list; ?></option>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                </span>
                            </td>
                            <td>贷款金额</td>
                            <td><input type="text" style="width: 100px;" class="input-text" name="start_loan_money"/>万元-<input type="text" style="width: 100px;" class="input-text" name="end_loan_money"/>万元</td>
                            <td>贷款用途</td>
                            <td>
                                 <span class="select-box" >
                                        <select class="select" name="loan_using"  >
                                            <option value="">==请选择==</option>
                                            <?php if(is_array($loan_using) || $loan_using instanceof \think\Collection || $loan_using instanceof \think\Paginator): $key = 0; $__LIST__ = $loan_using;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($key % 2 );++$key;?>
                                            <option value="<?php echo $key-1; ?>"><?php echo $list; ?></option>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                </span>

                            </td>
                            <td>担保方式</td>
                            <td>
                                <span class="select-box" >
                                        <select class="select" name="guarantee_way"  >
                                            <option value="">==请选择==</option>
                                            <?php if(is_array($guarantee_way) || $guarantee_way instanceof \think\Collection || $guarantee_way instanceof \think\Paginator): $key = 0; $__LIST__ = $guarantee_way;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($key % 2 );++$key;?>
                                            <option value="<?php echo $key-1; ?>"><?php echo $list; ?></option>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>贷款发放日期</td>
                            <td>
                                <input style="width: 130px;"type="text" onfocus="WdatePicker()"value=""  name="start_provide_time"class="input-text Wdate" >-<input type="text" style="width: 130px;" onfocus="WdatePicker()"value=""  name="end_provide_time"class="input-text Wdate" >
                            </td>
                            <td>贷款到期日期</td>
                            <td>
                                <input style="width: 130px;"type="text" onfocus="WdatePicker()"value=""  name="start_arrive_time"class="input-text Wdate" >-<input type="text" style="width: 130px;" onfocus="WdatePicker()"value=""  name="end_arrive_time"class="input-text Wdate" >
                            </td>
                            <td>欠息金额</td>
                            <td><input type="text" style="width: 100px;" class="input-text" name="start_debt_money"/>万元-<input type="text" style="width: 100px;" class="input-text" name="end_debt_money"/>万元</td>
                            <td>贷款办理人</td>
                            <td>
                                <span class="select-box" >
                                    <select class="select" name="user_id"  >
                                        <option value="">==请选择==</option>
                                        <?php if(is_array($manger) || $manger instanceof \think\Collection || $manger instanceof \think\Paginator): $i = 0; $__LIST__ = $manger;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$manger): $mod = ($i % 2 );++$i;?>
                                        <option    value="<?php echo $manger['id']; ?>"><?php echo $manger['real_name']; ?></option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
				                </span>

                            </td>
                        </tr>
                        <tr>
                            <td>存款开户行</td>
                            <td>
                                <span class="select-box" >
                                    <select class="select" name="cun_bank_id"  >
                                        <option value="">==请选择==</option>
                                        <?php if(is_array($banklist) || $banklist instanceof \think\Collection || $banklist instanceof \think\Paginator): $i = 0; $__LIST__ = $banklist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$bank): $mod = ($i % 2 );++$i;?>
                                            <option value="<?php echo $bank['id']; ?>" ><?php echo $bank['bankname']; ?></option>
                                            <?php if(is_array($bank['child']) || $bank['child'] instanceof \think\Collection || $bank['child'] instanceof \think\Paginator): $i = 0; $__LIST__ = $bank['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$b): $mod = ($i % 2 );++$i;?>
                                            <option value="<?php echo $b['id']; ?>"  style="padding-left:30px;">|—<?php echo $b['bankname']; ?></option>
                                            <?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </span>
                            </td>
                            <td>客户评级</td>
                            <td>
                                <span class="select-box" >
                                    <select class="select" name="client_grade"  >
                                        <option value="">==请选择==</option>
                                        <?php if(is_array($client_grade) || $client_grade instanceof \think\Collection || $client_grade instanceof \think\Paginator): $key = 0; $__LIST__ = $client_grade;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($key % 2 );++$key;?>
                                        <option value="<?php echo $key-1; ?>"><?php echo $list; ?></option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </span>
                            </td>
                            <td style="width: 70px;">是否涉农</td>
                            <td style="width: 200px;">
                                <div class="radio-box">
                                    <input name="is_farmer" type="radio"  value="0" id="farmer0"  >
                                    <label for="farmer0">否</label>
                                </div>
                                <div class="radio-box">
                                    <input type="radio" id="farmer1" value="1" name="is_farmer" >
                                    <label for="farmer1">是</label>
                                </div>
                            </td>
                            <td>手机号</td>
                            <td>
                                <input type="text" class="input-text" name="tel_number"/>
                            </td>
                        </tr>
                        <tr>
                            <td>存款类型</td>
                            <td>
                                 <span class="select-box" >
                                    <select class="select" name="deposit_type"  >
                                        <option value="">==请选择==</option>
                                        <?php if(is_array($deposit_type) || $deposit_type instanceof \think\Collection || $deposit_type instanceof \think\Paginator): $key = 0; $__LIST__ = $deposit_type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($key % 2 );++$key;?>
                                        <option value="<?php echo $key-1; ?>"><?php echo $list; ?></option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </span>
                            </td>
                            <td>签约类型</td>
                            <td>
                                 <span class="select-box" >
                                    <select class="select" name="sign_type"  >
                                        <option value="">==请选择==</option>
                                        <?php if(is_array($sign_type) || $sign_type instanceof \think\Collection || $sign_type instanceof \think\Paginator): $key = 0; $__LIST__ = $sign_type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($key % 2 );++$key;?>
                                        <option value="<?php echo $key-1; ?>"><?php echo $list; ?></option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </span>
                            </td>
                            <td>签约网点号</td>
                            <td>
                                 <span class="select-box" >
                                    <select class="select" name="sign_website_number"  >
                                        <option value="">==请选择==</option>
                                        <?php if(is_array($banklist) || $banklist instanceof \think\Collection || $banklist instanceof \think\Paginator): $i = 0; $__LIST__ = $banklist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$bank): $mod = ($i % 2 );++$i;?>
                                            <option value="<?php echo $bank['id']; ?>" ><?php echo $bank['bankname']; ?></option>
                                            <?php if(is_array($bank['child']) || $bank['child'] instanceof \think\Collection || $bank['child'] instanceof \think\Paginator): $i = 0; $__LIST__ = $bank['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$b): $mod = ($i % 2 );++$i;?>
                                            <option value="<?php echo $b['id']; ?>"  style="padding-left:30px;">|—<?php echo $b['bankname']; ?></option>
                                            <?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </span>
                            </td>

                            <td>签约时间</td>
                            <td>
                                <input style="width: 130px;"type="text" onfocus="WdatePicker()"value=""  name="start_sign_time"class="input-text Wdate" >-<input type="text" style="width: 130px;" onfocus="WdatePicker()"value=""  name="end_sign_time"class="input-text Wdate" >
                            </td>

                        </tr>
                        <tr>
                            <td>家庭总资产</td>
                            <td><input type="text" style="width: 100px;" class="input-text" name="start_family_money"/>万元-<input type="text" style="width: 100px;" class="input-text" name="end_family_money"/>万元</td>
                            <td>家庭总负债</td>
                            <td><input type="text" style="width: 100px;" class="input-text" name="start_family_debt"/>万元-<input type="text" style="width: 100px;" class="input-text" name="end_family_debt"/>万元</td>
                            <td>家庭年收入</td>
                            <td><input type="text" style="width: 100px;" class="input-text" name="start_family_year_income"/>万元-<input type="text" style="width: 100px;" class="input-text" name="end_family_year_income"/>万元</td>
                            <td>家庭年支出</td>
                            <td><input type="text" style="width: 100px;" class="input-text" name="start_family_year_spending"/>万元-<input type="text" style="width: 100px;" class="input-text" name="end_family_year_spending"/>万元</td>
                        </tr>
                        <tr>
                            <td >是否扶贫</td>
                            <td >
                                <div class="radio-box">
                                    <input name="is_poor" type="radio"  value="0" id="is_poor0"  >
                                    <label for="is_poor0">否</label>
                                </div>
                                <div class="radio-box">
                                    <input type="radio" id="is_poor1" value="1" name="is_poor" >
                                    <label for="is_poor1">是</label>
                                </div>
                            </td>
                            <td >有无子女</td>
                            <td>
                                <div class="radio-box">
                                    <input name="children" type="radio"  value="0" id="children0"  >
                                    <label for="children0">无</label>
                                </div>
                                <div class="radio-box">
                                    <input type="radio" id="children1" value="1" name="children" >
                                    <label for="children1">有</label>
                                </div>
                            </td>
                            <td>工作单位</td>
                            <td>
                                <input type="text" class="input-text" name="workunit"/>
                            </td>
                            <td >现住址</td>
                            <td >
                                <input type="text" class="input-text" name="current_address"/>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="panel panel-success  mt-21">
                <div class="panel-header">选择查看的字段</div>
                <div class="panel-body">
                    <table class="table table-border table-bordered table-hover table-bg " >
                        <thead>
                        <tr >
                            <th style="width: 25%;text-align: center;"><strong>结果字段</strong> <span class="r"><a href="javascript:;"  class="btn radius btn-warning" onclick="add_all();">添加全部<i class="Hui-iconfont">&#xe67a;</i></a></span></th>
                            <th style="width:  25%;text-align: center;"><span class="l"><a href="javascript:;"  class="btn radius btn-warning" onclick="remove_all();"><i class="Hui-iconfont">&#xe678;</i>移除全部</a></span><strong>展示字段</strong></th>
                            <th style=" width: 50%;">

                            </th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr >
                            <td  style="text-align: center;" >
                                <div style="overflow-y: scroll;height: 180px;"id="select">
                                    <a href="#" id="c-name" class="btn btn-primary-outline radius hui-animation " style="width: 200px;margin-top: 5px;" data-tra="客户名称">客户名称</a><br>
                                    <a href="#" id="c-type" class="btn btn-primary-outline radius hui-animation " style="width: 200px;margin-top: 5px;" data-tra="客户类型">客户类型</a><br>
                                    <a href="#" id="c-sex" class="btn btn-primary-outline radius hui-animation " style="width: 200px;margin-top: 5px;" data-tra="性别">性别</a><br>
                                    <a href="#" id="c-card_number" class="btn btn-primary-outline radius hui-animation " style="width: 200px;margin-top: 5px;" data-tra="证件号码">证件号码</a><br>
                                    <a href="#" id="c-born_date" class="btn btn-primary-outline radius hui-animation " style="width: 200px;margin-top: 5px;" data-tra="出生日期">出生日期</a><br>
                                    <a href="#" id="base-current_address" class="btn btn-primary-outline radius hui-animation " style="width: 200px;margin-top: 5px;" data-tra="现住址">现住址</a><br>
                                    <a href="#" id="base-tel_number" class="btn btn-primary-outline radius hui-animation " style="width: 200px;margin-top: 5px;" data-tra="联系方式">联系方式</a><br>
                                    <a href="#" id="base-marriage_status" class="btn btn-primary-outline radius hui-animation " style="width: 200px;margin-top: 5px;" data-tra="婚姻状况">婚姻状况</a><br>
                                    <a href="#" id="base-children" class="btn btn-primary-outline radius hui-animation " style="width: 200px;margin-top: 5px;" data-tra="有无子女">有无子女</a><br>
                                    <a href="#" id="base-is_farmer" class="btn btn-primary-outline radius hui-animation " style="width: 200px;margin-top: 5px;" data-tra="是否涉农">是否涉农</a><br>
                                    <a href="#" id="spouse-spouse_name" class="btn btn-primary-outline radius hui-animation " style="width: 200px;margin-top: 5px;" data-tra="配偶名称">配偶名称</a><br>
                                    <a href="#" id="base-workunit" class="btn btn-primary-outline radius hui-animation " style="width: 200px;margin-top: 5px;" data-tra="工作单位">工作单位</a><br>
                                    <a href="#" id="c-client_grade" class="btn btn-primary-outline radius hui-animation " style="width: 200px;margin-top: 5px;" data-tra="客户评级">客户评级</a><br>
                                    <a href="#" id="base-bad_record" class="btn btn-primary-outline radius hui-animation " style="width: 200px;margin-top: 5px;" data-tra="有无不良记录">有无不良记录</a><br>
                                    <a href="#" id="base-current_postcode" class="btn btn-primary-outline radius hui-animation " style="width: 200px;margin-top: 5px;" data-tra="现住址邮编">现住址邮编</a><br>
                                    <a href="#" id="base-save_money" class="btn btn-primary-outline radius hui-animation " style="width: 200px;margin-top: 5px;" data-tra="存款总额">存款总额</a><br>
                                    <a href="#" id="base-loan_money" class="btn btn-primary-outline radius hui-animation " style="width: 200px;margin-top: 5px;" data-tra="贷款总额">贷款总额</a><br>
                                    <a href="#" id="base-is_poor" class="btn btn-primary-outline radius hui-animation " style="width: 200px;margin-top: 5px;" data-tra="是否是扶贫户">是否是扶贫户</a><br>


                                </div>
                            </td>
                            <td rowspan="5" style="text-align: center;" >
                                <div style="overflow-y: scroll;height: 180px;" id="list"></div>
                            </td>
                            <td >
                                <a class="btn btn-success size-L radius"onclick="submit()" style="position: relative ;left:3%;top: 70%" href="javascript:;">确认</a>
                                <input class="btn btn-success size-L radius" type="submit" value="提交"style="position: relative ;left:3%;top: 70%;margin-left: 3%"/>

                                <!--<a class="btn btn-success size-L radius"onclick="submit()" style="position: relative ;left:3%;top: 70%" href="javascript:;">提交</a>-->
                            </td>
                        </tr>
                        </tbody>

                    </table>
                </div>
            </div>
        </form>

    </div>


</section>



<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/static/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/static/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/static/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">
    $('#select').on('click','a',function(){
        var tra=$(this).attr('data-tra');
        var id=$(this).attr('id');

        $(this).next('br').remove();
        $(this).remove();

        var input='<a id="'+id+'" style="width: 200px;margin-top: 5px;" hre="#" class="btn btn-primary-outline radius hui-rotateinLT" data-tra="'+tra+'">'+tra+'</a><br/>';
        $('#list').append(input);
    });


    $('#list').on('click','a',function() {
        var tra = $(this).attr('data-tra');
        var id = $(this).attr('id');
        $(this).removeClass();
        $(this).addClass('btn btn-primary-outline radius hui-rotateoutLT');
        var find=$('#select').children('#'+id).attr('id');
        if(find==undefined){
            var input = '<a id="' + id + '" style="width: 200px;margin-top: 5px;" hre="#" class="btn btn-primary-outline radius hui-animation"data-tra="'+tra+'">' + tra + '</a><br/>';
            $('#select').append(input);
        }
        setTimeout(function(){
            $('#list').children('#'+id).next('br').remove();
            $('#list').children('#'+id).remove();
        },1000);
    });

    function submit(){


        var len=$('#list > a').length;
        if(len>=1){
            var list=$('#list').children('a').attr('id');
            var names=list+',';
            for(var i=1;i<len;i++){
                var id=$('#'+list).next('br').next('a').attr('id');
                names+=id+',';
                list=id;
            }
        }
        var input='<input name=names type="hidden"value="'+names+'"/>';
        $('form').append(input);

    }
    function add_all(){
        var html = $('#select').html();
        $('#select').children().remove();
        $('#list').append(html);
    }
    function remove_all()
    {
        var html = $('#list').html();
        $('#list').children().remove();
        $('#select').append(html);
    }


    $(function(){

    });
    /*用户-添加*/
    function member_add(title,url,w,h){
        layer_show(title,url,w,h);
    }






</script>



        

    

    </body>
</html>




