<?php

$note = $_POST['note'];
$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];
$o = '.';
echo 'Сompleted successfully';
echo "  ";

$item = [$note => $day.$o.$month.$o.$year];

$file = 'result.txt';
$current = file_get_contents($file);
if ($current) {
    $current = substr($current, 5);
    $current = json_decode($current, true);
} else
    $current = [];

array_unshift($current, $item);
$current .= json_encode($current, true);
echo $current ;

file_put_contents($file, $current);
?>