<?php require_once "../Blog/requette/config.php"?>

<?php var_dump($_GET['id']);  ?>
<?php if (isset($_GET['id']) && !empty($_GET['id'])){

    $id = $_GET['id'];

    $sql = "DELETE FROM login WHERE id_user = :id";

    $req = $exion->prepare($sql);

    $req->execute([":id" => $id]);

    if ($req) {
        header("location: Dashboard.php?succes= 1" );
    }
    else {
        header("location: Dashboard.php?erreur= 0" );
    }
}