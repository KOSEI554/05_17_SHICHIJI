<?php
$str = "";
// function csv(){
//   $form = 
// };

$file = fopen("form.csv" ,"r");

flock($file, LOCK_EX);

if ($file) {
  while ($line = fgets($file)){
    $str .="<tr><td>{$line}</td></tr>";
  }
}
flock($file, LOCK_UN);

fclose($file);
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="calender.css">
  <title>予定メモ</title>
</head>

<body>
  <a href="input.php">新規作成</a>
  <a href="calender.php">カレンダーに戻る</a>
  <fieldset>
    <legend>予定メモ</legend>
    <table>
      <thead>
        <!-- <tr>
          <th>名前</th>
          <th>時間</th>
          <th>やること</th>
        </tr> -->
      </thead>
      <tbody>
      <?= $str?>
      </tbody>
    </table>
  </fieldset>
</body>

</html>