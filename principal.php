<?php 
$acaoe= 'recuperar';
require_once 'estoque_controller.php';

?>
<div class="container text-center">
   
    <hr>

    <div class="row">
        <?php foreach ($estoque as $key => $estoque) {?>
        <?php if($estoque->quantidade != null){?>
        <div class="col">
            
        <div class="card-columns">

        <div class="card">
            <div class="card-header d-flex justify-content-center">
                <h1><?= $estoque->nome ?></h1>
            </div>
            <img class="card-img-top" src="fotoProduto/<?= $estoque->foto?>" alt="Card image cap">
            <div class="card-body">
            <div class="row">
                <div class="col-6">
                    <div class="card-title d-flex justify-content-center">
                        <h1>R$<?= $estoque->custo?>,00</h1>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card-title d-flex justify-content-center">
                        <h1>QT:<?= $estoque->quantidade?></h1>
                    </div>
                </div>
            </div>
            </div>

            <div class="card-footer">
                <div class="card-text">
                    <h4><?=$estoque->descricao?></h4>
                </div>
            </div>
            <div>
                <a href="index.php?link=7&acaoe=comprar&ide=<?=$estoque->id?>&quantidade=<?=$estoque->quantidade - 1?>">
                <button class="btn btn-success">
                    Comprar
                </button>
                 </a>
            </div>

        </div>

        </div>

        </div>
        <?php }?>
        <?php }?>
    </div>
</div>