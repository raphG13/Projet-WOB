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
      L'histoire de l'aviation peut ??tre divis??e en six p??riodes :
      </h5>

      <p class="">
      L'??poque des pr??curseurs: des premiers ornithopt??res de l'antiquit??, jusqu'au d??but du XVIIIe si??cle l'??tre humain imagine ??? de mani??re plus ou moins r??aliste ??? ce que pourrait ??tre une machine volante. Puis ?? partir de la fin du XVIIIe si??cle, cette p??riode voit le d??butde la conqu??te de l'air avec le d??veloppement de l'a??rostation et de nombreuses tentatives de vol plan??.
      </p>

      <p>
      Les pionniers du plus lourd que l'air:c'est la p??riode des premiers vols d'engins ?? moteur capables de d??coller par leurs propres moyens. Presque chaque vol est une premi??re ou une tentative de record : un peu plus vite, un peu plus loin, un peu plus haut . Les aviateurs sont, le plus souvent, des concepteurs ou des aventuriers.
      </p>

      <p>
      La Premi??re Guerre mondiale: quelques ann??es seulement apr??s le premier vol, cette p??riode voit l'apparition d'une nouvelle arme sur le champ de bataille. On passe brutalement ?? une production en grande s??rie, certains mod??les d'avions ??tant m??me construits ?? plus d'un millier d'exemplaires ; les pilotes deviennent des ?? professionnels ??, m??me si le parfum d'aventure n'a pas totalement disparu.
      </p>

      <p>
      L'Entre-deux-guerres: la fin de la Premi??re Guerre mondiale met sur le march?? un surplus de pilotes et d'appareils qui permettent le lancement du transport a??rien commercial et, en premier lieu, celui du courrier.L'aviation se d??veloppe et l'on assiste ?? la cr??ation d'une arm??e de l'air dans nombre de pays. L'aviation militaire pousse les constructeurs ?? battre de nouveaux records. Les progr??s de l'aviation civile sont une retomb??e des ??tudes militaires.
      </p>

      <p>
      La Seconde Guerre mondiale: l'aviation est largement utilis??e sur le champ de bataille. On peut consid??rer cette p??riode comme l'apog??e des avions utilisant un moteur ?? piston et une h??lice comme moyen de propulsion. La fin de la guerre voit la naissance du moteur ?? r??action et du radar.
      </p>

      <p>
      La seconde moiti?? du xxe si??cle: une fois encore, la fin de la guerre met sur le march?? un surplus d'appareils et de pilotes. C'est le d??but du transport a??rien commercial r??gulier ?? tout temps ?? capable de s'affranchir des conditions m??t??orologiques et de pratiquer le vol sans visibilit??. L'a??ronautique militaire pousse au d??veloppement du r??acteur, c'est ce qu'on appelle l'??re du jet, puis part ensuite ?? la conqu??te du vol supersonique. Les retomb??es civiles permettent le d??veloppement des premiers avions de ligne quadrir??acteurs et le transport a??rien s'ouvre ?? tous.
      </p>
    </div>
</section>



