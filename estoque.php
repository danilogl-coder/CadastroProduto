<?php 
$acaoe = "recuperar";
require_once 'estoque_controller.php';
?>

<h1>Estoque</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
    </thead>
    
    <tbody>
        <tr>
        <div class="row">
        <div class="col-6">
        <!-- Card Inicio 1 -->

        <div class="card mt-5 mb-5">
        <div class="card-header">
        <h5 class="card-title">Opções</h5>
        </div>
        <div class="card-body">
            <a href="index.php?link=8" class="btn btn-primary"><i class="bi bi-plus-circle-dotted"></i></a>
        </div>
        </div>
      <!-- Card Fim 1 -->
        </div>  
        </div>
        </div>
        </tr>
        
        <?php foreach ($estoque as $key => $estoque) {?>
        <?php if($estoque->quantidade != null){?>
        <tr>
            <td><?= $estoque->nome?></td>
            <td><?= $estoque->descricao?></td>
            <td><img src="fotoProduto/<?= $estoque->foto?>" width="40" height="40"></td>
            <td>
            <!-- Example single danger button -->
            <div class="btn-group">
            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <p>QT:<?= $estoque->quantidade?></p>
            </button>
            <div class="dropdown-menu">
            <form action="index.php?link=7&acaoe=qt&ide=<?php echo $estoque->id;?>" method="post">
                        <div>
                        <label for="">Quantidade</label>
                        <input type="number" name="quantidade">
                        <input type="submit" value="Salvar mudanças">
                        </div>
            </form> 
            </div>
            </div>

            </td>
            <?php $ide = $estoque->id?>


            <!-- Modal -->
            
                    
                    
          
        </tr>
        <?php }?>
        <?php }?>
    </tbody>
    
</table>


