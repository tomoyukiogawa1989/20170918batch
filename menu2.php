<?php 
    // require()関数
    // include()関数
    // エラーが起きても最後まで処理を実行するのがinclude()関数
    // エラーが起きたら強制的に処理を止めるのがrequire()関数

 ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>チーム開発サンプル</title>
</head>

<body>
    <?php // アセットを呼び出す ?>
    <?php require('parts/assets.php'); ?>

    <?php // ヘッダーを呼び出す ?>
    <?php require('parts/header.php'); ?>

    <br>
    <div class="container">
      メニュー2です。
    </div>
    <br>

    <?php // フッターを呼び出す ?>
    <?php require('parts/footer.php'); ?>

</body>
</html>