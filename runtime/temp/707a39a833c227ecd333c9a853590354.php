<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:51:"D:\Xampps\htdocs\bank/app/admin\view\user\jump.html";i:1497090520;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, maximum-scale=1.0, user-scalable=yes" />
    <meta name="renderer" content="webkit">
    <title>跳转提示</title>
    <script type="text/javascript" src="/static/lib/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(function(){
            var height2=$('.system-message').height();
            var height1=$(window).height();
            $('.system-message').css('margin-top',((height1-height2)/2)-30);
        });
    </script>
    <link href="/static/lib/Hui-iconfont/1.0.8/iconfont.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="system-message">

    <?php switch ($code) {case 1:?>
    <h1 class="Hui-iconfont Hui-iconfont-shenhe-tongguo" style="color:#09F"></h1>
    <p class="success"><?php echo(strip_tags($msg));?></p>
    <?php break;case 0:?>
    <h1 class="Hui-iconfont Hui-iconfont-shenhe-butongguo2" style="color:#F33"></h1>
    <p class="error"><?php echo(strip_tags($msg));?></p>
    <?php break;} ?>

    <p class="detail"></p>
    <p class="jump">
        页面自动 <a id="href" class="text-primary" href="<?php echo($url);?>">跳转</a> 等待时间： <b id="wait"><?php echo($wait);?></b> 秒
    </p>
</div>

<script type="text/javascript">
    (function(){
        var wait = document.getElementById('wait'),
            href = document.getElementById('href').href;
        var interval = setInterval(function(){
            var time = --wait.innerHTML;
            if(time <= 0) {
                location.href = href;
                clearInterval(interval);
            }
        }, 1000);
    })();
</script>

<style type="text/css">
    *{ padding: 0; margin: 0; }
    body{background:url(data:image/gif;base64,R0lGODlhKAAoALMAAO7s7fv5+vr4+e/t7vPx8vLw8fDu7/Xz9Pj29/n3+PTy8/b09ff19vHv8AAAAAAAACH5BAAAAAAALAAAAAAoACgAAAT/sCh0ThpqAJbKTciCJESyMM1iEEPSGEvBGQVSAE1DCLlHMIXFYsCANQ5CA4XQUBhgJEPnMEAwQgrCAaFQFBsMgEBAQGgPjBKy0DAlDMUCerE7oqAVGcJQmTStRC1oA3BlCm0HhwkHAlc5VTI8eWlNL3IMAz+JBAAKbGwLVAoWIkChBw0DbBMJb1wVW181IEw8GQUGAHQdCi48rQsZQyY9XaGaiQsXNToEyocHBgJCYsFHbQ0IOhYwGdFDXaodNqqpHRco2ldCHEyZYE90NI9zOCrYDNM1WiB62UNVsnhisKVJNC8sQhxJMGqAnWxFXLzBpGRIAxmtCGTBUaBRjSoh/xCILPAjGJoLPwqQ5HBoT7ByxJQ461JG2ZFeTFLAycZFGQAXXVZwYKgL2Co3BzomVSDgQpMT0bRpQ2JFAok9zZQlIFihSRAgWToYSEHkHxoEYvgQGMuBAhFgOWoSWxSAC4NRW5yIoBNqyAoJDGKIPaCRASY2HO6KzKfFiQ6PLkPQcgIIRYcyInWMSrJWyUJMPVusCIZJUTQkTpQMwODN1YJsJACOGItE1YCkjTJVuAIDQNITezSCSCNChp4yN60wFElnD5FXNVAoCKbNiQwnhN5MYOmJNkkwQKIFtjsdiEMhYU8QYyMlRjYPAaa0DGygCzwTcDzY0HJkD8kqBHigQP8ncGgDhUo6qANOEKPgtEl6o1AQAhqpUKHEd6AY8ZqEbGQjxQZOFEGQBytUwZIUN20FxhGJHBIKQ0yNxpU2R1wXgxAFZCKAN6/h4AlJa4ExghMoacMEB1F1U4USh7yXhkYUuJAIMShMyccoO4aSIx+GWTCdC0Bw4EEKFjAWwgBCgPFGHmY0MZYMFqGyUVI08LFAJ8qwgKJhLKnwRBsD4XJbCS45o2V4XrTHBx8moAdDETswsagpDFVwQg6WDEXFAk3dEU5SQUwTzDFCMFRTGyR5EuB1oCQAgF1R3PXCIlIgmI4FfwSmg2YvdfFkNESgsGOOMYQh4RMWvgYpGKoksRiKmpI1QMZroYrj4ggwZhGgLuK9UAEBa6kiDSpA1OfDdAKMNZYLQ7hnGI2vbXGCDA4ZEgIdTUxQpg7iakOCRp1QsUc+q8mAIiEqGNxlU2OCK1UOw7hagwygoXCbnVzmhwlDRcABAJppRBcNGOI1wkdIUJLUVDP1/YSSEm22woi2aORUhgHPeRFYPxEAADs=) repeat top left fixed}
    body,p,a{ font-family: Helvetica, Tahoma, Arial,"Microsoft YaHei", "微软雅黑",STXihei, "华文细黑",  SimSun, "宋体", Heiti, "黑体", sans-serif; color: #616161; font-size: 16px; }
    .system-message{ padding: 24px 48px; margin:auto; border:#e1e1e1 1px solid; top:50%; width:600px; border-radius:10px;text-align: center;background: #FFFFFF;}
    .system-message h1{ font-size: 100px; font-weight: normal; line-height: 120px; margin: 5px auto;width: 400px;}
    .system-message .jump{ padding-top: 10px; color: #999;}
    .system-message .success,.system-message .error{ line-height: 1.8em;  color: #999; font-size: 36px; }
    .system-message .detail{ font-size: 12px; line-height: 20px; margin-top: 12px; }
</style>
</body>
</html>