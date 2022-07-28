<?php
    $js = "<p> Oi tudo bom</p>";
?>
<!DOCTYPE html>
<html lang= "pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Aula de Php</title>
</head>
<body>

    <?php $ativado = "nao"; ?>
    <?php if ($ativado =="sim"){?>
        <h1> Está ativado sim </h1>
    <?php } else{ ?>
        <h1> Não está esta ativado </h1>    
    <?php } ?>

</body>
</html>
