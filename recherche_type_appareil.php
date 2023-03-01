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
    <title>Recherche Type d'appareil</title>
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



<section>
    <div class=" mt-5 mb-5">
        <h2 class="text-center text-uppercase fw-light text-white-50 text-decoration-underline">Types d'appareil</h2>
    </div>    
</section>


<div class="form-group d-flex mt-5 mb-5 justify-content-center placeholder-glow">
  <input type="text" class="form-control w-25 me-5 bg-transparent fw-lighter placeholder text-center text-white"  id="theInput" onkeyup="theFunction()" placeholder=" Recherche par mot-clé">
</div>

<section class="mx-5 table-responsive fw-lighter ">
    <table  id="theTable" class="table table-hover align-middle  stick">

        <div class="stick-child" >
          <thead class="">
            <tr class="border-dark">
              <th scope="col" colspan="3"class="text-end text-primary bg-dark"></th>
              <th scope="col"class="text-primary bg-dark text-center fw-lighter text-uppercase">wtc</th>
            </tr>
          </thead>
          <thead>
          <tr class="border-dark">
            <th scope="col"colspan="2"class="text-end text-success bg-dark"></th>
            <th scope="col" class="text-success bg-dark text-center fw-lighter text-uppercase text-nowrap">code icao</th>
            <th scope="col" class="text-primary bg-dark text-center fw-lighter">&nbsp ↓</th>
          </tr>
            </thead >
            <thead>
              <tr class="border-dark">
                <th scope="col" colspan="1"class="text-end text-info bg-dark "></th>
                <th scope="col" class="text-info bg-dark text-center fw-lighter text-uppercase text-nowrap"> code iata</th>
                <th scope="col" class=" text-success bg-dark text-center fw-lighter" >&nbsp↓</th>
                <th scope="col" class=" text-primary bg-dark text-center fw-lighter">&nbsp↓</th>
              </tr>
            </thead >
            <thead>
              <tr class="border-dark">
                <th scope="col" colspan="0"class="text-white bg-dark fw-lighter text-uppercase">types d'appareil</th>
                <th scope="col" class=" bg-dark  text-info text-center fw-lighter ">&nbsp↓</th>
                <th scope="col" class=" bg-dark  text-success text-center fw-lighter ">&nbsp↓</th>
                <th scope="col" class=" bg-dark  text-primary text-center fw-lighter ">&nbsp↓</th>
              </tr>
            </thead>
        </div>

          <tbody>
            <tr>
              <td class="col-lg-12 text-white-50"> <span class="text-warning">Fokker 100 </span></td>
              <td class="col-lg-2 text-info bg-dark text-center">100</td>
              <td class="col-lg-2 text-success bg-dark text-center">F100</td>
              <td class="col-lg-2 text-primary bg-dark text-center">M</td>
            </tr>
          </tbody>
        <tbody>
          <tr>
            <td class="col-lg-12 text-white-50"> <span class="text-warning"> BAe 146-100 Pax </span></td>
            <td class="col-lg-2 text-info bg-dark bg-dark text-center">141</td>
            <td class="col-lg-2 text-success bg-dark bg-dark text-center">B461</td>
            <td class="col-lg-2 text-primary bg-dark bg-dark text-center">M</td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td class="col-lg-12 text-white-50"><span class="text-warning">BAe 146-200 Pax </span></td>
            <td class="col-lg-2 text-info bg-dark text-center">142</td>
            <td class="col-lg-2 text-success bg-dark text-center">B462</td>
            <td class="col-lg-2 text-primary bg-dark text-center">M</td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td class="col-lg-12 text-white-50"> <span class="text-warning">BAe 146-300 Pax</span></td>
            <td class="col-lg-2 text-info bg-dark text-center">143</td>
            <td class="col-lg-2 text-success bg-dark text-center">B463</td>
            <td class="col-lg-2 text-primary bg-dark text-center">M</td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td class="col-lg-12 text-white-50"> <span class="text-warning">BAe 146 all Pax models</span></td>
            <td class="col-lg-2 tex-center text-info bg-dark text-center">146</td>
            <td class="col-lg-2 tex-center text-success bg-dark text-center"></td>
            <td class="col-lg-2 tex-center text-primary bg-dark text-center">M</td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td class="col-lg-12 text-white-50"><span class="text-warning">BAe 146 freighter(-100/200/300QT & QC)</span></td>
            <td class="col-lg-2 text-info bg-dark text-center">14F</td>
            <td class="col-lg-2 text-success bg-dark text-center"></td>
            <td class="col-lg-2 text-primary bg-dark text-center">M</td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td class="col-lg-12 text-white-50"><span class="text-warning">BAe 146 freighter(-100QT & QC)</span></td>
            <td class="col-lg-2 text-info bg-dark text-center">14X</td>
            <td class="col-lg-2 text-success bg-dark text-center">B461</td>
            <td class="col-lg-2 text-primary bg-dark text-center">M</td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td class="col-lg-12 text-white-50" ><span class="text-warning">BAe 146 freighter(-200QT & QC)</span></td>
            <td class="col-lg-2 text-info bg-dark text-center">14Y</td>
            <td class="col-lg-2 text-success bg-dark text-center">B462</td>
            <td class="col-lg-2 text-primary bg-dark text-center">M</td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td class="col-lg-12 text-white-50"><span class="text-warning">BAe 146 freighter(-300QT & QC)</span></td>
            <td class="col-lg-2 text-info bg-dark text-center">14Z</td>
            <td class="col-lg-2 text-success bg-dark text-center">B463</td>
            <td class="col-lg-2 text-primary bg-dark text-center">M</td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td class="col-lg-12 text-white-50"><span class="text-warning">Embraer E190-E2 </span></td>
            <td class="col-lg-2 text-info bg-dark text-center">290</td>
            <td class="col-lg-2 text-success bg-dark text-center">E290</td>
            <td class="col-lg-2 text-primary bg-dark text-center">M</td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td class="col-lg-12 text-white-50"><span class="text-warning">Embraer E195-E2 </span></td>
            <td class="col-lg-2 text-info bg-dark text-center">295</td>
            <td class="col-lg-2 text-success bg-dark text-center">E295</td>
            <td class="col-lg-2 text-primary bg-dark text-center">M</td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td class="col-lg-12 text-white-50"><span class="text-warning">Airbus A220-100 </span></td>
            <td class="col-lg-2 text-info bg-dark text-center">221 </td>
            <td class="col-lg-2 text-success bg-dark text-center">BCS1 </td>
            <td class="col-lg-2 text-primary bg-dark text-center">M</td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td class="col-lg-12 text-white-50"><span class="text-warning">Airbus A220-200 </span></td>
            <td class="col-lg-2 text-info bg-dark text-center">223 </td>
            <td class="col-lg-2 text-success bg-dark text-center">BCS3 </td>
            <td class="col-lg-2 text-primary bg-dark text-center">M</td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td class="col-lg-12 text-white-50"><span class="text-warning">Airbus A310 all pax models </span></td>
            <td class="col-lg-2 text-info bg-dark text-center">310 </td>
            <td class="col-lg-2 text-success bg-dark text-center">A310 </td>
            <td class="col-lg-2 text-primary bg-dark text-center">M</td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td class="col-lg-12 text-white-50"><span class="text-warning">Airbus A310-200 pax </span></td>
            <td class="col-lg-2 text-info bg-dark text-center">312 </td>
            <td class="col-lg-2 text-success bg-dark text-center">A310 </td>
            <td class="col-lg-2 text-primary bg-dark text-center">M</td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td class="col-lg-12 text-white-50" ><span class="text-warning">Airbus A310-300 pax </span></td>
            <td class="col-lg-2 text-info bg-dark text-center">313 </td>
            <td class="col-lg-2 text-success bg-dark text-center">A310 </td>
            <td class="col-lg-2 text-primary bg-dark text-center">M</td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td class="col-lg-12 text-white-50"><span class="text-warning">Airbus A318 </span></td>
            <td class="col-lg-2 text-info bg-dark text-center">318 </td>
            <td class="col-lg-2 text-success bg-dark text-center">A318 </td>
            <td class="col-lg-2 text-primary bg-dark text-center">M</td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td class="col-lg-12 text-white-50"><span class="text-warning">Airbus A319 Ceo</span></td>
            <td class="col-lg-2 text-info bg-dark text-center">319 </td>
            <td class="col-lg-2 text-success bg-dark text-center">A319 </td>
            <td class="col-lg-2 text-primary bg-dark text-center">M</td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td class="col-lg-12 text-white-50"><span class="text-warning">Airbus A310 Freighter </span></td>
            <td class="col-lg-2 text-info bg-dark text-center">31F </td>
            <td class="col-lg-2 text-success bg-dark text-center">A310 </td>
            <td class="col-lg-2 text-primary bg-dark text-center">M</td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td class="col-lg-12 text-white-50"><span class="text-warning">Airbus A319 Neo </span></td>
            <td class="col-lg-2 text-info bg-dark text-center">31N </td>
            <td class="col-lg-2 text-success bg-dark text-center">A19N </td>
            <td class="col-lg-2 text-primary bg-dark text-center">M</td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td class="col-lg-12 text-white-50"><span class="text-warning">Airbus A310-200 Freighter </span></td>
            <td class="col-lg-2 text-info bg-dark text-center">31X </td>
            <td class="col-lg-2 text-success bg-dark text-center">A310 </td>
            <td class="col-lg-2 text-primary bg-dark text-center">M</td>
          </tr>
        </tbody>
        

        
        <tbody>
          <tr>
            <td class="col-lg-12 text-white-50"><span class="text-warning">Airbus A310-300 Freighter </span></td>
            <td class="col-lg-2 text-info bg-dark text-center">31Y </td>
            <td class="col-lg-2 text-success bg-dark text-center">A310 </td>
            <td class="col-lg-2 text-primary bg-dark text-center">V</td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td class="col-lg-12 text-white-50"><span class="text-warning">Airbus A320-100/200 Ceo </span></td>
            <td class="col-lg-2 text-info bg-dark text-center">320 </td>
            <td class="col-lg-2 text-success bg-dark text-center">A320 </td>
            <td class="col-lg-2 text-primary bg-dark text-center"></td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td class="col-lg-12 text-white-50"><span class="text-warning">Airbus A321-100/200 Ceo </span></td>
            <td class="col-lg-2 text-info bg-dark text-center">321 </td>
            <td class="col-lg-2 text-success bg-dark text-center">A321 </td>
            <td class="col-lg-2 text-primary bg-dark text-center"></td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td class="col-lg-12 text-white-50"><span class="text-warning">Airbus A320-200 Ceo (Sharklets)</span></td>
            <td class="col-lg-2 text-info bg-dark text-center">32A </td>
            <td class="col-lg-2 text-success bg-dark text-center">A320 </td>
            <td class="col-lg-2 text-primary bg-dark text-center"></td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td class="col-lg-12 text-white-50"> <span class="text-warning">Airbus A318 (Sharkelts)</span></td>
            <td class="col-lg-2 text-info bg-dark  text-center">32C </td>
            <td class="col-lg-2 text-success bg-dark text-center">A318 </td>
            <td class="col-lg-2 text-primary bg-dark text-center"></td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td class="col-lg-12 text-white-50"><span class="text-warning">Airbus A319 Ceo (Sharklets) </span></td>
            <td class="col-lg-2 text-info bg-dark text-center">32D </td>
            <td class="col-lg-2 text-success bg-dark text-center"> A319 </td>
            <td class="col-lg-2 text-primary bg-dark text-center"> </td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td class="col-lg-12 text-white-50"><span class="text-warning">Airbus A320-200 Neo </span></td>
            <td class="col-lg-2 text-info bg-dark text-center">32N </td>
            <td class="col-lg-2 text-success bg-dark text-center">A20N </td>
            <td class="col-lg-2 text-primary bg-dark text-center"></td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td class="col-lg-12 text-white-50"><span class="text-warning"> Airbus A321-200 Neo </span></td>
            <td class="col-lg-2 text-info bg-dark text-center">32Q </td>
            <td class="col-lg-2 text-success bg-dark text-center">A21N </td>
            <td class="col-lg-2 text-primary bg-dark text-center"></td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td class="col-lg-12 text-white-50"><span class="text-warning"> Airbus A318/319/320/321 </sp</span></td>
            <td class="col-lg-2 text-info bg-dark text-center">32S </td>
            <td class="col-lg-2 text-success bg-dark text-center">n/a </td>
            <td class="col-lg-2 text-primary bg-dark text-center"></td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td class="col-lg-12 text-white-50"><span class="text-warning">Airbus A330 all models </span></td>
            <td class="col-lg-2 text-info bg-dark text-center">330 </td>
            <td class="col-lg-2 text-success bg-dark text-center">A330 </td>
            <td class="col-lg-2 text-primary bg-dark text-center"></td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td class="col-lg-12 text-white-50"><span class="text-warning">Airbus A330-200 </span></td>
            <td class="col-lg-2 text-info bg-dark text-center">332 </td>
            <td class="col-lg-2 text-success bg-dark text-center">A332 </td>
            <td class="col-lg-2 text-primary bg-dark text-center"></td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td class="col-lg-12 text-white-50"><span class="text-warning">Airbus A330-300 </span></td>
            <td class="col-lg-2 text-info bg-dark text-center">333 </td>
            <td class="col-lg-2 text-success bg-dark text-center">A333 </td>
            <td class="col-lg-2 text-primary bg-dark text-center"></td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td class="col-lg-12 text-white-50 fw-lighter"><span class="text-warning">Airbus A330-700 Beluga XL </span></td>
            <td class="col-lg-2 fw-lighter text-info bg-dark text-center"></td>
            <td class="col-lg-2 fw-lighter text-success bg-dark text-center">A337 </td>
            <td class="col-lg-2 fw-lighter text-primary bg-dark text-center"></td>
          </tr>
        </tbody>
        <tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Airbus A330-800 Neo </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">338 </td>
    <td class="col-lg-2 text-success bg-dark text-center">A338 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Airbus A330-900 Neo </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">339 </td>
    <td class="col-lg-2 text-success bg-dark text-center">A339</td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Airbus A330-200 Freighter </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">33X </td>
    <td class="col-lg-2 text-success bg-dark text-center">A332 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Airbus A340 all models </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">340 </td>
    <td class="col-lg-2 text-success bg-dark text-center">A340 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"> <span class="text-warning">Airbus A340-200 </span></td>
    <td class="col-lg-2 text-info bg-dark  text-center">342 </td>
    <td class="col-lg-2 text-success bg-dark text-center">A342 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Airbus A340-300 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">343  </td>
    <td class="col-lg-2 text-success bg-dark text-center"> A343 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"> </td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Airbus A340-500 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">345 </td>
    <td class="col-lg-2 text-success bg-dark text-center">A345 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> Airbus A340-600 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">346 </td>
    <td class="col-lg-2 text-success bg-dark text-center">A346 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> Airbus A350-1000 </sp</span></td>
    <td class="col-lg-2 text-info bg-dark text-center">351 </td>
    <td class="col-lg-2 text-success bg-dark text-center">A35K </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Airbus A350-900 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">359 </td>
    <td class="col-lg-2 text-success bg-dark text-center">A359 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Airbus A380 pax </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">380 </td>
    <td class="col-lg-2 text-success bg-dark text-center">A388</td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Airbus A380 Freighter </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">38F </td>
    <td class="col-lg-2 text-success bg-dark text-center"></td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50 fw-lighter"><span class="text-warning">Boeing 707-300 pax </span></td>
    <td class="col-lg-2 fw-lighter text-info bg-dark text-center">703 </td>
    <td class="col-lg-2 fw-lighter text-success bg-dark text-center">B703 </td>
    <td class="col-lg-2 fw-lighter text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Boeing 707/720 all pax models </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">707 </td>
    <td class="col-lg-2 text-success bg-dark text-center">n/a </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Boeing 707 Freighter </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">70F </td>
    <td class="col-lg-2 text-success bg-dark text-center">B703 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Boeing 707 Combi </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">70M </td>
    <td class="col-lg-2 text-success bg-dark text-center">B703 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Boeing 717 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">717 </td>
    <td class="col-lg-2 text-success bg-dark text-center">B712 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"> <span class="text-warning">Boeing 727-100 pax </span></td>
    <td class="col-lg-2 text-info bg-dark  text-center">721 </td>
    <td class="col-lg-2 text-success bg-dark text-center">B721 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Boeing 727-200 pax </span></td>
    <td class="col-lg-2 text-info bg-dark text-center"> 722 </td>
    <td class="col-lg-2 text-success bg-dark text-center">B722  </td>
    <td class="col-lg-2 text-primary bg-dark text-center"> </td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Boeing 727 all pax models </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">727 </td>
    <td class="col-lg-2 text-success bg-dark text-center">n/a </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Boeing 727-100 Mixed Configuration  </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">72B </td>
    <td class="col-lg-2 text-success bg-dark text-center">B721 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> Boeing 727-200 Mixed Configuration </sp</span></td>
    <td class="col-lg-2 text-info bg-dark text-center">72C </td>
    <td class="col-lg-2 text-success bg-dark text-center">B722 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Boeing 727 Freighter (-100/200) </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">72F </td>
    <td class="col-lg-2 text-success bg-dark text-center">n/a </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Boeing 727 Combi </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">72M </td>
    <td class="col-lg-2 text-success bg-dark text-center">n/a </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Boeing 727-200 Advanced pax </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">72S </td>
    <td class="col-lg-2 text-success bg-dark text-center">B722 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50 fw-lighter"><span class="text-warning">Boeing 727-200 (winglets) pax </span></td>
    <td class="col-lg-2 fw-lighter text-info bg-dark text-center">72W </td>
    <td class="col-lg-2 fw-lighter text-success bg-dark text-center">B721 </td>
    <td class="col-lg-2 fw-lighter text-primary bg-dark text-center"></td>
  </tr>
