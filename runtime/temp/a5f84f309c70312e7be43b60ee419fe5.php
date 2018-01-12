<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:54:"F:\www\bank.cn/app/admin\view\client\clientdetail.html";i:1509611274;s:39:"F:\www\bank.cn/app/admin\view\base.html";i:1507780640;s:41:"F:\www\bank.cn/app/admin\view\header.html";i:1509438471;s:39:"F:\www\bank.cn/app/admin\view\menu.html";i:1511338586;s:45:"F:\www\bank.cn/app/admin\view\clientmenu.html";i:1509427022;s:41:"F:\www\bank.cn/app/admin\view\footer.html";i:1495788367;}*/ ?>
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


            
<link href="/static/lib/webuploader/0.1.5/webuploader.css" rel="stylesheet" type="text/css" />
<div class="Hui-article-box">

    <nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> <?php echo $title1; ?><span class="c-gray en">&gt;</span><?php echo $title2; ?><a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:history.go(-1);" title="返回" >返回</a></nav>
    <div class="Hui-article">
    <div class="panel panel-default" >
        <div class="panel-header">
            <span>客户编号&nbsp;[<?php echo $client['client_number']; ?>]</span>&nbsp;&nbsp;&nbsp;&nbsp;
            <span>客户名称&nbsp;[<?php echo $client['name']; ?>]</span>&nbsp;&nbsp;&nbsp;&nbsp;
            <span>所属机构&nbsp;[<?php echo (isset($client['bankname']) && ($client['bankname'] !== '')?$client['bankname']:'罗庄农村商业银行'); ?>]</span>
        </div>
    </div>
     <div class="btn-group" style="text-align: center;">
          <span class="btn <?php if($controller == 'Client'): ?>btn-primary<?php else: ?>btn-default<?php endif; ?> radius"><a href="<?php echo url('client/clientdetail',array('client_id'=>$client['id'])); ?>">基本信息</a></span>
  <span class="btn <?php if($controller == 'Deposit'): ?>btn-primary<?php else: ?>btn-default<?php endif; ?> radius"><a href="<?php echo url('deposit/index',array('client_id'=>$client['id'])); ?>">存款信息</a></span>
  <span class="btn <?php if($controller == 'Creditloan'): ?>btn-primary<?php else: ?>btn-default<?php endif; ?> radius"><a href="<?php echo url('creditloan/index',array('card_number'=>$client['card_number'])); ?>">贷款信息</a></span>
  <span class="btn <?php if($controller == 'Familymember'): ?>btn-primary<?php else: ?>btn-default<?php endif; ?> radius"><a href="<?php echo url('familymember/index',array('client_id'=>$client['id'])); ?>">家庭成员信息</a></span>
  <span class="btn <?php if($controller == 'Sign'): ?>btn-primary<?php else: ?>btn-default<?php endif; ?> radius"><a href="<?php echo url('sign/index',array('card_number'=>$client['card_number'])); ?>">签约信息</a></span>
  <span class="btn <?php if($controller == 'Familyfund'): ?>btn-primary<?php else: ?>btn-default<?php endif; ?> radius"><a href="<?php echo url('familyfund/index',array('client_id'=>$client['id'])); ?>">家庭资产查控</a></span>
  <span class="btn <?php if($controller == 'Credit'): ?>btn-primary<?php else: ?>btn-default<?php endif; ?> radius"><a href="<?php echo url('credit/index',array('client_id'=>$client['id'])); ?>">授信信息</a></span>
  <!--<span class="btn btn-default radius"><a href="<?php echo url('Msgchange/index',array('client_id'=>$client['id'])); ?>">客户信息变更记录</a></span>-->
  <span class="btn <?php if($controller == 'Picupload'): ?>btn-primary<?php else: ?>btn-default<?php endif; ?> radius"><a href="<?php echo url('picupload/index',array('client_id'=>$client['id'])); ?>">附件上传</a></span>
     </div>

    <h4 style=" text-align: center;">客户资料表</h4>
    <div>
        <div class="panel panel-default">
            <div class="panel-header" style="display: flex;justify-content: space-between;"><span>基本信息</span><a href="javascript:;" onclick="submit('修改身份信息','<?php echo url('client/edit',array('client_id'=>$client['id'])); ?>','800','510')" ><i class="Hui-iconfont">&#xe6df;</i>编辑</a></div>
            <div class="panel-body">
                <table class="table table-border table-bordered table-hover">
                    <tr>
                        <td style="width: 55px;">客户编号</td><td style="width: 200px;"><?php echo (isset($client['client_number']) && ($client['client_number'] !== '')?$client['client_number']:''); ?></td>
                        <td style="width: 55px;">客户类型</td><td style="width: 200px;"><?php echo get_name('type',$client['type']); ?></td>
                        <td rowspan="6" style="text-align: center;"><?php if(empty($client['pic_url'])): ?><a  class='btn btn-secondary radius' href="javascript:;" onclick="submit('上传头像','<?php echo url('client/uploadpost',array('client_id'=>$client['id'])); ?>','800','510')" ><i class="Hui-iconfont">&#xe60a;</i>上传头像</a><?php else: ?><img onclick="submit('修改头像','<?php echo url('client/uploadpost',array('client_id'=>$client['id'])); ?>','800','510')" style='width:230px;height: 230px; 'src="<?php echo $client['pic_url']; ?>"/><?php endif; ?></td>
                    </tr>
                    <tr>
                        <td>客户名称</td><td><?php echo $client['name']; ?></td>
                        <td>性别</td><td><?php if($client['sex']==1): ?>男<?php endif; if($client['sex']==2): ?>女<?php endif; ?></td>
                    </tr>
                    <tr>
                        <td>证件类型</td><td><?php if($client['card_type']==0): ?>身份证<?php else: ?>其他<?php endif; ?></td>
                        <td>证件号码</td><td><?php echo $client['card_number']; ?></td>
                    </tr>
                    <tr>
                        <td>民族</td><td><?php if($client['nation_id']==1 or $client['nation_id']==0): ?>汉<?php endif; if($client['nation_id']==2): ?>少数民族<?php endif; ?></td>
                        <td>出生日期</td><td><?php if($client['valid_time']!=''): ?><?php echo date('Y-m-d',$client['born_date']);; else: ?> -<?php endif; ?></td>
                    </tr>
                    <tr>
                        <td>手机</td><td><?php echo (isset($client['tel_number']) && ($client['tel_number'] !== '')?$client['tel_number']:''); ?></td> 
                        <td>住址</td ><td><?php echo (isset($client['address']) && ($client['address'] !== '')?$client['address']:''); ?></td>
                    </tr>
                    <tr>
                        <td>有效期限</td><td><?php if($client['valid_time']!=''): ?><?php echo date("Y-m-d",$client['valid_time']); else: ?> -<?php endif; ?></td>
                        <td>签发机关</td><td><?php echo (isset($client['issue_office']) && ($client['issue_office'] !== '')?$client['issue_office']:''); ?></td>
                    </tr>
                </table>
                <div id="mapContainer" style="height: 400px;margin: 10px 0 0;"></div>
            </div>
        </div>


        <div class="panel panel-default">
            <div class="panel-header" style="display: flex;justify-content: space-between;"><span>详细信息</span></span></div>
            <div class="panel-body">
    
                <table class="table table-border table-bordered table-hover">
                    <tr>
                        <td style="width: 70px;">婚姻状况</td><td style="width: 200px;"><?php if($client['marriage_status']==1): ?>未婚<?php elseif($client['marriage_status'] == 2): ?>已婚<?php elseif($client['marriage_status'] == 3): ?>丧偶<?php elseif($client['marriage_status']==4): ?>离婚<?php endif; ?></td>
                        <td style="width: 70px;">结婚证登记日期</td><td style="width: 200px;"><?php if($client['married_record_date'] != 0 && $client['married_record_date'] > 0): ?><?php echo date('Y-m-d',$client['married_record_date']);; endif; ?></td>
                    </tr>
                    <tr>
                        <td>有无子女</td><td><?php if($client['children']==0 && $client['children'] != ''): ?>无<?php elseif($client['children']==1): ?>有<?php endif; ?></td>
                        <td>是否涉农</td><td><?php if($client['is_farmer']==0 && $client['is_farmer'] != ''): ?>否<?php elseif($client['is_farmer']==1): ?>是<?php endif; ?></td>
                    </tr>
                    <tr>
                        <td>行政区划（省）</td><td>山东省</td>
                        <td>行政区划（市）</td><td>临沂市</td>
                    </tr>
                    <tr>
                        <td>行政区划（县/区）</td><td>罗庄区</td>
						<td>行政区划（小区）</td><td><?php echo (isset($client['gridname']) && ($client['gridname'] !== '')?$client['gridname']:''); ?> - <?php echo (isset($client['lou']) && ($client['lou'] !== '')?$client['lou']:''); ?>号楼  <?php if($client['danyuan'] != 0): ?> - <?php echo (isset($client['danyuan']) && ($client['danyuan'] !== '')?$client['danyuan']:''); ?>单元<?php endif; ?>  - <?php echo (isset($client['hu']) && ($client['hu'] !== '')?$client['hu']:''); ?>室</td>
                    </tr>
                    <tr>
                        <td>现住址</td><td><?php echo (isset($client['current_address']) && ($client['current_address'] !== '')?$client['current_address']:''); ?></td>
                        <td>现住址邮编</td><td><?php echo (isset($client['current_postcode']) && ($client['current_postcode'] !== '')?$client['current_postcode']:''); ?></td>
                    </tr>
                    <tr>
                        <td>通讯地址</td><td><?php echo (isset($client['corresponding_address']) && ($client['corresponding_address'] !== '')?$client['corresponding_address']:''); ?></td>
                        <td>通讯地址邮编</td><td><?php echo (isset($client['corresponding_postcode']) && ($client['corresponding_postcode'] !== '')?$client['corresponding_postcode']:''); ?></td>
                    </tr>
                    <tr>
                        <td>最高学位</td><td>
                        <?php if(isset($client['highest_degree'])&&!is_array(get_name('highest_degree',$client['highest_degree']))): ?>
                         <?php echo get_name('highest_degree',$client['highest_degree']); endif; ?>
                      <!--  <?php if(isset($client['highest_degree'])&&($client['highest_degree'] == 0)): endif; if(isset($client['highest_degree'])&&($client['highest_degree'] == 1)): ?>学士学位<?php endif; if(isset($client['highest_degree'])&&($client['highest_degree'] == 2)): ?>硕士学位<?php endif; if(isset($client['highest_degree'])&&($client['highest_degree'] == 3)): ?>博士学位<?php endif; ?>  -->
                        </td>
                        <td>最高学历</td><td>
                        <?php if(isset($client['highest_education'])&&!is_array(get_name('highest_education',$client['highest_education']))): ?>
                            <?php echo get_name('highest_education',$client['highest_education']); endif; ?>
                          <!--  <?php if(isset($client['highest_education'])&&($client['highest_education'] == 1)): ?>初中水平<?php endif; if(isset($client['highest_education'])&&($client['highest_education'] == 2)): ?>高中水平<?php endif; if(isset($client['highest_education'])&&($client['highest_education'] == 3)): ?>大专<?php endif; if(isset($client['highest_education'])&&($client['highest_education'] == 4)): ?>本科<?php endif; if(isset($client['highest_education'])&&($client['highest_education'] == 5)): ?>硕士<?php endif; if(isset($client['highest_education'])&&($client['highest_education'] == 6)): ?>博士<?php endif; ?>  -->
                        </td>
                    </tr>
                    <tr>
                        <td>行业分类</td><td><?php echo (isset($client['industry_category']) && ($client['industry_category'] !== '')?$client['industry_category']:''); ?></td>
                        <td>居住状况</td><td><?php if(isset($client['live_status'])&&!is_array(get_name('live_status',$client['live_status']))): ?><?php echo get_name('live_status',$client['live_status']); endif; ?></td>
                    </tr>
                     <tr>
                        <td>是否扶贫户</td ><td><?php if($client['is_poor']==0 && $client['is_poor']!=''): ?>否<?php elseif($client['is_poor'] == 1): ?>是<?php endif; ?></td>
                        <td>健康状况</td><td><?php if(isset($client['physical_condition'])&&!is_array(get_name('physical_condition',$client['physical_condition']))): ?><?php echo get_name('physical_condition',$client['physical_condition']); endif; ?></td>
                    </tr>
                    <tr>
                       
                        <td>工作单位</td><td colspan="3"><?php echo (isset($client['workunit']) && ($client['workunit'] !== '')?$client['workunit']:''); ?></td>
                    </tr>
                  <!--   <tr>
                        <td>存款</td><td><?php echo (isset($client['save_money']) && ($client['save_money'] !== '')?$client['save_money']:'0'); ?></td>
                        <td>贷款</td><td><?php echo (isset($client['loan_money']) && ($client['loan_money'] !== '')?$client['loan_money']:'0'); ?></td>
                    </tr>
                     <tr>
                        <td>担保贷款</td><td><?php echo (isset($client['guarantor']) && ($client['guarantor'] !== '')?$client['guarantor']:'0'); ?>份</td>
                        <td>不良记录</td><td><?php echo (isset($client['bad_record']) && ($client['bad_record'] !== '')?$client['bad_record']:'0'); ?>次</td>
                    </tr>
                    <tr>
                        <td>电子银行</td><td colspan="3"><?php if(!empty($client['e_bank'])): ?><?php echo get_name('e_bank',$client['e_bank']); endif; ?></td>

                    </tr> -->
                </table>
                <br/>
            </div>
        </div>

            <div class="panel panel-default">
                <div class="panel-header" style="display: flex;justify-content: space-between;"><span>资产信息</span></span></div>
                <div class="panel-body">
                    <table class="table table-border table-bordered table-hover">
                        <tr>
                            <td style="width: 55px;">评级结果</td><td style="width: 200px;">
                            <?php if($client['class_result'] == 1): ?>逾期客户<?php endif; if($client['class_result'] == 2): ?>有记录客户<?php endif; if($client['class_result'] == 3): ?>普通客户<?php endif; if($client['class_result'] == 4): ?>潜在客户<?php endif; if($client['class_result'] == 5): ?>优质客户<?php endif; if($client['class_result'] == 6): ?>金钻客户<?php endif; ?>
                            </td>
                            <td style="width: 55px;">家庭总人数</td><td style="width: 200px;"> <?php echo (isset($client['family_people']) && ($client['family_people'] !== '')?$client['family_people']:''); ?></td>

                        </tr>
                        <tr>
                            <td>家庭总资产</td><td><?php echo (isset($client['family_money']) && ($client['family_money'] !== '')?$client['family_money']:''); ?></td>
                            <td>家庭总负债</td><td><?php echo (isset($client['family_debt']) && ($client['family_debt'] !== '')?$client['family_debt']:''); ?></td>
                        </tr>
                        <tr>
                            <td>家庭年收入</td><td><?php echo (isset($client['family_year_income']) && ($client['family_year_income'] !== '')?$client['family_year_income']:''); ?></td>
                            <td>家庭年支出</td><td><?php echo (isset($client['family_year_spending']) && ($client['family_year_spending'] !== '')?$client['family_year_spending']:''); ?></td>
                        </tr>
                        <tr>
                            <td>工资账号</td><td><?php echo (isset($client['wage_number']) && ($client['wage_number'] !== '')?$client['wage_number']:''); ?></td>
                            <td>工资账号所属银行</td><td><?php echo (isset($client['wage_belong_bank']) && ($client['wage_belong_bank'] !== '')?$client['wage_belong_bank']:''); ?></td>
                        </tr>

                    </table>
                   
                </div>
            </div>
            
             <div class="panel panel-default">
                <div class="panel-header" style="display: flex;justify-content: space-between;"><span>品行信息</span><span><?php if(!empty($tese)): ?><a href="javascript:;" onclick="submit('修改特色信息','<?php echo url('admin/client/tese_edit',array('card_number'=>$client['card_number'])); ?>','800','510')" ><i class="Hui-iconfont">&#xe6df;</i>编辑</a><?php else: ?><a href="javascript:;" onclick="submit('添加特色信息','<?php echo url('admin/client/tese_add',array('card_number'=>$client['card_number'])); ?>','800','510')" ><i class="Hui-iconfont">&#xe604;</i>添加</a><?php endif; ?></span></div>

                <div class="panel-body">
                    <table class="table table-border table-bordered table-hover">
                        <tr>
                            <td style="width: 55px;">家庭关系</td>
                            <td style="width: 200px;">
                                <?php echo (isset($tese['pinxing_familyrelation_name']) && ($tese['pinxing_familyrelation_name'] !== '')?$tese['pinxing_familyrelation_name']:''); ?>
                            </td>
                            <td style="width: 55px;">社会声誉</td>
                            <td style="width: 200px;"> <?php echo (isset($tese['pinxing_shengyu_name']) && ($tese['pinxing_shengyu_name'] !== '')?$tese['pinxing_shengyu_name']:''); ?></td>
                        </tr>
                        <tr>
                            <td>不良行为</td><td><?php echo (isset($tese['pinxing_buliang_name']) && ($tese['pinxing_buliang_name'] !== '')?$tese['pinxing_buliang_name']:''); ?></td>
                            <td>诚信状况</td><td><?php echo (isset($tese['pinxing_chengxin_name']) && ($tese['pinxing_chengxin_name'] !== '')?$tese['pinxing_chengxin_name']:''); ?></td>
                        </tr>
                        <tr>
                            <td>创新能力</td>
                            <td><?php echo (isset($tese['pinxing_chuangxin_name']) && ($tese['pinxing_chuangxin_name'] !== '')?$tese['pinxing_chuangxin_name']:''); ?></td>
                            <td></td><td></td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-header" style="display: flex;justify-content: space-between;"><span>种植信息</span></div>
                <div class="panel-body">
                    <table class="table table-border table-bordered table-hover">
                        <tr>
                            <td style="width: 55px;">种植种类</td>
                            <td style="width: 200px;">
                                <?php echo (isset($tese['zhongzhi_class_name']) && ($tese['zhongzhi_class_name'] !== '')?$tese['zhongzhi_class_name']:''); ?>

                            </td>
                            <td style="width: 55px;">种植亩数</td>
                            <td style="width: 200px;"> <?php if($tese['zhongzhi_num'] != 0): ?><?php echo (isset($tese['zhongzhi_num']) && ($tese['zhongzhi_num'] !== '')?$tese['zhongzhi_num']:''); endif; ?>&nbsp;亩</td>

                        </tr>
                        <tr>
                            <td>种植模式</td><td><?php echo (isset($tese['zhongzhi_mode_name']) && ($tese['zhongzhi_mode_name'] !== '')?$tese['zhongzhi_mode_name']:''); ?></td>
                            <td>亩产</td><td><?php if($tese['zhongzhi_muchan'] != 0): ?><?php echo (isset($tese['zhongzhi_muchan']) && ($tese['zhongzhi_muchan'] !== '')?$tese['zhongzhi_muchan']:''); endif; ?>&nbsp;斤</td>
                        </tr>
                        <tr>
                            <td>种植年限</td>
                            <td><?php if(!empty($tese['zhongzhi_years'])): ?><?php echo (isset($tese['zhongzhi_years']) && ($tese['zhongzhi_years'] !== '')?$tese['zhongzhi_years']:''); endif; ?>&nbsp;年起</td>
                            <td></td><td></td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-header" style="display: flex;justify-content: space-between;"><span>养殖信息</span></div>
                <div class="panel-body">
                    <table class="table table-border table-bordered table-hover">
                        <tr>
                            <td style="width: 55px;">养殖种类</td>
                            <td style="width: 200px;">
                                <?php echo (isset($tese['yangzhi_class_name']) && ($tese['yangzhi_class_name'] !== '')?$tese['yangzhi_class_name']:''); ?>
                            </td>
                            </td>
                            <td style="width: 55px;">养殖数量</td>
                            <td style="width: 200px;"> <?php if($tese['yangzhi_num'] != 0): ?><?php echo (isset($tese['yangzhi_num']) && ($tese['yangzhi_num'] !== '')?$tese['yangzhi_num']:''); endif; ?></td>

                        </tr>
                        <tr>
                            <td>养殖年限</td><td><?php if(!empty($tese['yangzhi_years'])): ?><?php echo (isset($tese['yangzhi_years']) && ($tese['yangzhi_years'] !== '')?$tese['yangzhi_years']:''); endif; ?>&nbsp;年起</td>
                            <td>固定资产</td><td><?php echo (isset($tese['yangzhi_zichan']) && ($tese['yangzhi_zichan'] !== '')?$tese['yangzhi_zichan']:''); ?></td>
                        </tr>

                    </table>
                </div>
            </div>
            
            <div class="panel panel-default">
                <div class="panel-header" style="display: flex;justify-content: space-between;">
                    <span>工作信息</span>
                </div>
                <div class="panel-body">
                    <table class="table table-border table-bordered table-hover">
                        <tr>
                            <td style="width: 55px;">有无固定工作</td><td style="width: 200px;">
                            <?php echo (isset($tese['guding_work_name']) && ($tese['guding_work_name'] !== '')?$tese['guding_work_name']:''); ?>
                        </td>
                            <td style="width: 55px;">工作单位</td><td style="width: 200px;"> <?php echo (isset($tese['work_place']) && ($tese['work_place'] !== '')?$tese['work_place']:''); ?></td>
                        </tr>
                        <tr>
                            <td>工作单位地址</td><td><?php echo (isset($tese['work_address']) && ($tese['work_address'] !== '')?$tese['work_address']:''); ?></td>
                            <td>单位地址邮编</td><td><?php if(isset($tese['work_postcode']) && $tese['work_postcode']!= 0): ?><?php echo (isset($tese['work_postcode']) && ($tese['work_postcode'] !== '')?$tese['work_postcode']:''); endif; ?></td>
                        </tr>
                        <tr>
                            <td>单位工作起始年份</td><td><?php if((!empty($tese['start_work']))): ?><?php echo date('Y-m-d',$tese['start_work']); endif; ?></td>
                            <td>职称</td><td><?php if((!empty($tese['job_title']))): ?><?php echo get_name('job_title',$tese['job_title']); endif; ?></td>
                        </tr>
                        <tr>
                            <td>职务</td><td><?php if((!empty($tese['duty']))): ?><?php echo get_name('duty',$tese['duty']); endif; ?></td>
                            <td>职务细分</td><td><?php if((!empty($tese['duty_xifen']))): ?><?php echo get_name('duty_xifen',$tese['duty_xifen']); endif; ?></td>
                        </tr>
                        <tr>
                            <td>职业</td><td><?php echo (isset($tese['occupation']) && ($tese['occupation'] !== '')?$tese['occupation']:''); ?></td>
                            <td>单位联系方式</td><td><?php echo (isset($tese['unit_phone']) && ($tese['unit_phone'] !== '')?$tese['unit_phone']:''); ?></td>
                        </tr>
                        <tr>
                            <td>医疗保险上年度合计缴纳金额</td><td colspan="3"><?php echo (isset($tese['pay_amount']) && ($tese['pay_amount'] !== '')?$tese['pay_amount']:'0'); ?>元</td>
                        </tr>
                    </table>
                </div>
        </div>
        <div class="panel panel-default">
                <div class="panel-header" style="display: flex;justify-content: space-between;">
                    <span>经营信息</span>
                </div>
                <div class="panel-body">
                    <table class="table table-border table-bordered table-hover">
                        <tr>
                            <td style="width: 55px;">字号名称</td><td style="width: 200px;">
                            <?php echo (isset($tese['jingying_zihao']) && ($tese['jingying_zihao'] !== '')?$tese['jingying_zihao']:''); ?>
                        </td>
                            <td style="width: 55px;">经营者姓名</td><td style="width: 200px;"> <?php echo (isset($tese['jingying_name']) && ($tese['jingying_name'] !== '')?$tese['jingying_name']:''); ?></td>
                        </tr>
                        <tr>
                            <td>营业执照号码</td><td><?php echo (isset($tese['jingying_number']) && ($tese['jingying_number'] !== '')?$tese['jingying_number']:''); ?></td>
                            <td>经营场所</td><td><?php echo (isset($tese['jingying_address']) && ($tese['jingying_address'] !== '')?$tese['jingying_address']:''); ?></td>
                        </tr>
                        <tr>
                            <td>经营范围</td><td><?php echo (isset($tese['jingying_range']) && ($tese['jingying_range'] !== '')?$tese['jingying_range']:''); ?></td>
                            <td>客户类型</td><td><?php echo (isset($tese['jingying_guest_type_name']) && ($tese['jingying_guest_type_name'] !== '')?$tese['jingying_guest_type_name']:''); ?></td>
                        </tr>
                        <tr>
                            <td>经营年限</td><td><?php if((!empty($tese['jingying_years']))): ?><?php echo $tese['jingying_years']; endif; ?></td>
                            <td>运营车辆数量</td><td><?php echo (isset($tese['jingying_cars']) && ($tese['jingying_cars'] !== '')?$tese['jingying_cars']:''); ?></td>
                        </tr>
                        <tr>
                            <td>员工人数</td><td><?php echo (isset($tese['jingying_workers']) && ($tese['jingying_workers'] !== '')?$tese['jingying_workers']:''); ?></td>
                            <td>有人身和工伤保险员工数量</td><td><?php echo (isset($tese['jingying_baoxian']) && ($tese['jingying_baoxian'] !== '')?$tese['jingying_baoxian']:''); ?></td>
                        </tr>
                        <tr>
                            <td>经营场地属性</td><td><?php echo (isset($tese['jingying_cdsx_name']) && ($tese['jingying_cdsx_name'] !== '')?$tese['jingying_cdsx_name']:''); ?></td>
                            <td>自有经营场地建筑面积</td><td><?php echo (isset($tese['jingying_zyjymj']) && ($tese['jingying_zyjymj'] !== '')?$tese['jingying_zyjymj']:''); ?></td>
                        </tr>
                        <tr>
                            <td>租赁经营场地建筑面积</td><td><?php echo (isset($tese['jingying_zljymj']) && ($tese['jingying_zljymj'] !== '')?$tese['jingying_zljymj']:''); ?></td>
                            <td>pos商户</td><td><?php echo (isset($tese['jingying_pos_name']) && ($tese['jingying_pos_name'] !== '')?$tese['jingying_pos_name']:''); ?></td>
                        </tr>
                         <tr>
                            <td>机具安装日期</td><td><?php echo (isset($tese['jingying_azdate']) && ($tese['jingying_azdate'] !== '')?$tese['jingying_azdate']:''); ?></td>
                            <td></td><td></td>
                        </tr>
                    </table>
                </div> 
            </div>

        <div class="panel panel-default">
            <div class="panel-header" style="display: flex;justify-content: space-between;"><span>财务信息</span><span><?php if(!empty($finance_info)): ?><a href="javascript:;" onclick="submit('修改财务信息','<?php echo url('finance/edit',array('client_id'=>$client['id'])); ?>','800','510')" ><i class="Hui-iconfont">&#xe6df;</i>编辑</a><?php else: ?><a href="javascript:;" onclick="submit('添加财务信息','<?php echo url('finance/add',array('client_id'=>$client['id'])); ?>','800','510')" ><i class="Hui-iconfont">&#xe600;</i>添加</a><?php endif; ?></span></div>

            <div class="panel-body">
               
                <table class="table table-border table-bordered table-hover">
                   <tr class="text-c">
                       <td rowspan="3" style="width: 100px">基本财务信息</td>
                       <td>家庭总资产</td> <td><?php echo $finance_info['total_assets']; ?></td>
                       <td>家庭总负债</td> <td><?php echo $finance_info['total_debt']; ?></td>
                   </tr>
                    <tr class="text-c">

                        <td>个人月收入</td> <td><?php echo $finance_info['month_income']; ?></td>
                        <td>年总收入</td> <td><?php echo $finance_info['year_income']; ?></td>
                    </tr>
                    <tr class="text-c">

                        <td>年总支出</td> <td><?php echo $finance_info['year_expend']; ?></td>
                        <td></td> <td></td>
                    </tr>
                    <tr class="text-c">
                        <td>家庭年收入</td>
                        <td>收入项目</td> <td><?php if(!empty($finance_info['income_project'])): ?><?php echo get_name('income_project',$finance_info['income_project']); endif; ?></td>
                        <td>年均收入金额</td> <td><?php echo $finance_info['annual_income']; ?></td>
                    </tr>

                    <tr class="text-c">
                        <td rowspan="3">家庭年支出</td>
                        <td>日常支出</td> <td><?php echo $finance_info['daily_spending']; ?></td>
                        <td>教育支出</td> <td><?php echo $finance_info['education_spending']; ?></td>
                    </tr>
                    <tr class="text-c">

                        <td>医疗保健支出</td> <td><?php echo $finance_info['yiliao_spending']; ?></td>
                        <td>赡养老人支出</td> <td><?php echo $finance_info['support']; ?></td>
                    </tr>
                    <tr class="text-c">

                        <td>其他支出</td> <td><?php echo $finance_info['other_spending']; ?></td>
                        <td>年均支出金额</td> <td><?php echo $finance_info['annual_spending']; ?></td>
                    </tr>
                    <tr class="text-c">
                        <td rowspan="4">负债信息</td>
                        <td>行内借款</td> <td><?php echo $finance_info['hangnei_jiekuan']; ?></td>
                        <td>他行借款</td> <td><?php echo $finance_info['tahang_jiekuan']; ?></td>
                    </tr>
                    <tr class="text-c">

                        <td>民间借贷</td> <td><?php echo $finance_info['minjian_jiedai']; ?></td>
                        <td>信用卡透支</td> <td><?php echo $finance_info['creditcard_touzhi']; ?></td>
                    </tr>
                    <tr class="text-c">

                        <td>应付账款</td> <td><?php echo $finance_info['yingfu_zhangkuan']; ?></td>
                        <td>预收账款</td> <td><?php echo $finance_info['yushou_zhangkuan']; ?></td>
                    </tr>
                    <tr class="text-c">

                        <td>其他负债</td> <td><?php echo $finance_info['other_fuzhai']; ?></td>
                        <td></td> <td></td>
                    </tr>
                    <tr class="text-c">
                        <td rowspan="8">资产信息</td>
                        <td>房产</td> <td  colspan="3"><?php if(!empty($finance_info['house'])): ?><?php echo get_name('house',$finance_info['house']); endif; ?></td>

                    </tr>
                    <tr class="text-c">

                        <td>土地</td> <td  colspan="3"><?php if(!empty($finance_info['land'])): ?><?php echo get_name('land',$finance_info['land']); endif; ?></td>

                    </tr>
                    <tr class="text-c">

                        <td>现金</td> <td><?php echo $finance_info['cash']; ?></td>
                        <td>存款</td> <td><?php if($finance_info['deposit']==1): ?>本行存款<?php elseif($finance_info['deposit']==2): ?>他行存款<?php endif; ?></td>
                    </tr>
                    <tr class="text-c">

                        <td>车辆</td> <td><?php if(!empty($finance_info['car'])): ?><?php echo get_name('car',$finance_info['car']); endif; ?></td>
                        <td>股权</td> <td><?php echo $finance_info['equity']; ?></td>
                    </tr>
                    <tr class="text-c">

                        <td>机械设备</td> <td><?php echo $finance_info['equipment']; ?></td>
                        <td>存货</td> <td><?php echo $finance_info['inventory']; ?></td>
                    </tr>
                    <tr class="text-c">

                        <td>应收账款</td> <td><?php echo $finance_info['accounts_receivable']; ?></td>
                        <td>预付款项</td> <td><?php echo $finance_info['prepayments']; ?></td>
                    </tr>
                    <tr class="text-c">

                        <td>对外投资</td> <td><?php echo $finance_info['foreign_investment']; ?></td>
                        <td>理财</td> <td><?php echo $finance_info['manage_money']; ?></td>
                    </tr>
                    <tr class="text-c">

                        <td>其他</td> <td colspan="3"><?php echo $finance_info['other']; ?></td>

                    </tr>
                    <tr class="text-c">
                        <td rowspan="2">经营项目</td>
                        <td>生产经营项目</td> <td colspan="3"><?php if(!empty($finance_info['manage_project'])): ?><?php echo get_name('manage_project',$finance_info['manage_project']); endif; ?></td>

                    </tr>
                    <tr class="text-c">

                        <td>年经营项目收入</td> <td><?php echo $finance_info['project_income']; ?></td>
                        <td>年经营项目支出</td> <td><?php echo $finance_info['project_spend']; ?></td>
                    </tr>
                </table>
                <br/><br/><br/><br/><br/><br/><br/>
                
            </div>

        </div>
        </div>
    </div>
    </div>
