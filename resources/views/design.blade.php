@extends('layouts.admin')
@section('title', 'デザインパターン')

@section('content')
<div class="design">
    <div class="brand">
        Design Pattern
    </div>
    <div class="sub">
        デザインパターン
    </div>
</div>
<figure class="design-img">
    <img class="design-img" src="{{ secure_asset('img/design-pattern.jpeg') }}">
</figure>
<div class="design-txt">
    <h3>
        お気に入りのブランドを見つける
    </h3>
    <figure class="line_wh">
        <img src="{{ secure_asset('img/line_wh.png') }}">
    </figure>
</div>
<div class="container">
    <div class="single">
        <figure class="zegna">
        <img src="{{ secure_asset('img/zegna-red.png') }}">
        </figure>
        <div class="brand-name">
            <p>Ermenegildo Zegna</p>
            <p>1910年創業。北イタリアでテキスタルメーカーとしてスタート。業界で初めて服地の耳にブランドネームを織り込んで品質を保証した</p>
        </div>
    </div>
</div>
<div class="container">
    <div class="single">
        <figure class="zegna">
        <img src="{{ secure_asset('img/barbaro.png') }}">
        </figure>
        <div class="brand-name">
            <p>BARBARO</p>
            <p>イタリアのオーダージャケットやスラックス向け生地がメインのブランド</p>
        </div>
    </div>
</div>
<div class="container">
    <div class="single">
        <figure class="zegna">
        <img src="{{ secure_asset('img/johnfoster.png') }}">
        </figure>
        <div class="brand-name">
            <p>JOHN FOSTER</p>
            <p>1819年創業。200年の歴史を持つ老舗織物工場。英国テキスタイル産業を代表する生地メーカー</p>
        </div>
    </div>
</div>
<div class="container">
    <div class="single">
        <figure class="zegna">
        <img src="{{ secure_asset('img/loropiana.png') }}">
        </figure>
        <div class="brand-name">
            <p>Loro Piana</p>
            <p>19世紀初頭からイタリアのクアローナで創業された最高級カシミアと最高級ウールを取り扱うテキスタイルメーカー</p>
        </div>
    </div>
</div>
<div class="container">
    <div class="single">
        <figure class="zegna">
        <img src="{{ secure_asset('img/lanvin.png') }}">
        </figure>
        <div class="brand-name">
            <p>LANVIN</p>
            <p>フランスでレディス･オートクチュールのファッションブランドから始まった、世界中のセレブに愛される最高級ラグジュアリーブランド</p>
        </div>
    </div>
</div>
<div class="container">
    <div class="single">
        <figure class="zegna">
        <img src="{{ secure_asset('img/zelander.png') }}">
        </figure>
        <div class="brand-name">
            <p>Loro Piana</p>
            <p>ロロピアーナ社から出されているオーダースーツ業界では最もポピュラーで人気のある最高素材</p>
        </div>
    </div>
</div>
<div class="container">
    <div class="single">
        <figure class="zegna">
        <img src="{{ secure_asset('img/brisbane.png') }}">
        </figure>
        <div class="brand-name">
            <p>brisbane moss</p>
            <p>1858年創業。イギリス・イングランド・ウェスト・ヨークシャー州のファブリック名門メーカー</p>
        </div>
    </div>
</div>
<div class="container">
    <div class="single">
        <figure class="zegna">
        <img src="{{ secure_asset('img/scabal.png') }}">
        </figure>
        <div class="brand-name">
            <p>Scabal</p>
            <p>1938年創業。ベルギー・ブリュッセルに創設され、各国の首脳や世界中のVIPから愛用されて、服地としても知られる世界的マーチャント</p>
        </div>
    </div>
</div>
<div class="container">
    <div class="single">
        <figure class="zegna">
        <img src="{{ secure_asset('img/dunhill.png') }}">
        </figure>
        <div class="brand-name">
            <p>DUNHILL</p>
            <p>誰もがその名を聞いたことがある世界最高峰であり、最高級の老舗ブラン</p>
        </div>
    </div>
</div>
<div class="container">
    <div class="single">
        <figure class="zegna">
        <img src="{{ secure_asset('img/jjminnis.png') }}">
        </figure>
        <div class="brand-name">
            <p>J＆J Minnis</p>
            <p>1874年創業。ワールドワイドな知名度を持つ王室御用達のブランド</p>
        </div>
    </div>
</div>
<div class="container">
    <div class="single">
        <figure class="zegna">
        <img src="{{ secure_asset('img/reda-blue.png') }}">
        </figure>
        <div class="brand-name">
            <p>REDA</p>
            <p>イタリア、ビエラ地区にあるレダ社（生地工場）で古くからアパレル用やオーダー向きの生地を生産</p>
        </div>
    </div>
</div>
<div class="container">
    <div class="single">
        <figure class="zegna">
        <img src="{{ secure_asset('img/carlobarbera.png') }}">
        </figure>
        <div class="brand-name">
            <p>CARLO BARBERA</p>
            <p>1974年創業。大手生地メーカー、カルロ・ バルベラ社を母体にもつブランド</p>
        </div>
    </div>
</div>
<footer>
  　<figure>
        <img class="footer-img" src="{{ secure_asset('img/嵐山.png') }}">
    </figure>
    <div class="footer-msg">
        お客様の記憶に残るオーダースーツを仕立てます
    </div>
    <div class="copyright">
        ©Copyright2022 嵐山BESPOKE.All Rights Reserved.
    </div>
</footer>
@endsection
