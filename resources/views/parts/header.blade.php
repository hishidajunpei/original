<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
         {{-- 後の章で説明します --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- 各ページごとにtitleタグを入れるために@yieldで空けておきます。 --}}
        <title>@yield('title')</title>

        <!-- Scripts -->
         {{-- Laravel標準で用意されているJavascriptを読み込みます --}}
        <script src="{{ secure_asset('js/app.js') }}" defer></script>
        <!-- Fonts -->
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Sawarabi+Mincho" rel="stylesheet">
        <link href="https://fonts.googleapis.com/earlyaccess/hannari.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Sawarabi+Gothic" rel="stylesheet">
        <!-- Styles -->
        {{-- Laravel標準で用意されているCSSを読み込みます --}}
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        {{-- この章の後半で作成するCSSを読み込みます --}}
        <link href="{{ secure_asset('css/admin.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('css/top.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('css/header.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('css/design.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('css/coordinate.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('css/contact.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('css/confirm.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('css/thanks.css') }}" rel="stylesheet">
        <script type='text/javascript'>
        function scroll_effect() {
        var element = document.getElementsByClassName('scroll-up'); //スクロールアップの名前を持つクラス全てを返すメソッド
        if(!element) return; //要素がなかったら処理をキャンセル
        var scrollY = window.pageYOffset;　//Webブラウザのウインドウのスクロール量を取得する
        var windowH = window.innerHeight; //ウィンドウ内周（表示領域）の高さの値
        var showTiming = 200; // 要素を表示するタイミング
        for(var i = 0; i < element.length; i++) { //0から要素の長さが終わるまで値を返す
        var elemClientRect = element[i].getBoundingClientRect(); //境界ボックスの境界線を示す、ビューポートの左上からの境界ボックスの座標をピクセル数で表す
        var elemY = scrollY + elemClientRect.top;
        if(scrollY > elemY - windowH + showTiming) {
        element[i].classList.add('is-show'); //上にスクロールすれば再度非表示
            }
          }
        }
        window.addEventListener('scroll', scroll_effect); // スクロール時に実行
        </script>
    </head>
    <body>
        <div id="splash">
        <div id="splash_text"></div>
        </div>
        <header>
            <div class="header-title-area">
                <ul class="header-navigation">
                    <img class="header-logo-img" src="{{ secure_asset('img/logo.png') }}">
                    <li><a href="https://www.instagram.com/arashiyama_bespoke/?hl=ja?ref=badge" class="insta_btn2">
                      <i class="fab fa-instagram"></i>
                    </a></li>
                    <li><a href="/contact">お問い合わせ</a></li>
                    <li><a href="/coordinate">コーディネート例</a></li>
                    <li><a href="/design">デザインパターン</a></li>
                    <li><a href="/">HOME</a></li>
                </ul>  
            </div>
        </header>