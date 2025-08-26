<html class="pc" style="font-size: 50px;">

<head>
    <meta charset="utf-8">
    <title>Operation Center</title>
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="cache-control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="expires" content="0">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no,viewport-fit=cover">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="full-screen" content="true">
    <meta name="x5-fullscreen" content="true">
    <meta name="360-fullscreen" content="true">
    <meta name="renderer" content="webkit">
    <meta name="robots" content="noindex, nofollow">
    <link rel="manifest" href="/manifest.json">
    
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
    <link href="/js1743619988925/app.d968e27a.1743619988925.js?v=1743619988925" rel="preload" as="script">
    <link href="/js1743619988925/axios.d968e27a.1743619988925.js?v=1743619988925" rel="preload" as="script">
    <link href="/js1743619988925/compressorjs.d968e27a.1743619988925.js?v=1743619988925" rel="preload" as="script">
    <link href="/js1743619988925/core-js.d968e27a.1743619988925.js?v=1743619988925" rel="preload" as="script">
    <link href="/js1743619988925/crypto-js.d968e27a.1743619988925.js?v=1743619988925" rel="preload" as="script">
    <link href="/js1743619988925/vant.d968e27a.1743619988925.js?v=1743619988925" rel="preload" as="script">
    <link href="/js1743619988925/vendors~app.d968e27a.1743619988925.js?v=1743619988925" rel="preload" as="script">
    <link href="/js1743619988925/vue.d968e27a.1743619988925.js?v=1743619988925" rel="preload" as="script">
    <link href="{{asset('')}}static/css/app.6328f701.css" rel="preload" as="style">
    <link href="{{asset('')}}static/css/vant.d14f5539.css" rel="preload" as="style">
    <link href="{{asset('')}}static/css/vant.d14f5539.css" rel="stylesheet">
    <link href="{{asset('')}}static/css/app.6328f701.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-3cf9912c.12730d60.css">
    <script charset="utf-8" src="/js1743619988925/chunk-3cf9912c.d968e27a.1743619988925.js?v=1743619988925"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-5576a184.9f52f39a.css">
    <script charset="utf-8" src="/js1743619988925/chunk-5576a184.d968e27a.1743619988925.js?v=1743619988925"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-60c8a75a.d6f6b692.css">
    <script charset="utf-8" src="/js1743619988925/chunk-60c8a75a.d968e27a.1743619988925.js?v=1743619988925"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-a7d8f170.c87a4291.css">
    <script charset="utf-8" src="/js1743619988925/chunk-a7d8f170.d968e27a.1743619988925.js?v=1743619988925"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-67912ed2.ae8d438d.css">
    <script charset="utf-8" src="/js1743619988925/chunk-67912ed2.d968e27a.1743619988925.js?v=1743619988925"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-75ff273e.12bb350e.css">
    <script charset="utf-8" src="/js1743619988925/chunk-75ff273e.d968e27a.1743619988925.js?v=1743619988925"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-747287e5.9009fee8.css">
    <script charset="utf-8" src="/js1743619988925/chunk-747287e5.d968e27a.1743619988925.js?v=1743619988925"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-7f362702.6a53b834.css">
    <script charset="utf-8" src="/js1743619988925/chunk-7f362702.d968e27a.1743619988925.js?v=1743619988925"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-00b1464f.674dbd13.css">
    <script charset="utf-8" src="/js1743619988925/chunk-00b1464f.d968e27a.1743619988925.js?v=1743619988925"></script>
    <script charset="utf-8" src="/js1743619988925/echarts.d968e27a.1743619988925.js?v=1743619988925"></script>
    <script charset="utf-8" src="/js1743619988925/chunk-0119f9da.d968e27a.1743619988925.js?v=1743619988925"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-bb17762c.89cc2aa3.css">
    <script charset="utf-8" src="/js1743619988925/chunk-bb17762c.d968e27a.1743619988925.js?v=1743619988925"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-05e98ee6.bea82fa2.css">
    <script charset="utf-8" src="/js1743619988925/chunk-05e98ee6.d968e27a.1743619988925.js?v=1743619988925"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-6b11ef3e.540ca443.css">
    <script charset="utf-8" src="/js1743619988925/chunk-6b11ef3e.d968e27a.1743619988925.js?v=1743619988925"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-3553982a.589d4855.css">
    <script charset="utf-8" src="/js1743619988925/chunk-3553982a.d968e27a.1743619988925.js?v=1743619988925"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-b2c9775c.b1e4da02.css">
    <script charset="utf-8" src="/js1743619988925/chunk-b2c9775c.d968e27a.1743619988925.js?v=1743619988925"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-39d146b7.e86e8ed5.css">
    <script charset="utf-8" src="/js1743619988925/chunk-39d146b7.d968e27a.1743619988925.js?v=1743619988925"></script>
    <link rel="icon"  href="{{ asset('static/img/logo2.png') }}">

