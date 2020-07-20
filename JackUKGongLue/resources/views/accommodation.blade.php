<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8" />
    <title>伯明翰宿舍攻略</title>
    <meta name="JACK UK Guide杰克英国攻略" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="{{asset('css/app.css')}}" />
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}" />
    <link rel="stylesheet" href="{{asset('css/accommodation.css')}}" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body class="bg-image">
    @include('include.navbar')
    <div class="container contentBackground homepageLayout">
        <div class="row">
                <div class="col-xs-12 col-lg-12">
                    <div id="accommodationGuide">
                        <p class="heading">伯明翰有许多种宿舍:</p>
                        <div class="guide">
                            <p class="subHeading">大学宿舍 (University Accommodation):</p>
                            <p class="headingThree">优点: <span>安全，租期短（毕竟大学学期就大概47周，不是收费一年）</span></p>
                            <p class="headingThree">缺点: <span>价格高，房间小，遇到比较不爱干净的舍友更加麻烦，交通可能不方便，不过我会建议你们去哪一家大学宿舍比较好</span></p>
                            
                        </div>
                    </div>
                </div>
        </div>
    </div>
</body>