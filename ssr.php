

<?php session_start()?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="projet.css">
    <script src="projet.js"></script>
    <title>SSR WOB!</title>
</head>

<body class="" style="background-color:#6D4D29;">
    

<header>
    <nav class="navbar navbar-expand-lg shadow fixed-top" style="background-color:#7D5421;">
        <div class="container-fluid ">
          <a class="navbar-brand" href="./Page_accueil_projet/Page_accueil.php"><img src="img/Type_avion/vieil-avion2.png" class="shadow ms-5" style="width:50px; " alt="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" aria-controls="navbarNav" data-bs-target="#navbarNav"  aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="">
               <a href="projet.php" data-toggle="tooltip" data-placement="bottom" title="Retour vers page d'accueil"><div class=" bg-transparent " style="content: url(img/icon-avion-cote.webp);width:70px;height: 70px; "></div></a>
            </div>
            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
              <ul class="navbar-nav mx-2 my-2 my-lg-0 ">
                <li class="nav-item mx-2" ><a class="nav-link active text-decoration-none fw-lighter link-light spacingLetter text-uppercase" href="projet.php#recherche d'informations"  data-toggle="tooltip" data-placement="bottom" title="Recherche code Apt, code Cie,fuseau horaire,TravelDoc ...">Informations</a></li>
                <li class="nav-item mx-2" ><a class="nav-link active text-decoration-none fw-lighter link-light spacingLetter text-uppercase" href="./marchandises_dangereuses.php"  data-toggle="tooltip" data-placement="bottom" title="Recherche marchandises en soute ou cabine...">Marchandises Dangereuses</a></li>
                <li class="nav-item mx-2 "><a class="nav-link text-decoration-none fw-lighter link-light spacingLetter text-uppercase" href="projet.php#vols en temps réel" data-toggle="tooltip" data-placement="bottom" title="Recherche vol en temps réel">Vols en temps réel</a></li>
                <li class="nav-item mx-2 "><a class="nav-link text-decoration-none fw-lighter link-light spacingLetter text-uppercase" href="projet.php#météo" data-toggle="tooltip" data-placement="bottom" title="Carte météo">météo</a></li>
                <li class="nav-item mx-2 "><a class="nav-link text-decoration-none fw-lighter link-light spacingLetter text-uppercase" href="projet.php#plan" data-toggle="tooltip" data-placement="bottom" title="Plan avec Google plan">Plan</a></li>
                <li class="nav-item mx-2 dropdown">
                  <a class="nav-link dropdown-toggle text-decoration-none link-light spacingLetter text-uppercase fw-lighter" href="#" role="button" id="dropdownMenuButtonDark" data-bs-toggle="dropdown" data-toggle="tooltip" data-placement="top" title="Liens vers sites AF,AMP,SNCF..."aria-expanded="false">Liens utiles</a>
                  <ul class="dropdown-menu opacity-100 bg-body-light" data-bs-theme="dark" aria-labelledby="dropdownMenuButtonDark" style="">
                      <li><a class="dropdown-item spacingLetter text-uppercase fw-lighter" href="https://wwws.airfrance.fr/" target="_blank">Air France </a></li>
                      <li><a class="dropdown-item spacingLetter text-uppercase fw-lighter" href="https://www.marseille.aeroport.fr/" target="_blank">Aéroport MP </a></li>
                      <li><a class="dropdown-item spacingLetter text-uppercase fw-lighter" href="https://www.sncf.com/fr" target="_blank">Sncf </a></li>
                      <li><a class="dropdown-item spacingLetter text-uppercase fw-lighter" href="https://fr.mappy.com/itineraire" target="_blank">Mappy </a></li>
                  </ul>
                </li>
                <li class="nav-item mx-2"><a href="./Histoire.php" class="nav-link text-decoration-none fw-lighter link-light spacingLetter text-uppercase " type="application/pdf" data-toggle="tooltip" data-placement="bottom" title="Histoire de l'aviation">Histoire</a></li>
                <li class="nav-item mx-2"><a href="./Blog/connect.php" class="nav-link text-decoration-none  fw-lighter link-light spacingLetter text-uppercase"  data-toggle="tooltip" data-placement="bottom" title="Consultation,connexion au LE BLOG">LE Blog</a></li>
              </ul>
            </div>
        </div>
     </nav>
  </header>

<div class="" style="height: 100px;">

</div>

