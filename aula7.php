<?php

$nome1 = "";
$nome2 = "Joaquim";
$idade = 18;

$res1 = is_numeric($nome); // NADA ou FALSE
$res2 = is_numeric($idade); // TRUE ou 1 
$res3 = empty($nome1); //$nome1 vazio? TRUE
$res4 = !empty($nome2);

echo "<br>RES 1: ".$res1;
echo "<br>RES 2: ".$res2;
echo "<br>RES 3: ".$res3;
echo "<br>RES 4: ".$res4;
?>