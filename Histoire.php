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
    <nav class="navbar navbar-expand-lg shadow fixed-top" style="background-color:#66451A;">
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
  <div class="text-center mt-5 mx-5">
    <h1 class="fw-lighter spacingLetter text-uppercase" >l'histoire de l'aviation</h1> 
  </div>
  <div class="container">
    <div class="row ">
      <div class="col-lg-12 d-flex align-items-center">
        <div class="col-lg-12col-sm-10 col-10">
          <div class="tiretAvion mb-3" style="background:linear-gradient(.25turn,#D4C792,#444444);height: 5px;"></div>
        </div>
        <div class="">
          <a href="./projet.php"> <div class="iconeTiretAvion bg-transparent" style="content: url(img/icon-avion-cote.webp);width: 70px;height: 70px;"></div></a>
        </div>
      </div>
     </div>
  </div>                                    
</section>

<section class="text-white-50">
    <div class="clearfix mx-5 mt-5">
      
      <img src="./img_Histoire/800px-Wright_First_Flight_1903Dec17_(full_restore_115).jpg" class="col-sm-6 col-12 float-sm-end mb-3 ms-md-3 shadow-lg " alt="...">
      <h5 class="text-decoration-underline text-uppercase fw-light spacingLetter">
      L'histoire de l'aviation peut être divisée en six périodes :
      </h5>

      <p class="">
      L'époque des précurseurs: des premiers ornithoptères de l'antiquité, jusqu'au début du XVIIIe siècle l'être humain imagine – de manière plus ou moins réaliste – ce que pourrait être une machine volante. Puis à partir de la fin du XVIIIe siècle, cette période voit le débutde la conquête de l'air avec le développement de l'aérostation et de nombreuses tentatives de vol plané.
      </p>

      <p>
      Les pionniers du plus lourd que l'air:c'est la période des premiers vols d'engins à moteur capables de décoller par leurs propres moyens. Presque chaque vol est une première ou une tentative de record : un peu plus vite, un peu plus loin, un peu plus haut . Les aviateurs sont, le plus souvent, des concepteurs ou des aventuriers.
      </p>

      <p>
      La Première Guerre mondiale: quelques années seulement après le premier vol, cette période voit l'apparition d'une nouvelle arme sur le champ de bataille. On passe brutalement à une production en grande série, certains modèles d'avions étant même construits à plus d'un millier d'exemplaires ; les pilotes deviennent des « professionnels », même si le parfum d'aventure n'a pas totalement disparu.
      </p>

      <p>
      L'Entre-deux-guerres: la fin de la Première Guerre mondiale met sur le marché un surplus de pilotes et d'appareils qui permettent le lancement du transport aérien commercial et, en premier lieu, celui du courrier.L'aviation se développe et l'on assiste à la création d'une armée de l'air dans nombre de pays. L'aviation militaire pousse les constructeurs à battre de nouveaux records. Les progrès de l'aviation civile sont une retombée des études militaires.
      </p>

      <p>
      La Seconde Guerre mondiale: l'aviation est largement utilisée sur le champ de bataille. On peut considérer cette période comme l'apogée des avions utilisant un moteur à piston et une hélice comme moyen de propulsion. La fin de la guerre voit la naissance du moteur à réaction et du radar.
      </p>

      <p>
      La seconde moitié du xxe siècle: une fois encore, la fin de la guerre met sur le marché un surplus d'appareils et de pilotes. C'est le début du transport aérien commercial régulier « tout temps » capable de s'affranchir des conditions météorologiques et de pratiquer le vol sans visibilité. L'aéronautique militaire pousse au développement du réacteur, c'est ce qu'on appelle l'ère du jet, puis part ensuite à la conquête du vol supersonique. Les retombées civiles permettent le développement des premiers avions de ligne quadriréacteurs et le transport aérien s'ouvre à tous.
      </p>
    </div>
</section>



