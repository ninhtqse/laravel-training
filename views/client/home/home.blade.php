@extends('client.layouts.master')
@section('content')
<nav id="gnavi">
    <div id="gnaviCol" class="clearfix">
        <ul class="row">
            <li class="column"><a class="mainHeaderNavColor" href="index.html">HOME</a></li>
            <li class="column"><a class="mainHeaderNavColor" href="about.html">CAUTION</a></li>


            <li class="column">
                <div id="category-menu">
                    <span class="mainHeaderNavColor">CATEGORY</span>
                    <div class="category-list">
                        <ul id="appsItemCategoryTag">
                            <!-- 大カテゴリのループ -->
                            <li class="appsItemCategoryTag_child"><a
                                    href="categories/1803790.html">Weekly Ranking</a>
                            </li>
                            <!-- 大カテゴリのループ -->
                            <li class="appsItemCategoryTag_child"><a
                                    href="categories/3803574.html">Restock items</a>
                            </li>
                            <!-- 大カテゴリのループ -->
                            <li class="appsItemCategoryTag_child"><a
                                    href="categories/1991343.html">Category Best10</a>
                            </li>
                            <!-- 大カテゴリのループ -->
                            <li class="appsItemCategoryTag_child"><a
                                    href="categories/1764275.html">Today 10%OFF</a>
                            </li>
                            <!-- 大カテゴリのループ -->
                            <li class="appsItemCategoryTag_child"><a
                                    href="categories/2614009.html">FAST</a>
                            </li>
                            <!-- 大カテゴリのループ -->
                            <li class="appsItemCategoryTag_child"><a href="categories/1623874.html">Next
                                    HIT</a>
                            </li>
                            <!-- 大カテゴリのループ -->
                            <li class="appsItemCategoryTag_child"><a href="categories/1612755.html">New
                                    Arrivals</a>
                            </li>
                            <!-- 大カテゴリのループ -->
                            <li class="appsItemCategoryTag_child"><a
                                    href="categories/1463951.html">MENS</a>
                            </li>
                            <!-- 大カテゴリのループ -->
                            <li class="appsItemCategoryTag_child"><a
                                    href="categories/1463950.html">LADIES</a>
                            </li>
                            <!-- 大カテゴリのループ -->
                            <li class="appsItemCategoryTag_child"><a
                                    href="categories/1150353.html">Tops</a>
                            </li>
                            <!-- 大カテゴリのループ -->
                            <li class="appsItemCategoryTag_child"><a
                                    href="categories/1150354.html">Outer</a>
                            </li>
                            <!-- 大カテゴリのループ -->
                            <li class="appsItemCategoryTag_child"><a
                                    href="categories/1150355.html">Bottoms</a>
                            </li>
                            <!-- 大カテゴリのループ -->
                            <li class="appsItemCategoryTag_child"><a
                                    href="categories/1150356.html">Set-up</a>
                            </li>
                            <!-- 大カテゴリのループ -->
                            <li class="appsItemCategoryTag_child"><a
                                    href="categories/1459751.html">Dress</a>
                            </li>
                            <!-- 大カテゴリのループ -->
                            <li class="appsItemCategoryTag_child"><a
                                    href="categories/1150357.html">Bag</a>
                            </li>
                            <!-- 大カテゴリのループ -->
                            <li class="appsItemCategoryTag_child"><a
                                    href="categories/1991271.html">Shoes</a>
                            </li>
                            <!-- 大カテゴリのループ -->
                            <li class="appsItemCategoryTag_child"><a
                                    href="categories/1150358.html">Accessory</a>
                            </li>
                            <!-- 大カテゴリのループ -->
                            <li class="appsItemCategoryTag_child"><a
                                    href="categories/1991280.html">Other</a>
                            </li>
                            <!-- 大カテゴリのループ -->
                            <li class="appsItemCategoryTag_child"><a
                                    href="categories/3406564.html">Room-wear</a>
                            </li>
                            <!-- 大カテゴリのループ -->
                            <li class="appsItemCategoryTag_child"><a
                                    href="categories/1745897.html">~¥5,000</a>
                            </li>
                            <!-- 大カテゴリのループ -->
                            <li class="appsItemCategoryTag_child"><a
                                    href="categories/1745898.html">¥5,000~</a>
                            </li>
                            <!-- 大カテゴリのループ -->
                            <li class="appsItemCategoryTag_child"><a
                                    href="categories/1991260.html">FASHIONISTA × BEEP</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>

            <li class="column"><a class="mainHeaderNavColor inline" href="#Faq_content">Q&A</a></li>
            <li class="column"><a class="mainHeaderNavColor" href="blog.html">BLOG</a></li>
            <li class="column"><a class="mainHeaderNavColor"
                    href="https://thebase.in/inquiry/naughtyboy-base-shop">CONTACT</a></li>
        </ul>
    </div>
