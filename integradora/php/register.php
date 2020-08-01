<?php
    require 'bd_bd.php';
    $nameUser = $_POST['USER'];
    $passw = $_POST['PW'];
    $correo = $_POST['EMAIL'];
    $userBD = "root";
    $passUserBD = "aldairGC15";
    $obj = new DB($userBD, $passUserBD);    
    $obj->insert_user($nameUser, $passw, $correo);
?>