<section class="text-white-50">
    <div class="mx-5 mt-5">
        <h3 class="fw-light spacingLetter text-uppercase mt-5 text-decoration-underline">Les précurseurs</h3>
        <p class="mt-5">
            L'être humain a probablement très tôt rêvé de voler en imitant entre autres le vol des oiseaux. Des légendes de la mythologie grecque, dont celles de Dédale et Icare, ou du dieu Zeus(métamorphe en cygne ou en aigle), ou de Pégase, ou de nombreux récits apocryphes revendiquent des tentatives de vol d'ornithoptères bioniques harnachés d'ailes, ou de celles des tapis volant de la mythologie perse. Le cerf-volant chinois remonte au IVe siècleav. J.-C., et les égyptiens de l'antiquité égyptienne ont fabriqué des jouets ou maquettes en bois léger de balsa ayant la capacité de s'élever et de planer dans les airs. On attribue à Archytas de Tarente l'invention d'une colombeen bois capable de voler.
        </p>
    </div>

    <div class="row row-cols-1 row-cols-md-4 g-3 mx-5 mt-5 ">
      <div class="col">
        <div class="card h-100 bg-transparent border-warning border-opacity-10 shadow-lg p-3">
          <img src="img_histoire//Photo_2-plane_side_view1.jpg" class="card-img-top" alt="...">
          <div class="card-body text-center ">
            <p class="card-text fw-lighter">L'oiseau de Saqqarah (antiquité égyptienne, IIe siècle av. J.-C.).</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 bg-transparent  border-warning border-opacity-10 shadow-lg p-3">
          <img src="img_histoire/Dédalo_e_Ícaro_-_Pyotr_Ivanovich_Sokolov.jpg" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <p class="card-text fw-lighter">Mythe et légende du vol ornithoptère de Dédale et Icare, de la mythologie grecque.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 bg-transparent border-warning border-opacity-10 shadow-lg p-3">
          <img src="img_histoire/1600px-Ile_aux_Roses_017.jpg" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <p class="card-text fw-lighter">Le dieu métamorphe Zeus, en aigle (mythologie grecque).</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 bg-transparent border-warning border-opacity-10 shadow-lg p-3">
          <img src="img_histoire/FICA_2010-03.jpg" class="card-img-top" alt="...">
          <div class="card-bodytext-center">
            <p class="card-text fw-lighter">Cerf-volant géant chinois(IVe siècle av. J.-C.)</p>
          </div>
        </div>
      </div>
    </div>

    <div class="mx-5 mt-5">
      <p>
      Le jeu-jouet bambou-coptère, des années 320, de la dynastie Jin chinoise, est une des plus anciennes formes connues de rotor-pale-hélice-aile d'aéronef de l'histoire de l'aviation (arrivé en Europe au XVe siècle) et la lanterne céleste, du IIIe siècle, une des plus anciennes formes d'aéronef. Au IXe siècle en Andalousie, le savant ingénieur berbère Abbas ibn Firnas aurait fabriqué deux ailes garnies de plumes qu'il aurait attachées à son corps et, se lançant d'une hauteur, aurait plané sur une distance notable avant d'atterrir brutalement et de se casser le dos. Trois siècles plus tard, le moine bénédictin anglais Eilmer de Malmesbury, sans doute inspiré par la légende d'Icare et peut-être par un récit sur Abbas ibn Firnas, aurait tenté de voler au moyen d'ailes mécaniques.
      </p>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4 mx-5 mt-5">
      <div class="col">
        <div class="card h-100 bg-transparent border-warning border-opacity-10 shadow-lg p-3">
          <img src="img_histoire/Taketombo.JPG" class="card-img-top" alt="...">
          <div class="card-body ">

            <p class="card-text fw-lighter">Bambou-coptère volant chinois (années 320) une des plus anciennes formes connues de rotor-pale-hélice-aile d'aéronef de l'histoire de l'aviation.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 bg-transparent border-warning border-opacity-10 shadow-lg p-3">
          <img src="img_histoire/Chinese_lantern_(7914625430).jpg" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <p class="card-text fw-lighter">Lanterne céleste asiatique (IIIe siècle)</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 bg-transparent border-warning border-opacity-10 shadow-lg p-3">
          <img src="img_histoire/Macchina_volante_ad_ali_battenti_-_Museo_scienza_tecnologia_Milano_00428_01.jpg" class="card-img-top" alt="...">
          <div class="card-body text-end">
            <p class="card-text fw-lighter">Maquette de machines volantes de Léonard de Vinci du XVe siècle.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="mx-5 mt-5">
      <p>Vers les années 1480, Léonard de Vinci étudie sans succès de nombreuses premières formes de « machines volantes visionnaires » (ornithoptères de Léonard de Vinci, parachute, et vis aérienne, inspirés de son Codex sur le vol des oiseaux). En 1655, Robert Hooke, mathématicien, physicien et inventeur anglais, conclut à l'impossibilité du vol humain sans l'assistance de la puissance d'un « moteur artificiel ». Hezârfen Ahmed Çelebi (1609-1640) est un inventeur ottoman considéré comme l'un des pionniers de l'aviation pour avoir plané depuis la Tour de Galata à Istanbul.</p>
      <p>En 1783, les frères Montgolfier grâce à leur montgolfière (ballon à air chaud) et Jacques Charles grâce au ballon à gaz permettent à l'être humain de s'élever dans l'atmosphère, sans contrôle de la trajectoire, suivit par l'invention des ballons dirigeables. La solution de viendra de l'étude d'un jouet, le cerf-volant, connu en Orient depuis l'Antiquité mais qui ne sera introduit en Europe qu'au XIIIe siècle.</p>
      <p>En 1801, l'officier et inventeur français André Guillaume Resnier de Goué confectionna des ailes en fil de fer recouvert de taffetas ciré, avec lesquelles il effectua une série de tentatives à Angoulême. Son premier essai de « vol ramé » n'aboutit qu'à dévaler une pente rocheuse. Mais à sa deuxième tentative, sautant d'un pont haut de 5 mètres, il plana sur 50 mètres avant de plonger dans la Charente. Son troisième et dernier essai réussit. Sautant des remparts de la ville, il parcourut 300 mètres, survola la Charente et ne se cassa qu'une jambe à l'arrivée. Il avait 72 ans. Guillaume Resnier est sans doute le premier homme, après le Turc Hezârfen Ahmed Çelebi, qui ait réellement « volé », au sens de « planer ».</p>
    </div>

      <div class="d-flex mx-5 mt-5">
        <div class="card col-6 col-sm-6 me-3 bg-transparent border-warning border-opacity-10 shadow-lg p-3">
         <img src="img_histoire/776px-Governableparachute.jpg" class="card-img-top" alt="...">
          <div class="card-">
            <p class="fw-lighter">Planeur conçu par George Cayley (1804): les bases de la structure de l'avion sont jetées.</p>
          </div>
        </div>
        <div class="clearfix">
           <img src="./img_Histoire/Replica_1853_Cayley_Glider_(BAPC89)_(50731050317).jpg" class="col-sm-6 col-6 float-sm-start mb-3 md-3 shadow-lg p-1" alt="...">
           <p>Le Britannique George Cayley (1773-1857) met en évidence quatre forces aérodynamiques du vol, la poussée, la traînée, le poids et la portance-décrochage. Il comprit également qu'il était inutile de reproduire le vol battu des oiseaux et que les ailes devaient être fixes ; il prévit la nécessité d'un empennage pour stabiliser le vol. S'inspirant des travaux des Français Launoy, il construit un hélicoptère en 1796 puis, en 1808, un « ornithoptère » à l'échelle humaine et, en 1809, un planeur qui volera sans passager.</p>
           <p>William Samuel Henson et John Stringfellow, reprenant les travaux de Cayley, font voler un modèle réduit d'aéroplane à vapeur. Néanmoins, les moteurs puissants pour les appareils à taille réelle sont beaucoup trop lourds pour leur permettre de décoller. En 1837, Isidore Didion3 en conclusion d'une étude théorique fine affirma que « La navigation aérienne n'aura de succès que si l'on trouve un moteur capable de produire une force motrice dont le rapport avec le poids de la machine qu'elle exigerait pour être soutenue, soit plus grand que les machines à vapeur actuelles, ou que chez l'humain ou la plupart des animaux ». Les progrès vont donc d'abord passer par les planeurs et par l'étude de l'aérodynamique.</p>
        </div>
        </div>
      </div>
    </div>

    <div class="mx-5 mt-5">
      <p>Entre 1857 et 1868, le Français Jean-Marie Le Bris essaie successivement deux planeurs de son invention, d'abord depuis les collines de la baie de Douarnenez (Finistère), puis sur la hauteur du Polygone de la Marine, près de Brest (Finistère), reprenant ainsi en France les travaux des pionniers britanniques de la décennie précédente. En 1863, le terme « aviation » est inventé par Gabriel de La Landelle. Le Britannique Francis Herbert Wenham (en), en 1871, construit ce qui est probablement la première soufflerie, qui va permettre d'expérimenter des maquettes.</p>
      <p>Le français Louis Mouillard s'inspire de l'aile d'oiseau pour concevoir des planeurs dont la voilure est courbée. Il propose le gauchissement des ailes.</p>
    </div>

    <div class="clearfix mx-5 mt-5">
      <img src="./img_Histoire/LeBris1868.jpg" class="col-sm-6 col-12 float-sm-end mb-3 ms-md-3 shadow-lg p-1" alt="...">
      <p>Entre 1857 et 1877, les Français Félix et Louis du Temple essaient des modèles réduits à moteur à ressort, en les aidant d'un plan incliné, puis peut-être un engin, muni d'un moteur à vapeur, monté par un matelot.</p>
      <p>En 1871, Alphonse Pénaud fait voler avec succès son modèle réduit « aéroplane automoteur », un monoplan à empennage, configuration devenue maintenant la plus répandue. La même année, durant le siège de Paris, un réseau de communication par ballon monté est organisé. Associés à Nadar, deux ateliers sont fondés : celui des frères Louis et Eugène Godard à la gare d'Austerlitz, et celui de Camille Dartois et Gabriel Yon à la gare du Nord. Cette première fabrication en série d'aéronefs, marque la naissance officielle de l'industrie aéronautique.</p>
    </div>

    <div class="mx-5 mt-5">
      <p>Quelques années plus tard, Eugène Godard, Louis II Godard et Gabriel Yon fondent les Grands Ateliers Aérostatiques du Champ-de-Mars, la plus importante manufacture aéronautique, rue Desaix à Paris.</p>
      <p>Les essais de planeurs se succèdent, et s'y prêtent tour à tour l'Allemand Otto Lilienthal, le Britannique Percy Pilcher, les Américains John Joseph Montgomery et Maloney, et les Français Ferdinand Ferber, Maurice Colliex ainsi que les frères Voisin.Les essais de planeurs se succèdent, et s'y prêtent tour à tour l'Allemand Otto Lilienthal, le Britannique Percy Pilcher, les Américains John Joseph Montgomery et Maloney, et les Français Ferdinand Ferber, Maurice Colliex ainsi que les frères Voisin.</p>
    </div>
</section>

<section class="text-white-50">
  <div class="mx-5 mt-5">
    <h3 class="fw-light  spacingLetter text-uppercase text-decoration-underline">Les pionniers du «plus lourd que l'air»</h3>
  </div>

  <div class="mx-5 mt-5">
    <h5 class="text-decoration-underline text-uppercase fw-light spacingLetter">Premiers planeurs</h5>
    <p>Le premier être humain ayant volé à bord d'un planeur est Abbas Ibn Firnas en 875, il conçut un planeur à base de bois et de tissu de soie (décoré de plumes de différents oiseaux) avec lequel il s’élança des collines d’Arruzafa, situées à proximité de Cordoue. Persuadé que son invention allait fonctionner, il avait incité des centaines de personnes à se placer tout au long du parcours. De nombreux membres de la cour de Muhammad Ier, émir du califat d’Al-Andalus4, étaient également présents. Profitant des courants, le vol fut soutenu et dura entre deux et dix minutes (en fonction des chroniques de l’époque). Malgré un atterrissage mouvementé, non seulement il survécut, mais il devint à juste titre le premier homme à voler sur un engin plus lourd que l’air.</p>
    <p>Le premier être humain ayant volé en contrôlant la trajectoire de sa machine est l'inventeur allemand Otto Lilienthal, qui a effectué entre 1891 et 1896 deux mille vols planés depuis une colline artificielle à proximité de Berlin (invention à l'origine des planeur, deltaplane, parapente, et planeur ultra-léger motorisé modernes).</p>
  </div>

  <div class="mx-5 mt-5">
    <div class="row row-cols-1 row-cols-md-4 g-3">
      <div class="col">
        <div class="card h-100 bg-transparent border-warning border-opacity-10 shadow-lg p-3">
          <img src="img_histoire/Lilienthalgleiter_modelle.jpg" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <p class="card-text fw-lighter ">Premiers planeurs d'Otto Lilienthal.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 bg-transparent border-warning border-opacity-10 shadow-lg p-3">
          <img src="img_histoire/Un_vol_d'Otto_Lilienthal,_impression_d'artiste.gif" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <p class="card-text fw-lighter">Un des vols d'Otto Lilienthal (1895),impression d'artiste.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 bg-transparent border-warning border-opacity-10 shadow-lg p-3">
          <img src="img_histoire/1600px-Muenchen_Deutsches_Museum_Lilienthal_glider_03.jpg" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <p class="card-text fw-lighter">Planeurs d'Otto Lilienthal</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 bg-transparent border-warning border-opacity-10 shadow-lg p-3">
          <img src="img_histoire/1600px-Right_front_view_of_glider_in_flight_(cropped).jpg" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <p class="card-text fw-lighter">Planeur Wright de 1902</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="mx-5 mt-5">
    <p>Les premiers vols sur une machine volante pilotée par gouvernes agissant sur les trois axes (tangage, roulis, lacet) ont été réalisés par les frères Wright sur leur planeur Wright de 1902.</p>
  </div>

  <div class="mx-5 mt-5">
    <h5 class="text-decoration-underline text-uppercase fw-light spacingLetter">Premier décollage motorisé</h5>
    <p>En 1888 l'inventeur allemand Gottlieb Daimler motorise avec succès son ballon dirigeable Daimler, avec son invention de moteur à gaz Daimler mono-cylindre, et 2 hélices pour avancer ou monter, un des premiers vols motorisés historiques de l'histoire de l'aviation.</p>
  </div>

  <div class="card mb-3 mx-5 mt-5 bg-transparent border-warning border-opacity-10 shadow-lg p-3">
  <img src="img_histoire/Anim_Avion_III_Clément_Ader.gif" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text text-center fw-lighter">Essai au point fixe de la force motrice de l'Ader Avion III de Clément Ader (animation d’artiste d'après la photographie d'époque).</p>
  </div>