</nav>
</div>
</header>
</div>
<!--/#headWrapper-->
<!-- </header> -->

<script type="text/javascript">
$(function () {
$(".inline").modaal({
background: '#fff',
overlay_opacity: '1.0'
});
});
</script>

<div style='display:none'>
<div id='Faq_content' class="modal">
<div id="faqBox">
<h2 class="ttl"><span>Q&amp;A</span>
    <h2>
        <dl>
            <dt>
                <span>Q</span>
                <div class="txt">注文完了メール等(購入完了メール)が届きません。</div>
            </dt>
            <dd>
                <span>A</span>
                <div class="txt">登録したメールアドレスに誤りがあるか、 迷惑メールに入ってしまっている可能性がございます。<br>
                    お手数ですが一度、ご確認お願いします。
                    <ul>
                        <li>BASEメールアドレス：<a href="maito:noreply@thebase.in">noreply@thebase.in</a></li>
                        <li>BEEPメールアドレス：<a href="maito:beepinfo@bordi.co.jp">beepinfo@bordi.co.jp</a>
                        </li>
                    </ul>
                </div>
            </dd>
            <dt>
                <span>Q</span>
                <div class="txt">注文してから、どのくらいで届きますか。</div>
            </dt>
            <dd>
                <span>A</span>
                <div class="txt">発送完了(発注完了)メール受信日から<br>
                    <br>
                    通常商品：発注日より10日〜21日程度<br>
                    <ul class="notes">
                        <li>※営業日基準です。土日はお取り寄せ業務、発送業務を行なっておりません。</li>
                    </ul>
                </div>
            </dd>
            <dt>
                <span>Q</span>
                <div class="txt">送料はいくらですか。</div>
            </dt>
            <dd>
                <span>A</span>
                <div class="txt">一律700円です。
                    <ul class="notes">
                        <li>※北海道や沖縄、その他一部離島でも追加料金が発生することはございません。</li>
                    </ul>
                </div>
            </dd>
            <dt>
                <span>Q</span>
                <div class="txt">配送日時やコンビニ受け取りは指定できますか。</div>
            </dt>
            <dd>
                <span>A</span>
                <div class="txt">出来かねます。<br>
                    購入画面の備考欄等にて、ご指定いただいてもお受けすることは出来ませんので、予めご了承ください。</div>
            </dd>
            <dt>
                <span>Q</span>
                <div class="txt">キャンセルは、できますか。</div>
            </dt>
            <dd>
                <span>A</span>
                <div class="txt">
                    お支払い後に弊社がお送りしております「発送完了(発注完了)メール」をもってご注文確定となりますので、その後キャンセルを承ることはできません。カラー、サイズ変更も同様でございます。<br>
                    また、メールアドレス入力間違い、迷惑メール設定により発送完了メール(発注完了)が届いていない等の理由でも、キャンセルを承ることはできません。</div>
            </dd>
            <dt>
                <span>Q</span>
                <div class="txt">返品はできますか。</div>
            </dt>
            <dd>
                <span>A</span>
                <div class="txt">不良品が届いた / ご注文内容と異なる商品が届いた場合のみ返品可能です。<br>
                    <br>
                    海外製品のため、裁縫は雑な場合がございます。ほつれ、糸の始末、タグなし、しわ、ビーズやボタンなどのしつけが甘いなどの場合がございます。こちらは、返品対象の不良とはなりません。また、ジーパンやデニムなどのボトムスはボタンホールに穴が空いていない商品もございます。その場合はお客様自身で穴を開けて頂く形になりますので、こちらも予めご了承下さい。<br>
                    <br>
                    また以下の場合も返品・交換をお受けできませんので、ご注意ください。
                    <ul class="notes">
                        <li>・お客様のご都合による返品 / 交換（カラー、サイズなど）</li>
                        <li>・タグの付いてない商品</li>
                        <li>・到着から6日以上経過した商品</li>
                        <li>・使用済み、あるいはお直しや洗濯、クリーニングされた商品</li>
                        <li>・お客様のもとでニオイが付着したり、汚れ、キズが生じた商品</li>
                    </ul>
                    <br>
                    <ul class="notes">
                        <li>▶︎交換・返品ご希望の方は、どちらの対応をご希望か明記の上、不良部分の写真及び梱包袋に貼ってある、丸いシールQC番号を添付し、メールにてご連絡をお願いいたします。
                        </li>
                    </ul>
                </div>
            </dd>
        </dl>
