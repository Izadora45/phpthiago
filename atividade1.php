
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    

    $no = $_POST["titulo"];
    $au = $_POST["autor"];
    $ed = $_POST["editora"];

    $livro = [
        "titulo"  => $no,
        "autor"   => $au,
        "editora" => $ed
    ];

    echo "<h3>Livro cadastrado com sucesso!</h3>";
    echo "Título: " . $livro["titulo"] . "<br>";
    echo "Autor: " . $livro["autor"] . "<br>";
    echo "Editora: " . $livro["editora"] . "<br>";
}
?>


<form method="POST" action="">
    <p>
        <label>Digite o nome do livro:</label><br>
        <input type="text" name="titulo" required>
    </p>
    <p>
        <label>Digite o nome do autor:</label><br>
        <input type="text" name="autor" required>
    </p>
    <p>
        <label>Digite a editora do livro:</label><br>
        <input type="text" name="editora" required>
    </p>
    <button type="submit">Cadastrar</button>
</form>