<section class="text-white-50">
    <div class="mx-5 mt-5">
        <h3 class="fw-light spacingLetter text-uppercase mt-5 text-decoration-underline">Les pr??curseurs</h3>
        <p class="mt-5">
            L'??tre humain a probablement tr??s t??t r??v?? de voler en imitant entre autres le vol des oiseaux. Des l??gendes de la mythologie grecque, dont celles de D??dale et Icare, ou du dieu Zeus(m??tamorphe en cygne ou en aigle), ou de P??gase, ou de nombreux r??cits apocryphes revendiquent des tentatives de vol d'ornithopt??res bioniques harnach??s d'ailes, ou de celles des tapis volant de la mythologie perse. Le cerf-volant chinois remonte au IVe si??cleav. J.-C., et les ??gyptiens de l'antiquit?? ??gyptienne ont fabriqu?? des jouets ou maquettes en bois l??ger de balsa ayant la capacit?? de s'??lever et de planer dans les airs. On attribue ?? Archytas de Tarente l'invention d'une colombeen bois capable de voler.
        </p>
    </div>

    <div class="row row-cols-1 row-cols-md-4 g-3 mx-5 mt-5 ">
      <div class="col">
        <div class="card h-100 bg-transparent border-warning border-opacity-10 shadow-lg p-3">
          <img src="img_histoire//Photo_2-plane_side_view1.jpg" class="card-img-top" alt="...">
          <div class="card-body text-center ">
            <p class="card-text fw-lighter">L'oiseau de Saqqarah (antiquit?? ??gyptienne, IIe si??cle av. J.-C.).</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 bg-transparent  border-warning border-opacity-10 shadow-lg p-3">
          <img src="img_histoire/De??dalo_e_I??caro_-_Pyotr_Ivanovich_Sokolov.jpg" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <p class="card-text fw-lighter">Mythe et l??gende du vol ornithopt??re de D??dale et Icare, de la mythologie grecque.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 bg-transparent border-warning border-opacity-10 shadow-lg p-3">
          <img src="img_histoire/1600px-Ile_aux_Roses_017.jpg" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <p class="card-text fw-lighter">Le dieu m??tamorphe Zeus, en aigle (mythologie grecque).</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 bg-transparent border-warning border-opacity-10 shadow-lg p-3">
          <img src="img_histoire/FICA_2010-03.jpg" class="card-img-top" alt="...">
          <div class="card-bodytext-center">
            <p class="card-text fw-lighter">Cerf-volant g??ant chinois(IVe si??cle av. J.-C.)</p>
          </div>
        </div>
      </div>
    </div>

    <div class="mx-5 mt-5">
      <p>
      Le jeu-jouet bambou-copt??re, des ann??es 320, de la dynastie Jin chinoise, est une des plus anciennes formes connues de rotor-pale-h??lice-aile d'a??ronef de l'histoire de l'aviation (arriv?? en Europe au XVe si??cle) et la lanterne c??leste, du IIIe si??cle, une des plus anciennes formes d'a??ronef. Au IXe si??cle en Andalousie, le savant ing??nieur berb??re Abbas ibn Firnas aurait fabriqu?? deux ailes garnies de plumes qu'il aurait attach??es ?? son corps et, se lan??ant d'une hauteur, aurait plan?? sur une distance notable avant d'atterrir brutalement et de se casser le dos. Trois si??cles plus tard, le moine b??n??dictin anglais Eilmer de Malmesbury, sans doute inspir?? par la l??gende d'Icare et peut-??tre par un r??cit sur Abbas ibn Firnas, aurait tent?? de voler au moyen d'ailes m??caniques.
      </p>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4 mx-5 mt-5">
      <div class="col">
        <div class="card h-100 bg-transparent border-warning border-opacity-10 shadow-lg p-3">
          <img src="img_histoire/Taketombo.JPG" class="card-img-top" alt="...">
          <div class="card-body ">

            <p class="card-text fw-lighter">Bambou-copt??re volant chinois (ann??es 320) une des plus anciennes formes connues de rotor-pale-h??lice-aile d'a??ronef de l'histoire de l'aviation.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 bg-transparent border-warning border-opacity-10 shadow-lg p-3">
          <img src="img_histoire/Chinese_lantern_(7914625430).jpg" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <p class="card-text fw-lighter">Lanterne c??leste asiatique (IIIe si??cle)</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 bg-transparent border-warning border-opacity-10 shadow-lg p-3">
          <img src="img_histoire/Macchina_volante_ad_ali_battenti_-_Museo_scienza_tecnologia_Milano_00428_01.jpg" class="card-img-top" alt="...">
          <div class="card-body text-end">
            <p class="card-text fw-lighter">Maquette de machines volantes de L??onard de Vinci du XVe si??cle.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="mx-5 mt-5">
      <p>Vers les ann??es 1480, L??onard de Vinci ??tudie sans succ??s de nombreuses premi??res formes de ?? machines volantes visionnaires ?? (ornithopt??res de L??onard de Vinci, parachute, et vis a??rienne, inspir??s de son Codex sur le vol des oiseaux). En 1655, Robert Hooke, math??maticien, physicien et inventeur anglais, conclut ?? l'impossibilit?? du vol humain sans l'assistance de la puissance d'un ?? moteur artificiel ??. Hez??rfen Ahmed ??elebi (1609-1640) est un inventeur ottoman consid??r?? comme l'un des pionniers de l'aviation pour avoir plan?? depuis la Tour de Galata ?? Istanbul.</p>
      <p>En 1783, les fr??res Montgolfier gr??ce ?? leur montgolfi??re (ballon ?? air chaud) et Jacques Charles gr??ce au ballon ?? gaz permettent ?? l'??tre humain de s'??lever dans l'atmosph??re, sans contr??le de la trajectoire, suivit par l'invention des ballons dirigeables. La solution de viendra de l'??tude d'un jouet, le cerf-volant, connu en Orient depuis l'Antiquit?? mais qui ne sera introduit en Europe qu'au XIIIe si??cle.</p>
      <p>En 1801, l'officier et inventeur fran??ais Andr?? Guillaume Resnier de Gou?? confectionna des ailes en fil de fer recouvert de taffetas cir??, avec lesquelles il effectua une s??rie de tentatives ?? Angoul??me. Son premier essai de ?? vol ram?? ?? n'aboutit qu'?? d??valer une pente rocheuse. Mais ?? sa deuxi??me tentative, sautant d'un pont haut de 5 m??tres, il plana sur 50 m??tres avant de plonger dans la Charente. Son troisi??me et dernier essai r??ussit. Sautant des remparts de la ville, il parcourut 300 m??tres, survola la Charente et ne se cassa qu'une jambe ?? l'arriv??e. Il avait 72 ans. Guillaume Resnier est sans doute le premier homme, apr??s le Turc Hez??rfen Ahmed ??elebi, qui ait r??ellement ?? vol?? ??, au sens de ?? planer ??.</p>
    </div>

      <div class="d-flex mx-5 mt-5">
        <div class="card col-6 col-sm-6 me-3 bg-transparent border-warning border-opacity-10 shadow-lg p-3">
         <img src="img_histoire/776px-Governableparachute.jpg" class="card-img-top" alt="...">
          <div class="card-">
            <p class="fw-lighter">Planeur con??u par George Cayley (1804): les bases de la structure de l'avion sont jet??es.</p>
          </div>
        </div>
        <div class="clearfix">
           <img src="./img_Histoire/Replica_1853_Cayley_Glider_(BAPC89)_(50731050317).jpg" class="col-sm-6 col-6 float-sm-start mb-3 md-3 shadow-lg p-1" alt="...">
           <p>Le Britannique George Cayley (1773-1857) met en ??vidence quatre forces a??rodynamiques du vol, la pouss??e, la tra??n??e, le poids et la portance-d??crochage. Il comprit ??galement qu'il ??tait inutile de reproduire le vol battu des oiseaux et que les ailes devaient ??tre fixes ; il pr??vit la n??cessit?? d'un empennage pour stabiliser le vol. S'inspirant des travaux des Fran??ais Launoy, il construit un h??licopt??re en 1796 puis, en 1808, un ?? ornithopt??re ?? ?? l'??chelle humaine et, en 1809, un planeur qui volera sans passager.</p>
           <p>William Samuel Henson et John Stringfellow, reprenant les travaux de Cayley, font voler un mod??le r??duit d'a??roplane ?? vapeur. N??anmoins, les moteurs puissants pour les appareils ?? taille r??elle sont beaucoup trop lourds pour leur permettre de d??coller. En 1837, Isidore Didion3 en conclusion d'une ??tude th??orique fine affirma que ?? La navigation a??rienne n'aura de succ??s que si l'on trouve un moteur capable de produire une force motrice dont le rapport avec le poids de la machine qu'elle exigerait pour ??tre soutenue, soit plus grand que les machines ?? vapeur actuelles, ou que chez l'humain ou la plupart des animaux ??. Les progr??s vont donc d'abord passer par les planeurs et par l'??tude de l'a??rodynamique.</p>
        </div>
        </div>
      </div>
    </div>

    <div class="mx-5 mt-5">
      <p>Entre 1857 et 1868, le Fran??ais Jean-Marie Le Bris essaie successivement deux planeurs de son invention, d'abord depuis les collines de la baie de Douarnenez (Finist??re), puis sur la hauteur du Polygone de la Marine, pr??s de Brest (Finist??re), reprenant ainsi en France les travaux des pionniers britanniques de la d??cennie pr??c??dente. En 1863, le terme ?? aviation ?? est invent?? par Gabriel de La Landelle. Le Britannique Francis Herbert Wenham (en), en 1871, construit ce qui est probablement la premi??re soufflerie, qui va permettre d'exp??rimenter des maquettes.</p>
      <p>Le fran??ais Louis Mouillard s'inspire de l'aile d'oiseau pour concevoir des planeurs dont la voilure est courb??e. Il propose le gauchissement des ailes.</p>
    </div>

    <div class="clearfix mx-5 mt-5">
      <img src="./img_Histoire/LeBris1868.jpg" class="col-sm-6 col-12 float-sm-end mb-3 ms-md-3 shadow-lg p-1" alt="...">
      <p>Entre 1857 et 1877, les Fran??ais F??lix et Louis du Temple essaient des mod??les r??duits ?? moteur ?? ressort, en les aidant d'un plan inclin??, puis peut-??tre un engin, muni d'un moteur ?? vapeur, mont?? par un matelot.</p>
      <p>En 1871, Alphonse P??naud fait voler avec succ??s son mod??le r??duit ?? a??roplane automoteur ??, un monoplan ?? empennage, configuration devenue maintenant la plus r??pandue. La m??me ann??e, durant le si??ge de Paris, un r??seau de communication par ballon mont?? est organis??. Associ??s ?? Nadar, deux ateliers sont fond??s : celui des fr??res Louis et Eug??ne Godard ?? la gare d'Austerlitz, et celui de Camille Dartois et Gabriel Yon ?? la gare du Nord. Cette premi??re fabrication en s??rie d'a??ronefs, marque la naissance officielle de l'industrie a??ronautique.</p>
    </div>

    <div class="mx-5 mt-5">
      <p>Quelques ann??es plus tard, Eug??ne Godard, Louis II Godard et Gabriel Yon fondent les Grands Ateliers A??rostatiques du Champ-de-Mars, la plus importante manufacture a??ronautique, rue Desaix ?? Paris.</p>
      <p>Les essais de planeurs se succ??dent, et s'y pr??tent tour ?? tour l'Allemand Otto Lilienthal, le Britannique Percy Pilcher, les Am??ricains John Joseph Montgomery et Maloney, et les Fran??ais Ferdinand Ferber, Maurice Colliex ainsi que les fr??res Voisin.Les essais de planeurs se succ??dent, et s'y pr??tent tour ?? tour l'Allemand Otto Lilienthal, le Britannique Percy Pilcher, les Am??ricains John Joseph Montgomery et Maloney, et les Fran??ais Ferdinand Ferber, Maurice Colliex ainsi que les fr??res Voisin.</p>
    </div>
</section>