</tbody>




<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Boeing 727-100 Freighter </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">72X </td>
    <td class="col-lg-2 text-success bg-dark text-center">B721 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Boeing 727-200 Freighter </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">72Y </td>
    <td class="col-lg-2 text-success bg-dark text-center">B722 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Boeing 737-100 pax </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">731 </td>
    <td class="col-lg-2 text-success bg-dark text-center">B731 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Boeing 737-200 pax </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">732 </td>
    <td class="col-lg-2 text-success bg-dark text-center">B732 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"> <span class="text-warning">Boeing 737-300 pax </span></td>
    <td class="col-lg-2 text-info bg-dark  text-center">733 </td>
    <td class="col-lg-2 text-success bg-dark text-center">B733 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Boeing 737-400 pax </span></td>
    <td class="col-lg-2 text-info bg-dark text-center"> 734 </td>
    <td class="col-lg-2 text-success bg-dark text-center">B734  </td>
    <td class="col-lg-2 text-primary bg-dark text-center"> </td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Boeing 737-500 pax </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">735 </td>
    <td class="col-lg-2 text-success bg-dark text-center">B735 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> Boeing 737-600 pax </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">736 </td>
    <td class="col-lg-2 text-success bg-dark text-center">B736 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Boeing 737 all pax models  </sp</span></td>
    <td class="col-lg-2 text-info bg-dark text-center">737 </td>
    <td class="col-lg-2 text-success bg-dark text-center">n/a </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Boeing 737-800 pax </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">738 </td>
    <td class="col-lg-2 text-success bg-dark text-center">B738 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Boeing 737-900 pax </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">739 </td>
    <td class="col-lg-2 text-success bg-dark text-center">B739 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Boeing 737-300 (winglets) pax </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">73C </td>
    <td class="col-lg-2 text-success bg-dark text-center">B733 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50 fw-lighter"><span class="text-warning">Boeing 737-500 (winglets)pax </span></td>
    <td class="col-lg-2 fw-lighter text-info bg-dark text-center">73E </td>
    <td class="col-lg-2 fw-lighter text-success bg-dark text-center">B735 </td>
    <td class="col-lg-2 fw-lighter text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Boeing 737 all Freighter models </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">73F </td>
    <td class="col-lg-2 text-success bg-dark text-center">n/a </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Boeing 737-700 pax </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">73G </td>
    <td class="col-lg-2 text-success bg-dark text-center">B737 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Boeing 737-800 (winglets) pax </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">73H </td>
    <td class="col-lg-2 text-success bg-dark text-center">B738 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Boeing 737-900 (winglets) pax </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">73J </td>
    <td class="col-lg-2 text-success bg-dark text-center">B739 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"> <span class="text-warning">Boeing 737-200 Combi </span></td>
    <td class="col-lg-2 text-info bg-dark  text-center">73L </td>
    <td class="col-lg-2 text-success bg-dark text-center">B732 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Boeing 737 Combi </span></td>
    <td class="col-lg-2 text-info bg-dark text-center"> 73M </td>
    <td class="col-lg-2 text-success bg-dark text-center"> n/a </td>
    <td class="col-lg-2 text-primary bg-dark text-center"> </td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Boeing 737-400 Freighter </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">73P </td>
    <td class="col-lg-2 text-success bg-dark text-center">B734 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Boeing 737-400 Combi  </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">73Q </td>
    <td class="col-lg-2 text-success bg-dark text-center">B734 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Boeing 737-700 Combi  </sp</span></td>
    <td class="col-lg-2 text-info bg-dark text-center">73R </td>
    <td class="col-lg-2 text-success bg-dark text-center">B737 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Boeing 737-700 (winglets) pax </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">73W </td>
    <td class="col-lg-2 text-success bg-dark text-center">B737 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Boeing 737-200 Freighter </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">73X </td>
    <td class="col-lg-2 text-success bg-dark text-center">B732 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Boeing 737-300 Freighter </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">73Y </td>
    <td class="col-lg-2 text-success bg-dark text-center">B733 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50 fw-lighter"><span class="text-warning">Boeing 747-100 pax </span></td>
    <td class="col-lg-2 fw-lighter text-info bg-dark text-center">741 </td>
    <td class="col-lg-2 fw-lighter text-success bg-dark text-center">B741 </td>
    <td class="col-lg-2 fw-lighter text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Boeing 747-200 pax </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">742 </td>
    <td class="col-lg-2 text-success bg-dark text-center">B742 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Boeing 747-300 pax </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">743 </td>
    <td class="col-lg-2 text-success bg-dark text-center">B743 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Boeing 747-400 pax </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">744 </td>
    <td class="col-lg-2 text-success bg-dark text-center">B744 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Boeing 747 all pax models </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">747 </td>
    <td class="col-lg-2 text-success bg-dark text-center">n/a </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"> <span class="text-warning">Boeing 747-8 pax </span></td>
    <td class="col-lg-2 text-info bg-dark  text-center">748 </td>
    <td class="col-lg-2 text-success bg-dark text-center">B748 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Boeing 747-400 Swingtail Freighter </span></td>
    <td class="col-lg-2 text-info bg-dark text-center"> 74B </td>
    <td class="col-lg-2 text-success bg-dark text-center">B744 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"> </td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Boeing 747-200 Combi </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">74C </td>
    <td class="col-lg-2 text-success bg-dark text-center">B742 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> Boeing 747-300 Combi </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">74D </td>
    <td class="col-lg-2 text-success bg-dark text-center">B743 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> Boeing 747-400 Combi </sp</span></td>
    <td class="col-lg-2 text-info bg-dark text-center">74E </td>
    <td class="col-lg-2 text-success bg-dark text-center">B744 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Boeing 747 all Freighter models </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">74F </td>
    <td class="col-lg-2 text-success bg-dark text-center">n/a </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Boeing 747-8I Passenger </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">74H </td>
    <td class="col-lg-2 text-success bg-dark text-center">n/a </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Boeing 747-400 (Domestic) pax </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">74J </td>
    <td class="col-lg-2 text-success bg-dark text-center">B744 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50 fw-lighter"><span class="text-warning">Boeing 747SP </span></td>
    <td class="col-lg-2 fw-lighter text-info bg-dark text-center">74L </td>
    <td class="col-lg-2 fw-lighter text-success bg-dark text-center">N74S </td>
    <td class="col-lg-2 fw-lighter text-primary bg-dark text-center"></td>
  </tr>
