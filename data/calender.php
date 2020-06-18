<?php
//日本時間
date_default_timezone_set("Asia/Tokyo");

$year = date("Y");
$month = date("m");


//月末取得
$end_month = date("t", strtotime($year.$month."01"));
//1日目の曜日取得
$first_week = date("w", strtotime($year.$month."01"));
//月末曜日取得
$last_week =date("w", strtotime($year.$month.$end_month));

$aryCalendar = [];
$j = 0;


//1日前の曜日の穴埋め
for($i = 0; $i < $first_week; $i++){
  $aryCalendar[$j][] = "";
}
//1日から月末のループ
for($i = 1; $i <= $end_month; $i++){
  if(isset($aryCalendar[$j]) && count($aryCalendar[$j]) === 7){
    $j++;
  }
  $aryCalendar[$j][] = $i;
}
//月末の曜日穴埋め
for($i = count($aryCalendar[$j]); $i < 7; $i++){
  $aryCalendar[$j][] = "";
}


$aryWeek = ["日" ,"月" ,"火" ,"水" ,"木" ,"金" ,"土"];


?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="calender.css">
  <title>カレンダー</title>
</head>
  
  <body>
  <div class="main">
    <table class="calendar">
      <?php echo  $year ?>年<?php echo $month ?>月
      <br>
        <!-- 曜日の表示 -->
          <tr>
        <?php foreach($aryWeek as $week){ ?>
            <th><?php echo $week ?></th>
        <?php } ?>
        </tr>
        <!-- 日数の表示 -->
        <?php foreach($aryCalendar as $tr){ ?>
        <tr> 
            <?php foreach($tr as $td){ ?>
                <?php if($td != date('j')){ ?>
                    <td><a href="read.php"><?php echo $td ?></a></td>
                <?php }else{ ?>
                    <!-- 今日の日付 -->
                    <td class="today"><a href="input.php"><?php echo $td ?></a></td>
                <?php } ?>
            <?php } ?>
        </tr>
        <?php } ?>
    </table>
  </body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/i18n/jquery.ui.datepicker-ja.min.js"></script>

<script>


</script>
</html>