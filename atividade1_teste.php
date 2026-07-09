<?php
$nome = ("Digite o nome do livro: ");
$autor = ("Digite o nome do autor: ");
$editora = ("Digite a editora do livro: ");

$livro = [
    "titulo"  => "$nome",
    "autor"   => "$autor",
    "editora" => "$editora"
];


if ($livro ["titulo"] === "" && $livro ["autor"] === "" && $livro ["editora"])

echo "Livro cadastrado com sucesso!\n";
echo "Título: " . $livro["titulo"] . "\n";
echo "Autor: " . $livro["autor"] . "\n";
echo "Editora: " . $livro["editora"] . "\n";



$res = $teste && $flag ? "Logado" : "Senha incorreta ou Usuário inativo";