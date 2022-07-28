<?php
/*
TIPOS DE DADOS
String, [palavras]
Integer, [Inteiro qualquer n não decimal]
Float,[Decimal numeros decimais]
Boolean,[Booleano -true e false]
Array,[Matriz]
Object,[Objeto]
NULL[Nulo]
*/

//STRING 
$exemplo1 = "<h1>Olá mundo </h1>";

//INTEGER
$exemplo2 = 345;
$exemplo2_1 = 100;
//$inteiro = $exemplo2 - $exemplo2_1;
//echo $inteiro;

//FLOAT
$exemplo3 = 3.5;
//BOOLEAN
$professor_bonitao = true;

//ARRAY (MATRIZES)
$carros = array("Fusca",2021,"Chevette");

//OBJECT (OBJETO)
class carro {
    public $cor;
    public $modelo;
    public function __construct($cor,$modelo){
        $this->cor = $cor;
        $this->modelo = $modelo;
    }
    public function mensagem(){
        return "o carro é $this->cor e o modelo é $this->modelo";
    }
}

$carro1 = new carro("Branco","Fusca");
$carro2 = new carro("vermelho","Ferrari");

//echo $carro2->mensagem();

//NULL (nulo)
$x = "oi";
$x = null;

var_dump($x);

?>
