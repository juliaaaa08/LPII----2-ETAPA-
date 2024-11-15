<?php

    include "conexao.php";

    if(isset($_POST['id'])){

        //entrada
        $id = $_POST['id'];
        $descricao = $_POST['descricao'];
        $preco = $_POST['preco'];
        $estoque = $_POST['estoque'];

        //processamento
        $sql = "update produto set descricao = '$descricao', preco = '$preco', estoque = '$estoque' where id = $id";
        $alterar = mysqli_query($conexao,$sql);

        //saida
        if($alterar) {
            echo "
                <script>
                    alert('Registro Alterado com Sucesso!');
                    window.location = 'listar_produtos.php';
                </script>
            ";
        }

    } else { //tratamento de dados
        echo"
    <p>Esta é uma página de tratamento de dados </p>
    <p>Clique <a href='editar_produto.php'>aqui</a> para acessar</p>
    
    ";

    }

?>