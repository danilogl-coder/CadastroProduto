<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Estou importando o BootStrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <title></title>
</head>
<body>
    <div class="container">
        <!-- Navbar inicio -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        

        <div class="collapse navbar-collapse" id="dropButton">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php?link=1">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?link=2">Cadastro de Produtos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?link=3">Área Restrita</a>
            </li>
           
            </ul>
        </div>
        </nav>

        <!-- Navbar fim -->

        <!-- Lógica das páginas -->
        <?php
        $link = @$_GET['link'];
        $pag[1]='principal.php';
        $pag[2]='cadProduto.php';
        $pag[3]='areaRestrita.php';
        $pag[4]='produto_controller.php';

        if(!empty($link)){
            if(file_exists($pag[$link])){
                include $pag[$link];
            }
            } else {
                trim(include 'principal.php');
        }

        ?>
    </div>

 <!-- Estou importando o Javascript BootStrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>