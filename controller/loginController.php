<?php
include '../model/User.php';
include '../model/conexion.php';
    $femail=$_POST ['femail'];
    $fpasswd=$_POST ['fpasswd'];
    //echo "El e-mail es {$femail} y la contraseña es {$fpasswd}";
    //Crear nuevo objeto User
    $user=new User($femail, $fpasswd);
    echo $user->getEmail();
    echo "<br>";
    echo $user->getPasswd();
    $sql="SELECT * FROM tbl_user WHERE email=? AND passwd=?";
    $smt=$dbh->prepare ($sql);
    $smt->bindParam(1,$femail);
    $smt->bindParam(2,$fpasswd);
    $smt->execute();
    $numUser=$smt->rowCount();
    echo $numUser;
?>