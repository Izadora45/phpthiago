<?php

$teste = false; //senha incorreta
$flag = true;   //usuario ativo no sistema // a flag é uma coluna no banco de dados

//OPERADOR LÓGICO AND -> &&
//OPERADOR LÓGICO OR -> ||

//$res = $teste && $flag;
//$res = $teste || $flag;


$res = $teste && $flag ? "Logado" : "Senha incorreta ou Usuário inativo";

echo $res;

?>