<?php

include "conexao.php";

if(isset($_GET["id"])){ //verifica se recebeu o get
    //entrada
    $id = $_GET['id'];

    //processamento
    $sql = "delete from produto where id = '$id' ";
    $excluir = mysqli_query($conexao, $sql);

    //saída - escreve e executa a sql

    if($excluir){
        echo"
        <script>
        alert('Registro Excluído com Sucesso!');
        window.location = 'listar_produtos.php';
        </script>
        ";
        //redirecionamento de páginas pelo php
        //header('location: listar_produtos.php');
    }else{
        echo"
        <p>Banco de Dados temporariamente fora do ar. Tente novamente mais tarde.</p>
        <p>Entre em contato com o administrador do site...</p>
        ";
        echo mysqli_error($conexao);
    }

} else{
    echo"

    <p>Esta é uma página de tratamento de dados </p>
    <p>Clique <a href='listar_produtos.php'>aqui</a> para acessar a lista de produtos cadastrados</p>
    
    ";

}
?>