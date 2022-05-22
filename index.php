<?php
require_once 'view/user.php';

    if ($adminLogeado == false) {
        header('Location: ../view/');
    }else {
        header('Location: ../view/usuario.php');

    }

?>