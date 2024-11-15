<?php
include "../produto/conexao.php";

    if(isset($_GET['id'])){

       
        $id = $_GET['id'];

       
        $sql = "select * from aluno where id = $id";
        $seleciona = mysqli_query($conexao,$sql); 
        $exibe =  mysqli_fetch_array($seleciona); 


        $nome = $exibe['nome'];
        $telefone = $exibe['telefone'];
        $email = $exibe['email'];
        $foto = $exibe['foto'];

    
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1 class="mt-3 text-center" >Edição de Aluno</h1>
        <hr>
        <form name="cadastro" method="post" action="update_aluno.php">
          
            <input type="hidden" name="id" value="<?=$id?>">
        
          <div class="mb-3">
        <label for="nome" class="form-label">nome</label>
        <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $nome?>"required>
          </div>
        
          <div class="mb-3">
        <label for="telefone" class="form-label">telefone</label>
        <input type="number" class="form-control" id="telefone" name="telefone" value="<?php echo $telefone?>" required>
          </div>
        
          <div class="mb-3 ">
        <label for="email" class="form-label">email</label>
        <input type="text" class="form-control" id="email" name="email" value="<?=$email ?>"required>
          </div>
          <div class="mb-3 ">
        <label for="foto" class="form-label">foto</label>
        <input type="text" class="form-control" id="foto" name="foto" value="<?=$foto?>"required>
          </div>
        
          
        <div class="mb-3 text-end">
            <button type="button" class="btn btn-danger" onclick="history.go(-1)">Voltar</button> 
            <button type="submit" class="btn btn-success">Editar</button>
        </div>
        </form>
    </div>
        
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
    </html>

    <?php

    }else{ 
        echo"
    <p>Esta é uma página de tratamento de dados </p>
    <p>Clique <a href='listar_alunos.php'>aqui</a> para acessar</p>
    
    ";

    }
    ?>