<?php
/// criando uma função
function soma(int $a, int $b) : void{     //void ela não retorna nada ela  é vazia
    echo $a + $b;
}

//function soma(int $a, int $b) : int{    
//    return $a + $b;
//} ele vai recerber um int e o void quer dizer que ele não vai retornar nada 

//Void significa que a função não retorna nada

function multiplicacao( int $a, int $b):int
{
    return $a * $b;
}



$x = 10;
$y = 20;

soma($x,$y);

$res = multiplicacao($x,$y);
echo "<br>".$res;



?>