</div>
</div>
</div>

<div style='display:none'>
<div id='Shippng_content' class="modal">
<div id="shippngBox">
<h2 class="ttl"><span>ショップの注意事項</span>
    <h2>
        <div class="txt">
            <p>BEEPをご利用いただき誠にありがとうございます。<br>
                <br>
                以下、問い合わせが多い質問です。必ずお読みになってからご購入下さい。</p>
            <dl>
                <dl>
                    ※台風6号による配送遅延について※
                    <br>
                    台風6号の影響により
                    一部地域へのお届けに大幅な遅れが発生する可能性がございます。
                    大変ご迷惑をおかけいたしますが何卒、ご理解いただきますよう宜しくお願い申し上げます。
                    ご購入の際は余裕をもってお早めにお願いいたします。
                    ご迷惑をおかけいたし申し訳ございません。ご了承の程、よろしくお願いいたします。
                    <dl>
                        <dl>
                            <dt>①発着期間について</dt>
                            <dd>
                                <p>弊社は海外に倉庫があり、注文が入り次第、取り寄せの準備を行っております。
                                    ご注文いただいた後、商品在庫切れにより注文キャンセルとさせていただく恐れもございますので、予めご了承くださいませ。</p>

                                <div class="txtBox">
                                    <p>ご注文　→　ご入金確認　→　当社発注　→　海外発送　→　国内発送　→　到着</p>
                                </div>

                                <p>ご注文からお届けまでの期間<br>
                                    <br>
                                    通常商品：発注日より10日〜21日程度<br>
                                    ( 発注日＝ご入金確認日です。注文日ではございません。)<br>
                                </p>
                                <ul class="notes">
                                    <li>※どちらも営業日基準です。土日はお取り寄せ業務、発送業務を行なっておりません。</li>
                                </ul>
                                <p>システムの関係上、BASEより発送完了メールが届きますが、実際には発送手配は完了しておりませんのでご注意ください。</p>
                                <p>送料は一律700円です。<br>
                                    また、北海道や沖縄、その他一部離島でも追加料金が発生することはございません。<br>
                                    配送会社は選択できませんので予めご了承ください。</p>
                            </dd>
                            <dt>②注文完了メールが届かない場合</dt>
                            <dd>
                                <p>ご注文時に登録されたメールアドレスに間違いがあるか、迷惑メールに入ってしまっている可能性がございます。今一度ご確認をお願いいたします。
                                </p>
                            </dd>
                            <dt>③ご注文キャンセルについて</dt>
                            <dd>
                                <p class="ti">◇発注前の場合</p>
                                <ul>
                                    <li>・クレジットお支払いキャリア決済済み → キャンセル可</li>
                                    <li>・コンビニ払い、銀行振り込み → キャンセル不可</li>
                                </ul>
                                <p class="ti">◇発注後の場合</p>
                                <p>お取り寄せを手配中の商品は、キャンセルがお受けできません。</p>
                            </dd>

                            <dt>④長期不在・住所不備に関して</dt>
                            <dd>
                                <p>お客様がご不在の場合は、佐川急便またはヤマト運輸より不在通知でご連絡いたします。不在通知より、お客様自身で再配達依頼をお願いします。<br>
                                    なお、発送日から7日以上経過した商品は、自動的にキャンセルとなります。予めご了承下さい。</p>
                                <ul class="notes">
                                    <li>※配送先住所に誤りがある場合は、住所不明のため、返送となります。</li>
                                    <li>・番地の記入漏れが多く見受けられますので、ご購入時にご確認をお願いいたします。</li>
                                    <li>※保管期限を過ぎた場合には再発送、ご返金等すべての対応をお受けすることができません。</li>
                                </ul>
                                <p>お客様のご都合(長期不在・住所不備）によるキャンセルが続く場合、お支払い方法を制限する措置をとらせていただきます。ご注文された商品は、期間内にお受取りいただきますよう、お願いいたします。
                                </p>
                            </dd>
                            <dt>⑤ショップへのお問合せに関して</dt>
                            <dd>
                                <p>弊社へのお問い合わせは、メールでご連絡をお願いいたします。
                                    <br>お問い合わせメールには土日祝祭日を除き3営業日以内に返信致します。</li><a
                                        href="mailto:beepinfo@bordi.co.jp">beepinfo@bordi.co.jp</a><br>
                                    お電話をいただいてもサポート対応はできませんので、あらかじめご了承ください。</p>
                            </dd>
                        </dl>
                        <div class="notesBox">
                            <h3>！注意事項！</h3>
                            <ul>
                                <li>１）当店では、在庫の流動性が高く、発注後に在庫切れ、又は発送不良になる場合もございます。万が一、商品が在庫切れ、発送不良の場合は、メールでご連絡いたします。
                                </li>

                                <li>２）商品のお色は、屋内や光源の度合で画像と誤差が出る場合がございます。また、各モニターの特性でも異なる事がありご理解の上ご購入ください。
                                </li>

                                <li>３）発注が完了いたしましたご注文のカラー変更、サイズ変更はお受けしておりません。<br>
                                    <br>
                                    <ul class="notes">
                                        <li>・サイズ変更、カラー、イメージが違う、実寸が違うなどのお客様都合での返品・交換は一切お受けしておりません。</li>

                                        <li>・海外商品の為、サイズが前後する場合がございます。</li>

                                        <li>・海外商品の為、写真と生地素材の相違がございます。</li>

                                        <li>・海外製品のため、裁縫は雑な場合がございます。ほつれ、糸の始末、洗濯タグなし、しわ、ビーズやボタンなどのしつけが甘いなどの場合がございます。ご理解の上ご購入お願いしております。
                                        </li>

                                        <li>・海外製品のため、ジーパンやデニムなどのボトムスはボタンホールに穴が空いていない商品もございます。その場合はお客様自身で穴を開けて頂く形になりますので、こちらも予めご了承下さい。
                                        </li>

                                        <li>・商品に匂いや汚れをつけたり、ご試着されたもの、洗濯されたものは交換/返品できません。</li>
                                        <li>・到着から3日以上経過した商品交換/返品できません。</li>
                                    </ul>
                                    <ul class="notes">
                                        <li>※不良品が届いた・ご注文内容と異なる商品が届いた場合<br>
                                            お届けした商品に不良が見受けられた、またはご注文内容と異なる商品が届いた場合には、場合により返品または同一商品と交換させていただきます。<br>
                                            <br>
                                            （不良品に関しましても、商品到着後3日以内にご連絡を頂けない場合、返品はお受け出来ませんのでご了承下さい。）<br>
                                            <br>
                                            交換したい商品が品切れの場合は、払戻し処理を進めさせていただきます。</li>
                                    </ul>

                                    <ul class="notes">
                                        <li>▶︎交換・返品ご希望の方は、どちらの対応をご希望か明記の上、不良部分の写真及び梱包袋に貼ってある丸いシールQC番号を添付し、ご連絡をお願いいたします。<br>
                                            <br>
                                            以下の場合は返品・交換をお受けできませんので、ご注意ください。</li>
                                    </ul>

                                    <ul class="notes">
                                        <li>・お客様のご都合による返品・交換（カラー・サイズなど）</li>
                                        <li>・タグの付いてない商品</li>
                                        <li>・到着から3日以上経過した商品</li>
                                        <li>・使用済み、あるいはお直しや洗濯、クリーニングされた商品</li>
                                        <li>・お客様のもとでニオイが付着したり、汚れ、キズが生じた商品</li>
                                    </ul>
                                </li>

                                <li>４）ご注文完了後の、商品の変更・追加・キャンセルは一切お受け致しておりません。</li>

                                <li>５）お客様の個人情報は発送以外に使用することは一切ございません。ご安心して、ご利用ください。</li>
                            </ul>
                        </div>
                        <p>上記、ご理解の上、ご購入をお願いいたします。</p>
        </div>
</div>
</div>
</div>

<div class="container">

<!--========================================-->
<!--mainvisual ここから/-->
<!--========================================-->
<div id="Mainvisual">
<script src="../client_html/js/jquery.bxslider.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
    $('.bxslider').bxSlider({
        auto: true,
        pause: 6500,
        speed: 1000,
        autoControls: false,
        mode: 'fade',
        controls: false,
        pager: false
    });
});
</script>
<link src="../client_html/css/jquery.bxslider.css" rel="stylesheet">
<ul class="bxslider">
<li><a href="#"><img
            src="../client_html/img/91cecddafa938b99646b4d6a864fe09e.png"
            class="pc"><img
            src="../client_html/img/276e3d7048da7ba2df609bf036d87975.png"
            class="sp"></a></li>
