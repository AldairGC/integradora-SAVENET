<?php
    require 'bd_bd.php';
    $tel1 = $_POST['tel1'];
    $tel2 = $_POST['tel2'];
    $email = $_POST['email'];
    $userBD = "root";
    $passUserBD = "aldairGC15";
    $obj = new DB($userBD, $passUserBD);    
    $obj->Dcontactos($tel1, $tel2, $email);
?>
