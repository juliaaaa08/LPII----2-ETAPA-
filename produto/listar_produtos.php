<?php
    include "conexao.php";
    $sql = "select * from produto order by id"; /*order by ordena por descriçao, ou seja, descrescente ou crescente. Caso não coloque, ordens como está no banco*/
    $seleciona = mysqli_query($conexao,$sql);
?>


<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="container">

    <div class="text-end mt-5">
        <a href="produtos.php">
            <button class="btn btn-success">Cadastrar novo</button>
        </a>
    </div>

    <h1 class="text-center mt-2">Lista de Produtos</h1>
    <!--*********************CABEÇALHO DA LISTA-->
    <div class="row mb-2 bg-dark text-light text-center">
        
        <div class="col-2">id</div>
        <div class="col-3">Descrição</div>
        <div class="col-3">Preço</div>
        <div class="col-2">Estoque</div>

    </div>

<!--****************Lista direta do banco de dados-->
<?php

    while($exibe = mysqli_fetch_array($seleciona)){
        $id = $exibe["id"];
        
        ?>
        <div class="row text-center" >
        <div class="col-2"><?php echo $exibe['id']?></div>
    <div class="col-3"><?php echo $exibe['descricao']?></div>
<div class="col-3"><?php echo $exibe['preco']?></div>
<div class="col-2"><?php echo $exibe['estoque']?></div>

<div class="col-2 icones">
    <a href="ver_produto.php?id=<?php echo $id?>"><img src="img/ver.png" alt=""></a><a href="editar_produto.php?id=<?php echo $id?>"><img src="img/editar.png" alt=""></a><a href="excluir_produto.php?id=<?php echo $id?>" onclick="return confirm('Confirma a Exclusão do Registro?')"><img src="img/delete.png" alt=""></a> <!--esse ponto de interrogação significa que esta passando um parâmetro. Esse é o método get, que passa pela url. O parametro passado se chama id e esse id carrega uma informação do banco. O return volta ao valor selecionado. --> <!--Shift + f5 atualiza html e o css-->
</div>
</div>

<?php

}
?>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>