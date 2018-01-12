<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:63:"F:\www\bank.cn/app/admin\view\incredit\loan_baoquan_detail.html";i:1505890039;s:39:"F:\www\bank.cn/app/admin\view\base.html";i:1507780640;}*/ ?>
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
                 <br/>
                 <table class="table table-border table-bordered table-hover">
                     <tr>
                        <td scope="col" colspan="2" style="text-align: center;font-weight: bold;">保全情况</td>
                    </tr>
                   
                    <tr class="text-c">
                        <td>保全标的</td>
                        <td><?php echo $loan_baoquan_info['bqbiaodi']; ?></td>
                    </tr><tr class="text-c">
                        <td>查封财产类别</td>
                        <td><?php echo get_name('cfcc_type',$loan_baoquan_info['cfcc_type']); ?></td>
                    </tr><tr class="text-c">
                        <td>查封起日</td>
                        <td><?php echo date('Y-m-d',$loan_baoquan_info['cfqr_time']); ?></td>
                    </tr><tr class="text-c">
                        <td>查封止日</td>
                        <td><?php echo date('Y-m-d',$loan_baoquan_info['cfzr_time']); ?></td>
                    </tr><tr class="text-c">
                        <td>续封止日</td>
                        <td><?php echo date('Y-m-d',$loan_baoquan_info['xfzr_time']); ?></td>
                    </tr><tr class="text-c">
                        <td>查封财产详情</td>
                        <td><?php echo $loan_baoquan_info['cf_detail']; ?></td>
                    </tr><tr class="text-c">
                        <td>是否提出财产保全异议</td>
                        <td><?php if(!empty($loan_baoquan_info['is_bqyy'])&&$loan_baoquan_info['is_bqyy']==1): ?>是<?php else: ?>否<?php endif; ?></td>
                    </tr><tr class="text-c">
                        <td>财产保全异议内容</td>
                        <td><?php echo $loan_baoquan_info['bqyy_content']; ?></td>
                    </tr>
                     </table>


 </article>
 

    </body>
</html>




