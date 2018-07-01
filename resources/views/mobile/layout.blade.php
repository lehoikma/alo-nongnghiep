<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        @yield('title')
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <script src="/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/style_mobile.css">
    <link rel="shortcut icon" href="/image/favicon.png" type="image/x-icon"/>
</head>
<body>

<div class="header-custom col-xs-12" style="padding: 0px; text-align: center; background: #8fcc6d">
    <a href="/">
        <img src="/image/logo1.png" height="115px" style="padding: 10px">
    </a>
</div>

<div class="container col-xs-12">
    <div class="row">
        @yield('content')
    </div>
</div>

<div class="footer-custom col-xs-12" style="padding: 0px; background: #8fcc6d">
    <img src="/image/logo2.png" height="85px;" style="padding-left: 10px; width: 100%">
    <div class="vmag-container" style="padding-top: 5px; padding-bottom: 0px; overflow: hidden;">
        <div class="blog1" style="width: 100%; float: left; padding: 10px;">
            <p style="color: #fff; padding-top: 0px; margin-bottom: 0px;float: right; font-size: 12px">Đơn vị chủ quản: Tập Đoàn Thành Đô<br>
                Tòa nhà Plaschem, 562 Nguyễn Văn Cừ, Long Biên, Hà Nội.
                Tel: 0243.652.7766 hoặc DĐ: 0913.311.678<br>
                Chịu trách nhiệm nội dung: Vũ Thanh Khiết<br>
            </p>
            <div class="clearfix"></div>
            <span style="color: #ffffff;font-size: 12px">Copyright Agriplus.vn </span>
        </div>
    </div>
</div>
</body>
</html>