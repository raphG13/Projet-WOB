<?php require_once "./constructor/headerBlog.php"?>


<body class="bg-dark"  >
    <div class="" style="width:100%;height: 150px;">

    </div>
    <div class="container-fluid">
        <form action="./requette/select_user.php" method="POST" class="mx-4 m-auto p-5" style="background-image: linear-gradient(rgba(0, 0, 0, 0.6),rgba(0, 0, 0, 0.6)),url('../img/avion-aeroport-voyage-decollage-atterrissage.webp'); background-size:cover; background-position:center;margin-top:0 !important;" was-validated>
            <div class="border border-dark p-5 text-center">
                <h2 class=" fw-lighter spacingLetter text-uppercase" style="color:#CBAC6A;letter-spacing: 20px!important;">Connexion</h2>
                <div class="mt-3">
                    <label for="user validationTextarea" style="color:#CBAC6A"></label><br>
                    <input class="w-100 rounded-2 border border-dark p-2 mb-2 border-opacity-50 form-control  fw-lighter text-center "type="text" name="user" id="user autoSizingInput validationTextarea " placeholder="Identifiant" data-toggle="tooltip" data-placement="bottom" title="identifiant" style="background-image:linear-gradient(rgba(0, 0, 0,1),rgba(0, 0, 0, 0.5)), url('../Blog/img/header-blog.jpg');" required>
                </div>
                <div class="mt-3 ">
                    <label for="mdp autoSizingInputGroup" class="visually-hidden" style="color:#CBAC6A"></label><br>
                    <input class="w-100 rounded-2 border border-dark p-2 mb-2 border-opacity-50 form-control  fw-lighter  text-center" type="text" name="mdp" id="mdp autoSizingInputGroup validationTextarea" placeholder="Mot de passe" data-toggle="tooltip" data-placement="bottom" title="Mot de passe" style="background-image:linear-gradient(rgba(0, 0, 0,1),rgba(0, 0, 0, 0.5)), url('../Blog/img/header-blog.jpg');background-size:cover;" required>
                </div>
                <div class="mt-5 " >
                    
                </div>
                <div class="text-center mt-5 placeholder-glow">
                <div class="mt-5 " >
                    <input class="ounded-2 border border-dark p-2 mb-2 border-opacity-100 fw-lighter spacingLetter text-uppercase placeholder " type="submit" value="Se connecter" style="background-color:transparent;color:#CBAC6A;border-color:#CBAC6A">
                </div>
                
                
                
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


<?php 

require_once "./constructor/footerBlog.php"

?>