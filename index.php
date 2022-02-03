<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once('./hija/gato.php');
    require_once('./hija/perro.php');
    

    $perro1=new perro();
    $perro1->comer();
    $perro1->dormir();
    $gato1=new gato();
    $gato1->comer();
    $gato1->dormir();
    ?>
</body>
</html>