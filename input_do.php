<h2>Practice</h2>
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
