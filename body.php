<?php
include('conf.php');
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
</body>