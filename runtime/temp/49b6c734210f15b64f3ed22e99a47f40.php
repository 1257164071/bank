<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:60:"D:\xampps\htdocs\work\bank/app/admin\view\grid\gridadds.html";i:1508741259;s:51:"D:\xampps\htdocs\work\bank/app/admin\view\base.html";i:1507780640;}*/ ?>
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

    <form action="" method="post" class="form form-horizontal">

        <div class="row cl">
            <label class="form-label col-xs-2 col-sm-2"><span class="c-red">*</span>名称</label>
            <div class="formControls col-xs-10 col-sm-10">
                <input type="text" class="input-text" value="<?php echo (isset($grid['name']) && ($grid['name'] !== '')?$grid['name']:''); ?>" id="gridname" placeholder="名称"  name="name">
            </div>
        </div>

        <div class="row cl">
            <label class="form-label col-xs-2 col-sm-2"><span class="c-red"></span>排序</label>
            <div class="formControls col-xs-10 col-sm-10">
                <input type="text" class="input-text" value="<?php echo (isset($grid['sort']) && ($grid['sort'] !== '')?$grid['sort']:''); ?>" id="gridsort" onkeyup="value=value.replace(/[^\d]/g,'')" placeholder="排序（数字）"  name="code">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-2 col-sm-2"><span class="c-red"></span>备注</label>
            <div class="formControls col-xs-10 col-sm-10">
                <textarea name="value" class="textarea" cols="30" rows="10" id="gridremark" placeholder="备注"><?php echo (isset($grid['remark']) && ($grid['remark'] !== '')?$grid['remark']:''); ?></textarea>
            </div>
        </div>
        <?php if($user['role_id'] == 7 or $user['role_id'] == 9 or $user['role_id'] == 13): ?>
        <div class="row cl">
            <label class="form-label col-xs-2 col-sm-2">管理人</label>
            <div class="formControls col-xs-10 col-sm-10">
                <select name="xiaoqu_manger" id="manger" >
                    <option value="0">==请选择==</option>
                    <?php if(is_array($banks) || $banks instanceof \think\Collection || $banks instanceof \think\Paginator): if( count($banks)==0 ) : echo "" ;else: foreach($banks as $key=>$vo): ?>
                        <option disabled="disabled"><?php echo $vo['bankname']; ?></option>
                        <?php if(is_array($vo['manager']) || $vo['manager'] instanceof \think\Collection || $vo['manager'] instanceof \think\Paginator): if( count($vo['manager'])==0 ) : echo "" ;else: foreach($vo['manager'] as $k=>$v): ?>
                            <option value="<?php echo $v['id']; ?>" <?php if(isset($grid) && $v['id'] == $grid['xiaoqu_manger']): ?> selected="selected"<?php endif; ?>>&nbsp;&nbsp;|- <?php echo $v['real_name']; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </div>
        </div>
        <?php endif; ?>
        <div class="row cl">
            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">

                <a href="javascript:" class="btn btn-primary radius"  onclick="gridadd()"> 提交</a>
                <a href="javascript:" class="btn btn-default radius"  onclick="layer_close()"> 取消</a>

            </div>
        </div>
    </form>




	
</article>



<!--请在下方写此页面业务相关的脚本-->

<script type="text/javascript">


  function gridadd(){
	  var gridid = '<?php echo (isset($grid['id']) && ($grid['id'] !== '')?$grid['id']: 0); ?>';
      var gridname = $("#gridname").val();
      var gridremark = $("#gridremark").val();
      var user_id = $("#user_id").val();
      var manger = $("#manger").val();
      var gridsort = $("#gridsort").val();
      $.ajax({
		  url:'<?php echo url("admin/grid/gridadds"); ?>',
		  type:'post',
		  data:{id:gridid,name:gridname,remark:gridremark,user_id:user_id,sort:gridsort,xiaoqu_manger:manger},
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




