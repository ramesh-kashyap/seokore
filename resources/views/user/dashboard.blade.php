<html class="pc" style="font-size: 50px;">

<head>
    <meta charset="utf-8">
    <title> GenIq - Step Into the Future of Trading

    </title>
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
    <link rel="icon" href="{{ asset('static/img/logo2.png') }}">

    

    <style>
        .brand-logos {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 90px;
            margin-bottom: 10px;
            flex-wrap: wrap;
        }

        .brand-logos img {
            object-fit: contain;
            height: auto;
            max-height: 60px;
            transition: transform 0.3s ease;
        }

        / Responsive for small screens / <blade media|%20(max-width%3A%20768px)%20%7B>.brand-logos {
            gap: 40px;
            margin-top: 40px;
        }

        .brand-logos img {
            max-height: 40px;
            gap: 80px;

        }
        }

        <blade media|%20(max-width%3A%20480px)%20%7B>.brand-logos {
            gap: 40px;
        }

        .brand-logos img {
            max-height: 30px;
        }
        }
    </style>
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
            height: 100vh;
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
            height: 100vh;
            object-fit: cover;
        }
    </style>

    <link href="{{ asset('') }}static/css/app.6328f701.css" rel="preload" as="style">
    <link href="{{ asset('') }}static/css/vant.d14f5539.css" rel="preload" as="style">
    <link href="{{ asset('') }}static/css/vant.d14f5539.css" rel="stylesheet">
    <link href="{{ asset('') }}static/css/app.6328f701.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-bcc45786.50818f65.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-5576a184.9f52f39a.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-60c8a75a.d6f6b692.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-a7d8f170.c87a4291.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-00b1464f.674dbd13.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-6f896b4e.5bb66763.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-67912ed2.ae8d438d.css">
</head>

<!--
<img data-v-b73557e2="" src="{{ asset('') }}static/img/logo2.png"
style="width: 80px; height: 37px;" alt="">  -->


<style>
    ul li[data-v-2b218ac2] {
        background: linear-gradient(180deg, #111116, #141519) !important;

    }

    ul li .title[data-v-2b218ac2] {

        color: #ffffff !important;

    }

    ul li .val[data-v-2b218ac2] {

        color: #fff !important;
    }

    .info[data-v-d59d9098] {
        background: url(../../static/img/pic-quant.28d6d208.png) no-repeat;
        background-size: 100% 100%;
        padding: .32rem 2.6rem .32rem .32rem;
        line-height: 100%;
        margin: .32rem 0;
        box-shadow: 0 4px 12px rgb(116 116 116 / 30%);
        border-radius: 10px;
    }

    .info h3[data-v-d59d9098] {
        color: #ffffff;
        font-size: .32rem;
        font-weight: 600;
        line-height: .44rem;
    }

    .com-title .left[data-v-6b16f068] {
        color: #ffffff;
        font-size: .32rem;
        font-weight: 600;
    }

    .quotes table[data-v-fa2b04fa] {
        width: 100%;
        margin: .2rem 0;
    }

    table {
        border-collapse: collapse;
        border-spacing: 0;
    }

    .quotes table tr[data-v-fa2b04fa] {
        margin-bottom: .34rem;
        display: flex;
        align-items: center;
        width: 100%;
        justify-content: space-between;
    }

    .quotes table th[data-v-fa2b04fa] {
        font-size: .22rem;
        font-weight: 400;
        color: #909c96;
    }

    .quotes table td[data-v-fa2b04fa],
    .quotes table th[data-v-fa2b04fa] {
        padding: .14rem .1rem;
    }

    caption,
    th {
        text-align: left;
    }

    .quotes table th[data-v-fa2b04fa] {
        font-size: .22rem;
        font-weight: 400;
        color: #909c96;
    }

    .quotes table tr[data-v-fa2b04fa] {
        margin-bottom: .34rem;
        display: flex;
        align-items: center;
        width: 100%;
        justify-content: space-between;
    }

    .quotes table td[data-v-fa2b04fa] {
        font-weight: 500;
        color: #fff;
    }

    .banner[data-v-cd710fca] {
        position: relative;
        height: fit-content;
    }

    .partners-section {
        padding: 30px 11px;
        text-align: center;
    }

    .partners-title {
        font-size: 24px;
        font-weight: bold;
        position: relative;
        display: inline-block;
        margin-bottom: 30px;
    }

    .partners-title::after {
        content: '';
        display: block;
        width: 40%;
        height: 2px;
        background: #00ffaa;
        margin: 6px auto 0 auto;
    }

    .partners-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(92px, 1fr));
        gap: 30px;
        max-width: 900px;
        margin: auto;
        align-items: center;
        justify-items: center;
    }

    .partner {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 8px;
        opacity: 0.85;
        transition: opacity 0.3s ease;
    }

    .partner:hover {
        opacity: 1;
    }

    .partner img {
        max-width: 102px;
        max-height: 60px;
        object-fit: contain;
        filter: brightness(0) invert(1);
    }

    .info p[data-v-d59d9098] {
        margin: .16rem 14px .4rem 0px;
        color: #848489;
        font-size: .24rem;
    }

    .home-router[data-v-7a0512e0] {
        display: flex;
        align-items: stretch;
        gap: .22rem;
        margin: .32rem 0;
    }

    .home-router .router-left[data-v-7a0512e0] {
        flex: 3.8;
        aspect-ratio: .83;
        background: url(../../static/img/bg-task.e7e7fa36.png) no-repeat;
        background-size: 100% 100%;
        padding: 0 .28rem;
    }

    .home-router .router-left .title[data-v-7a0512e0] {
        margin-top: .48rem;
        text-align: center;
        color: #fff;
        font-size: .32rem;
    }

    .home-router .router-right[data-v-7a0512e0] {
        flex: 4.5;
        display: contents;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        gap: .22rem;
    }

    .home-router .router-right .router-item.quant[data-v-7a0512e0] {
        background: url(../../static/img/bg-quant.4bc32997.png) no-repeat;
        background-size: 100% 100%;
    }

    .home-router .router-right .router-item.invite[data-v-7a0512e0] {
        background: url(../../static/img/bg-invite.01ab5321.png) no-repeat;
        background-size: 100% 100%;
    }

    .home-router .router-right .router-item .title[data-v-7a0512e0] {
        width: 70%;
        color: #fff;
        font-size: .28rem;
    }

    .home-router .router-right .router-item[data-v-7a0512e0] {
        width: 100%;
        flex: 1;
        padding: 32px;
    }
