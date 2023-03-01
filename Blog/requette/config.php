<?php 
define("HOSTNAME_DB","localhost");
define("USER_DB", "root");
define("PASSWORD_DB","root");
define("DATABASE_DB","blog");



$conn="mysql:host=".HOSTNAME_DB. ";dbname=" .DATABASE_DB;
// $dsn = relier ma connexion il contient mon localhost ainsi que ma base de donnée le_blog
// sert à créer une sécurité en plus 

try {
    $exion = new PDO($conn, PASSWORD_DB, USER_DB);

}
    //l'instance new PDO permet d'utiliser la classe PDO et ses propriétés
catch (PDOException $e){
    die("erreur de connexion". $e->getMessage());
}
// catch c une classe 
// $e permet de stocker une erreur 
// attrape et affiche le message d'erreur ? 
// getMessage c une fonction native (propriétés déjà prédéfinie) de la classe PDOexception qui permet d'afficher un message d'erreur


?>




















