<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8" />
    <title>买车攻略 Buy Car Guide</title>
    <meta name="JACK UK Guide杰克英国攻略" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="{{asset('css/app.css')}}" />
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}" />
    <link rel="stylesheet" href="{{asset('css/buyCar.css')}}" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body class="bg-image">
    @include('include.navbar')
    <div class="container contentBackground homepageLayout">
        <div class="row">
            <div class="row buyCarSites">
                <div class="col-sm-9 col-md-9 col-lg-9">
                    <p class="SubHeading">1.当你找到你兴趣的车，请记得检查<span class="glyphicon glyphicon-arrow-right"></span></p>
                    <ol>
                        <li class="ThirdHeading">试驾车，听听发动机有没有奇怪的声音</li>
                        <li class="ThirdHeading">检查车大灯和制动片和制动盘</li>
                        <li class="ThirdHeading">先查看轮胎花纹深度，如果低于3.5mm,那么记得跟卖车主讲价</li>
                        <li class="ThirdHeading">查看机油,当你拔机油针的时候，机油因为在与minimum和maximum的中间</li>
                        <li class="ThirdHeading">在<a target="_blank"
                                href="https://www.gov.uk/get-vehicle-information-from-dvla">
                                https://www.gov.uk/get-vehicle-information-from-dvla</a>查下你要买的车牌</li>
                        <li class="ThirdHeading">网上查下这车MOT(没MOT的车是不能上路的)</li>
                        <li class="ThirdHeading">网上查下这车的历史(可能需要交点钱)</li>
                        <li class="ThirdHeading">查看车主有没有2把钥匙，这是因为防止你的车之后会被人偷掉</li>
                        <li class="ThirdHeading">查看这车有没有Full Service(年保记录）,没有的话车是便宜一点的哦</li>
                        <li class="ThirdHeading">360度看看车外和车里有没有被刮伤过</li>
                        <li class="ThirdHeading">查看V5C，看看这车之前有多少个车主，如果多车主的话，那么就证明这车有问题！</p>
                        <li class="ThirdHeading">查下V5C Chassis Number对不对的上车型号</li>
                    </ol>
                </div>
                <div class="col-sm-3 col-lg-3">
                    <div class="v5cContainer">
                        <img class="v5cImg" src="{{asset('images/buyCar/V5C.jpg')}}">
                    </div>
                    <div class="ownerManualContainer">
                        <img class="ownerManualImg" src="{{asset('images/buyCar/ownerManual.jpg')}}">
                    </div>
                </div>
                <div class="col-sm-12 col-lg-12">
                    <p class="SubHeading topMargin">2.当你买到车之后...<span class="glyphicon glyphicon-arrow-right"></span>
                    </p>
                    <ol>
                        <li class="ThirdHeading">填好V5C车证，然后保管好你车的Service Book/Instruction Book年修书和用户手册</li>
                        <li class="ThirdHeading">买好你的车Road Tax(路税)，去<a target="_blank"
                                href="https://vehicletax.service.gov.uk/">https://vehicletax.service.gov.uk/</a></li>
                        <li class="ThirdHeading">买好你的车保险，没保险是不能上路的</li>
                        <li class="ThirdHeading">加满车油</li>
                    </ol>
                    <p class="SubHeading">2.恭喜你...你终于可以开你的车上路咯...</p>
                </div>
                <div class="col-sm-12 col-lg-12">
                    <p class="SubHeading topMargin">3.开了车之后的保养说明...</p>
                </div>
                <div class="col-sm-9 col-lg-9">
                    <ol>
                        <li class="ThirdHeading">记得按时去4S店换机油和检查其他车易损件，大概每年一次或者每12000英里一次(这个要看你的车型号)</li>
                        <li class="ThirdHeading">建议买个汽车轮胎充气机和汽车警告三角，Amazon，Ebay或者Halfords实体店都有的买，Halfords稍微比较贵
                        </li>
                    </ol>
                </div>
                <div class="col-sm-3 col-lg-3">
                    <div class="triangleContainer">
                        <img class="trianglelImg" src="{{asset('images/buyCar/warningTriangle.png')}}">
                    </div>
                </div>
                <div class="col-sm-12 col-lg-12">
                    <p class="SubHeading topMargin">3.卖车说明...</p>
                </div>
                <div class="col-sm-9 col-lg-9">
                    <ol>
                        <li class="ThirdHeading">先去<a target="_blank"
                                href="https://www.autotrader.co.uk/">Autotrader</a>
                            看一下你卖的车大概价格</li>
                        <li class="ThirdHeading">清理下车里面和外面，然后照几张照片</li>
                        <li class="ThirdHeading">卖车有很多方法:</li>
                    </ol>
                </div>
                <div class="col-sm-12 col-lg-12">
                    <p class="FourthHeading">1.自己卖(能卖出的价格高一点）</p>
                    <p class="FifthHeading"><span class="glyphicon glyphicon-asterisk"></span>可以去<a target="_blank"
                            href="https://www.autotrader.co.uk/sell-my-car">Autotrader Sell-My-Car</a> 卖你的车
                        ，这网站是英国最大的二手车交易所，然后他们收£35-76英镑广告费，卖的速度会比较慢</p>
                    <div class="autoTraderPricingContainer">
                        <img class="autoTraderPricingImg" src="{{asset('images/buyCar/autotrader_pricing.JPG')}}">
                    </div>
                    <p class="FifthHeading"><span
                            class="glyphicon glyphicon-asterisk"></span>把车放在Ebay或者Gumtree卖(个人不建议，因为骗子比较多)</p>
                    <p class="FourthHeading">2.卖给4S店（卖的价格比较低,速度快)</p>
                    <p class="FifthHeading"><span
                            class="glyphicon glyphicon-asterisk"></span>直接把你车开到4S店或者二手车店，然后他们会自动帮你评估车价.如果价格达不到你要求，
                        那么记得跟他们讲价哦(温柔提示: 如果你车换车，那么4S店出价会比较高一点）</p>
                </div>
            </div>
        </div>
    </div>
</body>