</tbody>






<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Boeing 747 all Combi models </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">74M </td>
    <td class="col-lg-2 text-success bg-dark text-center">n/a </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Boeing 747-8F </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">74N </td>
    <td class="col-lg-2 text-success bg-dark text-center">n/a </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Boeing 747SR pax </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">74R </td>
    <td class="col-lg-2 text-success bg-dark text-center">B74R </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Boeing 747-100 Freighter </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">74T </td>
    <td class="col-lg-2 text-success bg-dark text-center">B741 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"> <span class="text-warning">Boeing 747-300 / 747-200 SUD Freighter </span></td>
    <td class="col-lg-2 text-info bg-dark  text-center">74U </td>
    <td class="col-lg-2 text-success bg-dark text-center">B743 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Boeing 747SR Freighter </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">74V  </td>
    <td class="col-lg-2 text-success bg-dark text-center">B74R  </td>
    <td class="col-lg-2 text-primary bg-dark text-center"> </td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Boeing 747-200 Freighter </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">74X </td>
    <td class="col-lg-2 text-success bg-dark text-center">B742 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Boeing 747-400 Freighter  </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">74Y </td>
    <td class="col-lg-2 text-success bg-dark text-center">B744 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Boeing 757-200 pax  </sp</span></td>
    <td class="col-lg-2 text-info bg-dark text-center">752 </td>
    <td class="col-lg-2 text-success bg-dark text-center">B752 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Boeing 757-300 pax </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">753 </td>
    <td class="col-lg-2 text-success bg-dark text-center">B753 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Boeing 757 all pax models </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">757 </td>
    <td class="col-lg-2 text-success bg-dark text-center">n/a </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Boeing 757 Freighter </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">75F </td>
    <td class="col-lg-2 text-success bg-dark text-center">B752 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50 fw-lighter"><span class="text-warning">Boeing 757 Mixed Configuration </span></td>
    <td class="col-lg-2 fw-lighter text-info bg-dark text-center">75M </td>
    <td class="col-lg-2 fw-lighter text-success bg-dark text-center">B752 </td>
    <td class="col-lg-2 fw-lighter text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Boeing 757-300 (winglets) pax </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">75T </td>
    <td class="col-lg-2 text-success bg-dark text-center">B753 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Boeing 757-200 (winglets) pax </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">75W </td>
    <td class="col-lg-2 text-success bg-dark text-center">B752 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Boeing 767-200 pax </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">762 </td>
    <td class="col-lg-2 text-success bg-dark text-center">B762 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Boeing 767-300 pax </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">763 </td>
    <td class="col-lg-2 text-success bg-dark text-center">B763 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"> <span class="text-warning">Boeing 767-400 pax </span></td>
    <td class="col-lg-2 text-info bg-dark  text-center">764 </td>
    <td class="col-lg-2 text-success bg-dark text-center">B764 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Boeing 767 all pax models </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">767  </td>
    <td class="col-lg-2 text-success bg-dark text-center"> n/a </td>
    <td class="col-lg-2 text-primary bg-dark text-center"> </td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Boeing 767 all Freighter models </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">76F </td>
    <td class="col-lg-2 text-success bg-dark text-center">n/a </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> Boeing 767-300 (winglets) pax </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">76W </td>
    <td class="col-lg-2 text-success bg-dark text-center">B763 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> Boeing 767-300 (winglets) Freighter </sp</span></td>
    <td class="col-lg-2 text-info bg-dark text-center">76V </td>
    <td class="col-lg-2 text-success bg-dark text-center">B763 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Boeing 767-200 Freighter </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">76X </td>
    <td class="col-lg-2 text-success bg-dark text-center">B762 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Boeing 767-300 Freighter </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">76Y </td>
    <td class="col-lg-2 text-success bg-dark text-center">B763 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Boeing 777-200 pax </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">772 </td>
    <td class="col-lg-2 text-success bg-dark text-center">B772 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50 fw-lighter"><span class="text-warning">Boeing 777-300 pax </span></td>
    <td class="col-lg-2 fw-lighter text-info bg-dark text-center">773 </td>
    <td class="col-lg-2 fw-lighter text-success bg-dark text-center">B773 </td>
    <td class="col-lg-2 fw-lighter text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Boeing 777 all pax models </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">777 </td>
    <td class="col-lg-2 text-success bg-dark text-center">n/a </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Boeing 777 Freighter </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">77F </td>
    <td class="col-lg-2 text-success bg-dark text-center">n/a </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Boeing 777-200LR pax </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">77L </td>
    <td class="col-lg-2 text-success bg-dark text-center">B772 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Boeing 777-300ER pax </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">77W </td>
    <td class="col-lg-2 text-success bg-dark text-center">B77W</td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"> <span class="text-warning">Boeing 777-200 Freighter </span></td>
    <td class="col-lg-2 text-info bg-dark  text-center">77X </td>
    <td class="col-lg-2 text-success bg-dark text-center">B77L</td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Boeing 787-10 pax </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">781  </td>
    <td class="col-lg-2 text-success bg-dark text-center"> B78X </td>
    <td class="col-lg-2 text-primary bg-dark text-center"> </td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Boeing 787-8 pax </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">788 </td>
    <td class="col-lg-2 text-success bg-dark text-center">B788 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> Boeing 787-9 pax </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">789 </td>
    <td class="col-lg-2 text-success bg-dark text-center">B789 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> Boeing 737 MAX 7 pax </sp</span></td>
    <td class="col-lg-2 text-info bg-dark text-center">7M7 </td>
    <td class="col-lg-2 text-success bg-dark text-center">B37M </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Boeing 737 MAX 8 pax </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">7M8 </td>
    <td class="col-lg-2 text-success bg-dark text-center">B38M </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Boeing 737 MAX 9 pax </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">7M9 </td>
    <td class="col-lg-2 text-success bg-dark text-center">B39M </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Boeing 737 MAX 10 pax </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">7MJ </td>
    <td class="col-lg-2 text-success bg-dark text-center">B3XM </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50 fw-lighter"><span class="text-warning">Antonov AN-22 </span></td>
    <td class="col-lg-2 fw-lighter text-info bg-dark text-center">A22 </td>
    <td class="col-lg-2 fw-lighter text-success bg-dark text-center">AN22 </td>
    <td class="col-lg-2 fw-lighter text-primary bg-dark text-center"></td>
  </tr>
</tbody>