<body>



    <section>
        <div class=" mt-5 mb-5">
            <h2 class="text-center text-uppercase fw-light text-white-50 text-decoration-underline">Remarques & Services Spéciaux</h2>
        </div>    
    </section>




    <div class="form-group d-flex mt-5 mb-5 justify-content-center placeholder-glow">
      <input type="text" class="form-control w-25 me-5 bg-transparent fw-lighter placeholder text-center text-white"  id="ssrInput" onkeyup="ssrFunction()" placeholder=" Recherche par mot-clé">
    </div>

    <section class="table-responsive fw-lighter  align-middle mx-5">
    <table id="ssrTable" class="table caption-top table-hover table-dark">
      <caption class="text-center text-uppercase fw-lighter text-secondary">Special Service Requests</caption>
      <thead>
        <tr>
          <th class="text-center fw-lighter text-uppercase" scope="col">Code</th>
          <th  class="text-center fw-lighter text-uppercase pe-5" scope="col">Descriptions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">ACKI</span></td>
          <td> Automated Check-In</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"><span class="text-warning">ADTK </span></td>
          <td> Indiquer si le billet est entré (le PNR sera placé dans la file d'appel 1, catégorie 6 du bureau responsable)</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"><span class="text-warning">AOXY </span></td>
          <td> Airline Supplied Oxygen</td>
        </tr>
        <tr>
            <td class="text-center" scope="row"><span class="text-warning">AVIH </span></td>
          <td> Animal en soute (indiquer nombre, type et pedigree ainsi que poids et dimensions du conteneur)</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">AVIH</span></td>
          <td>Animal in Hold </td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">AVML</span></td>
          <td> Repas hindou végétarien</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"><span class="text-warning"> AVML</span></td>
          <td>Vegetarian Hindu meal </td>
        </tr>
        <tr>
          <td class="text-center" scope="row"><span class="text-warning"> BBML</span></td>
          <td> Repas pour bébé</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"><span class="text-warning"> BBML</span></td>
          <td> Baby meal</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">BIKE</span></td>
          <td> Vélo en soute, préciser le numéro (voir ci-dessous)</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"><span class="text-warning">BIKE</span></td>
          <td> Bicycle</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">BLML</span></td>
          <td> Repas Bland</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"><span class="text-warning">BLML </span></td>
          <td> Bland meal</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">BLND</span></td>
          <td> Passager aveugle (indiquer si chien guide ou non)</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">BLND</span></td>
          <td> Blind Passenger</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">BSCT</span></td>
          <td>Berceau/landeau/couffin pour bébé</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">BSCT</span></td>
          <td> Bassinet/carrycot/baby basket</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">BULK</span></td>
          <td> Bagages encombrants (préciser nombre, poids et dimensions)</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">BULK</span></td>
          <td> Bulky Baggage</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">CBBG</span></td>
          <td>Bagage cabine nécessitant des sièges (indiquer nombre, poids et dimensions) </td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">CBBG</span></td>
          <td> Cabin Baggage</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">CHLD</span></td>
          <td>Enfant </td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">CHLD</span></td>
          <td> Child</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">CHML</span></td>
          <td>Repas pour enfants </td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">CHML</span></td>
          <td> Child meal</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">CKIN</span></td>
          <td>Informations destinées au personnel de l'aéroport </td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">CLID</span></td>
          <td> Code client d'entreprise utilisé par tous les GDS</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">CLID</span></td>
          <td> Client Identification</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">COUR</span></td>
          <td> Coursier commercial (indiquer poids et coursier)</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">COUR</span></td>
          <td> Courier</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">CRUZ</span></td>
          <td> Passager de croisière</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">CRUZ</span></td>
          <td> Cruise Passenger</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">CTCE</span></td>
          <td> Passenger contact information e-mail address</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">CTCM</span></td>
          <td> Passenger contact information mobile phone number</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">CTCR</span></td>
          <td> Passenger contact information refused</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"><span class="text-warning"> DBML</span></td>
          <td> Repas pour diabétiques</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">DBML</span></td>
          <td>Diabetic meal </td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">DCRW</span></td>
          <td> Crew Booking</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">DEAF</span></td>
          <td> Passager sourd (indiquer si la personne est accompagnée par un chien-guide)</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">DEAF</span></td>
          <td>Deaf Passenger </td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">DEPA</span></td>
          <td>Déporté sous escorte </td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">DEPA</span></td>
          <td> Deportee—accompanied by an escort</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">DEPU</span></td>
          <td> Déporté non accompagné</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"><span class="text-warning">DEPU </span></td>
          <td> Deportee—unaccompanied</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">DOCA</span></td>
          <td> Détails de l'adresse du système d'informations préalables sur les passagers (APIS)</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">DOCA</span></td>
          <td> API—Passenger Address Information</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"><span class="text-warning"> DOCO</span></td>
          <td> Visa du système d'informations préalables sur les passagers (APIS)</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">DOCO</span></td>
          <td> API—Passenger Other Supplementary Information</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">DOCS</span></td>
          <td>Carte d'identité ou passeport du Système d'informations préalables sur les passagers (API)</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">DOCS</span></td>
          <td> API—Passenger Travel Document</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"><span class="text-warning">DPNA </span></td>
          <td> Passager handicapé moteur ou mental nécessitant une aide</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"><span class="text-warning">DPNA </span></td>
          <td> Disabled passenger with intellectual or developmental disability needing assistance</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">EPAY</span></td>
          <td> Paiement ELECTRONIQUE pour transporteurs sans billet</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"><span class="text-warning">EPAY </span></td>
          <td> Electronic Payment Authorisation</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"><span class="text-warning">ESAN </span></td>
          <td> Passager avec soutien émotionnel/assistance psychiatrique ou animal en cabine</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"><span class="text-warning"> ESAN</span></td>
          <td> Passenger with Emotional Support/Psychiatric Assistance Animal in Cabin</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"><span class="text-warning">EXST </span></td>
          <td> Siège supplémentaire</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">EXST</span></td>
          <td> Extra seat</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">FOID</span></td>
          <td> Forme de pièce d'identité</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">FOID</span></td>
          <td> Form of Identification</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">FPML</span></td>
          <td> Plat de fruits</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">FPML</span></td>
          <td> Fruit Platter meal</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"><span class="text-warning">FQTR </span></td>
          <td> Remboursement du programme de fidélisation</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"><span class="text-warning">FQTR </span></td>
          <td> Frequent traveller award redemption journey</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">FQTS</span></td>
          <td> Demande de service de carte de fidélité</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">FQTS</span></td>
          <td> Frequent traveller service benefit information</td>
        </tr><tr>
          <td class="text-center" scope="row"> <span class="text-warning">FQTU</span></td>
          <td> Mise à niveau de la carte de fidélité et comptabilité d'exercice</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">FQTU</span></td>
          <td> Frequent traveler requesting redemption for upgrade at the same time as obtaining accrual</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"><span class="text-warning">FQTV</span></td>
          <td>Accumulation du programme de kilométrage de la carte de fidélité </td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">FQTV</span></td>
          <td> Frequent traveller mileage program information</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">FRAG</span></td>
          <td>Bagage fragile (indiquer nombre, poids et dimensions) </td>
        </tr>
        <tr>
          <td class="text-center" scope="row"><span class="text-warning"> FRAG</span></td>
          <td> Fragile Baggage</td>
        </tr><tr>
          <td class="text-center" scope="row"><span class="text-warning"> FRAV</span></td>
          <td>Premier disponible </td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">GFML</span></td>
          <td> Repas intolérant au gluten</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">GFML</span></td>
          <td> Gluten intolerant</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"><span class="text-warning"> GPST</span></td>
          <td> Demande de siège groupe (indiquer nombre et emplacement préféré)</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"><span class="text-warning">GPST </span></td>
          <td> Group Seat Request</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"><span class="text-warning">GRPF </span></td>
          <td> Tarif de groupe (précisez le code du tarif)</td>
        </tr><tr>
          <td class="text-center" scope="row"> <span class="text-warning">GRPS</span></td>
          <td> Passagers voyageant ensemble en utilisant une identité commune</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">GRPS</span></td>
          <td> Passenger travelling together over one or more segments utilising a common identity assigned by the booking Member</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">GSTA</span></td>
          <td> Goods and Services Tax Business Address</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">GSTE</span></td>
          <td> Goods and Services Tax Business E-mail</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">GSTN</span></td>
          <td> Goods and Services Tax Number</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"><span class="text-warning"> GSTP</span></td>
          <td> Goods and Services Tax Business Phone Number(s)</td>
        </tr><tr>
          <td class="text-center" scope="row"> <span class="text-warning">HNML</span></td>
          <td> Repas hindou</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"><span class="text-warning"> HNML</span></td>
          <td> Hindu meal</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">HRIC</span></td>
          <td> Human Remains in Cabin</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">INAD</span></td>
          <td> Inadmissible Passenger</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"><span class="text-warning"> INFT</span></td>
          <td> Bébé (préciser nom et date de naissance)</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">INFT</span></td>
          <td> Infant</td>
        </tr><tr>
          <td class="text-center" scope="row"> <span class="text-warning">JPML</span></td>
          <td> Repas japonais (spécifique LH - besoin association compagnie aérienne)</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"><span class="text-warning">KSML</span></td>
          <td> Repas casher</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">KSML</span></td>
          <td> Kosher meal</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"><span class="text-warning">LANG</span></td>
          <td> Langues parlées</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"><span class="text-warning">LANG </span></td>
          <td> Specify language(s) spoken</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"><span class="text-warning">LCML </span></td>
          <td> Repas faible en calories</td>
        </tr><tr>
          <td class="text-center" scope="row"><span class="text-warning">LCML</span></td>
          <td> Low calorie meal</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"><span class="text-warning">LFML </span></td>
          <td>Repas à faible teneur en matières grasses </td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">LFML</span></td>
          <td>Low fat meal </td>
        </tr>
        <tr>
          <td class="text-center" scope="row"><span class="text-warning">LSML </span></td>
          <td> Repas à faible teneur en sel</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">LSML</span></td>
          <td> Low salt meal</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">MAAS</span></td>
          <td> Service d'assistance (préciser détails tels que personne âgée, passager handicapé ou femme enceinte)</td>
        </tr><tr>
          <td class="text-center" scope="row"> <span class="text-warning">MAAS</span></td>
          <td> Meet and assist</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">MEDA</span></td>
          <td> Valise médicale (pour les passagers invalides nécessitant des soins particuliers : suivre la procédure IATA MEDA)</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">MEQT</span></td>
          <td> Medical Equipment</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">MOML</span></td>
          <td> Repas musulman</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"><span class="text-warning">MOML </span></td>
          <td> Moslem meal</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">NAME</span></td>
          <td> Nom (lorsque la compagnie aérienne effectue les réservations sous un autre nom)</td>
        </tr><tr>
          <td class="text-center" scope="row"> <span class="text-warning">NFML</span></td>
          <td> Repas sans poisson (spécifique LH - doit être associé à une compagnie aérienne)</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"><span class="text-warning">NLML </span></td>
          <td> Repas à faible teneur en lactose</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">NLML</span></td>
          <td> Low lactose meal</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">NOML</span></td>
          <td>No meal </td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">NRSB</span></td>
          <td> Non-Revenue Standby Passenger</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"><span class="text-warning">NSSA </span></td>
          <td> Siège couloir non-fumeur</td>
        </tr><tr>
          <td class="text-center" scope="row"><span class="text-warning"> NSSB</span></td>
          <td> Siège non fumeur à côté d'une cloison</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"><span class="text-warning">NSST </span></td>
          <td> Siège non fumeur (numéro du siège éventuellement mentionné)</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"><span class="text-warning">NSSW </span></td>
          <td> Siège hublot non fumeur</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"><span class="text-warning"> OTHS</span></td>
          <td> Autre service non spécifié par un autre code SSR</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">PCTC</span></td>
          <td> Informations de contact en cas d'urgence pour le passager</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">PCTC</span></td>
          <td> Passenger emergency contact information</td>
        </tr><tr>
          <td class="text-center" scope="row"> <span class="text-warning">PDBG</span></td>
          <td> Prepaid baggage (chargeable)</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">PDCO</span></td>
          <td> Carbon Offset (chargeable)</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"><span class="text-warning">PDFF</span></td>
          <td>Frequent Flyer (chargeable) </td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">PDIE</span></td>
          <td> In-Flight Entertainment (chargeable)</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"><span class="text-warning">PDLG</span></td>
          <td>Lounge (chargeable) </td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">PDML</span></td>
          <td> Meal/beverage (chargeable)</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"><span class="text-warning">PDPT</span></td>
          <td> Pets (chargeable)</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">PDRO</span></td>
          <td> Rule override (chargeable)</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"><span class="text-warning">PDSB</span></td>
          <td> Standby (chargeable)</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">PDST</span></td>
          <td> Store (chargeable)</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">PDUG</span></td>
          <td> Upgrades (chargeable)</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">PDUM</span></td>
          <td> Unaccompanied Minor (Chargeable)</td>
        </tr><tr>
          <td class="text-center" scope="row"> <span class="text-warning">PETC</span></td>
          <td> Animal en cabine (indiquer nombre, type et pedigree ainsi que poids et dimensions du conteneur)</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"><span class="text-warning"> PETC</span></td>
          <td> Animal in Cabin</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">PICA</span></td>
          <td> Passager en garde à vue, accompagné</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"><span class="text-warning">PICU </span></td>
          <td> Passager en garde à vue non accompagné</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">POXY</span></td>
          <td> Passenger Own Oxygen</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">PPOC</span></td>
          <td> Personal Portable Oxygen Concentrator</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">RFTV</span></td>
          <td> Reason for Travel</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"><span class="text-warning"> RQST</span></td>
          <td> Demande de siège (indiquer numéro de siège ou préférence)</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">RVML</span></td>
          <td>Repas végétarien cru</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"><span class="text-warning">RVML </span></td>
          <td>Vegetarian raw meal </td>
        </tr>
        <tr>
          <td class="text-center" scope="row"><span class="text-warning"> SEAT</span></td>
          <td> Siège pré-réservé avec carte d'embarquement émise ou à émettre</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">SEAT</span></td>
          <td> Seat Request</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"><span class="text-warning">SEAT </span></td>
          <td> Pre-reserved seat requested</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">SEMN</span></td>
          <td> Matelot - Equipage du navire</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">SEMN</span></th>
          <td> Ship’s Crew—Seamen</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">SFML</span></td>
          <td> Repas de poisson</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">SFML</span></td>
          <td> Seafood meal</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">SLPR</span></td>
          <td> Lit/couchette en cabine</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">SLPR</span></td>
          <td> Berth/Bed in the cabin but excludes stretcher</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">SMSA</span></td>
          <td> Siège fumeur côté couloir</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">SMSB</span></td>
          <td>Siège fumeur, à côté d'une cloison</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">SMST</span></td>
          <td> Siège fumeur (numéro du siège spécifique éventuellement mentionné)</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"><span class="text-warning"> SMSW</span></td>
          <td>Siège hublot fumeur </td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">SPEQ</span></td>
          <td> Équipement de sport</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"><span class="text-warning">SPML </span></td>
          <td> Repas spécial (indiquer les aliments)</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">SPML</span></td>
          <td> Special meal</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">STCR</span></td>
          <td> Passager en civière</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">STCR</span></td>
          <td> Stretcher Passenger</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"><span class="text-warning">SVAN </span></td>
          <td> Passager avec animal d'assistance en cabine (spécifique LH )</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">SVAN</span></td>
          <td> Passenger with Service Animal in Cabin</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">TKNA</span></td>
          <td> Numéro de billet dans l'élément FA (automatiquement envoyé à la compagnie aérienne)</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">TKNC</span></td>
          <td> Transmission du numéro de billet</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">TKNE</span></td>
          <td> Numéro de billet électronique dans l'élément FA</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">TKNM</span></td>
          <td> Numéro de billet dans l'élément FH</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"><span class="text-warning"> TKTL</span></td>
          <td> Heure limite d'émission de billet (générée automatiquement);</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">TKTL</span></td>
          <td> Ticketing Time Limit</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">TLAC</span></td>
          <td> Time Limit Auto Cancel Exemption</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"><span class="text-warning">TWOV </span></td>
          <td> Transit ou transfert sans visa</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">TWOV</span></td>
          <td> Transit/transfer without Visa</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">UMNR</span></td>
          <td> Mineur non accompagné (préciser son âge)</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">UMNR</span></td>
          <td> Unaccompanied minor</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">VGML</span></td>
          <td> Repas végétarien végétalien</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"><span class="text-warning">VGML </span></td>
          <td> Vegetarian vegan meal</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"><span class="text-warning">VJML </span></td>
          <td> Repas végétarien Jaïn</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">VLML</span></td>
          <td> Repas végétarien (lait et oeufs)</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">VLML</span></td>
          <td> Vegetarian lacto-ovo meal</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"><span class="text-warning"> VOML</span></td>
          <td> Repas végétarien oriental</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"><span class="text-warning"> VOML</span></td>
          <td> Vegetarian oriental meal</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">WCBD</span></td>
          <td> Fauteuil roulant - pile sèche</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">WCBD</span></td>
          <td> Wheelchair - Non-spillable battery</td>
        </tr>
        <tr>
            <td class="text-center" scope="row"><span class="text-warning">WCBW </span></td>
          <td> Fauteuil roulant - pile liquide</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">WCBW</span></td>
          <td> Wheelchair - Wet cell battery</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"><span class="text-warning"> WCHC</span></td>
          <td> Fauteuil roulant - jusqu'au siège</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">WCHC</span></td>
          <td> Wheelchair - C for Cabin (Passenger totally immobile)</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">WCHR</span></td>
          <td> Fauteuil roulant - pour rampe</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">WCHR</span></td>
          <td> Wheelchair - R for Ramp (Passenger can ascend/descend steps and make own way to/from cabin seat but requires wheelchair for distance to/from aircraft)</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"><span class="text-warning">WCHS </span></td>
          <td> Fauteuil roulant - pour les escaliers</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"><span class="text-warning">WCHS</span></td>
          <td> Wheelchair - S for Stairs (Passenger cannot ascend/descend steps, but is able to make own way to/from cabin seat)</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">WCLB</span></td>
          <td> Wheelchair - Lithium ion battery</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">WCMP</span></td>
          <td> Fauteuil roulant - alimentation manuelle (transporteurs américains uniquement)</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"><span class="text-warning"> WCMP</span></td>
          <td> Wheelchair - Manual power</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">WCOB</span></td>
          <td> Fauteuil roulant - à bord</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">WCOB</span></td>
          <td> On-board Wheelchair (provided by airline)</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"><span class="text-warning">WEAP </span></td>
          <td> Armes blanches, armes à feu ou munitions transportées en tant que bagages enregistrés</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"><span class="text-warning">WEAP</span></td>
          <td> Weapon</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">XBAG</span></td>
          <td> Excédent de bagages (indiquer nombre, poids et dimensions)</td>
        </tr>
        <tr>
          <td class="text-center" scope="row"> <span class="text-warning">XBAG</span></td>
          <td> Excess baggage</td>
        </tr>
      </tbody>
    </table>
    </section>

</body>




<footer class="mx-5">
 <div class="" id="retour_bas_de_page" ></div>
     <div class="  shadow-lg">
         <div class="footer p-5 mt-5 ">
         </div>
         <div class="bg-dark band">
            <!--<a href="#retour_haut_de_page"> <img src="img/Type_avion/vieil-avion2.png" class=" position-absolute top-100 start-50 translate-middle shadow bg-transparent" style="width:50px; " alt="logo"></a>-->
             <nav class="nav nav-pills flex-sm-column flex-lg-row flex-column text-center pt-5 ">
               <a class="flex-sm-fill text-decoration-none  fw-lighter link-light spacingLetter text-uppercase boarding-text text-sm-center nav-link" aria-current="page" href="./A_propos.php">à propos</a>
               <a class="flex-sm-fill text-decoration-none  fw-lighter link-light spacingLetter text-uppercase boarding-text text-sm-center nav-link" href="contact.php">contact</a>
               <a class="flex-sm-fill text-decoration-none  fw-lighter link-light spacingLetter text-uppercase boarding-text text-sm-center nav-link" href="./Conditions.php">conditions</a>
               <a class="flex-sm-fill text-decoration-none  fw-lighter link-light spacingLetter text-uppercase boarding-text text-sm-center nav-link" href="./Mentions.php">mentions</a>
             </nav>
             <div class="container">
               <div class="row ">
                   <div class="col-lg-12 d-flex align-items-center">
                     <div class="col-lg-12 col-sm-10 col-10">
                       <div class="tiretAvion mb-3" style="background:linear-gradient(.25turn,#D4C792,#444444);height: 5px;"></div>
                     </div>
                     <div class="">
                     <a href="#"><div class="iconeTiretAvion bg-transparent" style="content: url(img/icon-avion-cote.webp);width: 70px;height: 70px;"></div></a>
                     </div>
                   </div>
                 </div>
               </div>                                    
             <div class="">
               <p class="text-center fw-lighter spacingLetter text-uppercase mb-5">2023 © WOB!</p>
             </div>
         </div>
     </div>
 </footer>
