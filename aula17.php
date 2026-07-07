<?php 
$vet = array(10,20,30,40,50); /// VETOR
print_r($vet);
echo "<br>";

$arr = array(
    "nome" => "Thiago", /// é um array porém não tem posição zero tem nomeações de posições entende qui value
    "idade" => "32",
    "cidade" => "CG",
    "estado" => "MS"
);
//é um array de array e dentro da posição zero tem outro array
print_r($arr);
echo'<br>';
echo $arr["nome"]; // mostre arr na posição nome, ouseja ele irá printar o valor dentro da quela posição que foi nomeada como nome para não ficar posição zero e posição 1 entende
echo $vet[3];
?>