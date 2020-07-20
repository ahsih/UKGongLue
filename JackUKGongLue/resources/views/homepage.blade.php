<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8" />
    <title>英国攻略 UK Guide</title>
    <meta name="JACK UK Guide杰克英国攻略" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="{{asset('css/app.css')}}" />
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}" />
    <link rel="stylesheet" href="{{asset('css/homepage.css')}}" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body class="bg-image">
    @include('include.navbar')
    <div class="container contentBackground homepageLayout">
        <div class="row">
            <div class="col-sm-12 col-lg-12 HomePageTitle">
                <p class="paragraphNoMargin">欢迎来到英国攻略，我希望在这里你能找到你需要的攻略在英国哦！！！</p>
                <p class="paragraphNoMargin">每周都会有更新的东西</p>
                <p class="paragraphNoMargin"> 如有问题或者改进，也可以发email给我哦，我尽量做好</p>
                <p class="paragraphNoMargin"> 我的邮箱是 ahsih1zhang@hotmail.com</p>
            </div>
            <div id="carHeader" class="col-sm-6 col-lg-6">
                <div class="carInsurance"></div>
                <p class="subFontStyle"><a class="hyperlinkStyle" href="{{ url('/carInsurance') }}">1.买车网站/保险攻略</a></p>
                <p class="subFontStyle"><a class="hyperlinkStyle" href="{{ url('/buyCar') }}">2.买卖车攻略</a></p>
            </div>
            <div id="airportHeader" class="col-sm-6 col-lg-6">
                <div class="airportImage"></div>
                <p class="subFontStyle"><a class="hyperlinkStyle" href="{{ url('/accommodation') }}">1.伯明翰宿舍介绍</a></p>
                <p class="subFontStyle"><a class="hyperlinkStyle" href="{{ url('/buyCar') }}">2.伯明翰美食</a></p>
            </div>
            <div id="touristHeader" class="col-sm-6 col-lg-6">
                <div class="touristImage"></div>
                <p class="subFontStyle">风景旅游</p>
                <p class="subFontStyle">游遍英国</p>
                <p class="subFontStyle">中餐美食</p>
                <p class="subFontStyle">生活指导</p>
            </div>
        </div>
    </div>
</body>

</html>