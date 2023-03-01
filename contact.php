<?php 
require_once "header.php";
#require_once "requette/config.php";

#$sql="SELECT article.titre, article.img, login.user, article.mes, article.date FROM article INNER JOIN login ON article.id_user= login.id_user";

#$req=$exion->prepare($sql);

#$req->execute();

#$result = $req->fetchAll();

?>

<?php 
if (isset($_GET["add"])): 
    $add =$_GET["add"];
        if($add==0): 
    ?>
            <div class="align-self-start text-nowrap text-center p-2 ms-3 alert alert-danger fw-lighter">Erreur d'insertion</div>
        
         <?php elseif($add==1) : ?>
            <div class="align-self-start text-nowrap text-center p-2 ms-3 alert alert-success fw-lighter">Insertion réussie</div>
    
    <?php endif;?>
<?php endif;?>

<div class="mx-5">
    <h3 class="class pt-5 pb-5 text-center fw-lighter spacingLetter text-uppercase ">FORMULAIRE DE CONTACT</h3>
    
    <form method="POST" action="./Blog/requette/insert_user.php" class="row g-4 m-30-top">
        <div class="col-md-8"> 
          <input type="text" class="form-control bg-transparent fw-lighter  spacingLetter text-uppercase border-dark" style="--bs-bg-opacity: .5" id="inputEmail4" name="nom"  placeholder="VOTRE NOM">
        </div>
        <div class="col-md-4">
          <input type="text" class="form-control bg-transparent fw-lighter  spacingLetter text-uppercase border-dark" style="--bs-bg-opacity: .5;" id="inputPassword4" name="prenom"  placeholder="VOTRE PRÉNOM">
        </div>
        <div class="col-4">
          <input type="text" class="form-control bg-transparent fw-lighter  spacingLetter text-uppercase border-dark" style="--bs-bg-opacity: .5;" id="inputAddress" name="telephone"  placeholder="VOTRE TÉLÉPHONE">
        </div>
        <div class="col-8">
          <input type="email" class="form-control bg-transparent fw-lighter  spacingLetter text-uppercase border-dark" style="--bs-bg-opacity: .5;" id="inputAddress2" name="mail"  placeholder="VOTRE EMAIL">
        </div>
        <div class="col-md-12">
          <input type="text" class="form-control bg-transparent fw-lighter  spacingLetter text-uppercase border-dark" style="--bs-bg-opacity: .5;" id="inputCity" name="sujet"  placeholder="SUJET">
        </div>
        <div class="col-md-12">
            <textarea class="form-control bg-transparent fw-lighter  spacingLetter text-uppercase border-dark" style="--bs-bg-opacity: .5;" id="exampleFormControlTextarea1" name="message"  placeholder="VOTRE MESSAGE" rows="10"></textarea>
        </div>
        <div class="">
            <button class="btn btn-outline-dark fw-lighter  spacingLetter text-uppercase border-dark" style="height: 60px; width: 270px; color:white  "   type="submit">ENVOYER</button>
        </div>
    </form>
</div>
</div>

<?php
require_once "footer.php"

?>