<?php 
//PYTHON --> LEN
// JAVASCRIPT -> LENGTH
// PHP ->>>  COUNT()

// SÓ O PRINT R VOCÊ ESTÁ TENTANDO RESOLVER UM PROBLEMA 

// PARA PRINTAR ARRYS LISTAS E VETORES ---> print_r() usa ele para pegar dados no POST


$vetor = [10,20,30,40,50,60,70]; //lista

print_r($vetor); // print_r é para vetores 

echo '<br>'.$vetor[2];



$soma = $vetor[4] + $vetor[6];
echo '<br>'.$soma;
echo '<br>';

//PYTHON É LISTA EM OUTRAS LINGUAGENS É VETOR 
echo "<br>TAMANHO DA LISTA: ".count($vetor); // CONTAR QUANTOS ITENS TEM AQUI DENTRO
echo "<br>TAMANHO DA LISTA".sizeof($vetor); // CONTAR O TAMANHO DESSE VETOR
?>