<li><a href="categories/1463951.html"><img
            src="../client_html/img/05836a82959c920200c03c0793064a4f.png"
            class="pc"><img
            src="../client_html/img/5e7284c0079d8af7465547249c56745f.png"
            class="sp"></a></li>
<li><a href="categories/1463950.html"><img
            src="../client_html/img/ff74471fec6d5a79b84eabd10fed8009.png"
            class="pc"><img
            src="../client_html/img/566b13a1aa3971cfdcb2be5f969b87fd.png"
            class="sp"></a></li>
</ul>
</div>

<!--========================================-->
<!--banner ここから/-->
<!--========================================-->
<div id="banner">
<div id="bannerCol">
<ul>
    @foreach($data['category'] as $category_parent)
        @if($category_parent->parent_id == null)
            <li><a href="{{route('product_web', $category_parent->id)}}"><img
                        src="../client_html/img/shop/{{$category_parent->images}}"
                        alt="{{$category_parent->name}}" class="pc">
                </a>
            </li>
        @endif
    @endforeach
    

</ul>
</div><!-- / #bannerCol -->
</div><!-- / #banner -->

<!--========================================-->
<!--categories ここから/-->
<!--========================================-->
<div id="categories">
<div id="categoriesCol">
    @foreach($data['category'] as $category_parent)
        @if($category_parent->name == 'mens'||$category_parent->name == 'ladies')
            <p class="mensTitle sp"><img
                    src="../client_html/img/shop/categories_ttl_{{$category_parent->name}}.png"
                    alt="{{$category_parent->name}}"></p>
            <div class="{{$category_parent->name}}">
                <p class="ttl pc"><img
                        src="../client_html/img/shop/categories_ttl_{{$category_parent->name}}.png"
                        alt="{{$category_parent->name}}"></p>
                <ul>
                    @foreach($data['category'] as $category)
                        @if($category->parent_id == $category_parent->id)
                            <li><a href="{{route('product_web', $category->id)}}" class="fade"><img
                                        src="../client_html/img/shop/{{$category->images}}"
                                        alt="tops">
                                </a>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
            @endif
    @endforeach
