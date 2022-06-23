<?php

$texto = $_POST["text"];

if(!$texto == null){

    header('Location: contar.php');
    die;

}

echo "NO HAY NADA";

?>