<section class="text-white-50">
  <div class="mx-5 mt-5">
    <h3 class="fw-light  spacingLetter text-uppercase text-decoration-underline">Les pionniers du ??plus lourd que l'air??</h3>
  </div>

  <div class="mx-5 mt-5">
    <h5 class="text-decoration-underline text-uppercase fw-light spacingLetter">Premiers planeurs</h5>
    <p>Le premier ??tre humain ayant vol?? ?? bord d'un planeur est Abbas Ibn Firnas en 875, il con??ut un planeur ?? base de bois et de tissu de soie (d??cor?? de plumes de diff??rents oiseaux) avec lequel il s?????lan??a des collines d???Arruzafa, situ??es ?? proximit?? de Cordoue. Persuad?? que son invention allait fonctionner, il avait incit?? des centaines de personnes ?? se placer tout au long du parcours. De nombreux membres de la cour de Muhammad Ier, ??mir du califat d???Al-Andalus4, ??taient ??galement pr??sents. Profitant des courants, le vol fut soutenu et dura entre deux et dix minutes (en fonction des chroniques de l?????poque). Malgr?? un atterrissage mouvement??, non seulement il surv??cut, mais il devint ?? juste titre le premier homme ?? voler sur un engin plus lourd que l???air.</p>
    <p>Le premier ??tre humain ayant vol?? en contr??lant la trajectoire de sa machine est l'inventeur allemand Otto Lilienthal, qui a effectu?? entre 1891 et 1896 deux mille vols plan??s depuis une colline artificielle ?? proximit?? de Berlin (invention ?? l'origine des planeur, deltaplane, parapente, et planeur ultra-l??ger motoris?? modernes).</p>
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
    <p>Les premiers vols sur une machine volante pilot??e par gouvernes agissant sur les trois axes (tangage, roulis, lacet) ont ??t?? r??alis??s par les fr??res Wright sur leur planeur Wright de 1902.</p>
  </div>

  <div class="mx-5 mt-5">
    <h5 class="text-decoration-underline text-uppercase fw-light spacingLetter">Premier d??collage motoris??</h5>
    <p>En 1888 l'inventeur allemand Gottlieb Daimler motorise avec succ??s son ballon dirigeable Daimler, avec son invention de moteur ?? gaz Daimler mono-cylindre, et 2 h??lices pour avancer ou monter, un des premiers vols motoris??s historiques de l'histoire de l'aviation.</p>
  </div>

  <div class="card mb-3 mx-5 mt-5 bg-transparent border-warning border-opacity-10 shadow-lg p-3">
  <img src="img_histoire/Anim_Avion_III_Cle??ment_Ader.gif" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text text-center fw-lighter">Essai au point fixe de la force motrice de l'Ader Avion III de Cl??ment Ader (animation d???artiste d'apr??s la photographie d'??poque).</p>
  </div>
</div>

<div class="clearfix mx-5 mt-5 w-75 ">
  <img src="img_histoire/1600px-Wikipedia_Takes_Muse??e_des_Arts_et_Me??tiers_-_Avion_III_003.jpg" class="col-sm-6 col-12 float-sm-start me-4 shadow-lg p-1" alt="...">

  <p>
  Le premier inventeur ?? d??clarer avoir vol?? dans un avion motoris?? est le Fran??ais Cl??ment Ader, aux commandes de son ?? Avion ?? inspir?? de chauve-souris g??ante ?? g??om??trie modifiable, ?? moteur bicylindre ?? vapeur d'alcool de sa conception. La premi??re tentative a lieu en 1890 aux commandes de l'??ole ; les marques laiss??es par les roues dans le sol meuble auraient ??t?? moins marqu??es par endroit et auraient totalement disparu sur une vingtaine ou une cinquantaine de m??tres. L'engin volant aurait ainsi effectu?? un bond ; il n'y avait pas de t??moins autres que des employ??s d'Ader. La m??me machine, essay??e devant des t??moins officiels en 1891, ne donnera pas d'autres r??sultats.
  </p>
</div>

<div class="clearfix mx-5 mt-2">
  <img src="img_histoire/L'Avion_III_d'Ader_au_1er_salon_de_l'ae??ronautique.jpg" class="col-sm-6 col-12 float-sm-end mb-3 ms-md-3 ms-4 shadow-lg p-1" alt="...">

  <p>
  Les essais suivants d'Ader eurent lieu au camp militaire de Satory, ?? Versailles, o?? avait ??t?? ??tablie une aire circulaire de 450 m??tres de diam??tre pour effectuer une d??monstration officielle.
  </p>

  <p>
  Le 12 octobre 1897, Ader fit un premier tour sur ce circuit ?? bord de son Ader Avion III. Il sentit ?? plusieurs reprises l'appareil quitter le sol, puis reprendre contact5. Deux jours plus tard, alors que le vent ??tait fort, Cl??ment Ader lan??a sa machine devant deux officiels du minist??re de la Guerre qui d??clar??rent : ?? Il fut cependant facile de constater, d'apr??s le sillage des roues, que l'appareil avait ??t?? fr??quemment soulev?? de l'arri??re et que la roue arri??re formant le gouvernail n'avait pas port?? constamment sur le sol ??. Les deux membres de la commission le virent sortir brusquement de la piste, d??crire une demi-conversion, s'incliner sur le c??t?? et enfin rester immobile (il semble que, la roue arri??re n'ayant plus assez d'adh??rence du fait de la sustentation, le pilote ait perdu le contr??le directionnel de sa machine qui est alors sortie de la piste puis s'est renvers??e sous l'effet du vent). ?? la question ?? [...] l'appareil a [-t-il] tendance ?? se soulever quand il est lanc?? ?? une certaine vitesse ? ?? la r??ponse est ?? [...] la d??monstration... n'a pas ??t?? faite dans les deux exp??riences qui ont ??t?? effectu??es sur le terrain6 ??. Devant cet ??chec, le minist??re de la Guerre coup??rent les cr??dits ?? Ader. On[Qui ?] peut conclure que, ce 14 octobre 1897, le Fran??ais Cl??ment Ader aurait peut-??tre effectu??[??vasif] le premier d??collage motoris?? ??? mais non contr??l??N 3 ??? d'un plus lourd que l'air7.
  </p>
</div>

<div class="mx-5  mt-5">
  <h5 class="text-decoration-underline text-uppercase fw-light spacingLetter">Premier vol motoris?? contr??l??</h5>
</div>


<div class="clearfix  mx-5 mt-5">
      <img src="img_histoire/Wrightflyer.jpg" class="col-sm-6 col-12 float-sm-end mb-3 ms-md-3 shadow-lg p-1" alt="...">
    
        <p>Apr??s la mise au point en vol de leur planeur entre 1900 et 1903, avec plus de 700 vols en 1902, les fr??res Wright ont exp??riment?? leur premier avion, le Flyer ?? moteur 4 cylindres Wright de 12 ch, dans les dunes de Kitty Hawk le 17 d??cembre 1903. Les deux fr??res pilotent ?? leur tour ; ils effectuent quatre vols, le dernier ??tant le plus long : Orville vole sur 284 m??tres pendant 59 secondes8.</p>
        <p>Ces vols sont g??n??ralement consid??r??s comme les premiers vols motoris??s et contr??l??s d'un plus lourd que l'air. Leurs d??tracteurs, notamment les partisans d'Alberto Santos- Dumont et de Gabriel Voisin, leur reprochent d'avoir eu besoin d'un rail fix?? au sol et d'une catapulte ?? contre poids pour le d??collage, le Flyer ??tant d??pourvu de roues ; la faible puissance du moteur ne permettait pas non plus le d??collage par vent faible.</p>
</div>