<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Antonov AN-26 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">A26 </td>
    <td class="col-lg-2 text-success bg-dark text-center">AN26 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Antonov AN-28 / PZL Miele M-28 Skytruck </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">A28 </td>
    <td class="col-lg-2 text-success bg-dark text-center">AN28 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Antonov AN-30 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">A30 </td>
    <td class="col-lg-2 text-success bg-dark text-center">AN30 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Antonov AN-32 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">A32 </td>
    <td class="col-lg-2 text-success bg-dark text-center">AN32 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"> <span class="text-warning">Antonov AN-38 </span></td>
    <td class="col-lg-2 text-info bg-dark  text-center">A38 </td>
    <td class="col-lg-2 text-success bg-dark text-center">AN38 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Antonov AN-140 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">A40  </td>
    <td class="col-lg-2 text-success bg-dark text-center">A140  </td>
    <td class="col-lg-2 text-primary bg-dark text-center"> </td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Antonov AN-124 Ruslan </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">A4F </td>
    <td class="col-lg-2 text-success bg-dark text-center">A124 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> Antonov AN-225 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">A5F </td>
    <td class="col-lg-2 text-success bg-dark text-center">A225 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> Antonov AN-148-100 </sp</span></td>
    <td class="col-lg-2 text-info bg-dark text-center">A81 </td>
    <td class="col-lg-2 text-success bg-dark text-center">A148 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Airbus Industrie A300 pax </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">AB3 </td>
    <td class="col-lg-2 text-success bg-dark text-center">A30B </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Airbus Industrie A300B2/B4/C4 pax </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">AB4 </td>
    <td class="col-lg-2 text-success bg-dark text-center">A30B </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Airbus Industrie A300-600 pax </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">AB6 </td>
    <td class="col-lg-2 text-success bg-dark text-center">A306 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50 fw-lighter"><span class="text-warning">Airbus Industrie A300-600ST Beluga Freighter </span></td>
    <td class="col-lg-2 fw-lighter text-info bg-dark text-center">ABB </td>
    <td class="col-lg-2 fw-lighter text-success bg-dark text-center">A3ST </td>
    <td class="col-lg-2 fw-lighter text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Airbus Industrie A300 Freighter </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">ABF </td>
    <td class="col-lg-2 text-success bg-dark text-center">A30B </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Airbus Industrie A300C4/F4 Freighter </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">ABX </td>
    <td class="col-lg-2 text-success bg-dark text-center">A30B </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Airbus Industrie A600-600 Freighter </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">ABY </td>
    <td class="col-lg-2 text-success bg-dark text-center">A306 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Gulfstream/Rockwell (Aero) Commander/Turbo Commander </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">ACD </td>
    <td class="col-lg-2 text-success bg-dark text-center">n/a</td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"> <span class="text-warning">Gulfstream/Rockwell (Aero) Commander </span></td>
    <td class="col-lg-2 text-info bg-dark  text-center">ACP </td>
    <td class="col-lg-2 text-success bg-dark text-center">AC68 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Gulfstream/Rockwell (Aero) Turbo Commander </span></td>
    <td class="col-lg-2 text-info bg-dark text-center"> ACT </td>
    <td class="col-lg-2 text-success bg-dark text-center"> AC90 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"> </td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Agusta A109 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">AGH </td>
    <td class="col-lg-2 text-success bg-dark text-center">A109 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> Ayres LM-200 Loadmaster </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">ALM </td>
    <td class="col-lg-2 text-success bg-dark text-center">LOAD </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Antonov AN-24  </sp</span></td>
    <td class="col-lg-2 text-info bg-dark text-center">AN4 </td>
    <td class="col-lg-2 text-success bg-dark text-center">AN24 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Antonov AN-26 / AN-30 /AN-32 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">AN6 </td>
    <td class="col-lg-2 text-success bg-dark text-center">n/a </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Antonov AN-72 / AN-74 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">AN7 </td>
    <td class="col-lg-2 text-success bg-dark text-center">AN72 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Antonov AN-12 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">ANF </td>
    <td class="col-lg-2 text-success bg-dark text-center">AN12 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50 fw-lighter"><span class="text-warning">Eurocopter (Aerospatiale) SA330 Puma / AS332 Super Puma </span></td>
    <td class="col-lg-2 fw-lighter text-info bg-dark text-center">APH </td>
    <td class="col-lg-2 fw-lighter text-success bg-dark text-center">n/a </td>
    <td class="col-lg-2 fw-lighter text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Avro RJ100 Avroliner </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">AR1 </td>
    <td class="col-lg-2 text-success bg-dark text-center">RJ1H </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Avro RJ70 Avroliner </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">AR7 </td>
    <td class="col-lg-2 text-success bg-dark text-center">RJ70 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Avro RJ85 Avroliner </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">AR8 </td>
    <td class="col-lg-2 text-success bg-dark text-center">RJ85 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Avro RJ70 / RJ85 / RJ100 Avroliner </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">ARJ </td>
    <td class="col-lg-2 text-success bg-dark text-center">n/a </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"> <span class="text-warning">Avro RJX85 / RJX100 </span></td>
    <td class="col-lg-2 text-info bg-dark  text-center">ARX </td>
    <td class="col-lg-2 text-success bg-dark text-center">n/a </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Aerospatiale/Alenia ATR 42-300 / 320 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center"> AT4 </td>
    <td class="col-lg-2 text-success bg-dark text-center">AT43</td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Aerospatiale/Alenia ATR 42-500 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">AT5 </td>
    <td class="col-lg-2 text-success bg-dark text-center">AT45 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> Aerospatiale/Alenia ATR 72 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">AT7 </td>
    <td class="col-lg-2 text-success bg-dark text-center">AT72 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Aerospatiale/Alenia ATR 42-400  </sp</span></td>
    <td class="col-lg-2 text-info bg-dark text-center">ATD </td>
    <td class="col-lg-2 text-success bg-dark text-center">AT44 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Aerospatiale/Alenia ATR 72 Freighter </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">ATF </td>
    <td class="col-lg-2 text-success bg-dark text-center">AT72 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">British Aerospace ATP </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">ATP </td>
    <td class="col-lg-2 text-success bg-dark text-center">ATP </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Aerospatiale/Alenia ATR 42/ ATR 72 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">ATR </td>
    <td class="col-lg-2 text-success bg-dark text-center">n/a </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50 fw-lighter"><span class="text-warning">Avro RJX100 </span></td>
    <td class="col-lg-2 fw-lighter text-info bg-dark text-center">AX1 </td>
    <td class="col-lg-2 fw-lighter text-success bg-dark text-center">RX1H </td>
    <td class="col-lg-2 fw-lighter text-primary bg-dark text-center"></td>
  </tr>
</tbody>







<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Avro RJX85 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">AX8 </td>
    <td class="col-lg-2 text-success bg-dark text-center">RX85 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">British Aerospace (BAC) One Eleven / RomBAC One Eleven </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">B11 </td>
    <td class="col-lg-2 text-success bg-dark text-center">BA11 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">British Aerospace (BAC) One Eleven 200 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">B12 </td>
    <td class="col-lg-2 text-success bg-dark text-center">BA11 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">British Aerospace (BAC) One Eleven 300 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">B13 </td>
    <td class="col-lg-2 text-success bg-dark text-center">BA11 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"> <span class="text-warning">British Aerospace (BAC) One Eleven 400/475 </span></td>
    <td class="col-lg-2 text-info bg-dark  text-center">B14 </td>
    <td class="col-lg-2 text-success bg-dark text-center">BA11 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">British Aerospace (BAC) One Eleven 500 / RomBAC One Eleven </span></td>
    <td class="col-lg-2 text-info bg-dark text-center"> B15 </td>
    <td class="col-lg-2 text-success bg-dark text-center"> BA11 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"> </td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Boeing 720B pax </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">B72 </td>
    <td class="col-lg-2 text-success bg-dark text-center">B720 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> Beechcraft 1900/1900C/1900D </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">BE1 </td>
    <td class="col-lg-2 text-success bg-dark text-center">B190 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Beechcraft twin piston engines  </sp</span></td>
    <td class="col-lg-2 text-info bg-dark text-center">BE2 </td>
    <td class="col-lg-2 text-success bg-dark text-center">n/a </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Beechcraft light aircraft </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">BEC </td>
    <td class="col-lg-2 text-success bg-dark text-center">n/a </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Beechcraft 1900D </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">BEH </td>
    <td class="col-lg-2 text-success bg-dark text-center">B190 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Beechcraft light aircraft - single engine </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">BEP </td>
    <td class="col-lg-2 text-success bg-dark text-center">n/a </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50 fw-lighter"><span class="text-warning">Beechcfrat 1900/1900C </span></td>
    <td class="col-lg-2 fw-lighter text-info bg-dark text-center">BES </td>
    <td class="col-lg-2 fw-lighter text-success bg-dark text-center">B190 </td>
    <td class="col-lg-2 fw-lighter text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Beechcraft light aircraft - twin turboprop engine </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">BET </td>
    <td class="col-lg-2 text-success bg-dark text-center">n/a </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Bell Helicopters </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">BH2 </td>
    <td class="col-lg-2 text-success bg-dark text-center">n/a </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Pilatus Britten-Norman BN-2A/B Islander </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">BNI </td>
    <td class="col-lg-2 text-success bg-dark text-center">BN2P </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Pilatus Britten-Norman BN-2A Mk III Trislander </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">BNT </td>
    <td class="col-lg-2 text-success bg-dark text-center">TRIS </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"> <span class="text-warning">Bus </span></td>
    <td class="col-lg-2 text-info bg-dark  text-center">BUS </td>
    <td class="col-lg-2 text-success bg-dark text-center">n/a </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">COMAC ARJ21 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center"> C27 </td>
    <td class="col-lg-2 text-success bg-dark text-center">AJ27  </td>
    <td class="col-lg-2 text-primary bg-dark text-center"> </td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">COMAC C919 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center"></td>
    <td class="col-lg-2 text-success bg-dark text-center">C919 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> Canadair Challenger </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">CCJ </td>
    <td class="col-lg-2 text-success bg-dark text-center">CL60 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> Canadair Global Express </sp</span></td>
    <td class="col-lg-2 text-info bg-dark text-center">CCX </td>
    <td class="col-lg-2 text-success bg-dark text-center">GLEX </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Government Aircraft Factories N22B / N24A Nomad </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">CD2 </td>
    <td class="col-lg-2 text-success bg-dark text-center">NOMA </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Canadair CL-44 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">CL4 </td>
    <td class="col-lg-2 text-success bg-dark text-center">CL44 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Cessna light aircraft - single piston engine </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">CN1 </td>
    <td class="col-lg-2 text-success bg-dark text-center">n/a </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50 fw-lighter"><span class="text-warning">Cessna light aircraft - twin piston engines </span></td>
    <td class="col-lg-2 fw-lighter text-info bg-dark text-center">CN2 </td>
    <td class="col-lg-2 fw-lighter text-success bg-dark text-center">n/a </td>
    <td class="col-lg-2 fw-lighter text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Cessna 750 Citation X </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">CN7 </td>
    <td class="col-lg-2 text-success bg-dark text-center">C750 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Cessna light aircraft </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">CNA </td>
    <td class="col-lg-2 text-success bg-dark text-center">n/a </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Cessna light aircraft - single turboprop engine </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">CNC </td>
    <td class="col-lg-2 text-success bg-dark text-center">n/a </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Cessna Citation </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">CNJ </td>
    <td class="col-lg-2 text-success bg-dark text-center">n/a </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"> <span class="text-warning">Cessna light aircraft - twin turboprop engines </span></td>
    <td class="col-lg-2 text-info bg-dark  text-center">CNT </td>
    <td class="col-lg-2 text-success bg-dark text-center">n/a </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Canadair Regional Jet 100 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center"> CR1 </td>
    <td class="col-lg-2 text-success bg-dark text-center"> CRJ1 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"> </td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Canadair Regional Jet 200 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">CR2 </td>
    <td class="col-lg-2 text-success bg-dark text-center">CRJ2 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> Canadair Regional Jet 700 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">CR7 </td>
    <td class="col-lg-2 text-success bg-dark text-center">CRJ7 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> Canadair Regional Jet 900 </sp</span></td>
    <td class="col-lg-2 text-info bg-dark text-center">CR9 </td>
    <td class="col-lg-2 text-success bg-dark text-center">CRJ9 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Canadair Regional Jet 705 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">CRA </td>
    <td class="col-lg-2 text-success bg-dark text-center">CRJ9 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Canadair Regional Jet Freighter </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">CRF </td>
    <td class="col-lg-2 text-success bg-dark text-center">n/a </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Canadair Regional Jet </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">CRJ </td>
    <td class="col-lg-2 text-success bg-dark text-center">n/a </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50 fw-lighter"><span class="text-warning">Canadair Regional Jet 1000 </span></td>
    <td class="col-lg-2 fw-lighter text-info bg-dark text-center">CRK </td>
    <td class="col-lg-2 fw-lighter text-success bg-dark text-center">CRJX </td>
    <td class="col-lg-2 fw-lighter text-primary bg-dark text-center"></td>
  </tr>
