<?php require('dbconnect.php'); ?>
<!doctype html>
<html lang="ja">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/style.css">

  <title>よくわかるPHPの教科書</title>
</head>
<body>
  <header>
    <h1 class="font-weight-normal">よくわかるPHPの教科書</h1>
  </header>

  <main>
    <h2>Practice</h2>

    <?php
    $memos = $db -> prepare('SELECT * FORM memos WHERE id=?');
    $memos -> execute(array(5));
    $memo = $memos -> fetch();
    ?>

    <form action="update_do.php" method="post">
      <textarea name="memo" rows="10" cols="50"></textarea><br>
      <button type="submit">登録する</button>
    </form>

  </main>
</body>
</html>
