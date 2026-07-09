<?php
$titulo= "NetShoes";
$menu= ["Home","Produtos","Categorias","Novidades","Login"];
$descricao=["Indicado para: Corrida e Caminhada","Material: Tecido respirável","Garantia do Fabricante: Contra defeito de fabricação",];
$titulo2="Tênis Esportivo de Alta Performance";
$foto= "./foto.png"
?>



<body>

    <header>
        <h1>NetShoes</h1>
    </header>

    <nav class="nav-bar">
        <?php 
            foreach($menu as $item){
                echo '<a href="#"> '. $item.'</a>';
            }
        ?>
    </nav>

    <section class="hero">
        <img src="" alt="">
        <div class="hero-conteudo">
            <h2>Performance que acompanha cada passo</h2>
            <p>Conheça o novo <?= $titulo2 ?> e sinta a diferença desde o primeiro treino.</p>
            <a href="#produto" class="hero-botao">Ver produto</a>
        </div>
    </section>

    <main class="section-prod" id="produto">
        
        <div class="prod-area">
            
            <div class="area-foto">
                <img src="<?= $foto ?>" alt="Tênis Esportivo Corrida">
            </div>

            <div class="section-informacao">
                <h3><?= $titulo2 ?></h3>
                <p class="preco">R$ 259,90</p>
                
                <ul>
                    <?php 
                        foreach($descricao as $dec_prod){
                            echo '<li>' . $dec_prod . '</li>';
                        }
                    ?>
                </ul>
            </div>

        </div>
    </main>

</body>
</html>