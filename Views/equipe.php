<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="../img/Vieva_Connect_logo.png" type="image/png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.min.css" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/style.css" />
    <title>VIEVA CONNECT</title>
</head>

<body>

    <!-----------------------------------NAVBAR-->
    <?php include "./partiels/navbar.php" ?>
    <!---------------------------------END NAVBAR-->

    <div class="container fluid">
        <!--PRESENTATION-->
        <div class="row pt-5">
            <div class="col-lg-12 text-uppercase text-center fs-1">notre équipe</div>
            <div class="col-12 text-center mt-5 col-lg-4">
                <img src="../img/igor.png" alt="" class="img-fluid mb-lg-1" width="150">
                <p class="fs-2">Igor CHARGHINOFF</p>
                <p class="">Cinquantenaire, entrepreneur
                    depuis une vingtaine d'années
                    spécialisé dans l'assistance
                    administrative internationale
                    pour des clients grands
                    comptes. Avant la pandémie
                    de COVID, il gérait une équipe
                    de 10 personnes et l'entreprise
                    prospérait avec un chiffre
                    d'affaires annuel entre 900K€,
                    principalement grâce à des
                    affaires avec la Chine et la
                    Russie.
                </p>
            </div>
            <div class="col-12 text-center mt-5 col-lg-4">
                <img src="../img/victoria.png" alt="" class="img-fluid mb-lg-1" width="150">
                <p class="fs-2">Victoria CHARGHINOFF</p>
                <p class="">Epouse d'Igor, professionnelle
                    de l'hôtellerie pendant 9 ans au
                    sein du Groupe Accor, elle a
                    évolué au poste de chef de
                    rang avant de se réorienter vers
                    un rôle administratif en
                    rejoignant la société de son
                    mari. Suite à une reconversion
                    professionnelle, elle est
                    devenue secrétaire médicale
                    spécialisée dans la gestion du
                    diabète de type 2, avec un
                    stage dans un EPHAD .
                </p>
            </div>
            <div class="col-12 text-center mt-5 col-lg-4">
                <img src="../img/startzup_logo.png" alt="" class="img-fluid mb-lg-3" width="150">
                <p class="fs-2">Partenaire Start ZUP</p>
                <p class="">Écosystème du numérique
                    spécialisé dans le
                    développement d'applications
                    WEB, avec une expertise en
                    Intelligence Artificielle et
                    Cybersécurité.
                </p>
            </div>
        </div>

        <!--END PRESENTATION-->

        <!--POURQUOI VIEVA-->

        <div class="row mt-5 mb-5">
            <div class="col-lg-12 text-uppercase text-center fs-1 mb-5">pourquoi vieva connect?</div>
            <!--CARD 1-->
            <div class="col-12 col-lg-4">
                <div class="card">
                    <img src="../img/Problem.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">La problèmatique</h5>
                        <p class="card-text">Le sujet est de lutter contre l'isolement des personnes âgées en France en uti... </p>
                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#text_prob" aria-expanded="false" aria-controls="text_prob">
                            Lire la suite
                        </button>

                        <!--CARD 1 HIDDEN TEXT-->

                        <div class="collapse" id="text_prob">
                            <div class="col-12">
                                Le sujet est de lutter contre l'isolement des personnes âgées en France en utilisant la technologie
                                numérique.<br/> Le projet développé par VieVa Connect est une application intuitive qui facilite la
                                communication avec les personnes âgées, favorisant ainsi leur engagement social et réduisant les
                                risques pour la santé.<br>
                                Cette application vise à favoriser l'engagement social au sein de la population âgée, en réduisant les
                                risques pour la santé associés à l'isolement. En fournissant une plateforme de communication facile
                                et pratique, l'application aide les personnes âgées à rester en contact avec leurs proches et leur
                                communauté, améliorant ainsi leur bien-être général.
                                Cette tendance reflète la reconnaissance croissante de l'importance du lien social pour les
                                personnes âgées et le potentiel de la technologie numérique pour résoudre ce problème.
                                Alors que la population mondiale des personnes âgées continue de croître, des solutions innovantes
                                comme VieVa Connect sont essentielles pour relever les défis du vieillissement et promouvoir un sens
                                de la communauté chez les personnes âgées.
                            </div>
                        </div>

                        <!--END CARD 1 HIDDEN TEXT-->

                    </div>
                </div>
            </div>
            <!--CARD 2-->
            <div class="col-12 col-lg-4">
                <div class="card">
                    <img src="../img/chiffres.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Quelques chiffres</h5>
                        <p class="card-text"> 900 000 Français de plus de 60 ans sont isolés de leur cercle familial et
                            amic...</p>
                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#text_chiffres" aria-expanded="false" aria-controls="collapseExample">
                            Lire la suite
                        </button>

                        <!--CARD 2 HIDDEN TEXT-->

                        <div class="collapse" id="text_chiffres">
                            <div class="card card-body">
                                1- 900 000 Français de plus de 60 ans sont isolés de leur cercle familial et
                                amical.<br />
                                2- 20% des seniors déclarent ne parler à personnes pendant plusieurs jours<br />
                                3- 1ère préoccupation des + de 60 ans : Garder le contact avec leurs proches<br />
                                4- 31% des + de 60 ans utilisent rarement les outils internet<br />
                                5- En 2050, la France comptera plus de 24 millions de personnes âgées de
                                plus de 60 ans.
                            </div>
                        </div>

                        <!--END CARD 2 HIDDEN TEXT-->

                    </div>
                </div>
            </div>
            <!--CARD 3-->
            <div class="col-12 col-lg-4">
                <div class="card">
                    <img src="../img/motivation.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Genèse et motivation</h5>
                        <p class="card-text">Pendant la crise de la COVID-19, nous avons été obligés d'isoler nos pare...</p>
                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#text_motivations" aria-expanded="false" aria-controls="collapseExample">
                            Lire la suite
                        </button>

                        <!--CARD 3 HIDDEN TEXT-->

                        <div class="collapse" id="text_motivations">
                            <div class="card card-body">
                                Pendant la crise de la COVID-19, nous avons été obligés d'isoler nos parents seuls dans des
                                appartements afin de n'avoir aucun contact extérieur avant le déploiement du vaccin.
                                Nous avons été confrontés nous même avec la maladie de notre mère à cette situation compliquée.
                                Malheureusement, aucun outil adapté simple et fonctionnel n'a permis de répondre sereinement à
                                cette problématique.
                                C'est pour répondre à ce besoin que nous avons créé VieVa Connect - Une application de
                                visioconférence pour les séniors, conçue pour lutter contre l'isolement en facilitant la communication
                                via la télévision.
                                Après la liquidation judiciaire de mon entreprise liée elle aussi à la crise du COVID, nous avons décidé
                                avec mon épouse de nous réorienter professionnellement et de nous consacrer à 200% sur ce
                                projet. </div>
                        </div>

                        <!--END CARD 3 HIDDEN TEXT-->

                    </div>
                </div>
            </div>
        </div>
        <!--END POURQUOI VIEVA-->

        <!-- ATOUTS-->

        <div class="row">
            <div class="col-lg-12 text-uppercase text-center fs-1 mb-5">nos atouts</div>
            <div class="col-lg-4 text-center">
                <img src="../img/connection.png" alt="" class="img-fluid">
            </div>
            <div class="col-12 col-lg-4 mt-lg-5">
                <div class="card ">
                    <div class="card-body">
                        <h5 class="card-title">Communication Simplifiée</h5>
                        <p class="card-text">" VieVa Connect " offre une expérience
                            simplifié des appels en
                            Visioconférence, l'échange de vidéos,
                            de photos et de messages via un boîtier
                            connecté à la télévision, nécessitants
                            aucune connaissances technique
                            préalable par les séniors</p>
                    </div>
                </div>
            </div>
            <div class="col col-12 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Installation Intuitive</h5>
                        <p class="card-text">Une expérience utilisateur simplifiée au
                            maximum, une installation en quelques
                            minutes pour une prise en main intuitive.</p>
                    </div>
                </div>
            </div>
        </div>
        <!--END ATOUTS-->


    </div>

    <!-- FOOTER -->
    <?php include "./partiels/footer.php" ?>
    <!-- END FOOTER -->

    <!--SCRIPT-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <!--END SCRIPT-->

</body>

</html>