<div class="clearfix mx-5  mt-5">
    <img src="img_histoire/1904-10-04_Huffman-Prairie_WrightFlyerIII.jpg" class="col-sm-6 col-12 float-sm-end mb-3 ms-md-3 shadow-lg p-1" alt="...">
      <p class="card-text">Le souhait des inventeurs de prot??ger leur invention ?? partir des vols du Wright Flyer III en 1905, l'absence de d??monstrations publiques et le faible nombre de t??moins de leurs vols jou??rent un r??le n??gatif pour leur publicit??. La ma??trise de la technique de vol des Wright a ??t?? reconnue plus tard lors des diff??rentes d??monstrations que les Wright effectu??rent en France, notamment ?? Auvours dans la Sarthe en 1908.</p>
      <p class="card-text">Selon des recherches historiques9, le premier vol motoris?? aurait ??t?? r??alis?? par l'ing??nieur am??ricain d'origine allemande Gustav Wei??kopf (ou Gustave Whitehead)10 en 1901. La journaliste am??ricaine Stella Randolph11 a publi?? un ouvrage sur cet ing??nieur en 1930 : Before the Wrights flew12.</p>
      <p class="card-text">Ferdinand Ferber effectue ?? Chalais-Meudon le 27 mai 1905 le premier vol d'un avion ?? moteur en Europe. Le capitaine Ferber, polytechnicien et officier d'artillerie, ??tait en contact avec les fr??res Wright. Comme eux il avait commenc?? par apprendre ?? piloter les planeurs qu'il construisait, puis en 1903 il avait motoris?? et test?? sous un portique son avion n??6 avant d'effectuer le premier vol libre. Comme le premier Flyer des fr??res Wright, son moteur n'??tait pas assez puissant pour assurer un d??collage sans l'aide d'un dispositif de lancement. Pionnier oubli?? de l'histoire de l'aviation, il meurt en septembre 1909.</p>
</div>

<div class="mx-5 mt-5">
  <h5 class="text-decoration-underline text-uppercase fw-light spacingLetter">Premiers vols motoris??s contr??l??s autonomes</h5>
  <p>Traian Vuia vola ?? Montesson le 18 mars 1906 avec un appareil plus lourd que l'air autopropuls?? (sans m??canisme de lancement) sur une distance d'environ 12 m??tres ?? une altitude d'un m??tre. Ce vol se terminant par un accident, Vuia ne reprit ses essais qu'?? partir du mois de juillet apr??s avoir r??par?? et modifi?? son appareil. Le 19 ao??t 1906 il vola sur une distance de 25 m??tres ?? une altitude de 2,5 m??tres ?? Issy-les-Moulineaux14.
</p>
</div>

<div class="row row-cols-1 row-cols-md-3 g-4 mx-5 mt-5">
  <div class="col">
    <div class="card h-100 bg-transparent border-warning border-opacity-10 shadow-lg p-3">
      <img src="img_histoire/Vuia_I_-_1906_(4).png" class="card-img-top" alt="...">
      <div class="card-body text-center">
        <p class="card-text fw-lighter">Traian Vuia ?? bord de Vuia I (1906).</p>
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
      <img src="img_histoire/Busson_a??_Issy-les-Moulineaux_(Octobre_1910),_sur_Monoplan_Deperdussin_(7843389064).jpg" class="card-img-top" alt="...">
      <div class="card-body text-center">
        <p class="card-text fw-lighter">Monoplan Armand Deperdussin (1910).</p>
      </div>
    </div>
  </div>
</div>

<div class="mx-5 mt-5">
  <p>Le Br??silien Alberto Santos-Dumont vola ?? Bagatelle le 23 octobre 1906 sur soixante m??tres ?? une altitude de deux ?? trois m??tres. Gr??ce ?? ce vol ?? bord du 14-bis, il remporta devant un large public le prix Archdeacon d??cern?? par l'A??ro-Club de France pour le vol d'un plus lourd que l'air autopropuls?? (sans m??canisme de lancement). Ses d??tracteurs ??? entre autres les partisans des fr??res Wright ??? lui reprochent de ne pouvoir voler qu'en effet de sol, alors que le Wright Flyer III pouvait d??j?? prendre de l'altitude lorsqu'il vola sur 39,5 kilom??tres le 5 octobre 1905.</p>
  <p class="mt-3">Le vol public de Bagatelle le 23 octobre 1906 marque sans doute l'apparition des premiers meetings a??riens, pr??sentations durant lesquelles les pilotes exposent leur dext??rit?? et les possibilit??s de leurs appareils devant un public de curieux.</p>
</div>

<div class="mx-5 mt-5">
  <h5 class="text-decoration-underline text-uppercase fw-light spacingLetter">Le perfectionnement des machines (1905-1914)</h5>
</div>

<div class="clearfix mx-5 mt-5">
  <img src="img_histoire/R.E.P._1.jpg" class="col-sm-6 col-12 float-sm-start mb-3 ms-md-3 me-3 shadow-lg p-1" alt="...">
  <p>En 1905, Robert Esnault-Pelterie invente l???aileron en modifiant un avion de sa construction con??u d'apr??s le Flyer des fr??res Wright. En 1906, il invente le moteur en ??toile. En d??cembre, il d??pose le brevet du manche ?? balai. En 1907, il est le premier ?? faire voler un avion monoplan ?? structure m??tallique, le Esnault-Pelterie REP1 dont il a assur?? enti??rement la conception et l'assemblage, y compris ceux du moteur.</p>
  <p>Entra??n??e au pilotage par L??on Delagrange sur son biplan Voisin fr??res, Th??r??se Peltier effectue son premier vol solo en septembre 1908, devenant de ce fait la premi??re femme pilote.</p>
  <p>Le 30 octobre 1908, au Camp de Mourmelon d??colle Henri Farman au volant de son Voisin pour la r??alisation du premier vol inter-villes, il parcourt 27 km et atteint ?? Reims apr??s un vol de 17 min.</p>
</div>

<div class="mx-5 mt-5">
  <p>Le 3 juillet 1909, au champ d'aviation de la Brayelle pr??s de Douai, durant l'un des premiers meetings a??riens Louis Bl??riot avec son monoplan vole 47 km en 1 h 7 ; et Louis Paulhan avec son biplan, bat le record de hauteur avec 150 m??tres.</p>
</div>

<div class="row row-cols-1 row-cols-md-3 g-4 mx-5 mt-5">
  <div class="col">
    <div class="card  bg-transparent border-warning border-opacity-10 shadow-lg p-3 shadow-lg p-1">
      <img src="img_histoire/The_channel_flight._Ble??riot,_July_25th_1909_LCCN2003662010.tif.jpg" class="card-img-top" alt="...">
      <div class="card-body text-center">
        <p class="card-text fw-lighter">Premi??re travers??e historique de la Manche, par Louis Bl??riot sur son Bl??riot XI, du 25 juillet 1909</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="ms-5">
      <div class="">
        <p class="">Le 25 juillet 1909, Louis Bl??riot traverse la Manche aux commandes de son Bl??riot XI. L?????v??nement a un retentissement international historique. Le Daily Mail, organisateur du concours, titre : ?? L'Angleterre n'est plus une ??le ??.</p>
        <p class="">Du 22 au 29 ao??t 1909, est organis?? le premier meeting a??rien international : la prestigieuse ?? Grande Semaine d'aviation de la Champagne ?? de Reims ??? sur la commune de B??theny, ?? l'emplacement de l'ancienne base a??rienne 112 Reims-Champagne ??? ?? laquelle participent tous les pilotes pionniers les plus c??l??bres de l'??poque, dont Louis Bl??riot, Henri Farman, Ren?? Moineau, Louis Paulhan, Hubert Latham, Glenn Curtiss, Roger Sommer... Pr??s d'un million de spectateurs y assistent.</p>
      </div>
    </div>
  </div>
  <div class="">
    <div class=" card w-50 ms-5 bg-transparent border-warning border-opacity-10 shadow-lg p-3 shadow-lg p-1">
      <img src="img_histoire/The??re??se_Peltier_1908.jpg" class="card-img-top" alt="...">
      <div class="card-body text-center">
        <p class="card-text fw-lighter">Th??r??se Peltier, premi??re femme pilote de 1908</p>
      </div>
    </div>
  </div>
  </div>

  <div class="mx-5 mt-5">
    <p>En 1909, est ??tablie ?? Pau la premi??re ??cole d'aviation organis??e au monde par les fr??res Wright, suivie peu apr??s par celle cr????e par Louis Bl??riot qu'il peut ouvrir gr??ce ?? sa travers??e r??ussie de la Manche et dont il confia la direction ?? Henri Sallenave.</p>
    <p>En 1909, le 23 mai, Port-Aviation pr??sente un a??rodrome complet, dot?? de toutes les installations et infrastructures n??cessaires aux activit??s a??riennes.</p>
  </div>

  <div class="card mb-3 mx-5 mt-5 bg-transparent border-warning border-opacity-10 shadow-lg p-3 shadow-lg p-1">
    <img src="img_histoire/1st_Nat'l_Aviation_Meet,_Indianapolis_Motor_Speedway,_June_13-18,_1910.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-text text-center fw-lighter">Meeting a??rien de l'Indianapolis Motor Speedway d'Indianapolis, en 1910.</p>
    </div>
  </div>

