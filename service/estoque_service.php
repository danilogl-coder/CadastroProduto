<?php 
class EstoqueService{
    private $estoque;
    private $conexao;

    public function __construct(Estoque $estoque, Conexao $conexao){
        $this->conexao= $conexao->conectar();
        $this->estoque = $estoque;
    }

    public function inserir()
    {
        $query = "insert into estoque (id_produtos, nome, descricao, categoria, quantidade)
        values(?,?,?,?,?)";

        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(1,$this->estoque->__get('idProduto'));
        $stmt->bindValue(2,$this->estoque->__get('nome'));
        $stmt->bindValue(3,$this->estoque->__get('descricao'));
        $stmt->bindValue(4,$this->estoque->__get('categoria'));
        $stmt->bindValue(5,$this->estoque->__get('quantidade'));
        $stmt->execute();

    }
    public function recuperar()
    {
        $query = 'SELECT p.id, e.id_produtos,e.quantidade, p.nome, p.descricao, p.custo, p.fornecedor, p.foto, p.categoria FROM produtos as p LEFT JOIN estoque as e ON p.id = e.id_produtos;';
        $stmt=$this->conexao->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }


    public function comprar()
    {
        $query = "update estoque set quantidade=? where id =?";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(1,$this->estoque->__get('quantidade'));
        $stmt->bindValue(2,$this->estoque->__get('id'));
        $stmt->execute();
        
    }

    public function qt()
    {
        $query = "update estoque set quantidade=? where id =?";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(1,$this->estoque->__get('quantidade'));
        $stmt->bindValue(2,$this->estoque->__get('id'));
        $stmt->execute();
        
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