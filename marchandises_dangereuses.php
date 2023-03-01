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
    <title>Marchandises Dangereuses WOB!</title>
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

<button type="button" class="btn fixed-top mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-left:1500px ;"><img src="img/Type_avion/vieil-avion2.png" alt="" style="width:50px;"></button>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content bg-transparent ">
        <div class="modal-body p-5" style="-webkit-backdrop-filter: blur(10px);backdrop-filter: blur(10px);">
          
            <div class="" style="background-image: linear-gradient(rgba(0, 0, 0, 0.6),rgba(0, 0, 0, 0.6)),url('img/avion-aeroport-voyage-decollage-atterrissage.webp'); background-size:cover; background-position:center;">
              <form action="./Dashboard/select_user_Dash.php" method="POST" class=""  was-validated>
                <div class="border border-dark p-5">
                    <h2 class="text-center fw-lighter spacingLetter text-uppercase" style="color:#CBAC6A;letter-spacing: 20px!important;">Connexion</h2>
                    <div class="mt-3">
                        <label for="user validationTextarea" style="color:#CBAC6A"></label><br>
                        <input class="w-100 rounded-2 border border-dark p-2 mb-2 border-opacity-50 form-control fw-lighter"type="text" name="user" id="user autoSizingInput validationTextarea" placeholder="Identifiant" style="background-image:linear-gradient(rgba(0, 0, 0, 0.6),rgba(0, 0, 0, 0.6)), url('./Blog/img/header-blog.jpg');"required>
                    </div>
                    <div class="mt-3 ">
                        <label for="mdp autoSizingInputGroup" class="visually-hidden" style="color:#CBAC6A"></label><br>
                        <input class="w-100 rounded-2 border border-dark p-2 mb-2 border-opacity-50 form-control fw-lighter " type="text" name="mdp" id="mdp autoSizingInputGroup validationTextarea" placeholder="Mot de passe" style="background-image:linear-gradient(rgba(0, 0, 0, 0.6),rgba(0, 0, 0, 0.6)), url('./Blog/img/header-blog.jpg');background-size:cover;"required>
                    </div>
                    <div class="mt-5 text-center placeholder-glow" >
                        <input class="rounded-2 border border-dark p-2 mb-2 border-opacity-50 fw-light spacingLetter text-uppercase placeholder " type="submit" value="Se connecter" style="background-color:transparent;color:#CBAC6A;border-color:#CBAC6A">
                    </div>
                    </div>
                </div>
              </form>
            </div>
          
        </div>
      </div>
    </div>

<div class=" text-center">
  <a href="https://www.iata.org/" target="_blank"> <img src="./img/IATA-bgDark" alt="" class=" mx-3" style="width:70px;height: 70px;"data-toggle="tooltip" data-placement="bottom" title="Lien vers le site IATA"></a>
</div>


  <div class="form-group d-flex mt-5 justify-content-center placeholder-glow">
    <input type="text" class="form-control w-25 me-5 bg-transparent fw-lighter placeholder text-center text-white"  id="myInput" onkeyup="myFunction()" placeholder=" Recherche par mot-clé">
  </div>




<section>
    <div class=" mt-5 mb-5">
        <h2 class="text-center text-uppercase fw-light text-white-50 text-decoration-underline">Réglementation pour le transport des marchandises dangereuses</h2>
    </div>    
    <div class="text-center text-uppercase mb-5">
        <h4 class="fw-lighter text-black-50">Dispositions pour les marchandises dangereuses transportées par les passagers ou les membres d'équipage (2.3)</h4>
    </div>
    <div class="text-center text-uppercase mb-5 text-warning">
        <p class="mx-5 fw-lighter">Les marchandises dangereuses ne doivent pas être transportées par les passagers ou les membres d'équipage, ni en bagages enregistrés ou les bagages de cabine, sauf mention contraire indiquée ci-après. À moins d'indication contraire, les marchandises dangereuses permises dans les bagages de cabine sont également autorisées « sur la personne ».</p>
    </div>
</section>

