<?php
$title="Utilisateurs";
include '../include/header.php';
include_once ('../src/db/database.php');
$db=new Database();
$db->connect('minicms');

$statement=$db->query('SELECT idutilisateur, nom, prenom FROM utilisateurs');
?>

<div class="m-2">
    <a href="createUser.php" class='btn btn-sm btn-success'> Ajouter un utilisateur </a>
</div>
<table class="table table-light"><thead><td>Prénom</td><td>Nom</td><td>Bouton</td></thread><tbody>
<?php
foreach ($statement as $row){
    ?>
    <tr>
        <td>
        <?=$row['prenom']?>
        </td>
        <td>
        <?=$row['nom']?>
        </td>
        <td>
        <a class='btn btn-sm btn-info' href='./user.php?id=<?=$row['idutilisateur']?>'>
            <i class="bi bi-pencil-square"></i>
        </a>
        <form class="d-inline-block" method="post" action='./deleteUser.php'>
            <button class='btn btn-sm btn-danger' >
                <i class="bi bi-radioactive"></i>
            </button>
                <input type="hidden" name="id" value="<?=$row['idutilisateur']?>">
            
        </form>
        </td>
    </tr>

    
<?php 
}

echo '</tbody></table>';


include '../include/footer.php';
