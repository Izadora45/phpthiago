<?php
$titulo= "SoundX";
$menu= ["Home","Produtos","Categorias","Novidades","Login"];
$descricao=["Tipo: Bluetooth 5.3","Bateria: Até 30 horas de uso","Cancelamento de ruído ativo (ANC)",];
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SoundX - Página Inicial</title>
    <link rel="stylesheet" href="pagina.css">
</head>
<body>

    <header>
        <h1>SoundX</h1>
    </header>

    <nav class="nav-bar">
        <?php 
            foreach($menu as $item){
                echo '<a href="#"> '. $item.'</a>';
            }
        ?>
    </nav>

    <main class="section-prod">
        
        <div class="prod-area">
            
            <div class="area-foto">
                <img src="foto.png" alt="Fone de Ouvido Bluetooth">
            </div>

            <div class="section-informacao">
                <h3>Fone de Ouvido Bluetooth Premium</h3>
                <p class="preco">R$ 349,90</p>
                
                
                <ul>
                    <li>Tipo: Bluetooth 5.3</li>
                    <li>Bateria: Até 30 horas de uso</li>
                    <li>Cancelamento de ruído ativo (ANC)</li>
                </ul>
            </div>

        </div>
    </main>

</body>
</html>