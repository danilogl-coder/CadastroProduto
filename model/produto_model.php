<?php
class Produto{
    private $id;
    private $nome;
    private $descricao;
    private $custo;
    private $fornecedor;
    private $foto;
    private $categoria;
    
    public function __get($atributo){
        return $this->$atributo;
    }

    public function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }
}



?>