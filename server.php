<?php

$string = file_get_contents('data.json');
$list = json_decode($string, true);

if(isset($_POST['newItem'])){
    $itemList = $_POST['newItem'];
    array_push($list, $itemList);

    file_put_contents('data.json', json_encode($list));
}

header('Content-Type: application/json');

echo json_encode($list);