@extends('layouts.admin')
@section('title', '確認画面')

@section('content')
<h3>お問い合わせ 内容確認</h3>
  <div class="Form">
  <form action="{{ action('FrontController@thanks') }}" method="post" enctype="multipart/form-data">
    <p class="contact-title">お問い合わせ内容はこちらで宜しいでしょうか？<br>よろしければ「送信する」ボタンを押して下さい。</p>
    <div class="Form-Item">
      <p class="Form-Item-Label">
        <span class="Form-Item-Label-Required">必須</span>お名前
      </p>
      <label>{{$form['name'] }}</label>
      <input type="hidden" name="name" class="Form-Item-Input" value="{{$form['name'] }}">
    </div>
    <div class="Form-Item">
      <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>メールアドレス</p>
      <label>{{$form['email'] }}</label>
      <input type="hidden" name="email" class="Form-Item-Input" value="{{$form['email'] }}">
    </div>
    <div class="Form-Item">
      <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>出張採寸の希望場所</p>
      <label>{{$form['saisun_basyo'] }}</label>
      <input type="hidden" name="saisun_basyo" class="Form-Item-Input" value={{$form['saisun_basyo'] }}>
    </div>
    <div class="Form-Item">
      <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>電話番号</p>
      <label>{{$form['phone_number'] }}</label>
      <input type="hidden" name="phone_number" class="Form-Item-Input" value={{$form['phone_number'] }}>  
    </div>
    <div class="Form-Item">
      <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>ご指定日</p>
      <input type="date" name="kibou_date" class="Form-Item-Input">
    </div>
    <div class="Form-Item">
      <p class="Form-Item-Label isMsg"><span class="Form-Item-Label-Required">必須</span>注文内容</p>
      <label>{{$form['chumon_naiyo'] }}</label>
      <input type="hidden" name="chumon_naiyo" class="Form-Item-Input" value={{$form['chumon_naiyo'] }}>
    </div>
    <div class="Form-Item">
      <p class="Form-Item-Label isMsg">備考（任意）</p>
      <label>{{$form['bikou'] }}</label>
      <input type="hidden" name="bikou" class="Form-Item-Input" value={{$form['bikou'] }}>
    </div>
    <button type="button" class="Form-Btn" onclick="history.back(-1)">
      内容を修正する
    </button>
    <input type="submit" class="Form-Btn" value="送信する">
     {{ csrf_field() }}
  </form>
</div>
@endsection