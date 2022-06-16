<?php
include_once '../src/db/database.php';
$id=$_POST['id'];

if(is_numeric($id)) {
    $db = new Database();
    $db->connect('minicms');
    $db->deleteFrom('utilisateurs',  "idutilisateur=$id");
}
include "./users.php";

