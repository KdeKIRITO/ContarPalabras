<?php

$mensaje = $_POST["texto"];

$cadena = $mensaje;

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="Style.css">

    <title>RESULTADO</title>

</head>

<body>

<form action="volver.php" method="POST">

<div class="formulario"> 

  <h1> RESULTADO </h1>

</div>
  
  <div id="tabla-formulario">

  <label for="text">Frase</label>

          <input value="<?php echo "Hay ".str_word_count($cadena, 0). " palabras en la cadena '$cadena'"; ?>" name="texto" type="text" id="tabla">

      </div>

      <button name="borrar" type="submit" id="button"> Volver </button>

  </form>
    
</body>
</html>