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






<link rel="stylesheet" type="text/css" href="../client_html/css/apps/blog/blog_listab23.css?1640246905" />
<div class="main">
<div id="about" itemscope itemtype="http://schema.org/Article" class="blogListMain">
<div class="blog_inner">
    <div class="blog_title">
        <h2 itemprop="name"><a href="blog/2021/04/21/171458.html">チェックしておきたいパステルカラーアイテム🌸</a></h2>
    </div>
    <div class="blog_publish">
        <p class="publish_date" itemprop="dateModified" content="2021/04/21 18:26">2021/04/21 18:26</p>
    </div>
    <div class="blog_head_image">
        <a href="blog/2021/04/21/171458.html"><img
                src="../client_html/img/72cd0c4a54c7885d34e9a7482089e3ad.jpg"
                alt="チェックしておきたいパステルカラーアイテム🌸"></a>
    </div>
    <div class="blog_contents">
        <div class="blog_body" itemprop="description">
            <p class="text">
                こんにちはBEEPスタッフです💓本日は春にチェックしておきたいアイテムをご紹介！特にパステルカラーアイテムは春っぽさを全面に出せるのでチェック必須です✨パステルカラーは原色ではなく淡い色を指します👕👚淡い...
            </p>
        </div>
        <div class="read_more">
            <a href="blog/2021/04/21/171458.html">Read more</a>
        </div>
    </div>
</div>
<div class="blog_inner">
    <div class="blog_title">
        <h2 itemprop="name"><a href="blog/2021/02/04/175011.html">【骨格別オススメアイテム】骨格を理解しファッション上級者へ💨</a>
        </h2>
    </div>
    <div class="blog_publish">
        <p class="publish_date" itemprop="dateModified" content="2021/02/04 17:50">2021/02/04 17:50</p>
    </div>
    <div class="blog_head_image">
        <a href="blog/2021/02/04/175011.html"><img
                src="../client_html/img/7d9a3bfb2cb6e5c2e30dd02ba9656bc2.jpg"
                alt="【骨格別オススメアイテム】骨格を理解しファッション上級者へ💨"></a>
    </div>
    <div class="blog_contents">
        <div class="blog_body" itemprop="description">
            <p class="text">
                こんにちはBEEPスタッフAoiです🟦みなさんは自分の骨格について理解していますか？？自分のスタイルを把握することで洋服をさらに着こなすことができます👚せっかく洋服を買ったんだから着こなしたい！もう無駄使い...
            </p>
        </div>
        <div class="read_more">
            <a href="blog/2021/02/04/175011.html">Read more</a>
        </div>
    </div>
</div>
<div class="blog_inner">
    <div class="blog_title">
        <h2 itemprop="name"><a href="blog/2020/11/05/180000.html">【2020年版】絶対買うべきファッションアイテム5選‼️</a></h2>
    </div>
    <div class="blog_publish">
        <p class="publish_date" itemprop="dateModified" content="2020/11/05 18:00">2020/11/05 18:00</p>
    </div>
    <div class="blog_head_image">
        <a href="blog/2020/11/05/180000.html"><img
                src="../client_html/img/4bdc91d6e514bee7a231f0c251bb8e38.jpg"
                alt="【2020年版】絶対買うべきファッションアイテム5選‼️"></a>
    </div>
    <div class="blog_contents">
        <div class="blog_body" itemprop="description">
            <p class="text">
                こんにちは〜BEEPスタッフのAoiです秋も終わりが近づき、肌寒くなってきましたね🍂本日は持っておいて損しない本当にオススメできるアイテムたちを皆さんに紹介しちゃいます‼️と、その前に2020年秋・冬のトレンド...
            </p>
        </div>
        <div class="read_more">
            <a href="blog/2020/11/05/180000.html">Read more</a>
        </div>
    </div>
