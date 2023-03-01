<?php 
require_once "header.php";
#require_once "requette/config.php";

#$sql="SELECT article.titre, article.img, login.user, article.mes, article.date FROM article INNER JOIN login ON article.id_user= login.id_user";

#$req=$exion->prepare($sql);

#$req->execute();

#$result = $req->fetchAll();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page 404</title>
</head>
<body>
    <div class="pt-5">
        <center ><h1 class="fw-lighter">Erreur 404</h1></center>
        <center> <p>🤔</p> </center>
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
</html>


<?php
require_once "footer.php"

?>