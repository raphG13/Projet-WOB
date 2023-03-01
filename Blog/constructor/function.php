<?php 
function getArticle($exion,$nombre){
    if($nombre >0){
        $sql="SELECT article.titre, article.img, login.user, article.mes, article.date FROM article INNER JOIN login ON article.id_user= login.id_user";

        $req=$exion->prepare($sql);

        $req->execute();  
    }
    $result = $req->fetchAll();
}




?>