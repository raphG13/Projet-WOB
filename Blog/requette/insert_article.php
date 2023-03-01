<?php    require_once "config.php";
var_dump($_FILES);echo "<br>";#Permet d afficher toute les informations de la photo(chemin...)
var_dump($_POST); 
if (isset($_POST["titre"]) && isset($_POST["mes"]) && isset($_POST["id_user"]) && isset($_POST["date"])
&&  !empty($_POST["titre"]) && !empty($_POST["mes"]) &&  !empty($_POST["id_user"])&&  !empty($_POST["date"])){
echo "test";
    $titre = $_POST["titre"];
    $mes = $_POST["mes"];
    $id_user = $_POST["id_user"];
    $date= $_POST["date"];
    

   
    $img_name=$_FILES["img"]["name"];
    $type=$_FILES["img"]["type"];
    $tmp_name=$_FILES["img"]["tmp_name"];
    $error=$_FILES["img"]["error"];
    $size=$_FILES["img"]["size"];

    move_uploaded_file($tmp_name,"../upload/".$img_name);
    
    $sql="INSERT INTO article (titre, mes, id_user, date, img) VALUES (:titre, :mes, :id_user, :date, :img)";#permet de "preparer"(prepare) la requette

   $req=$exion->prepare($sql);

    $req->execute([':titre' => $titre,':mes' => $mes,':id_user' => $id_user,':date' => $date,':img' => $img_name]);
    
    if ($req) {
        header("location: ../blog.php");
        echo "Envoi réussi";
    }

    else
{
    echo"Erreur d'envoi";
}







}


    ?>

































