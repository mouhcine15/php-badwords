<?php 
    $testo = "Lorem ciao dolor sit ciao consectetur ciao elit";
    // $sost = str_replace("ciao", "$text", $testo);
    $utent = $_GET['name'];
    $sost = str_replace($utent, "***", $testo)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <input type="text" name="name" id="name">
        <button>invio</button>
    </form>
    <div>
        <? echo $testo ?>
    </div>
    <div>
        la lunghezza della frase è: <?= strlen($testo) ?>
    </div>
    <div>
        <?= $sost?>
    </div>
    <div>
        la lunghezza della frase con le sostituzioni è: <?= strlen($sost) ?>
    </div>
</body>
</html>