<section class="mx-5 table-responsive fw-lighter ">
    <table  id="myTable" class="table table-hover align-middle table-hover stick">

        <div class="stick-child" >
          <thead class="">
            <tr class="border-dark">
              <th scope="col" colspan="4"class="text-end text-primary bg-dark fw-lighter text-uppercase">Le commandant de bord doit être informé de l'emplacement</th>
              <th scope="col"class="text-primary bg-dark text-center">↴</th>
            </tr>
          </thead>
          <thead>
          <tr class="border-dark">
            <th scope="col"colspan="3"class="text-end text-success bg-dark fw-lighter text-uppercase">Autorisées dans les bagages de cabine ou comme bagages de cabine</th>
            <th scope="col" class="text-success bg-dark text-center"> ↴</th>
            <th scope="col" class=" text-primary bg-dark text-center">&nbsp ↓</th>
          </tr>
            </thead >
            <thead>
              <tr class="border-dark">
                <th scope="col" colspan="2"class="text-end text-info bg-dark fw-lighter text-uppercase">Autorisées dans les bagages enregistrés ou comme bagages enregistrés</th>
                <th scope="col" class="text-info bg-dark text-center">↴</th>
                <th scope="col" class=" text-success bg-dark text-center" >&nbsp↓</th>
                <th scope="col" class=" text-primary bg-dark text-center">&nbsp↓</th>
              </tr>
            </thead >
            <thead>
              <tr class="border-dark">
                <th scope="col" colspan="1"class="text-end text-white-50 bg-dark fw-lighter text-uppercase">L'approbation de l'exploitant ou des exploitants est requise</th>
                <th scope="col" class="text-white-50 bg-dark text-center">↴</th>
                <th scope="col" class=" bg-dark  text-info text-center">&nbsp↓</th>
                <th scope="col" class=" bg-dark  text-success text-center">&nbsp↓</th>
                <th scope="col" class=" bg-dark  text-primary text-center">&nbsp↓</th>
              </tr>
            </thead>
        </div>

          <tbody>
            <tr>
              <td class="col-lg-12 text-white-50"> <span class="text-warning">Les médicaments non radioactifs ou articles de toilette </span> (y compris les aérosols) tels que la laque pour les cheveux, les parfums et eaux de Cologne et les médicaments contenant de l'alcool; et <span class="text-warning"> Aérosols non inflammables, non toxiques de la division 2.2</span>, à usage domestique ou sportif qui ne présentent pas de danger subsidiaire (voir 2.3.5.1). <br> La quantité nette totale de médicaments non radioactifs ou articles de toilette et d'aérosols non inflammables, non toxiques (division 2.2) ne doit pas dépasser 2 kg ou 2 L et la quantité nette de chaque article ne doit pas excéder 0,5 kg ou 0,5 L. Les soupapes de décharge des aérosols doivent être protégées par un capuchon ou par un autre moyen approprié pour prévenir le déversement par inadvertance du contenu. </td>
              <td class="col-lg-2  text-white bg-dark text-center">NON</td>
              <td class="col-lg-2 text-info bg-dark text-center">OUI</td>
              <td class="col-lg-2 text-success bg-dark text-center">OUI</td>
              <td class="col-lg-2 text-primary bg-dark text-center">NON</td>
            </tr>
          </tbody>
        <tbody>
          <tr>
            <td class="col-lg-12 text-white-50"> <span class="text-warning"> Aides à la mobilité </span>: En ce qui concerne les fauteuils roulants électriques ou autres aides à la mobilité similaires équipés de batteries au lithium ionique dont la batterie est spécifiquement conçue pour être enlevée, la batterie doit être transportée dans la cabine (voir 2.3.2.4.3 (b)2 pour plus de détails).</td>
            <td class="col-lg-2 text-white bg-dark bg-dark text-center">OUI</td>
            <td class="col-lg-2 text-info bg-dark bg-dark text-center">NON</td>
            <td class="col-lg-2 text-success bg-dark bg-dark text-center">OUI</td>
            <td class="col-lg-2 text-primary bg-dark bg-dark text-center">OUI</td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td class="col-lg-12 text-white-50"><span class="text-warning"> Aides à la mobilité </span>: Les fauteuils roulants électriques ou autres aides à la mobilité similaires équipés <span class="text-warning"> d'accumulateurs à électrolyte liquide inversables, d’accumulateurs au nickel-hydrure métallique ou d'accumulateurs secs </span>(voir 2.3.2.2).</td>
            <td class="col-lg-2 text-white bg-dark text-center">OUI</td>
            <td class="col-lg-2 text-info bg-dark text-center">OUI</td>
            <td class="col-lg-2 text-success bg-dark text-center">NON</td>
            <td class="col-lg-2 text-primary bg-dark text-center">OUI</td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td class="col-lg-12 text-white-50"> <span class="text-warning"> Aides à la mobilité </span>: Les fauteuils roulants électriques ou autres aides à la mobilité similaires équipés <span class="text-warning">d'accumulateurs versables ou d'accumulateurs au lithium </span>(voir 2.3.2.3 et 2.3.2.4 pour les détails).</td>
            <td class="col-lg-2 text-white bg-dark text-center">OUI</td>
            <td class="col-lg-2 text-info bg-dark text-center">OUI</td>
            <td class="col-lg-2 text-success bg-dark text-center">NON</td>
            <td class="col-lg-2 text-primary bg-dark text-center">OUI</td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td class="col-lg-12 text-white-50"> <span class="text-warning">Allumettes de sûreté (une petite boîte) ou petit briquet </span> qui ne contient pas de liquide non absorbé, autre que du gaz liquéfié, qui sera utilisé par la personne qui le transporte. Le combustible pour briquet et les cartouches de rechange ne sont pas autorisés sur la personne, ni dans les bagages enregistrés ou les bagages de cabine. <br><span class="text-warning">Note </span> Les « allumettes chimiques » n'exigeant pas de frottoir et les briquets à « flamme bleue » ou « allume-cigares » ou briquets alimentés par pile au lithium sans capuchon de sécurité ni moyen empêchant leur allumage accidentel sont interdits (voir 2.3.5.8.4(e)). </td>
            <td class="col-lg-2 text-white bg-dark text-center">NON</td>
            <td class="col-lg-2 tex-center text-info bg-dark text-center">Sur la personne</td>
            <td class="col-lg-2 tex-center text-success bg-dark text-center">Sur la personne</td>
            <td class="col-lg-2 tex-center text-primary bg-dark text-center">NON</td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td class="col-lg-12 text-white-50"><span class="text-warning">Appareils électroniques alimentés par des batteries au lithium.</span> Pour les batteries au lithium ionique pour appareils électroniques portables (y compris les appareils électroniques médicaux, énergie nominale en Wattheures se situant entre 100 Wh et 160 Wh. Pour les appareils électroniques médicaux portables uniquement, batteries au lithium métal dont le contenu en lithium métal se situe entre 2 g et 8 g. Les appareils dans les bagages enregistrés doivent être complètement éteints et protégés contre les dommages.</td>
            <td class="col-lg-2 text-white bg-dark text-center">OUI</td>
            <td class="col-lg-2 text-info bg-dark text-center">OUI</td>
            <td class="col-lg-2 text-success bg-dark text-center">OUI</td>
            <td class="col-lg-2 text-primary bg-dark text-center">NON</td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td class="col-lg-12 text-white-50"><span class="text-warning">Les armes électriques (par exemple les Tasers)</span> contenant des éléments dangereux tels que des explosifs, des gaz comprimés, des piles au lithium, etc., sont interdits dans les bagages de cabine ou les bagages enregistrés ou au transport sur la personne.</td>
            <td class="col-lg-2 text-white bg-dark text-center">INTERDIT</td>
            <td class="col-lg-2 text-info bg-dark text-center">INTERDIT</td>
            <td class="col-lg-2 text-success bg-dark text-center">INTERDIT</td>
            <td class="col-lg-2 text-primary bg-dark text-center">INTERDIT</td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td class="col-lg-12 text-white-50" ><span class="text-warning">Bagages avec batteries au lithium installées</span> batteries non amovibles excédant 0,3 g de lithium métal ou 2,7 Wh.</td>
            <td class="col-lg-2 text-white bg-dark text-center">INTERDIT</td>
            <td class="col-lg-2 text-info bg-dark text-center">INTERDIT</td>
            <td class="col-lg-2 text-success bg-dark text-center">INTERDIT</td>
            <td class="col-lg-2 text-primary bg-dark text-center">INTERDIT</td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td class="col-lg-12 text-white-50"><span class="text-warning">Bagages avec batteries au lithium installées:</span> <br>– batteries non amovibles. Les batteries ne doivent pas excéder 0,3 g de lithium métal ou 2,7 Wh de lithium ionique;<br>– batteries amovibles. Les batteries doivent être retirées si les bagages doivent être enregistrés. Les batteries retirées doivent être transportées dans la cabine.  </td>
            <td class="col-lg-2 text-white bg-dark text-center">NON</td>
            <td class="col-lg-2 text-info bg-dark text-center">OUI</td>
            <td class="col-lg-2 text-success bg-dark text-center">OUI</td>
            <td class="col-lg-2 text-primary bg-dark text-center">NON</td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td class="col-lg-12 text-white-50"><span class="text-warning">Batteries au lithium : Appareils électroniques portables (AEP) contenant des piles ou des batteries au lithium métal ou au lithium ionique,</span> y compris les appareils médicaux tels que des concentrateurs d'oxygène portables (COP) et produits électroniques de consommation portables tels que des appareils photographiques, des téléphones mobiles, des ordinateurs portables et des tablettes, lorsqu'ils sont transportés par les passagers ou les membres d'équipage pour un usage personnel (voir 2.3.5.8). Dans le cas des batteries au lithium métal, le contenu en lithium métal ne doit pas dépasser 2 g et, en ce qui concerne les batteries au lithium ionique, l'énergie nominale en Wattheures ne doit pas être supérieure à 100 Wh. Les appareils dans les bagages enregistrés doivent être complètement éteints et protégés contre les dommages. Chaque personne est limitée à un maximum de 15 AEP. Lorsque les bagages sont équipés d'une batterie au lithium, autre que des piles-boutons au lithium, la batterie doit pouvoir être retirée. Lorsqu'elle est présentée comme bagage enregistré, la batterie doit être retirée et transportée dans la cabine. <br> * L'exploitant peut approuver le transport de plus de 15 AEP.</td>
            <td class="col-lg-2 text-white bg-dark text-center">NON</td>
            <td class="col-lg-2 text-info bg-dark text-center">OUI</td>
            <td class="col-lg-2 text-success bg-dark text-center">OUI</td>
            <td class="col-lg-2 text-primary bg-dark text-center">NON</td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td class="col-lg-12 text-white-50"><span class="text-warning">Les batteries de rechange, </span>y compris les accumulateurs au lithium, les accumulateurs inversables, les accumulateurs au nickel-hydrure métallique et les accumulateurs secs (voir 2.3.5.8), pour les appareils électroniques portables doivent être transportées uniquement dans les bagages de cabine. En ce qui concerne les batteries au lithium métal, le contenu en lithium métal ne doit pas dépasser 2 g et, dans le cas des batteries au lithium ionique, l'énergie nominale en Wattheures ne doit pas dépasser 100 Wh. Les articles appelés batteries externes sont considérés comme des batteries de rechange. Ces piles doivent être protégées individuellement pour éviter les courts-circuits. <br> <span class=" text-decoration-underline ">Batteries au lithium métal </span>: le contenu en lithium métal ne doit pas dépasser 2 g (voir 2.3.5.8)). <br><span class=" text-decoration-underline ">Batteries au lithium ionique </span> l'énergie nominale en Wattheures ne doit pas être supérieure à 100 Wh. <br> Chaque personne est limitée à un maximum de 20 batteries de rechange. <br> <span class="text-warning">*</span>  L'exploitant peut approuver le transport de plus de 20 batteries <br> Accumulateurs inversables : leur charge ne doit pas dépasser 12 V et 100 Wh. Chaque personne est limitée à un maximum de deux accumulateurs de rechange (voir 2.3.5.8.5)).</td>
            <td class="col-lg-2 text-white bg-dark text-center">NON <span class="text-warning">*</span></td>
            <td class="col-lg-2 text-info bg-dark text-center">NON</td>
            <td class="col-lg-2 text-success bg-dark text-center">OUI</td>
            <td class="col-lg-2 text-primary bg-dark text-center">NON</td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td class="col-lg-12 text-white-50"><span class="text-warning">Les batteries de rechange au lithium</span> dont la charge en énergie est comprise entre 100 Wh et 160 Wh pour les appareils électroniques grand public et les appareils médicaux électroniques portables ou dont le contenu en lithium métal est compris entre 2 g et 8 g pour les appareils médicaux électroniques portables uniquement. Un maximum de deux piles de rechange est permis uniquement dans les bagages de cabine. Ces piles doivent être protégées individuellement pour éviter les courts-circuits.</td>
            <td class="col-lg-2 text-white bg-dark text-center">OUI</td>
            <td class="col-lg-2 text-info bg-dark text-center">NON</td>
            <td class="col-lg-2 text-success bg-dark text-center">OUI</td>
            <td class="col-lg-2 text-primary bg-dark text-center">NON</td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td class="col-lg-12 text-white-50"><span class="text-warning">Les boissons alcoolisées,</span> lorsqu'elles sont contenues dans des emballages de vente au détail et dans des récipients d'une capacité inférieure à 5 L, excédant 24 % sans toutefois dépasser 70 % d'alcool en volume, la quantité nette totale par personne étant de 5 L.</td>
            <td class="col-lg-2 text-white bg-dark text-center">NON</td>
            <td class="col-lg-2 text-info bg-dark text-center">OUI</td>
            <td class="col-lg-2 text-success bg-dark text-center">OUI</td>
            <td class="col-lg-2 text-primary bg-dark text-center">NON</td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td class="col-lg-12 text-white-50"><span class="text-warning">Les bouteilles de gaz non inflammables non toxiques </span>portées pour <span class="text-warning"></span> faire fonctionner les prothèses mécaniques.</span> Également, bouteilles de rechange de taille similaire si nécessaire pour assurer les besoins pendant la durée du voyage.</td>
            <td class="col-lg-2 text-white bg-dark text-center">NON</td>
            <td class="col-lg-2 text-info bg-dark text-center">OUI</td>
            <td class="col-lg-2 text-success bg-dark text-center">OUI</td>
            <td class="col-lg-2 text-primary bg-dark text-center">NON</td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td class="col-lg-12 text-white-50"><span class="text-warning">Bouteilles d'oxygène ou d'air sous forme gazeuse</span> requises pour un <span class="text-warning"></span> usage médical.</span> Le poids brut de la bouteille ne doit pas dépasser 5 kg. <br> <span class="text-warning"> Note :</span> Le transport des systèmes à base d'oxygène liquide est interdit.</td>
            <td class="col-lg-2 text-white bg-dark text-center">OUI</td>
            <td class="col-lg-2 text-info bg-dark text-center">OUI</td>
            <td class="col-lg-2 text-success bg-dark text-center">OUI</td>
            <td class="col-lg-2 text-primary bg-dark text-center">OUI</td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td class="col-lg-12 text-white-50" ><span class="text-warning">Les bouteilles pour réchauds de camping et autres objets ayant contenu un combustible liquide inflammable </span>dont le réservoir et/ou la bouteille est vide (voir 2.3.2.5 pour plus de détails).</td>
            <td class="col-lg-2 text-white bg-dark text-center">OUI</td>
            <td class="col-lg-2 text-info bg-dark text-center">OUI</td>
            <td class="col-lg-2 text-success bg-dark text-center">NON</td>
            <td class="col-lg-2 text-primary bg-dark text-center">NON</td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td class="col-lg-12 text-white-50"><span class="text-warning">Les cigarettes électroniques </span>(y compris les cigares électroniques, les pipes électroniques et autres vaporisateurs personnels) contenant des batteries, doivent être protégées individuellement contre toute activation accidentelle (voir 2.3.5.8.2).</td>
            <td class="col-lg-2 text-white bg-dark text-center">NON</td>
            <td class="col-lg-2 text-info bg-dark text-center">NON</td>
            <td class="col-lg-2 text-success bg-dark text-center">OUI</td>
            <td class="col-lg-2 text-primary bg-dark text-center">NON</td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td class="col-lg-12 text-white-50"><span class="text-warning">Dioxyde de carbone, solide (glace carbonique)</span> utilisé pour l'emballage de denrées périssables non soumises à la présente Réglementation, dans des quantités n'excédant pas 2,5 kg par personne, à condition que le bagage enregistré (l'emballage) permette le dégagement du dioxyde de carbone. Les bagages enregistrés doivent être marqués de la mention « Glace carbonique » ou « Dioxyde de carbone solide » et de la masse nette de glace carbonique ou d'une indication précisant qu'il ne contient pas plus de 2,5 kg de glace carbonique.</td>
            <td class="col-lg-2 text-white bg-dark text-center">OUI</td>
            <td class="col-lg-2 text-info bg-dark text-center">OUI</td>
            <td class="col-lg-2 text-success bg-dark text-center">OUI</td>
            <td class="col-lg-2 text-primary bg-dark text-center">NON</td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td class="col-lg-12 text-white-50"><span class="text-warning">Les dispositifs de pénétration </span> doivent satisfaire la disposition spéciale A41. (voir 2.3.5.13 pour plus de détails).</td>
            <td class="col-lg-2 text-white bg-dark text-center">NON</td>
            <td class="col-lg-2 text-info bg-dark text-center">OUI</td>
            <td class="col-lg-2 text-success bg-dark text-center">NON</td>
            <td class="col-lg-2 text-primary bg-dark text-center">NON</td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td class="col-lg-12 text-white-50"><span class="text-warning">Les dispositifs incapacitants </span> contenant une substance irritante ou incapacitante tels que les matraques chimiques, les aérosols à base de poivre, etc., sont interdits au transport sur la personne ainsi que dans les bagages enregistrés et les bagages de cabine.</td>
            <td class="col-lg-2 text-white bg-dark text-center">INTERDIT</td>
            <td class="col-lg-2 text-info bg-dark text-center">INTERDIT</td>
            <td class="col-lg-2 text-success bg-dark text-center">INTERDIT</td>
            <td class="col-lg-2 text-primary bg-dark text-center">INTERDIT</td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td class="col-lg-12 text-white-50"><span class="text-warning">Emballages isothermes contenant de l'azote liquide réfrigéré </span>(emballage isotherme), entièrement absorbé dans un matériau poreux renfermant uniquement des produits non dangereux.</td>
            <td class="col-lg-2 text-white bg-dark text-center">NON</td>
            <td class="col-lg-2 text-info bg-dark text-center">OUI</td>
            <td class="col-lg-2 text-success bg-dark text-center">OUI</td>
            <td class="col-lg-2 text-primary bg-dark text-center">NON</td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td class="col-lg-12 text-white-50"><span class="text-warning">Les équipements de contrôle d'agent chimique </span>lorsqu'ils sont transportés par des membres du personnel de l'Organisation pour l'interdiction des armes chimiques (OIAC) en déplacement officiel (voir 2.3.4.4).</td>
            <td class="col-lg-2 text-white bg-dark text-center">OUI</td>
            <td class="col-lg-2 text-info bg-dark text-center">OUI</td>
            <td class="col-lg-2 text-success bg-dark text-center">OUI</td>
            <td class="col-lg-2 text-primary bg-dark text-center">NON</td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td class="col-lg-12 text-white-50"><span class="text-warning">Équipement de sûreté </span>(voir 2.3.2.6 pour plus de détails).</td>
            <td class="col-lg-2 text-white bg-dark text-center">OUI</td>
            <td class="col-lg-2 text-info bg-dark text-center">OUI</td>
            <td class="col-lg-2 text-success bg-dark text-center">NON</td>
            <td class="col-lg-2 text-primary bg-dark text-center">NON</td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td class="col-lg-12 text-white-50"><span class="text-warning">Le matériel de coiffure contenant une cartouche de gaz d'hydrocarbure,</span> dans la limite d'un (1) par passager ou membre d'équipage, à condition que le couvercle de sécurité soit fixé solidement sur l'élément chauffant. Ce matériel de coiffure ne doit pas être utilisé à bord de l'avion. Les cartouches de gaz de rechange pour ce matériel de coiffure ne sont autorisées ni dans les bagages enregistrés, ni dans les bagages de cabin</td>
            <td class="col-lg-2 text-white bg-dark text-center">NON</td>
            <td class="col-lg-2 text-info bg-dark text-center">OUI</td>
            <td class="col-lg-2 text-success bg-dark text-center">OUI</td>
            <td class="col-lg-2 text-primary bg-dark text-center">NON</td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td class="col-lg-12 text-white-50"><span class="text-warning">Kit de sauvetage en avalanche</span>, un (1) par personne, contenant des cartouches de gaz comprimé de la division 2.2. <br> Il peut également être équipé d'un mécanisme de déclenchement pyrotechnique contenant sans excéder de 200 mg net d'explosifs de la division 1.4S. Le dispositif doit être emballé de manière à éviter son activation accidentelle. Les sacs gonflables du kit doivent être munis de soupapes de sécurité.</td>
            <td class="col-lg-2 text-white bg-dark text-center">OUI</td>
            <td class="col-lg-2 text-info bg-dark text-center">OUI</td>
            <td class="col-lg-2 text-success bg-dark text-center">OUI</td>
            <td class="col-lg-2 text-primary bg-dark text-center">NON</td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td class="col-lg-12 text-white-50">Le transport de <span class="text-warning">mallettes de sûreté, boîtes ou bourses pour le transport d'argent liquide,</span> etc., contenant des marchandises dangereuses, p. ex. des piles au lithium et/ou des matières pyrotechniques, est totalement interdit, exception faite des dispositions prévues en 2.3.2.6. Voir cette rubrique en 4.2 - Liste des marchandises dangereuses.</td>
            <td class="col-lg-2 text-white bg-dark text-center" >INTERDIT</td>
            <td class="col-lg-2 text-info bg-dark  text-center">INTERDIT</td>
            <td class="col-lg-2 text-success bg-dark text-center">INTERDIT</td>
            <td class="col-lg-2 text-primary bg-dark text-center">INTERDIT</td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td class="col-lg-12 text-white-50"><span class="text-warning">Les moteurs à combustion interne ou à pile à combustible </span>doivent satisfaire la disposition particulière A70 (voir 2.3.5.12 pour plus de détails).  <br> <br> À condition d'être solidement emballées,<span class="text-warning"></span> munitions</span> (division 1.4S, ONU 0012 ou ONU 0014 seulement) en quantités ne dépassant pas 5 kg de poids brut par personne, réservées à l'usage personnel de celle-ci. Les franchises de plusieurs personnes ne doivent pas être combinées en un ou plusieurs colis.</td>
            <td class="col-lg-2 text-white bg-dark text-center">NON <br> <br> OUI </td>
            <td class="col-lg-2 text-info bg-dark text-center">OUI <br> <br>OUI </td>
            <td class="col-lg-2 text-success bg-dark text-center">NON <br> <br> NON </td>
            <td class="col-lg-2 text-primary bg-dark text-center">NON <br> <br> NON </td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td class="col-lg-12 text-white-50"><span class="text-warning">Petites cartouches de gaz non inflammable </span>contenant du dioxyde de carbone ou tout autre gaz approprié de la division 2.2. Maximum de deux (2) petites cartouches intégrées à un <span class="text-warning"></span> dispositif de sécurité individuel autogonflable </span>comme un gilet de sauvetage, destiné à être porté par une personne. Maximum de deux (2) dispositifs par passager et de deux (2) petites cartouches de rechange par dispositif, de quatre (4) cartouches d'une capacité en eau ne dépassant pas 50 mL pour les autres appareils (voir 2.3.4.2).</td>
            <td class="col-lg-2 text-white bg-dark text-center">OUI</td>
            <td class="col-lg-2 text-info bg-dark text-center">OUI</td>
            <td class="col-lg-2 text-success bg-dark text-center">OUI</td>
            <td class="col-lg-2 text-primary bg-dark text-center">NON</td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td class="col-lg-12 text-white-50"><span class="text-warning">Cartouches de combustible de recharge</span> pour les appareils électroniques portables (voir 2.3.5.9 pour plus de détails).</td>
            <td class="col-lg-2 text-white bg-dark text-center">NON</td>
            <td class="col-lg-2 text-info bg-dark text-center">OUI</td>
            <td class="col-lg-2 text-success bg-dark text-center">OUI</td>
            <td class="col-lg-2 text-primary bg-dark text-center">NON</td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td class="col-lg-12 text-white-50"><span class="text-warning">Piles à combustible </span>utilisés pour alimenter des appareils électroniques portables (par exemple appareils photo, téléphones portables, ordinateurs portables et caméscopes), voir 2.3.5.9 pour plus de détails.</td>
            <td class="col-lg-2 text-white bg-dark text-center">NON</td>
            <td class="col-lg-2 text-info bg-dark text-center">NON</td>
            <td class="col-lg-2 text-success bg-dark text-center">OUI</td>
            <td class="col-lg-2 text-primary bg-dark text-center">NON</td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td class="col-lg-12 text-white-50"><span class="text-warning">Régulateurs cardiaques radio-isotopiques </span>ou autres dispositifs, y compris ceux qui fonctionnent à l'aide de piles au lithium, implantés dans l'organisme ou portés sur la personne.</td>
            <td class="col-lg-2 text-white bg-dark text-center">NON</td>
            <td class="col-lg-2 text-info bg-dark text-center">Sur la personne</td>
            <td class="col-lg-2 text-success bg-dark text-center">Sur la personne</td>
            <td class="col-lg-2 text-primary bg-dark text-center">NON</td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td class="col-lg-12 text-white-50"><span class="text-warning">Les spécimens non infectieux</span> emballés avec de petites quantités de liquide inflammable doivent satisfaire la disposition particulière A180 (voir 2.3.5.11 pour plus de détails).</td>
            <td class="col-lg-2 text-white bg-dark text-center">NON</td>
            <td class="col-lg-2 text-info bg-dark text-center">OUI</td>
            <td class="col-lg-2 text-success bg-dark text-center">OUI</td>
            <td class="col-lg-2 text-primary bg-dark text-center">NON</td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td class="col-lg-12 text-white-50"><span class="text-warning">Thermomètre médical ou clinique </span>contenant du mercure, un (1) par personne pour un usage personnel, lorsqu'il est placé dans son enveloppe de protection.</td>
            <td class="col-lg-2 text-white bg-dark text-center">NON</td>
            <td class="col-lg-2 text-info bg-dark text-center">OUI</td>
            <td class="col-lg-2 text-success bg-dark text-center">NON</td>
            <td class="col-lg-2 text-primary bg-dark text-center">NON</td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td class="col-lg-12 text-white-50 fw-lighter"><span class="text-warning">Thermomètre ou baromètre à mercure</span>transporté par un représentant du bureau météorologique d'un État ou d'un organisme officiel similaire (voir 2.3.3.1 pour plus de détails).</td>
            <td class="col-lg-2 fw-lighter text-white bg-dark text-center">OUI</td>
            <td class="col-lg-2 fw-lighter text-info bg-dark text-center">NON</td>
            <td class="col-lg-2 fw-lighter text-success bg-dark text-center">OUI</td>
            <td class="col-lg-2 fw-lighter text-primary bg-dark text-center">OUI</td>
          </tr>
        </tbody>
    </table>
</section>




<div class="mx-5 mt-5">
    <div class=""> 
      <p class="fw-lighter text-uppercase text-decoration-underline text-warning"> NOTES:</p>
      <p class="text-white-50"> Les dispositions de 2.3 et du tableau 2.3.A peuvent être limitées par les divergences des États ou des exploitants. Les voyageurs devraient vérifier auprès du transporteur les dispositions en vigueur.</p>
    </div> 
</div>
<div class="text-center mt-5">
    <p>63e ÉDITION, 1er JANVIER 2022</p>
</div>

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
