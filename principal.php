<?php 
$acao= 'pesquisar';
require_once 'produto_controller.php';

?>
<div class="container text-center">
    <div class="row">
        <div class="col">
        <!-- Card Inicio 1 -->

        <div class="card">
        <div class="card-header">
            
        </div>
        <div class="card-body">
            <h5 class="card-title">Cadastro de Produto com PHP e Mysql</h5>
            <p class="card-text">Site para desenvolvimento de cadastro de produto</p>
            <a href="#" class="btn btn-primary">Home</a>
        </div>
        </div>

        <!-- Card Fim 1 -->
        </div>  
        <div class="col">
         <!-- Card Inicio 2 -->

       
        </div>

        <!-- Card Fim 2 -->
        </div>
    </div>

    <div class="row">
        <?php foreach ($produto as $key => $produto) {?>
        <div class="col">
         <!-- Card Inicio 3 -->

         <div class="card">
        <img class="card-img-top" src="fotoProduto/<?= $produto->foto;?>" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><?= $produto->custo * 1.8?></h5>
            <p class="card-text"><?= $produto->descricao?></p>
            <a href="#" class="btn btn-primary">Comprar</a>
        </div>
        </div>

        <!-- Card Fim 3 -->
        </div>
        <?php }?>
    </div>
</div>