</div>

<div class="clearfix mx-5 mt-5 w-75 ">
  <img src="img_histoire/1600px-Wikipedia_Takes_Musée_des_Arts_et_Métiers_-_Avion_III_003.jpg" class="col-sm-6 col-12 float-sm-start me-4 shadow-lg p-1" alt="...">

  <p>
  Le premier inventeur à déclarer avoir volé dans un avion motorisé est le Français Clément Ader, aux commandes de son « Avion » inspiré de chauve-souris géante à géométrie modifiable, à moteur bicylindre à vapeur d'alcool de sa conception. La première tentative a lieu en 1890 aux commandes de l'Éole ; les marques laissées par les roues dans le sol meuble auraient été moins marquées par endroit et auraient totalement disparu sur une vingtaine ou une cinquantaine de mètres. L'engin volant aurait ainsi effectué un bond ; il n'y avait pas de témoins autres que des employés d'Ader. La même machine, essayée devant des témoins officiels en 1891, ne donnera pas d'autres résultats.
  </p>
</div>

<div class="clearfix mx-5 mt-2">
  <img src="img_histoire/L'Avion_III_d'Ader_au_1er_salon_de_l'aéronautique.jpg" class="col-sm-6 col-12 float-sm-end mb-3 ms-md-3 ms-4 shadow-lg p-1" alt="...">

  <p>
  Les essais suivants d'Ader eurent lieu au camp militaire de Satory, à Versailles, où avait été établie une aire circulaire de 450 mètres de diamètre pour effectuer une démonstration officielle.
  </p>

  <p>
  Le 12 octobre 1897, Ader fit un premier tour sur ce circuit à bord de son Ader Avion III. Il sentit à plusieurs reprises l'appareil quitter le sol, puis reprendre contact5. Deux jours plus tard, alors que le vent était fort, Clément Ader lança sa machine devant deux officiels du ministère de la Guerre qui déclarèrent : « Il fut cependant facile de constater, d'après le sillage des roues, que l'appareil avait été fréquemment soulevé de l'arrière et que la roue arrière formant le gouvernail n'avait pas porté constamment sur le sol ». Les deux membres de la commission le virent sortir brusquement de la piste, décrire une demi-conversion, s'incliner sur le côté et enfin rester immobile (il semble que, la roue arrière n'ayant plus assez d'adhérence du fait de la sustentation, le pilote ait perdu le contrôle directionnel de sa machine qui est alors sortie de la piste puis s'est renversée sous l'effet du vent). À la question « [...] l'appareil a [-t-il] tendance à se soulever quand il est lancé à une certaine vitesse ? » la réponse est « [...] la démonstration... n'a pas été faite dans les deux expériences qui ont été effectuées sur le terrain6 ». Devant cet échec, le ministère de la Guerre coupèrent les crédits à Ader. On[Qui ?] peut conclure que, ce 14 octobre 1897, le Français Clément Ader aurait peut-être effectué[évasif] le premier décollage motorisé – mais non contrôléN 3 – d'un plus lourd que l'air7.
  </p>
</div>

<div class="mx-5  mt-5">
  <h5 class="text-decoration-underline text-uppercase fw-light spacingLetter">Premier vol motorisé contrôlé</h5>
</div>


<div class="clearfix  mx-5 mt-5">
      <img src="img_histoire/Wrightflyer.jpg" class="col-sm-6 col-12 float-sm-end mb-3 ms-md-3 shadow-lg p-1" alt="...">
    
        <p>Après la mise au point en vol de leur planeur entre 1900 et 1903, avec plus de 700 vols en 1902, les frères Wright ont expérimenté leur premier avion, le Flyer à moteur 4 cylindres Wright de 12 ch, dans les dunes de Kitty Hawk le 17 décembre 1903. Les deux frères pilotent à leur tour ; ils effectuent quatre vols, le dernier étant le plus long : Orville vole sur 284 mètres pendant 59 secondes8.</p>
        <p>Ces vols sont généralement considérés comme les premiers vols motorisés et contrôlés d'un plus lourd que l'air. Leurs détracteurs, notamment les partisans d'Alberto Santos- Dumont et de Gabriel Voisin, leur reprochent d'avoir eu besoin d'un rail fixé au sol et d'une catapulte à contre poids pour le décollage, le Flyer étant dépourvu de roues ; la faible puissance du moteur ne permettait pas non plus le décollage par vent faible.</p>
</div>

<div class="clearfix mx-5  mt-5">
    <img src="img_histoire/1904-10-04_Huffman-Prairie_WrightFlyerIII.jpg" class="col-sm-6 col-12 float-sm-end mb-3 ms-md-3 shadow-lg p-1" alt="...">
      <p class="card-text">Le souhait des inventeurs de protéger leur invention à partir des vols du Wright Flyer III en 1905, l'absence de démonstrations publiques et le faible nombre de témoins de leurs vols jouèrent un rôle négatif pour leur publicité. La maîtrise de la technique de vol des Wright a été reconnue plus tard lors des différentes démonstrations que les Wright effectuèrent en France, notamment à Auvours dans la Sarthe en 1908.</p>
      <p class="card-text">Selon des recherches historiques9, le premier vol motorisé aurait été réalisé par l'ingénieur américain d'origine allemande Gustav Weißkopf (ou Gustave Whitehead)10 en 1901. La journaliste américaine Stella Randolph11 a publié un ouvrage sur cet ingénieur en 1930 : Before the Wrights flew12.</p>
      <p class="card-text">Ferdinand Ferber effectue à Chalais-Meudon le 27 mai 1905 le premier vol d'un avion à moteur en Europe. Le capitaine Ferber, polytechnicien et officier d'artillerie, était en contact avec les frères Wright. Comme eux il avait commencé par apprendre à piloter les planeurs qu'il construisait, puis en 1903 il avait motorisé et testé sous un portique son avion n°6 avant d'effectuer le premier vol libre. Comme le premier Flyer des frères Wright, son moteur n'était pas assez puissant pour assurer un décollage sans l'aide d'un dispositif de lancement. Pionnier oublié de l'histoire de l'aviation, il meurt en septembre 1909.</p>
</div>

<div class="mx-5 mt-5">
  <h5 class="text-decoration-underline text-uppercase fw-light spacingLetter">Premiers vols motorisés contrôlés autonomes</h5>
  <p>Traian Vuia vola à Montesson le 18 mars 1906 avec un appareil plus lourd que l'air autopropulsé (sans mécanisme de lancement) sur une distance d'environ 12 mètres à une altitude d'un mètre. Ce vol se terminant par un accident, Vuia ne reprit ses essais qu'à partir du mois de juillet après avoir réparé et modifié son appareil. Le 19 août 1906 il vola sur une distance de 25 mètres à une altitude de 2,5 mètres à Issy-les-Moulineaux14.
