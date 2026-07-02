<?php
// como verificar se uma variavel e null em php
//OPERADORES LÓGICOS E ARITMÉTICOS 

// 1 -> TRUE  | 0 -> FALSE
// null 
$num1 = 10;
$num2 = 20;
$soma = $num1 + $num2;
$divisao = $num1/$num2;
$mult = $num1 * $num2;

$diferente = $num1 != $num2;// variavel booleana
//boleana só tem duas opções true e false

$res1 = $num1 < $num2; // se o num1 for menor que o num2 vai armazenar esse valor na variavel res1
// echo $res1;
// $res = 1 -> TRUE
// nullllll -> FALSE

/// se for falso é verdadeiro

echo is_null($res1);

echo "VALOR DE RES: ".$res1;

// if( is_null($res1) ){
    // echo 'É FALSA A INFORMAÇÃO!!!';
// }
// else{
    // echo $num1 . 
//}


echo "VALOR  de RES: ".$res1;

$a = 5;
$b = 10;
$teste1 = ($a > $b) && ($a < $b);  //and E
$teste2 = ($a == $b) || ($a != $b); //or OU

echo "<br>TESTE1: ".$teste1; // NADA
if ($teste1 == false) echo 'TESTE é FALSE'; 
echo "<br>TESTE2: ".$teste2; // 1
?>