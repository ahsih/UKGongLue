<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8" />
    <title>车保险攻略 Car Insurance Guide</title>
    <meta name="JACK UK Guide杰克英国攻略" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="{{asset('css/app.css')}}" />
    <link rel="stylesheet" href="{{asset('css/carInsurance.css')}}" />
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="{{asset('js/popup.js')}}"></script>
</head>

<body class="bg-image">
    @include('include.navbar')
    <div class="container contentBackground homepageLayout">
        <div class="row buyCarSites">
            <div class="col-sm-6 col-lg-6">
                <p class="linkStyleNoMargin">1.先看你想买的车<span class="glyphicon glyphicon-arrow-right"></span>买车推荐网站</p>
                <p class="buyCarLinkStyle"><a href="https://www.autotrader.co.uk/" target="_blank"><span
                            class="buyCarSmallText">二手车网站:</span>autotrader.co.uk</a></p>
                <a href="https://www.autotrader.co.uk/" target="_blank">
                    <div class="autotraderImage">
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-6 ">
                <br>
                <p class="buyCarLinkStyle"><a href="https://www.carwow.co.uk/" target="_blank"><span
                            class="buyCarSmallText">新车网站:</span>carwow.co.uk</a></p>
                <a href="https://www.carwow.co.uk/" target="_blank">
                    <div class="carwowImage">
                    </div>
                </a>
            </div>
        </div>
        <div class="row insurancePrice">
            <div class="col-sm-6 col-lg-6">

                <p class="linkStyleNoMargin">2.看保险价格<span class="importantHint">要不然你买了车也买不起保险!!!</span></p>
                <p class="textStyle carInsuranceSecondRow paragraphNoMargin">没保险的车是不能上路的哦！！！</p>
                <p class="textStyle carInsuranceSecondRow">没保险情况下<span
                        class="glyphicon glyphicon-arrow-right"></span>要罚£500+和扣6分<span
                        class="glyphicon glyphicon-arrow-right"></span>严重就上法庭</p>
            </div>
            <div class="col-sm-6 col-lg-6 HomePageTitle">
                <p class="textStyle paragraphNoMargin"> 买车之前:</p>
                <p class="textStyle paragraphNoMargin">先查看你的车保险！！！</p>
                <p class="textStyle paragraphNoMargin"> 英国车保险很贵的哦</p>
            </div>
        </div>
        <div class="row insuranceWebsite">
            <div class="col-sm-6 col-lg-6">
                <p class="linkStyleNoMargin">3.买保险网址</p>
                <p class="buyCarLinkStyle"><a href="https://www.moneysupermarket.com/"
                        target="_blank">moneysupermarket.com</a></p>
                <a href="https://www.moneysupermarket.com/" target="_blank">
                    <div class="moneysupermarketImage">
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-6">
                <br />
                <p class="buyCarLinkStyle"><a href="https://www.comparethemarket.com/"
                        target="_blank">comparethemarket.com</a></p>
                <a href="https://www.comparethemarket.com/" target="_blank">
                    <div class="comparethemarketImage">
                    </div>
                </a>
            </div>
        </div>
        <div class="row insuranceGuide">
            <div class="col-sm-12 col-lg-12">
                <p class="linkStyleNoMargin">4.保险网站需要填:</p>
                <p class="linkStyleNoMargin carRankingMargin">影响车保险排行:
                </p>
                <p class="carRankList"><span class="rankOne">
                        <a href="" onclick="return false;" data-toggle="popover" data-placement="top"
                            data-content="每一年你的车保险过期之后都会加1年保险无索偿，一旦出事故，那么车保险无索偿就会变0">
                            保险无索赔奖励（No-Claim Bonus)</a></span>
                    <span class="glyphicon glyphicon-menu-right"></span>
                    <span class="rankTwo">车驾驶年龄</span><span class="glyphicon glyphicon-menu-right"></span>
                    <span class="rankThree">驾驶执照类型</span><span class="glyphicon glyphicon-menu-right"></span>
                    <span class="rankFour">你的年龄</span><span class="glyphicon glyphicon-menu-right"></span>
                    <span class="rankFive">你的车价格</span><span class="glyphicon glyphicon-menu-right"></span>
                    <span class="rankSix">地区安全问题（越多犯罪的地区越贵）</span><span class="glyphicon glyphicon-menu-right"></span>
                    <span class="rankSeven">一年开多少英里</span></p>
            </div>
            <div class="col-sm-6 col-lg-6">
                <p class="requirementListInsurance"><span class="glyphicon glyphicon-menu-right"></span>1.写车牌号码,地址资料
                </p>
                <p class="requirementListInsurance"><span class="glyphicon glyphicon-menu-right"></span>3.你车保险开始日期</p>
                <p class="requirementListInsurance importantInsuranceText">保险分2种:</p>
            </div>
            <div class="col-sm-6 col-lg-6">
                <p class="requirementListInsurance"><span class="glyphicon glyphicon-menu-right"></span>4.出生日期和驾驶证</p>
                <p class="requirementListInsurance"><span class="glyphicon glyphicon-menu-right"></span>
                    5.填完之后就会给你一个大概价格
                </p>
            </div>
            <div class="col-sm-12 col-lg-12">
                <p class="requirementListInsurance"><span class="glyphicon glyphicon-info-sign"></span>
                    Comprehensive 建议买这个 (全保): 出事故的时候，如果是你全责，那么你的车和他的车和人都保。
                </p>
                <p class="requirementListInsurance"><span class="glyphicon glyphicon-info-sign"></span>
                    Third party cover (第三方保险): 出事故的时候，如果是你全责，那么只有他的车和人保，不保你的车。
                </p>
                <p class="requirementListInsurance importantInsuranceText">千万别填错资料，要不然保险是无效的！！！</p>
            </div>
            <div class="col-sm-6 col-lg-6">
                <p class="requirementListInsurance importantInsuranceText">保险底金分2种:</p>
            </div>
            <div class="col-sm-12 col-lg-12">
                <p class="requirementListInsurance"><span class="glyphicon glyphicon-info-sign"></span>
                    自愿保险底金（Voluntary Excess）（越低保险越贵）: 是索赔款中需要你自己支付的部分，一般£250-£500。
                </p>
                <p class="requirementListInsurance"><span class="glyphicon glyphicon-info-sign"></span>
                    保险公司底金 (Compulsory Excess): 是索赔款中保险公司需要收钱的部分，这个每个保险公司有他们自己的价格。
                </p>
                <p class="requirementListInsurance">打个比方:假如你出车祸，然后是你车报废价格是£3000，然后你的自愿保险底金Voluntary excess是£250和
                    保险公司底金Compulsory excess是£500,那么保险公司只会赔给你£3000-£250-£500=£2250.
                </p>
            </div>
        </div>
    </div>
</body>