</div>

<script type="text/javascript">
    function submit(title,url,w,h){
        layer_show(title,url,w,h);
    }
</script>
<script type="text/javascript" src="/static/mapv2/baidumap_offline_v2_load.js"></script>
<script type="text/javascript" src="/static/mapv2/tools/AreaRestriction_min.js"></script>

<link rel="stylesheet" type="text/css" href="/static/mapv2/css/baidu_map_v2.css"/>
<script type="text/javascript">
    // 百度地图API功能
    var map = new BMap.Map("mapContainer", {minZoom:6,maxZoom:15});
    var point = new BMap.Point(118.356685,35.09566);
    var b = new BMap.Bounds(new BMap.Point(59.188676,5.0598),new BMap.Point(161.919181,57.893376));
    try {
        BMapLib.AreaRestriction.setBounds(map, b);
    } catch (e) {
        alert(e);
    }
    map.centerAndZoom(point, 13);
    //map.enableScrollWheelZoom(true);     //开启鼠标滚轮缩放
    map.addControl(new BMap.NavigationControl());   //缩放按钮

    // 编写自定义函数,创建标注
    function addMarker(point){
        map.clearOverlays();
        var marker = new BMap.Marker(point);
        map.addOverlay(marker);
    }

    var reslng = "<?php echo $client['lng']; ?>";
    var reslat = "<?php echo $client['lat']; ?>";
    if( reslng!= ''&& reslat != ''){
        var pt = new BMap.Point(reslng, reslat);
        addMarker(pt);
        map.panTo(pt);//移到中心

    }


</script>
<style>
    .BMap_cpyCtrl{display: none;}
</style>



        

    

    </body>
</html>




