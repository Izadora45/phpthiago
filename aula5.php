<?php
//esse vetor tem esse tanto de numeros e ele quer saber quanto tem aqui dentro 
// função equivalente ao sum(lista) no PYTHON
// somou o vetor
$vetor = [10,20,30,40,50,60,70]; 

echo array_sum($vetor);

$idade = 21;
if($idade >= 18){
    echo '<br> Pode tirar carteira';
}
else{
    echo '<br> Não pode tirar carteira';
}

$salario = 5500;
 /// calcular imposto sobre o salário 

 $funcionario = "MATTEUS KILL";
 if($salario < 5000){
    echo $funcionario . 'Não paga imposto!!!! Salario R$: '.$salario;
 }else if($salario >= 5000 && $salario < 10000){
    $imposto = $salario * 0.17;
    $salario_liquido = $salario - $imposto;
    echo "<br>". $funcionario . "vai pagar R$: " . $imposto . "Salario Liquido R$: ". $salario_liquido;
 }
 else{
    $imposto = $salario * 0.27;
    $salario_liquido = $salario - $imposto;
    echo "<br>".$funcionario . "vai pagar R$: " . $imposto . "Salário liquido R$: ".$salario_liquido;
 }
?>