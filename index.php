<?php 
    // require()関数
    // include()関数
    // ほげほげほげおhげおhごhげおgへおgへおごえhg
    // ほげほげほげおhげおhごhげおgへおgへおごえhg
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
    <div style="color: blue">
      メインコンテンツです。
    </div>
    <br>

    <?php // フッターを呼び出す ?>
    <?php require('parts/footer.php'); ?>

</body>
</html>