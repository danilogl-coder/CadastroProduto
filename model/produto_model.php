<?php
class Produto{
    private $id;
    private $descricao;
    private $custo;
    private $fornecedor;
    private $foto;
    
    public function __get($atributo){
        return $this->$atributo;
    }

    public function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }
}



?>