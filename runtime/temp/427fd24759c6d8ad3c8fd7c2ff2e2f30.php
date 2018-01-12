<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:50:"F:\www\bank.cn/app/admin\view\manage\applying.html";i:1508226475;s:39:"F:\www\bank.cn/app/admin\view\base.html";i:1507780640;s:41:"F:\www\bank.cn/app/admin\view\header.html";i:1509438471;s:39:"F:\www\bank.cn/app/admin\view\menu.html";i:1511338586;s:41:"F:\www\bank.cn/app/admin\view\footer.html";i:1495788367;}*/ ?>
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
    <nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span>营销管理<span class="c-gray en">&gt;</span>申请记录<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
    <div class="Hui-article">
        <article class="cl pd-20">
            <form  method="post" action="<?php echo url('applying'); ?>">
                <div class="text-c">
                    <!--拜访时间：-->
                    <!--<input type="text" onfocus="WdatePicker()" id="datemin" name="start_visit_time" value="<?php echo (isset($post['start_visit_time']) && ($post['start_visit_time'] !== '')?$post['start_visit_time']:''); ?>" class="input-text Wdate" style="width:120px;">-->
                    <!-- - -->
                    <!--<input type="text" onfocus="WdatePicker()" id="datemax" name="end_visit_time" value="<?php echo (isset($post['end_visit_time']) && ($post['end_visit_time'] !== '')?$post['end_visit_time']:''); ?>" class="input-text Wdate" style="width:120px;">-->
                    客户经理：<input type="text" class="input-text" style="width:150px" placeholder="客户经理" value="<?php echo (isset($post['real_name']) && ($post['real_name'] !== '')?$post['real_name']:''); ?>" name="real_name">
                    客户名称：<input type="text" class="input-text" style="width:150px" placeholder="客户名称" value="<?php echo (isset($post['name']) && ($post['name'] !== '')?$post['name']:''); ?>" name="name">

                        <span class="select-box" style="width: 150px;line-height: 21px;">
                            <select class="select" name="client_grade"  >
                                <option value=" ">客户评级</option>
                                <option  <?php if(!empty($post['client_grade'])&&$post['client_grade']==1){ echo  'selected="selected"'; }?> value="1">潜在客户</option>
                                <option <?php if(!empty($post['client_grade'])&&$post['client_grade']==2){ echo  'selected="selected"'; }?> value="2">普通客户</option>
                                <option <?php if(!empty($post['client_grade'])&&$post['client_grade']==3){ echo  'selected="selected"'; }?> value="3">黄金客户</option>
                                <option <?php if(!empty($post['client_grade'])&&$post['client_grade']==4){ echo  'selected="selected"'; }?> value="4">白金客户</option>
                                <option <?php if(!empty($post['client_grade'])&&$post['client_grade']==5){ echo  'selected="selected"'; }?> value="5">红钻客户</option>
                                <option <?php if(!empty($post['client_grade'])&&$post['client_grade']==6){ echo  'selected="selected"'; }?> value="6">金钻客户</option>
                            </select>
                        </span>
                    <button name="" id="" class="btn btn-success radius" type="submit"><i class="Hui-iconfont">&#xe665;</i> 搜索</button>
                </div>
            </form>

            <div class="cl pd-5 bg-1 bk-gray mt-20">
				<span class="l">
					<!--<a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a>-->
                    <!--<a href="javascript:;" onclick="member_add('添加客户','/admin/client/clientadd','1200','510')" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加客户</a>-->
                    <!--<a href="javascript:;" onclick="daochu()" class="btn btn-warning radius"><i class="Hui-iconfont">&#xe600;</i> 导出</a>-->

				</span>
                <span class="r">共有数据：<strong><?php echo count($data);?></strong> 条</span>
            </div>

            <div class="mt-20">
                <table class="table table-border table-bordered table-hover table-bg table-sort">
                    <thead>
                    <tr class="text-c">
                        <!-- <th width="25"><input type="checkbox" name="" value=""></th> -->
                        <th width="80">ID</th>
                        <th width="80">客户经理</th>
                        <th width="100">拜访客户</th>
                        <th width="80">申请类型</th>
                        <th width="200">申请描述</th>
                        <th width="80">状态</th>
                        <th width="120">操作</th>

                    </tr>
                    </thead>
                    <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
                    <tbody>
                    <tr class="text-c">
                       <!--  <td><input type="checkbox" value="<?php echo $list['id']; ?>" name="id[]"></td> -->
                        <td><?php echo $list['id']; ?></td>
                        <td><?php echo $list['real_name']; ?></td>
                        <td><a class="tags3"   href="<?php echo url('client/clientdetail',array('client_id'=>$list['client_id'])); ?>" title="查看客户详情"><?php echo $list['name']; ?></a></td>
                        <td><?php if($list['type'] ==1): ?>申请继续拜访<?php else: ?>申请停止拜访<?php endif; ?></td>
                        <td><?php echo $list['apply_content']; ?></td>
                        <td><?php if(!empty($list['status'])): ?><?php echo get_name('apply_status',$list['status']); endif; ?></td>
                        <td>
                            <?php if($list['status'] ==1): ?>
                            <a class="btn btn-secondary radius" href="javascript:;" onclick="submit('审批','<?php echo url('shenpi',array('client_id'=>$list['client_id'],'user_id'=>$list['user_id'])); ?>','','510')" ><i class="Hui-iconfont">&#xe692;</i>审批</a>&nbsp;&nbsp;&nbsp;&nbsp;
                            <?php else: ?>
                            <a class="btn btn-warning radius" href="<?php echo url('Visitrecord/applydetail',array('record_id'=>$list['record_id'])); ?>" ><i class="Hui-iconfont">&#xe695;</i>详情</a>&nbsp;&nbsp;&nbsp;&nbsp;
                            <?php endif; ?>
                        </td>

                    </tr>
                    </tbody>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </table>
            </div>
            <div class="page"> <?php echo $page; ?></div>
        </article>
    </div>
