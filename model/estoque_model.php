<?php
class Estoque{
    private $id;
    private $idProduto;
    private $nome;
    private $descricao;
    private $categoria;
    private $quantidade;
    
    public function __get($atributo){
        return $this->$atributo;
    }

    public function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }
}



?>