<?php
// $aryCalendar = [];
// $j = 0;
// $i = ["1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"];

// if ($i == 1){
//   $num = $_POST["$i"];
//   $filepath = "{$i}.csv";
// }
//1日から月末のループ
// {for($i = n; $i <= $end_month; $i++){
//   if(isset($aryCalendar[$j]) && count($aryCalendar[$j]) === 7){
//     $j++;
//   }
//   $aryCalendar[$j][] = $i;
// }};


//
$num = $_POST["$file"];
$filepath = "form.csv";

$name = $_POST["name"];
$time = $_POST["time"];
$inquiry = $_POST["inquiry"];

$write_data = "{$name} {$time} {$inquiry}\n";
// var_dump($fwrite_data);
// $list = array(array($name,$mail,$inquiry));
$file = fopen("{$filepath}", "a");

// fputcsv($fwrite_data, $line);
// foreach($fwrite_data as $line){
//   fputcsv($file, $line);
// }

flock($file, LOCK_EX);
fwrite($file, $write_data);
flock($file, LOCK_UN);
fclose($file);
header("Location:input.php");
?>


