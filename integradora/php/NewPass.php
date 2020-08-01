<?php
    require 'bd_bd.php';
    $passA = $_POST['passA'];
    $userBD = "root";
    $passUserBD = "aldairGC15";
    $obj = new DB($userBD, $passUserBD);    
    $obj->NewPass($passA);
?>
