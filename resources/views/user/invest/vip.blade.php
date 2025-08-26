<html class="pc" style="font-size: 50px;">

<head>
    <meta charset="utf-8">
    <title>{{ siteName() }}</title>
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="cache-control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="expires" content="0">
    <meta name="viewport"
        content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no,viewport-fit=cover">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="full-screen" content="true">
    <meta name="x5-fullscreen" content="true">
    <meta name="360-fullscreen" content="true">
    <meta name="renderer" content="webkit">
    <meta name="robots" content="noindex, nofollow">
    <link rel="manifest" href="/manifest.json">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            new Swiper('.swiper-container', {
                slidesPerView: 'auto',
                spaceBetween: 15,
                grabCursor: true,
                loop: false,
            });
        });
    </script>

    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html,
        body {
            width: 100%;
        }

        #startLogo {
            width: 100%;
            min-width: 7.5rem;
            height: auto;
            max-width: 8.5rem;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1000000;
            background: #020503;
            display: flex;
            align-items: center;
            justify-content: center;
            display: none;
        }

        #startLogo img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }
    </style>

    <link href="{{ asset('') }}static/js1743619988925/app.d968e27a.1743619988925.js?v=1743619988925" rel="preload"
        as="script">
    <link href="{{ asset('') }}static/js1743619988925/app.096af138.1744798709800.js?v=1743619988925" rel="preload"
        as="script">
    <link href="{{ asset('') }}static/js1743619988925/axios.d968e27a.1743619988925.js?v=1743619988925"
        rel="preload" as="script">
    <link href="{{ asset('') }}static/js1743619988925/compressorjs.d968e27a.1743619988925.js?v=1743619988925"
        rel="preload" as="script">
    <link href="{{ asset('') }}static/js1743619988925/core-js.d968e27a.1743619988925.js?v=1743619988925"
        rel="preload" as="script">
    <link href="{{ asset('') }}static/js1743619988925/crypto-js.d968e27a.1743619988925.js?v=1743619988925"
        rel="preload" as="script">
    <link href="{{ asset('') }}static/js1743619988925/vant.d968e27a.1743619988925.js?v=1743619988925" rel="preload"
        as="script">
    <link href="{{ asset('') }}static/js1743619988925/vendors~app.d968e27a.1743619988925.js?v=1743619988925"
        rel="preload" as="script">
    <link href="{{ asset('') }}static/js1743619988925/vue.d968e27a.1743619988925.js?v=1743619988925" rel="preload"
        as="script">
    <link href="{{ asset('') }}static/css/app.6328f701.css" rel="preload" as="style">
    <link href="{{ asset('') }}static/css/vant.d14f5539.css" rel="preload" as="style">
    <link href="{{ asset('') }}static/css/vant.d14f5539.css" rel="stylesheet">
    <link href="{{ asset('') }}static/css/app.6328f701.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-6f896b4e.5bb66763.css">
    <script charset="utf-8"
        src="{{ asset('') }}static/js1743619988925/chunk-6f896b4e.d968e27a.1743619988925.js?v=1743619988925"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-5576a184.9f52f39a.css">
    <script charset="utf-8"
        src="{{ asset('') }}static/js1743619988925/chunk-5576a184.d968e27a.1743619988925.js?v=1743619988925"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-60c8a75a.d6f6b692.css">
    <script charset="utf-8"
        src="{{ asset('') }}static/js1743619988925/chunk-60c8a75a.d968e27a.1743619988925.js?v=1743619988925"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-a7d8f170.c87a4291.css">
    <script charset="utf-8"
        src="{{ asset('') }}static/js1743619988925/chunk-a7d8f170.d968e27a.1743619988925.js?v=1743619988925"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-67912ed2.ae8d438d.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-00b1464f.674dbd13.css">
    <script charset="utf-8"
        src="{{ asset('') }}static/js1743619988925/chunk-00b1464f.d968e27a.1743619988925.js?v=1743619988925"></script>
    <script charset="utf-8"
        src="{{ asset('') }}static/js1743619988925/echarts.d968e27a.1743619988925.js?v=1743619988925"></script>
    <script charset="utf-8"
        src="{{ asset('') }}static/js1743619988925/chunk-0119f9da.d968e27a.1743619988925.js?v=1743619988925"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-0b116a05.250ed6be.css">
    <script charset="utf-8"
        src="{{ asset('') }}static/js1743619988925/chunk-0b116a05.d968e27a.1743619988925.js?v=1743619988925"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-0dfccd70.12d33311.css">
    <script charset="utf-8"
        src="{{ asset('') }}static/js1743619988925/chunk-0dfccd70.d968e27a.1743619988925.js?v=1743619988925"></script>
