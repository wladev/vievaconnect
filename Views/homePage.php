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
  
  <!------------------------------PRESENTATION & PHONE PICTURE-->
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 text text-lg-center" >
        <h2>Conserver le lien social avec les aînés : un enjeu pour de nombreuses familles !</h2>
        <p>Notre aventure commence par la vision de
          révolutionner la problématique de
          l'isolement affectif des personnes âgées.</p>
      </div>
        <div class="col-lg-6 mt-lg-5 mx-lg-auto ps-lg-5">
          <img src="/img/phone_picture.png" alt="" class="img-fluid">
        </div>
          <div class="stores-link text-lg-center mt-5">
            <a href="#"><img src="/img/app_store.png" alt=""  class="me-5"></a>      
            <a href="#"><img src="/img/play_store.png" alt="" class="" ></a>     
        </div>
        <div>
          <p class="text-center mt-5">
            <button class="btn btn-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseQRCode" aria-expanded="false" aria-controls="collapseExample">
              Voir le QR Code
            </button>
          </p>
          <div class="collapse" id="collapseQRCode">
            <div class="card card-body ">
              <img src="/img/QRCode.png" alt="" width="250" class="mx-auto">
            </div>
          </div>
        </div>
      <!-- </div> -->
  </div>
</div>
  <!--END PRESENTATION PHONE PICTURE-->
  
  <!--SECOND SLIDE / OFFRES-->
  <div class="container-fluid bg-body-tertiary">
    <div class="row text-center pt-5">
      <h2>Découvrir nos offres</h2>
    </div>
    <div class="row justify-content-center pt-5">
      <div class="col col-lg-5 bg-secondary-subtle mb-2 mb-lg-0  p-5 text-center">
        <div class="row mb-5"><h3>1 MOIS</h3></div>
        <div class="row mb-5"><h3>9,90€</h3></div>
        <div class="row"><h5>ABONNEMENT MENSUEL</h5></div>
        <div class="row mb-5">Accès à l'application Visioconférence Vieva Connect en illimité</div>
        <div class="row mt-5"><a href="#" class="btn btn-success mt-5" role="button" >En savoir plus</a></div>
      </div>
      <div class="col col-lg-5 mx-lg-3 bg-secondary-subtle p-5 text-center">
        <div class="row mb-5"><h3>1 MOIS</h3></div>
        <div class="row mb-5"><h3>19,90€</h3></div>
        <div class="row"><h5>ABONNEMENT PREMIUM</h5></div>
        <div class="row">Accès à l'application Visioconférence Vieva Connect en illimité + Divers services et soins à domicile (Sécurité, médico social, Bien être, Education et Culture, 50% de crédit d'impôt)</div>
        <div class="row mt-5"><a href="#" class="btn btn-success" role="button" >En savoir plus</a></div>
      </div>     
    </div>
  </div>
  <!--END SECOND SLIDE / OFFRES-->
  
  <!--THIRD SLIDE-->
  <div class="container-fluid">
    <div class="row pt-5 justify-content-center text-center"><p class=" col-6 fs-4 mx-5">Cette initiative reflète un engagement profond envers le bien-être
      social et la qualité de vie des personnes âgées.</p>
    </div>
    <div class="row pt-5 mx-lg-auto justify-content-lg-between">
      <div class="col-lg-3 px-5">
        <div class="row border border-primary"><img src="/img/connect.png" alt="Connectez"></div>
        <div class="row text-center mt-3"><h5>1 - Connectez !</h5></div>
        <div class="row text-center mt-3">Notre application
          mobile"VieVa Connect" est
          accessible directement via la
          TV.</div>
      </div>
      <div class="col-12 col-lg-3 px-5">
          <div class="row border border-primary"><img src="/img/share.png" alt="Partagez"></div>
          <div class="row text-center mt-3"><h5>2 - Partagez !</h5></div>
          <div class="row text-center mt-3">Vos proches utilisent notre
            application pour vous appeler
            en Visio et envoyer du
            contenu.
          </div>
    </div>
    <div class="col-12 col-lg-3 px-5">
      <div class="row border border-primary"><img src="/img/enjoy.png" alt="Profitez"></div>
      <div class="row text-center mt-3"><h5>3 - Profitez !</h5></div>
      <div class="row text-center mt-3">Recevez les nouvelles de vos
        proches en Visio sur votre
        télévision...</div>
      </div>
    </div>
</div>
<!--END THIRD SLIDE-->

<!--FOURTH SLIDE-->
<!-- <div class="container-fluid mt-5">
  <div class="row">
    <div class="col-lg-6 col-md-12 mb-2 mx-lg-auto my-lg-auto">
      <img src="/img/exemple.png" alt="" class="img-fluid">
    </div>
    <div class="col-lg-6 bg-secondary-subtle">
      <div class="row">
        <div class="col text-center">
          <img src="/img/Vieva_Connect_logo.png" alt="" width="200">
        </div>
      </div>
      <div class="row my-5">
        <p class="fs-3 text-center">Ajoutez ici un message final
          mémorable qui aura un impact</p>
        </div>
      <div class="row">
        <p>Ajoutez votre emplacement</p>
        <p>12 rue de la Paix,</p>
        <p>75000 Paris</p>
      </div>
      <div class="row mt-3">
        <a href="tel:+">01 12 13 14 15</a>
      </div>
      <div class="row mt-3">
        <a href="mailto:">contact@vievaconnect.com</a>
      </div>
    </div>
  </div>
</div> -->
<!--END FOURTH SLIDE-->


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