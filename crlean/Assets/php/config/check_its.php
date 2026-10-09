<?php
header('Content-Type: application/json');

$ip = $_GET['ip'];
$file = "../path_its/".$ip.".json";

if(file_exists($file)){
    echo file_get_contents($file);
}else{
    echo json_encode(["img"=>"","time"=>0]);
}
?>