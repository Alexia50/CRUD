<?php
$title="Ajouter un utilisateur";

include '../include/header.php';

include_once ('../src/db/database.php');
?>

<form method="post" action="./addUser.php">
<div class="form-floating mb-3">
  <input type="text" class="form-control" id="nom" name="nom" placeholder="Arrendel" value="<?=$user['nom']??''?>">
  <label for="nom">Nom</label>
</div>
<div class="form-floating mb-3">
  <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Anna"value="<?=$user['prenom']??''?>">
  <label for="prenom">Prénom</label>
</div>
<div class="form-floating mb-3">
  <input type="email" class="form-control" id="email" placeholder="anna@arrendel.com"value="<?=$user['email']??''?>">
  <label for="email">Email address</label>
</div>
<div class="form-floating">
  <input type="password" class="form-control" id="floatingPassword" placeholder="Password"value="<?=$user['password']??''?>">
  <label for="floatingPassword">Password</label>
</div>
    <hr>
    <button class="btn btn-outline-success">Valider</button>
</form>

<?php
include '../include/footer.php';

?> 


/UPDATE 'utilisateurs' SET nom='value',prenom='value'
WHERE id= ... 