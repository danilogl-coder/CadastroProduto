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
        $query = "insert into produtos (nome, descricao, custo, fornecedor, foto, categoria)
        values(?,?,?,?,?,?)";

        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(1,$this->produto->__get('nome'));
        $stmt->bindValue(2,$this->produto->__get('descricao'));
        $stmt->bindValue(3,$this->produto->__get('custo'));
        $stmt->bindValue(4,$this->produto->__get('fornecedor'));
        $stmt->bindValue(5,$this->produto->__get('foto'));
        $stmt->bindValue(6,$this->produto->__get('categoria'));

        if($stmt->execute())
        {
            $diretorio = 'fotoProduto/';
            move_uploaded_file($_FILES['foto']['tmp_name'],
            $diretorio.$this->produto->__get('foto'));
        }
    }
    public function recuperar()
    {
        $query = 'select id, nome, descricao, custo, fornecedor, categoria, foto from produtos';
        $stmt=$this->conexao->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function recuperarProduto($id)
    {
    $query = 'select id, nome, descricao, custo, fornecedor, categoria, foto from produtos where id = ?';
    $stmt=$this->conexao->prepare($query);
    $stmt->bindValue(1,$id);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function alterar()
    {
        $query = "update produtos set descricao = ?, custo= ?, fornecedor=?, foto=? where id =?";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(1,$this->produto->__get('descricao'));
        $stmt->bindValue(2,$this->produto->__get('custo'));
        $stmt->bindValue(3,$this->produto->__get('fornecedor'));
        $stmt->bindValue(4,$this->produto->__get('foto'));
        $stmt->bindValue(5,$this->produto->__get('id'));
        if($stmt->execute())
        {
            if($_SESSION['foto'] != $this->produto->__get('foto')){
                unlink('fotoProduto//'.$_SESSION['foto']);
                $diretorio = 'fotoProduto/';
                move_uploaded_file($_FILES['foto']['tmp_name'],
                $diretorio.$this->produto->__get('foto'));
            }
        }
    }

    public function excluir()
    {
        $query = "delete from produtos where id = ?";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(1,$this->produto->__get('id'));
        if($stmt->execute()){
            unlink('fotoProduto//'.$_SESSION['foto']);
        }
    }

    public function pesquisar()
    {
    $query = 'select id, nome, descricao, custo, fornecedor, categoria, foto from produtos limit 5';
    $stmt = $this->conexao->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
    }


   
}
?>