<div class="mx-5 mt-5">
  <p>Le 8 mars 1910, ??lisa Deroche (1882-1919) devient la premi??re femme brevet??e au monde, avec le brevet de pilote no 36 d??cern?? par l'A??ro-Club de France.</p>
  <p></p>
</div>

<div class="clearfix mx-5 mt-5">
  <img src="img_histoire/Canard_fabre_1911.jpg" class="col-sm-6 col-12 float-sm-end mb-3 ms-md-3 ms-3 shadow-lg p-1" alt="...">
  <p>Le premier vol autonome d'un hydravion est r??alis?? par Henri Fabre, qui d??colle le 28 mars 1910 de l'??tang de Berre, ?? Martigues en Provence, avec son hydro-a??roplane ?? Canard ??. L'exploit est constat?? par huissier.</p>
  <p>En Suisse, le premier avion d??colle ?? Avenches le 10 mai 1910 ; le monoplan, construit localement par Ren?? Grandjean, est pilot?? par Ernest Failloubaz.</p>
</div>

<div class="clearfix mx-5 mt-5">
  <img src="img_histoire/Coanda_1910.png" class="col-sm-6 col-12 float-sm-start mb-3 ms-md-3 me-3 shadow-lg p-1" alt="...">
  <p>Le Coand??-1910 (en), premier vol autonome d'avion ?? r??action, con??u et pilot?? par l'ing??nieur roumain Henri Coand??, et construit dans l'atelier de carrosserie de Joachim Caproni, a lieu en octobre 1910, au 2e salon international de l'a??ronautique et de l'espace de Paris-Le Bourget : l'air est aspir?? ?? l'avant par un compresseur, puis dirig?? vers une chambre de combustion (une de chaque c??t??, ?? l'avant de l'appareil) qui fournit la pouss??e. Le compresseur est mis en mouvement par un moteur ?? piston classique et non par une turbine comme dans les r??acteurs modernes.</p>
</div>
  
<div class="clearfix mx-5 mt-5 ">
  <img src="img_histoire/A_Vlaicu_III_03.png" class="col-sm-6 col-12 float-sm-end mb-3 ms-md-3 me-3 shadow-lg p-1" alt="...">
  <p>En 1911, le pilote Robert Grandseigne effectue le premier vol de nuit au-dessus de Paris.</p>
  <p>En 1912, Aurel Vlaicu vole ?? mille m??tres avec le premier avion ?? carlingue m??tallique, le A Vlaicu III (en).</p>
  <p>En 1913, Adolphe P??goud effectue les premiers loopings.</p>
</div>

<div class="mx-5 mt-5">
  <h5 class="text-decoration-underline text-uppercase fw-light spacingLetter">Le premier vol commercial</h5>
  <p>Les premiers vols sont le fait d'aventuriers, de sportifs et aussi, consid??rant le co??t, le terrain de jeux de quelques riches individus. Les avions ??taient petits et peu de gens leur imaginaient un avenir commercial. Pourtant, d??s 1914, un entrepreneur am??ricain P.E. Fansler ouvre la premi??re ligne a??rienne r??guli??re en Floride, entre St. Petersburg et Tampa, en utilisant un hydravion Benoist type XIV de 75 ch d'une capacit?? d'un passager. La compagnie survivra pendant quatre mois et transportera 1 205 passagers avant de cesser ses op??rations2. La Poste est, elle aussi, int??ress??e par le transport de courrier de poste a??rienne par avion postal, mais la Premi??re guerre mondiale interrompt les projets qui ne reprendront qu'en 1918. Le 8 f??vrier 1919, Lucien Bossoutrot r??alise le premier vol commercial entre Paris et Londres, depuis l'a??roport de Toussus-le-Noble, sur un Farman F.60 Goliath18. Le 10, Georges Boulard ouvre la premi??re ligne commerciale a??rienne r??guli??re ?? l'international, de capitale ?? capitale en concluant le Paris - Bruxelles.</p>
</div>

</section>

