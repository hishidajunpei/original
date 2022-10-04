@extends('layouts.admin')
@section('title', 'トップページ')

@section('content')
<div class="container">
    <section class="imgtext scroll-up">
        <div class="imgtext-container">
            <div class="text">
                <h1>About Us</h1>
                <h2>出張採寸専門</h2>
                <p>お客様の負担を少しでも減らすために出張販売を専門としております。<br>
                ※事務所・自宅・ご要望の場所など全国対応</p>
                <h2>多数の生地・裏地・釦の取り扱い</h2>
                <p>オーダースーツを作るにあたって大事な<br>
                生地、裏地、釦を幅広く取り扱っております。</p>
                <h2>安心の国内縫製</h2>
                <p>国内縫製なので安心の縫製レベルと<br>
                日本人の体型にしっかりフィットする仕立てを可能とします。</p>
            </div>
            <figure class="img">
                <img src="{{ secure_asset('img/contents6.JPG') }}" alt="" width="1200" height="1260">
            </figure>
        </div>
    </section>
    <section class="imgtext scroll-up">
        <div class="imgtext-container">
            <figure class="img">
                <img src="{{ secure_asset('img/contents7.JPG') }}" alt="" width="800" height="1260">
                <div>
                   <a href="/design">More</a>
                </div>
            </figure>
            <div class="text">
                <h1>Design Pattern</h1>
                <h2>生地のデザイン</h2>
                <p>3000種類以上の様々なブランドの生地を取り揃えているため<br>
                きっとあなたの理想に合った生地のデザインに巡り会えるはずです。</p>
                <h2>こだわり抜いた最高のシルエット</h2>
                <p>紳士服採寸技術士のライセンスを取得したスタッフが採寸することで、<br>
                最もあなたの美しさが引き立つオーダースーツを仕立てます。<br>
                また最高のシルエットはもちろん、体のラインに合わせることで、<br>
                着心地の良さも抜群です。</p>
                <h2>細部の装飾</h2>
                <p>脱ぎ着の多いジャケットは裏地にもこだわりたいもの。<br>
                チラッと見える細部にもあなたのセンスをしっかり落とし込むため、<br>
                数多くの裏生地を取り揃えております。</p>
            </div>
        </div>
    </section>
    <section class="imgtext scroll-up">
        <div class="imgtext-container">
            <div class="text">
                <h1>Coordinate</h1>
                <h2><span>コーディネート例</span></h2>
                <p>あなたのこだわりがすべて詰め込まれた理想のスーツ。<br>
                そのために必要なことは、私達にこだわりをとことん教えてください。</p>
                <h2><span>あなたの想いを全て形に</span></h2>
                <p>今まで叶うことのなかった夢のスーツへの想いを語り創り上げる。<br>
                嵐山Bespokeでオーダースーツを創った方の多くがリピートするのは<br>
                創る過程から完成まで、そのすべてに愉しみが詰まっているからです。</p>
                <h2><span>オーダースーツを創る愉しみ</span></h2>
                <p>世界にただ一つのあなたの理想のスーツを創ることは<br>
                あなただけのブライベートブランドを創ることと同じです。</p>
            </div>
            <figure class="img">
                <img src="{{ secure_asset('img/contents5.webp') }}" alt="" width="800" height="1260">
                <div>
                    <a href="/coordinate">More</a>
                </div>
            </figure>
        </div>
    </section>
    <section class="orderflow scroll-up">
        <h1 class="heading">Order Flow</h1>
        <div class="listtext-container">
            <figure class="listimg">
                <img src="{{ secure_asset('img/contents4.jpeg') }}" alt="" width="800" height="1260">   
            </figure>
            <div class="list">
                <h2><span>1.生地を選ぶ</span></h2>
                <p>まずはご予算に合わせて、実際の生地を見ながら、<br>
                お客様のお好みの生地を選んでいただきます。<br>
                色・柄・素材など様々な生地から<br>
                理想のデザインを選ぶ過程は、とても愉しいひとときです。<br>
                どんなシーンで着用されるのかなど、スタッフからもアドバイスいたしますので、<br>
                迷ってしまいそうな方でも、理想のイメージを具体化していきます。</p>
            </div>
        </div>
    </section>
     <section class="orderflow scroll-up">
        <div class="listtext-container">
            <figure class="listimg">
                <img src="{{ secure_asset('img/contents3.jpeg') }}" alt="" width="800" height="1260">   
            </figure>
            <div class="list">
                <h2><span>2.採寸</span></h2>
                <p>サイズフィッターライセンスを持った紳士服採寸技術士が<br>
                細かくお客様のサイズを採寸させていただきます。<br>
                あなたに合った最高のシルエットでありながら、<br>
                着心地の良いスーツに仕上げさせていただきます。</p>
            </div>
        </div>
    </section>
     <section class="orderflow scroll-up">
        <div class="listtext-container">
            <figure class="listimg">
                <img src="{{ secure_asset('img/contents8.png') }}" alt="" width="800" height="1260">   
            </figure>
            <div class="list">
                <h2><span>3.デザイン選択</span></h2>
                <p>ボタンや裏地の選択はもちろん、本切羽・ステッチの色など細部の装飾まで、<br>
                多彩なバリエーションをお客様のご要望をお聞きしながら、<br>
                理想の形に決めていきます。
                ディテールまでこだわれるからこそ、<br>
                あなただけの最高の１着に仕上げることが可能です。</p>
            </div>
        </div>
    </section>
     <section class="orderflow scroll-up">
        <div class="listtext-container">
            <figure class="listimg">
                <img src="{{ secure_asset('img/contents7.JPG') }}" alt="" width="800" height="1260">   
            </figure>
            <div class="list">
                <h2><span>4.仕立て</span></h2>
                <p>細かく書かれた指示書を元に、熟練の職人が心を込めてスーツを仕上げて行きます。
                ご注文から約1ヵ月前後で完成。<br>
                出来上がり次第ご連絡させて頂き、納品もしくは発送でご対応させて頂きます。</p>
            </div>
        </div>
    </section>
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
