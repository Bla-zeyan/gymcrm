<!DOCTYPE html>
<!--[if IE 9 ]>
<html class="ie9"><![endif]-->
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <meta name="format-detection" content="telephone=no">
    <meta charset="UTF-8">

    <meta name="description" content="健身房客户管理系统">
    <meta name="keywords" content="crm GYM-crm 客户管理系统 健身房">

    <title>健身房客户管理系统@yield('title')</title>

    <!-- CSS -->
    @include('public.styles')
</head>
<body id="skin-blur-violate">

<header id="header" class="media">
    <a href="" id="menu-toggle"></a>
    <a class="logo pull-left" href="{{asset('/')}}">健身房客户管理系统</a>

    <div class="media-body">
        <div class="media" id="top-menu">
            <div class="pull-left tm-icon">
                <a data-drawer="messages" class="drawer-toggle" href="">
                    <i class="sa-top-message"></i>
                    {{--<i class="n-count animated"></i>--}}
                    <span>提醒</span>
                </a>
            </div>
            {{--<div class="pull-left tm-icon">--}}
            {{--<a data-drawer="notifications" class="drawer-toggle" href="">--}}
            {{--<i class="sa-top-updates"></i>--}}
            {{--<i class="n-count animated">9</i>--}}
            {{--<span>提醒</span>--}}
            {{--</a>--}}
            {{--</div>--}}


            <div id="time" class="pull-right">
                <span id="hours"></span>
                :
                <span id="min"></span>
                :
                <span id="sec"></span>
            </div>

            <div class="media-body">
                <input type="text" class="main-search">
            </div>
        </div>
    </div>
</header>

<div class="clearfix"></div>

<section id="main" class="p-relative" role="main">

    <!-- Sidebar -->
@include('public.aside')

<!-- Content -->
    <section id="content" class="container">

        <!-- Messages Drawer -->
    @include('public.messages')

    <!-- Notification Drawer -->
    @include('public.notifications')

    <!-- Breadcrumb -->
        <ol class="breadcrumb hidden-xs">
            当前位置：
            <li><a href="#">用户管理</a></li>
            {{--<li><a href="#">Library</a></li>--}}
            {{--<li class="active">Data</li>--}}
        </ol>
        @if(\Request::root() == "http://gymcrm.com")
            <div class="col-xs-12">
                <h4>会员管理</h4>
                <div>

                </div>
            </div>
            <div class="col-xs-12">
                <h4>会所状态</h4>
            </div>
        @else
            <h4 class="page-title">@yield('page-title')</h4>
            @yield('content')
        @endif

    </section>

    <!-- Older IE Message -->
    <!--[if lt IE 9]>
    <div class="ie-block">
        <h1 class="Ops">Ooops!</h1>
        <p>您使用的浏览器不兼容这套系统，请下载安装以下任意一种浏览器</p>
        <ul class="browsers">
            <li>
                <a href="https://www.google.com/intl/en/chrome/browser/">
                    <img src="img/browsers/chrome.png" alt="">
                    <div>Google Chrome（谷歌浏览器）</div>
                </a>
            </li>
            <li>
                <a href="http://www.mozilla.org/en-US/firefox/new/">
                    <img src="img/browsers/firefox.png" alt="">
                    <div>Mozilla Firefox（火狐浏览器）</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com/computer/windows">
                    <img src="img/browsers/opera.png" alt="">
                    <div>Opera（欧朋浏览器）</div>
                </a>
            </li>
            <li>
                <a href="http://safari.en.softonic.com/">
                    <img src="img/browsers/safari.png" alt="">
                    <div>Safari（苹果浏览器）</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/downloads/ie-10/worldwide-languages">
                    <img src="img/browsers/ie.png" alt="">
                    <div>Internet Explorer(新版IE浏览器)</div>
                </a>
            </li>
        </ul>
        <p>安装成功后，使用新安装的浏览器打开我们的软件 <br/>谢谢您的支持与配合</p>
    </div>
    <![endif]-->
</section>

<!-- Javascript Libraries -->
@include('public.script')
</body>
</html>