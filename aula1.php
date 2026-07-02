<?php
//echo é equivalente ao print no python
echo 'hellow world';
echo '<br>'; // significa que ele está renderizando  br estou mandando uma tag html que quebra a linha
echo '<h1> Carioca</h1>'; // você consegue manipular 
echo 'a';

print("<br>ok");

print_r("akakaka");

/// criando uma variavel
$a = 10;
$b = 20;
$res = $a * $b;
print($res);  // não vai usar o print vamos usar mais o echo
// variavis dinamicas tipagem fraca, muda de valor 
$x = 400;
$y = 150;
$res2 = $x / $y;
echo '<br> ' . $res2;
$a = "thiago";
echo "<br> valor de A: " . $a;

/// o php é igual o js

?>