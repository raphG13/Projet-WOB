<?php 
#j ouvre une session
session_start();

#je ferme une session active
session_destroy();

#je redirige vers la page demandée
header("location: ../projet.php ")
?>