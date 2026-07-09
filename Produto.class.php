<?php
class Produto{ //Nome da Class
    public int $id;
    public string $nome;// Atributos
    public string $tipo;
    public float $preco;

    function __construct($nome){
        $this->nome = $nome;
    }

    public function mostrarPreco(){
        echo $this->preco;
    }
}
?>
