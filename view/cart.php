<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>OHAKA.com</title>
    <link type="text/css" rel="stylesheet" href="./lib/style.css">
    <script type="text/javascript">
        function submit_change_amount(item_id) {
            document.getElementById('form_select_amount' + item_id).submit();
        }
    </script>
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
        <h1 class="title">ショッピングカート</h1>
<?php if (count($err_msg) === 0) { ?>
<?php if (empty($result_msg) !== TRUE) { ?>
        <p class="msg"><?php print $result_msg; ?></p>
<?php } ?>
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
                    <form class="cart-item-del" action="./cart.php" method="post">
                        <input type="submit" value="削除">
                        <input type="hidden" name="item_id" value="<?php print $value['item_id']; ?>">
                        <input type="hidden" name="mode" value="delete_cart">
                    </form>
                    <span class="cart-item-price">¥ <?php print $value['price']; ?></span>
                    <form class="form_select_amount" id="form_select_amount<?php print $value['item_id']; ?>" action="./cart.php" method="post">
                        <select name="select_amount" class="cart-item-num" name="cart-item-num" onchange="submit_change_amount(<?php print $value['item_id']; ?>)">
<?php $max_count = 10; if ((int)$value['amount'] > $max_count){$max_count = (int)$value['amount'];}; ?>
<?php for ($count = 1; $count <= $max_count; $count++)  { ?>
                            <option value="<?php print $count; ?>" <?php if ((int)$value['amount'] === $count){print 'selected';}; ?> ><?php print $count; ?></option>
<?php } ?>
                        </select>
                        <input type="hidden" name="item_id" value="<?php print $value['item_id']; ?>">
                        <input type="hidden" name="mode" value="change_cart">
                    </form>
                </div>
            </li>
<?php } ?>
        </ul>
        <div class="buy-sum-box">
            <span class="buy-sum-title">合計</span>
            <span class="buy-sum-price">¥<?php print $sum_price; ?></span>
        </div>
        <div>
            <form action="./order.php" method="post">
                <input class="buy-btn" type="submit" value="購入する">
            </form>
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
