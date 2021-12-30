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




<div id="privacy">
<h2>Privacy Policy</h2>

<p class="privacy_intro">
The store（or “we”, “us”, or “our”, as the case may be) recognizes the importance of your personal
information, and complies with the Act Concerning Protection of Personal Information (hereinafter
referred to as “Act”) and properly treats and protects your personal information in accordance with this
Privacy Policy (hereinafter referred to as “Policy”).<br>
</p>
<dl>
<dt>1. Definition of personal information</dt>
<dd>
    As used in this Policy, “personal information” shall mean personal information defined pursuant to
    Article 2.1 of the Act, meaning information pertinent to existing individual, which can personally
    identify a specified individual by its name, birth date, or other description contained in such
    information (including those which can easily collate other information to personally identify a
    specified individual), or those containing personal identification code. </dd>
<dt>2. Purpose of personal information</dt>
<dd>
    The store shall use your personal information to: <ul>
        <li>(1) provide our services;</li>
        <li>(2) give guidance and respond to inquiries in connection with our services;</li>
        <li>(3) give guidance relating to our goods and services;</li>
        <li>(4) cope with a violation of our rules and regulations or the terms and conditions, or
            polices (hereinafter referred to as “Rules”) in connection with our services;</li>
        <li>(5) notify you of any change in Rules relating to our services;</li>
        <li>(6) facilitate improvement of our services and development of new services;</li>
        <li>(7) generate data processed for statistical purposes and made anonymous, which cannot be
            personally identifiable in connection with our services; and</li>
        <li>(8) accomplish purposes incidental to purposes as set forth above.</li>
    </ul>
</dd>
<dt>3. Change of purposes of use of personal information</dt>
<dd>
    The store reserves the right to change the purposes of use of personal information for as long as it
    will continue to remain relevant, and notify you of, or make it public such change. </dd>
<dt>4. Restriction on use of personal information</dt>
<dd>
    Unless otherwise permitted by the Act and other relevant applicable laws and regulations, we shall
    not use your personal information except as required to accomplish the purposes of use without your
    consent, unless: <ul>
        <li>(1) required by the applicable laws and regulations;</li>
        <li>(2) it is necessary to protect a person’s life, body, or property, and it is difficult to
            obtain your consent;</li>
        <li>(3) it is particularly necessary to improve public health and facilitate sound education for
            children, and it is difficult to obtain your consent; or</li>
        <li>(4) it is necessary for us to cooperate with state or local government or its agency in
            carrying out their statutory duties and functions, and it is detrimental to carry out of
            them if your consent needs to be obtained.</li>
    </ul>
</dd>
<dt>5. Proper collection of personal information</dt>
<dd>
    We shall collect personal information, and shall not collect personal information by false or
    otherwise illicit means. </dd>
<dt>6. Security of personal information</dt>
<dd>
    The store shall carry out necessary and proper supervision over its employees, in order to secure
    your personal information against risk of loss, destruction, alteration, and leaking of your
    personal information. If we subcontract, wholly or partially, treatment of your personal
    information, we shall carry out necessary and proper supervision over a subcontractor. </dd>
<dt>7. Provision to third parties</dt>
<dd>
    Unless otherwise permitted by the Act and other relevant applicable laws and regulations, we shall
    not provide to third parties your personal information without your prior consent, except for cases
    where: <ul>
        <li>(1) we provide personal information as a result of subcontracting, wholly or partially,
            treatment of your personal information to the extent necessary to accomplish the purposes of
            use of personal information;</li>
        <li>(2) your personal information is provided by way of merger or amalgamation, or other events
            of business transfer; and</li>
        <li>(3) your personal information is shared with third parties in accordance with the Act.</li>
    </ul>
</dd>
<dt>8. Disclosure of personal information</dt>
<dd>
    If we are required by you to disclose your personal information pursuant to the Act, we shall
    promptly disclose it to you, after identifying that such request has been submitted by you (if such
    information does not exist, we shall notify to that effect.), unless otherwise we are not obligated
    to do so under the Act or other relevant laws and regulations. </dd>
