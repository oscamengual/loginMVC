<?php
    // Caso de éxito
    if($numUser==1){
        // Hacemos una redirección a home.php
        header("Location:../view/home.php");
    } else {
        // Fallo en la autenticación
        header("Location:../view/vista_login.html?error=1")
    }
?>