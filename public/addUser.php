<?php
include_once '../src/db/database.php';


if(count($_POST)>0) {
    $db = new Database();
    $db->connect('minicms');
    $db->insert('utilisateurs',  $_POST);
}
include "./users.php";

