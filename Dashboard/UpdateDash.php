<?php 
require_once "../Blog/requette/config.php";

var_dump($_POST);
var_dump($_FILES);



if (isset($_POST['id-user']) && isset($_POST['user']) && isset($_POST['email']) && isset($_POST['mdp']) 
&& !empty($_POST['id-user']) && !empty($_POST['user']) && !empty($_POST['email']) && !empty($_POST['mdp'])) {
        echo 'te';    
    $id = $_POST['id-user']; 
    $user = $_POST['user']; 
    $email = $_POST['email']; 
    $mdp = $_POST['mdp'];
    $statut = "";

    if (isset($_POST["statut"]) && !empty($_POST["statut"])) {
        $status = $_POST["administrateur"];
    }
    else {
        $status = "client";
    }

    $img = $_FILES['img']['name'];
    $type = $_FILES['img']['type'];
    $tmp_name = $_FILES['img']['tmp_name'];
    $error = $_FILES['img']['error'];
    $size = $_FILES['img']['size'];

    move_uploaded_file($tmp_name, "../img_profil/".$img);

    $hash = password_hash($mdp, PASSWORD_DEFAULT);
    
    $sql = "UPDATE user SET img_user = :img, name = :name , user = :user, tel = :tel, email = :email, mdp = :mdp, statut = :statut WHERE id_user = :id";

    $req = $exion->prepare($sql);

    $req->execute([
        ':img' => $img,
        ':name' => $name,
        ':user' => $user,
        ':tel' => $tel,
        ':email' => $email,
        ':mdp' => $hash,
        ':statut' => $statut,
        ':id' => $id
        ]);

    if ($req) {
        echo 'requette envoyer';
        header("location: ../compte.php");
    }
    else {
        header("location: ../compte.php?erreur= 0");
        echo "erreur d'envoie";
    }
}


?>




