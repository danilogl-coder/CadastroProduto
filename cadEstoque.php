<?php 
 if(isset($_GET['metodo']))
 {
    $metodo = $_GET['metodo'];
    $acao = 'recuperarProduto';
    $id = $_GET['id'];
    require_once 'produto_controller.php';
    foreach ($produto as $key => $produto) {
    $id = $produto->id;
    $nome = $produto->nome;
    $descricao = $produto->descricao;
    $custo = $produto->custo;
    $fornecedor = $produto->fornecedor;
    $categoria = $produto->categoria;
    $foto = $produto->foto;
    $_SESSION['foto']=$produto->foto;
    }
 }
?>

<h1>Cadastro de Produto</h1>
<form name="form1" action="index.php?link=7&acaoe=<?php if(isset($metodo) && $metodo == 'inserir'){echo'inserir';}elseif($metodo == 'alterar'){echo 'alterar';}else{echo "excluir";}?>" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control" value="<?php if(isset($nome)){echo $nome;}else{echo "";}?>">
    </div>

    <div class="mb-3">
        <label>Descrição</label>
        <input type="text" name="descricao" class="form-control" value="<?php if(isset($descricao)){echo $descricao;}else{echo "";}?>">
    </div>
    <div class="mb-3">
        <label>Quantidade</label>
        <input type="number" name="quantidade" class="form-control">
    </div>

    <div class="mb-3">
        
        <label>Categoria</label>
        <select name='categoria'>
        
        <option value='<?php echo"$categoria";?>'><?=$categoria?></option>
       
        </select>
    </div>

    <input type="hidden" name="idProduto" value="<?php if(isset($id)){echo $id;}else{echo '';}?>">
    <input type="submit" class="btn btn-primary" value="<?php if(isset($metodo) && $metodo == 'inserir'){echo 'inserir';}elseif($metodo == 'alterar'){echo "alterar";}else{echo "excluir";} ?>">
</form>