</tbody>






<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Aerospatiale (Sud Aviation) Se.210 Caravelle </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">CRV </td>
    <td class="col-lg-2 text-success bg-dark text-center">S210 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Bombardier C Series CS100 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">CS1 </td>
    <td class="col-lg-2 text-success bg-dark text-center">BCS1 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">CASA / IPTN 212 Aviocar </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">CS2 </td>
    <td class="col-lg-2 text-success bg-dark text-center">C212 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Bombardier C Series CS300 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">CS3 </td>
    <td class="col-lg-2 text-success bg-dark text-center">BCS3 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"> <span class="text-warning">CASA / IPTN CN-235 </span></td>
    <td class="col-lg-2 text-info bg-dark  text-center">CS5 </td>
    <td class="col-lg-2 text-success bg-dark text-center">CN35 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Convair CV-240 pax </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">CV2  </td>
    <td class="col-lg-2 text-success bg-dark text-center">CVLP  </td>
    <td class="col-lg-2 text-primary bg-dark text-center"> </td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Convair CV-440 Metropolitan pax </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">CV4 </td>
    <td class="col-lg-2 text-success bg-dark text-center">CVLP </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> Convair CV-580 pax </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">CV5 </td>
    <td class="col-lg-2 text-success bg-dark text-center">CVLT </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Convair CV-240 / 440 / 580 / 600 / 640 Freighter  </sp</span></td>
    <td class="col-lg-2 text-info bg-dark text-center">CVF </td>
    <td class="col-lg-2 text-success bg-dark text-center">n/a </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Convair CV-240 / 440 / 580 / 600 / 640 pax </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">CVR </td>
    <td class="col-lg-2 text-success bg-dark text-center">n/a </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Convair CV-240 Freighter </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">CVV </td>
    <td class="col-lg-2 text-success bg-dark text-center">CVLP </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Convair CV-440 Freighter </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">CVX </td>
    <td class="col-lg-2 text-success bg-dark text-center">CVLP </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50 fw-lighter"><span class="text-warning">Convair CV-580 / 600 / 640 Freighter </span></td>
    <td class="col-lg-2 fw-lighter text-info bg-dark text-center">CVY </td>
    <td class="col-lg-2 fw-lighter text-success bg-dark text-center">CVLT </td>
    <td class="col-lg-2 fw-lighter text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Curtiss C-46 Commando </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">CWC </td>
    <td class="col-lg-2 text-success bg-dark text-center">C46 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Douglas DC-10 pax </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">D10 </td>
    <td class="col-lg-2 text-success bg-dark text-center">DC10 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Douglas DC-10-10/15 pax </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">D11 </td>
    <td class="col-lg-2 text-success bg-dark text-center">DC10 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Douglas DC-10-30/40 pax </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">D1C </td>
    <td class="col-lg-2 text-success bg-dark text-center">DC10 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"> <span class="text-warning">Douglas DC-10 all Freighters </span></td>
    <td class="col-lg-2 text-info bg-dark  text-center">D1F </td>
    <td class="col-lg-2 text-success bg-dark text-center">DC10 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Douglas DC-10 all Combi models </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">D1M  </td>
    <td class="col-lg-2 text-success bg-dark text-center"> DC10 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"> </td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Douglas DC-10-10 Freighter </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">D1X </td>
    <td class="col-lg-2 text-success bg-dark text-center">DC10 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> Douglas DC-10-30 / 40 Freighters </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">D1Y </td>
    <td class="col-lg-2 text-success bg-dark text-center">DC10 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Fairchild Dornier Do.228  </sp</span></td>
    <td class="col-lg-2 text-info bg-dark text-center">D28 </td>
    <td class="col-lg-2 text-success bg-dark text-center">D228 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Fairchild Dornier Do.328 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">D38 </td>
    <td class="col-lg-2 text-success bg-dark text-center">D328 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Douglas DC-3 Freighter </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">D3F </td>
    <td class="col-lg-2 text-success bg-dark text-center">DC3 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Douglas DC-6A/B/C Freighter </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">D6F </td>
    <td class="col-lg-2 text-success bg-dark text-center">DC6 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50 fw-lighter"><span class="text-warning">Douglas DC-8 all Freighters </span></td>
    <td class="col-lg-2 fw-lighter text-info bg-dark text-center">D8F </td>
    <td class="col-lg-2 fw-lighter text-success bg-dark text-center">n/a </td>
    <td class="col-lg-2 fw-lighter text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Douglas DC-8-62 pax </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">D8L </td>
    <td class="col-lg-2 text-success bg-dark text-center">DC86 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Douglas DC-8 all Combi models </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">D8M </td>
    <td class="col-lg-2 text-success bg-dark text-center">n/a </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Douglas DC-8-72 pax </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">D8Q </td>
    <td class="col-lg-2 text-success bg-dark text-center">DC87 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Douglas DC-8-50 Freighter </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">D8T </td>
    <td class="col-lg-2 text-success bg-dark text-center">DC85 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"> <span class="text-warning">Douglas DC-8-61 / 62 / 63 Freighters </span></td>
    <td class="col-lg-2 text-info bg-dark  text-center">D8X </td>
    <td class="col-lg-2 text-success bg-dark text-center">n/a </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Douglas DC-8-71 / 72 / 73 Freighters </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">D8Y  </td>
    <td class="col-lg-2 text-success bg-dark text-center"> DC87 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"> </td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Douglas DC-9-10 pax </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">D91 </td>
    <td class="col-lg-2 text-success bg-dark text-center">DC91 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> Douglas DC-9-20 pax </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">D92 </td>
    <td class="col-lg-2 text-success bg-dark text-center">DC92 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> Douglas DC-9-30 pax </sp</span></td>
    <td class="col-lg-2 text-info bg-dark text-center">D93 </td>
    <td class="col-lg-2 text-success bg-dark text-center">DC93 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Douglas DC-9-40 pax </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">D94 </td>
    <td class="col-lg-2 text-success bg-dark text-center">DC94 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Douglas DC-9-50 pax </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">D95 </td>
    <td class="col-lg-2 text-success bg-dark text-center">DC95 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Douglas DC-9-30 Freighter </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">D9C </td>
    <td class="col-lg-2 text-success bg-dark text-center">DC93 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50 fw-lighter"><span class="text-warning">Douglas DC-9-40 Freighter </span></td>
    <td class="col-lg-2 fw-lighter text-info bg-dark text-center">D9D </td>
    <td class="col-lg-2 fw-lighter text-success bg-dark text-center">DC94 </td>
    <td class="col-lg-2 fw-lighter text-primary bg-dark text-center"></td>
  </tr>
</tbody>



