<?php $testo = "Lorem ipsum dolor sit amet consectetur adipisicing elit"?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <? echo $testo ?>
    </div>
    <div>
        la lunghezza della frase è: <?= strlen($testo) ?>
    </div>
</body>
</html>