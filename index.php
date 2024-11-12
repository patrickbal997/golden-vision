<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golden Vision</title>
    <link href="./style/Izmir-master/izmir.min.css" rel="stylesheet">
    <link href="./style/golden.css" rel="stylesheet">
    <link href="./style/propos.css" rel="stylesheet">
    <link href="./style/service.css" rel="stylesheet">
    <link href="./style/tarif.css" rel="stylesheet">
    <link href="./style/prestation.css" rel="stylesheet">
    <link href="./style/avis.css" rel="stylesheet">
    <link href="./style/contact.css" rel="stylesheet">
    <link href="./js/splide js/dist/css/splide.min.css" rel="stylesheet">
    <link rel="icon" href="./golden media/logoVisonn-removebg-preview.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" >
</head>
<body>
    <header>
        <Nav class="navbar">

        <div class="nav-logo">
        <a href="#">
            <img src="./golden media/logoVisonn-removebg-preview.png"  class="imglogo"></a>
      </div>

      <div class="nav-items">
        <ul>
          <li><a href="#accueil" class="active"> ACCUEIL </a></li>
          <li><a href="#à propos"> À PROPOS </a></li>
          <li><a href="#services"> SERVICES </a></li>
          <li><a href="#temoins"> TEMOIGNAGES </a></li>
          <li><a href="#contact"> CONTACT </a></li>
        </ul>
      </div>

      <div id="hamburger-menu">&#9776;</div>

        </Nav>

        <!-- ---- mobile Menu-----   ------>

        <div id="mobile-menu">

      <div class="mobile-nav-items">
      <ul>
          <li><a href="#accueil" class="active"> ACCUEIL </a></li>
          <li><a href="#à propos"> À PROPOS </a></li>
          <li><a href="#services"> SERVICES </a></li>
          <li><a href="#contact"> CONTACT </a></li>
        </ul>
      </div>

      <div id="hamburger-cross">&#10006;</div>
    </div>

    </header>
<!-------------- ---------- BODY ----------------   ------>

<!----- SECTION ACCUEIL -------->
    <section id="accueil" class="accueil">
    <div class="intro">
    <h1>bienvenue chez</h1>
    <h1> <span
     class="txt-rotate"
     data-period="2000"
     data-rotate='[ "GOLDEN VISION..."]'>
    </span></h1>
    <p>votre partenaire de confiance dans l'univers de l'immobilier. </p>
    <p>nous nous efforçons de rendre votre expérience immobilière simple et agréable.
    </p>
    </div>
    </section>
<!----- SECTION ACCUEIL -------->


<!----- SECTION A PROPOS -------->
    <?php require_once  'view'.DIRECTORY_SEPARATOR.'propos.php' ?>
<!----- SECTION A PROPOS -------->


<!----- SECTION SERVICE -------->
    <?php require_once  'view'.DIRECTORY_SEPARATOR.'service.php' ?>
<!----- SECTION SERVICE -------->


<!----- SECTION AVANTAGEET TARIF -------->
<?php require_once  'view'.DIRECTORY_SEPARATOR.'tarif.php' ?>
<!----- SECTION AVANTAGEET TARIF -------->


<!----- SECTION prestation -------->
<?php require_once  'view'.DIRECTORY_SEPARATOR.'prestation.php' ?>
<!----- SECTION prestation --------></section>

<!----- SECTION CONTACT -------->
<?php require_once  'view'.DIRECTORY_SEPARATOR.'contact.php' ?>
<!----- SECTION contact --------></section>

<!----- SECTION FOOTER -------->
<?php require_once  'view'.DIRECTORY_SEPARATOR.'footer.php' ?>
<!----- SECTION FOOTER --------></section>
    
</body>
<script src="./js/golden.js"></script>
<script src="./js/splide js/dist/js/splide.min.js"></script>
<script>
  const likes=document.querySelectorAll('#like');
  likes.forEach(like => {
    like.addEventListener('click',()=>{
    if(like.style.color === 'red'){
        like.style.color= 'white';
    }else{
        like.style.color= 'red';
    }
})
  });
</script>
</html>