<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Douglas DC-9 all Freighters </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">D9F </td>
    <td class="col-lg-2 text-success bg-dark text-center">n/a </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Douglas DC-9-10 Freighter </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">D9X </td>
    <td class="col-lg-2 text-success bg-dark text-center">DC91 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Douglas DC-3 pax </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">DC3 </td>
    <td class="col-lg-2 text-success bg-dark text-center">DC3 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Douglas DC-4 pax </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">DC4 </td>
    <td class="col-lg-2 text-success bg-dark text-center">DC4 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"> <span class="text-warning">Douglas DC6A/B pax </span></td>
    <td class="col-lg-2 text-info bg-dark  text-center">DC6 </td>
    <td class="col-lg-2 text-success bg-dark text-center">DC6 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Douglas DC-8 all pax models </span></td>
    <td class="col-lg-2 text-info bg-dark text-center"> DC8 </td>
    <td class="col-lg-2 text-success bg-dark text-center">n/a  </td>
    <td class="col-lg-2 text-primary bg-dark text-center"> </td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Douglas DC-9 all pax models </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">DC9 </td>
    <td class="col-lg-2 text-success bg-dark text-center">DC9 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Dassault (Breguet Mystere) Falcon 10 / 100 / 20 / 200 / 2000  </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">DF2 </td>
    <td class="col-lg-2 text-success bg-dark text-center">n/a </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Dassault (Breguet Mystere) Falcon 50 / 900  </sp</span></td>
    <td class="col-lg-2 text-info bg-dark text-center">DF3 </td>
    <td class="col-lg-2 text-success bg-dark text-center">n/a </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Dassault (Breguet Mystere) Falcon </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">DFL </td>
    <td class="col-lg-2 text-success bg-dark text-center">n/a </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">De Havilland Canada DHC-8-100 Dash 8 / 8Q </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">DH1 </td>
    <td class="col-lg-2 text-success bg-dark text-center">DH8A </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">De Havilland Canada DHC-8-200 Dash 8 / 8Q </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">DH2 </td>
    <td class="col-lg-2 text-success bg-dark text-center">DH8B </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50 fw-lighter"><span class="text-warning">De Havilland Canada DHC-8-300 Dash 8 / 8Q </span></td>
    <td class="col-lg-2 fw-lighter text-info bg-dark text-center">DH3 </td>
    <td class="col-lg-2 fw-lighter text-success bg-dark text-center">DH8C </td>
    <td class="col-lg-2 fw-lighter text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">De Havilland Canada DHC-8-400 Dash 8Q </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">DH4 </td>
    <td class="col-lg-2 text-success bg-dark text-center">DH8D </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">De Havilland Canada DHC-7 Dash 7 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">DH7 </td>
    <td class="col-lg-2 text-success bg-dark text-center">DHC7 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">De Havilland Canada DHC-8 Dash 8 all models </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">DH8 </td>
    <td class="col-lg-2 text-success bg-dark text-center">n/a </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">De Havilland Canada DHC-2 Beaver / Turbo Beaver </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">DHB </td>
    <td class="col-lg-2 text-success bg-dark text-center">n/a </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"> <span class="text-warning">De Havilland Canada DHC-4 Caribou </span></td>
    <td class="col-lg-2 text-info bg-dark  text-center">DHC </td>
    <td class="col-lg-2 text-success bg-dark text-center">DHC4 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">De Havilland DH.104 Dove </span></td>
    <td class="col-lg-2 text-info bg-dark text-center"> DHD </td>
    <td class="col-lg-2 text-success bg-dark text-center">DOVE  </td>
    <td class="col-lg-2 text-primary bg-dark text-center"> </td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">De Havilland DH.114 Heron </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">DHH </td>
    <td class="col-lg-2 text-success bg-dark text-center">HERN </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">De Havilland Canada DHC-3 Turbo Otter  </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">DHL </td>
    <td class="col-lg-2 text-success bg-dark text-center">DHC3 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">De Havilland Canada DHC-3 Otter / Turbo Otter  </sp</span></td>
    <td class="col-lg-2 text-info bg-dark text-center">DHO </td>
    <td class="col-lg-2 text-success bg-dark text-center">DHC3 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">De Havilland Canada DHC-2 Beaver </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">DHP </td>
    <td class="col-lg-2 text-success bg-dark text-center">DHC2 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">De Havilland Canada DHC-2 Turbo-Beaver </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">DHR </td>
    <td class="col-lg-2 text-success bg-dark text-center">DH2T </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">De Havilland Canada DHC-3 Otter </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">DHS </td>
    <td class="col-lg-2 text-success bg-dark text-center">DHC3 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50 fw-lighter"><span class="text-warning">De Havilland Canada DHC-6 Twin Otter </span></td>
    <td class="col-lg-2 fw-lighter text-info bg-dark text-center">DHT </td>
    <td class="col-lg-2 fw-lighter text-success bg-dark text-center">DHC6 </td>
    <td class="col-lg-2 fw-lighter text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Embraer 170 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">E70 </td>
    <td class="col-lg-2 text-success bg-dark text-center">E170 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Embraer 190 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">E90 </td>
    <td class="col-lg-2 text-success bg-dark text-center">E190 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Eurocopter EC.130 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">EC3 </td>
    <td class="col-lg-2 text-success bg-dark text-center">EC30 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Embraer 170 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">E70 </td>
    <td class="col-lg-2 text-success bg-dark text-center">E170 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"> <span class="text-warning">Embraer 175 (Short wing)</span></td>
    <td class="col-lg-2 text-info bg-dark  text-center">E75 </td>
    <td class="col-lg-2 text-success bg-dark text-center">E75S </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Embraer 175 (Long Wing)</span></td>
    <td class="col-lg-2 text-info bg-dark text-center">E75  </td>
    <td class="col-lg-2 text-success bg-dark text-center"> E75L </td>
    <td class="col-lg-2 text-primary bg-dark text-center"> </td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Embraer 190 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">E90 </td>
    <td class="col-lg-2 text-success bg-dark text-center">E190 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> Embraer 195 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">E95 </td>
    <td class="col-lg-2 text-success bg-dark text-center">E195 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> Embraer EMB.120 Brasilia </sp</span></td>
    <td class="col-lg-2 text-info bg-dark text-center">EM2 </td>
    <td class="col-lg-2 text-success bg-dark text-center">E120 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Embraer EMB.110 Bandeirnate </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">EMB </td>
    <td class="col-lg-2 text-success bg-dark text-center">E110 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Embraer 170/190 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">EMJ </td>
    <td class="col-lg-2 text-success bg-dark text-center">n/a </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Embraer RJ135 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">ER3 </td>
    <td class="col-lg-2 text-success bg-dark text-center">E135 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50 fw-lighter"><span class="text-warning">Embraer Legacy 600 / Legacy 650 </span></td>
    <td class="col-lg-2 fw-lighter text-info bg-dark text-center">ER3 </td>
    <td class="col-lg-2 fw-lighter text-success bg-dark text-center">E35L </td>
    <td class="col-lg-2 fw-lighter text-primary bg-dark text-center"></td>
  </tr>
</tbody>




<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Embraer RJ145 Amazon </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">ER4  </td>
    <td class="col-lg-2 text-success bg-dark text-center">E145  </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Embraer RJ140 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">ERD  </td>
    <td class="col-lg-2 text-success bg-dark text-center"> n/a </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Embraer RJ135 / RJ140 / RJ145  </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">ERJ  </td>
    <td class="col-lg-2 text-success bg-dark text-center"> n/a </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Fokker F.28 Fellowship 1000 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">F21 </td>
    <td class="col-lg-2 text-success bg-dark text-center">F28 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"> <span class="text-warning"> Fokker F.28 Fellowship 2000 </span></td>
    <td class="col-lg-2 text-info bg-dark  text-center">F22 </td>
    <td class="col-lg-2 text-success bg-dark text-center"> F28 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Fokker F.28 Fellowship 3000 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center"> F23  </td>
    <td class="col-lg-2 text-success bg-dark text-center">F28  </td>
    <td class="col-lg-2 text-primary bg-dark text-center"> </td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> Fokker F.28 Fellowship 4000 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">F24  </td>
    <td class="col-lg-2 text-success bg-dark text-center">F28 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> Fokker F.27 Friendship / Fairchild F.27  </span></td>
    <td class="col-lg-2 text-info bg-dark text-center"> F27 </td>
    <td class="col-lg-2 text-success bg-dark text-center">F27  </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Fokker F.28 Fellowship  </sp</span></td>
    <td class="col-lg-2 text-info bg-dark text-center">F28  </td>
    <td class="col-lg-2 text-success bg-dark text-center">F28 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Fokker 50 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">F50 </td>
    <td class="col-lg-2 text-success bg-dark text-center"> F50 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Fokker 50 Freighter  </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">F5F </td>
    <td class="col-lg-2 text-success bg-dark text-center"> F50 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Fokker 70  </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">F70 </td>
    <td class="col-lg-2 text-success bg-dark text-center">F70 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50 fw-lighter"><span class="text-warning">Fairchild Dornier 728JET  </span></td>
    <td class="col-lg-2 fw-lighter text-info bg-dark text-center"> FA7 </td>
    <td class="col-lg-2 fw-lighter text-success bg-dark text-center">n/a </td>
    <td class="col-lg-2 fw-lighter text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"Fairchild FH.227 ></span></td>
    <td class="col-lg-2 text-info bg-dark text-center">FK7 </td>
    <td class="col-lg-2 text-success bg-dark text-center">F27 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> Fairchild Dornier 328JET </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">FRJ </td> </td>
    <td class="col-lg-2 text-success bg-dark text-center"> J328 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> Grumman G.21 Goose </span></td>
    <td class="col-lg-2 text-info bg-dark text-center"> GRG </td>
    <td class="col-lg-2 text-success bg-dark text-center">G21 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Gulfstream Aerospace G-1159 Gulfstream II / III / IV / V  </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">GRJ  </td>
    <td class="col-lg-2 text-success bg-dark text-center">n/a</td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"> <span class="text-warning">Grumman G.73 Turbo Mallard  </span></td>
    <td class="col-lg-2 text-info bg-dark  text-center">GRM  </td>
    <td class="col-lg-2 text-success bg-dark text-center">G73T  </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Gulfstream Aerospace G-159 Gulfstream I  </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">GRS </td>
    <td class="col-lg-2 text-success bg-dark text-center"> G159 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"> </td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> British Aerospace (Hawker Siddeley) HS.125 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center"> H25 </td>
    <td class="col-lg-2 text-success bg-dark text-center"> n/a </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Helio H-250 Courier / H-295 / 385 Super Courier </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">HEC </td>
    <td class="col-lg-2 text-success bg-dark text-center"> COUC </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Hovercraft </sp</span></td>
    <td class="col-lg-2 text-info bg-dark text-center">HOV </td>
    <td class="col-lg-2 text-success bg-dark text-center"> n/a </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Hawker Siddeley HS.748  </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">HS7 </td>
    <td class="col-lg-2 text-success bg-dark text-center">A748  </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Ilyushin IL114 </span> </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">I14 </td>
    <td class="col-lg-2 text-success bg-dark text-center">I114 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> Ilyushin IL96-300 pax </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">I93  </td>
    <td class="col-lg-2 text-success bg-dark text-center">IL96 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50 fw-lighter"><span class="text-warning">Ilyushin IL96 Freighters </span></td>
    <td class="col-lg-2 fw-lighter text-info bg-dark text-center"> I9F </td>
    <td class="col-lg-2 fw-lighter text-success bg-dark text-center">IL96  </td>
    <td class="col-lg-2 fw-lighter text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Ilyushin IL96M pax  </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">I9M  </td>
    <td class="col-lg-2 text-success bg-dark text-center">IL96  </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> Ilyushin IL96-300 Freighter </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">I9X  </td>
    <td class="col-lg-2 text-success bg-dark text-center">IL96 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> Ilyushin IL96T Freighter </span></td>
    <td class="col-lg-2 text-info bg-dark text-center"> I9Y </td>
    <td class="col-lg-2 text-success bg-dark text-center">IL96 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> Ilyushin IL62 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">IL6 </td>
    <td class="col-lg-2 text-success bg-dark text-center"> IL62 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"> <span class="text-warning"> Ilyushin IL76 </span></td>
    <td class="col-lg-2 text-info bg-dark  text-center">IL7  </td>
    <td class="col-lg-2 text-success bg-dark text-center">IL76 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> Ilyushin IL18 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">IL8  </td>
    <td class="col-lg-2 text-success bg-dark text-center"> IL18  </td>
    <td class="col-lg-2 text-primary bg-dark text-center"> </td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> Ilyushin IL96 pax </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">IL9  </td>
    <td class="col-lg-2 text-success bg-dark text-center"> IL96 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> Ilyushin IL86  </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">ILW </td>
    <td class="col-lg-2 text-success bg-dark text-center">IL86 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> British Aerospace Jetstream 31  </sp</span></td>
    <td class="col-lg-2 text-info bg-dark text-center">J31  </td>
    <td class="col-lg-2 text-success bg-dark text-center">JS31 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">British Aerospace Jetstream 32 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">J32 </td>
    <td class="col-lg-2 text-success bg-dark text-center">JS32 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">British Aerospace Jetstream 41 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center"> J41 </td>
    <td class="col-lg-2 text-success bg-dark text-center"> JS41 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">British Aerospace Jetstream 31 / 32 / 41 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center"> JST </td>
    <td class="col-lg-2 text-success bg-dark text-center"> n/a </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50 fw-lighter"><span class="text-warning">Junkers Ju52/3M </span></td>
    <td class="col-lg-2 fw-lighter text-info bg-dark text-center">JU5  </td>
    <td class="col-lg-2 fw-lighter text-success bg-dark text-center"> JU52 </td>
    <td class="col-lg-2 fw-lighter text-primary bg-dark text-center"></td>
  </tr>