</p>
</div>

<div class="row row-cols-1 row-cols-md-3 g-4 mx-5 mt-5">
  <div class="col">
    <div class="card h-100 bg-transparent border-warning border-opacity-10 shadow-lg p-3">
      <img src="img_histoire/Vuia_I_-_1906_(4).png" class="card-img-top" alt="...">
      <div class="card-body text-center">
        <p class="card-text fw-lighter">Traian Vuia à bord de Vuia I (1906).</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100 bg-transparent border-warning border-opacity-10 shadow-lg p-3">
      <img src="img_histoire/Santos-Dumont_testing_No.14-bis.jpg" class="card-img-top" alt="...">
      <div class="card-body text-center">
        <p class="card-text fw-lighter">Le 14-bis d'Alberto Santos-Dumont (1906).</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100 bg-transparent border-warning border-opacity-10 shadow-lg p-3">
      <img src="img_histoire/Busson_à_Issy-les-Moulineaux_(Octobre_1910),_sur_Monoplan_Deperdussin_(7843389064).jpg" class="card-img-top" alt="...">
      <div class="card-body text-center">
        <p class="card-text fw-lighter">Monoplan Armand Deperdussin (1910).</p>
      </div>
    </div>
  </div>
</div>

<div class="mx-5 mt-5">
  <p>Le Brésilien Alberto Santos-Dumont vola à Bagatelle le 23 octobre 1906 sur soixante mètres à une altitude de deux à trois mètres. Grâce à ce vol à bord du 14-bis, il remporta devant un large public le prix Archdeacon décerné par l'Aéro-Club de France pour le vol d'un plus lourd que l'air autopropulsé (sans mécanisme de lancement). Ses détracteurs – entre autres les partisans des frères Wright – lui reprochent de ne pouvoir voler qu'en effet de sol, alors que le Wright Flyer III pouvait déjà prendre de l'altitude lorsqu'il vola sur 39,5 kilomètres le 5 octobre 1905.</p>
  <p class="mt-3">Le vol public de Bagatelle le 23 octobre 1906 marque sans doute l'apparition des premiers meetings aériens, présentations durant lesquelles les pilotes exposent leur dextérité et les possibilités de leurs appareils devant un public de curieux.</p>
</div>

<div class="mx-5 mt-5">
  <h5 class="text-decoration-underline text-uppercase fw-light spacingLetter">Le perfectionnement des machines (1905-1914)</h5>
</div>

<div class="clearfix mx-5 mt-5">
  <img src="img_histoire/R.E.P._1.jpg" class="col-sm-6 col-12 float-sm-start mb-3 ms-md-3 me-3 shadow-lg p-1" alt="...">
  <p>En 1905, Robert Esnault-Pelterie invente l’aileron en modifiant un avion de sa construction conçu d'après le Flyer des frères Wright. En 1906, il invente le moteur en étoile. En décembre, il dépose le brevet du manche à balai. En 1907, il est le premier à faire voler un avion monoplan à structure métallique, le Esnault-Pelterie REP1 dont il a assuré entièrement la conception et l'assemblage, y compris ceux du moteur.</p>
  <p>Entraînée au pilotage par Léon Delagrange sur son biplan Voisin frères, Thérèse Peltier effectue son premier vol solo en septembre 1908, devenant de ce fait la première femme pilote.</p>
  <p>Le 30 octobre 1908, au Camp de Mourmelon décolle Henri Farman au volant de son Voisin pour la réalisation du premier vol inter-villes, il parcourt 27 km et atteint à Reims après un vol de 17 min.</p>
</div>

<div class="mx-5 mt-5">
  <p>Le 3 juillet 1909, au champ d'aviation de la Brayelle près de Douai, durant l'un des premiers meetings aériens Louis Blériot avec son monoplan vole 47 km en 1 h 7 ; et Louis Paulhan avec son biplan, bat le record de hauteur avec 150 mètres.</p>
</div>

<div class="row row-cols-1 row-cols-md-3 g-4 mx-5 mt-5">
  <div class="col">
    <div class="card  bg-transparent border-warning border-opacity-10 shadow-lg p-3 shadow-lg p-1">
      <img src="img_histoire/The_channel_flight._Blériot,_July_25th_1909_LCCN2003662010.tif.jpg" class="card-img-top" alt="...">
      <div class="card-body text-center">
        <p class="card-text fw-lighter">Première traversée historique de la Manche, par Louis Blériot sur son Blériot XI, du 25 juillet 1909</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="ms-5">
      <div class="">
        <p class="">Le 25 juillet 1909, Louis Blériot traverse la Manche aux commandes de son Blériot XI. L’évènement a un retentissement international historique. Le Daily Mail, organisateur du concours, titre : « L'Angleterre n'est plus une île ».</p>
        <p class="">Du 22 au 29 août 1909, est organisé le premier meeting aérien international : la prestigieuse « Grande Semaine d'aviation de la Champagne » de Reims – sur la commune de Bétheny, à l'emplacement de l'ancienne base aérienne 112 Reims-Champagne – à laquelle participent tous les pilotes pionniers les plus célèbres de l'époque, dont Louis Blériot, Henri Farman, René Moineau, Louis Paulhan, Hubert Latham, Glenn Curtiss, Roger Sommer... Près d'un million de spectateurs y assistent.</p>
      </div>
    </div>
  </div>
  <div class="">
    <div class=" card w-50 ms-5 bg-transparent border-warning border-opacity-10 shadow-lg p-3 shadow-lg p-1">
      <img src="img_histoire/Thérèse_Peltier_1908.jpg" class="card-img-top" alt="...">
      <div class="card-body text-center">
        <p class="card-text fw-lighter">Thérèse Peltier, première femme pilote de 1908</p>
      </div>
    </div>
  </div>
  </div>

  <div class="mx-5 mt-5">
    <p>En 1909, est établie à Pau la première école d'aviation organisée au monde par les frères Wright, suivie peu après par celle créée par Louis Blériot qu'il peut ouvrir grâce à sa traversée réussie de la Manche et dont il confia la direction à Henri Sallenave.</p>
    <p>En 1909, le 23 mai, Port-Aviation présente un aérodrome complet, doté de toutes les installations et infrastructures nécessaires aux activités aériennes.</p>
  </div>

  <div class="card mb-3 mx-5 mt-5 bg-transparent border-warning border-opacity-10 shadow-lg p-3 shadow-lg p-1">
    <img src="img_histoire/1st_Nat'l_Aviation_Meet,_Indianapolis_Motor_Speedway,_June_13-18,_1910.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-text text-center fw-lighter">Meeting aérien de l'Indianapolis Motor Speedway d'Indianapolis, en 1910.</p>
    </div>
  </div>

<div class="mx-5 mt-5">
  <p>Le 8 mars 1910, Élisa Deroche (1882-1919) devient la première femme brevetée au monde, avec le brevet de pilote no 36 décerné par l'Aéro-Club de France.</p>
  <p></p>
</div>

<div class="clearfix mx-5 mt-5">
  <img src="img_histoire/Canard_fabre_1911.jpg" class="col-sm-6 col-12 float-sm-end mb-3 ms-md-3 ms-3 shadow-lg p-1" alt="...">
  <p>Le premier vol autonome d'un hydravion est réalisé par Henri Fabre, qui décolle le 28 mars 1910 de l'étang de Berre, à Martigues en Provence, avec son hydro-aéroplane « Canard ». L'exploit est constaté par huissier.</p>
  <p>En Suisse, le premier avion décolle à Avenches le 10 mai 1910 ; le monoplan, construit localement par René Grandjean, est piloté par Ernest Failloubaz.</p>
</div>

<div class="clearfix mx-5 mt-5">
  <img src="img_histoire/Coanda_1910.png" class="col-sm-6 col-12 float-sm-start mb-3 ms-md-3 me-3 shadow-lg p-1" alt="...">
  <p>Le Coandă-1910 (en), premier vol autonome d'avion à réaction, conçu et piloté par l'ingénieur roumain Henri Coandă, et construit dans l'atelier de carrosserie de Joachim Caproni, a lieu en octobre 1910, au 2e salon international de l'aéronautique et de l'espace de Paris-Le Bourget : l'air est aspiré à l'avant par un compresseur, puis dirigé vers une chambre de combustion (une de chaque côté, à l'avant de l'appareil) qui fournit la poussée. Le compresseur est mis en mouvement par un moteur à piston classique et non par une turbine comme dans les réacteurs modernes.</p>