</div><!-- / #categoriesCol -->
</div><!-- / #categories -->

<!--========================================-->
<!--recommend ここから/-->
<!--========================================-->
<script>
$(function () {
var displayAmount = 8; // 表示させる数量 
$.ajax({
    url: 'https://www.beepsheepshamp.com/categories/1612755', // 表示させたいコンテンツがあるページURL
    cache: false,
    datatype: 'html',
    success: function (html) {
        var h = $(html).find('#products ul.product_list li'); // 表示させたいコンテンツの要素を指定
        for (var i = 0; i < displayAmount; i++) {
            $('#recommendCol ul').append(h[i]); // append関数で指定先の要素へ出力
        }
    }
});
});
</script>


<section id="products">

<h2 class="ttl"><span><img src="../client_html/img/shop/products_ttl.png"
        alt="人気ランキング"></span>
<h2>
    <ul class="product_list row">

    </ul>
    <div id="loading" style="display: none;width: 100%;"><img src="../client_html/img/loading.gif"
            style="padding: 20px 0;width: 220px;" /></div>
    <p class="more_btn"><span><img
                src="../client_html/img/shop/btn_more.png"
                alt="view more"></span></p>
</section>

<script>
    $(document).ready(function() {
        let arr = [];
        let page = 1;
            $.ajax(`http://laravel-training.local:81/api/v1/products?includes[]=product_details&limit=4&page=${page}`, {
                type: 'GET',  // http method
                dataType: 'json', 
                data: { myData: 'This is my data.' },  // data to submit
                success: function (data, status, xhr) {
                    page = page + 1
                    let html = ""
                    // console.log(data)
                    arr = data.data.products;
                    arr.forEach(obj => {
                        // console.log(obj.product_details[0].price)
                           html += `<li class="column">
                                        <a href="/product_detail/${obj.id}">
                                            <div class="image_container">

                                                <p class="pht fade">
                                                    <img src="../images/uploads/${obj.product_details[0].image}"
                                                        alt="${obj.product_details[0].image}" title="${obj.product_details[0].image}"
                                                    class="image-resize" />
                                                </p>
                                            </div>
                                            <div class="item-detail">
                                                <h2 class="show_on_hover">${obj.name}</h2>
                                                <div class="price show_on_hover">¥${obj.product_details[0].price}</div>
                                            </div>
                                        </a>
                                     </li>`
                    });
                    $('.product_list').append(html);

                },
                    error: function (jqXhr, textStatus, errorMessage) {
                            $('p').append('Error: ' + errorMessage);
                        }

            });
        $('.more_btn').on('click',function(){
            
            $.ajax(`http://laravel-training.local:81/api/v1/products?includes[]=product_details&limit=4&page=${page}`, {
                type: 'GET',  // http method
                dataType: 'json', 
                data: { myData: 'This is my data.' },  // data to submit
                success: function (data, status, xhr) {
                    page = page + 1
                    let html = ""
                    console.log(data)
                    arr = data.data.products;
                    arr.forEach(obj => {
                        console.log(obj.product_details[0].price)
                           html += `<li class="column">
                                        <a href="/product_detail/${obj.id}">
                                            <div class="image_container">

                                                <p class="pht fade">
                                                    <img src="../images/uploads/${obj.product_details[0].image}"
                                                        alt="${obj.product_details[0].image}" title="${obj.product_details[0].image}"
                                                    class="image-resize" />
                                                </p>
                                            </div>
                                            <div class="item-detail">
                                                <h2 class="show_on_hover">${obj.name}</h2>
                                                <div class="price show_on_hover">¥${obj.product_details[0].price}</div>
                                            </div>
                                        </a>
                                     </li>`
                    });
                    $('.product_list').append(html);

                },
                    error: function (jqXhr, textStatus, errorMessage) {
                            $('p').append('Error: ' + errorMessage);
                        }
            });
        });
    });