</tbody>







<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Lockheed L-1011 Tristar pax </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">L10  </td>
    <td class="col-lg-2 text-success bg-dark text-center"> L101 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> Lockheed L-1011 1 / 50 / 100 / 150 / 200 / 250 Tristar pax </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">L11 </td>
    <td class="col-lg-2 text-success bg-dark text-center">L101 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> Lockheed L-1011 500 Tristar pax </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">L15 </td>
    <td class="col-lg-2 text-success bg-dark text-center">L101  </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> Lockheed L-1011 Tristar Freighter </span></td>
    <td class="col-lg-2 text-info bg-dark text-center"> L1F </td>
    <td class="col-lg-2 text-success bg-dark text-center"> L101 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"> <span class="text-warning"> Lockheed L-1049 Super Constellation </span></td>
    <td class="col-lg-2 text-info bg-dark  text-center">L49 </td>
    <td class="col-lg-2 text-success bg-dark text-center"> CONI </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">LET 410 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center"> L4T  </td>
    <td class="col-lg-2 text-success bg-dark text-center"> L410 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"> </td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> Launch - Boat </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">LCH  </td>
    <td class="col-lg-2 text-success bg-dark text-center">n/a </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> Limousine </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">LMO </td>
    <td class="col-lg-2 text-success bg-dark text-center">n/a </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Lockheed L-188 Electra pax  </sp</span></td>
    <td class="col-lg-2 text-info bg-dark text-center">LOE </td>
    <td class="col-lg-2 text-success bg-dark text-center">L188 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> Lockheed L-188 Electra Freighter </span></td>
    <td class="col-lg-2 text-info bg-dark text-center"> LOF </td>
    <td class="col-lg-2 text-success bg-dark text-center"> L188 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Lockheed L-182 / 282 / 382 (L-100) Hercules </span></td>
    <td class="col-lg-2 text-info bg-dark text-center"> LOH </td>
    <td class="col-lg-2 text-success bg-dark text-center">C130 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> Lockheed L-188 Electra Mixed Configuration </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">LOM </td>
    <td class="col-lg-2 text-success bg-dark text-center">L188 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50 fw-lighter"><span class="text-warning"> Gates Learjet </span></td>
    <td class="col-lg-2 fw-lighter text-info bg-dark text-center"> LRJ </td>
    <td class="col-lg-2 fw-lighter text-success bg-dark text-center"> n/a </td>
    <td class="col-lg-2 fw-lighter text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> McDonnell Douglas MD11 pax </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">M11  </td>
    <td class="col-lg-2 text-success bg-dark text-center">MD11 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">McDonnell Douglas MD11 Freighter  </span></td>
    <td class="col-lg-2 text-info bg-dark text-center"> M1F </td>
    <td class="col-lg-2 text-success bg-dark text-center">MD11 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">McDonnell Douglas MD11 Mixed Configuration  </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">M1M </td>
    <td class="col-lg-2 text-success bg-dark text-center"> MD11 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> McDonnell Douglas MD80 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">M80 </td>
    <td class="col-lg-2 text-success bg-dark text-center">MD80 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"> <span class="text-warning"> McDonnell Douglas MD81 </span></td>
    <td class="col-lg-2 text-info bg-dark  text-center">M81  </td>
    <td class="col-lg-2 text-success bg-dark text-center"> MD81 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> McDonnell Douglas MD82 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">M82  </td>
    <td class="col-lg-2 text-success bg-dark text-center"> MD82  </td>
    <td class="col-lg-2 text-primary bg-dark text-center"> </td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> McDonnell Douglas MD83 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center"> M83 </td>
    <td class="col-lg-2 text-success bg-dark text-center">MD83 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> McDonnell Douglas MD87 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center"> M87 </td>
    <td class="col-lg-2 text-success bg-dark text-center">MD87 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> McDonnell Douglas MD88 </sp</span></td>
    <td class="col-lg-2 text-info bg-dark text-center"> M88 </td>
    <td class="col-lg-2 text-success bg-dark text-center"> MD88 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> McDonnell Douglas MD90 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center"> M90 </td>
    <td class="col-lg-2 text-success bg-dark text-center">MD90 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> Eurocopter (MBB) Bo.105 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center"> MBH </td>
    <td class="col-lg-2 text-success bg-dark text-center">B105  </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">MD Helicopters MD900 Explorer </span></td>
    <td class="col-lg-2 text-info bg-dark text-center"> MD9 </td>
    <td class="col-lg-2 text-success bg-dark text-center">EXPL </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50 fw-lighter"><span class="text-warning"> MIL Mi-8 / Mi-17 / Mi-171 / Mil-172 </span></td>
    <td class="col-lg-2 fw-lighter text-info bg-dark text-center">MIH  </td>
    <td class="col-lg-2 fw-lighter text-success bg-dark text-center">MI8 </td>
    <td class="col-lg-2 fw-lighter text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> Mitsubishi Mu-2 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">MU2 </td>
    <td class="col-lg-2 text-success bg-dark text-center">MU2 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> Aerospatiale (Nord) 262 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">ND2 </td>
    <td class="col-lg-2 text-success bg-dark text-center">N262  </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> Aerospatiale SN.601 Corvette </span></td>
    <td class="col-lg-2 text-info bg-dark text-center"> NDC </td>
    <td class="col-lg-2 text-success bg-dark text-center"> S601 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> Eurocopter (Aerospatiale) AS350 Ecureuil / AS355 Ecureuil 2 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">NDE </td>
    <td class="col-lg-2 text-success bg-dark text-center">n/a </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"> <span class="text-warning"> Eurocopter (Aerospatiale) SA365C / SA365N Dauphin 2 </span></td>
    <td class="col-lg-2 text-info bg-dark  text-center"> NDH </td>
    <td class="col-lg-2 text-success bg-dark text-center"> S65C </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> Piper light aircraft - single piston engine </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">PA1  </td>
    <td class="col-lg-2 text-success bg-dark text-center">n/a  </td>
    <td class="col-lg-2 text-primary bg-dark text-center"> </td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> Piper light aircraft - twin piston engines </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">PA2 </td>
    <td class="col-lg-2 text-success bg-dark text-center"> n/a </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> Piper light aircraft </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">PAG </td>
    <td class="col-lg-2 text-success bg-dark text-center">n/a </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> Piper light aircraft - twin turboprop engines </sp</span></td>
    <td class="col-lg-2 text-info bg-dark text-center"> PAT </td>
    <td class="col-lg-2 text-success bg-dark text-center">n/a  </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Pilatus PC-12 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center"> PL2 </td>
    <td class="col-lg-2 text-success bg-dark text-center"> PC12 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Pilatus PC-6 Turbo Porter </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">PL6 </td>
    <td class="col-lg-2 text-success bg-dark text-center">PC6T  </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Partenavia P.68 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">PN6 </td>
    <td class="col-lg-2 text-success bg-dark text-center">P68 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50 fw-lighter"><span class="text-warning">Road Feeder Service - Cargo Truck </span></td>
    <td class="col-lg-2 fw-lighter text-info bg-dark text-center"> RFS </td>
    <td class="col-lg-2 fw-lighter text-success bg-dark text-center">n/a  </td>
    <td class="col-lg-2 fw-lighter text-primary bg-dark text-center"></td>
  </tr>
</tbody>











