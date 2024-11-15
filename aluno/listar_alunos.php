<?php
include "../produto/conexao.php";

$sql = "select * from aluno order by id";
$seleciona = mysqli_query($conexao, $sql);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Alunos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="text-end mt-5">
            <a href="aluno.php">
                <button class="btn btn-success">Cadastrar aluno</button>
            </a>
        </div>

        <h1 class="text-center mt-2">Lista de alunos</h1>

        <div class="row mb-2 bg-dark text-light text-center">

            <div class="col-2">id</div>
            <div class="col-2">Nome</div>
            <div class="col-2">Telefone</div>
            <div class="col-2">Email</div>
            <div class="col-2">Foto</div>

        </div>

        <?php

        while ($exibe = mysqli_fetch_array($seleciona)) {
            $id = $exibe["id"];

            ?>

            <div class="row text-center">
                <div class="col-2"><?php echo $exibe['id'] ?></div>
                <div class="col-2"><?php echo $exibe['nome'] ?></div>
                <div class="col-2"><?php echo $exibe['telefone'] ?></div>
                <div class="col-2"><?php echo $exibe['email'] ?></div>
                <div class="col-2"><?php echo $exibe['foto'] ?></div>

                <div class="col-2 icones">
    <a href="ver_aluno.php?id=<?php echo $id?>"><img src="img/ver.png" alt=""></a><a href="editar_aluno.php?id=<?php echo $id?>"><img src="img/editar.png" alt=""></a><a href="excluir_aluno.php?id=<?php echo $id?>" onclick="return confirm('Confirma a Exclusão do Registro?')"><img src="img/delete.png" alt=""></a> 
</div>
            </div>
            <?php


        }
        ?>
        <div>
</body>

</html>