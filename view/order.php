<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>OHAKA.com</title>
    <link type="text/css" rel="stylesheet" href="./lib/style.css">
</head>
<body>
  <div class="header_main">
      <div class="header_left">
          <a href="./"><img src="./img/ohaka_header.png" border="0" ></a>
      </div>
      <div class="header_right">
          <p><br>新築・分譲・１戸建ての住まい情報 お墓.com <br><br></p>
      </div>
    </div>
    <div class="content">
<?php if (count($err_msg) === 0) { ?>
<?php if (empty($result_msg) !== TRUE) { ?>
        <p class="msg"><?php print $result_msg; ?></p>
<?php } ?>
        <div class="finish-msg">ご購入ありがとうございました。</div>
        <div class="cart-list-title">
            <span class="cart-list-price">価格</span>
            <span class="cart-list-num">数量</span>
        </div>
            <ul class="cart-list">
<?php foreach ($data as $value)  { ?>
                <li>
                    <div class="cart-item">
                        <img class="cart-item-img" src="<?php print $value['img']; ?>">
                        <span class="cart-item-name"><?php print $value['name']; ?></span>
                        <span class="cart-item-price">¥<?php print $value['price']; ?></span>
                        <span class="finish-item-price"><?php print $value['amount']; ?></span>
                    </div>
                </li>
<?php } ?>
            </ul>
        <div class="buy-sum-box">
            <span class="buy-sum-title">合計</span>
            <span class="buy-sum-price">¥<?php print $sum_price; ?></span>
        </div>
<?php } else { ?>
<?php foreach ($err_msg as $value) { ?>
    <p><?php print $value; ?></p>
<?php } ?>
<?php } ?>
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
