<?php

include "../produto/conexao.php";

    if(isset($_POST['id'])){

        //entrada
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $foto = $_POST['foto'];

        //processamento
        $sql = "update aluno set nome = '$nome', telefone = '$telefone', email = '$email', foto = '$foto' where id = $id";
        $alterar = mysqli_query($conexao,$sql);

        //saida
        if($alterar){
            echo "
                <script>
                    alert('Registro Alterado com Sucesso!');
                    window.location = 'listar_alunos.php';
                </script>
            ";
        }

    } else { //tratamento de dados
        echo"
    <p>Esta é uma página de tratamento de dados </p>
    <p>Clique <a href='editar_aluno.php'>aqui</a> para acessar</p>
    
    ";

    }

?>