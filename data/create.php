<?php

// $filepath = "form.csv";

$name = $_POST["name"];
$time = $_POST["time"];
$inquiry = $_POST["inquiry"];

$write_data = "{$name} {$time} {$inquiry}\n";
// var_dump($fwrite_data);
// $list = array(array($name,$mail,$inquiry));
$file = fopen("form.csv", "a");

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


