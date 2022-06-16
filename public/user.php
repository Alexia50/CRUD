<?php
$title = "Utilisateur";
include '../include/header.php';

include_once('../src/db/database.php');
$db = new Database();
$db->connect('minicms');
$id = $_GET['id'];

if (is_numeric($id)) {
    $query = $db->query("SELECT * FROM utilisateurs WHERE idutilisateur=$id");


    if ($row = $query->fetch()) {
        echo '<ul class="list-group">';
        echo "<li class='list-group-item list-group-item-dark'>{$row['nom']}</li>";
        echo "<li class='list-group-item list-group-item-dark'>{$row['prenom']}</li>";
        echo "<li class='list-group-item list-group-item-dark'>{$row['email']}</li>";
        echo '</ul>';
    } else {
?>
        <div class="alert alert-info" role="alert">
            Aucun utilisateur trouvé
        </div>
<?php
    }
}



include '../include\footer.php';
