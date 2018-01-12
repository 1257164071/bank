<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:58:"D:\xampps\htdocs\work\bank/app/admin\view\client\loan.html";i:1511347676;s:51:"D:\xampps\htdocs\work\bank/app/admin\view\base.html";i:1507780640;s:53:"D:\xampps\htdocs\work\bank/app/admin\view\header.html";i:1509438471;s:51:"D:\xampps\htdocs\work\bank/app/admin\view\menu.html";i:1511338586;s:53:"D:\xampps\htdocs\work\bank/app/admin\view\footer.html";i:1495788367;}*/ ?>
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
                    <li> （<?php echo $user['bankname']; ?>-<?php echo (\think\Session::get('user.real_name')  ?: ''); ?>） </li>
                    <li class="dropDown dropDown_hover"> <a href="#" class="dropDown_A" style="min-width: 95px;"><?php echo \think\Session::get('username'); ?> <i class="Hui-iconfont">&#xe6d5;</i></a>
                        <ul class="dropDown-menu menu radius box-shadow">
                        <li><a href="/public/Eloan.doc"><i class="Hui-iconfont Hui-iconfont-xiangpicha"></i> "信e贷"手册</a></li>
                        <li><a href="<?php echo url('admin/index/clearcache'); ?>"><i class="Hui-iconfont Hui-iconfont-xiangpicha"></i> 清理缓存</a></li>
                         <li><a  onclick="edit_pwd('修改密码','<?php echo url('admin/user/edit_pwd',array('user_id'=>\think\Session::get('user.id'))); ?>','800','510')" href="javascript:;"><i class="Hui-iconfont Hui-iconfont-fabu"></i> 修改密码</a></li>
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
<script type="text/javascript" src="/static/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">
    function edit_pwd(title,url,w,h){
        layer_show(title,url,w,h);
    }
