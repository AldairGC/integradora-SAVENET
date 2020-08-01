<?php
    require 'bd_bd.php';
    
    $calle = $_POST['calle'];
    $numeroE = $_POST['numero'];
    $colonia = $_POST['colonia'];
    $codigoP = $_POST['codigo'];

    $userBD = "root";
    $passUserBD = "aldairGC15";
    $obj = new DB($userBD, $passUserBD);  

    $obj->Domicilio($calle, $numeroE, $colonia, $codigoP);
?>
