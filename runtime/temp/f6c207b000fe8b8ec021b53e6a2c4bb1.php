<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:61:"D:\Xampps\htdocs\bank/app/admin\view\client\clientdetail.html";i:1499301724;s:46:"D:\Xampps\htdocs\bank/app/admin\view\base.html";i:1497005003;s:48:"D:\Xampps\htdocs\bank/app/admin\view\header.html";i:1498812223;s:46:"D:\Xampps\htdocs\bank/app/admin\view\menu.html";i:1499140648;s:52:"D:\Xampps\htdocs\bank/app/admin\view\clientmenu.html";i:1498124849;s:48:"D:\Xampps\htdocs\bank/app/admin\view\footer.html";i:1495788367;}*/ ?>
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


            
<link href="/static/lib/webuploader/0.1.5/webuploader.css" rel="stylesheet" type="text/css" />
<div class="Hui-article-box">

    <nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> <?php echo $title1; ?><span class="c-gray en">&gt;</span><?php echo $title2; ?><a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
    <div class="Hui-article">
    <div class="panel panel-default" >
        <div class="panel-header">
            <span>客户编号&nbsp;[<?php echo $client[0]['client_number']; ?>]</span>&nbsp;&nbsp;&nbsp;&nbsp;
            <span>客户名称&nbsp;[<?php echo $client[0]['name']; ?>]</span>&nbsp;&nbsp;&nbsp;&nbsp;
            <span>所属机构&nbsp;[<?php echo $client[0]['bankname']; ?>]</span>
        </div>
    </div>
     <div class="btn-group" style="text-align: center;">
          <span class="btn <?php if($controller == 'Client'): ?>btn-primary<?php else: ?>btn-default<?php endif; ?> radius"><a href="<?php echo url('client/clientdetail',array('client_id'=>$client[0]['id'])); ?>">基本信息</a></span>
  <span class="btn <?php if($controller == 'Deposit'): ?>btn-primary<?php else: ?>btn-default<?php endif; ?> radius"><a href="<?php echo url('deposit/index',array('client_id'=>$client[0]['id'])); ?>">存款信息</a></span>
  <span class="btn <?php if($controller == 'Creditloan'): ?>btn-primary<?php else: ?>btn-default<?php endif; ?> radius"><a href="<?php echo url('creditloan/index',array('client_id'=>$client[0]['id'])); ?>">贷款信息</a></span>
  <span class="btn <?php if($controller == 'Familymember'): ?>btn-primary<?php else: ?>btn-default<?php endif; ?> radius"><a href="<?php echo url('familymember/index',array('client_id'=>$client[0]['id'])); ?>">家庭成员信息</a></span>
  <span class="btn <?php if($controller == 'Sign'): ?>btn-primary<?php else: ?>btn-default<?php endif; ?> radius"><a href="<?php echo url('sign/index',array('client_id'=>$client[0]['id'])); ?>">签约信息</a></span>
  <span class="btn <?php if($controller == 'Familyfund'): ?>btn-primary<?php else: ?>btn-default<?php endif; ?> radius"><a href="<?php echo url('familyfund/index',array('client_id'=>$client[0]['id'])); ?>">家庭资产信息</a></span>
  <span class="btn <?php if($controller == 'Credit'): ?>btn-primary<?php else: ?>btn-default<?php endif; ?> radius"><a href="<?php echo url('credit/index',array('client_id'=>$client[0]['id'])); ?>">授信信息</a></span>
  <!--<span class="btn btn-default radius"><a href="<?php echo url('Msgchange/index',array('client_id'=>$client[0]['id'])); ?>">客户信息变更记录</a></span>-->
  <span class="btn <?php if($controller == 'Picupload'): ?>btn-primary<?php else: ?>btn-default<?php endif; ?> radius"><a href="<?php echo url('picupload/index',array('client_id'=>$client[0]['id'])); ?>">附件上传</a></span>
     </div>

    <h4 style=" text-align: center;">客户信息详情</h4>
    <div style="width: 1000px; margin: 0 auto">
        <div class="panel panel-default">
            <div class="panel-header" style="display: flex;justify-content: space-between;"><span>身份信息</span><a href="javascript:;" onclick="submit('修改身份信息','<?php echo url('client/edit',array('client_id'=>$client[0]['id'])); ?>','1200','510')" ><i class="Hui-iconfont">&#xe6df;</i>编辑</a></div>
            <div class="panel-body">
                <?php if(is_array($client) || $client instanceof \think\Collection || $client instanceof \think\Paginator): $i = 0; $__LIST__ = $client;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
                <table class="table table-border table-bordered table-hover">
                    <tr>
                        <td style="width: 55px;">客户编号<span class="c-red">*</span></td><td style="width: 200px;"><?php echo (isset($list['client_number']) && ($list['client_number'] !== '')?$list['client_number']:''); ?></td>
                        <td style="width: 55px;">客户类型<span class="c-red">*</span></td><td style="width: 200px;"><?php if($list['type']==0): ?>农村<?php else: ?>城市<?php endif; ?></td>
                        <td rowspan="7" style="text-align: center;"><?php if(empty($list['pic_url'])): ?><a  class='btn btn-secondary radius' href="javascript:;" onclick="submit('上传头像','<?php echo url('client/uploadpost',array('client_id'=>$list['id'])); ?>','800','510')" ><i class="Hui-iconfont">&#xe60a;</i>上传头像</a><?php else: ?><img onclick="submit('修改头像','<?php echo url('client/uploadpost',array('client_id'=>$list['id'])); ?>','800','510')" style='width:230px;height: 230px; 'src="<?php echo $list['pic_url']; ?>"/><?php endif; ?></td>
                    </tr>
                    <tr>
                        <td>客户名称<span class="c-red">*</span></td><td><?php echo $list['name']; ?></td>
                        <td>性别<span class="c-red">*</span></td><td><?php if($list['sex']==1): ?>男<?php else: ?>女<?php endif; ?></td>
                    </tr>
                    <tr>
                        <td>证件类型<span class="c-red">*</span></td><td><?php if($list['card_type']==0): ?>身份证<?php else: ?>其他<?php endif; ?></td>
                        <td>证件号码<span class="c-red">*</span></td><td><?php echo $list['card_number']; ?></td>
                    </tr>
                    <tr>
                        <td>民族<span class="c-red">*</span></td><td><?php if($list['nation_id']==1): ?>汉<?php else: ?>少数民族<?php endif; ?></td>
                        <td>出生日期<span class="c-red">*</span></td><td><?php echo date('Y-m-d',$list['born_date']);; ?></td>
                    </tr>
                    <tr>
                        <td >住址<span class="c-red">*</span></td ><td  colspan="3"><?php echo (isset($list['address']) && ($list['address'] !== '')?$list['address']:''); ?></td>

                    </tr>
                    <tr>
                        <td>有效期限<span class="c-red">*</span></td><td><?php echo date('Y-m-d',$list['valid_time']);; ?></td>
                        <td>签发机关<span class="c-red">*</span></td><td><?php echo (isset($list['issue_office']) && ($list['issue_office'] !== '')?$list['issue_office']:''); ?></td>
                    </tr>
                    <tr>
                        <td>关系人<span class="c-red">*</span></td><td  colspan="3"><?php if($list['relation_poeple']==0): ?>否<?php else: ?>是<?php endif; ?></td>

                    </tr>
                </table>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <div id="mapContainer" style="height: 300px;margin: 10px 0 0;"></div>
            </div>
        </div>


        <div class="panel panel-default">
            <div class="panel-header" style="display: flex;justify-content: space-between;"><span>基本信息</span><?php if(empty($base)): ?><span><a href="javascript:;" onclick="submit('添加基本信息','<?php echo url('basemsg/add',array('client_id'=>$client[0]['id'])); ?>','','510')"><i class="Hui-iconfont">&#xe600;</i>添加</a><?php else: ?><a href="javascript:;" onclick="submit('修改基本信息','<?php echo url('basemsg/edit',array('client_id'=>$client[0]['id'])); ?>','','510')"><i class="Hui-iconfont">&#xe6df;</i>编辑</a><?php endif; ?></span></div>
            <div class="panel-body">
                <?php if(is_array($base) || $base instanceof \think\Collection || $base instanceof \think\Paginator): $i = 0; $__LIST__ = $base;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$base): $mod = ($i % 2 );++$i;?>
                <table class="table table-border table-bordered table-hover">
                    <tr>
                        <td style="width: 70px;">婚姻状况</td><td style="width: 200px;"><?php if($base['marriage_status']==0 && $base['marriage_status']!=''): ?>未婚<?php elseif($base['marriage_status'] == 1): ?>已婚<?php elseif($base['marriage_status'] == 2): ?>离异<?php endif; ?></td>
                        <td style="width: 70px;">结婚证登记日期</td><td style="width: 200px;"><?php if($base['married_record_date'] != 0 && $base['married_record_date'] > 0): ?><?php echo date('Y-m-d',$base['married_record_date']);; endif; ?></td>
                    </tr>
                    <tr>
                        <td>有无子女</td><td><?php if($base['children']==0 && $base['children'] != ''): ?>无<?php elseif($base['children']==1): ?>有<?php endif; ?></td>
                        <td>是否涉农</td><td><?php if($base['is_farmer']==0 && $base['is_farmer'] != ''): ?>否<?php elseif($base['is_farmer']==1): ?>是<?php endif; ?></td>
                    </tr>
                    <tr>
                        <td>行政区划（省）</td><td><?php echo (isset($areamsg['province']) && ($areamsg['province'] !== '')?$areamsg['province']:''); ?></td>
                        <td>行政区划（市）</td><td><?php echo (isset($areamsg['city']) && ($areamsg['city'] !== '')?$areamsg['city']:''); ?></td>
                    </tr>
                    <tr>
                        <td>行政区划（县/区）</td><td><?php echo (isset($areamsg['area']) && ($areamsg['area'] !== '')?$areamsg['area']:''); ?></td>
						<td>行政区划（小区）</td><td><?php echo (isset($areamsg['grid']) && ($areamsg['grid'] !== '')?$areamsg['grid']:''); ?> - <?php echo (isset($hs['lou']) && ($hs['lou'] !== '')?$hs['lou']:''); ?>号楼  <?php if($hs['danyuan'] != 0): ?> - <?php echo (isset($hs['danyuan']) && ($hs['danyuan'] !== '')?$hs['danyuan']:''); ?>单元<?php endif; ?>  - <?php echo (isset($hs['hu']) && ($hs['hu'] !== '')?$hs['hu']:''); ?>室</td>
                    </tr>

                    <tr>
                        <td>联系方式（手机）</td><td><?php echo (isset($base['tel_number']) && ($base['tel_number'] !== '')?$base['tel_number']:''); ?></td>
                        <td>联系方式（电话）</td><td><?php echo (isset($base['phone_number']) && ($base['phone_number'] !== '')?$base['phone_number']:''); ?></td>
                    </tr>
                    <tr>
                        <td>现住址</td><td><?php echo (isset($base['current_address']) && ($base['current_address'] !== '')?$base['current_address']:''); ?></td>
                        <td>现住址邮编</td><td><?php echo (isset($base['current_postcode']) && ($base['current_postcode'] !== '')?$base['current_postcode']:''); ?></td>
                    </tr>
                    <tr>
                        <td>通讯地址</td><td><?php echo (isset($base['corresponding_address']) && ($base['corresponding_address'] !== '')?$base['corresponding_address']:''); ?></td>
                        <td>通讯地址邮编</td><td><?php echo (isset($base['corresponding_postcode']) && ($base['corresponding_postcode'] !== '')?$base['corresponding_postcode']:''); ?></td>
                    </tr>
                    <tr>
                        <td>最高学位</td><td>
                       <?php if(isset($base['highest_degree'])&&($base['highest_degree'] == 0)): endif; if(isset($base['highest_degree'])&&($base['highest_degree'] == 1)): ?>学士学位<?php endif; if(isset($base['highest_degree'])&&($base['highest_degree'] == 2)): ?>硕士学位<?php endif; if(isset($base['highest_degree'])&&($base['highest_degree'] == 3)): ?>博士学位<?php endif; ?> 
                        </td>
                        <td>最高学历</td><td>
                           <?php if(isset($base['highest_education'])&&($base['highest_education'] == 0)): ?>初中水平<?php endif; if(isset($base['highest_education'])&&($base['highest_education'] == 1)): ?>高中水平<?php endif; if(isset($base['highest_education'])&&($base['highest_education'] == 2)): ?>大专<?php endif; if(isset($base['highest_education'])&&($base['highest_education'] == 3)): ?>本科<?php endif; if(isset($base['highest_education'])&&($base['highest_education'] == 4)): ?>硕士<?php endif; if(isset($base['highest_education'])&&($base['highest_education'] == 5)): ?>博士<?php endif; ?> 
                        </td>
                    </tr>
                    <tr>
                        <td>行业分类</td><td><?php echo (isset($base['industry_category']) && ($base['industry_category'] !== '')?$base['industry_category']:''); ?></td>
                        <td>居住状况</td><td><?php echo (isset($base['live_status']) && ($base['live_status'] !== '')?$base['live_status']:''); ?></td>
                    </tr>
                    <tr>
                        <td>是否扶贫户</td ><td><?php if($base['is_poor']==0 && $base['is_poor']!=''): ?>否<?php elseif($base['is_poor'] == 1): ?>是<?php endif; ?></td>
                        <td>工作单位</td><td><?php echo (isset($base['workunit']) && ($base['workunit'] !== '')?$base['workunit']:''); ?></td>
                    </tr>
                    <tr>
                        <td>存款</td><td><?php echo (isset($base['save_money']) && ($base['save_money'] !== '')?$base['save_money']:'0'); ?></td>
                        <td>贷款</td><td><?php echo (isset($base['loan_money']) && ($base['loan_money'] !== '')?$base['loan_money']:'0'); ?></td>
                    </tr>
                     <tr>
                        <td>担保贷款</td><td><?php echo (isset($base['guarantor']) && ($base['guarantor'] !== '')?$base['guarantor']:'0'); ?>份</td>
                        <td>不良记录</td><td><?php echo (isset($base['bad_record']) && ($base['bad_record'] !== '')?$base['bad_record']:'0'); ?>次</td>
                    </tr>
                </table>
                <br/>
                <div id="main" style="width: 500px;height:300px;margin:0 auto;"></div>
                <script src="/static/lib/echarts/echarts.simple.min.js"></script>
                <script type="text/javascript">
                    // 基于准备好的dom，初始化echarts实例
                    var myChart = echarts.init(document.getElementById('main'));
                    var save_money = '<?php echo (isset($base['save_money']) && ($base['save_money'] !== '')?$base['save_money']:''); ?>';
                    var loan_money = '<?php echo (isset($base['loan_money']) && ($base['loan_money'] !== '')?$base['loan_money']:''); ?>';
                    if (save_money == ''){
                        save_money = 0;
                    }
                    if (loan_money == ''){
                        loan_money = 0;
                    }

                    // 指定图表的配置项和数据
                    option = {
                        title : {
                            text: '客户存贷对比图',
                            subtext: '',
                            x:'center'
                        },
                        tooltip : {
                            trigger: 'item',
                            formatter: "{a} <br/>{b} : {c} ({d}%)"
                        },
                        legend: {
                            orient: 'vertical',
                            left: 'left',
                            data: ['存款','贷款']
                        },
                        series : [
                            {
                                name: '客户',
                                type: 'pie',
                                radius : '70%',
                                center: ['50%', '60%'],
                                data:[
                                    {value:save_money, name:'存款'},
                                    {value:loan_money, name:'贷款'}
                                ],
                                itemStyle: {
                                    emphasis: {
                                        shadowBlur: 10,
                                        shadowOffsetX: 0,
                                        shadowColor: 'rgba(0, 0, 0, 0.5)'
                                    }
                                }
                            }
                        ]
                    };

                    // 使用刚指定的配置项和数据显示图表。
                    myChart.setOption(option);
                </script>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>

            <div class="panel panel-default">
                <div class="panel-header" style="display: flex;justify-content: space-between;"><span>其他信息</span><?php if(empty($other)): ?><span><a href="javascript:;" onclick="submit('添加其他信息','<?php echo url('other/add',array('client_id'=>$client[0]['id'])); ?>','','510')"><i class="Hui-iconfont">&#xe600;</i>添加</a><?php else: ?><a href="javascript:;" onclick="submit('修改其他信息','<?php echo url('other/edit',array('client_id'=>$client[0]['id'])); ?>','','510')"><i class="Hui-iconfont">&#xe6df;</i>编辑</a><?php endif; ?></span></div>
                <div class="panel-body">
                    <?php if(is_array($other) || $other instanceof \think\Collection || $other instanceof \think\Paginator): $i = 0; $__LIST__ = $other;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
                    <table class="table table-border table-bordered table-hover">
                        <tr>
                            <td style="width: 55px;">评级结果</td><td style="width: 200px;">
                            <?php if($list['class_result'] == 1): ?>潜在客户<?php endif; if($list['class_result'] == 2): ?>普通客户<?php endif; if($list['class_result'] == 3): ?>黄金客户<?php endif; if($list['class_result'] == 4): ?>白金客户<?php endif; if($list['class_result'] == 5): ?>红钻客户<?php endif; if($list['class_result'] == 6): ?>金钻客户<?php endif; ?>
                            </td>
                            <td style="width: 55px;">家庭总人数<span class="c-red">*</span></td><td style="width: 200px;"> <?php echo (isset($list['family_people']) && ($list['family_people'] !== '')?$list['family_people']:''); ?></td>

                        </tr>
                        <tr>
                            <td>家庭总资产<span class="c-red">*</span></td><td><?php echo (isset($list['family_money']) && ($list['family_money'] !== '')?$list['family_money']:''); ?></td>
                            <td>家庭总负债<span class="c-red">*</span></td><td><?php echo (isset($list['family_debt']) && ($list['family_debt'] !== '')?$list['family_debt']:''); ?></td>
                        </tr>
                        <tr>
                            <td>家庭年收入<span class="c-red">*</span></td><td><?php echo (isset($list['family_year_income']) && ($list['family_year_income'] !== '')?$list['family_year_income']:''); ?></td>
                            <td>家庭年支出<span class="c-red">*</span></td><td><?php echo (isset($list['family_year_spending']) && ($list['family_year_spending'] !== '')?$list['family_year_spending']:''); ?></td>
                        </tr>
                        <tr>
                            <td>工资账号</td><td><?php echo (isset($list['wage_number']) && ($list['wage_number'] !== '')?$list['wage_number']:''); ?></td>
                            <td>工资账号所属银行</td><td><?php echo (isset($list['wage_belong_bank']) && ($list['wage_belong_bank'] !== '')?$list['wage_belong_bank']:''); ?></td>
                        </tr>

                    </table>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
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

    var reslng = "<?php echo $client[0]['lng']; ?>";
    var reslat = "<?php echo $client[0]['lat']; ?>";
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




