<?php
    require_once 'model/estoque_model.php';
    require_once 'service/estoque_service.php';
    require_once 'conexao/conexao.php';


    
    @$acaoe = isset($_GET['acaoe']) ? $_GET['acaoe']:$acaoe;
    @$ide = isset($_GET['ide']) ? $_GET['ide']:$ide;

    if($acaoe == "inserir")
    {
        $estoque = new Estoque();
        $estoque->__set('idProduto',$_POST['idProduto']);
        $estoque->__set('nome',$_POST['nome']);
        $estoque->__set('descricao',$_POST['descricao']);
        $estoque->__set('quantidade',$_POST['quantidade']);
        $estoque->__set('categoria',$_POST['categoria']);

        $conexao = new Conexao();

        $estoqueService = new EstoqueService($estoque,$conexao);
        $estoqueService->inserir();

        header('location: index.php?link=5');

    }

    if($acaoe == "recuperar")
    {
    $estoque = new Estoque();
    $conexao = new Conexao();

    $estoqueService = new EstoqueService($estoque, $conexao);
    $estoque = $estoqueService->recuperar();
    }

    if($acaoe == "comprar")
    {
        $estoque = new Estoque();
        $conexao = new Conexao();
        $estoque->__set('id',$ide);
        $estoque->__set('quantidade',$_GET['quantidade']);

        $estoqueService = new EstoqueService($estoque, $conexao);
        $estoqueService->comprar();

        header('location:index.php?link=1');
        
    }

    if($acaoe == "qt")
    {
        $estoque = new Estoque();
        $conexao = new Conexao();
        $estoque->__set('id',$_GET['ide']);
        $estoque->__set('quantidade',$_POST['quantidade']);

        $estoqueService = new EstoqueService($estoque, $conexao);
        $estoqueService->qt();

        header('location:index.php?link=5');

       
        
    }
    /*
    if($acao == 'alterar')
    {
    $produto = new Produto();
    $produto->__set('descricao',$_POST['descricao']);
    $produto->__set('custo',$_POST['custo']);
    $produto->__set('fornecedor',$_POST['fornecedor']);
    if($_FILES['foto']['name'] != '')
    {
        $produto->__set('foto',$_FILES['foto']['name']);
    }
    else 
    {
        $produto->__set('foto',$_SESSION['foto']);
    }
    $produto->__set('id',$_POST['id']);

    $conexao = new Conexao();

    $produtoService = new ProdutoService($produto, $conexao);
    $produtoService->alterar();

    header('location: index.php?link=3');
    }

    if($acao == 'excluir')
    {
        $produto = new Produto();
        $produto->__set('id',$_POST['id']);

        $conexao = new Conexao();

        $produtoService = new ProdutoService($produto, $conexao);
        $produtoService->excluir();

        header('location: index.php?link=3');
    }

    if($acao == 'pesquisar')
    {
        $produto = new Produto();
        $conexao = new Conexao();

        $produtoService = new ProdutoService($produto, $conexao);
        $produto = $produtoService->pesquisar();
    }
*/
?>