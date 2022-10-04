@extends('layouts.admin')
@section('title', 'お問い合わせ')

@section('content')
<div class="contact">
    <div class="brand">
        Contact
    </div>
    <div class="sub">
        お問い合わせ
    </div>
</div>
<figure class="design-img">
    <img class="design-img" src="{{ secure_asset('img/main_contact.jpeg') }}">
</figure>
<div class="design-txt">
    <h3>
        お問い合わせフォーム
    </h3>
</div>
<figure class="line_wh">
    <img src="{{ secure_asset('img/line_wh.png') }}">
</figure>
<div class="Form">
  <form action="{{ action('FrontController@confirm') }}" method="post" enctype="multipart/form-data">
    <p class="contact-title">お問い合わせ内容をご入力の上、「確認画面へ」ボタンをクリックしてください。</p>
    <div class="Form-Item">
      <p class="Form-Item-Label">
        <span class="Form-Item-Label-Required">必須</span>お名前
      </p>
      <input type="text" name="name" class="Form-Item-Input" placeholder="例）山田太郎">
    </div>
    <div class="Form-Item">
      <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>メールアドレス</p>
      <input type="text" name="email" class="Form-Item-Input" placeholder="例）yamada-taro@gmail.com">
    </div>
    <div class="Form-Item">
      <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>出張採寸の希望場所</p>
      <input type="text" name="saisun_basyo" class="Form-Item-Input" placeholder="例）自宅、オフィス内">
    </div>
    <div class="Form-Item">
      <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>電話番号</p>
      <input type="tel" name="phone_number" class="Form-Item-Input" placeholder="例）000-0000-0000">
    </div>
    <div class="Form-Item">
      <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>ご指定日</p>
      <input type="date" name="kibou_date" class="Form-Item-Input">
    </div>
    <div class="Form-Item">
      <p class="Form-Item-Label isMsg"><span class="Form-Item-Label-Required">必須</span>注文内容</p>
      <textarea name="chumon_naiyo" class="Form-Item-Textarea"></textarea>
    </div>
    <div class="Form-Item">
      <p class="Form-Item-Label isMsg">備考（任意）</p>
      <textarea name="bikou" class="Form-Item-Textarea"></textarea>
    </div>
    <input type="submit" class="Form-Btn" value="確認画面へ">
     {{ csrf_field() }}
  </form>
</div>
@endsection