</script>

<!--========================================-->
<!--blog ここから/-->
<!--========================================-->
<script>
$(function () {
$.ajax({
        url: 'https://www.beepsheepshamp.com/blog/feed',
        type: 'GET',
        dataType: 'xml',
    })
    .done(function (data) {
        i = 1;
        $('item', data).each(function () {
            var link = $('link', this).text();
            var title = $('title', this).text();
            var image = $('image', this).text();
            var dateTxt = dateSetFunc($("pubDate", this).text());
            var blog_content = '<li><a href="' + link + '"><dl><dt class="pht"><img src="' +
                image + '"></dt><dd><p class="ttl">' + title + '</p><p class="date">' +
                dateTxt + '</p></dd></dl></a></li>';
            //alert(link + ' : ' + title + ' : ' + image);
            $('#blogList').append(blog_content);
            if (i >= 3) {
                return false;
            }
            i++;
        });
    });

function dateSetFunc(str) {
    var objDate = new Date(str);
    var y = objDate.getFullYear();
    var m = twoDigit(objDate.getMonth() + 1);
    var d = twoDigit(objDate.getDate());
    var ymd = y + "." + m + "." + d;
    str = ymd;
    return str;
}

function twoDigit(d) {
    d = "0" + d;
    d2 = d.substr(d.length - 2, 2);
    return d2;
}
});
</script>
<div id="blogBox">
<h2 class="ttl"><span><img src="../client_html/img/shop/blog_ttl.png"
        alt="人気ランキング"></span>