</style>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

<body class="mein_cn">
    <div id="app" class="applang">
        <div data-v-6e2d35de="" data-v-6b16f068="" class="page">
            <div data-v-6e2d35de="" class="headers">
                <div data-v-b73557e2="" data-v-6b16f068="" class="head" data-v-6e2d35de="">
                    <div data-v-b73557e2="" class="safe"></div>
                    <div data-v-b73557e2="" class="container flex">
                        <!---->
                        <!---->
                        <!---->
                        <div data-v-b73557e2="" class="myName">
                            <a href="{{ route('user.dashboard') }}">

                                <img data-v-b73557e2="" src="{{ asset('') }}static/img/logo.png"
                                    style=" height: 37px;" alt=""> </a>
                        </div>
                        <!---->
                        <!---->
                        <!---->
                        <!---->
                        <div data-v-b73557e2="" class="flex1">

                        </div>

                        <div data-v-b73557e2="" class="notice" style="margin-left: 0rem; margin-right: 0.32rem;">
                            <a href="{{ route('user.notice') }}">
                                <img data-v-b73557e2=""
                                    src="{{asset('static/img/bell.png')}}"
                                    alt="">

                            
                                @if ($notificationCount > 0)
                                    <span data-v-b73557e2=""> {{ $notificationCount ?? 0 }}</span>
                                @endif
                        </div>
                        </a>
                        <div data-v-b73557e2="" class="lang">
                            <a href="{{ route('user.lang') }}"> <img data-v-b73557e2=""
                                    src="{{asset('static/img/globe-1.png')}}"
                                    alt="">
                        </div>
                        </a>
                        <div data-v-b73557e2="" class="notice">
                               <a href="https://t.me/luxboticaa" target="_blank"> 
                            
                            <img data-v-b73557e2=""
                                src="{{asset('static/img/headphone.png')}}"
                                alt="">
                                </a>
                        </div>
                        <!---->
                        <div data-v-b73557e2="" class="head_right"></div>
                    </div>
                    <div data-v-b73557e2="">
                        <!---->
                    </div>
                </div>
            </div>
            <div data-v-6e2d35de="" id="scroll" class="content-container">
                <div data-v-6e2d35de="" id="content" class="content-scroll">
                    <!---->
                    <div data-v-6b16f068="" data-v-6e2d35de="" class="home" style="">


                        <div data-v-6b16f068="" data-v-6e2d35de="" class="container">


                            <div data-v-cd710fca="" data-v-6b16f068="" class="banner" data-v-6e2d35de="">


                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <!-- Slide 1 -->
                                        <div class="swiper-slide">
                                            <div class="item">
                                                <img src="{{ asset('') }}static/img/001.png" alt="">
                                            </div>
                                        </div>
                                        <!-- Slide 2 -->
                                        <div class="swiper-slide">
                                            <div class="item">
                                                <img src="{{ asset('') }}static/img/02.png" alt="">
                                            </div>
                                        </div>
                                        <!-- Slide 3 -->
                                        <div class="swiper-slide">
                                            <div class="item">
                                                <img src="{{ asset('') }}static/img/03.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <span class="swiper-notification" aria-live="assertive"
                                        aria-atomic="true"></span>
                                </div>







                            </div>
                            <ul data-v-2b218ac2="" data-v-6b16f068="" class="flex list" data-v-6e2d35de="">


                                <li data-v-2b218ac2="">
                                    <a href="{{ route('user.asset') }}">
                                        <div data-v-2b218ac2="" class="title" style="">@lang('Total Assets')
                                            <img data-v-2b218ac2="" src="{{ asset('') }}static/img/10.png"
                                                style="filter: brightness(0) saturate(100%) invert(100%) sepia(0%) saturate(7500%) hue-rotate(245deg) brightness(104%) contrast(104%)"
                                                alt="">
                                        </div>
                                        <div data-v-2b218ac2="" class="val" style="">

                                            ${{ number_format(Auth::user()->available_balance(), 2) }}</div>
                                    </a>
                                </li>

                                <?php
                                $balance = round(Auth::user()->available_balance(), 2);
                                $vip = 0;
                    
                                if ($balance >= 30 && $balance <= 499) {
                                    // Basic range: small balance, any user
                                    $vip = 1;
                                } elseif ($balance >= 500 && $balance <= 2999 && $user_direct >= 5) {
                                    // Mid range: requires 5 direct referrals
                                    $vip = 2;
                                } elseif ($balance >= 3000 && $user_direct >= 10) {
                                    // High range: requires 10 direct referrals
                                    $vip = 3;
                                }
                                ?>

                                <li data-v-2b218ac2="">
                                    <a href="{{ route('user.vip') }}">
                                        <div data-v-2b218ac2="" class="title" style="">@lang('Level')
                                            <img data-v-2b218ac2="" src="{{ asset('') }}static/img/10.png"
                                                style="filter: brightness(0) saturate(100%) invert(100%) sepia(0%) saturate(7500%) hue-rotate(245deg) brightness(104%) contrast(104%)"
                                                alt="">
                                        </div>


                                        <div data-v-2b218ac2="" class="val" style=""><img
                                                style="width: 23px;height: 22px;"
                                                src="{{ asset('static/img/' . ($vip > 0 ? 'rank' . $vip : 'V0_icon.69de7dcc') . '.png') }}"
                                                alt="User Rank Icon"> G{{ $vip }}</div>
                                    </a>
                                </li>

                            </ul>
                            <div data-v-6b16f068="" data-v-6e2d35de="" class="notice_bar">
                                <div data-v-6b16f068="" role="alert" class="van-notice-bar" data-v-6e2d35de=""
                                    style="color: rgb(255, 255, 255); background: none;">
                                    <i class="van-icon van-notice-bar__left-icon"><img
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAOHSURBVHgB7ZdBaxNBFMffJCtUUEg/gdOD0B5sNp+gKfgB1LskgVq82X6CpJ+g9SBCLaTePGlFPXgygicFTYulFaTZgqV4sq0VY5tkfG8zm7zZbNPsshaE/uEls9mZeb+ZeTPzAnCu/0wCzkBKqdTY5yUbCxKEcDav3anAWQGRc/yytaVrR/t26ds7+/2vXe7WgQvJyc2xggNxAikacdvxBJpXlt77g+YR3Pr6FHaODgNaB0NZMJjjFHOYhu4MpPq1e/D94wkwbq8SjhtlLEwamNAf4h5aVlsoEcj1L0+4oz38LCjVmsc4kuzFJI+pBATDEEgNrRQCBh1CFe0+2uzd7dcVs1OY2xifWoGEKPh+L/JHEQBT1CCnOa+gbWuIisDdwyuMri3igIRsd4o7Kz010n336A2wgdYvW8POSIH6NGMIYfIBMFRxBW0VzdHO96CPrq4v2tDUMCThwnNPj/HHrPd08aCRx68FA0jvmKKvb2wIM6cB+GU1RFbxuRcE0NVQ88JKPekGdNu3EGmvzGMoC2zLopYRJB8WRhNI/lS/ZFX5czVDy6OcTm2l7CCgnNkpzEFEKaE6I6bd5cWHUQcS1W59kQoCslm5J0gjS7lx1yOclX1WSUIAED/kHIhJKuSScyDecBjikwxTmQPxwJvQJ3UkKRhgVgRc6Ra7k8GB3rIywRQhovzxIWvlnsEJFsg8zjgQHUx8ZDP61A4PZM42DB02+IYB+1M5pdhWR6LtHiB93vi3egkb1tAILjvoMqqECQQt8z6sWyYgeq94JePqQKgFTc7PJIk233Gm3AONjJaYHDvYzpyRhlX9k2zsKW/nCjdfYsQiR+vkKdFSlQ4DBAidliBcDHk3PZl7542tLeWx9+7AdJoxuvEQ8yCrxuCMi7dfPnQDv55BRFHKmtt6xX4RTjLZutloibJQ/BBWhc3x6eVBgCS0cyJPNHpaJi9jPDWeCMjMpf1OzNnpC6ShCEjqR1qWEe+y1bEmwcypJW9PWWNu6yXsHAenscmmyqxnpqthgEpgxtICAs32qc//cbiQCGX7oeggVKBm+VKxd32ByAHNEl+eEkKFygQ+/NzN3q69kLifJvDQXP3dspadTCFCWtOGojPIr7KOsdg10P+yE44BL7V9DuYJz1WNluANCKXC64d5RcQPlddXSRiV4V+KYickWD5M/3H8t/csSHTPVeBcMeov73EzyLp14JsAAAAASUVORK5CYII="
                                            class="van-icon__image">
                                        <!----></i>
                                    <marquee behavior="scroll" direction="left" scrollamount="4">
                                        We’re thrilled to have you join the GeniQ family — a global community of dreamers, doers, and digital wealth creators.
                                    </marquee>

                                </div>
                            </div>

                            <div data-v-7a0512e0="" data-v-3f5ca2a4="" class="home-router" data-v-887483d6="">
                              
                                <div data-v-7a0512e0="" class="router-right">
                                
                                    <div data-v-7a0512e0="" class="router-item quant">
                                            <a href="{{route('user.activities')}}">
                                        <div data-v-7a0512e0="" class="title">Task Center</div>
                                           </a>
                                    </div>
                                 
                                    <div data-v-7a0512e0="" class="router-item invite">
                                               <a href="{{route('user.share')}}">
                                        <div data-v-7a0512e0="" class="title">Invite friends</div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <style>
                                .quotes table td span[data-v-6b16f068] {
                                    font-size: .22rem;
                                    color: #ffffff;
                                }

                                .quotes table td[data-v-6b16f068] {
                                    font-weight: 500;
                                    color: #ffffff;
                                }
                            </style>
                            <div data-v-6b16f068="" data-v-6e2d35de="" class="itemBox">
                                <div data-v-6b16f068="" data-v-6e2d35de="" class="com-title flex">
                                    <div data-v-6b16f068="" data-v-6e2d35de="" class="left">@lang('Market')</div>
                                </div>
                                <div data-v-6b16f068="" data-v-6e2d35de="" class="quotes">
                                    <table data-v-6b16f068="" data-v-6e2d35de="">
                                        <tr data-v-6b16f068="" data-v-6e2d35de="">
                                            <th data-v-6b16f068="" data-v-6e2d35de="">Currency/Name</th>
                                            <th data-v-6b16f068="" data-v-6e2d35de=""></th>
                                            <th data-v-6b16f068="" data-v-6e2d35de="" style="text-align: right;">Last
                                                price/24h change</th>
                                        </tr>



                                        @foreach ($coins as $coin)
                                            <tr data-v-6b16f068="" data-v-6e2d35de="">
                                                <td data-v-6b16f068="" data-v-6e2d35de=""
                                                    style="display: flex; align-items: center;">
                                                    <img data-v-6b16f068="" data-v-6e2d35de=""
                                                        src="{{ $coin['image'] }}" alt=""
                                                        style="height: 0.64rem; width: 0.64rem;">
                                                    <span data-v-6b16f068=""
                                                        data-v-6e2d35de="">{{ strtoupper($coin['symbol']) }}</span>
                                                </td>
                                                <td data-v-6b16f068="" data-v-6e2d35de="" style="width: 2rem;"><svg
                                                        data-v-6b16f068="" width="100%" height="25%"
                                                        viewBox="0 0 300 75" stroke-width="4" data-v-6e2d35de="">
                                                        <defs>
                                                            <linearGradient id="vue-trend-36" x1="0"
                                                                y1="1" x2="0" y2="0">
                                                                <stop offset="0" stop-color="#00fefb"></stop>
                                                                <stop offset="0.5" stop-color="#00fefb"></stop>
                                                                <stop offset="1" stop-color="#00fefb"></stop>
                                                            </linearGradient>
                                                        </defs>
                                                        <path
                                                            d="M8 49.819082516894795L14.210049456695522 60.01383070370757S17.79310344827586 65.89596311483224 22.689655172413794 61.05225184954969L22.689655172413794 61.05225184954969S27.586206896551722 56.20854058426715 32.36939069228332 61.16423532716989L33.97717336533601 62.83000450536611S37.37931034482759 66.35484341265352 42.275862068965516 66.2038249952566L47.172413793103445 66.05280657785967L56.9655172413793 66.12929432779323L66.75862068965517 66.3705619011705L76.55172413793103 65.95903514801712L81.44827586206895 65.51849255645368S86.34482758620689 65.07794996489022 89.9736041167886 61.760981853310156L91.24137931034483 60.60214226805629S96.13793103448275 56.12633457122236 100.58847424351106 61.04586081576746L101.0993561519679 61.61057771401446S105.9310344827586 66.95140179708508 110.82758620689654 61.669991134072646L110.89842811149916 61.593581200830855S115.72413793103448 56.38858047106021 120.62068965517241 61.52699355995394L122.11833855729934 63.09861766499925S125.51724137931033 66.66540664884766 130.41379310344826 66.11923335984633L135.3103448275862 65.573060070845L140.20689655172413 65.05993135930657S145.10344827586206 64.54680264776816 149.97809874000575 65.2376736300702L154.8965517241379 65.93475262466653L164.68965517241378 66.48576492605378L174.48275862068965 66.97722952081277L184.2758620689655 66.99999999997345L189.17241379310343 66.85211592111992S194.06896551724137 66.7042318422664 195.39004787178837 61.98694131692867L201.1653135060041 41.364755452568836S203.8620689655172 31.735243004288485 206.7604480406782 41.306000484063475L210.7567933386321 54.502359780175034S213.65517241379308 64.07311725995002 217.0906639147487 54.68177027738879L220.01278436111335 46.69378747230428S223.44827586206895 37.30244048974305 227.2228593128092 46.56270613244456L229.46679585960456 52.067803259020614S233.2413793103448 61.328068901722126 235.04756480400977 51.49253668620505L241.2282972649557 17.835532215543616S243.03448275862067 8.000000000026539 245.5112436653552 17.688428944436026L250.82773881251276 38.48514183120571S252.82758620689654 46.30801214842782 257.7241379310345 52.728329182168466L259.2990903503385 54.79339341811686S262.6206896551724 59.14864621590912 267.51724137931035 61.60323988643633L267.9778259146103 61.83412642634909S272.41379310344826 64.05783355696353 277.31034482758616 63.25380649520872L277.31034482758616 63.25380649520872S282.2068965517241 62.44977943345392 284.072587432587 57.85174987284239L292 38.31449549806068"
                                                            fill="none" stroke="url(#vue-trend-36)"
                                                            style="transition: stroke-dashoffset 2000ms; stroke-dasharray: 435.888, 435.888; stroke-dashoffset: 0;">
                                                        </path>
                                                    </svg></td>
                                                <td data-v-6b16f068="" data-v-6e2d35de="" class="text-right">
                                                    <div data-v-6b16f068="" data-v-6e2d35de="">
                                                        ${{ number_format($coin['current_price'], 2) }}</div>
                                                    <var data-v-6b16f068="" data-v-6e2d35de="" class="">
                                                        <i data-v-6b16f068="" data-v-6e2d35de=""
                                                            class="play van-icon van-icon-play"><!----></i>
                                                        {{ round($coin['price_change_percentage_24h'], 2) }}% </var>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </table>
                                </div>



                            </div>



                            <style>
                                .logo-wrapper {
                                    display: flex;
                                    justify-content: center;
                                    margin-bottom: 20px;
                                }

                                .logo-row {
                                    display: flex;
                                    align-items: center;
                                    gap: 40px;
                                }

                                .logo-row img {
                                    width: 80px;
                                    height: 80px;
                                    object-fit: contain;
                                }
                            </style>

                            {{-- <div class="logo-wrapper">
                                <div class="logo-row">
                                    <img src="{{ asset('') }}static/img/a2.png" alt="Logo A2">
                                    <img src="{{ asset('') }}static/img/a2.png" alt="Logo F5">
                                    <img src="{{ asset('') }}static/img/a2.png" alt="Logo F5 Duplicate">
                                </div>
                            </div>
                            --}}




                            <div data-v-4e3fe4c4="" data-v-6b16f068="" class="teaminfo">
                                <div data-v-4e3fe4c4="" class="cname" style=""> @lang('Community
                                                                                                                                                                                                                                    Information') </div>
                                <ul data-v-4e3fe4c4="" class="flex">
                                    <li data-v-4e3fe4c4="">
                                        <div data-v-4e3fe4c4="" class="val" style="">
                                            {{ $active_gen_team1total }}/{{ $gen_team1total }}</div>
                                        <div data-v-4e3fe4c4="" class="title" style="">@lang('M1')
                                        </div>
                                    </li>
                                    <li data-v-4e3fe4c4="">
                                        <div data-v-4e3fe4c4="" class="val" style="">
                                            {{ $active_gen_team2total }}/{{ $gen_team2total }}</div>
                                        <div data-v-4e3fe4c4="" class="title" style="">@lang('M2')
                                        </div>
                                    </li>
                                    <li data-v-4e3fe4c4="">
                                        <div data-v-4e3fe4c4="" class="val" style="">
                                            {{ $active_gen_team3total }}/{{ $gen_team3total }}</div>
                                        <div data-v-4e3fe4c4="" class="title" style="">@lang('M3')
                                        </div>
                                    </li>
                                </ul>
                            </div>


                        </div>


                        <div data-v-d496beb0="" data-v-6b16f068="" data-v-6e2d35de=""></div>
                    </div>
                </div>
            </div>
              <style>
                        .van-popup--center.van-popup--round {
                            border-radius: .42667rem;
                        }

                        .van-overlay,
                        .van-popup {
                            position: absolute;
                        }

                        .van-popup--center {
                            top: 50%;
                            left: 50%;
                            -webkit-transform: translate3d(-50%, -50%, 0);
                            transform: translate3d(-50%, -50%, 0);
                        }

                        .van-popup {
                            position: fixed;
                            max-height: 100%;
                            overflow-y: auto;
                            background-color: linear-gradient(180deg, #111116, #141519);
                            -webkit-transition: -webkit-transform .3s;
                            transition: -webkit-transform .3s;
                            transition: transform .3s;
                            transition: transform .3s, -webkit-transform .3s;
                            -webkit-overflow-scrolling: touch;
                            border: .02rem solid hsla(0, 0%, 100%, .1);
                        }

                        .tw-text-center {
                            text-align: center;
                        }

                        .tw-p-16px {
                            padding: .42667rem;
                        }

                        .tw-w-32 {
                            width: 8rem;
                        }

                        .tw-text-16px {
                            font-size: .42667rem;
                        }

                        .tw-mb-16px {
                            margin-bottom: .42667rem;
                        }

                        .tw-w-140px {
                            width: 3.73333rem;
                        }

                        .tw-mx-auto {
                            margin-left: auto;
                            margin-right: auto;
                        }

                        img {
                            max-width: 100%;
                            max-height: 100%;
                            vertical-align: top;
                        }

                        .tw-mt-16px {
                            margin-top: .42667rem;
                        }

                        .tw-text-14px {
                            font-size: .37333rem;
                        }

                        .tw-mb-16px {
                            margin-bottom: .42667rem;
                        }

                        .tw-mt-10px {
                            margin-top: .26667rem;
                        }

                        .tw-items-center {
                            align-items: center;
                        }

                        .tw-flex {
                            display: flex;
                        }

                        .btn1[data-v-29a06c8f] {
                            border-radius: .26667rem;
                            /*border: .03733rem solid #96c907;*/
                            /*background: linear-gradient(180deg, #111116, #141519);*/
                            color: #0cfdfc;
                        }

                        .tw-text-14px {
                            font-size: .37333rem;
                            line-height: normal;
                        }

                        .btn2 {
                            height: .86rem;
                        background: #0ffdfc;
                            border-radius: .2rem;
                            color: var(--COcolor4);
                            font-weight: 500;
                            font-size: 0.32rem;
                            width: 100%;
                            border: 0;
                            margin: 5px;
                        }
                        
                    </style>
            
            @if(Auth::user()->active_status=="Inactive")
            <div class="van-overlay" style="z-index: 2009; display: block;"></div>
            <div data-v-29a06c8f="" class="van-popup van-popup--round van-popup--center" style="z-index: 2010; display: block;">
                <div data-v-29a06c8f="" class="tw-w-32 tw-text-center tw-p-16px">
            
                    <div data-v-29a06c8f="" class="tw-mb-16px tw-text-16px font-bold text-red-600">
                        🚫 Your Account is Inactive
                    </div>
            
                    <div data-v-29a06c8f="" class="tw-text-14px tw-mb-8px">
                        You are currently not earning rewards because your account is inactive.
                    </div>
            
                    <div data-v-29a06c8f="" class="tw-text-14px tw-mb-8px">
                        To unlock your earning potential and enjoy full platform benefits, please activate your <strong>VIP status</strong>.
                    </div>
            
                    <div data-v-29a06c8f="" class="tw-text-14px tw-mb-16px">
                        VIP users earn more daily rewards, gain access to premium features, and participate in exclusive promotions.
                    </div>
            
                    <div data-v-29a06c8f="" class="tw-flex tw-items-center" style="justify-content: space-between;">
                        <button 
                            data-v-29a06c8f="" 
                            class="btn1 btns tw-text-14px"
                            onclick="window.location.href='/user/invest';">
                            Upgrade to VIP
                        </button>
                        <button 
                            data-v-29a06c8f="" 
                            class="btn2 btns"
                            onclick="this.closest('.van-popup').style.display='none';">
                            Later
                        </button>
                    </div>
                </div>
        
            <i role="button" tabindex="0" class="van-icon van-icon-cross van-popup__close-icon van-popup__close-icon--top-right btn-close"></i>
        </div>
                    
            
            @endif
            <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

            <!-- Swiper Init Script -->
            <script>
                var swiper = new Swiper('.swiper-container', {
                    loop: true,
                    autoplay: {
                        delay: 1000, // 10 seconds
                        disableOnInteraction: false,
                    },
                    speed: 800,
                    slidesPerView: 1,
                });
                
                 document.querySelector(".btn2").addEventListener("click", () => {
                    document.querySelector(".van-overlay").style.display = "none";
                    document.querySelector(".van-popup").style.display = "none";
                });
                   
                 document.querySelector(".btn-close").addEventListener("click", () => {
                    document.querySelector(".van-overlay").style.display = "none";
                    document.querySelector(".van-popup").style.display = "none";
                });
                
            </script>

            <!-- Optional CSS to Style Swiper -->
            <style>
                .swiper-container {
                    width: 100%;
                    margin-bottom: 20px;
                }

                .swiper-slide .item {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }

                .swiper-slide .item img {
                    max-width: 100%;
                    height: auto;
                    object-fit: contain;
                }
            </style>