</head>
<style>
    .bg[data-v-b01bcdbc] {
    background: #0f0e11;
    backdrop-filter: blur(.68966rem);
    background-blend-mode: color;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
[data-v-b01bcdbc] .head {
    min-height: .88rem;
    background-color: #0f0e11 !important;
}
</style>
<body class="mein_cn">
    <div id="app" class="applang">
        <div data-v-6e2d35de="" data-v-b01bcdbc="" class="page">
            <div data-v-b01bcdbc="" data-v-6e2d35de="" class="bg"></div>
            <div data-v-6e2d35de="" class="headers">
                <div data-v-b73557e2="" data-v-b01bcdbc="" class="head" data-v-6e2d35de="">
                    <div data-v-b73557e2="" class="safe"></div>
                    <div data-v-b73557e2="" class="container flex">
                        <div data-v-b73557e2="" class="back">



                          <a href="{{route('user.profile')}}">  <img data-v-b73557e2="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAEeSURBVHgB7Ze9DcIwEIWf+W1ZgQ0oWIBJYBMoqekoEUJsQ
                          AsFA7ACYgCYAHNWbBGO2ICVEBf3SU9Ozufk6ZzYCSAIQrVorQekMVLEmrvqjLRMMnO6KpMNRGDMUbMn9VhXH3XjqZxhhroRc7GI
                          uVjEXCwpmVM8oP2L8JI0R7a4N1lbFGtG5Lrji1LqYG7a+tLchrQjDUkdUteqE2iL8nif71pb0gHIbXUBcyvS2qTYc1d1nctRuXOeB0++r++FX
                          /ZixY7VhxvowHgeU54xzymmOT9RFUd4r6L5QrmTFqQ2smekbcc6uXhRjOeG5HKP8BF4g6dIBTFZFmKyLMRkWYjJsvinyaj/YrMtUmO2xRvrOiMlWC
                          UnSBFrcgJBEOrhAfmtScdij3WYAAAAAElFTkSuQmCC" alt=""> </a></div><!----><!----><!---->
                        <div data-v-b73557e2="" class="name tac"> Operation Center </div><!----><!----><!---->
                        <div data-v-b73557e2="" class="flex1"></div><!----><!----><!----><!----><!---->
                        <div data-v-b73557e2="" class="head_right"></div>
                    </div>
                    <div data-v-b73557e2=""><!----></div>
                </div>
            </div>
            <div data-v-6e2d35de="" id="scroll" class="content-container">
                <div data-v-6e2d35de="" id="content" class="content-scroll">
                    <div data-v-b01bcdbc="" data-v-6e2d35de="" class="container">
                        <div data-v-b01bcdbc="" data-v-6e2d35de="" class="item">
                            <h2 data-v-b01bcdbc="" data-v-6e2d35de="" style="display: none;"> Operation Center </h2>
                            <div data-v-b01bcdbc="" data-v-6e2d35de="" class="p">
                              

                                    <p>
                                      <strong>{{siteName()}}</strong> is a platform offering smart auto trading, team-based investment opportunities, and cryptocurrency income solutions. The following information outlines our data practices to maintain transparency, comply with regulations, and protect user interests.
                                    </p>
                                  
                                    <h3><span style="color:#10e1cc">Data Collection and Usage</span></h3>
                                  
                                    <p>To ensure smooth operation and compliance, {{siteName()}} may collect user details such as phone numbers, usernames, and passwords during account creation. This data is primarily used for:</p>
                                  
                                    <ul>
                                      <li>Account management and login security</li>
                                      <li>Risk control and fraud prevention</li>
                                      <li>Referral and commission tracking</li>
                                    </ul>
                                  
                                    <p>Information collected may include:</p>
                                    <ul>
                                      <li>Contact and identity details</li>
                                      <li>Transaction and wallet activity</li>
                                      <li>Team structure and performance data</li>
                                    </ul>
                                  
                                    <h3><span style="color:#10e1cc">Data Sharing and Security</span></h3>
                                  
                                    <ul>
                                      <li>Data is protected using SSL encryption and regular backups.</li>
                                      <li>Access to sensitive information is restricted through confidentiality agreements.</li>
                                      <li>Compliance with GDPR and CCPA requires user notification and consent for cross-border data transfers.</li>
                                    </ul>
                                  
                                    <h3><span style="color:#10e1cc">User Rights</span></h3>
                                  
                                    <p>Users have the right to:</p>
                                    <ul>
                                      <li>Access or update personal information</li>
                                      <li>Request deletion or restrict processing</li>
                                      <li>Withdraw consent at any time</li>
                                    </ul>
                                    <p>Support channels are available to help users exercise these rights easily and securely.</p>
                                  
                                    <h4><span style="color:#10e1cc">Policy Overview</span></h4>
                                  
                                    <p>{{siteName()}} provides AI-based trading, team income systems, and crypto revenue features. This policy outlines how we collect, use, and protect your data, and how we meet regulatory requirements such as GDPR and CCPA — including clauses on dispute resolution and data transfer obligations.</p>
                                  
                                    <p>As of February 25, 2025, market research indicates leading platforms must adhere strictly to global data privacy norms. Our policy is built to meet these evolving standards.</p>
                                  
                                    <h4><span style="color:#10e1cc">Platform Policies and User Guidelines</span></h4>
                                  
                                    <ul>
                                      <li><strong>Eligibility:</strong> Users must be 18+ and legally permitted to use crypto services in their region.</li>
                                      <li><strong>Account Creation:</strong> Requires basic contact details. Without registration, features remain limited to browsing.</li>
                                      <li><strong>Core Services:</strong> Include automated crypto trading, team rewards, investment management, and wallet operations like buy/sell/transfer.</li>
                                      <li><strong>Service Agreement:</strong> Covers obligations like KYC, anti-money laundering, fee structures, risk disclosures, and account suspension rules.</li>
                                      <li><strong>Prohibited Use:</strong> Activities like fraud, arbitrage abuse, or violation of policy terms are strictly forbidden.</li>
                                      <li><strong>Data Security:</strong> Your information is safeguarded by encryption, routine backups, and internal compliance protocols.</li>
                                      <li><strong>Dispute Resolution:</strong> All disputes are subject to arbitration (e.g., via JAMS), with jury trial waivers in place per agreement.</li>
                                      <li><strong>Account Closure:</strong> {{siteName()}} reserves the right to terminate accounts with advance notice; asset withdrawals are allowed for up to 90 days after closure.</li>
                                      <li><strong>User Control:</strong> Users can withdraw funds anytime, subject to system availability and agreement conditions.</li>
                                      <li><strong>Risk Disclaimer:</strong> {{siteName()}} does not guarantee crypto asset performance and is not liable for loss of tokens, private keys, or valuation changes.</li>
                                      <li><strong>Fees:</strong> Fees for transactions and services may apply and are automatically deducted from account balances.</li>
                                    </ul>
                                  
                                    <h4><span style="color:#10e1cc">Special Clauses</span></h4>
                                  
                                    <ul>
                                      <li><strong>Team Structure:</strong> All team data, including hierarchy and commissions, is stored securely and retained for up to 15 years for tax and audit purposes.</li>
                                      <li><strong>Cross-Border Compliance:</strong> We ensure full alignment with GDPR and CCPA for international data transfers and regional data storage obligations.</li>
                                    </ul>
                                  
                                    <p>This privacy and policy framework is crafted to reflect transparency, regulatory adherence, and long-term trust with all {{siteName()}} users in the evolving world of smart trading and digital finance.</p>
                                  
                                  </div>
                        </div>
                        <div data-v-b01bcdbc="" data-v-6e2d35de="" class="video rel" style="margin-top: 0.2rem; display: none;">
                            <ul data-v-b01bcdbc="" data-v-6e2d35de="" class="video_ul"></ul>
                        </div>
                    </div>
                </div>
            </div><!---->
        </div>
        <div data-v-a7d12cfc="" class="global-loading default" style="display: none;">
            <div data-v-a7d12cfc="" class="global-spinner"><img data-v-a7d12cfc="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAArCAYAAAADgWq5AAAACXBIWXMAAAsTAAALEwEAmpwYAAAF6WlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS42LWMxNDIgNzkuMTYwOTI0LCAyMDE3LzA3LzEzLTAxOjA2OjM5ICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIgeG1sbnM6ZGM9Imh0dHA6Ly9wdXJsLm9yZy9kYy9lbGVtZW50cy8xLjEvIiB4bWxuczpwaG90b3Nob3A9Imh0dHA6Ly9ucy5hZG9iZS5jb20vcGhvdG9zaG9wLzEuMC8iIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTcgKFdpbmRvd3MpIiB4bXA6Q3JlYXRlRGF0ZT0iMjAyMi0wNC0xMlQxNTo0MTowNiswODowMCIgeG1wOk1vZGlmeURhdGU9IjIwMjItMDQtMTJUMTU6NDM6MTQrMDg6MDAiIHhtcDpNZXRhZGF0YURhdGU9IjIwMjItMDQtMTJUMTU6NDM6MTQrMDg6MDAiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NWU0ZGQwNmEtMWExNS1kYjRmLTkyZmQtZjIzNTAwNzJkMGNmIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjlGMTI0NjE1NTQzQzExRThCQzhCQzEyQjVDOUMzOEJGIiB4bXBNTTpPcmlnaW5hbERvY3VtZW50SUQ9InhtcC5kaWQ6OUYxMjQ2MTU1NDNDMTFFOEJDOEJDMTJCNUM5QzM4QkYiIGRjOmZvcm1hdD0iaW1hZ2UvcG5nIiBwaG90b3Nob3A6Q29sb3JNb2RlPSIzIiBwaG90b3Nob3A6SUNDUHJvZmlsZT0ic1JHQiBJRUM2MTk2Ni0yLjEiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo5RjEyNDYxMjU0M0MxMUU4QkM4QkMxMkI1QzlDMzhCRiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo5RjEyNDYxMzU0M0MxMUU4QkM4QkMxMkI1QzlDMzhCRiIvPiA8eG1wTU06SGlzdG9yeT4gPHJkZjpTZXE+IDxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJzYXZlZCIgc3RFdnQ6aW5zdGFuY2VJRD0ieG1wLmlpZDo1ZTRkZDA2YS0xYTE1LWRiNGYtOTJmZC1mMjM1MDA3MmQwY2YiIHN0RXZ0OndoZW49IjIwMjItMDQtMTJUMTU6NDM6MTQrMDg6MDAiIHN0RXZ0OnNvZnR3YXJlQWdlbnQ9IkFkb2JlIFBob3Rvc2hvcCBDQyAoV2luZG93cykiIHN0RXZ0OmNoYW5nZWQ9Ii8iLz4gPC9yZGY6U2VxPiA8L3htcE1NOkhpc3Rvcnk+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+hddYGwAABHhJREFUWIXN2XuoFVUUx/HPXG9WmmIPJQtNwQwqe5paEI1pCBZCRvVXDwlKCsLpIURgIZZG1KEXRVJJWPRnIv3TAw/0UCsrUlBLLQ1T01Ip6eZr+mPPOHOP56jXcz3XHxzu3nv2nv29a/bstdaeyJIXdYOG4bLs77k4AzvQFyvxKw7gJ/xZHpjGSZcmam8Csg/uxU0Yi8HHMGYz1uAtfIh/uzrp8QBPwFO4HgfR1oWx52e/CViX3ef9rkwedWFJXIQncE+da7uwHcuwF1uQClbvi1G4tMF9V+GuNE5+6C7gUzANT2Joqb0Dm/A6XsO+I9yjD/7DaMzArTi1ps/iNE6mNAvcjqfxKE4rtS/BXHxytAnqqBcuwHQ8XnNtP0amcfJLo8FHWn/98QIeK8Fuw3W48ThhCbvFBsxEhMWla+3YEFUrfbsKfDpewcOKR/e5sBssPU7QusqWwTTBurlWN+rfCHg67i7V3xasurFZwHpK42QBxmFP1jQkqlbW1utbD3g0ygt7Fe7T2QLdrjROVmBSqWlkVK28WtuvHvB7pfImXNvNbA2VxsmXeKnU9FBUrVxT7lMLHGNkVt6JO/DPiQKspzROZuC3UtM7UbVyiLMMPBDzSvWFWHFC6RprrLCbwCU4ZOUy8G24OivvxCwneN02UhonWwSD5Xo3L5SBpypii/mCu+1JzRHcOwyPqpVhFMD9MSYr78OnLUWrozRO1gk7FCE8mEwBPE7hzVbiu5bSNdabpfKkqFqJcuCr0Dsrr1ETZPegPiiVJ6dxkubAQwW/TohTTxa1K4x3IKpWLmwToqfhWWMqpDEnhdI42SrENYSYpqNN2O+uyBojfN16tPqKqpV2fJNVD+LK3MJbS/0GtRqskdI42Y+zsmob/moTlkHuVQ7qHKifDCpnJtvbBMg8XmjD2S1HaqCoWhmgCDl3o1e+S3xf6tey6OwY1K4IxrZhcw68rNRpjJNHA4WsG7ancbI7B/5CcagxCv1aTVarLKS8OaumAuMh17xFsVb64YaW0tVXO27PyvuxiAL4oJC35Xq+dVwNdbEiDv5btmzL4eXcUnmEwpn0lGYpwoVFaZykdAbeJZziEB7HG0JY13JF1crlyE+BdmQsODynm60ImkcIS6WliqqVQXhO8MCEg5Yf8+u1wFvxANbjfoUHbImiaqU3XsbErGkf5qRx0pH3qXfcOj/79YSeFXaG3JAz0zjZUO7QzIF2tymLyp7BI4oXbYVg7U7qceCoWhmKBRhfal6NKWmcHPYOdeX0/EQoxkc6wy7FxDROfq83oKcsfIvw+MfXtC8VLLuj0cBmgXsLb/RIfCVkK72FrXGfELjsEXLGFHcK580DdI5zd2F2GieVo03YLPCDwqF3nmr1Ek6N1grfN7Zn/8xenNPgHsuFbxw/H8uEzQLvVLwH+UZ/pnDOQfg0UKsD2biPMS+Nk5VdmbBZ4IVCVjtVyAXPE2LYsjqEtGs9vhWCrM8cp1NqFviA4OdzXz9ESLcGC+Abhe9yy4Vk8o8m5/M/9rYMi48jzWIAAAAASUVORK5CYII=" alt=""></div>
        </div>
    </div>
    <script src="/js1743619988925/core-js.d968e27a.1743619988925.js?v=1743619988925"></script>
    <script src="/js1743619988925/vue.d968e27a.1743619988925.js?v=1743619988925"></script>
    <script src="/js1743619988925/vant.d968e27a.1743619988925.js?v=1743619988925"></script>
    <script src="/js1743619988925/crypto-js.d968e27a.1743619988925.js?v=1743619988925"></script>
    <script src="/js1743619988925/axios.d968e27a.1743619988925.js?v=1743619988925"></script>
    <script src="/js1743619988925/compressorjs.d968e27a.1743619988925.js?v=1743619988925"></script>
    <script src="/js1743619988925/vendors~app.d968e27a.1743619988925.js?v=1743619988925"></script>
    <script src="/js1743619988925/app.d968e27a.1743619988925.js?v=1743619988925"></script>
    <script>
        window.onload = function() {
            // 禁用双指放大
            document.addEventListener("touchstart", function(event) {
                if (event.touches.length > 1) {
                    event.preventDefault();
                }
            });
            // 禁用双击放大
            let lastTouchEnd = 0;
            document.addEventListener(
                "touchend",
                function(event) {
                    const now = new Date().getTime();
                    if (now - lastTouchEnd <= 300) {
                        event.preventDefault();
                    }
                    lastTouchEnd = now;
                },
                false
            );
            document.addEventListener("gesturestart", function(event) {
                event.preventDefault();
            });
        };
    </script>
</body>

</html>