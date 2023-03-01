<?php require_once "./constructor/headerBlog.php";?>

<body class="bg-dark" >
    <div class="" style="width:100%;height: 150px;">
    
    </div>
    <div class="container-fluid text-center">
    <form action="./requette/insert_user.php" method="POST" enctype="multipart/form-data" class="mx-4 m-auto p-5" style="background-image: linear-gradient(rgba(0, 0, 0, 0.6),rgba(0, 0, 0, 0.6)),url('../img/avion-aeroport-voyage-decollage-atterrissage.webp'); background-size:cover; background-position:center;margin-top:0 !important;" was-validated>
        <div class="border border-dark p-5">
            <h2 class=" fw-lighter spacingLetter text-uppercase" style="color:#CBAC6A;letter-spacing: 20px!important;">Inscription</h2>
            <div class="mt-3">
                <label for="user validationTextarea" ></label><br>
                <input class="w-100 rounded-2 border border-dark p-2 mb-2 border-opacity-50 form-control fw-lighter text-center "type="text" name="user" id="user validationTextarea" placeholder="Identifiant" data-toggle="tooltip" data-placement="bottom" title="Identifiant" style="background-image:linear-gradient(rgba(0, 0, 0,1),rgba(0, 0, 0, 0.5)), url('../Blog/img/header-blog.jpg');" required>
            </div> 
            <div class="mt-3">
                 <label for="user validationTextarea" ></label><br>
                 <input class="w-100 rounded-2 border border-dark p-2 mb-2 border-opacity-50 form-control fw-lighter text-center"type="text" name="mail" id="mail validationTextarea" placeholder="Mail" data-toggle="tooltip" data-placement="bottom" title="Mail" style="background-image:linear-gradient(rgba(0, 0, 0,1),rgba(0, 0, 0, 0.5)), url('../Blog/img/header-blog.jpg');" required>
             </div> 
 
            <div class="mt-3"> 
                <label for="mdp validationTextarea" ></label><br>
                <input class="w-100 rounded-2 border border-dark p-2 mb-2 border-opacity-50 form-control fw-lighter text-center"type="text" name="mdp" id="mdp validationTextarea" placeholder="Mot de passe" style="background-image:linear-gradient(rgba(0, 0, 0,1),rgba(0, 0, 0, 0.5)), url('../Blog/img/header-blog.jpg');background-size:cover;" required>
            </div>
            <div class="mt-3"> 
              <input type="file" id="img" name="img" class="text-secondary fw-lighter">
           </div>
            <div class="">
                 <input name="statut" type="hidden" value="client">
             </div> 
 
            <div class="mt-5 text-center placeholder-glow">
                <input type="submit" value="S'inscrire" class="text-center rounded-2 border border-dark p-2 mb-2 border-opacity-50 fw-light  spacingLetter text-uppercase placeholder" style="background-color:transparent;color:#CBAC6A;border-color:#CBAC6A">
            </div>
        </div>
    </form>
    </div>
    <div class="container mt-5">
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

<?php require_once "./constructor/footerBlog.php";?>