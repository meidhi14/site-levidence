<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css?t=<? echo time(); ?>">
    <link rel="stylesheet" href="/css/presentation.css?t=<? echo time(); ?>">
    <title>L'évidence</title>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-202737045-1">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-202737045-1');
</script>
</head>
<body>
    <header>
        <?php  require 'banniere.php'; ?>
        <?php  require 'header.php'; ?>
    </header> 


        <div class="photo">
            <img  id="photopresentation" src="../restaurant-image/DSC_0005.JPG" alt="restaurant-levidence-image">
        </div>
        

        <div class="texte">
            <p>
                Alexis et Claire vous accueillent dans leur restaurant. <br>
                Vous allez y découvrir un lieu totalement à leur image. <br>
                Un lieu chaleureux, une cuisine authentique, raffinée. <br>
                Des produits locaux et de qualité.<br>
                Un personnel souriant et à l'écoute de ses clients.
            </p>
        </div>

        <div class="conteneur1">    
        <div class="d1"></div>
        </div>
        
        <div class="texte">
            <p>
               Horaires : <br><br>
            lundi	    12:15–14:00, 19:15–21:00<br>
            mardi	    Fermé<br>
            mercredi	Fermé<br>
            jeudi	    12:15–14:00, 19:15–21:00<br>
            vendredi	12:15–14:00, 19:15–21:00<br>
            samedi	    12:15–14:00, 19:15–21:00<br>
            dimanche	12:15–14:00<br>
            </p>
        </div>
        


    </div> 

    <footer>
        <?php  require 'footer.php'; ?>
    </footer>

</body>
</html>