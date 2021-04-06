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
    <?php
        dameNombre("Miguel Padron Sarmiento","PADRON 77777777777777");
    ?>
    <p style="background-color: blue;">
        <?php
            echo "Tu edad es " , dameaEdad(1968);
            $p= new Personas();
            echo $p->dameNombre('Miguel');

        ?>
    </p>
</body>
</html>
