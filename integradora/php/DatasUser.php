<?php
    require 'bd_bd.php';
    
    $nombre = $_POST['nombreU'];
    $aPaterno = $_POST['Apaterno'];
    $aMaterno = $_POST['Amaterno'];
    $Fnacimiento = $_POST['fechaN'];
    $Enacimiento = $_POST['estadoN'];
    $curp = $_POST['curp'];
    $rfc = $_POST['rfc'];


    $userBD = "root";
    $passUserBD = "aldairGC15";
    $obj = new DB($userBD, $passUserBD);    

    $obj->DatasUser($nombre, $aPaterno, $aMaterno, $Fnacimiento, $Enacimiento , $curp, $rfc);
?>