<h2>
    <ul id="blogList"></ul>
    <p class="more_btn"><a href="blog.html"><img
                src="../client_html/img/shop/btn_all.png"
                alt="view all"></a></p>
</div>


<!--========================================-->
<!--movie ここから/-->
<!--========================================-->
<div id="movie">
<div id="movieCol" style="padding-top: 0;">
<img src="../client_html/img/shop/movie.png">
<!--<iframe src="https://www.youtube.com/embed/?rel=0" frameborder="0" allowfullscreen></iframe>-->
</div><!-- / #movieCol -->
</div><!-- / #movie -->

<!--========================================-->
<!--fashionista ここから/-->
<!--========================================-->
<script src="../client_html/js/5d9c146725cf4/slick.min.js"></script>
<script type="text/javascript">
$(document).on('ready', function () {
$(".center").slick({
    slidesToShow: 4,
    slidesToScroll: 4,
    autoplay: false,
    autoplaySpeed: 2000,
    responsive: [{
        breakpoint: 600,
        settings: { //480px以下では1画像表示
            slidesToShow: 2,
            slidesToScroll: 1
        }
    }]
});
});
</script>

<script type="text/javascript">
$(function () {
$("#fashionistaCol .slider div:nth-child(1)").load(
    "categories/1991260.html#products ul.product_list li:nth-child(1) a");
$("#fashionistaCol .slider div:nth-child(2)").load(
    "categories/1991260.html#products ul.product_list li:nth-child(2) a");
$("#fashionistaCol .slider div:nth-child(3)").load(
    "categories/1991260.html#products ul.product_list li:nth-child(3) a");
$("#fashionistaCol .slider div:nth-child(4)").load(
    "categories/1991260.html#products ul.product_list li:nth-child(4) a");
$("#fashionistaCol .slider div:nth-child(5)").load(
    "categories/1991260.html#products ul.product_list li:nth-child(5) a");
$("#fashionistaCol .slider div:nth-child(6)").load(
    "categories/1991260.html#products ul.product_list li:nth-child(6) a");
$("#fashionistaCol .slider div:nth-child(7)").load(
    "categories/1991260.html#products ul.product_list li:nth-child(7) a");
$("#fashionistaCol .slider div:nth-child(8)").load(
    "categories/1991260.html#products ul.product_list li:nth-child(8) a");
});
</script>

<div id="fashionista">
<h2 class="ttl"><span><img src="../client_html/img/shop/fashionista_ttl.png"
        alt="新着アイテム"></span>
<h2>
    <div id="fashionistaCol">
        <ul class="center slider">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
    </div>
</div><!-- / #fashionistaCol -->
</div><!-- / #fashionista -->
</div>
@endsection