</div>
<div class="blog_inner">
    <div class="blog_title">
        <h2 itemprop="name"><a
                href="blog/2020/09/23/201806.html">【남친룩（ナムチンルック）】まさに王道‼︎　これぞ韓国ファッションの真髄👍</a></h2>
    </div>
    <div class="blog_publish">
        <p class="publish_date" itemprop="dateModified" content="2020/10/02 20:11">2020/10/02 20:11</p>
    </div>
    <div class="blog_head_image">
        <a href="blog/2020/09/23/201806.html"><img
                src="../client_html/img/d702f72fb6a73ee358a7a81f7115b63b.jpg"
                alt="【남친룩（ナムチンルック）】まさに王道‼︎　これぞ韓国ファッションの真髄👍"></a>
    </div>
    <div class="blog_contents">
        <div class="blog_body" itemprop="description">
            <p class="text">
                こんにちは、BEEPスタッフAoiです🌀今回ブログ初登場です笑僕は、韓国に住んでいた時に、アパレルショップで働いてました👕なので、韓国ファッションに関しては詳しい方ではないかと感じてます笑そこで、その経験を...
            </p>
        </div>
        <div class="read_more">
            <a href="blog/2020/09/23/201806.html">Read more</a>
        </div>
    </div>
</div>
<div class="blog_inner">
    <div class="blog_title">
        <h2 itemprop="name"><a href="blog/2020/07/16/170000.html">この夏着てほしい🏖 おすすめアイテムたち🐑🌿</a></h2>
    </div>
    <div class="blog_publish">
        <p class="publish_date" itemprop="dateModified" content="2020/07/16 13:24">2020/07/16 13:24</p>
    </div>
    <div class="blog_head_image">
        <a href="blog/2020/07/16/170000.html"><img
                src="../client_html/img/2c54befa943e86a6deac6b03978349fd.jpg"
                alt="この夏着てほしい🏖 おすすめアイテムたち🐑🌿"></a>
    </div>
    <div class="blog_contents">
        <div class="blog_body" itemprop="description">
            <p class="text">
                こんにちはBEEPスタッフひらいです🌼かなーりお久しぶりなブログとなってしまいました（反省）もうすぐ夏本番。夏服の準備はできていますか？今回ご紹介するアイテムは人気のインスタグラマーさんが選んだ注目アイ...
            </p>
        </div>
        <div class="read_more">
            <a href="blog/2020/07/16/170000.html">Read more</a>
        </div>
    </div>
</div>
<div class="blog_inner">
    <div class="blog_title">
        <h2 itemprop="name"><a href="blog/2020/05/09/104153.html">メイクから考える💄トータルコーディネート</a></h2>
    </div>
    <div class="blog_publish">
        <p class="publish_date" itemprop="dateModified" content="2020/05/14 17:00">2020/05/14 17:00</p>
    </div>
    <div class="blog_head_image">
        <a href="blog/2020/05/09/104153.html"><img
                src="../client_html/img/5f097159934cdb11f23611f7b1ee77e4.jpg"
                alt="メイクから考える💄トータルコーディネート"></a>
    </div>
    <div class="blog_contents">
        <div class="blog_body" itemprop="description">
            <p class="text">
                こんにちは♪nonakaです🐑✨みなさんは普段のメイクを毎日のコーディネートに合わせて変えたりしていますか🤔？メイクでコーディネート全体の印象も大分変わってきます😵😵特にアイメイクは重要……かな！と私個人の意見...
            </p>
        </div>
        <div class="read_more">
            <a href="blog/2020/05/09/104153.html">Read more</a>
        </div>
    </div>
