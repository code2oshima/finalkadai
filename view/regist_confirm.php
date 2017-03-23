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
		<form action="regist.php" method="post">
			<div class="login_form">
				<dl>
					<dt>名前</dt>
					<dd><?php print $name; ?></dd>
					<dt>メールアドレス</dt>
					<dd><?php print $email; ?></dd>
					<dt>パスワード</dt>
					<dd><?php print str_repeat("●", strlen($password)); ?></dd>
				</dl>
				<div class="login_submit">
					<input type="hidden" name="name" value="<?php print $name; ?>">
					<input type="hidden" name="email" value="<?php print $email; ?>">
					<input type="hidden" name="password" value="<?php print $password; ?>">
					<input type="submit" name="regist" value="確認">
				</div>
			</div>
      <div class="rights_box">
        <div class="rights">
          <div class="small">
              <p><small>Copyright &copy; OHAKA LAND CORPORATION. All rights reserved.</small></p>
          </div>
        </div>
      </div>
		</form>
    </div>
</body>
</html>
