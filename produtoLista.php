<?php 
$acaoe = "recuperar";
require_once 'estoque_controller.php';

?>

<h1>Produtos</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Descrição</th>
            <th scope="col">Foto</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <?php foreach ($estoque as $key => $estoque) {?>
    <?php if($estoque->id != $estoque->id_produtos){?>
    <tbody>
        <tr>
            <td><?= $estoque->nome?></td>
            <td><?= $estoque->descricao?></td>
            <td><img src="fotoProduto/<?= $estoque->foto?>" width="40" height="40"></td>
            <td><a href="index.php?link=6&metodo=inserir&id=<?= $estoque->id?>">Adicionar ao Estoque</td>
        </tr>
    </tbody>
    <?php }?>
    <?php }?>
</table>