</head>

<link rel="icon" href="{{ asset('static/img/logo2.png') }}">

<style>
    .items-wrapper {
        transition: all 0.3s ease;
    }
</style>

<style>
    .card {
        background: linear-gradient(to bottom, #202020, #1a1a1a);
        border: 1px solid #444;
        border-radius: 20px;
        padding: 20px;
        width: 100%;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        position: relative;
    }

    .card-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .card-header h2 {
        font-size: 18px;
        font-weight: 600;
    }

    .circle-btn {
        width: 24px;
        height: 24px;
        border: 1px solid #ccc;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
    }

    .progress-ring {
        width: 120px;
        height: 60px;
        background-color: transparent;
        border-top-left-radius: 100px;
        border-top-right-radius: 100px;
        margin: 30px auto 10px;
        position: relative;
    }

    .progress-icon {
        width: 100px;
        height: 100px;
        position: absolute;
        top: -3px;
        left: 50%;
        transform: translateX(-50%);
    }

    .text-center {
        text-align: center;
        margin-bottom: 20px;
    }

    .text-muted {
        color: rgba(255, 255, 255, 0.6);
        font-size: 14px;
    }

    .stats {
        font-size: 14px;
        margin-top: 10px;
    }

    .stats-row {
        display: flex;
        justify-content: space-between;
        margin-bottom: 8px;
    }

    .stats-row span:last-child {
        font-weight: bold;
    }

    .highlight {
        color: #c5ff3e;
        font-weight: bold;
    }

    .card-footer {
        margin-top: 20px;
        text-align: center;
    }

    .cta-button {
        padding: 10px 20px;
        background-color: #c5ff3e;
        color: #000;
        font-weight: bold;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .cta-button:hover {
        background-color: #b6ec32;
    }

    .cname .has.off[data-v-4dfcd54a] {
        color: #f75555;
    }

    .bann .item .abs.css4[data-v-4dfcd54a] {
        color: #ffffff;
    }

    .bann .item .abs.css6[data-v-4dfcd54a] {
        color: #ffffff;
    }

    .bann .item .abs.css7[data-v-4dfcd54a] {
        color: #ffffff;
    }

    .bann .item .abs.css8[data-v-4dfcd54a] {
        color: #ffffff;
    }
    .list2 li .val[data-v-4dfcd54a] {
    font-size: .24rem;
    color: #06b3c9;
}
.cname .has[data-v-4dfcd54a] {
    margin-top: .8rem;
    color: #06b4c9;
    font-size: .28rem;
    line-height: .28rem;
}
</style>

<body class="mein_cn">
    <div id="app" class="applang">
        <div data-v-6e2d35de="" data-v-4dfcd54a="" class="page">
            <div data-v-4dfcd54a="" data-v-6e2d35de="" class="bg"></div>
            <div data-v-6e2d35de="" class="headers">
                <div data-v-b73557e2="" data-v-4dfcd54a="" class="head" data-v-6e2d35de="">
                    <div data-v-b73557e2="" class="safe"></div>
                    <div data-v-b73557e2="" class="container flex">
                        <div data-v-b73557e2="" class="back">
                            <a href="{{ route('user.profile') }}">
                                <img data-v-b73557e2="" src="{{ asset('') }}static/img/eroo.png"
                                    alt=""></a>
                        </div><!----><!----><!---->
                        <div data-v-b73557e2="" class="name tac"> Upgrade Level </div><!----><!----><!---->
                        <div data-v-b73557e2="" class="flex1"></div><!----><!----><!----><!----><!---->
                        <div data-v-b73557e2="" class="head_right"></div>
                    </div>
                    <div data-v-b73557e2=""><!----></div>
                </div>
            </div>
            <div data-v-6e2d35de="" id="scroll" class="content-container">
                <div data-v-6e2d35de="" id="content" class="content-scroll">
                    <div data-v-4dfcd54a="" data-v-6e2d35de="" class="home">
                        <div data-v-4dfcd54a="" data-v-6e2d35de="" class="container">
                            <div data-v-4dfcd54a="" data-v-6e2d35de="" class="itemBox">

                                <?php
                                $balance = round(Auth::user()->available_balance(), 2);
                                
                                ?>

                               

                                <div class="bann">
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper" style="">
                                            <!-- Slide G0 -->
                                            <div data-v-4dfcd54a="" class="swiper-slide"
                                                style="width: 361.364px; margin-right: 15px;">
                                                <div data-v-4dfcd54a="" data-v-6e2d35de="" class="cname">
                                                    <div data-v-4dfcd54a="" data-v-6e2d35de="" class="name">G1
                                                    </div>
                                                    @if($balance>=30)
                                                        <div data-v-4dfcd54a="" data-v-6e2d35de="" class="has">It
                                                            has
                                                            reached this
                                                            level</div>
                                                    @else
                                                        <div data-v-4dfcd54a="" data-v-887483d6="" class="has off">
                                                            Not reached this level</div>
                                                    @endif

                                                </div>
                                                <div data-v-4dfcd54a="" class="item">
                                                    <div data-v-4dfcd54a="" class="abs css0">
                                                        <div data-v-4dfcd54a="" class="name" style="color:white;">
                                                            G1</div>




                                                        <div data-v-4dfcd54a="" class="val" style="color:white;">
                                                            @if($balance>=30)

                                                            @if($balance>=500 && $userDirect>=5)
                                                             
                                                                achieved
                                                                @else
                                                                Current level
                                                                @endif
                                                         
                                                            @else
                                                                Locked
                                                            @endif
                                                        </div>

                                                    </div><img data-v-4dfcd54a=""
                                                        src="{{ asset('') }}static/img/r1.png" alt=""
                                                        style="pointer-events: none;">
                                                </div>
                                                <div data-v-4dfcd54a data-v-7daccefc class="items-wrapper items"
                                                    data-index="0">

                                                    <ul data-v-4dfcd54a="" data-v-887483d6="" class="list2">
                                                        <li data-v-4dfcd54a="" data-v-887483d6="">
                                                            <div data-v-4dfcd54a="" data-v-887483d6=""
                                                                class="title">
                                                                Effective amount</div>
                                                            <div data-v-4dfcd54a="" data-v-887483d6=""
                                                                class="val"><span data-v-4dfcd54a=""
                                                                    data-v-887483d6="">{{number_format(Auth::user()->available_balance(),2)}}</span> / <span
                                                                    data-v-4dfcd54a="" data-v-887483d6=""> 30 USDT</span>
                                                            </div>
                                                        </li>
                                                        <li data-v-4dfcd54a="" data-v-887483d6="">
                                                            <div data-v-4dfcd54a="" data-v-887483d6=""
                                                                class="title">
                                                                Daily
                                                                quantified times</div>
                                                            <div data-v-4dfcd54a="" data-v-887483d6=""
                                                                class="val"> 3times </div>
                                                        </li>
                                                        <li data-v-4dfcd54a="" data-v-887483d6="">
                                                            <div data-v-4dfcd54a="" data-v-887483d6=""
                                                                class="title">Rate of return</div>
                                                            <div data-v-4dfcd54a="" data-v-887483d6=""
                                                                class="val">1.8%-2.1%
                                                            </div>
                                                        </li>
                                                        <li data-v-4dfcd54a="" data-v-887483d6="">
                                                            <div data-v-4dfcd54a="" data-v-887483d6=""
                                                                class="title">
                                                                Minimum
                                                                amount quantification</div>
                                                            <div data-v-4dfcd54a="" data-v-887483d6=""
                                                                class="val"> 30 USDT </div>
                                                        </li>
                                                        <li data-v-4dfcd54a="" data-v-887483d6="">
                                                            <div data-v-4dfcd54a="" data-v-887483d6=""
                                                                class="title">
                                                                Maximum
                                                                amount quantification</div>
                                                            <div data-v-4dfcd54a="" data-v-887483d6=""
                                                                class="val"> 500 USDT</div>
                                                        </li>
                                                        <li data-v-4dfcd54a="" data-v-887483d6="">
                                                            <div data-v-4dfcd54a="" data-v-887483d6=""
                                                                class="title">Min withdrawal</div>
                                                            <div data-v-4dfcd54a="" data-v-887483d6=""
                                                                class="val">10 USDT </div>
                                                        </li>
                                                       
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slide G1 -->
                                            <div data-v-4dfcd54a=""
                                                class="swiper-slide"style="width: 361.364px; margin-right: 15px;">
                                                <div data-v-4dfcd54a="" data-v-6e2d35de="" class="cname">
                                                    <div data-v-4dfcd54a="" data-v-6e2d35de="" class="name">G2
                                                    </div>

                                                    @if($balance>=500 && $userDirect>=5)
                                                        <div data-v-4dfcd54a="" data-v-6e2d35de="" class="has">It
                                                            has
                                                            reached this
                                                            level</div>
                                                    @else
                                                        <div data-v-4dfcd54a="" data-v-887483d6="" class="has off">
                                                            Not reached this level</div>
                                                    @endif

                                                </div>
                                                <div data-v-4dfcd54a="" class="item">
                                                    <div data-v-4dfcd54a="" class="abs css1">
                                                        <div data-v-4dfcd54a="" class="name">G2</div>


                                                        <div data-v-4dfcd54a="" class="val">
                                                            @if($balance>=500 && $userDirect>=5)

                                                            @if($balance>=3000 && $userDirect>=10)
                                                             
                                                                achieved
                                                                @else
                                                                Current level
                                                                @endif
                                                         
                                                            @else
                                                                Locked
                                                            @endif
                                                        </div>

                                                    </div><img data-v-4dfcd54a=""
                                                        src="{{ asset('') }}static/img/r2.png" alt=""
                                                        style="pointer-events: none;">
                                                </div>


                                                <div data-v-4dfcd54a data-v-7daccefc class="items-wrapper items"
                                                    data-index="1">
                                                    <ul data-v-4dfcd54a="" data-v-887483d6="" class="list2">
                                                        <li data-v-4dfcd54a="" data-v-887483d6="">
                                                            <div data-v-4dfcd54a="" data-v-887483d6=""
                                                                class="title">
                                                                Effective amount</div>
                                                            <div data-v-4dfcd54a="" data-v-887483d6=""
                                                                class="val"><span data-v-4dfcd54a=""
                                                                    data-v-887483d6="">{{number_format(Auth::user()->available_balance(),2)}}</span> / <span
                                                                    data-v-4dfcd54a="" data-v-887483d6="">500 USDT</span>
                                                            </div>
                                                        </li>
                                                        <li data-v-4dfcd54a="" data-v-887483d6="">
                                                            <div data-v-4dfcd54a="" data-v-887483d6=""
                                                                class="title">1st
                                                                generation valid members</div>
                                                            <div data-v-4dfcd54a="" data-v-887483d6=""
                                                                class="val"> {{$userDirect}} / 5 </div>
                                                        </li>
                                                        <li data-v-4dfcd54a="" data-v-887483d6="">
                                                            <div data-v-4dfcd54a="" data-v-887483d6=""
                                                                class="title">
                                                                Daily
                                                                quantified times</div>
                                                            <div data-v-4dfcd54a="" data-v-887483d6=""
                                                                class="val"> 4times </div>
                                                        </li>
                                                        <li data-v-4dfcd54a="" data-v-887483d6="">
                                                            <div data-v-4dfcd54a="" data-v-887483d6=""
                                                                class="title">Rate of return</div>
                                                            <div data-v-4dfcd54a="" data-v-887483d6=""
                                                                class="val">2.1%-2.5%
                                                                        
                                                            </div>
                                                        </li>
                                                        <li data-v-4dfcd54a="" data-v-887483d6="">
                                                            <div data-v-4dfcd54a="" data-v-887483d6=""
                                                                class="title">
                                                                Minimum
                                                                amount quantification</div>
                                                            <div data-v-4dfcd54a="" data-v-887483d6=""
                                                                class="val"> 500 USDT </div>
                                                        </li>
                                                        <li data-v-4dfcd54a="" data-v-887483d6="">
                                                            <div data-v-4dfcd54a="" data-v-887483d6=""
                                                                class="title">
                                                                Maximum
                                                                amount quantification</div>
                                                            <div data-v-4dfcd54a="" data-v-887483d6=""
                                                                class="val"> 3000 USDT</div>
                                                        </li>
                                                        <li data-v-4dfcd54a="" data-v-887483d6="">
                                                            <div data-v-4dfcd54a="" data-v-887483d6=""
                                                                class="title">Min withdrawal</div>
                                                            <div data-v-4dfcd54a="" data-v-887483d6=""
                                                                class="val">30 USDT </div>
                                                        </li>
                                                       
                                                    </ul>
                                                </div>
                                            </div>

                                            <div data-v-4dfcd54a=""
                                                class="swiper-slide"style="width: 361.364px; margin-right: 15px;">
                                                <div data-v-4dfcd54a="" data-v-6e2d35de="" class="cname">
                                                    <div data-v-4dfcd54a="" data-v-6e2d35de="" class="name">G3
                                                    </div>
                                                    @if($balance>=3000 && $userDirect>=10)
                                                        <div data-v-4dfcd54a="" data-v-6e2d35de="" class="has">It
                                                            has
                                                            reached this
                                                            level</div>
                                                    @else
                                                        <div data-v-4dfcd54a="" data-v-887483d6="" class="has off">
                                                            Not reached this level</div>
                                                    @endif
                                                </div>
                                                <div data-v-4dfcd54a="" class="item">
                                                    <div data-v-4dfcd54a="" class="abs css2">
                                                        <div data-v-4dfcd54a="" class="name">G3</div>
                                                        <div data-v-4dfcd54a="" class="val">
                                                            @if($balance>=3000 && $userDirect>=10)
                                                                Current level
                                                            @else
                                                                Locked
                                                            @endif
                                                        </div>

                                                    </div><img data-v-4dfcd54a=""
                                                        src="{{ asset('') }}static/img/r3.png" alt=""
                                                        style="pointer-events: none;">
                                                </div>


                                                <div data-v-4dfcd54a data-v-7daccefc class="items-wrapper items"
                                                    data-index="1">
                                                    <ul data-v-4dfcd54a="" data-v-887483d6="" class="list2">
                                                        <li data-v-4dfcd54a="" data-v-887483d6="">
                                                            <div data-v-4dfcd54a="" data-v-887483d6=""
                                                                class="title">
                                                                Effective amount</div>
                                                            <div data-v-4dfcd54a="" data-v-887483d6=""
                                                                class="val"><span data-v-4dfcd54a=""
                                                                    data-v-887483d6="">{{number_format(Auth::user()->available_balance(),2)}}</span> / <span
                                                                    data-v-4dfcd54a="" data-v-887483d6="">3000 USDT</span>
                                                            </div>
                                                        </li>
                                                        <li data-v-4dfcd54a="" data-v-887483d6="">
                                                            <div data-v-4dfcd54a="" data-v-887483d6=""
                                                                class="title">1st
                                                                generation valid members</div>
                                                            <div data-v-4dfcd54a="" data-v-887483d6=""
                                                                class="val"> {{$userDirect}} / 10 </div>
                                                        </li>
                                                        <li data-v-4dfcd54a="" data-v-887483d6="">
                                                            <div data-v-4dfcd54a="" data-v-887483d6=""
                                                                class="title">
                                                                Daily
                                                                quantified times</div>
                                                            <div data-v-4dfcd54a="" data-v-887483d6=""
                                                                class="val"> 6times </div>
                                                        </li>
                                                        <li data-v-4dfcd54a="" data-v-887483d6="">
                                                            <div data-v-4dfcd54a="" data-v-887483d6=""
                                                                class="title">Rate of return</div>
                                                            <div data-v-4dfcd54a="" data-v-887483d6=""
                                                                class="val">2.5%-3%
                                                                        
                                                                        
                                                            </div>
                                                        </li>
                                                        <li data-v-4dfcd54a="" data-v-887483d6="">
                                                            <div data-v-4dfcd54a="" data-v-887483d6=""
                                                                class="title">
                                                                Minimum
                                                                amount quantification</div>
                                                            <div data-v-4dfcd54a="" data-v-887483d6=""
                                                                class="val"> 3000 USDT </div>
                                                        </li>
                                                        <li data-v-4dfcd54a="" data-v-887483d6="">
                                                            <div data-v-4dfcd54a="" data-v-887483d6=""
                                                                class="title">
                                                                Maximum
                                                                amount quantification</div>
                                                            <div data-v-4dfcd54a="" data-v-887483d6=""
                                                                class="val"> 10000 USDT</div>
                                                        </li>
                                                        <li data-v-4dfcd54a="" data-v-887483d6="">
                                                            <div data-v-4dfcd54a="" data-v-887483d6=""
                                                                class="title">Min withdrawal</div>
                                                            <div data-v-4dfcd54a="" data-v-887483d6=""
                                                                class="val">50 USDT </div>
                                                        </li>
                                                       
                                                    </ul>
                                                </div>
                                            </div>
                                         

                                        </div>
                                    </div>





                                </div>







                                <!-- After .swiper-container -->



                                <!-- Repeat till data-index="6" for G6 -->


                            </div>
                        </div>
                    </div>
                </div>
            </div><!---->
        </div>
        <div data-v-a7d12cfc="" class="global-loading default" style="display: none;">
            <div data-v-a7d12cfc="" class="global-spinner"><img data-v-a7d12cfc=""
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAArCAYAAAADgWq5AAAACXBIWXMAAAsTAAALEwEAmpwYAAAF6WlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS42LWMxNDIgNzkuMTYwOTI0LCAyMDE3LzA3LzEzLTAxOjA2OjM5ICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIgeG1sbnM6ZGM9Imh0dHA6Ly9wdXJsLm9yZy9kYy9lbGVtZW50cy8xLjEvIiB4bWxuczpwaG90b3Nob3A9Imh0dHA6Ly9ucy5hZG9iZS5jb20vcGhvdG9zaG9wLzEuMC8iIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTcgKFdpbmRvd3MpIiB4bXA6Q3JlYXRlRGF0ZT0iMjAyMi0wNC0xMlQxNTo0MTowNiswODowMCIgeG1wOk1vZGlmeURhdGU9IjIwMjItMDQtMTJUMTU6NDM6MTQrMDg6MDAiIHhtcDpNZXRhZGF0YURhdGU9IjIwMjItMDQtMTJUMTU6NDM6MTQrMDg6MDAiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NWU0ZGQwNmEtMWExNS1kYjRmLTkyZmQtZjIzNTAwNzJkMGNmIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjlGMTI0NjE1NTQzQzExRThCQzhCQzEyQjVDOUMzOEJGIiB4bXBNTTpPcmlnaW5hbERvY3VtZW50SUQ9InhtcC5kaWQ6OUYxMjQ2MTU1NDNDMTFFOEJDOEJDMTJCNUM5QzM4QkYiIGRjOmZvcm1hdD0iaW1hZ2UvcG5nIiBwaG90b3Nob3A6Q29sb3JNb2RlPSIzIiBwaG90b3Nob3A6SUNDUHJvZmlsZT0ic1JHQiBJRUM2MTk2Ni0yLjEiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo5RjEyNDYxMjU0M0MxMUU4QkM4QkMxMkI1QzlDMzhCRiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo5RjEyNDYxMzU0M0MxMUU4QkM4QkMxMkI1QzlDMzhCRiIvPiA8eG1wTU06SGlzdG9yeT4gPHJkZjpTZXE+IDxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJzYXZlZCIgc3RFdnQ6aW5zdGFuY2VJRD0ieG1wLmlpZDo1ZTRkZDA2YS0xYTE1LWRiNGYtOTJmZC1mMjM1MDA3MmQwY2YiIHN0RXZ0OndoZW49IjIwMjItMDQtMTJUMTU6NDM6MTQrMDg6MDAiIHN0RXZ0OnNvZnR3YXJlQWdlbnQ9IkFkb2JlIFBob3Rvc2hvcCBDQyAoV2luZG93cykiIHN0RXZ0OmNoYW5nZWQ9Ii8iLz4gPC9yZGY6U2VxPiA8L3htcE1NOkhpc3Rvcnk+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+hddYGwAABHhJREFUWIXN2XuoFVUUx/HPXG9WmmIPJQtNwQwqe5paEI1pCBZCRvVXDwlKCsLpIURgIZZG1KEXRVJJWPRnIv3TAw/0UCsrUlBLLQ1T01Ip6eZr+mPPOHOP56jXcz3XHxzu3nv2nv29a/bstdaeyJIXdYOG4bLs77k4AzvQFyvxKw7gJ/xZHpjGSZcmam8Csg/uxU0Yi8HHMGYz1uAtfIh/uzrp8QBPwFO4HgfR1oWx52e/CViX3ef9rkwedWFJXIQncE+da7uwHcuwF1uQClbvi1G4tMF9V+GuNE5+6C7gUzANT2Joqb0Dm/A6XsO+I9yjD/7DaMzArTi1ps/iNE6mNAvcjqfxKE4rtS/BXHxytAnqqBcuwHQ8XnNtP0amcfJLo8FHWn/98QIeK8Fuw3W48ThhCbvFBsxEhMWla+3YEFUrfbsKfDpewcOKR/e5sBssPU7QusqWwTTBurlWN+rfCHg67i7V3xasurFZwHpK42QBxmFP1jQkqlbW1utbD3g0ygt7Fe7T2QLdrjROVmBSqWlkVK28WtuvHvB7pfImXNvNbA2VxsmXeKnU9FBUrVxT7lMLHGNkVt6JO/DPiQKspzROZuC3UtM7UbVyiLMMPBDzSvWFWHFC6RprrLCbwCU4ZOUy8G24OivvxCwneN02UhonWwSD5Xo3L5SBpypii/mCu+1JzRHcOwyPqpVhFMD9MSYr78OnLUWrozRO1gk7FCE8mEwBPE7hzVbiu5bSNdabpfKkqFqJcuCr0Dsrr1ETZPegPiiVJ6dxkubAQwW/TohTTxa1K4x3IKpWLmwToqfhWWMqpDEnhdI42SrENYSYpqNN2O+uyBojfN16tPqKqpV2fJNVD+LK3MJbS/0GtRqskdI42Y+zsmob/moTlkHuVQ7qHKifDCpnJtvbBMg8XmjD2S1HaqCoWhmgCDl3o1e+S3xf6tey6OwY1K4IxrZhcw68rNRpjJNHA4WsG7ancbI7B/5CcagxCv1aTVarLKS8OaumAuMh17xFsVb64YaW0tVXO27PyvuxiAL4oJC35Xq+dVwNdbEiDv5btmzL4eXcUnmEwpn0lGYpwoVFaZykdAbeJZziEB7HG0JY13JF1crlyE+BdmQsODynm60ImkcIS6WliqqVQXhO8MCEg5Yf8+u1wFvxANbjfoUHbImiaqU3XsbErGkf5qRx0pH3qXfcOj/79YSeFXaG3JAz0zjZUO7QzIF2tymLyp7BI4oXbYVg7U7qceCoWhmKBRhfal6NKWmcHPYOdeX0/EQoxkc6wy7FxDROfq83oKcsfIvw+MfXtC8VLLuj0cBmgXsLb/RIfCVkK72FrXGfELjsEXLGFHcK580DdI5zd2F2GieVo03YLPCDwqF3nmr1Ek6N1grfN7Zn/8xenNPgHsuFbxw/H8uEzQLvVLwH+UZ/pnDOQfg0UKsD2biPMS+Nk5VdmbBZ4IVCVjtVyAXPE2LYsjqEtGs9vhWCrM8cp1NqFviA4OdzXz9ESLcGC+Abhe9yy4Vk8o8m5/M/9rYMi48jzWIAAAAASUVORK5CYII="
                    alt=""></div>
        </div>
    </div>

    <div class="van-toast van-toast--middle van-toast--success" style="z-index: 2001; display: none;"><i
            class="van-icon van-icon-success van-toast__icon"><!----></i>
        <div class="van-toast__text">Login successful</div>
    </div><!---->
</body>

</html>