<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Saab 2000 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">S20  </td>
    <td class="col-lg-2 text-success bg-dark text-center"> SB20 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> Sikorsky S-58T </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">S58 </td>
    <td class="col-lg-2 text-success bg-dark text-center"> S58T </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Sikorsky S-61  </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">S61 </td>
    <td class="col-lg-2 text-success bg-dark text-center"> S61 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> Sikorsky S-76 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">S76 </td>
    <td class="col-lg-2 text-success bg-dark text-center"> S76 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"> <span class="text-warning">Saab SF340  </span></td>
    <td class="col-lg-2 text-info bg-dark  text-center">SF3 </td>
    <td class="col-lg-2 text-success bg-dark text-center"> SF34 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Saab SF340B </span></td>
    <td class="col-lg-2 text-info bg-dark text-center"> SFB  </td>
    <td class="col-lg-2 text-success bg-dark text-center">SF34  </td>
    <td class="col-lg-2 text-primary bg-dark text-center"> </td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Saab SF340 Freighter  </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">SFF  </td>
    <td class="col-lg-2 text-success bg-dark text-center">SF34 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Shorts SD.330  </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">SH3  </td>
    <td class="col-lg-2 text-success bg-dark text-center">SH33 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Shorts SD.360  </sp</span></td>
    <td class="col-lg-2 text-info bg-dark text-center"> SH6 </td>
    <td class="col-lg-2 text-success bg-dark text-center">SH36 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> Shorts SC-5 Belfast </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">SHB  </td>
    <td class="col-lg-2 text-success bg-dark text-center"> BELF </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Shorts SC-7 Skyvan </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">SHS </td>
    <td class="col-lg-2 text-success bg-dark text-center">SC7 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> Aerospatiale/BAC Concorde </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">SSC  </td>
    <td class="col-lg-2 text-success bg-dark text-center">CONC </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50 fw-lighter"><span class="text-warning">Sukhoi Superjet 100  </span></td>
    <td class="col-lg-2 fw-lighter text-info bg-dark text-center">SU1  </td>
    <td class="col-lg-2 fw-lighter text-success bg-dark text-center"> </td>
    <td class="col-lg-2 fw-lighter text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> Sukhoi Superjet 100-75 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">SU7  </td>
    <td class="col-lg-2 text-success bg-dark text-center"></td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Sukhoi Superjet 100-95  </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">SU9  </td>
    <td class="col-lg-2 text-success bg-dark text-center">SU95 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> Fairchild (Swearingen) SA26 / SA226 / SA227 Metro / Merlin / Expediter </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">SWM</td>
    <td class="col-lg-2 text-success bg-dark text-center"> n/a </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> Tupolev Tu-204 / Tu-214 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">T20 </td>
    <td class="col-lg-2 text-success bg-dark text-center">T204 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"> <span class="text-warning"> Tupolev Tu-204 Freighter </span></td>
    <td class="col-lg-2 text-info bg-dark  text-center">T2F  </td>
    <td class="col-lg-2 text-success bg-dark text-center"> T204 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> Train </span></td>
    <td class="col-lg-2 text-info bg-dark text-center"> TRN </td>
    <td class="col-lg-2 text-success bg-dark text-center"> n/a  </td>
    <td class="col-lg-2 text-primary bg-dark text-center"> </td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Tupolev Tu134 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center"> TU3 </td>
    <td class="col-lg-2 text-success bg-dark text-center">T134 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> Tupolev Tu154 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center"> TU5 </td>
    <td class="col-lg-2 text-success bg-dark text-center">T154 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> Vickers Viscount </sp</span></td>
    <td class="col-lg-2 text-info bg-dark text-center">VCV  </td>
    <td class="col-lg-2 text-success bg-dark text-center"> VISC </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> Israel Aircraft Industries 1124 Westwind </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">WWP  </td>
    <td class="col-lg-2 text-success bg-dark text-center">WW24 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Yakovlev Yak 42  </span></td>
    <td class="col-lg-2 text-info bg-dark text-center"> YK2 </td>
    <td class="col-lg-2 text-success bg-dark text-center">YK42  </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning">Yakovlev Yak 40 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">YK4  </td>
    <td class="col-lg-2 text-success bg-dark text-center">YK40 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50 fw-lighter"><span class="text-warning"> Harbin Yunshuji Y12 </span></td>
    <td class="col-lg-2 fw-lighter text-info bg-dark text-center"> YN2 </td>
    <td class="col-lg-2 fw-lighter text-success bg-dark text-center">Y12 </td>
    <td class="col-lg-2 fw-lighter text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> Xian Yunshuji Y7 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">YN7 </td>
    <td class="col-lg-2 text-success bg-dark text-center">AN24 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> NAMC YS-11 </span></td>
    <td class="col-lg-2 text-info bg-dark text-center">YS1 </td>
    <td class="col-lg-2 text-success bg-dark text-center"> YS11 </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>



<!--<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"></span></td>
    <td class="col-lg-2 text-info bg-dark text-center"> </td>
    <td class="col-lg-2 text-success bg-dark text-center"> </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> </span></td>
    <td class="col-lg-2 text-info bg-dark text-center"></td>
    <td class="col-lg-2 text-success bg-dark text-center"> </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> </span></td>
    <td class="col-lg-2 text-info bg-dark text-center"></td>
    <td class="col-lg-2 text-success bg-dark text-center"> </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> </span></td>
    <td class="col-lg-2 text-info bg-dark text-center"> </td>
    <td class="col-lg-2 text-success bg-dark text-center"> </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"> <span class="text-warning"> </span></td>
    <td class="col-lg-2 text-info bg-dark  text-center"></td>
    <td class="col-lg-2 text-success bg-dark text-center"> </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"></span></td>
    <td class="col-lg-2 text-info bg-dark text-center">  </td>
    <td class="col-lg-2 text-success bg-dark text-center"> </td>
    <td class="col-lg-2 text-primary bg-dark text-center"> </td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> </span></td>
    <td class="col-lg-2 text-info bg-dark text-center"> </td>
    <td class="col-lg-2 text-success bg-dark text-center"></td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> </span></td>
    <td class="col-lg-2 text-info bg-dark text-center"> </td>
    <td class="col-lg-2 text-success bg-dark text-center"></td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> </sp</span></td>
    <td class="col-lg-2 text-info bg-dark text-center"> </td>
    <td class="col-lg-2 text-success bg-dark text-center"></td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> </span></td>
    <td class="col-lg-2 text-info bg-dark text-center"> </td>
    <td class="col-lg-2 text-success bg-dark text-center"> </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"></span></td>
    <td class="col-lg-2 text-info bg-dark text-center"> </td>
    <td class="col-lg-2 text-success bg-dark text-center"></td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> </span></td>
    <td class="col-lg-2 text-info bg-dark text-center"> </td>
    <td class="col-lg-2 text-success bg-dark text-center"></td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50 fw-lighter"><span class="text-warning"> </span></td>
    <td class="col-lg-2 fw-lighter text-info bg-dark text-center"> </td>
    <td class="col-lg-2 fw-lighter text-success bg-dark text-center"> </td>
    <td class="col-lg-2 fw-lighter text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> </span></td>
    <td class="col-lg-2 text-info bg-dark text-center"> </td>
    <td class="col-lg-2 text-success bg-dark text-center"></td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> </span></td>
    <td class="col-lg-2 text-info bg-dark text-center"> </td>
    <td class="col-lg-2 text-success bg-dark text-center"></td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> </span></td>
    <td class="col-lg-2 text-info bg-dark text-center"></td>
    <td class="col-lg-2 text-success bg-dark text-center"> </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> </span></td>
    <td class="col-lg-2 text-info bg-dark text-center"></td>
    <td class="col-lg-2 text-success bg-dark text-center"></td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"> <span class="text-warning"> </span></td>
    <td class="col-lg-2 text-info bg-dark  text-center"> </td>
    <td class="col-lg-2 text-success bg-dark text-center"> </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> </span></td>
    <td class="col-lg-2 text-info bg-dark text-center"> </td>
    <td class="col-lg-2 text-success bg-dark text-center">  </td>
    <td class="col-lg-2 text-primary bg-dark text-center"> </td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> </span></td>
    <td class="col-lg-2 text-info bg-dark text-center"> </td>
    <td class="col-lg-2 text-success bg-dark text-center"></td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> </span></td>
    <td class="col-lg-2 text-info bg-dark text-center"> </td>
    <td class="col-lg-2 text-success bg-dark text-center"></td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> </sp</span></td>
    <td class="col-lg-2 text-info bg-dark text-center"> </td>
    <td class="col-lg-2 text-success bg-dark text-center"> </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> </span></td>
    <td class="col-lg-2 text-info bg-dark text-center"> </td>
    <td class="col-lg-2 text-success bg-dark text-center"></td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> </span></td>
    <td class="col-lg-2 text-info bg-dark text-center"> </td>
    <td class="col-lg-2 text-success bg-dark text-center"> </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"></span></td>
    <td class="col-lg-2 text-info bg-dark text-center"> </td>
    <td class="col-lg-2 text-success bg-dark text-center"></td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50 fw-lighter"><span class="text-warning"> </span></td>
    <td class="col-lg-2 fw-lighter text-info bg-dark text-center"> </td>
    <td class="col-lg-2 fw-lighter text-success bg-dark text-center"></td>
    <td class="col-lg-2 fw-lighter text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> </span></td>
    <td class="col-lg-2 text-info bg-dark text-center"></td>
    <td class="col-lg-2 text-success bg-dark text-center"></td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> </span></td>
    <td class="col-lg-2 text-info bg-dark text-center"></td>
    <td class="col-lg-2 text-success bg-dark text-center"> </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> </span></td>
    <td class="col-lg-2 text-info bg-dark text-center"> </td>
    <td class="col-lg-2 text-success bg-dark text-center"> </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> </span></td>
    <td class="col-lg-2 text-info bg-dark text-center"></td>
    <td class="col-lg-2 text-success bg-dark text-center"></td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"> <span class="text-warning"> </span></td>
    <td class="col-lg-2 text-info bg-dark  text-center"> </td>
    <td class="col-lg-2 text-success bg-dark text-center"> </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> </span></td>
    <td class="col-lg-2 text-info bg-dark text-center"> </td>
    <td class="col-lg-2 text-success bg-dark text-center"> </td>
    <td class="col-lg-2 text-primary bg-dark text-center"> </td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> </span></td>
    <td class="col-lg-2 text-info bg-dark text-center"></td>
    <td class="col-lg-2 text-success bg-dark text-center"> </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> </span></td>
    <td class="col-lg-2 text-info bg-dark text-center"></td>
    <td class="col-lg-2 text-success bg-dark text-center"></td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"> </sp</span></td>
    <td class="col-lg-2 text-info bg-dark text-center"> </td>
    <td class="col-lg-2 text-success bg-dark text-center"> </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"></span></td>
    <td class="col-lg-2 text-info bg-dark text-center"> </td>
    <td class="col-lg-2 text-success bg-dark text-center"> </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"></span></td>
    <td class="col-lg-2 text-info bg-dark text-center"></td>
    <td class="col-lg-2 text-success bg-dark text-center"> </td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50"><span class="text-warning"></span></td>
    <td class="col-lg-2 text-info bg-dark text-center"></td>
    <td class="col-lg-2 text-success bg-dark text-center"></td>
    <td class="col-lg-2 text-primary bg-dark text-center"></td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td class="col-lg-12 text-white-50 fw-lighter"><span class="text-warning"></span></td>
    <td class="col-lg-2 fw-lighter text-info bg-dark text-center"> </td>
    <td class="col-lg-2 fw-lighter text-success bg-dark text-center"> </td>
    <td class="col-lg-2 fw-lighter text-primary bg-dark text-center"></td>
  </tr>
</tbody>-->
    </table>
</section>



</body>

<footer class="">
 <div class="" id="retour_bas_de_page" ></div>
     <div class=" mx-5 shadow-lg  mx-5">
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
