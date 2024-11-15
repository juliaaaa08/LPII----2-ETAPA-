<?php

include "../produto/conexao.php";

if(isset($_GET["id"])){ 
    
    $id = $_GET['id'];

  
    $sql = "delete from cliente where id = '$id' ";
    $excluir = mysqli_query($conexao, $sql);

 

    if($excluir){
        echo"
        <script>
        alert('Registro Excluído com Sucesso!');
        window.location = 'listar_clientes.php';
        </script>
        ";
      
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
    <p>Clique <a href='listar_clientes.php'>aqui</a> para acessar a lista de produtos cadastrados</p>
    
    ";

}
?>