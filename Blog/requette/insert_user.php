<?php 
require_once "./config.php";

function dump($valeur){
    echo "<pre>";
    var_dump($valeur);
    echo "</pre>";
    }

    dump($_POST["user"]);// on affiche les données de l'inscription de la méthode post 
    // grâce à $_POST 
    dump($_POST["mdp"]);


    var_dump($_POST);
    $user=$_POST["user"];
    $mdp=$_POST["mdp"];
    // isset ça veut dire que mon champ n'est pas null ou indéfinie (existe)
    // empty veut dire que mon champ du formulaire est null (vide)
    // !empty veut dire mon champ est différent de null (saisi)

    // on fait une condition pour dire que mon champ user et mdp ne sont pas null ou indefinie
    // et à l'intérieur une condition pour dire que mon user et mdp différent de null (saisi)

 
 
    if (isset($_POST["user"]) && isset($_POST["mdp"]) && isset($_POST["mail"]) && isset($_POST["statut"])
    
    && !empty($_POST["user"]) && !empty($_POST["mdp"]) && !empty($_POST["mail"]) && !empty($_POST["statut"])){
    // alors on les stocke dans des variables
        var_dump($_POST["user"]);#je teste
     // j'ai pris la clé user et je l'ai mise dans une variable en dessous  
        $user = $_POST["user"];// je pourrais l'utiliser plus tard 
        $mdp = $_POST["mdp"];// je pourrais l'utiliser plus tard
        $mail = $_POST["mail"];
        $statut = $_POST["statut"];


        $img = $_FILES['img']['name'];
        $type = $_FILES['img']['type'];
        $tmp_name = $_FILES['img']['tmp_name'];
        $error = $_FILES['img']['error'];
        $size = $_FILES['img']['size'];

        move_uploaded_file($tmp_name, "../img_profil/".$img);

        // je prends ma clé est je vais la hashé 
        // grâce à la fonction ou méthode password_hash
        $hash= password_hash($mdp, PASSWORD_DEFAULT);
        // définir mon language sql et prépare  en insérant des paramètres :user(nom du paramètre) et ? et je l'a stocke dans une variable 
        // ? evite de mettre un nom de paramètre
        $sql = "INSERT INTO login ( user, mdp,img,mail,statut) VALUES (:user,:mdp,:img,:mail,:statut)";

        $req = $exion->prepare($sql);
        
        $req->bindParam(":user", $user);
        $req->bindParam(":mdp", $hash);
        $req->bindParam(":img", $img);
        $req->bindParam(":mail", $mail);
        $req->bindParam(":statut", $statut);
    
        $req->execute();     
        
        if($req){
            header("location: ../connect.php");
        }else{ 
            echo "Erreur d'envoi";
        }
        
    }else{ 
        header("location: ../inscription.php?erreur=0");
         }
         // deuxieme else dans la condition de isset comme ça elle reste dans la page inscription 
        // car les champs n'ont pas été bien rempli
?>

