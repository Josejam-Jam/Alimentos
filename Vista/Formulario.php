<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="/CSS/Style_PHP.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desarrollo Alimentos Vista Formualrio php</title>
</head>
<body>
  
    <?php
      echo("<h2>Formulario PHP [ DATOS USUARIO ]</h2>");
    ?>
    
    <section>
        <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="POST">
            <legend>Formulario DATOS USUARIO</legend>
            <fieldset>
                <label for="nombre">Introduce Nombre:&emsp;<input type="text" id="nombre" name="nombre"></label>
            </fieldset>
            <fieldset>
                <label for="email">Introduce Email:&emsp;<input type="text" id="email" name="email"></label>
            </fieldset>
            <fieldset>
                <label for="web">Introduce Website:&emsp;<input type="text" id="web" name="web"></label>
            </fieldset>
            <fieldset>
                <label for="edad">Introduce Edad:&emsp;<input type="number" id="edad" name="edad"></label>
            </fieldset>
            <fieldset>
                <label for="dni">Introduce DNI:&emsp;<input type="text" id="dni" name="dni"></label>
            </fieldset>
            <fieldset>
                <input type="submit" id="enviarP" name="enviarP" value="Enviar">
            </fieldset>
        </form>
    </section>
    
    
</body>
</html>