</div>
<div class="blog_inner">
    <div class="blog_title">
        <h2 itemprop="name"><a href="blog/2020/04/23/180000.html">Instagrammer Recommend🌿第4弾</a></h2>
    </div>
    <div class="blog_publish">
        <p class="publish_date" itemprop="dateModified" content="2020/04/23 18:00">2020/04/23 18:00</p>
    </div>
    <div class="blog_head_image">
        <a href="blog/2020/04/23/180000.html"><img
                src="../client_html/img/884b21a2146d3759a5d7f15628e0b79d.jpg"
                alt="Instagrammer Recommend🌿第4弾"></a>
    </div>
    <div class="blog_contents">
        <div class="blog_body" itemprop="description">
            <p class="text">
                こんにちはBEEPスタッフひらいです🌿久しぶりにブログを書かせて頂きます✋🏻本日も前回に引き続きインスタグラマーさんオススメのBEEPアイテム紹介です🎉第4弾は韓国好き女子がドストライクであろうかずきさん
                (&nbs...</p>
        </div>
        <div class="read_more">
            <a href="blog/2020/04/23/180000.html">Read more</a>
        </div>
    </div>
</div>
<div class="blog_inner">
    <div class="blog_title">
        <h2 itemprop="name"><a href="blog/2020/04/12/170000.html">Instagrammer Recommend💫第3弾</a></h2>
    </div>
    <div class="blog_publish">
        <p class="publish_date" itemprop="dateModified" content="2020/04/12 17:00">2020/04/12 17:00</p>
    </div>
    <div class="blog_head_image">
        <a href="blog/2020/04/12/170000.html"><img
                src="../client_html/img/a04578eea76518e5d24464122a43b4ea.jpg"
                alt="Instagrammer Recommend💫第3弾"></a>
    </div>
    <div class="blog_contents">
        <div class="blog_body" itemprop="description">
            <p class="text">こんにちは♪nonakaです🌟昨年以来の超久しぶり！Instagramer recommendです👍Instagramer
                recommend第3弾はにたまごさん（＠__nitamago__さん）のBEEPオススメアイテム7点ご紹介します👏💕今回もrecommendアイテムで...</p>
        </div>
        <div class="read_more">
            <a href="blog/2020/04/12/170000.html">Read more</a>
        </div>
    </div>
</div>
<div class="blog_inner">
    <div class="blog_title">
        <h2 itemprop="name"><a href="blog/2020/03/21/120000.html">【男子必見】整えるメンズメイクとは</a></h2>
    </div>
    <div class="blog_publish">
        <p class="publish_date" itemprop="dateModified" content="2020/03/21 12:00">2020/03/21 12:00</p>
    </div>
    <div class="blog_head_image">
        <a href="blog/2020/03/21/120000.html"><img
                src="../client_html/img/c3139e61e3389318e528848c629039f6.png"
                alt="【男子必見】整えるメンズメイクとは"></a>
    </div>
    <div class="blog_contents">
        <div class="blog_body" itemprop="description">
            <p class="text">
                こんにちはBEEPスタッフひらいです🌙突然ですが皆さんに質問です男性がメイクをしていたらどう感じますか？美容大国韓国では男性でも美容に関心が多くありコスメモデルが男性っということも日常的✨そんな中、日本...
            </p>
        </div>
        <div class="read_more">
            <a href="blog/2020/03/21/120000.html">Read more</a>
        </div>
    </div>
</div>
<div class="blog_inner">
    <div class="blog_title">
        <h2 itemprop="name"><a href="blog/2020/03/05/171836.html">韓国人から学ぶおしゃれ春コーデ術🌟 〜メンズ編〜</a></h2>
    </div>
    <div class="blog_publish">
        <p class="publish_date" itemprop="dateModified" content="2020/03/05 17:18">2020/03/05 17:18</p>
    </div>
    <div class="blog_head_image">
        <a href="blog/2020/03/05/171836.html"><img
                src="../client_html/img/22f8ab3b1c49fbfc62952715bb6140a6.png"
                alt="韓国人から学ぶおしゃれ春コーデ術🌟 〜メンズ編〜"></a>
    </div>
    <div class="blog_contents">
        <div class="blog_body" itemprop="description">
            <p class="text">
                こんにちはBEEPスタッフのひらいです🌹久々のブログ登場です✋🏻呑気に変わらぬ日々を過ごしていたらマスクのために行列ができていて驚いた今日この頃でございます💭今回のブログはひらいお気に入りの韓国コーデから...
            </p>
        </div>
        <div class="read_more">
            <a href="blog/2020/03/05/171836.html">Read more</a>
        </div>
    </div>
</div>
<div class="blog_inner">
    <div class="blog_title">
        <h2 itemprop="name"><a href="blog/2020/02/17/082848.html">春見え👀🌸トータルコーデ🌸</a></h2>
    </div>
    <div class="blog_publish">
        <p class="publish_date" itemprop="dateModified" content="2020/02/27 17:10">2020/02/27 17:10</p>
    </div>
    <div class="blog_head_image">
        <a href="blog/2020/02/17/082848.html"><img
                src="../client_html/img/1bf1dc6a8760790fb55d5c1c48b448cb.png"
                alt="春見え👀🌸トータルコーデ🌸"></a>
    </div>
    <div class="blog_contents">
        <div class="blog_body" itemprop="description">
            <p class="text">こんにちは、nonakaです♪まずはじめにお知らせです📣2/27-3/15で、BEEP
                Instagramアカウントにて皆様のBEEPアイテムを着用した「春コーデ」のご投稿を募集します🌸投稿が選ばれるとBEEPから素敵なプレゼントが当た...</p>
        </div>
        <div class="read_more">
            <a href="blog/2020/02/17/082848.html">Read more</a>
        </div>
    </div>
</div>
<div class="blog_inner">
    <div class="blog_title">
        <h2 itemprop="name"><a href="blog/2020/02/08/170000.html">SALE中！！！まだまだ寒い冬にBEEPのボアアウターはいかが？❄️</a>
        </h2>
    </div>
    <div class="blog_publish">
        <p class="publish_date" itemprop="dateModified" content="2020/02/08 17:00">2020/02/08 17:00</p>
    </div>
    <div class="blog_head_image">
        <a href="blog/2020/02/08/170000.html"><img
                src="../client_html/img/7487fdb815a976530fc53277ab530529.png"
                alt="SALE中！！！まだまだ寒い冬にBEEPのボアアウターはいかが？❄️"></a>
    </div>
    <div class="blog_contents">
        <div class="blog_body" itemprop="description">
            <p class="text">こんにちはBEEPスタッフのひらいです🐶今回は、ただいま開催中のBoa Item
                セール商品を紹介していきます✌️✌️まだまだ寒い2月のうちにもこもこboaをお得にゲットしませんか？❄️今回のセール商品は6商品🌟🌟🌟実は今回...</p>
        </div>
        <div class="read_more">
            <a href="blog/2020/02/08/170000.html">Read more</a>
        </div>
    </div>
</div>
<div class="blog_inner">
    <div class="blog_title">
        <h2 itemprop="name"><a href="blog/2020/01/24/161505.html">脱！着こなしのマンネリ😤💪🏾</a></h2>
    </div>
    <div class="blog_publish">
        <p class="publish_date" itemprop="dateModified" content="2020/01/29 17:07">2020/01/29 17:07</p>
    </div>
    <div class="blog_head_image">
        <a href="blog/2020/01/24/161505.html"><img
                src="../client_html/img/54d0a857833512d60d88bd89f177d1a9.png"
                alt="脱！着こなしのマンネリ😤💪🏾"></a>
    </div>
    <div class="blog_contents">
        <div class="blog_body" itemprop="description">
            <p class="text">
                こんにちはnonakaです♪突然ですが、みなさんはよく着るアイテムや好きな系統の服装はありますか？🌹その日の気分で系統が変わったりなかなか定まらないなーという方もいるのでは……？私がそうです笑そんな方のなか...
            </p>
        </div>
        <div class="read_more">
            <a href="blog/2020/01/24/161505.html">Read more</a>
        </div>
    </div>
</div>
<div class="blog_inner">
    <div class="blog_title">
        <h2 itemprop="name"><a href="blog/2020/01/22/021600.html">今すぐ使える？2020SSトレンド着こなし術 🤔👕</a></h2>
    </div>
    <div class="blog_publish">
        <p class="publish_date" itemprop="dateModified" content="2020/01/23 17:00">2020/01/23 17:00</p>
    </div>
    <div class="blog_head_image">
        <a href="blog/2020/01/22/021600.html"><img
                src="../client_html/img/35e80c7568e0a685b723f631d79e45c0.png"
                alt="今すぐ使える？2020SSトレンド着こなし術 🤔👕"></a>
    </div>
    <div class="blog_contents">
        <div class="blog_body" itemprop="description">
            <p class="text">
                こんにちはBEEPスタッフひらいです🌹今回は2020SSのトレンドコーデをBEEPアイテムで紹介していきます🤔そもそもSSとはご存知ですか？よくみるSS/AWとはファッション業界で使われる言葉SS
                : spring summerAW : autum...</p>
        </div>
        <div class="read_more">
            <a href="blog/2020/01/22/021600.html">Read more</a>
        </div>
    </div>
</div>
<div class="blog_inner">
    <div class="blog_title">
        <h2 itemprop="name"><a href="blog/2020/01/10/183141.html">身長別！ロングコート🧥 おすすめの着こなし方✨</a></h2>
    </div>
    <div class="blog_publish">
        <p class="publish_date" itemprop="dateModified" content="2020/01/16 16:59">2020/01/16 16:59</p>
    </div>
    <div class="blog_head_image">
        <a href="blog/2020/01/10/183141.html"><img
                src="../client_html/img/ef1f63e732bb7f8e97bdff0436ffd5ce.png"
                alt="身長別！ロングコート🧥 おすすめの着こなし方✨"></a>
    </div>
    <div class="blog_contents">
        <div class="blog_body" itemprop="description">
            <p class="text">
                こんにちは！はじめまして、BEEPスタッフのnonakaです😎さらにファッションを楽しんでいただけるようブログ執筆がんばりますので、よろしくお願いします🤲ではさっそく！ロングコートの着こなし方を身長別で解説し...
            </p>
        </div>
        <div class="read_more">
            <a href="blog/2020/01/10/183141.html">Read more</a>
        </div>
    </div>
</div>
<div class="paginate-wrp clearfix">
    <ul class="paginate">
        <li class="current"><a>1</a></li>
        <li><a href="blog4658.html?page=2">2</a></li>
        <li><a href="blog9ba9.html?page=3">3</a></li>
        <li><a href="blogfdb0.html?page=4">4</a></li>
        <li><a href="blogaf4d.html?page=5">5</a></li>
        <li class="next"><a href="blog4658.html?page=2" rel="next">Next &gt;&gt;</a></li>
    </ul>
</div>
</div>
</div>

</div>

<!--========================================-->
<!--notes ここから/-->
<!--========================================-->


<input id="base_url" type="hidden" value="index.html" />

<script>
$(function () {
$(".track_outbound").on("click", function (e) {
$.get("/trackings/track_outbound", {
    "from_url": location.href,
    "to_url": $(this).attr("href"),
    "user_agent": navigator.userAgent
});
return true;
});
});
</script>

<input id="x_phrases" type="hidden" data-lang="ja"
value="{&quot;apps&quot;:{&quot;message&quot;:{&quot;send&quot;:&quot;Send&quot;,&quot;placeholder&quot;:&quot;Type a message here&quot;,&quot;disabled&quot;:&quot;Do not accept messages.&quot;,&quot;maximum_length&quot;:&quot;Please enter your message in 500 characters or less.&quot;,&quot;sending&quot;:&quot;Sending...&quot;,&quot;failed&quot;:&quot;Failed to send a message&quot;,&quot;fatal_error&quot;:&quot;Communication error has occurred,Please reload the page.&quot;,&quot;receive_notifications_title&quot;:&quot;Recieve notifications&quot;,&quot;receive_notifications_body&quot;:&quot;You can receive notifications when shop responded to your messages.&quot;,&quot;receive_notifications_mail&quot;:&quot;E-mail&quot;,&quot;receive_notifications_sms&quot;:&quot;SMS&quot;,&quot;receive_notifications_done&quot;:&quot;Submit&quot;,&quot;complete_notifications_setting_title&quot;:&quot;Completed!&quot;,&quot;complete_notifications_setting_body&quot;:&quot;Will send notifications when shop responded to your message.&quot;}}}"></input>
<script type="text/javascript" src="asset/shop/BASEshop-c3c1f9f98ce1110964f260e5.js?1640247167"></script>
@endsection