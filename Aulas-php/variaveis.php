<?php
    //variaveis
    //   $cor = "azul";
    //não pode iniciar  uma variavel
    //com numeros
    $x = 10;
    $y = 5;

    function teste(){
        global $x;
        echo "valor de x dentro da função: $x";
    }
    teste();
    echo "<br>o valor de x fora: $x";

?>
    