</div>
  
<div class="clearfix mx-5 mt-5 ">
  <img src="img_histoire/A_Vlaicu_III_03.png" class="col-sm-6 col-12 float-sm-end mb-3 ms-md-3 me-3 shadow-lg p-1" alt="...">
  <p>En 1911, le pilote Robert Grandseigne effectue le premier vol de nuit au-dessus de Paris.</p>
  <p>En 1912, Aurel Vlaicu vole à mille mètres avec le premier avion à carlingue métallique, le A Vlaicu III (en).</p>
  <p>En 1913, Adolphe Pégoud effectue les premiers loopings.</p>
</div>

<div class="mx-5 mt-5">
  <h5 class="text-decoration-underline text-uppercase fw-light spacingLetter">Le premier vol commercial</h5>
  <p>Les premiers vols sont le fait d'aventuriers, de sportifs et aussi, considérant le coût, le terrain de jeux de quelques riches individus. Les avions étaient petits et peu de gens leur imaginaient un avenir commercial. Pourtant, dès 1914, un entrepreneur américain P.E. Fansler ouvre la première ligne aérienne régulière en Floride, entre St. Petersburg et Tampa, en utilisant un hydravion Benoist type XIV de 75 ch d'une capacité d'un passager. La compagnie survivra pendant quatre mois et transportera 1 205 passagers avant de cesser ses opérations2. La Poste est, elle aussi, intéressée par le transport de courrier de poste aérienne par avion postal, mais la Première guerre mondiale interrompt les projets qui ne reprendront qu'en 1918. Le 8 février 1919, Lucien Bossoutrot réalise le premier vol commercial entre Paris et Londres, depuis l'aéroport de Toussus-le-Noble, sur un Farman F.60 Goliath18. Le 10, Georges Boulard ouvre la première ligne commerciale aérienne régulière à l'international, de capitale à capitale en concluant le Paris - Bruxelles.</p>
</div>

</section>

