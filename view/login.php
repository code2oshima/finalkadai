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
		<form action="login.php" method="post">
			<div class="login_error">
				<?php foreach ($err_msg as $value) { //エラーメッセージ ?>
			    <p><?php print $value; ?></p>
				<?php } ?>
			</div>
			<div class="login_form">
				<dl>
					<dt>メールアドレス</dt>
					<dd><input type="text" name="email" value=""></dd>
					<dt>パスワード</dt>
					<dd><input type="password" name="password" value=""></dd>
				</dl>
				<div class="login_submit">
					<input type="submit" name="login" value="ログイン">
				</div>
			</div>
		</form>
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
