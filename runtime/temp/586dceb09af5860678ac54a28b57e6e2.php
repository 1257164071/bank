<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:58:"D:\Xampps\htdocs\bank/app/admin\view\creditloan\index.html";i:1498811647;s:46:"D:\Xampps\htdocs\bank/app/admin\view\base.html";i:1497005003;s:48:"D:\Xampps\htdocs\bank/app/admin\view\header.html";i:1498812223;s:46:"D:\Xampps\htdocs\bank/app/admin\view\menu.html";i:1499140648;s:52:"D:\Xampps\htdocs\bank/app/admin\view\clientmenu.html";i:1498124849;s:48:"D:\Xampps\htdocs\bank/app/admin\view\footer.html";i:1495788367;}*/ ?>
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
    <h4 style=" text-align: center;">信贷信息详情</h4>
   
    <div style="width:100%;margin: 0 auto;padding:10px;">
        <div class="panel panel-default">
            <div class="panel-header" style="display: flex;justify-content: space-between;"><span>贷款信息</span><a href="javascript:;" onclick="submit('添加贷款信息','<?php echo url('Incredit/add',array('client_id'=>$client[0]['id'])); ?>','','810')" ><i class="Hui-iconfont">&#xe600;</i>添加</a></div>
            <div class="panel-body">
                <table class="table table-border table-bordered table-hover table-bg table-sort">
                    <thead >
                    <tr class="text-c">
                        <th>合同号</th>
                        <th>借据号</th>
                        <th>主担保方式</th>
                        <th>贷款金额</th>
                        <th>发放金额</th>
                        <th>欠息金额</th>
                        <th>执行利率</th>
                        <th>发放日期</th>
                        <th>到期日期</th>
                        <th>结算日期</th>
                        <th>贷款状态</th>
                        <th width="360">操作</th>
                    </tr>
                    </thead>
                    <?php if(is_array($incredit) || $incredit instanceof \think\Collection || $incredit instanceof \think\Paginator): $i = 0; $__LIST__ = $incredit;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
                    <tbody>
                        <tr class="text-c">
                            <td><?php echo $list['contact_number']; ?></td>
                            <td><?php echo $list['ious_number']; ?></td>
                            <td>
                                <?php if($list['guarantee_way'] == 1): ?>保证 
                                <?php elseif($list['guarantee_way'] == 2): ?>抵押 
                                <?php elseif($list['guarantee_way'] == 3): ?>质押
                                <?php elseif($list['guarantee_way'] == 4): ?>留置
                                <?php elseif($list['guarantee_way'] == 5): ?>定金
                                <?php endif; ?>
                             </td>
                            <td><?php echo $list['loan_money']; ?></td>
                            <td><?php echo $list['provide_loan_money']; ?></td>
                            <td><?php echo $list['debt_money']; ?></td>
                            <td><?php echo $list['use_rate']; ?></td>
                            <td><?php echo date("Y-m-d",$list['provide_time']); ?></td>
                            <td><?php echo date("Y-m-d",$list['arrive_time']); ?></td>
                            <td><?php echo date("Y-m-d",$list['settlement_time']); ?></td>
                            <td>
                                <?php if($list['loan_status'] == 1): ?>还款中
                                <?php elseif($list['loan_status'] == 2): ?>还清
                                <?php elseif($list['loan_status'] == 3): ?><span class="c-red">逾期</span>
                                <?php elseif($list['loan_status'] == 4): ?>逾期-清收完成
                                <?php endif; ?>
                            </td>
                            <td class="td-manage">
<a href="javascript:;" onclick="submit('查看','<?php echo url('admin/incredit/detail',array('loan_id'=>$list['id'])); ?>','','510')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe725;</i>查看</a>&nbsp;
<a href="javascript:;" onclick="submit('担保人','<?php echo url('admin/incredit/guarantorlist',array('client_id'=>$client[0]['id'],'loan_id'=>$list['id'])); ?>','1300','650')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe600;</i>担保人</a>&nbsp;
<?php if($list['loan_status'] == 3 || $list['loan_status'] == 4): ?>
<span class="c-red">
<a href="javascript:;" onclick="submit('清收记录','<?php echo url('admin/incredit/backrecordlist',array('loan_id'=>$list['id'])); ?>','1000','650')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe600;</i>清收记录</a>&nbsp;
<a href="javascript:;" onclick="submit('调查表','<?php echo url('admin/incredit/check',array('client_id'=>$client[0]['id'],'loan_id'=>$list['id'])); ?>','1200','650')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe725;</i>调查表</a>&nbsp;
</span>
<?php endif; ?>
<a href="javascript:;" onclick="submit('编辑贷款','<?php echo url('admin/incredit/edit',array('id'=>$list['id'])); ?>','','650')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i>编辑</a>&nbsp;
<a style="text-decoration:none" href="javascript:;" onclick="msg_del(this,'<?php echo $list['id']; ?>')" title="删除存款信息" ><i class="Hui-iconfont">&#xe6e2;</i>删除</a> 
							</td>
                        </tr>
                    </tbody>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    </table>
            </div>
        </div>
    </div>
   </div>

<script type="text/javascript">
    function submit(title,url,w,h){
        layer_show(title,url,w,h);
    }
    
    /*删除*/
    function msg_del(obj,id){
    	layer.confirm('删除须谨慎，确认要删除吗？',function(index){
    		$.ajax({
    			type: 'POST',
    			url: "<?php echo url('admin/incredit/del'); ?>",
    			dataType: 'json',
    			data:'id='+id,
    			success: function(data){
    				if(data.code==0){
    					$(obj).parents("tr").remove();
    					layer.msg('已删除!',{icon:1,time:1000});
    					//window.location.href = '<?php echo url('admin/deposit/index',array('client_id')); ?>';
    				}else{
    					layer.msg(data.msg);
    				}
    			},
    			error:function(data) {
    				console.log(data.msg);
    			},
    		});		
    	});
    }
</script>





        

    

    </body>
</html>




