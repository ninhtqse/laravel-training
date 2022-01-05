@extends('client.layouts.master')
@section('content')
    <nav id="gnavi">
        <div id="gnaviCol" class="clearfix">
            <ul class="row">
                <li class="column"><a class="mainHeaderNavColor" href="../index.html">HOME</a></li>
                <li class="column"><a class="mainHeaderNavColor" href="../about.html">CAUTION</a></li>


                <li class="column">
                    <div id="category-menu">
                        <span class="mainHeaderNavColor">CATEGORY</span>
                        <div class="category-list">
                            <ul id="appsItemCategoryTag">
                                <!-- 大カテゴリのループ -->
                                <li class="appsItemCategoryTag_child"><a href="1803790.html">Weekly
                                        Ranking</a>
                                </li>
                                <!-- 大カテゴリのループ -->
                                <li class="appsItemCategoryTag_child"><a href="3803574.html">Restock
                                        items</a>
                                </li>
                                <!-- 大カテゴリのループ -->
                                <li class="appsItemCategoryTag_child"><a href="1991343.html">Category
                                        Best10</a>
                                </li>
                                <!-- 大カテゴリのループ -->
                                <li class="appsItemCategoryTag_child"><a href="1764275.html">Today
                                        10%OFF</a>
                                </li>
                                <!-- 大カテゴリのループ -->
                                <li class="appsItemCategoryTag_child"><a href="2614009.html">FAST</a>
                                </li>
                                <!-- 大カテゴリのループ -->
                                <li class="appsItemCategoryTag_child"><a href="1623874.html">Next HIT</a>
                                </li>
                                <!-- 大カテゴリのループ -->
                                <li class="appsItemCategoryTag_child"><a href="1612755.html">New
                                        Arrivals</a>
                                </li>
                                <!-- 大カテゴリのループ -->
                                <li class="appsItemCategoryTag_child"><a href="1463951.html">MENS</a>
                                </li>
                                <!-- 大カテゴリのループ -->
                                <li class="appsItemCategoryTag_child"><a href="1463950.html">LADIES</a>
                                </li>
                                <!-- 大カテゴリのループ -->
                                <li class="appsItemCategoryTag_child"><a href="1150353.html">Tops</a>
                                </li>
                                <!-- 大カテゴリのループ -->
                                <li class="appsItemCategoryTag_child"><a href="1150354.html">Outer</a>
                                </li>
                                <!-- 大カテゴリのループ -->
                                <li class="appsItemCategoryTag_child"><a href="1150355.html">Bottoms</a>
                                </li>
                                <!-- 大カテゴリのループ -->
                                <li class="appsItemCategoryTag_child"><a href="1150356.html">Set-up</a>
                                </li>
                                <!-- 大カテゴリのループ -->
                                <li class="appsItemCategoryTag_child"><a href="1459751.html">Dress</a>
                                </li>
                                <!-- 大カテゴリのループ -->
                                <li class="appsItemCategoryTag_child"><a href="1150357.html">Bag</a>
                                </li>
                                <!-- 大カテゴリのループ -->
                                <li class="appsItemCategoryTag_child"><a href="1991271.html">Shoes</a>
                                </li>
                                <!-- 大カテゴリのループ -->
                                <li class="appsItemCategoryTag_child"><a href="1150358.html">Accessory</a>
                                </li>
                                <!-- 大カテゴリのループ -->
                                <li class="appsItemCategoryTag_child"><a href="1991280.html">Other</a>
                                </li>
                                <!-- 大カテゴリのループ -->
                                <li class="appsItemCategoryTag_child"><a href="3406564.html">Room-wear</a>
                                </li>
                                <!-- 大カテゴリのループ -->
                                <li class="appsItemCategoryTag_child"><a href="1745897.html">~¥5,000</a>
                                </li>
                                <!-- 大カテゴリのループ -->
                                <li class="appsItemCategoryTag_child"><a href="1745898.html">¥5,000~</a>
                                </li>
                                <!-- 大カテゴリのループ -->
                                <li class="appsItemCategoryTag_child"><a href="1991260.html">FASHIONISTA ×
                                        BEEP</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>

                <li class="column"><a class="mainHeaderNavColor inline" href="#Faq_content">Q&A</a></li>
                <li class="column"><a class="mainHeaderNavColor" href="../blog.html">BLOG</a></li>
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
        <!--products ここから/-->
        <!--========================================-->

        <section id="products">



            <div id="categoryList">
                <!-- カテゴリ名をページの見出しとして表示 -->
                <h3 class="categoryTitle01">Tops</h3>
                <!-- 子カテゴリの一覧を表示 -->
                <ul>
                    <li><a href="1614111.html">半袖</a></li>
                    <li><a href="1691358.html">長袖</a></li>
                    <li><a href="1614134.html">シャツ</a></li>
                    <li><a href="1614121.html">ブラウス</a></li>
                    <li><a href="1614126.html">パーカー/スウェット</a></li>
                    <li><a href="1614117.html">ニット</a></li>
                    <li><a href="1974029.html">ノースリーブ</a></li>
                </ul>
            </div>


            <ul class="product_list row">
                <li class="column">
                    <a href="../items/38332442.html">
                        <div class="image_container">

                            <p class="pht fade">
                                <img src="../client_html/img/f29cf38a1b19e7e5ce4b9e59850efdb9c2c0.jpg?imformat=generic&amp;q=90&amp;im=Resize,width=500,type=normal"
                                     alt="プレーンハイネックスウェット BL7242" title="プレーンハイネックスウェット BL7242" class="image-resize" />
                            </p>
                        </div>
                        <div class="item-detail">
                            <h2 class="show_on_hover">プレーンハイネックスウェット BL7242</h2>
                            <!---セール価格設定
                            <div class="price show_on_hover">¥4,700</div>-->
                            <div class="price">¥4,700</div>
                            <!---/セール価格設定-->





                        </div>
                    </a>
                </li>
                <li class="column">
                    <a href="../items/53735318.html">
                        <div class="image_container">

                            <p class="pht fade">
                                <img src="../client_html/img/5c1cc72ac6c46716fbd2cd0690b92b60c2c0.jpg?imformat=generic&amp;q=90&amp;im=Resize,width=500,type=normal"
                                     alt="インパクトプリントスウェット BL9611" title="インパクトプリントスウェット BL9611" class="image-resize" />
                            </p>
                        </div>
                        <div class="item-detail">
                            <h2 class="show_on_hover">インパクトプリントスウェット BL9611</h2>
                            <!---セール価格設定
                            <div class="price show_on_hover">¥4,400</div>-->
                            <div class="price">¥4,400</div>
                            <!---/セール価格設定-->





                        </div>
                    </a>
                </li>
                <li class="column">
                    <a href="../items/36607130.html">
                        <div class="image_container">

                            <p class="pht fade">
                                <img src="../client_html/img/6160baa860d66dd9a6f25cb23b229581c2c0.jpg?imformat=generic&amp;q=90&amp;im=Resize,width=500,type=normal"
                                     alt="【FAST】クルーネックチェックプルオーバー WBL7055" title="【FAST】クルーネックチェックプルオーバー WBL7055"
                                     class="image-resize" />
                            </p>
                        </div>
                        <div class="item-detail">
                            <h2 class="show_on_hover">【FAST】クルーネックチェックプルオーバー WBL7055</h2>
                            <!---セール価格設定
                            <div class="price show_on_hover">¥4,600</div>-->
                            <div class="price">¥4,600</div>
                            <!---/セール価格設定-->





                        </div>
                    </a>
                </li>
                <li class="column">
                    <a href="../items/55287108.html">
                        <div class="image_container">

                            <p class="pht fade">
                                <img src="../client_html/img/da4f7e8c8cdb7a4a7a146c2194710d2dc2c0.jpg?imformat=generic&amp;q=90&amp;im=Resize,width=500,type=normal"
                                     alt="アーガイルショートニット RD9899" title="アーガイルショートニット RD9899" class="image-resize" />
                            </p>
                        </div>
                        <div class="item-detail">
                            <h2 class="show_on_hover">アーガイルショートニット RD9899</h2>
                            <!---セール価格設定
                            <div class="price show_on_hover">¥4,400</div>-->
                            <div class="price">¥4,400</div>
                            <!---/セール価格設定-->





                        </div>
                    </a>
                </li>
                <li class="column">
                    <a href="../items/55171852.html">
                        <div class="image_container">

                            <p class="pht fade">
                                <img src="../client_html/img/686a03f873f7732913ae545c7d5e2db7c2c0.jpg?imformat=generic&amp;q=90&amp;im=Resize,width=500,type=normal"
                                     alt="ユニセックスタイダイファーパーカー RD9871" title="ユニセックスタイダイファーパーカー RD9871"
                                     class="image-resize" />
                            </p>
                        </div>
                        <div class="item-detail">
                            <h2 class="show_on_hover">ユニセックスタイダイファーパーカー RD9871</h2>
                            <!---セール価格設定
                            <div class="price show_on_hover">¥4,400</div>-->
                            <div class="price">¥4,400</div>
                            <!---/セール価格設定-->





                        </div>
                    </a>
                </li>
                <li class="column">
                    <a href="../items/54321722.html">
                        <div class="image_container">

                            <p class="pht fade">
                                <img src="../client_html/img/e3d4251c790f1d7ec0aa0f37518bda46c2c0.jpg?imformat=generic&amp;q=90&amp;im=Resize,width=500,type=normal"
                                     alt="ゴシックロゴニット BL9720" title="ゴシックロゴニット BL9720" class="image-resize" />
                            </p>
                        </div>
                        <div class="item-detail">
                            <h2 class="show_on_hover">ゴシックロゴニット BL9720</h2>
                            <!---セール価格設定
                            <div class="price show_on_hover">¥5,500</div>-->
                            <div class="price">¥5,500</div>
                            <!---/セール価格設定-->





                        </div>
                    </a>
                </li>
                <li class="column">
                    <a href="../items/40909130.html">
                        <div class="image_container">

                            <p class="pht fade">
                                <img src="../client_html/img/4d57195e2bd6d32012ce206fa204485fc2c0.jpg?imformat=generic&amp;q=90&amp;im=Resize,width=500,type=normal"
                                     alt="スウェットジップアップジャケット BL7842" title="スウェットジップアップジャケット BL7842"
                                     class="image-resize" />
                            </p>
                        </div>
                        <div class="item-detail">
                            <h2 class="show_on_hover">スウェットジップアップジャケット BL7842</h2>
                            <!---セール価格設定
                            <div class="price show_on_hover">¥5,900</div>-->
                            <div class="price">¥5,900</div>
                            <!---/セール価格設定-->





                        </div>
                    </a>
                </li>
                <li class="column">
                    <a href="../items/36099327.html">
                        <div class="image_container">

                            <p class="pht fade">
                                <img src="../client_html/img/b1060b515b1b4c4f7ecf97aa07a511f5c2c0.jpg?imformat=generic&amp;q=90&amp;im=Resize,width=500,type=normal"
                                     alt="グラフィックセーター RD6932" title="グラフィックセーター RD6932" class="image-resize" />
                            </p>
                        </div>
                        <div class="item-detail">
                            <h2 class="show_on_hover">グラフィックセーター RD6932</h2>
                            <!---セール価格設定
                            <div class="price show_on_hover">¥5,900</div>-->
                            <div class="price">¥5,900</div>
                            <!---/セール価格設定-->





                        </div>
                    </a>
                </li>
                <li class="column">
                    <a href="../items/56497262.html">
                        <div class="image_container">

                            <p class="pht fade">
                                <img src="../client_html/img/5166eaabbbacc8a95bc470fdb5c53781c2c0.jpg?imformat=generic&amp;q=90&amp;im=Resize,width=500,type=normal"
                                     alt="ユニセックスフリースプルオーバー RD10079" title="ユニセックスフリースプルオーバー RD10079"
                                     class="image-resize" />
                            </p>
                        </div>
                        <div class="item-detail">
                            <h2 class="show_on_hover">ユニセックスフリースプルオーバー RD10079</h2>
                            <!---セール価格設定
                            <div class="price show_on_hover">¥4,300</div>-->
                            <div class="price">¥4,300</div>
                            <!---/セール価格設定-->





                        </div>
                    </a>
                </li>
                <li class="column">
                    <a href="../items/54047872.html">
                        <div class="image_container">

                            <p class="pht fade">
                                <img src="../client_html/img/ed636133b24620fd903113ca2759e9e3c2c0.jpg?imformat=generic&amp;q=90&amp;im=Resize,width=500,type=normal"
                                     alt="ユニセックスゴシックレタードニット RD9702" title="ユニセックスゴシックレタードニット RD9702"
                                     class="image-resize" />
                            </p>
                        </div>
                        <div class="item-detail">
                            <h2 class="show_on_hover">ユニセックスゴシックレタードニット RD9702</h2>
                            <!---セール価格設定
                            <div class="price show_on_hover">¥4,000</div>-->
                            <div class="price">¥4,000</div>
                            <!---/セール価格設定-->





                        </div>
                    </a>
                </li>
                <li class="column">
                    <a href="../items/56244514.html">
                        <div class="image_container">

                            <p class="pht fade">
                                <img src="../client_html/img/e4ad09553dbf769df52edc128fc0ce3ac2c0.jpg?imformat=generic&amp;q=90&amp;im=Resize,width=500,type=normal"
                                     alt="ユニセックスタートルネックニット RD10030" title="ユニセックスタートルネックニット RD10030"
                                     class="image-resize" />
                            </p>
                        </div>
                        <div class="item-detail">
                            <h2 class="show_on_hover">ユニセックスタートルネックニット RD10030</h2>
                            <!---セール価格設定
                            <div class="price show_on_hover">¥4,100</div>-->
                            <div class="price">¥4,100</div>
                            <!---/セール価格設定-->





                        </div>
                    </a>
                </li>
                <li class="column">
                    <a href="../items/43205155.html">
                        <div class="image_container">

                            <p class="pht fade">
                                <img src="../client_html/img/491111212bbd89dd849d0f835c74dde3c2c0.jpg?imformat=generic&amp;q=90&amp;im=Resize,width=500,type=normal"
                                     alt="ユニセックスワンポイントロゴパーカー BL8255" title="ユニセックスワンポイントロゴパーカー BL8255"
                                     class="image-resize" />
                            </p>
                        </div>
                        <div class="item-detail">
                            <h2 class="show_on_hover">ユニセックスワンポイントロゴパーカー BL8255</h2>
                            <!---セール価格設定
                            <div class="price show_on_hover">¥4,200</div>-->
                            <div class="price">¥4,200</div>
                            <!---/セール価格設定-->





                        </div>
                    </a>
                </li>
                <li class="column">
                    <a href="../items/56652353.html">
                        <div class="image_container">

                            <p class="pht fade">
                                <img src="../client_html/img/a2239ac3e654ae5af61a267318f20e94c2c0.jpg?imformat=generic&amp;q=90&amp;im=Resize,width=500,type=normal"
                                     alt="ベーシックハイネックカットソー BL10330" title="ベーシックハイネックカットソー BL10330"
                                     class="image-resize" />
                            </p>
                        </div>
                        <div class="item-detail">
                            <h2 class="show_on_hover">ベーシックハイネックカットソー BL10330</h2>
                            <!---セール価格設定
                            <div class="price show_on_hover">¥5,100</div>-->
                            <div class="price">¥5,100</div>
                            <!---/セール価格設定-->





                        </div>
                    </a>
                </li>
                <li class="column">
                    <a href="../items/51484256.html">
                        <div class="image_container">

                            <p class="pht fade">
                                <img src="../client_html/img/383476424b94cbd5c39b63fa4ce32dbdc2c0.jpg?imformat=generic&amp;q=90&amp;im=Resize,width=500,type=normal"
                                     alt="スリットゴシックロゴパーカー BL9273" title="スリットゴシックロゴパーカー BL9273" class="image-resize" />
                            </p>
                        </div>
                        <div class="item-detail">
                            <h2 class="show_on_hover">スリットゴシックロゴパーカー BL9273</h2>
                            <!---セール価格設定
                            <div class="price show_on_hover">¥5,500</div>-->
                            <div class="price">¥5,500</div>
                            <!---/セール価格設定-->





                        </div>
                    </a>
                </li>
                <li class="column">
                    <a href="../items/35166352.html">
                        <div class="image_container">

                            <p class="pht fade">
                                <img src="../client_html/img/45292213460781a85cd2465bff384317c2c0.jpg?imformat=generic&amp;q=90&amp;im=Resize,width=500,type=normal"
                                     alt="タートルネックルーズトップス RD6761" title="タートルネックルーズトップス RD6761" class="image-resize" />
                            </p>
                        </div>
                        <div class="item-detail">
                            <h2 class="show_on_hover">タートルネックルーズトップス RD6761</h2>
                            <!---セール価格設定
                            <div class="price show_on_hover">¥3,700</div>-->
                            <div class="price">¥3,700</div>
                            <!---/セール価格設定-->





                        </div>
                    </a>
                </li>
                <li class="column">
                    <a href="../items/56938221.html">
                        <div class="image_container">

                            <p class="pht fade">
                                <img src="../client_html/img/9e2f00f52e2cebdefd19fec1ccd12c9cc2c0.jpg?imformat=generic&amp;q=90&amp;im=Resize,width=500,type=normal"
                                     alt="デコルテラップパターンニット RD10399" title="デコルテラップパターンニット RD10399" class="image-resize" />
                            </p>
                        </div>
                        <div class="item-detail">
                            <h2 class="show_on_hover">デコルテラップパターンニット RD10399</h2>
                            <!---セール価格設定
                            <div class="price show_on_hover">¥4,400</div>-->
                            <div class="price">¥4,400</div>
                            <!---/セール価格設定-->





                        </div>
                    </a>
                </li>
                <li class="column">
                    <a href="../items/56939658.html">
                        <div class="image_container">

                            <p class="pht fade">
                                <img src="../client_html/img/31a8083bc13c3aadcb086e6fc516806cc2c0.jpg?imformat=generic&amp;q=90&amp;im=Resize,width=500,type=normal"
                                     alt="フリルハイネックリブニット RD10402" title="フリルハイネックリブニット RD10402" class="image-resize" />
                            </p>
                        </div>
                        <div class="item-detail">
                            <h2 class="show_on_hover">フリルハイネックリブニット RD10402</h2>
                            <!---セール価格設定
                            <div class="price show_on_hover">¥4,200</div>-->
                            <div class="price">¥4,200</div>
                            <!---/セール価格設定-->





                        </div>
                    </a>
                </li>
                <li class="column">
                    <a href="../items/56913180.html">
                        <div class="image_container">

                            <p class="pht fade">
                                <img src="../client_html/img/dc1420148b79140631341e43fbe51e7fc2c0.jpg?imformat=generic&amp;q=90&amp;im=Resize,width=500,type=normal"
                                     alt="ユニークパターンニット BL10342" title="ユニークパターンニット BL10342" class="image-resize" />
                            </p>
                        </div>
                        <div class="item-detail">
                            <h2 class="show_on_hover">ユニークパターンニット BL10342</h2>
                            <!---セール価格設定
                            <div class="price show_on_hover">¥5,900</div>-->
                            <div class="price">¥5,900</div>
                            <!---/セール価格設定-->





                        </div>
                    </a>
                </li>
                <li class="column">
                    <a href="../items/56914241.html">
                        <div class="image_container">

                            <p class="pht fade">
                                <img src="../client_html/img/5940656fae521c4e85a556ba27f66423c2c0.jpg?imformat=generic&amp;q=90&amp;im=Resize,width=500,type=normal"
                                     alt="ストリートロゴパーカー RD10379" title="ストリートロゴパーカー RD10379" class="image-resize" />
                            </p>
                        </div>
                        <div class="item-detail">
                            <h2 class="show_on_hover">ストリートロゴパーカー RD10379</h2>
                            <!---セール価格設定
                            <div class="price show_on_hover">¥4,200</div>-->
                            <div class="price">¥4,200</div>
                            <!---/セール価格設定-->





                        </div>
                    </a>
                </li>
                <li class="column">
                    <a href="../items/36267935.html">
                        <div class="image_container">

                            <p class="pht fade">
                                <img src="../client_html/img/c02a606f4e44c3b0f7771b305a581c0bc2c0.jpg?imformat=generic&amp;q=90&amp;im=Resize,width=500,type=normal"
                                     alt="タートルネックロゴニット BL6955" title="タートルネックロゴニット BL6955" class="image-resize" />
                            </p>
                        </div>
                        <div class="item-detail">
                            <h2 class="show_on_hover">タートルネックロゴニット BL6955</h2>
                            <!---セール価格設定
                            <div class="price show_on_hover">¥5,900</div>-->
                            <div class="price">¥5,900</div>
                            <!---/セール価格設定-->





                        </div>
                    </a>
                </li>
                <li class="column">
                    <a href="../items/56858006.html">
                        <div class="image_container">

                            <p class="pht fade">
                                <img src="../client_html/img/84bc11eb85f77f02034950169d26f7b2c2c0.jpg?imformat=generic&amp;q=90&amp;im=Resize,width=500,type=normal"
                                     alt="ユニセックスゼブラデザインニット RD10371" title="ユニセックスゼブラデザインニット RD10371"
                                     class="image-resize" />
                            </p>
                        </div>
                        <div class="item-detail">
                            <h2 class="show_on_hover">ユニセックスゼブラデザインニット RD10371</h2>
                            <!---セール価格設定
                            <div class="price show_on_hover">¥4,000</div>-->
                            <div class="price">¥4,000</div>
                            <!---/セール価格設定-->





                        </div>
                    </a>
                </li>
                <li class="column">
                    <a href="../items/55499692.html">
                        <div class="image_container">

                            <p class="pht fade">
                                <img src="../client_html/img/2ff93d854d534d2a223a0cad7accc38fc2c0.jpg?imformat=generic&amp;q=90&amp;im=Resize,width=500,type=normal"
                                     alt="ユニセックスダークスモークニット RD9918" title="ユニセックスダークスモークニット RD9918"
                                     class="image-resize" />
                            </p>
                        </div>
                        <div class="item-detail">
                            <h2 class="show_on_hover">ユニセックスダークスモークニット RD9918</h2>
                            <!---セール価格設定
                            <div class="price show_on_hover">¥4,000</div>-->
                            <div class="price">¥4,000</div>
                            <!---/セール価格設定-->





                        </div>
                    </a>
                </li>
                <li class="column">
                    <a href="../items/56864683.html">
                        <div class="image_container">

                            <p class="pht fade">
                                <img src="../client_html/img/c51b05e23e65a97d0678d785886dfe1bc2c0.jpg?imformat=generic&amp;q=90&amp;im=Resize,width=500,type=normal"
                                     alt="タートルネックスリットプルオーバー RD10376" title="タートルネックスリットプルオーバー RD10376"
                                     class="image-resize" />
                            </p>
                        </div>
                        <div class="item-detail">
                            <h2 class="show_on_hover">タートルネックスリットプルオーバー RD10376</h2>
                            <!---セール価格設定
                            <div class="price show_on_hover">¥3,800</div>-->
                            <div class="price">¥3,800</div>
                            <!---/セール価格設定-->





                        </div>
                    </a>
                </li>
                <li class="column">
                    <a href="../items/56875918.html">
                        <div class="image_container">

                            <p class="pht fade">
                                <img src="../client_html/img/c2a308ca002f69f682c07ff08e69c595c2c0.jpg?imformat=generic&amp;q=90&amp;im=Resize,width=500,type=normal"
                                     alt="アルファベットプリントスウェット RD10378" title="アルファベットプリントスウェット RD10378"
                                     class="image-resize" />
                            </p>
                        </div>
                        <div class="item-detail">
                            <h2 class="show_on_hover">アルファベットプリントスウェット RD10378</h2>
                            <!---セール価格設定
                            <div class="price show_on_hover">¥3,700</div>-->
                            <div class="price">¥3,700</div>
                            <!---/セール価格設定-->





                        </div>
                    </a>
                </li>
            </ul>
            <div id="loading" style="display: none;width: 100%;"><img src="../img/loading.gif"
                                                                      style="padding: 20px 0;width: 220px;" /></div>
            <p class="more_btn"><span><img src="../client_html/img/shop/btn_more.png"
                                           alt="view more"></span></p>
        </section>


        <script type="text/javascript">
            var process_flg = false;
            var end_flg = false;
            var v_max_page = $("#max_page").text();
            if (v_max_page == 1) {
                $(".more_btn").css('display', 'none');
            }
            //(window).bottom({proximity: 0.05});
            $(".more_btn").on('click', function () {
                if (process_flg == false && end_flg == false) {
                    var max_page = $("#max_page").text();
                    var next_page = $('#next_page').text();
                    if (eval(max_page) >= eval(next_page)) {
                        //$(".more_btn").css('display','none');
                        $.ajax({
                            url: "https://www.beepsheepshamp.com/load_items/categories/1150353/" + next_page +
                                "/my_theme_649/0",
                            dataType: 'html',
                            beforeSend: function () {
                                process_flg = true;
                                $('#loading').css('display', 'block');
                            },
                            success: function (data) {
                                $('#products ul.product_list').append(data);
                                next_page = eval(next_page) + 1;
                                $('#next_page').text(next_page);
                            },
                            complete: function () {
                                process_flg = false;
                                $('#loading').css('display', 'none');
                                if (eval(max_page) < eval(next_page)) {
                                    $('.more_btn').css('display', 'none');
                                }
                            }
                        });
                    } else {
                        end_flg = true;
                    }
                }
            });
        </script>

        <!--========================================-->
        <!--blogs ここから/-->
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
                    <p class="more_btn"><a href="../blog.html"><img
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
        <script src="../client_html/img/shop/slick.min.js"></script>
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
                    "1991260.html#products ul.product_list li:nth-child(1) a");
                $("#fashionistaCol .slider div:nth-child(2)").load(
                    "1991260.html#products ul.product_list li:nth-child(2) a");
                $("#fashionistaCol .slider div:nth-child(3)").load(
                    "1991260.html#products ul.product_list li:nth-child(3) a");
                $("#fashionistaCol .slider div:nth-child(4)").load(
                    "1991260.html#products ul.product_list li:nth-child(4) a");
                $("#fashionistaCol .slider div:nth-child(5)").load(
                    "1991260.html#products ul.product_list li:nth-child(5) a");
                $("#fashionistaCol .slider div:nth-child(6)").load(
                    "1991260.html#products ul.product_list li:nth-child(6) a");
                $("#fashionistaCol .slider div:nth-child(7)").load(
                    "1991260.html#products ul.product_list li:nth-child(7) a");
                $("#fashionistaCol .slider div:nth-child(8)").load(
                    "1991260.html#products ul.product_list li:nth-child(8) a");
            });
        </script>

        <div id="fashionista">
            <h2 class="ttl"><span><img
                        src="../client_html/img/shop/fashionista_ttl.png"
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
