<?php
//0. SESSION開始！！
session_start();

//１．関数群の読み込み
include("funcs.php");

// LOGINチェック → funcs.phpへ関数化しましょう！
sschk();


//２．データ登録SQL作成
$pdo = db_conn();
$sql = "SELECT * FROM gs_an_table";
$stmt = $pdo->prepare($sql);
$status = $stmt->execute();

//３．データ表示
$values = "";
if($status==false) {
  sql_error($stmt);
}

//全データ取得
$values =  $stmt->fetchAll(PDO::FETCH_ASSOC); //PDO::FETCH_ASSOC[カラム名のみで取得できるモード]
$json = json_encode($values,JSON_UNESCAPED_UNICODE);

?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>List</title>
<link href="style.css" rel="stylesheet">

</head>
<body id="main">
<!-- Head[Start] -->

<header>
  
      
      
</header>

<!-- Head[End] -->

<!-- Main[Start] -->
<div>
    <br>
    <a class="navbar-brand" href="index1.php">Go Back To Resister</a>
    <br>
    <br>
    <a class="navbar-brand" href="logout.php">Logout</a>
      <table border="1">
      <?php foreach($values as $v){ ?>
        <tr>
          <td><?=h($v["id"])?></td>
          <td><?=h($v["name"])?></td>
          <td><?=h($v["email"])?></td>
          <td><?=h($v["age"])?></td>
          <td><?=h($v["naiyou"])?></td>
          <td><a href="detail.php?id=<?=h($v["id"])?>"><img src="pics/edit.png" alt="" width="30"></a></td>
          <td><a href="delete.php?id=<?=h($v["id"])?>"><img src="pics/delete.png" alt="" width="30"></a></td>
        </tr>
      <?php } ?>
      </table>
</div>
<!-- Main[End] -->

<script>
  const a = '<?php echo $json; ?>';
  console.log(JSON.parse(a));
</script>
</body>
</html>
