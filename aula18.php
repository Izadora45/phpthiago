<?php
/// pegou os dados do sql da table de produtos
$dados = array(
    ["id"=>1, "nome"=> "Teclado","preco"=>5.5, "estoque"=>99],
    ["id"=>2, "nome"=> "Fone","preco"=>6.5, "estoque"=>99],
    ["id"=>3, "nome"=> "Mouse","preco"=>7.5, "estoque"=>99],
    ["id"=>4, "nome"=> "WebCam","preco"=>3.5, "estoque"=>99],
    ["id"=>5, "nome"=> "Pendrive","preco"=>1.5, "estoque"=>99]
);

//print_r($arr);

//echo $arr[2]["nome"]; ///imprimindo webcam

for($i=0 ; $i < count($dados); $i++){
    echo "<br> ID: ".$dados[$i]["id"] . "| Produto: ".$dados[$i]["nome"] . " | Preco: ".$dados[$i]["preco"] . "| Estoque: ".$dados[$i]["estoque"];
}
?>