<?php
include 'funciones.php';
include 'Classes.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hOLA</h1>
    
    <p style="background-color: blue;">
        <?php
    
            $p= new Personas('Miguel padron');
            // echo $p->dameNombre('Miguel');

        ?>
    </p>
</body>
</html>
