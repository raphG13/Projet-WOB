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
    <title>Codes Re WOB!</title>
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
                <li class="nav-item mx-2 "><a class="nav-link text-decoration-none fw-lighter link-light spacingLetter text-uppercase" href="projet.php#vols en temps r??el" data-toggle="tooltip" data-placement="bottom" title="Recherche vol en temps r??el">Vols en temps r??el</a></li>
                <li class="nav-item mx-2 "><a class="nav-link text-decoration-none fw-lighter link-light spacingLetter text-uppercase" href="projet.php#m??t??o" data-toggle="tooltip" data-placement="bottom" title="Carte m??t??o">m??t??o</a></li>
                <li class="nav-item mx-2 "><a class="nav-link text-decoration-none fw-lighter link-light spacingLetter text-uppercase" href="projet.php#plan" data-toggle="tooltip" data-placement="bottom" title="Plan avec Google plan">Plan</a></li>
                <li class="nav-item mx-2 dropdown">
                  <a class="nav-link dropdown-toggle text-decoration-none link-light spacingLetter text-uppercase fw-lighter" href="#" role="button" id="dropdownMenuButtonDark" data-bs-toggle="dropdown" data-toggle="tooltip" data-placement="top" title="Liens vers sites AF,AMP,SNCF..."aria-expanded="false">Liens utiles</a>
                  <ul class="dropdown-menu opacity-100 bg-body-light" data-bs-theme="dark" aria-labelledby="dropdownMenuButtonDark" style="">
                      <li><a class="dropdown-item spacingLetter text-uppercase fw-lighter" href="https://wwws.airfrance.fr/" target="_blank">Air France </a></li>
                      <li><a class="dropdown-item spacingLetter text-uppercase fw-lighter" href="https://www.marseille.aeroport.fr/" target="_blank">A??roport MP </a></li>
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
           <h2 class=" text-uppercase fw-light text-white-50 text-decoration-underline text-center">Codes Retard</h2>
       </div>    
   </section>

   <div class="form-group d-flex mt-5 mb-5 justify-content-center placeholder-glow">
     <input type="text" class="form-control w-25 me-5 bg-transparent fw-lighter placeholder text-center text-white"  id="rtdInput" onkeyup="rtdFunction()" placeholder=" Recherche Code">
   </div>



  <section class="mx-5 table-responsive fw-lighter">
    <table id="rtdTable"class="table table-hover table-dark border-dark">
      <div>
        <thead>
          <tr class="border-dark">
            <th class="fw-lighter text-primary text-uppercase text-nowrap" scope="col">Codes retard</th>
            <th class="fw-lighter text-primary text-uppercase text-start ps-5" scope="col">Correspondances</th>
          </tr>
        </thead>
      </div>
    
      <tbody>
        <tr class="text-center border-dark">
          <td  class="bg-success fw-lighter"></td>
          <td class="bg-success fw-lighter">Autres</td>
        </tr>
        <tr>
          <td><span class="text-warning">00-05</span></td>
          <td>CODES INTERNES ?? LA COMPAGNIE</td>
        </tr>
        <tr>
          <td><span class="text-warning">06 </span></td>
          <td>PAS DE DISPONIBILIT?? DE PORTE / STAND EN RAISON DE L'ACTIVIT?? A??RIENNE</td>
        </tr>
        <tr>
          <td><span class="text-warning">09</span></td>
          <td>(SG) TEMPS AU SOL PLANIFI?? INF??RIEUR AU TEMPS AU SOL MINIMUM D??CLAR??</td>
        </tr>              
      </tbody>
   
    
      
      <tbody>
        <tr class="text-center border-dark">
          <td class="bg-success fw-lighter"></td>
          <td class="bg-success fw-lighter">Passagers et bagages</td>
        </tr>
      </tbody>
      <tbody>
        <tbody>
        <tr>
          <td><span class="text-warning">11</span></td>
          <td>(PD) ENREGISTREMENT TARDIF, acceptation apr??s la date limite</td>
        </tr>
        </tbody>
        <tbody>
        <tr>
          <td><span class="text-warning">12</span></td>
          <td>(PL) ENREGISTREMENT TARDIF, congestion dans la zone d'enregistrement</td>
        </tr>
        </tbody>
        <tbody>
        <tr>
          <td><span class="text-warning">13</span></td>
          <td>(PE) ERREUR D'ENREGISTREMENT, passagers et bagages</td>
        </tr>
        </tbody>
        <tr>
          <td><span class="text-warning">14</span></td>
          <td>(PO) SURVENTE, erreurs de r??servation</td>
        </tr>
        <tr>
          <td><span class="text-warning">15</span></td>
          <td>(PH) EMBARQUEMENT, incoh??rences et annonces, passager manquant enregistr??</td>
        </tr>
        <tr>
          <td><span class="text-warning">16</span></td>
          <td>(PS) PUBLICIT?? COMMERCIALE / CONFORT DU PASSAGER, VIP, presse, repas au sol et articles personnels manquants</td>
        </tr>
        <tr>
          <td><span class="text-warning">17</span></td>
          <td>(PC) COMMANDE DE CATERING, commande tardive ou incorrecte donn??e au fournisseur</td>
        </tr>
        <tr>
          <td><span class="text-warning">18</span></td>
          <td>(PB) TRAITEMENT DU BAGAGE, tri, etc.</td>
        </tr>
        <tr>
          <td><span class="text-warning">19</span></td>
          <td>(PW) R??DUCTION DE LA MOBILIT??, embarquement / d??barquement de passagers ?? mobilit?? r??duite.</td>
        </tr>
      </tbody>
   
   
   
      <tbody>
        <tr class="text-center border-dark">
          <td class="bg-success fw-lighter"></td>
          <td class="bg-success fw-lighter">Cargo et courrier</td>
        </tr>
        <tr>
          <td><span class="text-warning">21</span></td>
          <td>(CD) DOCUMENTATION, erreurs, etc.</td>
        </tr>
        <tr>
          <td><span class="text-warning">22</span></td>
          <td>(CP) POSITIONNEMENT TARDIF</td>
        </tr>
        <tr>
          <td><span class="text-warning">23</span></td>
          <td>(CC) ACCEPTATION TARDIVE</td>
        </tr>
        <tr>
          <td><span class="text-warning">24</span></td>
          <td>(CI) EMBALLAGE INAD??QUAT</td>
        </tr>
        <tr>
          <td><span class="text-warning">25</span></td>
          <td>(CO) SURVENTE, erreurs de r??servation</td>
        </tr>
        <tr>
          <td><span class="text-warning">26</span></td>
          <td>(CU) PR??PARATION TARDIVE DANS ENTREP??T</td>
        </tr>
        <tr>
          <td><span class="text-warning">27</span></td>
          <td>(CE) DOCUMENTATION, EMBALLAGE, etc (Courrier uniquement)</td>
        </tr>
        <tr>
          <td><span class="text-warning">28</span></td>
          <td>(CL) POSITIONNEMENT TARDIF (Courrier uniquement)</td>
        </tr>
        <tr>
          <td><span class="text-warning">29</span></td>
          <td>(CA) ACCEPTATION TARDIVE (Courrier uniquement)</td>
        </tr>
      </tbody>
    
   
   
      <tbody>
        <tr class="text-center border-dark">
          <td class="bg-success fw-lighter" ></td>
          <td class="bg-success fw-lighter" >Manutention d'a??ronefs et de rampe</td>
        </tr>
        <tr>
          <td><span class="text-warning">31</span></td>
          <td>(GD) DOCUMENTATION D'A??RONEF TARDIVE/INEXACTE, poids et ??quilibre, d??claration g??n??rale, manifeste de passagers, etc.</td>
        </tr>
        <tr>
          <td><span class="text-warning">32</span></td>
          <td>(GL) CHARGEMENT/D??CHARGEMENT, encombrant, charge sp??ciale, charge de cabine, manque de personnel de chargement</td>
        </tr>
        <tr>
          <td><span class="text-warning">33</span></td>
          <td>(GE) ??QUIPEMENT DE CHARGEMENT, manque ou panne, par exemple, chargeur de palette de conteneur, manque de personnel</td>
        </tr>
        <tr>
          <td><span class="text-warning">34</span></td>
          <td>(GS) ??QUIPEMENT DE SERVICE, manque ou panne, manque de personnel, par exemple, marches</td>
        </tr>
        <tr>
          <td><span class="text-warning">35</span></td>
          <td>(GC) NETTOYAGE D'A??RONEF</td>
        </tr>
        <tr>
          <td><span class="text-warning">36</span></td>
          <td>(GF)CARBURANT/D??CARBURANT, fournisseur de carburant</td>
        </tr>
        <tr>
          <td><span class="text-warning">37</span></td>
          <td>(GB) CATERING, livraison ou chargement tardif</td>
        </tr>
        <tr>
          <td><span class="text-warning">38</span></td>
          <td>(GU) ULD, manque ou aptitude au service</td>
        </tr>
        <tr>
          <td><span class="text-warning">39</span></td>
          <td>(GT) ??QUIPEMENT TECHNIQUE, manque ou panne, manque de personnel, par exemple, pouss??e arri??re.</td>
        </tr>
      </tbody>
    
   
   
      <tbody>
        <tr class="text-center border-dark">
          <td class="bg-success fw-lighter"></td>
          <td class="bg-success fw-lighter">??quipement technique et a??rien</td>
        </tr>
        <tr>
          <td><span class="text-warning">41</span></td>
          <td>(TD) D??FAUTS D'A??RONEF.</td>
        </tr>
        <tr>
          <td><span class="text-warning">42</span></td>
          <td>42 (TM) ENTRETIEN PROGRAMM??, mise en service tardive.</td>
        </tr>
        <tr>
          <td><span class="text-warning">43</span></td>
          <td>43 (TN) ENTRETIEN NON PROGRAMM??, v??rifications sp??ciales et / ou travaux suppl??mentaires au-del?? de l'horaire d'entretien normal.</td>
        </tr>
        <tr>
          <td><span class="text-warning">44</span></td>
          <td>(TS) PI??CES DE RECHANGE ET ??QUIPEMENT D'ENTRETIEN, manque ou panne.</td>
        </tr>
        <tr>
          <td><span class="text-warning">45</span></td>
          <td>(TA) PI??CES AOG, ?? transporter vers une autre station.</td>
        </tr>
        <tr>
          <td><span class="text-warning">46</span></td>
          <td>(TC) CHANGEMENT D'A??RONEF, pour des raisons techniques.</td>
        </tr>
        <tr>
          <td><span class="text-warning">47</span></td>
          <td>(TL) A??RONEF DE R??SERVE, manque d'a??ronef de r??serve pr??vu pour des raisons techniques.</td>
        </tr>
        <tr>
          <td><span class="text-warning">48</span></td>
          <td>48 (TV) R??GLAGES DE CONFIGURATION / VERSION DE CABINE PROGRAMM??S.</td>
        </tr>
      </tbody>
   
    
   
      <tbody>
       <tr class="text-center border-dark">
          <td class="bg-success fw-lighter" ></td>
          <td class="bg-success fw-lighter" >Dommages ?? l'a??ronef et panne d'??quipement informatique/automatis??</td>
        </tr>
        <tr>
          <td><span class="text-warning">51</span></td>
          <td>(DF) DOMMAGES PENDANT LES OP??RATIONS DE VOL, frappe d'oiseau ou de foudre, turbulence, atterrissage lourd ou en surpoids, collision pendant le roulage</td>
        </tr>
        <tr>
          <td><span class="text-warning">52</span></td>
          <td>(DG) DOMMAGES PENDANT LES OP??RATIONS AU SOL, collisions (autres que pendant le roulage), dommages lors du chargement/d??chargement, contamination, remorquage, conditions m??t??orologiques extr??mes</td>
        </tr>
        <tr>
          <td><span class="text-warning">55</span></td>
          <td>(ED) CONTR??LE DE D??PART</td>
        </tr>
        <tr>
          <td><span class="text-warning">56</span></td>
          <td>(EC) PR??PARATION/DOCUMENTATION DU CARGO</td>
        </tr>
        <tr>
          <td><span class="text-warning">57</span></td>
          <td>(EF) PLANS DE VOL</td>
        </tr>
        <tr>
          <td><span class="text-warning">58</span></td>
          <td>(EO) AUTRE SYST??ME AUTOMATIS??</td>
        </tr>
      </tbody>
   
    
    
      <tbody>
        <tr class="text-center border-dark">
          <td class="bg-success fw-lighter"></td>
          <td class="bg-success fw-lighter">Op??rations de vol et ??quipage</td>
        </tr>
        <tr>
          <td><span class="text-warning">61</span></td>
          <td>(FP) PLAN DE VOL, finition tardive ou modification de la documentation de vol</td>
        </tr>
        <tr>
          <td><span class="text-warning">62</span></td>
          <td>(FF) EXIGENCES OP??RATIONNELLES, carburant, modification de la charge</td>
        </tr>
        <tr>
          <td><span class="text-warning">63</span></td>
          <td>(FT) PROC??DURES D'EMBARQUEMENT OU DE D??PART TARDIFS DU PERSONNEL, autres que les connexions et les remplacements(poste de pilotage ou personnel complet)</td>
        </tr>
        <tr>
          <td><span class="text-warning">64</span></td>
          <td>(FS) P??NURIE DE PERSONNEL DE PONT, maladie, attente de remplacement, limites de temps de vol, repas d'??quipage,visa valide, documents de sant??, etc.</td>
        </tr>
        <tr>
          <td><span class="text-warning">65</span></td>
          <td> (FR) DEMANDE PARTICULI??RE DU PERSONNEL DE PONT, non conforme aux exigences op??rationnelles</td>
        </tr>
        <tr>
          <td><span class="text-warning">66</span></td>
          <td>(FL) PROC??DURES D'EMBARQUEMENT OU DE D??PART TARDIFS DU PERSONNEL DE CABINE, autres que les connexions et les remplacements</td>
        </tr>
        <tr>
          <td><span class="text-warning">67</span></td>
          <td>(FC) P??NURIE DE PERSONNEL DE CABINE, maladie, attente de remplacement, limites de temps de vol, repas d'??quipage, visa valide,documents de sant??, etc.</td>
        </tr>
        <tr>
          <td><span class="text-warning">68</span></td>
          <td>(FA) ERREUR OU DEMANDE PARTICULI??RE DU PERSONNEL DE CABINE, non conforme aux exigences op??rationnelles</td>
        </tr>
        <tr>
          <td><span class="text-warning">69</span></td>
          <td>(FB) DEMANDE DU COMMANDANT POUR UNE V??RIFICATION DE S??CURIT??, extraordinaire</td>
        </tr>
      </tbody>
    
    
    
      <tbody>
        <tr class="text-center border-dark">
          <td class="bg-success fw-lighter"></td>
          <td class="bg-success fw-lighter">M??t??o</td>
        </tr>
        <tr>
          <td><span class="text-warning">71</span></td>
          <td>(WO) STATION DE D??PART</td>
        </tr>
        <tr>
          <td><span class="text-warning">72</span></td>
          <td>(WT) STATION DE DESTINATION</td>
        </tr>
        <tr>
          <td><span class="text-warning">73</span></td>
          <td>(WR) EN ROUTE OU ALTERNATIF</td>
        </tr>
        <tr>
          <td><span class="text-warning">75</span></td>
          <td>(WI) D??GIVRAGE DE L'AVION, enl??vement de la glace et/ou de la neige, pr??vention de la gel??e excluant l'inaptitude de l'??quipement</td>
        </tr>
        <tr>
          <td><span class="text-warning">76</span></td>
          <td>(WS) ENL??VEMENT DE LA NEIGE, DE LA GLACE, DE L'EAU ET DU SABLE DE L'A??ROPORT</td>
        </tr>
        <tr>
          <td><span class="text-warning">77</span></td>
          <td>(WG) MANUTENTION AU SOL AFFECT??E PAR DES CONDITIONS M??T??OROLOGIQUES D??FAVORABLES</td>
        </tr>
      </tbody>
    
   
   
      <tbody>
       <tr class="text-center border-dark">
          <td class="bg-success fw-lighter"></td>
          <td class="bg-success fw-lighter">Restrictions de gestion de flux de trafic a??rien</td>
        </tr>
        <tr>
          <td><span class="text-warning">81</span></td>
          <td>(AT) ATFM en raison de la demande / capacit?? en route ATC, les probl??mes de demande / capacit?? standard</td>
        </tr>
        <tr>
          <td><span class="text-warning">82</span></td>
          <td>(AX) ATFM en raison de l'??quipement / personnel ATC en route, capacit?? r??duite caus??e par une action industrielle ou un manque de personnel, une panne d'??quipement, un exercice militaire ou une demande extraordinaire due ?? une r??duction de capacit?? dans une zone voisine/td>
        </tr>
        <tr>
          <td><span class="text-warning">83</span></td>
          <td> (AE) ATFM en raison de restrictions ?? l'a??roport de destination, a??roport et / ou piste ferm??e en raison d'obstacles, d'actions industrielles, d'un manque de personnel, de troubles politiques, d'att??nuation du bruit, de couvre-feu nocturne, de vols sp??ciaux</td>
        </tr>
        <tr>
          <td><span class="text-warning">84</span></td>
          <td>(AW) ATFM en raison du temps ?? l'a??roport de destination</td>
        </tr>
      </tbody>
    
    
    
      <tbody>
        <tr class="text-center border-dark">
          <td class="bg-success fw-lighter"></td>
          <td class="bg-success fw-lighter">Autorit??s gouvernementales</td>
        </tr>
        <tr>
          <td><span class="text-warning">85</span></td>
          <td>(AS) S??curit?? obligatoire</td>
        </tr>
        <tr>
          <td><span class="text-warning">86</span></td>
          <td>(AG) Immigration, douanes, sant??</td>
        </tr>
        <tr>
          <td><span class="text-warning">87</span></td>
          <td>(AF) Installations a??roportuaires, emplacements de stationnement, congestion de la rampe, ??clairage, b??timents, limitations de porte, etc.</td>
        </tr>
        <tr>
          <td><span class="text-warning">88</span></td>
          <td>(AD) Restrictions ?? l'a??roport de destination, a??roport et / ou piste ferm??e en raison d'obstacles, d'actions industrielles, d'un manque de personnel, de troubles politiques, d'att??nuation du bruit, de couvre-feu nocturne, de vols sp??ciaux</td>
        </tr>
        <tr>
          <td><span class="text-warning">89</span></td>
          <td>(AM) Restrictions ?? l'a??roport de d??part avec ou sans restrictions ATFM, y compris les services de la circulation a??rienne, le d??marrage et le recul, l'a??roport et / ou la piste ferm??e en raison d'obstacles ou de mauvais temps, d'actions industrielles, de manque de personnel, de troubles politiques, d'att??nuation du bruit, de couvre-feu nocturne, de vols sp??ciaux.</td>
        </tr>
      </tbody>
    
    
    
      <tbody>
        <tr class="text-center border-dark">
          <td class="bg-success fw-lighter"></td>
          <td class="bg-success fw-lighter"></td>
        </tr>
        <tr>
          <td><span class="text-warning">91</span></td>
          <td>(RL) CONNEXION DE CHARGEMENT, en attente de chargement d'un autre vol</td>
        </tr>
        <tr>
          <td><span class="text-warning">92</span></td>
          <td>(RT) ERREUR DE CHECK-IN, passagers et bagages</td>
        </tr>
        <tr>
          <td><span class="text-warning">93</span></td>
          <td> (RA) ROTATION D'AVION, arriv??e tardive d'un avion venant d'un autre vol ou d'un secteur pr??c??dent</td>
        </tr>
        <tr>
          <td><span class="text-warning">94</span></td>
          <td>(RS) ROTATION DE L'EQUIPAGE DE CABINE, en attente de l'??quipage de cabine d'un autre vol</td>
        </tr>
        <tr>
          <td><span class="text-warning">95</span></td>
          <td>(RC) ROTATION DE L'EQUIPAGE, en attente de l'??quipage d'un autre vol (croisementde vol ou ??quipage complet)</td>
        </tr>
        <tr>
          <td><span class="text-warning">96</span></td>
          <td>(RO) CONTR??LE DES OP??RATIONS, r??acheminement, diversion, consolidation, changement d'avion pour des raisons autres que techniques.</td>
        </tr>
      </tbody>
   
   
   
      <tbody>
        <tr class="text-center border-dark">
          <td class="bg-success fw-lighter"></td>
          <td class="bg-success fw-lighter">Divers</td>
        </tr>
        <tr>
          <td><span class="text-warning">97</span></td>
          <td>(MI) ACTION INDUSTRIELLE AVEC SA PROPRE COMPAGNIE A??RIENNE</td>
        </tr>
        <tr>
          <td><span class="text-warning">98</span></td>
          <td>(MO) ACTION INDUSTRIELLE HORS DE SA PROPRE COMPAGNIE A??RIENNE, excluant ATS</td>
        </tr>
        <tr>
          <td><span class="text-warning">99</span></td>
          <td>(MX) AUTRE RAISON, ne correspondant ?? aucun code ci-dessus.</td>
        </tr>
      </tbody>
    </table>
  </section>

  <section>
    <div class="text-center mt-5 mx-5">
      <h6 class="fw-lighter">Source IATA (AHM)</h6>
    </div>
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
               <a class="flex-sm-fill text-decoration-none  fw-lighter link-light spacingLetter text-uppercase boarding-text text-sm-center nav-link" aria-current="page" href="./A_propos.php">?? propos</a>
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
               <p class="text-center fw-lighter spacingLetter text-uppercase mb-5">2023 ?? WOB!</p>
             </div>
         </div>
     </div>
 </footer>
