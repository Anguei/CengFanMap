<?php if ($_SERVER["HTTPS"] <> "on") {
    $xredir = "https://" . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
    header("Location: " . $xredir);
} ?>
<!DOCTYPE html>
<html style="height: 100%">

<head>
    <meta charset="utf-8">
    <title>山东师大附中 2018 级 10 班毕业蹭饭地图</title>
</head>

<body style="height: 100%" onload="javascript: document.oncontextmenu = function(){return false;}">

    <div id="bk" style="background-image: url(res/bk.jpg);"></div>
    <!-- 背景图片：欧洲博登湖晨雾 -->
    <div id="main" style="height: 100%; width: 100%"></div>
    <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    <!--<script type="text/javascript" src="js/html2canvas.min.js"></script>
    <script type="text/javascript" src="js/jquery.plugin.html2canvas.js"></script>-->
    <script type="text/javascript" src="js/echarts.min.js"></script>
    <script type="text/javascript" src="js/shine.js"></script>
    <script type="text/javascript" src="mapJs/china.js"></script>
    <script type="text/javascript" src="mapJs/shandongNew.js"></script>
    <script type="text/javascript" src="mapJs/jinan.js"></script>
    <script type="text/javascript" src="mapJs/lixia.js"></script>
    <script type="text/javascript" src="mapJs/licheng.js"></script>
    <script type="text/javascript" src="mapJs/shizhong.js"></script>
    <script type="text/javascript" src="mapJs/fuzhou.js"></script>
    <script type="text/javascript" src="mapJs/qingdao.js"></script>
    <script type="text/javascript" src="mapJs/xian.js"></script>
    <script type="text/javascript" src="mapJs/hefei.js"></script>
    <script type="text/javascript" src="mapJs/changqing.js"></script>
    <script type="text/javascript" src="mapJs/chengdu.js"></script>
    <script type="text/javascript" src="mapJs/tianjin.js"></script>
    <script type="text/javascript" src="mapJs/shanghai.js"></script>
    <script type="text/javascript" src="mapJs/chongqing.js"></script>
    <script type="text/javascript" src="mapJs/anhui.js"></script>
    <script type="text/javascript" src="mapJs/fujian.js"></script>
    <script type="text/javascript" src="mapJs/guangdong.js"></script>
    <script type="text/javascript" src="mapJs/guizhou.js"></script>
    <script type="text/javascript" src="mapJs/hainan.js"></script>
    <script type="text/javascript" src="mapJs/hunan.js"></script>
    <script type="text/javascript" src="mapJs/jiangsu.js"></script>
    <script type="text/javascript" src="mapJs/liaoning.js"></script>
    <script type="text/javascript" src="mapJs/shanxi1.js"></script>
    <script type="text/javascript" src="mapJs/sichuan.js"></script>
    <script type="text/javascript" src="mapJs/xinjiang.js"></script>
    <script type="text/javascript" src="mapJs/zhejiang.js"></script>
    <script type="text/javascript" src="mapJs/shenyang.js"></script>
    <script type="text/javascript" src="mapJs/wulumuqi.js"></script>
    <script type="text/javascript" src="mapJs/deyang.js"></script>
    <script type="text/javascript" src="mapJs/changsha.js"></script>
    <script type="text/javascript" src="mapJs/haikou.js"></script>
    <script type="text/javascript" src="mapJs/guangzhou.js"></script>
    <script type="text/javascript" src="mapJs/shenzhen.js"></script>
    <script type="text/javascript" src="mapJs/xiamen.js"></script>
    <script type="text/javascript" src="mapJs/ningbo.js"></script>
    <script type="text/javascript" src="mapJs/hangzhou.js"></script>
    <script type="text/javascript" src="mapJs/suzhou.js"></script>
    <script type="text/javascript" src="mapJs/nanjing.js"></script>
    <script type="text/javascript" src="mapJs/xuzhou.js"></script>
    <script type="text/javascript" src="mapJs/huainan.js"></script>
    <script type="text/javascript" src="mapJs/taian.js"></script>
    <script type="text/javascript" src="mapJs/weihai.js"></script>
    <script type="text/javascript" src="mapJs/aomen.js"></script>

    <script type="text/javascript" src="js/data.js?ver=0001"></script>
    <script type="text/javascript" src="js/main.js?ver=0001"></script>
    <link rel="stylesheet" type="text/css" href="css/myStyle.css?ver=0001">
</body>

</html>