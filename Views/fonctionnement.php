<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="../img/Vieva_Connect_logo.png" type="image/png" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  
  <!-- Font Awesome -->
  <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
  />
  <!-- Google Fonts -->
  <link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
  />
  <!-- MDB -->
  <link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.min.css"
  rel="stylesheet"
  />
  
  <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">  
  <link rel="stylesheet" href="../CSS/style.css" />
  <title>VIEVA CONNECT</title>
</head>

<body>

  <!-----------------------------------NAVBAR-->
  <?php include "./partiels/navbar.php" ?>
  <!---------------------------------END NAVBAR-->
<div class="container-fluid">
  <div class="row pt-5">
    <!--CAROUSSEL-->
    <div class="col-lg-7">
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="/img/caroussel_1.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5 class="text-dark">Etape 1</h5>
                  <p class="text-dark">Comment fonctionne la premère étape.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="/img/caroussel_2.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5 class="text-dark">Etape 2</h5>
                  <p class="text-dark">Comment fonctionne la seconde étape.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="/img/caroussel_3.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5 class="text-dark">Etape 3</h5>
                  <p class="text-dark">Comment fonctionne la troisième étape.</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev text-dark" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next text-dark" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>
    <!--END CAROUSSEL-->

    <!--TEXT NEXT CAROUSSEL-->
    <div class="col-lg-4 mt-lg-5">
        <p class="fs-1 text-center text-uppercase fw-bold">Votre titre ici</p>
        <p class="fs-3 text-center mb-lg-5">Il s'agit d'une citation de deux lignes
            pour une page d'accueil de site Web</p>
        <p class="text-center">C'est un espace essentiel ! Utilisez-le pour développer votre titre
            et attirer l'attention du lecteur. Expliquez en quoi consiste cette
            section, partagez quelques détails et donnez juste la bonne
            quantité d'informations pour accrocher le public.</p>
        <p class="text-center mb-lg-5">Cependant, ne dévoilez pas tout ! Après tout, vous voulez qu'ils
            cliquent sur votre appel à l'action après avoir lu ce passage.</p>
        <p class="text-center mt-5"><button type="button" class="btn btn-success">En savoir plus</button></p>    
    </div>
    <!--END TEXT NEXT CAROUSSEL-->
</div>
</div>

  <!-- FOOTER -->
<?php include "./partiels/footer.php" ?>
  <!-- END FOOTER -->
  
  <!--SCRIPT-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
  crossorigin="anonymous">
  </script>
  <!--END SCRIPT-->
  
  </body>
  
  </html>