<dt>9. Correction of personal information</dt>
<dd>
    If we are required by you to make a correction, addition, or deletion (hereinafter referred to as
    “Correction”) of your personal information by reason that such information is untrue, we shall
    promptly carry out investigations to the extent necessary to accomplish the purposes of use thereof
    after identifying that such request has been submitted by you, and make a Correction based on the
    results thereof, and you shall be notified thereof (or we shall notify you if we shall not make any
    Correction), unless otherwise we are not obligated to do so under the Act or other relevant laws and
    regulations. </dd>
<dt>10. Suspension of use of your personal information</dt>
<dd>
    If we are required by to you to suspend use of or delete (hereinafter referred to as “Suspend”) your
    personal information by reason that such information is treated for any purpose other than those
    which are made public, or is obtained or collected by false or otherwise illicit means, and we found
    that such request is reasonably acceptable, we shall promptly Suspend use of your personal
    information after identifying that such request has been submitted by you, you shall be notified
    thereof, unless otherwise we are not obligated to do so under the Act or other relevant laws and
    regulations. </dd>
<dt>11. Use of Cookie or other technologies</dt>
<dd>
    <ul>
        <li>Cookie or other similar technologies may be used for our services. These technologies shall
            be useful to grasp the status of how our services are used to make them better. If you do
            not want the benefits of Cookies, you may be able to opt-out by changing the configuration
            of your web browser, in which case you may not be able to use any part of our services.</li>
        <li>（２） 当ショップは、当ショップサービスが提供するサービスの利用状況等を調査・分析するため、本サービス上に Google LCCが提供する Google
            アナリティクスを利用しています。Googleアナリティクスでデータが収集、処理される仕組みその他Googleアナリティクスの詳しい情報につきましては、同社のサイトをご覧ください。<br>
            Google アナリティクス 利用規約：<br>
            <a href="https://www.google.com/analytics/terms/jp.html"
                target="_blank">https://www.google.com/analytics/terms/jp.html</a><br>
            お客様が Google パートナーのサイトやアプリを使用する際の Google によるデータ使用：<br>
            <a href="https://www.google.com/intl/ja/policies/privacy/partners/"
                target="_blank">https://www.google.com/intl/ja/policies/privacy/partners/</a><br>
            Google プライバシーポリシー：<br>
            <a href="http://www.google.com/intl/ja/policies/privacy/"
                target="_blank">http://www.google.com/intl/ja/policies/privacy/</a><br>
            <br>
            なお、お客様はご自身のデータが Google アナリティクスで使用されることを望まない場合は、Google 社の提供する Google アナリティクス オプトアウト
            アドオンをご利用ください。<br>
            <br>
            Google アナリティクス オプトアウト アドオン：<br>
            <a href="https://tools.google.com/dlpage/gaoptout"
                target="_blank">https://tools.google.com/dlpage/gaoptout</a></li>
        <li>（３） 本サービスでは「Google Analyticsの広告向けの機能」を有効にしており、下記の機能を利用し、広告やサイト改善のためDoubleClick
            CookieなどのサードパーティCookieを利用しています。<br>
            <br>
            Google Analyticsリマーケティング<br>
            Google Analyticsのユーザー属性レポートとユーザー属性レポートとインタレスト レポート<br>
            <br>
            これにより、本サービスではGoogle
            AnalyticsのCookieを利用して、お客様の年齢・性別・閲覧履歴・本サービスに関する関心の傾向をおおよそ把握するための分析が可能となっております。<br>
            <br>
            「Google Analyticsの広告向けの機能」を使用されることを望まない場合は、設定によってトラッキングを無効にすることが可能です。Google Analytics オプトアウト
            アドオンをブラウザにインストールされると無効にすることができます。</li>
    </ul>
</dd>
<dt>12. Inquiries</dt>
<dd>
    If you have request for disclosure, opinion, question, complaint, or other inquiries about treatment
    of your personal information, please inform us at our Information Desk as specified in “Notation
    Based on the Specified Commercial Transaction Act” herein or make an inquiry by filling up
    an Inquiry Form contained in our store page.<br>
</dd>
<dt>13. Continuous efforts</dt>
<dd>
    We shall review the status of operation how your personal information is being treated on a regular
    basis, and use our best efforts to make them better, and modify this Privacy Policy from time to
    time. </dd>
</dl>
</div>



</div>


@endsection