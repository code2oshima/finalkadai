<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>OHAKA.com</title>
    <!-- スタイルの初期化 -->
    <link rel="stylesheet" href="./view/html5reset-1.6.1.css">
    <!-- CSS -->
    <link rel="stylesheet" href="./view/style.css">
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
            <p>ようこそ<br><?php print $_SESSION['LOGIN']['name']; ?> 様</p>
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
  </header>
<!-- 商品PICKUP(お勧め) -->
  <article>
    <?php foreach ($data as $value)  {?>
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
          </div>
      <?php } ?>
  </article>
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
