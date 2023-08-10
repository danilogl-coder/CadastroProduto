<?php 
$acao = "recuperar";
require_once 'produto_controller.php';
?>

<h1>Área Restrita </h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Foto</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
    </thead>
    <?php foreach ($produto as $key => $produto) {?>
    <tbody>
        <tr>
            <td><?= $produto->descricao?></td>
            <td><img src="fotoProduto/<?= $produto->foto?>" width="40" height="40"></td>
            <td><a href="index.php?link=2&metodo=alterar&id=<?= $produto->id?>">Alterar</td>
            <td><a href="index.php?link=2&metodo=excluir&id=<?= $produto->id?>">Excluir</td>
        </tr>
    </tbody>
    <?php }?>
</table>