</script>

        
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
                    <?php if(is_array($action['child']) || $action['child'] instanceof \think\Collection || $action['child'] instanceof \think\Paginator): $i = 0; $__LIST__ = $action['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$method): $mod = ($i % 2 );++$i;switch($user['role_id']): case "13": if($method['admin'] != 1): ?>
                                <li><a href="/admin/<?php if($method['controller'] == ''): ?><?php echo $action['name']; else: ?><?php echo $method['controller']; endif; ?>/<?php echo $method['name']; ?>"><?php echo $method['title']; ?></a></li>
                            <?php endif; break; case "7": if($method['hangzhang'] != 1): ?>
                            <li><a href="/admin/<?php if($method['controller'] == ''): ?><?php echo $action['name']; else: ?><?php echo $method['controller']; endif; ?>/<?php echo $method['name']; ?>"><?php echo $method['title']; ?></a></li>
                            <?php endif; break; case "9": if($method['zhihangzhang'] != 1): ?>
                            <li><a href="/admin/<?php if($method['controller'] == ''): ?><?php echo $action['name']; else: ?><?php echo $method['controller']; endif; ?>/<?php echo $method['name']; ?>"><?php echo $method['title']; ?></a></li>
                            <?php endif; break; default: ?>
                        <li><a href="/admin/<?php if($method['controller'] == ''): ?><?php echo $action['name']; else: ?><?php echo $method['controller']; endif; ?>/<?php echo $method['name']; ?>"><?php echo $method['title']; ?></a></li>
                    <?php endswitch; endforeach; endif; else: echo "" ;endif; ?>
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
        <form action="<?php echo url('client/loanres'); ?>" method="get">
            <div class="panel panel-secondary mt-21">
                <div class="panel-header">选择筛选条件 <span style="float:right;color:#000;font-weight:normal;"><strong><?php echo $count; ?>个</strong>&nbsp;贷款业务</span></div>
                <div class="panel-body">
                    <table class="table table-border table-bordered table-hover">
                        <div id="cleint">
                        <!--新增贷款的查询-->
                        <tr>
                        <td>客户名称</td>
                            <td>
                                <input type="text" class="input-text" name="client_name"/>
                            </td>
                            <td>证件号码</td>
                            <td>
                                <input type="text" class="input-text" name="card_number"/>
                            </td>
                            <td>贷款状态</td>
                            <td>
                                <span class="select-box" >
                                        <select class="select" name="account_status"  >
                                            <option value="">==请选择==</option>
                                            <?php if(is_array($account_status) || $account_status instanceof \think\Collection || $account_status instanceof \think\Paginator): $key = 0; $__LIST__ = $account_status;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($key % 2 );++$key;?>
                                            <option value="<?php echo $key-1; ?>"><?php echo $list; ?></option>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                </span>
                            </td>
                            <td >信用等级</td>
                            <td>
                                <span class="select-box" >
                                    <select class="select" name="credit_class"  >
                                        <option value="">==请选择==</option>
                                        <?php if(is_array($credit_class) || $credit_class instanceof \think\Collection || $credit_class instanceof \think\Paginator): $key = 0; $__LIST__ = $credit_class;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($key % 2 );++$key;?>
                                        <option value="<?php echo $key-1; ?>"><?php echo $list; ?></option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>贷款账号</td>
                            <td>
                                <input type="text" class="input-text" name="loan_account"/>
                            </td>
                            <td >扣款账号</td>
                            <td >
                                <input type="text" class="input-text" name="koukuan_account"/>
                            </td>
                            <td >科目号/名称</td>
                            <td >
                                <span class="select-box" >
                                    <select class="select" name="subject_number"  >
                                        <option value="">==请选择==</option>
                                        <?php if(is_array($subject_number) || $subject_number instanceof \think\Collection || $subject_number instanceof \think\Paginator): $key = 0; $__LIST__ = $subject_number;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($key % 2 );++$key;?>
                                        <option value="<?php echo $key-1; ?>"><?php echo $key-1; ?>/<?php echo $list; ?></option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </span>
                            </td>
                            <td>客户号</td>
                            <td>
                                <input type="text" class="input-text" name="client_number"/>
                            </td>

                        </tr>


                        <tr>
                            <td >借据号</td>
                            <td>
                                <input type="text" class="input-text" name="ious_number"/>
                            </td>

                            <td >贷款形态（五级）</td>
                            <td >
                                <input type="text" class="input-text" name="five_loan_form"/>
                            </td>
                            <td >贷款形态（十级）</td>
                            <td >
                                <input type="text" class="input-text" name="ten_loan_form"/>
                            </td>
                            <td>利率执行方式</td>
                            <td>
                                <span class="select-box" >
                                    <select class="select" name="rate_runmode"  >
                                        <option value="">==请选择==</option>
                                        <?php if(is_array($rate_runmode) || $rate_runmode instanceof \think\Collection || $rate_runmode instanceof \think\Paginator): $key = 0; $__LIST__ = $rate_runmode;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($key % 2 );++$key;?>
                                        <option value="<?php echo $key-1; ?>"><?php echo $list; ?></option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </span>
                            </td>

                        </tr>
                        <tr>
                            <td >首贷日</td>
                            <td>
                                <input style="width: 45%;"type="text" onfocus="WdatePicker()"value=""  name="start_firstloan_time"class="input-text Wdate" >-<input type="text" style="width: 45%;" onfocus="WdatePicker()"value=""  name="end_firstloan_time"class="input-text Wdate" >
                            </td>

                           <td>业务编号</td>
                                <td><input type="text"  class="input-text" name="business_number"/></td>
                         
                            <td >业务种类</td>
                            <td >
                                <span class="select-box" >
                                    <select class="select" name="business_type"  >
                                        <option value="">==请选择==</option>
                                        <?php if(is_array($business_type) || $business_type instanceof \think\Collection || $business_type instanceof \think\Paginator): $key = 0; $__LIST__ = $business_type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($key % 2 );++$key;?>
                                        <option value="<?php echo $key-1; ?>"><?php echo $list; ?></option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </span>
                            </td>
                            <td>贷款余额</td>
                            <td><input type="text" style="width: 100px;" class="input-text" name="start_remian_money"/>元-<input type="text" style="width: 100px;" class="input-text" name="end_remian_money"/>元</td>
                        </tr>
                        <tr>
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
                            <td>贷款发放日期</td>
                            <td>
                                <input style="width: 45%;"type="text" onfocus="WdatePicker()"value=""  name="start_provide_time"class="input-text Wdate" >-<input type="text" style="width: 45%;" onfocus="WdatePicker()"value=""  name="end_provide_time"class="input-text Wdate" >
                            </td>
                            <td>贷款到期日期</td>
                            <td>
                                <input style="width: 45%;"type="text" onfocus="WdatePicker()"value=""  name="start_arrive_time"class="input-text Wdate" >-<input type="text" style="width: 45%;" onfocus="WdatePicker()"value=""  name="end_arrive_time"class="input-text Wdate" >
                            </td>

                        </tr>
                        <tr><td>欠息金额</td>
                            <td><input type="text" style="width: 38%;" class="input-text" name="start_debt_money"/>元-<input type="text" style="width: 38%;" class="input-text" name="end_debt_money"/>元</td>
                            <td>发放类型</td>
                            <td>
                                <span class="select-box" >
                                    <select class="select" name="provide_type"  >
                                        <option value="">==请选择==</option>
                                        <?php if(is_array($provide_type) || $provide_type instanceof \think\Collection || $provide_type instanceof \think\Paginator): $key = 0; $__LIST__ = $provide_type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($key % 2 );++$key;?>
                                        <option value="<?php echo $key-1; ?>"><?php echo $list; ?></option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </span>
                            </td>
                            <td>合同金额</td>
                            <td><input type="text" style="width: 38%;" class="input-text" name="start_contract_money"/>元-<input type="text" style="width: 38%;" class="input-text" name="end_contract_money"/>元</td>
                            <td>发放金额</td>
                            <td><input type="text" style="width: 38%;" class="input-text" name="start_provide_money"/>元-<input type="text" style="width: 38%;" class="input-text" name="end_provide_money"/>元</td>


                        </tr>
                            <tr>
                                
                                <td colspan="8">  <a class="btn btn-success size-L radius"onclick="submit()" style="position: relative ;left:3%;top: 70%" href="javascript:;">确认</a></td>
                            </tr>

                    </table>
                </div>
            </div>
            <!--<div class="panel panel-success  mt-21">-->
                <!--<div class="panel-header">选择查看的字段</div>-->
                <!--<div class="panel-body">-->
                    <!--<table class="table table-border table-bordered table-hover table-bg " >-->
                        <!--<thead>-->
                        <!--<tr >-->
                            <!--<th style="width: 25%;text-align: center;"><strong>结果字段</strong> <span class="r"><a href="javascript:;"  class="btn radius btn-warning" onclick="add_all();">添加全部<i class="Hui-iconfont">&#xe67a;</i></a></span></th>-->
                            <!--<th style="width:  25%;text-align: center;"><span class="l"><a href="javascript:;"  class="btn radius btn-warning" onclick="remove_all();"><i class="Hui-iconfont">&#xe678;</i>移除全部</a></span><strong>展示字段</strong></th>-->
                            <!--<th style=" width: 50%;">-->

                            <!--</th>-->
                        <!--</tr>-->
                        <!--</thead>-->

                        <!--<tbody>-->
                        <!--<tr >-->
                            <!--<td  style="text-align: center;" >-->
                                <!--<div style="overflow-y: scroll;height: 180px;"id="select">-->
                                    <!--<a href="#" id="intable-business_number" class="btn btn-primary-outline radius hui-animation " style="width: 200px;margin-top: 5px;" data-tra="业务号">业务号</a><br>-->
                                    <!--<a href="#" id="intable-client_number" class="btn btn-primary-outline radius hui-animation " style="width: 200px;margin-top: 5px;" data-tra="客户号">客户号</a><br>-->
                                    <!--<a href="#" id="intable-loan_account" class="btn btn-primary-outline radius hui-animation " style="width: 200px;margin-top: 5px;" data-tra="贷款账号">贷款账号</a><br>-->
                                    <!--<a href="#" id="intable-koukuan_account" class="btn btn-primary-outline radius hui-animation " style="width: 200px;margin-top: 5px;" data-tra="扣款账号">扣款账号</a><br>-->
                                    <!--<a href="#" id="intable-remian_money" class="btn btn-primary-outline radius hui-animation " style="width: 200px;margin-top: 5px;" data-tra="贷款余额">贷款余额</a><br>-->
                                    <!--<a href="#" id="intable-use_rate" class="btn btn-primary-outline radius hui-animation " style="width: 200px;margin-top: 5px;" data-tra="利率">利率</a><br>-->
                                    <!--<a href="#" id="intable-account_status" class="btn btn-primary-outline radius hui-animation " style="width: 200px;margin-top: 5px;" data-tra="账户状态">账户状态</a><br>-->


                                <!--</div>-->
                            <!--</td>-->
                            <!--<td rowspan="5" style="text-align: center;" >-->
                                <!--<div style="overflow-y: scroll;height: 180px;" id="list"></div>-->
                            <!--</td>-->
                            <!--<td >-->
                                <!--<a class="btn btn-success size-L radius"onclick="submit()" style="position: relative ;left:3%;top: 70%" href="javascript:;">确认</a>-->
                                <!--&lt;!&ndash;<input class="btn btn-success size-L radius" type="submit" value="提交"style="position: relative ;left:3%;top: 70%;margin-left: 3%"/>&ndash;&gt;-->

                                <!--&lt;!&ndash;<a class="btn btn-success size-L radius"onclick="submit()" style="position: relative ;left:3%;top: 70%" href="javascript:;">提交</a>&ndash;&gt;-->
                            <!--</td>-->
                        <!--</tr>-->
                        <!--</tbody>-->

                    <!--</table>-->
                <!--</div>-->
            <!--</div>-->
        </form>
        <div class="mt-10" style="padding: 20px;">
            <table class="table table-border table-bordered table-hover table-bg table-sort">
                <thead >
                    <tr class="text-c">
                        <th>业务号</th>
                        <th>客户号</th> 
                        <th>客户名称</th> 
                        <!-- <th>身份证</th>  -->
                        <th>发放时间</th>
                        <th>合同金额</th>
                        <th>贷款余额</th>
                        <th>利率</th>
                        <th>账户形态</th>
                        <th>到期日</th>
                        <th>操作</th>

                    </tr>
                </thead>
                <?php if(is_array($incredit) || $incredit instanceof \think\Collection || $incredit instanceof \think\Paginator): $i = 0; $__LIST__ = $incredit;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
                <tbody>
                    <tr class="text-c">
                        <td><a href="javascript:;" title="<?php echo $list['id']; ?>"><?php echo $list['business_number']; ?></a></td>
                        <td><?php echo (isset($list['client_number']) && ($list['client_number'] !== '')?$list['client_number']:''); ?></td>
                        <td><a style="text-decoration:none"  href="<?php echo url('clientdetail',array('card_number'=>$list['card_number'])); ?>" title="查看客户详情"><?php echo (isset($list['client_name']) && ($list['client_name'] !== '')?$list['client_name']:''); ?></a></td>
                        <!-- <td><?php echo (isset($list['card_number']) && ($list['card_number'] !== '')?$list['card_number']:''); ?></td> -->
                        <td><?php echo date("Y-m-d",$list['provide_time_int']); ?></td>
                        <td><?php echo (isset($list['loan_money']) && ($list['loan_money'] !== '')?$list['loan_money']:''); ?></td>
                        <td><?php echo $list['remian_money']; ?></td>
                        <td><?php echo $list['use_rate']; ?></td>
                        <td>
                            <?php if(isset($list['account_status_int']) && $list['account_status_int'] == 1): ?>正常<?php endif; if(isset($list['account_status_int']) && $list['account_status_int'] == 2): ?>逾期<?php endif; if(isset($list['account_status_int']) && $list['account_status_int'] == 3): ?>部分逾期<?php endif; if(isset($list['account_status_int']) && $list['account_status_int'] == 4): ?>非应计<?php endif; ?>
                        </td>
                        <td><?php echo date("Y-m-d",$list['arrive_time_int']); ?></td>
                        <td> <a href="javascript:;" onclick="member_add('查看','<?php echo url('admin/incredit/detail',array('loan_id'=>$list['id'])); ?>','','510')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe720;</i>贷款详情</a> </td>
                    </tr>
                </tbody>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </table>
            <div class="page"><?php echo $page; ?></div>
        </div>
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


//        var len=$('#list > a').length;
//        if(len>=1){
//            var list=$('#list').children('a').attr('id');
//            var names=list+',';
//            for(var i=1;i<len;i++){
//                var id=$('#'+list).next('br').next('a').attr('id');
//                names+=id+',';
//                list=id;
//            }
//        }
        var names='intable-business_number,intable-client_number,intable-client_name,intable-card_number,intable-loan_account,intable-koukuan_account,intable-remian_money,intable-use_rate,intable-account_status,';
        var input='<input name=names type="hidden"value="'+names+'"/>';
        $('form').append(input);
        $('form').submit();

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



    /*用户-添加*/
    function member_add(title,url,w,h){
        layer_show(title,url,w,h);
    }






</script>



        

    

    </body>
</html>




