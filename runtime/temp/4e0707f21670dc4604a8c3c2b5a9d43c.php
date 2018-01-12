<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:58:"D:\xampps\htdocs\work\bank/app/admin\view\index\index.html";i:1511868953;s:51:"D:\xampps\htdocs\work\bank/app/admin\view\base.html";i:1507780640;s:53:"D:\xampps\htdocs\work\bank/app/admin\view\header.html";i:1509438471;s:51:"D:\xampps\htdocs\work\bank/app/admin\view\menu.html";i:1511338586;s:53:"D:\xampps\htdocs\work\bank/app/admin\view\footer.html";i:1495788367;}*/ ?>
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


            
<style type="text/css">
table{ font: 9pt Tahoma, Verdana; color: #000000; }
.header{ font: 9pt Tahoma, Verdana; color: #FFFFFF; font-weight: bold; background-color: #4FB4DE }
.header th{ color: #FFFFFF;text-align: center;font-weight: bold;background-color:#3BB4F2;}
.tableborder{  border: 1px solid #4FB4DE;width:60%; margin:0 auto;} 
table th,td{border:1px solid #C9F1FF;}
a:hover {text-decoration: none;}
table a{color:#043C99;}
.cmain{min-height: 500px;}
#map{width:860px;margin:20px auto 0 20%;}
</style>
<section class="Hui-article-box">
    <nav class="breadcrumb"><i class="Hui-iconfont"></i> <a href="/" class="maincolor">首页</a>
        <span class="c-999 en">&gt;</span>
        <span class="c-666">欢迎</span>
        <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
    </nav>
    <div class="Hui-article" >
        <article class="cl pd-20" style="padding-bottom: 0">
            <!--<p class="f-20 text-success">欢迎使用网格化管理系统</p>-->
            <p>您好 <b> <?php echo \think\Session::get('user.real_name'); ?> </b>，欢迎使用网格化管理系统！ </p>
            <p>这是您第 <b><?php echo \think\Session::get('user.login_count'); ?></b> 次登录系统，上次登录IP为 <b><?php echo \think\Session::get('user.last_login_ip'); ?></b> ,上次登录时间为 <b><?php echo date('Y-m-d H:i:s',\think\Session::get('user.last_login_time')); ?></b></p>
        </article>
        <div class="cmain">
        <article class="cl pd-20" style="">
        
            <?php if($user['role_id'] == 7 or $user['role_id'] == 13 or $user['role_id'] == 20): ?>
            <div class="quare btn-primary" style="width:20%;">
                <a href="<?php echo url('admin/grid/allbank'); ?>"><p>  网格化管理 </p></a>
            </div>
            <div class="quare btn-warning" style="width:20%;">
                <a href="<?php echo url('admin/analyse/chart1'); ?>"><p> 数据分析</p></a>
            </div>
            <?php endif; ?>

            <div class="quare btn-secondary" style="width:20%;">
                <a href="<?php echo url('admin/client/clientlist'); ?>"><p> 管理客户</p></a>
            </div>
            <div class="quare btn-success" style="width:20%;">
                <a href="<?php echo url('admin/client/ebank'); ?>"><p> 客户筛选</p></a>
            </div>
            
            <?php if($user['role_id'] == 10 or $user['role_id'] == 9): ?>
            <div class="quare btn-primary">
                <a href="<?php echo url('admin/Visitrecord/activeshow'); ?>"><p>  营销活动 </p></a>
            </div>
            <div class="quare btn-warning">
                <a href="<?php echo url('admin/Visitrecord/lists'); ?>"><p> 拜访记录</p></a>
            </div>
            <?php endif; ?>
           

        </article>
       
        <?php if($user['role_id'] == 7 or $user['role_id'] == 9 or $user['role_id'] == 13 or $user['role_id'] == 20): ?>
            <div style="text-align: center;font-weight: bold;">网格化管理</div><br>
            <img src="/static/wangge/images/map.png" alt="" border="0" usemap="#mapMap" id="map"/>
            <map name="mapMap">
              <area shape="poly" coords="76,122,155,58,217,32,242,18,306,32,316,85,325,116,363,120,369,120,370,363,390,364,390,398,340,399,338,430,299,436,295,470,281,463,262,456,226,443,209,458,167,488,149,464,119,479,89,487,82,484,95,433,77,427,45,415,18,430,3,441,8,405,3,377,20,357,23,310,24,280,27,248" href="<?php echo url('admin/grid/banktree',array('bank_id'=>41)); ?>" alt="罗西">
              <area shape="poly" coords="321,29,352,12,389,14,394,27,401,46,402,114,331,113,323,94" href="<?php echo url('admin/grid/banktree',array('bank_id'=>31)); ?>" alt='岑石'>
              <area shape="poly" coords="408,114,407,54,427,53,441,56,442,109,443,115" href="<?php echo url('admin/grid/banktree',array('bank_id'=>45)); ?>" alt='美鑫'>
              
              <area shape="poly" coords="451,114,450,52,479,28,496,10,519,20,523,10,543,2,549,12,561,22,565,35,579,43,569,77,569,106,570,113" href="<?php echo url('admin/grid/banktree',array('bank_id'=>40)); ?>" alt="孟元">
              <area shape="poly" coords="575,85,578,55,590,57,597,45,611,46,618,59,618,77,620,82,632,87" href="<?php echo url('admin/grid/banktree',array('bank_id'=>28)); ?>" alt='新北'>
              <area shape="poly" coords="629,111,627,90,637,87,633,78,624,77,623,63,653,70,672,80,680,84,682,98,684,102,656,102,642,103" href="<?php echo url('admin/grid/banktree',array('bank_id'=>32)); ?>" alt='桥头'>
              <area shape="poly" coords="374,170,376,120,423,118,447,120,453,123,453,150,454,172" href="<?php echo url('admin/grid/banktree',array('bank_id'=>24)); ?>" alt='龙湖'>
              <area shape="poly" coords="459,175,456,122,487,125,506,123,507,153,494,161,493,187,505,194,510,210,524,213,527,219,511,219,510,242,461,239,459,222,469,217,466,203,459,200" href="<?php echo url('admin/grid/banktree',array('bank_id'=>28)); ?>" alt='双月'>
              <area shape="poly" coords="376,177,452,177,454,196,457,203,465,206,466,215,457,216,404,219,380,217,375,217" href="<?php echo url('admin/grid/banktree',array('bank_id'=>43)); ?>" alt='高新区'>
              <area shape="poly" coords="378,359,377,294,376,221,404,222,442,221,452,221,452,244,486,245,488,258,472,262,471,291,464,297,462,316,451,315,450,335,456,338,456,363" href="<?php echo url('admin/grid/banktree',array('bank_id'=>33)); ?>" alt='朱陈'>
              <area shape="poly" coords="514,160,512,120,557,120,556,132,550,136,551,174,547,180,548,195,552,217,533,218,528,207,514,204,514,186,503,188,498,166" href="<?php echo url('admin/grid/banktree',array('bank_id'=>2)); ?>" alt='营业部'>
              <area shape="poly" coords="553,192,553,180,554,138,563,137,564,121,578,115,576,90,623,90,623,117,637,117,639,127,643,128,644,179,628,181,629,188,597,188,599,195" href="<?php echo url('admin/grid/banktree',array('bank_id'=>29)); ?>" alt='盛庄'>
              <area shape="poly" coords="650,179,649,125,642,123,644,106,669,107,686,106,686,118,694,122,694,131,698,144,700,159,705,166,706,172,706,177,706,181" href="<?php echo url('admin/grid/banktree',array('bank_id'=>42)); ?>" alt='对河'>
              <area shape="poly" coords="651,184,651,227,689,228,690,200,751,199,756,203,782,201,783,184,800,184,792,170,783,148,777,134,773,115,769,101,767,93,766,81,760,78,757,71,741,67,731,71,725,77,707,82,701,93,692,102,694,110,698,126,703,145,706,162,709,175,709,185" href="<?php echo url('admin/grid/banktree',array('bank_id'=>27)); ?>" alt='十里'>
              <area shape="poly" coords="525,264,524,288,475,288,476,263,493,261,494,245,512,246,516,227,514,224,555,222,560,203,596,199,603,194,634,191,638,185,648,185,645,218,647,251,645,257,623,258,618,310,573,312,569,304,558,303,559,267" href="<?php echo url('admin/grid/banktree',array('bank_id'=>30)); ?>" alt='罗庄'>
              <area shape="poly" coords="625,328,629,263,652,264,695,232,722,210,790,198,819,211,832,231,847,252,850,272,864,278,864,301,793,305,727,306,723,321,678,323,676,334" href="<?php echo url('admin/grid/banktree',array('bank_id'=>37)); ?>" alt='高都'>
              <area shape="poly" coords="513,377,479,376,478,366,461,363,460,333,454,321,471,318,477,296,506,295,530,293,528,271,549,270,553,303,564,307,566,316,619,317,622,337,670,334,670,346,647,349,648,356,624,356,621,365,590,367,586,386,544,391,536,385,514,388" href="<?php echo url('admin/grid/banktree',array('bank_id'=>35)); ?>" alt='老屯'>
              <area shape="poly" coords="304,477,303,440,339,437,346,404,398,401,399,364,435,365,470,373,479,380,507,383,531,391,583,396,582,412,594,413,591,465,577,470,577,529,588,531,587,557,583,568,583,602,569,606,567,599,537,601,534,587,491,585,487,577,422,573,419,469,396,469,391,440,349,438,344,450,317,451,314,480" href="<?php echo url('admin/grid/banktree',array('bank_id'=>26)); ?>" alt='付庄'>
              <area shape="poly" coords="328,674,325,660,319,656,319,620,335,617,333,549,326,545,337,522,329,500,316,494,308,482,323,452,346,453,355,444,389,441,388,463,396,470,411,474,415,507,416,550,416,579,477,582,492,589,530,591,536,605,561,605,561,626,562,635,508,637,504,669,428,671,422,692,367,697,358,684,332,681,325,682" href="<?php echo url('admin/grid/banktree',array('bank_id'=>38)); ?>" alt='汤庄'>
              <area shape="poly" coords="714,402,713,351,676,345,678,337,685,331,687,323,720,327,731,313,753,310,790,310,834,312,865,309,877,337,889,358,898,378,890,395,884,408,863,415,861,430,843,431,837,418,825,416,822,410,788,408,777,409,752,410,742,405" href="<?php echo url('admin/grid/banktree',array('bank_id'=>39)); ?>" alt='红胜'>
              
              <area shape="poly" coords="600,466,602,406,596,374,630,362,662,356,698,355,707,404,733,413,776,420,792,413,812,415,813,450,805,484,808,513,769,560,746,579,724,575,719,596,709,606,725,620,751,631,769,640,666,749,649,774,633,803,620,823,596,844,552,861,517,877,506,808,450,827,459,838,467,866,437,909,410,933,373,942,346,959,342,971,320,978,312,944,259,934,265,889,244,876,255,823,237,801,286,748,264,707,294,668,318,665,348,687,370,699,421,699,432,675,500,672,514,642,559,640,570,614,588,613,596,531,582,526,583,479" href="<?php echo url('admin/grid/banktree',array('bank_id'=>36)); ?>" alt='册山'>
            </map>
        <?php endif; if($user['role_id'] == 10): ?>
         <table border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder" style="border-collapse:normal;border-spacing: 1;">
                <tr class="header">
                   <th height="30px">ID</th>
                   <th>小区名</th>
                   <th>客户数量</th>
                   <!-- <th>管辖小区数量</th> -->
                </tr>
                <?php if(is_array($gridlist) || $gridlist instanceof \think\Collection || $gridlist instanceof \think\Paginator): $i = 0; $__LIST__ = $gridlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <tr bgcolor="#FFFFFF" height="26px">
                    <td  align="center"> <?php echo (isset($vo['id']) && ($vo['id'] !== '')?$vo['id']:''); ?> </td>
                    <td align="center"> <a href="<?php echo url('admin/grid/wangge',array('id'=>$vo['id'])); ?>"><?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?></a> </td>
                    <td align="center"> <a href="<?php echo url('admin/grid/wangge',array('id'=>$vo['id'])); ?>"><?php echo (isset($vo['count']) && ($vo['count'] !== '')?$vo['count']:''); ?></a> </td>
                   <!--  <td  align="center"> 已审核 </td> -->
                </tr>      
                <?php endforeach; endif; else: echo "" ;endif; ?>
        </table>
         <?php endif; ?> 
         </div>
         <br/><br/><br/>
         
        <?php if($user['role_id'] != 10): ?>
        <div id="chart3" style="width:90%;height:500px;display: inline-block;"></div>
        <br/><br/><br/>
        <div id="chart2" style="width:90%;height:500px;display: inline-block;"></div>
        <br/><br/><br/>
        <div id="chart1" style="width:90%;height:500px;display: inline-block;"></div>
        
        <!--请在下方写此页面业务相关的脚本-->
        <script src="/static/lib/echarts/echarts.simple.min.js"></script>
        <script type="text/javascript">
            // 基于准备好的dom，初始化echarts实例
            var myChart1 = echarts.init(document.getElementById('chart1'));
            // 指定图表的配置项和数据
            option1 = option1 = {
                title: {
                    text: '签约统计',
                    subtext: ''
                },
                tooltip: {
                    trigger: 'axis',
                    axisPointer: {
                        type: 'shadow'
                    }
                },
                legend: {
                    data: ['数量']
                },
                grid: {
                    left: '3%',
                    right: '4%',
                    bottom: '3%',
                    containLabel: true
                },
                yAxis: {
                    type: 'value',
                    boundaryGap: [0, 0.01]
                },
                xAxis: {
                    type: 'category',
                    data: <?php echo $dep1; ?>
                },
                series: [
                    {
                        name: '数量',
                        type: 'bar',
                        data: <?php echo $det1; ?>
                    }
                ]
            };
            // 使用刚指定的配置项和数据显示图表。
            myChart1.setOption(option1);

            // 基于准备好的dom，初始化echarts实例
            var myChart2 = echarts.init(document.getElementById('chart2'));
            // 指定图表的配置项和数据
            option2 = {
                title: {
                    text: '贷款业务款统计',
                    subtext: '2010年-2017年06月'
                },
                tooltip: {
                    trigger: 'axis',
                    axisPointer: {
                        type: 'shadow'
                    }
                },
                legend: {
                    data: ['发放贷款总额']
                },
                grid: {
                    left: '3%',
                    right: '4%',
                    bottom: '3%',
                    containLabel: true
                },
                yAxis: {
                    type: 'value',
                    boundaryGap: [0, 0.01]
                },
                xAxis: {
                    type: 'category',
                    data: <?php echo $dep2; ?>
                },
                series: [
                    {
                        name: '发放贷款总额',
                        type: 'bar',
                        areaStyle: {normal: {color: '#33CC99'}},
                        itemStyle: {
                            normal: {
                                // 设置扇形的颜色
                                color: '#33CC99',
                                lineStyle:{color: '#33CC99'}
                            }
                        },
                        data: <?php echo $det2; ?>
                    }
                ]
            };
            // 使用刚指定的配置项和数据显示图表。
            myChart2.setOption(option2);
           
                       // 基于准备好的dom，初始化echarts实例
            var myChart3 = echarts.init(document.getElementById('chart3'));
            // 指定图表的配置项和数据
            option3 = {
                title: {
                    text: '  各支行发放贷款排名',
                    subtext: '  依据最新月份台帐'
                },
                tooltip: {
                    trigger: 'axis',
                    axisPointer: {
                        type: 'shadow'
                    }
                },
                legend: {
                    data: ['发放贷款总额']
                },
                grid: {
                    left: '3%',
                    right: '4%',
                    bottom: '3%',
                    containLabel: true
                },
                yAxis: {
                    type: 'value',
                    boundaryGap: [0, 0.01]
                },
                xAxis: {
                    type: 'category',
                    data: <?php echo $dep3; ?>
                },
                series: [
                    {
                        name: '发放贷款总额',
                        type: 'bar',
                        areaStyle: {normal: {color: '#33CC99'}},
                        itemStyle: {
                            normal: {
                                // 设置扇形的颜色
                                color: 'red',
                                lineStyle:{color: '#33CC99'}
                            }
                        },
                        data: <?php echo $det3; ?>
                    }
                ]
            };
            // 使用刚指定的配置项和数据显示图表。
            myChart3.setOption(option3);
        </script>
        <?php endif; ?>

        <footer class="footer">
            <p> © 2017 罗庄农村商业银行 . All rights reserved.  (请使用IE9+、Chrome 或 Firefox 浏览器访问本系统以获得更好的体验.) <br> 本系统由<a href="javascript:" target="_blank" >沂蒙软件研发中心</a> 提供技术支持</p>
        </footer>
    </div>
</section>

    <style>

        .quare{
            width: 260px;
            height: 90px;
            display: inline-block;
            margin-right: 20px;
            margin-bottom: 20px;
        }
        .quare p{
            line-height: 90px;
            text-align: center;
            font-size: 20px;
            color: #FFFFFF;
        }

    </style>



        

    

    </body>
</html>




