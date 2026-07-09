<?php
include('conf.php');
?>
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