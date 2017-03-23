<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>OHAKA.com</title>
    <!-- スタイルの初期化 -->
    <link rel="stylesheet" href="./view/html5reset-1.6.1.css">
    <!-- CSS -->
    <link rel="stylesheet" href="./view/style.css">
    <!-- jQuery library (served from Google) -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <!-- bxSlider Javascript file -->
    <script src="./js/jquery.bxslider/jquery.bxslider.min.js"></script>

    <link href="./js/jquery.bxslider/jquery.bxslider.css" rel="stylesheet" />
    <script>
    //スライドショウの処理
      $(document).ready(function(){
        $('.bxslider').bxSlider({
          auto: true,
          speed: 1000,
          pause: 4000,
        });
      });
    </script>

  </head>
  <body>
  <header>
<!-- ヘッダー -->
    <div class="header_main">
        <div class="header_left">
            <a href="./"><img src="./img/ohaka_header.png" border="0" ></a>
        </div>
        <div class="header_right">
            <p><br>新築・分譲・１戸建ての住まい情報 お墓.com <br><br></p>
            <?php if(check_login()) { ?>
            <a href="logout.php">[ログアウト]</a>
            <a href="cart.php">[カート]</a>
            <p><br>ようこそ <?php print $_SESSION['LOGIN']['name']; ?> 様</p>
            <?php } else { ?>
            <a href="regist.php">[会員登録]</a>
            <a href="login.php">[ログイン]</a>
              <?php } ?>
        </div>
        <!-- カート処理　-->
        <?php if (!empty($result_msg)) { //結果メッセージ ?>
            <p class="message"><?php print $result_msg; ?></p>
    		<?php } ?>
    		<?php foreach ($err_msg as $value) { //エラーメッセージ ?>
    	    <p class="message"><?php print $value; ?></p>
    		<?php } ?>
    </div>
    <!-- グローバルナビゲーション -->
      <nav class="global_nav">
          <a href="./" >トップ<br>top</a>
          <a href="#">物件検索<br>search</a>
          <a href="#">お墓.comについて<br>about</a>
          <a href="#">お墓.com CLUBE<br>ohaka.com clube</a>
      </nav>
  </header>
<!-- スライドショウ -->
  <ul class="bxslider">
      <li><img src="./img/ohaka1.jpg"  class="slideshow"></li>
      <li><img src="./img/ohaka2.jpg"  class="slideshow"></li>
      <li><img src="./img/ohaka3.jpg"  class="slideshow"></li>
  </ul>
<!-- marquee -->
  <div class="marquee_box">
      <div class="marquee_text">
          <p>NEWS<br>最新情報</p>
      </div>
      <div class="marquee">
          <marquee><a href="#">最新のお墓情報をお伝えします</a></marquee>
      </div>
      <a href="#"><img class="news" src="./img/ohaka_news.png"></a>
  </div>
<!-- ソート用カテゴリ一覧 -->
<div class="sort_box">
  <div class="sort">
    　<h1>お墓を探す</h1>
      <h2>エリアからお墓を探す</h2>
      <div class="sort_item">
          <ul>
              <li><a href="./sort.php">北海道・東北北海道</a></li>
              <li><a href="./sort.php">首都圏東京都</a></li>
              <li><a href="./sort.php">北陸・甲信越</a></li>
              <li><a href="./sort.php">東海</a></li>
              <li><a href="./sort.php">近畿圏</a></li>
              <li><a href="./sort.php">中国・四国</a></li>
              <li><a href="./sort.php">九州・沖縄</a></li>
          </ul>
      </div>
      <h2>キーワードからお墓を探す</h2>
      <div class="sort_item">
          <ul>
              <li><a href="./sort.php">駅近</a></li>
              <li><a href="./sort.php">管理費無料</a></li>
              <li><a href="./sort.php">共同墓地</a></li>
              <li><a href="./sort.php">西洋式</a></li>
          </ul>
      </div>
      <h2>宗教からお墓を探す</h2>
      <div class="sort_item_religion">
                    <div class="sort_flex">
                        <h6>奈良仏教系</h6>
                          <ul>
                              <li>法相宗</li>
                              <li>華厳宗</li>
                              <li>律宗</li>
                          </ul>
                        <h6>密教系</h6>
                          <ul>
                              <li>真言宗</li>
                              <li>天台宗</li>
                          </ul>
                    </div>
                    <div class="sort_flex">
                        <h6>浄土系</h6>
                          <ul>
                              <li>浄土宗</li>
                              <li>浄土真宗</li>
                              <li>融通念仏宗</li>
                              <li>時宗</li>
                          </ul>
                    </div>
                    <div class="sort_flex">
                        <h6>禅系</h6>
                          <ul>
                              <li>臨済宗</li>
                              <li>曹洞宗</li>
                              <li>黄檗宗</li>
                          </ul>
                          <h6>法華系</h6>
                            <ul>
                                <li>日蓮宗</li>
                            </ul>
                    </div>
                    <div class="sort_flex">
                        <h6>キリスト教</h6>
                          <ul>
                              <li>カトリック</li>
                              <li>プロテスタント</li>
                              <li>他諸派</li>
                          </ul>
                          <h6>イスラム教</h6>
                            <ul>
                                <li>シーヤ派</li>
                                <li>スンニ派</li>
                                <li>他諸派</li>
                            </ul>
                    </div>
      </div>
  </div>
