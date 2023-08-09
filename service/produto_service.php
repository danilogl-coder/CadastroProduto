<?php 
class ProdutoService{
    private $produto;
    private $conexao;

    public function __construct(Produto $produto, Conexao $conexao){
        $this->conexao= $conexao->conectar();
        $this->produto= $produto;
    }

    public function inserir()
    {
        $query = "insert into produtos (descricao, custo, fornecedor, foto)
        values(?,?,?,?)";

        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(1,$this->produto->__get('descricao'));
        $stmt->bindValue(2,$this->produto->__get('custo'));
        $stmt->bindValue(3,$this->produto->__get('fornecedor'));
        $stmt->bindValue(4,$this->produto->__get('foto'));

        if($stmt->execute())
        {
            $diretorio = 'fotoProduto/';
            move_uploaded_file($_FILES['foto']['tmp_name'],
            $diretorio.$this->produto->__get('foto'));
        }
    }
}
?>