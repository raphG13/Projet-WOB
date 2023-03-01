<?php 
require_once "./config.php";

function dump($valeur){
    echo "<pre>";
    var_dump($valeur);
    echo "</pre>";
    }

dump($_POST);

if (isset($_POST["user"]) && isset($_POST["mdp"])
&&  !empty($_POST["user"]) && !empty($_POST["mdp"])){
    
    $user = $_POST["user"];
    $mdp = $_POST["mdp"];

    $sql="SELECT * FROM login WHERE user = :user";

    $req = $exion->prepare($sql);

    $req->bindParam(":user", $user);
    #$req->bindParam(":mdp", $mdp);

    $req->execute();

    if($req){
       # header("location: ../connect.php");
       
    }else{ 
       # echo "Erreur d'envoi";
    
     }
    $user_count = $req->rowCount();
    dump($user_count);

     $result=$req->fetch(PDO::FETCH_ASSOC);
     dump ($result);

    

echo $result["id_user"];

    if($user_count>0){
        if(password_verify($mdp,$result["mdp"])){
            #echo "mdp valide";
            
            session_start();
            $_SESSION["user"]=$result["user"];
            $_SESSION["id_user"]=$result["id_user"];
            $_SESSION["connect"]=1;
            header("location: ../blog.php");
            
        }else{
            echo "mdp invalide";
            header("location: ../connect.php");
        }
    };

}
 



?>