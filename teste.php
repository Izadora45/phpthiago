<?php

$titulo = "NetShoes";
$texto = "O melhor sites de produtos esportivos do Brasil!";
$menu = ["Home","Produtos","Categorias","Novidades","Login"];
$foto = "./foto.png";

$produtos = [
    ["id", "nome"]
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> <?php echo $titulo ?> </h1>

    <!-- <img src="<?php echo $foto; ?>" alt="minha foto"> -->
    <img src="<?=$foto; ?>" alt="minha foto">

    <nav>
        <?php
            for($i=0; $i<count($menu); $i++){
                echo '<ul> <li>';
                echo '<a href="#"> '. $menu[$i].'</a>';
                echo '</li> </ul>';
                echo '</div>';
            }
        ?>
    </nav>

    <p> <?php echo $texto?> </p>

    <footer>@2026</footer>
</body>
</html>

<!-- personal home page ele é um processador de texto ele processa texto no navegador, as informações sairam do banco-->
<!-- informações vem do banco e o controle vem do php pois ele é o backend -->
<!-- isso se chama componentização é você quebrar a página em partes tem o include tem o requery -->