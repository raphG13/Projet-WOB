<?php session_start()?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="blog.css">
    <link rel="stylesheet" href="/Projet/projet.css">
    <title>Document</title>
</head>
<body>
    <header>
        <nav class="navbar bg-dark pb-5 fixed-top  shadow-lg p-3 " style="height:75px;">
            <div class="mx-4">
                <a href="../projet.php ">  <img src="../img/favicon.png " style="width:50px;" alt="logo"></a>
            </div>
            <div>
                <a href="../blog/blog.php" class="text-decoration-none  spacingLetter text-uppercaset fw-light " style="color:#CBAC6A;letter-spacing: 2px!important;">LE BLOG</a>
            </div>
            <?php if(isset($_SESSION["connect"])&& !empty($_SESSION["connect"])):?>
                <?php if($_SESSION["connect"] ==1):?>
            <div>  
                <a href="../blog/blog.php" style="color:#CBAC6A ;letter-spacing: 2px!important;" ><?= $_SESSION["user"]." ";?>est connecté</a>
            </div>
            <div>
                <a href="./disconnect.php" class="text-decoration-none spacingLetter text-uppercase fw-light  " style="color:#CBAC6A;letter-spacing: 2px!important;">Déconnexion</a>
            </div>
                <?php endif;?>
                <?php else:?>
                    <div>
                        <a href="./connect.php " class="text-decoration-none spacingLetter text-uppercase  fw-light" style="color:#CBAC6A;letter-spacing: 2px!important;">Connexion</a>
                    </div>
            <?php endif;?>
            <a href="./inscription.php" class="text-decoration-none spacingLetter text-uppercase fw-light " style="color:#CBAC6A;letter-spacing: 2px!important;">Inscription</a>
            <a href="./faq.php" class="text-decoration-none spacingLetter text-uppercase fw-light" style="color:#CBAC6A;letter-spacing: 2px!important;">FAQ</a>
            <div class="mx-4">
                <img src="/img/Type_avion/vieil-avion2.png" style="width:50px;" alt="logo">
            </div>
        </nav>
    </header>


    <main> 

