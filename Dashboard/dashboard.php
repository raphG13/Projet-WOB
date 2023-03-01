<?php session_start();
require_once "../Blog/requette/config.php";
require_once "./headerDash.php"
?>



<body style="background-color:#6D4D29 ;">
  <div class="mt-5 p-5">

  </div>

  <section>
    <?php
    $sql = "SELECT * FROM login";
    $req = $exion->prepare($sql);
    $req->execute();
    $resultat = $req->fetchAll(PDO::FETCH_ASSOC);
    ?>


    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="AddLogin" style="display:none;">
      
            <form action="../Blog/requette/insert_user.php" method="POST" enctype="multipart/form-data" class="mx-3 p-5" style="background-image: linear-gradient(rgba(0, 0, 0, 0.6),rgba(0, 0, 0, 0.6)),url('../img/avion-aeroport-voyage-decollage-atterrissage.webp'); background-size:cover; background-position:center;margin-top:0 !important;" was-validated>
              <div class="border border-dark ">
                <h2 class=" fw-lighter spacingLetter text-uppercase text-center mb-5" style="color:#CBAC6A;">Ajouter</h2>
                <div class="form-group">
                  <label for="user validationTextarea" style="color:#CBAC6A"></label>
                  <input class="form-control rounded-2 border border-dark p-2 mb-2 border-opacity-50  fw-lighter text-center"  type="text" name="user" id="user validationTextarea" placeholder="Identifiant" style="background-image:linear-gradient(rgba(0, 0, 0,1 ),rgba(0, 0, 0, 0.5)), url('../Blog/img/header-blog.jpg');border-color:#CBAC6A" required>
                </div>
                <div class="form-group">
                  <label for="user validationTextarea" style="color:#CBAC6A"></label>
                  <input class="form-control rounded-2 border border-dark p-2 mb-2 border-opacity-50  fw-lighter text-center" type="text" name="mail" id="mail validationTextarea" placeholder="Mot de passe" style="background-image:linear-gradient(rgba(0, 0, 0,1 ),rgba(0, 0, 0, 0.5)), url('../Blog/img/header-blog.jpg');border-color:#CBAC6A" required>
                </div>
                <div class="form-group">
                  <label for="mdp" style="color :#CBAC6A"></label><br>
                  <input class="form-control rounded-2 border border-dark p-2 mb-2 border-opacity-50  fw-lighter text-center" type="text" name="mdp" id="mdp validationTextarea" placeholder="Mot de passe" style="background-image:linear-gradient(rgba(0, 0, 0, 1),rgba(0, 0, 0, 0.5)), url('../Blog/img/header-blog.jpg');background-size:cover;border-color:#CBAC6A" required>
                </div>
                <div class="form-group">
                  <input type="file" id="img" name="img"  class="text-secondary fw-lighter">
                </div>
                <div class="form-group">
                  <input name="statut" type="hidden" value="client">
                </div>
                <div class="form-group mt-3">
                 <label class="fw-lighter spacingLetter text-uppercase text-center" for="statut">Administrateur</label>
                 <input name="statut" type="checkbox" class=" form-check-input" value="admin">
                </div>
                <div class="form-group mt-5 text-center placeholder-glow">
                  <input type="submit" value="Valider" class="text-center rounded-2 border border-dark p-2 mb-2 border-opacity-50 fw-light  spacingLetter text-uppercase placeholder" style="background-color:transparent;color:#CBAC6A;border-color:#CBAC6A">
                </div>
              </div>
            </form>


          </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="d-flex btn-outline-secondary justify-content-center align-items-center mb-3 mt-2">
            <h3 class="fw-lighter spacingLetter text-uppercase">Dashboard</h3>
            <div class="form-inline ms-5 ps-5">
              <button class="btn btn-outline-success ms-5 btn-sm ButAdd">Ajouter</button>
            </div>
          </div>
          <table class="table border-dark table-striped table-hover ">
            <thead class="thead-dark">
              <tr>
                <th class="text-center fw-lighter text-white-50 ">Id</th>
                <th class="text-center fw-lighter text-white-50 ">Pseudo</th>
                <th class="text-center fw-lighter text-white-50 ">Mail</th>
                <th class="text-center fw-lighter text-white-50 ">Statut</th>
                <th class="text-center fw-lighter text-white-50 ">Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($resultat as $utilisateurs) : ?>
                <tr>
                  <td data-target="Update_id_user" class="text-center"><?= $utilisateurs["id_user"] ?></td>
                  <td data-target="Update_user" class="text-center"><?= $utilisateurs["user"] ?></td>
                  <td data-target="Update_mail" class="text-center"><?= $utilisateurs["mail"] ?></td>
                  <td data-target="Update_img" class="text-center"><?= $utilisateurs["img"] ?></td>
                  <td class="text-center"><?= $utilisateurs["statut"] ?></td>
                  <td class="text-center">
                    <button class="btn btn-outline-primary ms-5 mb-1 btn-sm ButUpdate butUpdateTarget">&nbsp; Modifier&nbsp; </button>
                    <a class="btn btn-outline-danger ms-5 btn-sm" href="./DeleteDash.php?id=<?= $utilisateurs["id_user"] ?>">Supprimer</a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>



        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="UpdateLogin" style="display: none;">
               
            <form action="./UpdateDash.php" method="POST" enctype="multipart/form-data" class="mx-3  p-5" style="background-image: linear-gradient(rgba(0, 0, 0, 0.6),rgba(0, 0, 0, 0.6)),url('../img/avion-aeroport-voyage-decollage-atterrissage.webp'); background-size:cover; background-position:center;margin-top:0 !important;" was-validated>
               <div class="border border-dark ">
                 <h2 class=" fw-lighter spacingLetter text-uppercase text-center mb-5" style="color:#CBAC6A;">Modifier</h2>
                 <div>
                  <input type="hidden" id="Update_id_user" name="id_user">
                </div>
                 <div class="form-group">
                   <label for="user validationTextarea" style="color:#CBAC6A"></label>
                   <input class="form-control rounded-2 border border-dark p-2 mb-2 border-opacity-50 fw-lighter text-center bg-secondary bg-gradient bg-opacity-75" type="text" name="user" id="Update_user"   required>
                 </div>
                 <div class="form-group">
                   <label for="user Update_mail" style="color:#CBAC6A"></label>
                   <input class="form-control rounded-2 border border-dark p-2 mb-2 border-opacity-50 fw-lighter text-center bg-secondary bg-gradient bg-opacity-75" type="text" name="mail" id="Update_mail"  required>
                 </div>
                 <div class="form-group">
                   <label for="mdp" style="color :#CBAC6A"></label><br>
                   <input class="form-control rounded-2 border border-dark p-2 mb-2 border-opacity-50 fw-lighter text-center " type="text" name="mdp" id="mdp" placeholder="Mot de passe" style="background-image:linear-gradient(rgba(0, 0, 0, 1),rgba(0, 0, 0, 0.5)), url('../Blog/img/header-blog.jpg');background-size:cover;border-color:#CBAC6A" required>
                 </div>
                 <div class="form-group">
                   <input type="file" id="img" name="img" class="text-secondary fw-lighter">
                 </div>
                 <div class="form-group mt-3">
                  <label class="fw-lighter spacingLetter text-uppercase text-center" for="statut">Administrateur</label>
                  <input name="statut" type="checkbox" class=" form-check-input" value="admin">
                 </div>
                 <div class="form-group mt-5 text-center placeholder-glow">
                   <input type="submit" value="Valider" class="text-center rounded-2 border border-dark p-2 mb-2 border-opacity-50 fw-light  spacingLetter text-uppercase placeholder" style="background-color:transparent;color:#CBAC6A;border-color:#CBAC6A;">
                 </div>
               </div>
             </form>
          </div>
          </div>
        </div>
      </div>
      <div class="container mt-5 p-5">
        <div class="row ">
          <div class="col-lg-12 d-flex align-items-center">
            <div class="col-lg-12 col-sm-10 col-10">
              <div class="tiretAvion mb-3" style="background:linear-gradient(.25turn,#D4C792,#444444);height: 5px;"></div>
            </div>
            <div class="">
              <div class="iconeTiretAvion bg-transparent" style="content: url(../img/icon-avion-cote.webp);width: 70px;height: 70px;"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>






</body>

</html>

<?php require_once "./footerDash.php"; ?>