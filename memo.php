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
    <h1 class="font-weight-normal">トップページです。</h1>
  </header>

  <main>
    <h2>Practice</h2>

    <?php
    try {
      $db = new PDO('mysql:dbname=mydb;
      host=localhost;
      charset=utf8',//utf-8ではなくutf8
      'root',
      '');
    } catch (PDOException $e) {
      echo 'DB接続エラー：'. $e -> getMessage();
    }

    $id = $_REQUEST['id'];
    if(!is_numeric($id) || $id <= 0){
      print('1以上の数字で指定してください');
      exit();
    }

    // $memos = $db->query('SELECT * FROM memos WHERE id=1');
    $memos = $db->prepare('SELECT * FROM memos WHERE id=?');
    $memos -> execute(array($_REQUEST['id']));
    $memo = $memos -> fetch();
    ?>

    <article class="">
      <pre><?php print($memo['memo']); ?></pre>
      <a href="index.php">戻る</a>
    </article>
  </main>
</body>
</html>