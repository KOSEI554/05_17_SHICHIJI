<?php
date_default_timezone_set("Asia/Tokyo");

$year = date("Y");
$month = date("m");

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="calender.css">
  <title>Document</title>
</head>
<body>
  
  <form action="create.php" method="post">
  <legend>新規作成</legend>
      <a href="read.php">予定一覧</a>
      <a href="calender.php">カレンダーに戻る</a><br />
    名前：
    <input type="text" name="name" ><br />
    時間：
    <input type="time" name="time" ><br />
    予定：<br />
    <textarea  name="inquiry" id="" cols="30" rows="10" ></textarea><br />
    
    <br />

    <input type="submit" value="作成">
  </form>

</body>
</html>