<section class="text-white-50">

  <div class="mx-5 mt-5">

      <h3 class="fw-light  spacingLetter text-uppercase text-decoration-underline">L'Aviation durant la Première Guerre mondiale</h3>
      <div class="clearfix  mt-5 ">
        <img src="img_histoire/King-Bugatti_U16_2.jpg" class="col-sm-6 col-12 float-sm-end mb-3 ms-md-3 me-3 shadow-lg p-1" alt="...">
        <p>Dans les années qui précèdent la Première Guerre mondiale, les tensions grandissantes en Europe incitent les gouvernements à s'intéresser à l'aviation en tant qu'arme de guerre. D'où l'organisation par la France du fameux concours d’aéroplanes militaires de Reims (octobre et novembre 1911), premier concours de ce type de l'histoire mondiale de l'aviation. Les différents constructeurs français et britanniques notamment, se livrent à une course contre la montre pour tenter d'obtenir des commandes à l'export.</p>
        <p>Léopold Trescartes, titulaire du brevet civil de l'Aéroclub de France no 842 délivré le 16 avril 1912, effectue le 7 septembre 1912 le premier vol au-dessus de Porto (Portugal) à bord d'un biplan de type MF-4 fabriqué par Maurice Farman. Cet avion, officiellement acheté par un journal de Porto et dont les exhibitions servent, pour le grand public, à financer la construction d'une crèche, est en réalité un modèle destiné à convaincre le gouvernement portugais d'acheter des avions français dans le cadre de la création d'une force aérienne. Après de nombreuses démonstrations, en présence notamment du ministre de la guerre portugais, le choix des autorités portugaises se portera finalement sur un appareil britannique de marque Avro, type Avro 500. Le MF- 4 de démonstration sera ultérieurement offert au gouvernement portugais et sera utilisé au sein du bataillon Aerosteiros puis à l'école militaire d'aéronautique de Vila Nova da Rainha.</p>
      </div>
      <div class="mt-5">
      <p>Avions et pilotes pionniers (volontaires détachés d'autres unités qui gardaient leur uniforme d'origine, surtout recrutés dans la cavalerie) sont réquisitionnés pour des missions de reconnaissance. Cibles des deux camps au sol, ils sont décimés. Les grandes nations se dotent très vite d'une aviation militaire où les avions se spécialisent : reconnaissance, chasseurs, bombardiers.</p>
      <p>Une course aux records est engagée pour prendre l'avantage sur l'ennemi, l'armement étant amélioré avec l'apparition des premières mitrailleuses synchronisées. Le parachute fait son apparition, mais est seulement utilisé par les pilotes de dirigeables, les avions volant trop bas pour qu'il soit efficace. Au sol, on construit des aérodromes, et l'avion est fabriqué en séries</p>
      <p>Le 5 octobre 1914, tout près de Reims, se déroule au-dessus du point de jonction des communes de Jonchery-sur-Vesle, de Prouilly et de Muizon, le premier combat aérien de l’histoire mondiale de l’aviation militaire, avec un avion abattu. Le combat est remporté par le pilote Joseph Frantz et le mécanicien Louis Quenault de l'escadrille V 24 sur un Voisin III, contre le sergent Wilhelm Schlichting (pilote) et l'oberleutnant Fritz von Zagen (observateur) sur un Aviatik allemand. À la suite, les duels aériens se multiplient. Si les premiers combats sont très rares et dangereux (fusils embarqués, qui nécessitent une dextérité extrême), le développement des mitrailleuses synchronisées (faisant suite aux hélices blindées sur le passage des balles, invention de l'aviateur français Roland Garros) améliore l'efficacité des batailles. Notamment parce que ce dispositif permettait de tirer les balles d'une mitraillette à travers les hélices des avions. Contrairement à l'horreur des tranchées (boue,bombardements constants...) la guerre aérienne est vue comme une guerre propre (si tant est que cela soit possible). Dans les représentations des pilotes comme des civils et de l'infanterie, qui suivent avec assiduité la guerre du ciel, l'aviation possède un côté noble, chevaleresque ; Guynemer refusera d'abattre Ernst Udet car sa mitrailleuse s'était enrayée. Il y a une grande compétition entre les « As », tant entre ennemis qu'au sein d'un même camp.</p>
      </div>
      <div class="clearfix  mt-5 ">
        <img src="img_histoire/CapitaineMarcelCourmes1915.png" class="col-sm-6 col-12 float-sm-end mb-3 ms-md-3 me-3 shadow-lg p-1" alt="...">
        <p>Les grandes figures de cette époque sont les Français Guynemer et René Fonck (plus grand As français et de la guerre selon la méthode de calcul), ainsi que les Allemands Manfred von Richthofen (surnommé Le Baron Rouge), et Ernst Udet.</p>
        <p>Le soir du 10 juin 1916 a lieu le premier combat aéronaval de l’Histoire, en Afrique équatoriale. Un hydravion de fabrication britannique de type Short 184, piloté par les lieutenants belges Behaeghe et Collignon, bombarde avec succès la canonnière allemande Graf von Götzen dans le port de Kigoma (actuelle Tanzanie) sur le lac Tanganyika à l’aide d’une de ses deux bombes de 65 livres qui l’atteint au gaillard d'arrière mettant hors d'état sa gouverne19. Le navire est ainsi neutralisé ce qui brise le verrou allemand sur le lac, entre le Congo belge et l’Est Africain allemand qui avait été mis en place deux ans plus tôt. Les canonniers allemands n’ont pu riposter contre cette attaque aérienne car leurs pièces d’artillerie, prévues pour des cibles côtières ou navales (nous n'étions qu'au début de l'aviation), ne s’élevaient pas selon un angle suffisant pour menacer des avions (considérés par les Allemands comme inexistants en Afrique équatoriale). L’hydravion rejoignit sa base néanmoins avec 20 atteintes de balles de mitrailleuses tirées de Kigoma et un flotteur percé20.</p>
      </div>

      <div class="mt-5 mx-5">
        <li class="text-decoration-underline">À la fin de la guerre, il y a :</li>
        <ul>
          <li>4 500 avions français.</li>
          <li>3 500 avions britanniques</li>
          <li>2 500 avions allemands.</li>
        </ul>
        <li>Marie Marvingt invente en 1914 l'aviation sanitaire.</li>
      </div>
  </div>

</section>

<section class="text-white-50">
  <div class="mx-5 mt-5">
  
    <h3 class="fw-light  spacingLetter text-uppercase text-decoration-underline text-uppercase">L'entre-deux-guerres (1918-1939)</h3>
    <p class="mt-5">L'aviation doit trouver d'autres voies que l'utilisation militaire. De nombreux pilotes se tournent vers les exhibitions, l'acrobatie, les tentatives de records. Les constructeurs cherchent à trouver de nouvelles exploitations commerciales : premières lignes de passagers, transport du courrier, comme en France les usines Latécoère qui créent un service postal en direction du Sénégal, via l'Espagne et le Maroc, utilisant d'abord les anciens appareils militaires, puis les nouveaux modèles construits par l'entreprise.</p>

  </div>

  <div class="mx-5 mt-5">
    <h5 class="text-decoration-underline text-uppercase fw-light spacingLetter">L'époque des « grandes premières »</h5>
  </div>

  <div class="clearfix mx-5 mt-5 ">
    <img src="img_histoire/Baronesse_Raymonde_de_LaRoche.jpg" class="col-sm-6 col-12 float-sm-end mb-3 ms-md-3 me-3 shadow-lg p-1" alt="...">
    <ul>
      <li class="fw-lighter">Henri Farman, parcourant le 30 octobre 1908 les vingt-sept kilomètres qui séparent le petit village marnais de Bouy de la ville Reims, effectue à bord d'un aéroplane Voisin le premier voyage aérien de l’histoire de l’aviation.</li>
      <li class="fw-lighter">Premier vol trans-Manche : en 1909, le 25 juillet, Louis Blériot à bord de son Blériot XI traverse la Manche en 37 minutes.</li>
      <li class="fw-lighter">En 1910, le premier vol militaire de l'armée française est effectué par Albert Féquant et Charles Marconet. Ce vol part du Camp de Mourmelon pour atterrir à Vincennes. Il dura 2h30 pour un total de 160 kilomètres.</li>
      <li class="fw-lighter">En 1911, le 7 mars, Eugène Renaux à bord de son biplan Farman, effectue le vol Paris - Puy-de-Dôme en 5 heures et 10 minutes avec un ravitaillement près de Nevers, remportant ainsi le Prix Michelin d'aviation.</li>
      <li class="fw-lighter">Traversée de la Méditerranée : en 1913, le 23 septembre, Roland Garros traverse la Méditerranée en 7 heures et 53 minutes, sur un Morane-Saulnier Type H.</li>
      <li class="fw-lighter">Traversée du Sahara : du 3 février 1920 au 31 mars 1920, le Breguet XIV de Joseph Vuillemin relie Alger à Dakar, survolant pour la première fois le Sahara, tandis que l'autre avion, à bord duquel le général Laperrine a pris place, subit un accident au cours duquel le général trouve la mort.</li>
      <li class="fw-lighter">Vers le continent africain : le 5 février 1925, partant de Bruxelles (aérodrome de Haren), Edmond Thieffry, as de l'aviation belge de la Première Guerre mondiale, s'envole à bord d'un Handley Page (à moteurs Rolls Royce) pour relier les colonies. Le voyage durera 51 jours (à la suite de nombreuses pannes, avaries, casses...) mais finalement, le Princesse Marie-José se pose magistralement à Léopoldville (actuel Kinshasa au Congo) après plus de 75 heures et 21 minutes de vol effectif, ayant traversé sur plus de 3 500 km des zones jamais survolées jusqu'alors.</li>
      <li class="fw-lighter">Traversées de l'Atlantique Nord :avec escales (par les Açores et Lisbonne), de Long Island à Plymouth en mai 1919, par Albert Cushing Read ;</li>
      
    </ul>
  </div>

  <div class="row row-cols-1 row-cols-md-2 g-4 mx-5 mt-5">
  <div class="col">
    <div class="card h-100 bg-transparent border-warning border-opacity-10 shadow-lg p-3">
      <img src="img_histoire/Albert_Cushing_Read.jpg" class="card-img-top" alt="...">
      <div class="card-body text-center">
        <p class="card-text fw-lighter">Première traversée de l'Atlantique en avion, avec escale, d'Albert Cushing Read, en mai 1919.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100 bg-transparent border-warning border-opacity-10 shadow-lg p-3">
      <img src="img_histoire/Vickers_Vimy_Alcock_and_Brown.jpg" class="card-img-top" alt="...">
      <div class="card-body text-center">
        <p class="card-text fw-lighter">Première traversée de l'Atlantique sans escale, d'Alcock et Brown en juin 1919</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100 bg-transparent border-warning border-opacity-10 shadow-lg p-3">
      <img src="img_histoire/SpiritIII.jpg" class="card-img-top" alt="...">
      <div class="card-body text-center">
        <p class="card-text fw-lighter">Première traversée Charles New York Paris, par le Lindbergh Spirit of St. Louis de Charles Lindbergh, du 21 mai 1927</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100 bg-transparent border-warning border-opacity-10 shadow-lg p-3 ">
      <img src="img_histoire/Charles_Lindbergh_and_the_Spirit_of_Saint_Louis_(Crisco_restoration,_with_wings).jpg" class="card-img-top" alt="...">
      <div class="card-body text-center">
        <p class="card-text fw-lighter">Charles Lindbergh</p>
      </div>
    </div>
  </div>
</div>

<div class="card mb-3 mx-5 mt-5 bg-transparent border-warning border-opacity-10 shadow-lg p-3">
  <img src="img_histoire/Franz_Schell_Album_Image_(34195654111).jpg" class="card-img-top" alt="...">
  <div class="card-body text-center">
    <p class="card-text fw-lighter">Spirit of St. Louis de Charles Lindbergh</p>
  </div>
</div>

<div class="clearfix mx-5 mt-5 ">
  <img src="img_histoire/Airliner_Number_4_-_Norman_Bel_Geddes,_c.1929-32.jpg" class="col-sm-6 col-12 float-sm-end mb-3 ms-md-3 me-3 shadow-lg p-1" alt="...">
  <ul>
    <li class="fw-lighter">sans escale, en juin 1919, vol transatlantique d'Alcock et Brown décollent de Terre-Neuve et traversent, l'océan d'ouest en est, et se posent en Irlande ;</li>
    <li class="fw-lighter">en solitaire et sans escale, le 21 mai 1927, Charles Lindbergh réussit à traverser l’Atlantique, de New York au Bourget. L'exploit ultra médiatisé du monoplan Spirit of St. Louis, est réalisé en 32 heures, 15 jours après la disparition de Charles Nungesser et François Coli à bord de l'Oiseau blanc, lors de leur même tentative de traversée entre Paris et New-York ;</li>
    <li class="fw-lighter">d'Irlande au Québec, Hermann Köhl, James Fitzmaurice (en) et Ehrenfried Günther von Hünefeld, le 13 avril 1928 ;</li>
    <li class="fw-lighter">de Paris à New York : Dieudonné Costes et Maurice Bellonte sur le Breguet 19 Point d'Interrogation, les 1er et 2 septembre 1930.</li>
    <li class="fw-lighter">
      <ul>Traversées de l'Atlantique Sud :
        <li class="fw-lighter">Gago Coutinho et Sacadura Cabral, en 1922, sont les premiers à avoir traversé l'Atlantique Sud ;</li>
        <li class="fw-lighter">Ramón Franco en 1926 avec un hydravion Dornier Wal ;</li>
        <li class="fw-lighter">première traversée de Jean Mermoz pour le compte de l'Aéropostale, le 12 mai 1930.</li>
      </ul>
    </li>
    <li class="fw-lighter">Traversée de l'Atlantique en dirigeable : par le zeppelin LZ 129 Hindenburg, le 6 mai 1936.</li>
    
  </ul>
</div>

</section>

<section class="text-white-50">
  <div class="mx-5 mt-5">
   <h3 class="fw-light  spacingLetter text-uppercase text-decoration-underline">Développement de l’aviation civile commerciale</h3>
   <h5 class="mt-5 text-decoration-underline text-uppercase fw-light spacingLetter">En France</h5>
   <p>En 1918, Pierre-Georges Latécoère fonde la Société des lignes Latécoère (future Compagnie générale aéropostale).</p>

  </div>

  <div class="clearfix  mx-5  ">
    <img src="img_histoire/Lignes_Aeriennes_Latécoére_(Latécoére-Toulouse).jpg" class="col-sm-6 col-12 float-sm-end mb-3 ms-md-3 me-3 shadow-lg p-1 shadow-lg p-3" alt="...">
    <p>En février 1919, Louis Charles Breguet fonde la Compagnie des messageries aériennes, avec Louis Blériot, Louis Renault et René Caudron. La première voie commerciale est inaugurée le 10 février 1919, par l’aviateur Georges Boulard, aux commandes d’un biplan Caudron C.23 bimoteurs, au décollage de l’aérodrome de Villacoublay à 10 h 55, pour rejoindre finalement Bruxelles à 13 h 30, avec pour escorte l’aviateur Pierre Chanteloup et l’ingénieur de chez Caudron, M. Deville, aux commandes d'un Caudron C.21. Le 19 septembre de la même année un service de transport international de voyageurs entre Paris et Londres a été lancé, en utilisant également des Breguet 14.</p>
  </div>
  <div class="clearfix  mx-5 mt-5 ">
    <img src="img_histoire/Farman_goliath.jpg" class="col-sm-6 col-12 float-sm-end mb-3 ms-md-3 me-3 shadow-lg p-1 shadow-lg p-3" alt="...">
    <p>La Compagnie des grands express aériens est une compagnie aérienne française fondée le 20 mars 1919 et qui a fusionné avec la Compagnie des messageries aériennes pour former Air Union le 1er janvier 1923.</p>
    <p>Le 7 avril 1922, se produit la première collision d'un avion de ligne en vol : un Farman F.60 Goliath de la Compagnie des grands express aériens, partant du Bourget en direction de Croydon près de Londres alors qu'il vole dans le brouillard, entre en collision avec un de Havilland DH.18 de la Daimler Airway (en), qui faisait le même voyage en sens inverse. Sept personnes sont tuées sur le Farman F.60, dont trois passagers.</p>
  </div>

  <div class="mx-5 mt-5">
    <h5 class="text-decoration-underline text-uppercase fw-light spacingLetter">États-Unis d'Amérique</h5>
    <p>Dès la fin de la guerre le transport du courrier par voie aérienne se développe. La Poste inaugure un service entre New-York, sur la côte Est, et San-Francisco, sur la côte Ouest. La route, longue de 4 320 km, nécessite treize arrêts intermédiaires. Elle devient la première route aérienne balisée par la construction d'une série de phares disposés tous les 15 km. La Poste et cette route seront à l'origine de la création en 1926 d'un département « Aéronautique » au sein du Ministère du Commerce, l'ancêtre de la FAA, qui se préoccupera de la sécurité aérienne en prenant en charge le contrôle du trafic aérien, l’attribution des licences aux pilotes et mécaniciens et la certification des appareils.</p>
  </div>

  <div class="mx-5 mt-5">
    <h5 class="text-decoration-underline text-uppercase fw-light spacingLetter">Dans le monde</h5>
    <p>En 1919 est fondée la KLM, la plus vieille compagnie au monde encore existante. Est aussi fondée en 1919 la compagnie colombienne Avianca et, en 1920, la Qantas.</p>
  </div>

</section>

<section class="text-white-50">
  <div class="mx-5 mt-5">
    <h3 class="fw-light  spacingLetter text-uppercase text-decoration-underline">Préparation à la guerre</h3>
    <p class="mt-5">Dans les années précédant la Seconde Guerre mondiale, les recherches militaires s'intensifient et de nouvelles inventions révolutionnaires sont ébauchées, telles la turbine (au Royaume-Uni et surtout en Allemagne), la fusée (en Allemagne) ou le radar (au Royaume-Uni). La guerre d'Espagne sert de terrain d'expérimentation aux forces naissantes de la Luftwaffe. Un épisode connu de cette guerre est le bombardement de la ville de Guernica par les avions de la légion Condor, massacre figé par l’œuvre Guernica de Pablo Picasso.</p>
  </div>

  <div class="mx-5 text-center mt-5">
    <h5 class="text-decoration-underline text-uppercase fw-light spacingLetter">Quelques avions de chasse de la Seconde Guerre mondiale</h5>
  </div>

  <div class="row row-cols-1 row-cols-md-3 g-4 mx-5 mt-5">
    <div class="col">
      <div class="card h-100 text-center  bg-transparent border-warning border-opacity-10 shadow-lg p-3">
        <img src="img_histoire/Me109_at_Airpower11_07.jpg" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <p class="card-text fw-lighter">Messerschmitt Bf 109 allemand.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100 text-center  bg-transparent border-warning border-opacity-10 shadow-lg p-3">
        <img src="img_histoire/AirExpo_2018_-_Corsair!_(43079970354).jpg" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <p class="card-text fw-lighter">Chance Vought F4U Corsair américain.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100 text-center  bg-transparent border-warning border-opacity-10 shadow-lg p-3">
        <img src="img_histoire/A6M3_Zero_N712Z_1.jpg" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <p class="card-text fw-lighter">Mitsubishi A6M « Zero » japonais</p>
        </div>
      </div>
    </div>  
  </div>

  <div class="d-flex justify-content-around row row-cols-1 row-cols-md-3 g-4 mx-5 mt-5">
    <div class="col ">
      <div class="card h-100 text-center  bg-transparent border-warning border-opacity-10 shadow-lg p-3">
        <img src="img_histoire/Ray_Flying_Legends_2005-1.jpg" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <p class="card-text fw-lighter">Supermarine Spitfire anglais</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100 text-center  bg-transparent border-warning border-opacity-10 shadow-lg p-3">
        <img src="img_histoire/1599px-Dewoitine_D.520_‘Dewoitine_D.520’_(29100412653).jpg" class="card-img-top" alt="...">
        <div class="card-body">
        <p class="card-text fw-lighter">Dewoitine D-520 Hispano-Suiza français.</p>
      </div>
      </div>
    </div>
  </div>

  <div class="mx-5 mt-5">
    <p>Seul un bombardier lourd manque à la panoplie de la Luftwaffe, qui possède par contre le meilleur chasseur du moment : le Messerschmitt Bf 109.</p>
    <p>Le Japon, quant à lui, aligne à partir de 1939 ses célèbres Mitsubishi A6M « Zero », aux performances remarquables, qui domineront les combats de la guerre du Pacifique pendant la première moitié de la guerre. Elle utilisera son aviation embarquée pour détruire la flotte américaine basée à Pearl Harbor (attaque de Pearl Harbor du 7 décembre 1941), ce qui déclenche l'entrée en guerre des États-Unis, et de ses North American P-51 Mustang ou Chance Vought F4U Corsair .</p>
    <p>En Allemagne, en 1938, l’hélicoptère Focke-Wulf Fw 61 du Pr Henrich Focke, piloté par l’aviatrice Hanna Reitsch, évolue à l’intérieur de la Deutschlandhalle (palais des fêtes) de Berlin. Dans cet appareil, un moteur de 160 ch entraîne deux hélices sustentatrices disposées symétriquement par rapport à l’axe longitudinal [pas clair]. À l’arrière de l’appareil, une profondeur[Quoi ?] placée en T[pas clair] au sommet du gouvernail de direction. À l’avant, une hélice tractrice[pas clair]. Construit en secret, cet appareil a été connu par ses records : montée à 2 439 mètres, vitesse dépassant 120 km/h, 230 km en ligne droite, vol vers l’arrière à 30 km/h, descente placée-moteur arrêté [pas clair], sous le seul freinage des hélices sustentatrices débrayées en autorotation.</p>
    <p>Le Royaume-Uni possède des Hawker Hurricane lents mais bien armés, puis des Supermarine Spitfire plus rapides, capables de résister aux Messerschmitt Bf 109. Elle peut compter sur ses radars côtiers et sur son statut d'île, à distance respectable du continent.</p>
    <p>Quant à la France, son plus remarquable chasseur est sans nul doute le Dewoitine D.520 à moteur V12 Hispano- Suiza.</p>
  </div>

</section>

<section class="text-white-50">
  <div class="mx-5 mt-5">
    <h3 class="fw-light  spacingLetter text-uppercase text-decoration-underline">La Seconde Guerre mondiale (1939-1945)</h3>
    <h5 class="mt-5 text-decoration-underline text-uppercase fw-light spacingLetter">Les débuts de l'aviation à réaction</h5>
    <p class="mt-2">Le premier essai d'un monoplan à réacteur, conçu et piloté par Henri Coandă, eut lieu en octobre 1910, au Bourget, en France, mais resta sans lendemain et, après trois décennies, de nouveaux moteurs à réactions furent mis au point indépendamment par deux autres ingénieurs : l'anglais Frank Whittle et l'allemand Hans von Ohain.</p>
  </div>

  <div class="mx-5 mt-5">
    <div class="row row-cols-1 row-cols-md-4 g-3">
      <div class="col">
        <div class="card h-100 bg-transparent border-warning border-opacity-10 shadow-lg p-3">
          <img src="img_histoire/Gloster_E28-39_first_prototyp_lr.jpg" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <p class="card-text fw-lighter">Gloster E.28/39 (1941) premier prototype d'avion à réaction anglais</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 text-center bg-transparent border-warning border-opacity-10 shadow-lg p-3">
          <img src="img_histoire/Bell_P-59B_Airacomet_at_the_National_Museum_of_the_United_States_Air_Force.jpg" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <p class="card-text fw-lighter">Bell P-59 Air comet(1942)</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 bg-transparent border-warning border-opacity-10 shadow-lg p-3">
          <img src="img_histoire/1600px-Messerschmitt_Me_262A_at_the_National_Museum_of_the_USAF.jpg" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <p class="card-text fw-lighter">Messerschmitt Me 262 (1944) premier avion de chasse à moteur à réaction opérationnel de l'histoire</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 text-center bg-transparent border-warning border-opacity-10 shadow-lg p-3">
          <img src="img_histoire/Dassault_Ouragan.jpg" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <p class="card-text fw-lighter">Dassault Ouragan (1949)</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="text-white-50">

  <div class="mx-5 mt-5">
    <h3 class="fw-light  spacingLetter text-uppercase text-decoration-underline">L'aviation moderne - seconde moitié du XXe siècle</h3>
    <h5 class="mt-5 text-decoration-underline text-uppercase fw-light spacingLetter" >L'aviation civile d'après-guerre</h5>
  </div>

  <div class="row row-cols-1 row-cols-md-3 g-4 mx-5 mt-5">
    <div class="col">
      <div class="card h-100 text-center bg-transparent border-warning border-opacity-10 shadow-lg p-3">
        <img src="img_histoire/1566px-Lockheed_L-1649_Constellation_TWA.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title fw-lighter">Le Lockheed Constellation, mis en service par la TWA en 1945.</h5>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100 text-center bg-transparent border-warning border-opacity-10 shadow-lg p-3">
        <img src="img_histoire/Boeing_377_Stratocruiser,_BOAC.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title fw-lighter">Le Boeing 377 Stratocruiser (à cabine pressurisée), mis en service en 1949.</h5>

        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100 text-center bg-transparent border-warning border-opacity-10 shadow-lg p-3">
        <img src="img_histoire/Vickers_Viscount_708_F-BGNU_Air_France_LAP_12.09.54_edited-2.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title fw-lighter">Le Vickers Viscount, premier avion à turbopropulseur produit en série, mis en service en 1950.</h5>
        </div>
      </div>
    </div>
  </div>

  <div class="mx-5 mt-5">
    <p>Cette disponibilité d'avions en grand nombre et de pilotes démobilisés accompagna le renouveau économique de l'après-guerre par la création et la remise en fonctionnement de nombreuses lignes aériennes.</p>
    <p>Cette période marqua l'apogée de l'aviation commerciale à pistons, des appareils aussi prestigieux que le Lockheed Constellation voyant leur carrière abrégée dès la fin des années 1950 avec l'arrivée des premiers avions de ligne à turbopropulseurs puis à réaction.</p>
  </div>

  <div class="mt-5 mx-5">
    <h5 class="text-decoration-underline text-uppercase fw-light spacingLetter">Les premiers avions de ligne à réaction</h5>
  </div>

  <div class="row row-cols-1 row-cols-md-3 g-4 mx-5 mt-5">
    <div class="col">
      <div class="card h-100 text-center  bg-transparent border-warning border-opacity-10 shadow-lg p-3">
        <img src="img_histoire/Comet_4.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text fw-lighter">Le De Havilland Comet,mis en service en 1952.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100 text-center  bg-transparent border-warning border-opacity-10 shadow-lg p-3">
        <img src="img_histoire/1531px-Boeing_Model_367-80.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text fw-lighter">Le Boeing 707, mis en service en 1958</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100 text-center  bg-transparent border-warning border-opacity-10 shadow-lg p-3">
        <img src="img_histoire/SR_Caravelle.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text fw-lighter">La Caravelle du constructeur français Sud-Aviation, mise en service en 1959.</p>
        </div>
      </div>
    </div>  
  </div>
  <div class="d-flex justify-content-around row row-cols-1 row-cols-md-3 g-4 mx-5 mt-5">
    <div class="col ">
      <div class="card h-100 text-center  bg-transparent border-warning border-opacity-10 shadow-lg p-3">
        <img src="img_histoire/Bilstein_00590_Douglas_DC-8_N1301L_Delta_Airline.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text fw-lighter">Le Douglas DC-8,mis en service en 1958</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100 text-center  bg-transparent border-warning border-opacity-10 shadow-lg p-3">
        <img src="img_histoire/1599px-Boeing_747_rollout_(3).jpg" class="card-img-top" alt="...">
        <div class="card-body">
        <p class="card-text fw-lighter">Prototype du premier Boeing 747 de 1968</p>
      </div>
      </div>
    </div>
  </div>

  <div class="mx-5 mt-5">
    <h5 class="text-decoration-underline text-uppercase fw-light spacingLetter">Le développement du transport aérien depuis 1969</h5>
    <p>A ce moment de l'histoire, les compagnies aériennes comprennent que leurs profits vont s'agrandir, au fur et à mesure que ces dernières vont s'implanter dans les différentes lignes civiles commerciales. Ainsi le profit devient la principale motivation des compagnies, permettant d'apporter un essor conséquent sur le nombre de vol et la qualité du service proposé.</p>
    <h6>L'augmentation de la capacité des avions de ligne</h6>
    <p>La compagnie aérienne française basée en Polynésie française Air Tahiti Nui en reliant Papeete à Paris sans escale réalise le vol intérieur le plus long de l’histoire de l’aviation.</p>
    <h6>Le Concorde</h6>
  </div>

  <div class="row row-cols-1 row-cols-md-3 g-4 mx-5 mt-5">
    <div class="col">
      <div class="card h-100 text-center  bg-transparent border-warning border-opacity-10 shadow-lg p-3">
        <img src="img_histoire/British_Airways_Concorde_G-BOAC_03.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text fw-lighter">Concorde supersonique de 1969</p>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="h-100 text-center ">
          <p class="">L'avion supersonique de transport de passagers Concorde est le fruit d'une coopération entre les constructeurs français Aérospatiale et britannique BAC qui résulte d'un accord signé entre les deux gouvernements en novembre 1962. Le premier prototype, assemblé à Saint- Martin, vole le 2 mars 1969 suivi par celui assemblé à Filton, le 9 avril. Le fuselage, d'une longueur de 62 mètres, permet d'emporter 128 passagers sur une distance maximale de 6 400 km à une vitesse de M 2,05. Quatre réacteurs Olympus de 17 250 daN de poussée propulsent cet avion de 25 m d'envergure et d'une masse au décollage de 181 000 kg.</p>
      </div>
    </div>

    <div class="col">
      <div class="card h-100 text-center  bg-transparent border-warning border-opacity-10 shadow-lg p-3">
        <img src="img_histoire/Concorde_216_(G-BOAF)_last_flight.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text fw-lighter">Le dernier vol du Concorde, du 26 novembre 2003.</p>
        </div>
      </div>
    </div>  
  </div>

  <div class="mx-5 mt-5">
    <p>L'intérêt initial des compagnies aériennes est limité, elles préfèrent s'équiper en avions gros porteurs ; le choc pétrolier de 1971 et des considérations environnementales (bruit et pollution) des supersoniques entraîneront l'annulation des réservations et l'avion ne sera commandé que par les compagnies Air France et British Airways. En effet le Concorde est particulièrement bruyant au décollage et produit un bang supersonique en croisière, ce qui est gênant pour les populations s'il survole des zones continentales habitées.</p>
  </div>

  <div class="mt-5 mx-5">
    <div class="card mb-3 bg-transparent border-warning  border-opacity-10 shadow-lg p-3">
    <img src="img_histoire/A_380_meeting.jpg" class="card-img-top" alt="...">
    <div class="card-body text-center">
      <h5 class="card-title  fw-lighter">Airbus A380 (2005)</h5> 
    </div>
  </div>

  </div>


</section>

<section>
  <div class="text-center mt-5 mx-5">
    <h6 class="fw-lighter">Source Wikipédia</h6>
  </div>
</section>


<?php
require_once "footer.php"

?>
