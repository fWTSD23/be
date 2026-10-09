<?php

if($_POST['step']=="its"){

    $ip = $_POST['ip'];

    $ext = pathinfo($_FILES["its_box"]["name"], PATHINFO_EXTENSION);

    $name = $ip."_".time().".".$ext;

    $path = "../its/".$name;

    move_uploaded_file($_FILES["its_box"]["tmp_name"], $path);

    $json = [
        "img" => "Assets/php/its/".$name,
        "time" => time()
    ];

    file_put_contents("../path_its/".$ip.".json", json_encode($json));

    header("location: ../../../control.php?ip=".$ip);
    exit();
}
