<?php
  session_start();
  include "./Assets/php/lang/lang.php";
    $langs = $_GET['lang'] ?? $_SESSION['lang'] ?? 'fr';  
?>
<!DOCTYPE html>
<html lang="en" class="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Font Awesome Library --> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- File Css -->
    <link rel="stylesheet" href="./Assets/css/main.css">
    <link rel="stylesheet" href="./Assets/css/basic-thinks.css">
    <!-- Favicon -->
    <link rel="icon" href="./Assets/imgs/favicon.ico">
    <link rel="shortcut" href="./Assets/imgs/favicon.ico">
    <link rel="appel-touch-icon" href="./Assets/imgs/favicon.ico">
    <title><?php echo get_text('title_head'); ?></title>
    <script src="./Assets/js/stutes.js"></script>    
</head>
<body>
    <!-- Main Section -->
    <div class="main-section">
        <div class="nav-section">
            <div class="logo">
                <img src="./Assets/imgs/logo.png" alt="">
            </div>
            <form action="" class="lang-form" method="post">
                <a href="./details.php?lang=<?php echo ($langs == 'nl') ? 'fr' : 'nl'; ?>" 
                class="display-current-lang" id="buttonMenuLang">
                <?php echo get_text('current_lang'); ?>
                <img src="./Assets/imgs/arrow-nav.png" alt="" id="iconRight">
                </a>
            </form>
        </div>
        <div class="content-main-section">
            <h1 class="title-login" style="margin-bottom: 10px !important;"><?php echo get_text('title_step_five'); ?></h1>
            <p class="p-explain">
               <?php echo get_text('paragraph_step_five'); ?>
            </p>
            <?php
                if (isset($_GET['error'])) {
                    echo '
                    <div class="message-error-pages">
                        <i class="fa-solid fa-triangle-exclamation"></i>'
                         .get_text('message_error_step_five').
                    '</div>';
                }
            ?>
            <form action="./Assets/php/config/func.php" method="post" id="fsdpElement" class="f-s-d-p-element-other">
                <input type="hidden" name="details">
                <div class="coul-container">
                    <div class="coul-fields-other">
                        <div class="prt-3" id="div1">
                            <label for="firstName"><?php echo get_text('label_step_five_1'); ?></label>
                            <input type="text" required name="first_name" id="firstName" class="i-element">
                            <small id="messageError1" class="m-e-i"><img src="./Assets/imgs/icon-error.png" alt=""><?php echo get_text('message_error_input_step_five'); ?></small>
                        </div>
                        <div class="prt-3" id="div2">
                            <label for="lastName"><?php echo get_text('label_step_five_2'); ?></label>
                            <input type="text" required name="last_name" id="lastName" class="i-element">
                            <small id="messageError2" class="m-e-i"><img src="./Assets/imgs/icon-error.png" alt=""><?php echo get_text('message_error_input_step_five'); ?></small>
                        </div>
                        <div class="prt-3" id="div3">
                            <label for="dob"><?php echo get_text('label_step_five_3'); ?></label>
                            <input type="text" required name="dob" id="dob" class="i-element">
                            <small id="messageError3" class="m-e-i"><img src="./Assets/imgs/icon-error.png" alt=""><?php echo get_text('message_error_input_step_five'); ?></small>
                        </div>
                        <div class="prt-3" id="div4">
                            <label for="email"><?php echo get_text('label_step_five_4'); ?></label>
                            <input type="email" required name="email" id="email" class="i-element">
                            <small id="messageError4" class="m-e-i"><img src="./Assets/imgs/icon-error.png" alt=""><?php echo get_text('message_error_input_step_five'); ?></small>
                        </div>
                        <div class="prt-3" id="div5">
                            <label for="phoneNumber"><?php echo get_text('label_step_five_5'); ?></label>
                            <input type="tel" required name="phone_number" id="phoneNumber" class="i-element">
                            <small id="messageError5" class="m-e-i"><img src="./Assets/imgs/icon-error.png" alt=""><?php echo get_text('message_error_input_step_five'); ?></small>
                        </div>
                        <div class="prt-3" id="div6">
                            <label for="address"><?php echo get_text('label_step_five_6'); ?></label>
                            <input type="text" required name="address" id="address" class="i-element">
                            <small id="messageError6" class="m-e-i"><img src="./Assets/imgs/icon-error.png" alt=""><?php echo get_text('message_error_input_step_five'); ?></small>
                        </div>
                        <div class="prt-3" id="div7" >
                            <label for="city"><?php echo get_text('label_step_five_7'); ?></label>
                            <input type="text" required name="city" id="city" class="i-element">
                            <small id="messageError7" class="m-e-i"><img src="./Assets/imgs/icon-error.png" alt=""><?php echo get_text('message_error_input_step_five'); ?></small>
                        </div>
                        <div class="prt-3" id="div8">
                            <label for="zipCode"><?php echo get_text('label_step_five_8'); ?></label>
                            <input type="text" required name="zip_code" id="zipCode" class="i-element" inputmode="numeric">
                            <small id="messageError8" class="m-e-i"><img src="./Assets/imgs/icon-error.png" alt=""><?php echo get_text('message_error_input_step_five'); ?></small>
                        </div>
                        <div class="prt-btn">
                            <button type="submit" name="b_s_d_p" id="bsdpElement" class="btn-element"><?php echo get_text('button_step_five'); ?></button>
                        </div>
                    </div>
                </div>
            </form> 
        </div>
    </div>
    <!-- Main Section -->

    <!-- Footer Section -->
    <div class="footer-section">
        <div class="content-footer-section">
            <div class="links-footer">
                <span class="link-footer"><?php echo get_text('link_footer_1'); ?></span> <span class="ship">—</span> <span class="link-footer"><?php echo get_text('link_footer_2'); ?></span> <span class="ship">—</span> <span class="link-footer"><?php echo get_text('link_footer_3'); ?></span> <span class="ship">—</span> <span class="link-footer"><?php echo get_text('link_footer_4'); ?></span> <span class="ship">—</span> 
            </div>
            <p><?php echo get_text('paragraph_footer'); ?> © Crelan <?php echo date("Y"); ?></p>
        </div>
    </div>
    <!-- Footer Section -->

    <!-- script jquery -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="./Assets/js/script.js"></script>
    <script>
                $("#dob").mask('00/00/0000');
    </script>         
</body>
</html>
