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
<pre>
  <pre>
    <?php
    try{
      $db = new PDO(
        'mysql:dbname=mydb;
        host=localhost;
        charset=utf8', 'root', ''
      );
    }catch (PDOException $e){
      echo 'DB接続エラー:'. $e->getMessage();
    }

    $statement = $db -> prepare('INSERT INTO memos SET memo=?, created_at=NOW()');
    $statement -> bindParam(1, $_POST['memo']);

    // $statement = $db->prepare('SELECT * FROM memos LIMIT ?');
    // $limit = 5;
    // $statement->bindParam(1, $limit, PDO::PARAM_INT);

    $statement -> execute();
    echo "メッセージが登録されました。";

    ?>
  </pre>

</pre>
</main>
</body>
</html>
