<?php 
require_once "./constructor/headerBlog.php";
require_once "./requette/config.php";

$sql="SELECT article.titre, article.img, login.user, article.mes, article.date, article.id_blog  FROM article INNER JOIN login ON article.id_user= login.id_user";

$req=$exion->prepare($sql);

$req->execute();

$result = $req->fetchAll();

?>
 <body class="bg-dark "> 

     <div class="" style="width:100%;height:200px;">
     </div>
        

    <div class="container-fluid bg-dark mb-5 position-relative">
      <div class="row h-100 mx-5">
        <div class="col-12 position-relative" style="height: 450px;background-image: linear-gradient(rgba(0, 0, 0, 0.3),rgba(0, 0, 0, 0.3)),url('../img/avion-aeroport-voyage-decollage-atterrissage.webp'); background-size:cover;background-position:center"></div>
        <div class="col-12 d-flex align-items-center justify-content-center h-100">
          <h1 class="text-center fw-light position-absolute top-50 start-50 translate-middle spacingLetter  p-5" style="letter-spacing: 20px!important; font-size: 125px;-webkit-backdrop-filter: blur(10px);backdrop-filter: blur(10px);color: #CBAC6A !important;">LE BLOG</h1>
        </div>
      </div>
    </div>
    <div class="container mt-5 pt-5">
      <!-- Contenu additionnel -->
    </div>


        <div class="container">
          <div class="row ">
            <div class="col-lg-12 d-flex align-items-center">
              <div class="col-lg-12 col-sm-10 col-10">
                <div class="tiretAvion mb-3" style="background:linear-gradient(.25turn,#D4C792,#444444);height: 5px;"></div>
              </div>
              <div class="">
              <a href="#retour_bas_de_page"><div class="iconeTiretAvion bg-transparent" style="content: url(img/icon-avion-cote.webp);width: 70px;height: 70px;"></div></a>
              </div>
            </div>
          </div>
        </div>                                    
        <div>
            <h1 class="text-center  fw-lighter  spacingLetter text-uppercase" style="color:#CBAC6A;letter-spacing: 10px!important;">Les derniers articles sur LE BLOG</h1>
        </div>
        <div class="container text-center my-5">
          <div class="row">
            
            
            
          </div>
        </div>

    </div>

    <div class=" d-flex justify-content-around bg-dark mt-5 pt-5 mx-5">
        <?php foreach($result as $data): ?>
          
            
        <div class="card bg-dark " style="width:18rem;color:#CBAC6A;border-color:transparent;">
          <h1 class="fw-lighter text-center "><a class="text-decoration-none" href="blog.php?id=<?=$data["id_blog"]?>"><?= $data["titre"]?></a></h1>
          <img src="./upload/<?= $data["img"]?>" class="card-img-top " style="height:250px;width:250px" alt="...">
          <div class="card-body">
            <p class="card-text bg-dark text-center fw-lighter" style="color:white ;"  ><?= $data["mes"]?></p>
            <p class="card-text bg-dark text-center fw-lighter" style="color:white ;"  ><?= $data["user"]?> a écrit l'article</p>
            <p class="card-text bg-dark text-center fw-lighter" style="color:#373737;"  ><?= $data["date"]?></p>
          </div> 
        </div>

        <?php endforeach; ?>

    </div>

    <div class="container">
      <div class="row ">
        <div class="col-lg-12 d-flex align-items-center">
          <div class="col-lg-12 col-sm-10 col-10">
            <div class="tiretAvion mb-3" style="background:linear-gradient(.25turn,#D4C792,#444444);height: 5px;"></div>
          </div>
          <div class="">
          <a href="#retour_haut_de_page"><div class="iconeTiretAvion bg-transparent" style="content: url(img/icon-avion-cote.webp);width: 70px;height: 70px;"></div></a>
          </div>
        </div>
      </div>
    </div>                                    


    <div  class="d-flex flex-column border border-dark  mx-5 my-5" style="background-color:#212529;">
        <form action="./requette/insert_article.php"  enctype="multipart/form-data"     method="POST" class="mx-4" style="background-color:#212529;">
            <h1 class="text-center fw-lighter  spacingLetter text-uppercase mt-5" style="color:#CBAC6A;letter-spacing: 10px!important;">Rédiger son article</h1>
            <div class="text-center">
            <img src="/img/Blog.psd" alt="" class="">
            </div>
            <div class="d-flex flex-column my-5">
                <div>
                    <label for="titre" style="color:#CBAC6A;letter-spacing: 2px!important;"class="text-uppercase fw-lighter" >Titre pour votre article:</label><br>
                    <input class="bg-dark rounded-2 text-center fw-lighter"  style="border-color:#373737 ;border-style:solid;background-image:linear-gradient(rgba(0, 0, 0, 0.3),rgba(0, 0, 0, 0.3)), url('../Blog/img/header-blog.jpg'); color:ivory" placeholder="Mon titre" type="text" name="titre" id="titre">
                </div>
                <div class="my-4">
                    <label for="mes" style="color:#CBAC6A;letter-spacing: 2px!important;" class="text-uppercase fw-lighter"> Votre article :</label><br>
                    <textarea class="w-100 bg-dark rounded-2" style="border-color:#373737;border-style:solid;background-image:linear-gradient(rgba(0, 0, 0, 0.3),rgba(0, 0, 0, 0.3)), url('../Blog/img/header-blog.jpg');background-size:cover;color:ivory" name="mes" id="mes" cols="30" rows="10"></textarea>
                </div>
                <div>
                    <input type="hidden" name="id_user" value="<?= $_SESSION["id_user"]."\n"?>">
                </div>
                <div>
                    <input type="hidden" name="date" id="date" value="<?= date("d/m/Y"." "."H:i:s");?>">
                </div>
                <div>
                    <input class="fw-lighter" type="file" name="img" id="img" placeholder="azerty">
                </div>
                <div class="mx-auto placeholder-glow">
                    <input class="w-30  bg-dark rounded-2 mb-5 border border-dark p-2 mb-2 border-opacity-50 fw-lighter spacingLetter text-uppercas placeholder" style="color:#CBAC6A;letter-spacing: 2px!important;" type="submit" value="Publier">
                </div>
            </div>
        </form>
    </div>
    
    <div class="container">
      <div class="row ">
        <div class="col-lg-12 d-flex align-items-center">
          <div class="col-lg-12 col-sm-10 col-10">
            <div class="tiretAvion mb-3" style="background:linear-gradient(.25turn,#D4C792,#444444);height: 5px;"></div>
          </div>
          <div class="">
            <div class="iconeTiretAvion bg-transparent" style="content: url(img/icon-avion-cote.webp);width: 70px;height: 70px;"></div>
          </div>
        </div>
      </div>
    </div>                                    

</body>

<?php

// Aujourd'hui, le 10 Mars 2001, 5:16:18 pm, Fuseau horaire 
// Mountain Standard Time (MST)
 
$today = date("F j, Y, g:i a");                   // March 10, 2001, 5:16 pm
$today = date("m.d.y");                           // 03.10.01
$today = date("j, n, Y");                         // 10, 3, 2001
$today = date("Ymd");                             // 20010310
$today = date('h-i-s, j-m-y, it is w Day');       // 05-16-18, 10-03-01, 1631 1618 6 Satpm01
$today = date('\i\t \i\s \t\h\e jS \d\a\y.');     // It is the 10th day (10ème jour du mois).
$today = date("D M j G:i:s T Y");                 // Sat Mar 10 17:16:18 MST 2001
$today = date('H:m:s \m \e\s\t\ \l\e\ \m\o\i\s'); // 17:03:18 m est le mois
$today = date("H:i:s");                           // 17:16:18
$today = date("Y-m-d H:i:s");                     // 2001-03-10 17:16:18 (le format DATETIME de MySQL)





require_once "./constructor/footerBlog.php"






?>