</section>



<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/static/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/static/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/static/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">
    $(function(){
//        $('.table-sort').dataTable({
//            "aaSorting": [[ 1, "desc" ]],//默认第几个排序
//            "bStateSave": true,//状态保存
//            "aLengthMenu": [16,20,25],
//            "aoColumnDefs": [
//                //{ targets: [0, 1], visible: true},
//                //{"bVisible": false, "aTargets": [1]}, //控制列的隐藏显示
//                {"orderable":false,"aTargets":[0,4,6,8]}// 制定列不参与排序
//            ]
//        });
//        $('.table-sort tbody').on( 'click', 'tr', function () {
//            if ( $(this).hasClass('selected') ) {
//                $(this).removeClass('selected');
//            }
//            else {
//                table.$('tr.selected').removeClass('selected');
//                $(this).addClass('selected');
//            }
//        });
    });
    /*用户-添加*/
    function submit(title,url,w,h){
        layer_show(title,url,w,h);
    }


    //		$.get(self.)
    //		$.ajax({
    //			url: '<?php echo url("client/clientlist",array("export"=>1)); ?>',
    //			type: 'post',
    //			data: $('form').serialize(),
    ////			success: function (data) {
    ////				if (data.code == 0) {
    ////					layer.msg(data.msg);
    ////					parent.location.reload();
    ////					setTimeout("parent.layer.close(parent.layer.getFrameIndex(window.name))", 2000);
    ////
    ////				} else {
    ////					layer.msg(data.msg);
    ////				}
    ////			}
    //		});




    function datadel(){
        var $ids=$('input:checked');
        $.ajax({
            url: "<?php echo url('client/delpatch'); ?>",
            type: 'post',
            data: $('input:checked'),
            dataType: 'json',
            success:function(data) {
                if (data.code == 0) {
                    layer.msg(data.msg);
                    location.reload();

                } else {
                    layer.msg(data.msg);
                }
            }
        });


    }
</script>



        

    

    </body>
</html>




