<?php
    require 'bd_bd.php';

    $Ncuenta = $_POST['numero_Cuenta'];
    $Nbanco = $_POST['nombre_Banco'];
    $Clave = $_POST['clave'];
    $Beneficiario = $_POST['Beneficiario'];

    $userBD = "root";
    $passUserBD = "aldairGC15";

    $obj = new DB($userBD, $passUserBD);    
    $obj->CuentaB($Ncuenta, $Nbanco, $Clave, $Beneficiario);
?>