</div>
<!-- 商品PICKUP(お勧め) -->
  <article>
    <h3>PICK UP</h3>
    <?php foreach ($data as $value)  {
      //flagの値が１であればPICKUPの項目に表示します
      if ($value['flag'] === 1) {?>

        <div class="item-list">
            <h4><a href="#"><?php print $value['name']; ?></a></h4>
                  <div class="item">
                      <div class="item-image">
                           <img src="<?php print IMG_DIR; ?>ohaka_<?php print $value['id']; ?>.jpg" >
                      </div>
                      <div class="item-info">
                          <table>
                              <thead>
                                    <tr>
                                      <th class="tbhead">価格</th>
                                      <th class="tbhead">築年数</th>
                                    </tr>
                              </thead>
                              <tbody>
                                    <tr>
                                      <td class="item-price">¥<?php print $value['price']; ?></td>
                                      <td class="item-others"><?php print $value['years']; ?></td>
                                    </tr>
                              </tbody>
                              <thead>
                                    <tr>
                                      <th class="tbhead">所在地</th>
                                      <th class="tbhead">沿線・駅</th>
                                    </tr>
                              </thead>
                              <tbody>
                                    <tr>
                                      <td class="item-others"><?php print $value['address']; ?></td>
                                      <td class="item-others"><?php print $value['station']; ?></td>
                                    </tr>
                              </tbody>
                        </table>
                        <!-- カート処理 -->
                            <form  action="./" method="post">
                            <?php if ($value['stock'] > 0) { ?>
                                <input class="cart-btn" type="submit" value="カートに入れる">
                            <?php } else { ?>
                                <p class="sold-out" >完売致しました</p>
                            <?php } ?>
                                <input type="hidden" name="item_id" value="<?php print $value['id']; ?>">
                                <input type="hidden" name="mode" value="insert_cart">
                      </div>
                  </div>

                      </form>
          </div> <?php }
        } ?>
  </article>
<!-- フッター -->
  <footer>
        <div class="footer_box">
              <div class="footer_left">
                  <h5>OHAKA.comについて</h5>
                    <ul>
                        <li>OHAKA MOVIE</li>
                        <li>OHAKA CONCEPT</li>
                        <li>PHOTO GALLERY</li>
                        <li>TV CM GALLARY</li>
                        <li>BRANZ SUPPORT</li>
                        <li>MEUP(ミアップ)</li>
                    </ul>
              </div>
          <div class="footer_center">
              <h5>OHAKA CLUB</h5>
                  <ul>
                      <li>OHAKA CLUBについて</li>
                      <li>会員登録</li>
                      <li>会員規約</li>
                      <li>ヘルプ</li>
                      <li>パスワード問合せ</li>
                  </ul>
          </div>
          <div class="footer_right">
              <h5>OHAKAに住まう</h5>
                  <ul>
                      <li>美しい墓に住む</li>
                      <li>建築の美学</li>
                  </ul>
              <h5>その他</h5>
                  <ul>
                      <li>BRANZ GARDENについて</li>
                      <li>ローンシミュレーション</li>
                      <li>グッドデザイン賞</li>
                      <li>OHAKA「緑をつなぐ」プロジェクト</li>
                 </ul>
          </div>
      </div>
  </footer>
    <div class="footer_rogo">
      <div class="footer_logobox">
        <img src="./img/ohaka_header.png">
      </div>
    </div>

  <div class="rights_box">
    <div class="rights">
      <div class="small">
          <p><small>Copyright &copy; OHAKA LAND CORPORATION. All rights reserved.</small></p>
      </div>
    </div>
  </div>
</body>
</html>
