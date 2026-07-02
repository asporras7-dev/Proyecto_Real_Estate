<?php
include '../../vendor/adodb/adodb-php/adodb.inc.php';

function conectarUsuarios(){
    $db = NewADOConnection("mysqli");

    $hostname="TU_HOST";
    $userId = "TU_USUARIO";
    $password = "TU_CONTRASEÑA";
    $dataBase = "TU_BASE_DE_DATOS";

    $db->debug = true;
    $db->connect($hostname, $userId, $password, $dataBase);

    return $db;
}
?>
