<?php
$no = ("Digite o nome do livro: ");
$au = ("Digite o nome do autor: ");
$ed = ("Digite a editora do livro: ");

$livro = [
    "titulo"  => "$no",
    "autor"   => "$au",
    "editora" => "$ed"
];


if ($livro ["titulo"] === "" && $livro ["autor"] === "" && $livro ["editora"])

echo "Livro cadastrado com sucesso!\n";
echo "Título: " . $livro["titulo"] . "\n";
echo "Autor: " . $livro["autor"] . "\n";
echo "Editora: " . $livro["editora"] . "\n";



$res = $teste && $flag ? "Logado" : "Senha incorreta ou Usuário inativo";