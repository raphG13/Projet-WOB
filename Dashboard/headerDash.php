

<!DOCTYPE html>
<html lang="fr" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../Blog/constructor/blog.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script defer src="../Dashboard/src/js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    
    <title>header blog WOB!</title>
</head>
<body > 
    <header>

        <nav class="navbar navbar-expand-lg shadow bg-dark fixed-top ">
            <div class="container-fluid ">
              <a class="navbar-brand" href="../projet.php"><img src="/img/Type_avion/vieil-avion2.png" class="shadow ms-4" style="width:50px; " alt="logo"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item mx-3 ">
                    <a class="nav-link active text-decoration-none fw-lighter link-light spacingLetter text-uppercase" aria-current="page" href="../blog/blog.php" data-toggle="tooltip" data-placement="bottom" title="Consulter 'LE BLOG'">le blog</a>
                  </li>
                  <?php if(isset($_SESSION["connect"])&& !empty($_SESSION["connect"])):?>
                        <?php if($_SESSION["connect"] ==1):?>
                    <div class="mx-3 mt-2">  
                        <a href="../Dashboard/dashboard.php" style="color:green ;letter-spacing: 2px!important;" ><span class="text-capitalize"><?= $_SESSION["user"]." ";?></span>est connecté</a>
                    </div>
                    <div class=" mx-3 mt-2">
                        <a href="../Dashboard/disconnect.php" class="text-decoration-none text-uppercase fw-lighter" style="color:#CBAC6A;letter-spacing: 2px!important;">Déconnexion</a>
                    </div>
                        <?php endif;?>
                        <?php else:?>
                  <li class="nav-item mx-3 mt-3">
                    <a class="nav-link text-decoration-none fw-lighter link-light spacingLetter text-uppercase" href="./connect.php" data-toggle="tooltip" data-placement="bottom" title="Connexion à 'LE BLOG'">connexion</a>
                  </li>
                  <?php endif;?>
                  </li>
                </ul>
              </div>
            </div>
          </nav>


    </header>