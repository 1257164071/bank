<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:54:"F:\www\bank.cn/app/admin\view\client\clientselect.html";i:1511503040;s:39:"F:\www\bank.cn/app/admin\view\base.html";i:1507780640;s:41:"F:\www\bank.cn/app/admin\view\header.html";i:1509438471;s:39:"F:\www\bank.cn/app/admin\view\menu.html";i:1511338586;s:41:"F:\www\bank.cn/app/admin\view\footer.html";i:1495788367;}*/ ?>
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
        <form action="<?php echo url('client/clientresult'); ?>" method="post">
            <div class="panel panel-secondary mt-21">
                <div class="panel-header">选择筛选条件</div>
                <div class="panel-body">
                    <table class="table table-border table-bordered table-hover">
                        <div id="cleint">
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
                    </div>
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
                        </tr>
                        <tr>
                            <td>家庭总资产</td>
                            <td><input type="text" style="width: 35%;" class="input-text" name="start_family_money"/>万元-<input type="text" style="width:35%;" class="input-text" name="end_family_money"/>万元</td>
                            <td>家庭总负债</td>
                            <td><input type="text" style="width: 35%;" class="input-text" name="start_family_debt"/>万元-<input type="text" style="width: 35%;;" class="input-text" name="end_family_debt"/>万元</td>
                            <td>家庭年收入</td>
                            <td><input type="text" style="width: 35%;;" class="input-text" name="start_family_year_income"/>万元-<input type="text" style="width: 35%;;" class="input-text" name="end_family_year_income"/>万元</td>
                            <td>家庭年支出</td>
                            <td><input type="text" style="width: 35%;;" class="input-text" name="start_family_year_spending"/>万元-<input type="text" style="width: 35%;;" class="input-text" name="end_family_year_spending"/>万元</td>
                        </tr>
                        <tr>
                            <td>工作单位</td>
                            <td>
                                <input type="text" class="input-text" name="workunit"/>
                            </td>
                            <td >现住址</td>
                            <td >
                                <input type="text" class="input-text" name="current_address"/>
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
                            
                            <td>客户等级</td>
                            <td>
                               <span class="select-box"  >
                                <select class="select" name="card_class1708"  >
                                   <option value="">==请选择==</option>
                                    <?php if(is_array($card_class1708) || $card_class1708 instanceof \think\Collection || $card_class1708 instanceof \think\Paginator): $key = 0; $__LIST__ = $card_class1708;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($key % 2 );++$key;?>
                                    <option value="<?php echo $key-1; ?>"><?php echo $list; ?></option>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                                </span>
                               
                            </td>
                           
                        </tr>
                        <tr>
                        <td>网银</td>
                            <td>
                           <span class="select-box" >
                                <select class="select" name="wangyin"  >
                                   <option value="">==请选择==</option>
                                    <option   value="未">未开通</option>
                                    <option  value="1">开通</option>
                                    
                                    
                                </select>
                            </span>
                               
                            </td>
                            <td>短信版</td>
                            <td>
                               <span class="select-box" >
                                    <select class="select" name="duanxinban"  >
                                       <option value="">==请选择==</option>
                                        <option   value="未">未开通</option>
                                        <option  value="1">开通</option>  
                                    </select>
                                </span> 
                            </td>
                            <td>客户端</td>
                            <td>
                               <span class="select-box" >
                                    <select class="select" name="kehuduan"  >
                                       <option value="">==请选择==</option>
                                        <option   value="未">未开通</option>
                                        <option  value="1">开通</option>  
                                    </select>
                                </span> 
                            </td>
                            <td>wap</td>
                            <td>
                               <span class="select-box" >
                                    <select class="select" name="wap"  >
                                       <option value="">==请选择==</option>
                                        <option   value="未">未开通</option>
                                        <option  value="1">开通</option>  
                                    </select>
                                </span> 
                            </td>
                            </tr>
                            <tr>
                            <td>短信通</td>
                            <td>
                               <span class="select-box" >
                                    <select class="select" name="duanxintong"  >
                                       <option value="">==请选择==</option>
                                        <option   value="未">未开通</option>
                                        <option  value="1">开通</option>  
                                    </select>
                                </span> 
                            </td>
                            <td>快捷支付</td>
                            <td>
                               <span class="select-box" >
                                    <select class="select" name="quickpay"  >
                                       <option value="">==请选择==</option>
                                        <option   value="未">未开通</option>
                                        <option  value="1">开通</option>  
                                    </select>
                                </span> 
                            </td>
                            <td>有效复合卡</td>
                            <td>
                               <span class="select-box" >
                                    <select class="select" name="fuhe_card"  >
                                       <option value="">==请选择==</option>
                                        <option   value="无">无</option>
                                        <option  value="有">有</option>  
                                    </select>
                                </span> 
                            </td>
                            <td>有效磁条卡</td>
                            <td>
                               <span class="select-box" >
                                    <select class="select" name="citiao_card"  >
                                       <option value="">==请选择==</option>
                                        <option   value="无">无</option>
                                        <option  value="有">有</option>  
                                    </select>
                                </span> 
                            </td>
                            </tr>
                            <tr>
                             <td>揽存人员</td>
                            <td>
                               <input type="text" class="input-text" name="lancun_man"/>
                            </td>
                             <td colspan="6">
                                <a class="btn btn-success radius" onclick="submit()" href="javascript:;">筛选</a>
                            </td>
                        </tr>
                    </table>
                </form>
                </div>
            </div>
            <div class="panel mt-21">
                <article class="cl pd-20">
            <div class="mt-20">
               <table class="table table-border table-bordered table-hover table-bg table-sort">
                    <thead>
                        <tr class="text-c">
                        <!-- <th width="25"><input type="checkbox" name="" value=""></th> -->
                            <th>ID</th>
                            <th>客户编号</th>
                            <th>客户名称</th>
                            <th>证件号码</th>
                            <th>性别</th>
                            <th>所属区域</th>
                            <th>签约网点</th> 
                            <th>网银</th>
                            <th>短信版</th>
                            <th>客户端</th>
                            <th>wap</th>
                            <th>短信通</th>            
                            <th>快捷支付</th>
                            <th>有效复合卡</th>
                            <th>有效磁条卡</th>
                            <th>揽存人员</th>
                            <th>操作</th>
                        </tr>
                    </thead>

                    <tbody>
                    <?php if(is_array($clients) || $clients instanceof \think\Collection || $clients instanceof \think\Paginator): $i = 0; $__LIST__ = $clients;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$clients): $mod = ($i % 2 );++$i;?>
                        <tr class="text-c">
                        <!-- <td><input type="checkbox" value="<?php echo $clients['id']; ?>" name="id[]"></td> -->
                            <td><?php echo $clients['id']; ?></td>
                            <td><?php echo $clients['client_number']; ?></td>
                            <td><?php echo $clients['name']; ?></td>
                            <td><?php echo $clients['card_number']; ?></td>
                            <td><?php if($clients['sex']==1): ?>男<?php endif; if($clients['sex']==2): ?>女<?php endif; ?></td>
                            <td><?php echo $clients['gridname']; ?></td>
                            <td><?php echo $clients['sign_website_name']; ?></td>
                            <?php if(empty($clients['wangyin'])): ?>
                                <td></td>
                            <?php else: ?>
                                <td style="color: red;">已开通</td>
                            <?php endif; if(empty($clients['duanxinban'])): ?>
                                <td></td>
                            <?php else: ?>
                                <td style="color: red;">已开通</td>
                            <?php endif; if(empty($clients['kehuduan'])): ?>
                                <td></td>
                            <?php else: ?>
                                <td style="color: red;">已开通</td>
                            <?php endif; if(empty($clients['wap'])): ?>
                                <td></td>
                            <?php else: ?>
                                <td style="color: red;">已开通</td>
                            <?php endif; if(empty($clients['duanxintong'])): ?>
                                <td></td>
                            <?php else: ?>
                                <td style="color: red;">已开通</td>
                            <?php endif; if(empty($clients['quickpay'])): ?>
                                <td></td>
                            <?php else: ?>
                                <td style="color: red;">已开通</td>
                            <?php endif; ?>
                            
                                <td><?php echo $clients['fuhe_card']; ?></td>
                        
                                <td><?php echo $clients['citiao_card']; ?></td>
                                <td><?php echo $clients['lancun_man']; ?></td>
                            <td class="td-manage">
                                <a style="text-decoration:none"  href="<?php echo url('clientdetail',array('client_id'=>$clients['id'])); ?>" title="查看客户详情"><i class="Hui-iconfont">&#xe725;</i>查看</a>&nbsp;&nbsp;
                                <a title="删除客户" href="<?php echo url('del',array('client_id'=>$clients['id'])); ?>" class="ml-5" onclick="return confirm('确认删除');" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i>删除</a></td>
                        </tr>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </tbody>
                </table>
            </div>
            <div class="page"><?php echo $page; ?></div>
        </article>
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




