<?php 
require_once "header.php";
#require_once "requette/config.php";

#$sql="SELECT article.titre, article.img, login.user, article.mes, article.date FROM article INNER JOIN login ON article.id_user= login.id_user";

#$req=$exion->prepare($sql);

#$req->execute();

#$result = $req->fetchAll();

?>


<!DOCTYPE html>
<html>
<head>
  <title>A Propos</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
    <h1 class="text-center class pt-5 pb-5 text-center fw-light spacingLetter text-uppercase ">à PROPOS</h1>
    <div class="row">
      <div class="col-md-12 ">
        <h2 class="spacingLetter fw-lighter">Qui sommes-nous ?</h2>
        <p class="text-white fw-lighter">Welcome on Board est un site qui a pour but de faciliter la recherche d'informations par des employés dans les entreprises.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <h2 class="spacingLetter fw-lighter">Notre histoire</h2>
        <p class="text-white fw-lighter">Welcome on Board a été créée en [2023] par [Raphaêl Guillen] qui a constaté l'importance de faciliter l'intégration du site aux employés dans les entreprises. Depuis, nous voulons aidé de nombreuses entreprises à accueillir leurs nouveaux employés de manière efficace.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <h2 class="spacingLetter fw-lighter">Nos valeurs</h2>
        <ul>
          <li class="text-white fw-lighter">Le respect</li>
          <li class="text-white fw-lighter">L'écoute</li>
          <li class="text-white fw-lighter">L'innovation</li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <h2 class="spacingLetter fw-lighter">Notre équipe</h2>
        <p class="text-white fw-lighter">Notre équipe est composée de professionnels dévoués et passionnés, qui mettent tout en oeuvre pour vous offrir un service de qualité.</p>
      </div>
    </div>
  </div>
</body>
</html>




<?php
require_once "footer.php"

?>