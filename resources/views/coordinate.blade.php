@extends('layouts.admin')
@section('title', 'コーディネート')

@section('content')
<div class="coordinate">
    <div class="brand">
        Dress Up
    </div>
    <div class="sub">
        コーディネート例
    </div>
</div>
<figure class="design-img">
    <img class="design-img" src="{{ secure_asset('img/main_gallery.jpeg') }}">
</figure>
<div class="design-txt">
    <h3>
        記憶に残るオーダースーツを
    </h3>
    <figure class="line_wh">
        <img src="{{ secure_asset('img/line_wh.png') }}">
    </figure>
<div class="container">
    <div class="single">
        <figure class="zegna">
            <img src="{{ secure_asset('img/suit-sample1.png') }}">
        </figure>
    </div>
</div>
<div class="container">
    <div class="single">
        <figure class="zegna">
            <img src="{{ secure_asset('img/suit-sample2.png') }}">
        </figure>
    </div>
</div>
<div class="container">
    <div class="single">
        <figure class="zegna">
            <img src="{{ secure_asset('img/suit-sample3.png') }}">
        </figure>
    </div>
</div>
<div class="container">
    <div class="single">
        <figure class="zegna">
            <img src="{{ secure_asset('img/suit-sample4.png') }}">
        </figure>
    </div>
</div>
<div class="container">
    <div class="single">
        <figure class="zegna">
            <img src="{{ secure_asset('img/suit-sample5.png') }}">
        </figure>
    </div>
</div>
<div class="container">
    <div class="single">
        <figure class="zegna">
            <img src="{{ secure_asset('img/suit-sample6.png') }}">
        </figure>
    </div>
</div>
<div class="container">
    <div class="single">
        <figure class="zegna">
            <img src="{{ secure_asset('img/suit-sample7.png') }}">
        </figure>
    </div>
</div>
<div class="container">
    <div class="single">
        <figure class="zegna">
            <img src="{{ secure_asset('img/suit-sample8.png') }}">
        </figure>
    </div>
</div>
<div class="container">
    <div class="single">
        <figure class="zegna">
            <img src="{{ secure_asset('img/ura1.png') }}">
        </figure>
    </div>
</div>
<div class="container">
    <div class="single">
        <figure class="zegna">
            <img src="{{ secure_asset('img/ura6.png') }}">
        </figure>
    </div>
</div>
<div class="container">
    <div class="single">
        <figure class="zegna">
            <img src="{{ secure_asset('img/ura7.png') }}">
        </figure>
    </div>
</div>
<div class="container">
    <div class="single">
        <figure class="zegna">
            <img src="{{ secure_asset('img/ura10.png') }}">
        </figure>
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
