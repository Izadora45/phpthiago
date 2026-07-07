<?php
    $menu_user = '<a href="#">cadastro</a> <br> <a href="#"> listagem </a>';
    $menu_adm = '<a href="#">dashboard</a> <br> <a href="#"> relatórios </a>';

    //echo $menu_user;

    $user_adm = false;

    //$validar_menu = $user_adm == true ? $menu_adm : $menu_user;  //se for verdadeiro ele vai mandar essa outra variavel
    
    //mandando uma comparação direta sem colocar dentro de uma variável
    echo  $user_adm == true ? $menu_adm : $menu_user;  
    
    //echo $validar_menu;
/// as 500 linha estão nas variáveis

?>