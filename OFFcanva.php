<div class="">
    <?php if(isset($_SESSION["connect"])&& !empty($_SESSION["connect"])):?>
    <?php if($_SESSION["connect"] ==1):?>
      <a  class="btn btn-transparent btn btn-outline-success" href="./Dashboard/dashboard.php" role="button">
      <img src="img/Type_avion/vieil-avion2.png" class="shadow " style="width:50px;" alt="logo"></a>
    <?php endif;?>
    <?php else:?>
      <button class="btn " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions" style="color:white ;"><img src="img/Type_avion/vieil-avion2.png" class="shadow" style="width:50px" alt="logo"></button>
      <div class="offcanvas offcanvas-start bg-dark bg-opacity-75" data-bs-scroll="true" data-bs-backdrop="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel" style="color:#CBAC6A"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body text-decoration-none ">
          <p class=" fw-light  text-uppercase spacingLetter text-center">Tableau de bord</p>
          <form action="./Blog/requette/select_user.php" method="POST" class="row gy-2 gx-3 align-items-center  mx-5" was-validated>
              <div class="col-auto">
                <!--<label class="visually-hidden" for="autoSizingInput">Name</label>-->
                <label for="validationTextarea" class="form-label">Textarea</label>
                  <!--<textarea class="form-control" id="validationTextarea" placeholder="Admin" required></textarea>-->
                <input type="text" class="form-control  bg-transparent placeholder-glow" id="autoSizingInput validationTextarea" placeholder="Admin" required>
              </div>
              <div class="col-auto">
                <label class="visually-hidden" for="autoSizingInputGroup">Username</label>
                <div class="input-group">
                  <input type="text" class="form-control  bg-transparent placeholder-glow" id="autoSizingInputGroup" placeholder="Mot de passe" required>
                </div>
              </div>
              <div class="col-auto">
               <a  class="btn btn-transparent btn btn-outline-success" href="page." role="button"><button class="btn btn-transparent" type="submit" >👨🏻‍✈️</button></a>
              </div>
          </form> 
        </div>
      </div>
    <?php endif;?> 
</div>      