<?php
// session_start();
// ※htdocsと同じ階層に「includes」を作成してfuncs.phpを入れましょう！
// include "../../includes/funcs.php";
// include "funcs.php";
// sschk();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Creat A New Account</title>
  <link href="style.css" rel="stylesheet">
</head>
<body>

<!-- Head[Start] -->

<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="user_insert.php">
  <div class="jumbotron">
   
    <p>Creat A New Account</p>
     <label>Name：<input type="text" name="name"></label><br>
     <br>
     <label>Login ID：<input type="text" name="lid"></label><br>
     <br>
     <label>Login PW<input type="text" name="lpw"></label><br>
     <br>
     <label>FLG：
      General<input type="radio" name="kanri_flg" value="0">　
      Administrator<input type="radio" name="kanri_flg" value="1">
    </label>
    <br>
     <!-- <label>退会FLG：<input type="text" name="life_flg"></label><br> -->
     <br>
     <input type="submit" value="Resister">
    
  </div>
</form>
<br>
<a id="navbar-brand" href="index.php" >Go Back To Log In</a>
<!-- Main[End] -->


</body>
</html>