<section class="text-white-50">

  <div class="mx-5 mt-5">

      <h3 class="fw-light  spacingLetter text-uppercase text-decoration-underline">L'Aviation durant la Premi??re Guerre mondiale</h3>
      <div class="clearfix  mt-5 ">
        <img src="img_histoire/King-Bugatti_U16_2.jpg" class="col-sm-6 col-12 float-sm-end mb-3 ms-md-3 me-3 shadow-lg p-1" alt="...">
        <p>Dans les ann??es qui pr??c??dent la Premi??re Guerre mondiale, les tensions grandissantes en Europe incitent les gouvernements ?? s'int??resser ?? l'aviation en tant qu'arme de guerre. D'o?? l'organisation par la France du fameux concours d???a??roplanes militaires de Reims (octobre et novembre 1911), premier concours de ce type de l'histoire mondiale de l'aviation. Les diff??rents constructeurs fran??ais et britanniques notamment, se livrent ?? une course contre la montre pour tenter d'obtenir des commandes ?? l'export.</p>
        <p>L??opold Trescartes, titulaire du brevet civil de l'A??roclub de France no 842 d??livr?? le 16 avril 1912, effectue le 7 septembre 1912 le premier vol au-dessus de Porto (Portugal) ?? bord d'un biplan de type MF-4 fabriqu?? par Maurice Farman. Cet avion, officiellement achet?? par un journal de Porto et dont les exhibitions servent, pour le grand public, ?? financer la construction d'une cr??che, est en r??alit?? un mod??le destin?? ?? convaincre le gouvernement portugais d'acheter des avions fran??ais dans le cadre de la cr??ation d'une force a??rienne. Apr??s de nombreuses d??monstrations, en pr??sence notamment du ministre de la guerre portugais, le choix des autorit??s portugaises se portera finalement sur un appareil britannique de marque Avro, type Avro 500. Le MF- 4 de d??monstration sera ult??rieurement offert au gouvernement portugais et sera utilis?? au sein du bataillon Aerosteiros puis ?? l'??cole militaire d'a??ronautique de Vila Nova da Rainha.</p>
      </div>
      <div class="mt-5">
      <p>Avions et pilotes pionniers (volontaires d??tach??s d'autres unit??s qui gardaient leur uniforme d'origine, surtout recrut??s dans la cavalerie) sont r??quisitionn??s pour des missions de reconnaissance. Cibles des deux camps au sol, ils sont d??cim??s. Les grandes nations se dotent tr??s vite d'une aviation militaire o?? les avions se sp??cialisent : reconnaissance, chasseurs, bombardiers.</p>
      <p>Une course aux records est engag??e pour prendre l'avantage sur l'ennemi, l'armement ??tant am??lior?? avec l'apparition des premi??res mitrailleuses synchronis??es. Le parachute fait son apparition, mais est seulement utilis?? par les pilotes de dirigeables, les avions volant trop bas pour qu'il soit efficace. Au sol, on construit des a??rodromes, et l'avion est fabriqu?? en s??ries</p>
      <p>Le 5 octobre 1914, tout pr??s de Reims, se d??roule au-dessus du point de jonction des communes de Jonchery-sur-Vesle, de Prouilly et de Muizon, le premier combat a??rien de l???histoire mondiale de l???aviation militaire, avec un avion abattu. Le combat est remport?? par le pilote Joseph Frantz et le m??canicien Louis Quenault de l'escadrille V 24 sur un Voisin III, contre le sergent Wilhelm Schlichting (pilote) et l'oberleutnant Fritz von Zagen (observateur) sur un Aviatik allemand. ?? la suite, les duels a??riens se multiplient. Si les premiers combats sont tr??s rares et dangereux (fusils embarqu??s, qui n??cessitent une dext??rit?? extr??me), le d??veloppement des mitrailleuses synchronis??es (faisant suite aux h??lices blind??es sur le passage des balles, invention de l'aviateur fran??ais Roland Garros) am??liore l'efficacit?? des batailles. Notamment parce que ce dispositif permettait de tirer les balles d'une mitraillette ?? travers les h??lices des avions. Contrairement ?? l'horreur des tranch??es (boue,bombardements constants...) la guerre a??rienne est vue comme une guerre propre (si tant est que cela soit possible). Dans les repr??sentations des pilotes comme des civils et de l'infanterie, qui suivent avec assiduit?? la guerre du ciel, l'aviation poss??de un c??t?? noble, chevaleresque ; Guynemer refusera d'abattre Ernst Udet car sa mitrailleuse s'??tait enray??e. Il y a une grande comp??tition entre les ?? As ??, tant entre ennemis qu'au sein d'un m??me camp.</p>
      </div>
      <div class="clearfix  mt-5 ">
        <img src="img_histoire/CapitaineMarcelCourmes1915.png" class="col-sm-6 col-12 float-sm-end mb-3 ms-md-3 me-3 shadow-lg p-1" alt="...">
        <p>Les grandes figures de cette ??poque sont les Fran??ais Guynemer et Ren?? Fonck (plus grand As fran??ais et de la guerre selon la m??thode de calcul), ainsi que les Allemands Manfred von Richthofen (surnomm?? Le Baron Rouge), et Ernst Udet.</p>
        <p>Le soir du 10 juin 1916 a lieu le premier combat a??ronaval de l???Histoire, en Afrique ??quatoriale. Un hydravion de fabrication britannique de type Short 184, pilot?? par les lieutenants belges Behaeghe et Collignon, bombarde avec succ??s la canonni??re allemande Graf von G??tzen dans le port de Kigoma (actuelle Tanzanie) sur le lac Tanganyika ?? l???aide d???une de ses deux bombes de 65 livres qui l???atteint au gaillard d'arri??re mettant hors d'??tat sa gouverne19. Le navire est ainsi neutralis?? ce qui brise le verrou allemand sur le lac, entre le Congo belge et l???Est Africain allemand qui avait ??t?? mis en place deux ans plus t??t. Les canonniers allemands n???ont pu riposter contre cette attaque a??rienne car leurs pi??ces d???artillerie, pr??vues pour des cibles c??ti??res ou navales (nous n'??tions qu'au d??but de l'aviation), ne s?????levaient pas selon un angle suffisant pour menacer des avions (consid??r??s par les Allemands comme inexistants en Afrique ??quatoriale). L???hydravion rejoignit sa base n??anmoins avec 20 atteintes de balles de mitrailleuses tir??es de Kigoma et un flotteur perc??20.</p>
      </div>

      <div class="mt-5 mx-5">
        <li class="text-decoration-underline">?? la fin de la guerre, il y a :</li>
        <ul>
          <li>4 500 avions fran??ais.</li>
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
    <p class="mt-5">L'aviation doit trouver d'autres voies que l'utilisation militaire. De nombreux pilotes se tournent vers les exhibitions, l'acrobatie, les tentatives de records. Les constructeurs cherchent ?? trouver de nouvelles exploitations commerciales : premi??res lignes de passagers, transport du courrier, comme en France les usines Lat??co??re qui cr??ent un service postal en direction du S??n??gal, via l'Espagne et le Maroc, utilisant d'abord les anciens appareils militaires, puis les nouveaux mod??les construits par l'entreprise.</p>

  </div>

  <div class="mx-5 mt-5">
    <h5 class="text-decoration-underline text-uppercase fw-light spacingLetter">L'??poque des ?? grandes premi??res ??</h5>
  </div>

  <div class="clearfix mx-5 mt-5 ">
    <img src="img_histoire/Baronesse_Raymonde_de_LaRoche.jpg" class="col-sm-6 col-12 float-sm-end mb-3 ms-md-3 me-3 shadow-lg p-1" alt="...">
    <ul>
      <li class="fw-lighter">Henri Farman, parcourant le 30 octobre 1908 les vingt-sept kilom??tres qui s??parent le petit village marnais de Bouy de la ville Reims, effectue ?? bord d'un a??roplane Voisin le premier voyage a??rien de l???histoire de l???aviation.</li>
      <li class="fw-lighter">Premier vol trans-Manche : en 1909, le 25 juillet, Louis Bl??riot ?? bord de son Bl??riot XI traverse la Manche en 37 minutes.</li>
      <li class="fw-lighter">En 1910, le premier vol militaire de l'arm??e fran??aise est effectu?? par Albert F??quant et Charles Marconet. Ce vol part du Camp de Mourmelon pour atterrir ?? Vincennes. Il dura 2h30 pour un total de 160 kilom??tres.</li>
      <li class="fw-lighter">En 1911, le 7 mars, Eug??ne Renaux ?? bord de son biplan Farman, effectue le vol Paris - Puy-de-D??me en 5 heures et 10 minutes avec un ravitaillement pr??s de Nevers, remportant ainsi le Prix Michelin d'aviation.</li>
      <li class="fw-lighter">Travers??e de la M??diterran??e : en 1913, le 23 septembre, Roland Garros traverse la M??diterran??e en 7 heures et 53 minutes, sur un Morane-Saulnier Type H.</li>
      <li class="fw-lighter">Travers??e du Sahara : du 3 f??vrier 1920 au 31 mars 1920, le Breguet XIV de Joseph Vuillemin relie Alger ?? Dakar, survolant pour la premi??re fois le Sahara, tandis que l'autre avion, ?? bord duquel le g??n??ral Laperrine a pris place, subit un accident au cours duquel le g??n??ral trouve la mort.</li>
      <li class="fw-lighter">Vers le continent africain : le 5 f??vrier 1925, partant de Bruxelles (a??rodrome de Haren), Edmond Thieffry, as de l'aviation belge de la Premi??re Guerre mondiale, s'envole ?? bord d'un Handley Page (?? moteurs Rolls Royce) pour relier les colonies. Le voyage durera 51 jours (?? la suite de nombreuses pannes, avaries, casses...) mais finalement, le Princesse Marie-Jos?? se pose magistralement ?? L??opoldville (actuel Kinshasa au Congo) apr??s plus de 75 heures et 21 minutes de vol effectif, ayant travers?? sur plus de 3 500 km des zones jamais survol??es jusqu'alors.</li>
      <li class="fw-lighter">Travers??es de l'Atlantique Nord :avec escales (par les A??ores et Lisbonne), de Long Island ?? Plymouth en mai 1919, par Albert Cushing Read ;</li>
      
    </ul>
  </div>

  <div class="row row-cols-1 row-cols-md-2 g-4 mx-5 mt-5">
  <div class="col">
    <div class="card h-100 bg-transparent border-warning border-opacity-10 shadow-lg p-3">
      <img src="img_histoire/Albert_Cushing_Read.jpg" class="card-img-top" alt="...">
      <div class="card-body text-center">
        <p class="card-text fw-lighter">Premi??re travers??e de l'Atlantique en avion, avec escale, d'Albert Cushing Read, en mai 1919.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100 bg-transparent border-warning border-opacity-10 shadow-lg p-3">
      <img src="img_histoire/Vickers_Vimy_Alcock_and_Brown.jpg" class="card-img-top" alt="...">
      <div class="card-body text-center">
        <p class="card-text fw-lighter">Premi??re travers??e de l'Atlantique sans escale, d'Alcock et Brown en juin 1919</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100 bg-transparent border-warning border-opacity-10 shadow-lg p-3">
      <img src="img_histoire/SpiritIII.jpg" class="card-img-top" alt="...">
      <div class="card-body text-center">
        <p class="card-text fw-lighter">Premi??re travers??e Charles New York Paris, par le Lindbergh Spirit of St. Louis de Charles Lindbergh, du 21 mai 1927</p>
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
    <li class="fw-lighter">sans escale, en juin 1919, vol transatlantique d'Alcock et Brown d??collent de Terre-Neuve et traversent, l'oc??an d'ouest en est, et se posent en Irlande ;</li>
    <li class="fw-lighter">en solitaire et sans escale, le 21 mai 1927, Charles Lindbergh r??ussit ?? traverser l???Atlantique, de New York au Bourget. L'exploit ultra m??diatis?? du monoplan Spirit of St. Louis, est r??alis?? en 32 heures, 15 jours apr??s la disparition de Charles Nungesser et Fran??ois Coli ?? bord de l'Oiseau blanc, lors de leur m??me tentative de travers??e entre Paris et New-York ;</li>
    <li class="fw-lighter">d'Irlande au Qu??bec, Hermann K??hl, James Fitzmaurice (en) et Ehrenfried G??nther von H??nefeld, le 13 avril 1928 ;</li>
    <li class="fw-lighter">de Paris ?? New York : Dieudonn?? Costes et Maurice Bellonte sur le Breguet 19 Point d'Interrogation, les 1er et 2 septembre 1930.</li>
    <li class="fw-lighter">
      <ul>Travers??es de l'Atlantique Sud :
        <li class="fw-lighter">Gago Coutinho et Sacadura Cabral, en 1922, sont les premiers ?? avoir travers?? l'Atlantique Sud ;</li>
        <li class="fw-lighter">Ram??n Franco en 1926 avec un hydravion Dornier Wal ;</li>
        <li class="fw-lighter">premi??re travers??e de Jean Mermoz pour le compte de l'A??ropostale, le 12 mai 1930.</li>
      </ul>
    </li>
    <li class="fw-lighter">Travers??e de l'Atlantique en dirigeable : par le zeppelin LZ 129 Hindenburg, le 6 mai 1936.</li>
    
  </ul>
</div>

</section>

<section class="text-white-50">
  <div class="mx-5 mt-5">
   <h3 class="fw-light  spacingLetter text-uppercase text-decoration-underline">D??veloppement de l???aviation civile commerciale</h3>
   <h5 class="mt-5 text-decoration-underline text-uppercase fw-light spacingLetter">En France</h5>
   <p>En 1918, Pierre-Georges Lat??co??re fonde la Soci??t?? des lignes Lat??co??re (future Compagnie g??n??rale a??ropostale).</p>

  </div>

  <div class="clearfix  mx-5  ">
    <img src="img_histoire/Lignes_Aeriennes_Late??coe??re_(Late??coe??re-Toulouse).jpg" class="col-sm-6 col-12 float-sm-end mb-3 ms-md-3 me-3 shadow-lg p-1 shadow-lg p-3" alt="...">
    <p>En f??vrier 1919, Louis Charles Breguet fonde la Compagnie des messageries a??riennes, avec Louis Bl??riot, Louis Renault et Ren?? Caudron. La premi??re voie commerciale est inaugur??e le 10 f??vrier 1919, par l???aviateur Georges Boulard, aux commandes d???un biplan Caudron C.23 bimoteurs, au d??collage de l???a??rodrome de Villacoublay ?? 10 h 55, pour rejoindre finalement Bruxelles ?? 13 h 30, avec pour escorte l???aviateur Pierre Chanteloup et l???ing??nieur de chez Caudron, M. Deville, aux commandes d'un Caudron C.21. Le 19 septembre de la m??me ann??e un service de transport international de voyageurs entre Paris et Londres a ??t?? lanc??, en utilisant ??galement des Breguet 14.</p>
  </div>
  <div class="clearfix  mx-5 mt-5 ">
    <img src="img_histoire/Farman_goliath.jpg" class="col-sm-6 col-12 float-sm-end mb-3 ms-md-3 me-3 shadow-lg p-1 shadow-lg p-3" alt="...">
    <p>La Compagnie des grands express a??riens est une compagnie a??rienne fran??aise fond??e le 20 mars 1919 et qui a fusionn?? avec la Compagnie des messageries a??riennes pour former Air Union le 1er janvier 1923.</p>
    <p>Le 7 avril 1922, se produit la premi??re collision d'un avion de ligne en vol : un Farman F.60 Goliath de la Compagnie des grands express a??riens, partant du Bourget en direction de Croydon pr??s de Londres alors qu'il vole dans le brouillard, entre en collision avec un de Havilland DH.18 de la Daimler Airway (en), qui faisait le m??me voyage en sens inverse. Sept personnes sont tu??es sur le Farman F.60, dont trois passagers.</p>
  </div>

  <div class="mx-5 mt-5">
    <h5 class="text-decoration-underline text-uppercase fw-light spacingLetter">??tats-Unis d'Am??rique</h5>
    <p>D??s la fin de la guerre le transport du courrier par voie a??rienne se d??veloppe. La Poste inaugure un service entre New-York, sur la c??te Est, et San-Francisco, sur la c??te Ouest. La route, longue de 4 320 km, n??cessite treize arr??ts interm??diaires. Elle devient la premi??re route a??rienne balis??e par la construction d'une s??rie de phares dispos??s tous les 15 km. La Poste et cette route seront ?? l'origine de la cr??ation en 1926 d'un d??partement ?? A??ronautique ?? au sein du Minist??re du Commerce, l'anc??tre de la FAA, qui se pr??occupera de la s??curit?? a??rienne en prenant en charge le contr??le du trafic a??rien, l???attribution des licences aux pilotes et m??caniciens et la certification des appareils.</p>
  </div>

  <div class="mx-5 mt-5">
    <h5 class="text-decoration-underline text-uppercase fw-light spacingLetter">Dans le monde</h5>
    <p>En 1919 est fond??e la KLM, la plus vieille compagnie au monde encore existante. Est aussi fond??e en 1919 la compagnie colombienne Avianca et, en 1920, la Qantas.</p>
  </div>

</section>

<section class="text-white-50">
  <div class="mx-5 mt-5">
    <h3 class="fw-light  spacingLetter text-uppercase text-decoration-underline">Pr??paration ?? la guerre</h3>
    <p class="mt-5">Dans les ann??es pr??c??dant la Seconde Guerre mondiale, les recherches militaires s'intensifient et de nouvelles inventions r??volutionnaires sont ??bauch??es, telles la turbine (au Royaume-Uni et surtout en Allemagne), la fus??e (en Allemagne) ou le radar (au Royaume-Uni). La guerre d'Espagne sert de terrain d'exp??rimentation aux forces naissantes de la Luftwaffe. Un ??pisode connu de cette guerre est le bombardement de la ville de Guernica par les avions de la l??gion Condor, massacre fig?? par l?????uvre Guernica de Pablo Picasso.</p>
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
          <p class="card-text fw-lighter">Chance Vought F4U Corsair am??ricain.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100 text-center  bg-transparent border-warning border-opacity-10 shadow-lg p-3">
        <img src="img_histoire/A6M3_Zero_N712Z_1.jpg" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <p class="card-text fw-lighter">Mitsubishi A6M ?? Zero ?? japonais</p>
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
        <img src="img_histoire/1599px-Dewoitine_D.520_???Dewoitine_D.520???_(29100412653).jpg" class="card-img-top" alt="...">
        <div class="card-body">
        <p class="card-text fw-lighter">Dewoitine D-520 Hispano-Suiza fran??ais.</p>
      </div>
      </div>
    </div>
  </div>

  <div class="mx-5 mt-5">
    <p>Seul un bombardier lourd manque ?? la panoplie de la Luftwaffe, qui poss??de par contre le meilleur chasseur du moment : le Messerschmitt Bf 109.</p>
    <p>Le Japon, quant ?? lui, aligne ?? partir de 1939 ses c??l??bres Mitsubishi A6M ?? Zero ??, aux performances remarquables, qui domineront les combats de la guerre du Pacifique pendant la premi??re moiti?? de la guerre. Elle utilisera son aviation embarqu??e pour d??truire la flotte am??ricaine bas??e ?? Pearl Harbor (attaque de Pearl Harbor du 7 d??cembre 1941), ce qui d??clenche l'entr??e en guerre des ??tats-Unis, et de ses North American P-51 Mustang ou Chance Vought F4U Corsair .</p>
    <p>En Allemagne, en 1938, l???h??licopt??re Focke-Wulf Fw 61 du Pr Henrich Focke, pilot?? par l???aviatrice Hanna Reitsch, ??volue ?? l???int??rieur de la Deutschlandhalle (palais des f??tes) de Berlin. Dans cet appareil, un moteur de 160 ch entra??ne deux h??lices sustentatrices dispos??es sym??triquement par rapport ?? l???axe longitudinal [pas clair]. ?? l???arri??re de l???appareil, une profondeur[Quoi ?] plac??e en T[pas clair] au sommet du gouvernail de direction. ?? l???avant, une h??lice tractrice[pas clair]. Construit en secret, cet appareil a ??t?? connu par ses records : mont??e ?? 2 439 m??tres, vitesse d??passant 120 km/h, 230 km en ligne droite, vol vers l???arri??re ?? 30 km/h, descente plac??e-moteur arr??t?? [pas clair], sous le seul freinage des h??lices sustentatrices d??bray??es en autorotation.</p>
    <p>Le Royaume-Uni poss??de des Hawker Hurricane lents mais bien arm??s, puis des Supermarine Spitfire plus rapides, capables de r??sister aux Messerschmitt Bf 109. Elle peut compter sur ses radars c??tiers et sur son statut d'??le, ?? distance respectable du continent.</p>
    <p>Quant ?? la France, son plus remarquable chasseur est sans nul doute le Dewoitine D.520 ?? moteur V12 Hispano- Suiza.</p>
  </div>

</section>

<section class="text-white-50">
  <div class="mx-5 mt-5">
    <h3 class="fw-light  spacingLetter text-uppercase text-decoration-underline">La Seconde Guerre mondiale (1939-1945)</h3>
    <h5 class="mt-5 text-decoration-underline text-uppercase fw-light spacingLetter">Les d??buts de l'aviation ?? r??action</h5>
    <p class="mt-2">Le premier essai d'un monoplan ?? r??acteur, con??u et pilot?? par Henri Coand??, eut lieu en octobre 1910, au Bourget, en France, mais resta sans lendemain et, apr??s trois d??cennies, de nouveaux moteurs ?? r??actions furent mis au point ind??pendamment par deux autres ing??nieurs : l'anglais Frank Whittle et l'allemand Hans von Ohain.</p>
  </div>

  <div class="mx-5 mt-5">
    <div class="row row-cols-1 row-cols-md-4 g-3">
      <div class="col">
        <div class="card h-100 bg-transparent border-warning border-opacity-10 shadow-lg p-3">
          <img src="img_histoire/Gloster_E28-39_first_prototyp_lr.jpg" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <p class="card-text fw-lighter">Gloster E.28/39 (1941) premier prototype d'avion ?? r??action anglais</p>
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
            <p class="card-text fw-lighter">Messerschmitt Me 262 (1944) premier avion de chasse ?? moteur ?? r??action op??rationnel de l'histoire</p>
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
    <h3 class="fw-light  spacingLetter text-uppercase text-decoration-underline">L'aviation moderne - seconde moiti?? du XXe si??cle</h3>
    <h5 class="mt-5 text-decoration-underline text-uppercase fw-light spacingLetter" >L'aviation civile d'apr??s-guerre</h5>
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
          <h5 class="card-title fw-lighter">Le Boeing 377 Stratocruiser (?? cabine pressuris??e), mis en service en 1949.</h5>

        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100 text-center bg-transparent border-warning border-opacity-10 shadow-lg p-3">
        <img src="img_histoire/Vickers_Viscount_708_F-BGNU_Air_France_LAP_12.09.54_edited-2.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title fw-lighter">Le Vickers Viscount, premier avion ?? turbopropulseur produit en s??rie, mis en service en 1950.</h5>
        </div>
      </div>
    </div>
  </div>

  <div class="mx-5 mt-5">
    <p>Cette disponibilit?? d'avions en grand nombre et de pilotes d??mobilis??s accompagna le renouveau ??conomique de l'apr??s-guerre par la cr??ation et la remise en fonctionnement de nombreuses lignes a??riennes.</p>
    <p>Cette p??riode marqua l'apog??e de l'aviation commerciale ?? pistons, des appareils aussi prestigieux que le Lockheed Constellation voyant leur carri??re abr??g??e d??s la fin des ann??es 1950 avec l'arriv??e des premiers avions de ligne ?? turbopropulseurs puis ?? r??action.</p>
  </div>

  <div class="mt-5 mx-5">
    <h5 class="text-decoration-underline text-uppercase fw-light spacingLetter">Les premiers avions de ligne ?? r??action</h5>
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
          <p class="card-text fw-lighter">La Caravelle du constructeur fran??ais Sud-Aviation, mise en service en 1959.</p>
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
    <h5 class="text-decoration-underline text-uppercase fw-light spacingLetter">Le d??veloppement du transport a??rien depuis 1969</h5>
    <p>A ce moment de l'histoire, les compagnies a??riennes comprennent que leurs profits vont s'agrandir, au fur et ?? mesure que ces derni??res vont s'implanter dans les diff??rentes lignes civiles commerciales. Ainsi le profit devient la principale motivation des compagnies, permettant d'apporter un essor cons??quent sur le nombre de vol et la qualit?? du service propos??.</p>
    <h6>L'augmentation de la capacit?? des avions de ligne</h6>
    <p>La compagnie a??rienne fran??aise bas??e en Polyn??sie fran??aise Air Tahiti Nui en reliant Papeete ?? Paris sans escale r??alise le vol int??rieur le plus long de l???histoire de l???aviation.</p>
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
          <p class="">L'avion supersonique de transport de passagers Concorde est le fruit d'une coop??ration entre les constructeurs fran??ais A??rospatiale et britannique BAC qui r??sulte d'un accord sign?? entre les deux gouvernements en novembre 1962. Le premier prototype, assembl?? ?? Saint- Martin, vole le 2 mars 1969 suivi par celui assembl?? ?? Filton, le 9 avril. Le fuselage, d'une longueur de 62 m??tres, permet d'emporter 128 passagers sur une distance maximale de 6 400 km ?? une vitesse de M 2,05. Quatre r??acteurs Olympus de 17 250 daN de pouss??e propulsent cet avion de 25 m d'envergure et d'une masse au d??collage de 181 000 kg.</p>
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
    <p>L'int??r??t initial des compagnies a??riennes est limit??, elles pr??f??rent s'??quiper en avions gros porteurs ; le choc p??trolier de 1971 et des consid??rations environnementales (bruit et pollution) des supersoniques entra??neront l'annulation des r??servations et l'avion ne sera command?? que par les compagnies Air France et British Airways. En effet le Concorde est particuli??rement bruyant au d??collage et produit un bang supersonique en croisi??re, ce qui est g??nant pour les populations s'il survole des zones continentales habit??es.</p>
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
    <h6 class="fw-lighter">Source Wikip??dia</h6>
  </div>
</section>


<?php
require_once "footer.php"

?>
