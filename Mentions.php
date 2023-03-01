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
  <title>Mentions Légales</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
    <h1 class="text-center class pt-5 pb-5 text-center fw-light spacingLetter text-uppercase ">MENTIONS LÉGALES</h1>
    <div class="row">
      <div class="col-md-12">
        <h2 class="spacingLetter fw-lighter">1. Identité</h2>
        <p class="text-white fw-lighter">Welcome on Board</p>
        <p class="text-white fw-lighter">Adresse : [Insérez votre adresse]</p>
        <p class="text-white fw-lighter">Email : [Insérez votre adresse email]</p>
        <p class="text-white fw-lighter">Téléphone : [Insérez votre numéro de téléphone]</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <h2 class="spacingLetter fw-lighter">2. Hébergeur</h2>
        <p class="text-white fw-lighter">Nom de l'hébergeur : [Insérez le nom de votre hébergeur]</p>
        <p class="text-white fw-lighter">Adresse : [Insérez l'adresse de votre hébergeur]</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <h2 class="spacingLetter fw-lighter">  3. Droits d'auteur</h2>
        <p class="text-white fw-lighter">Tous les contenus présents sur le site "Welcome on Board" (textes, images, sons, vidéos, ...) sont protégés par des droits d'auteur.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <h2 class="spacingLetter fw-lighter">4. Données personnelles</h2>
        <p class="text-white fw-lighter">Nous nous engageons à protéger les données personnelles de nos utilisateurs conformément à la législation en vigueur.</p>
      </div>
    </div>
  </div>
</body>


<?php
require_once "footer.php"

?>