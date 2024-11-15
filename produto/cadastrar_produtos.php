<?php
/*está incluindo o arquivo de conexão, pegando as infos daquela pag*/

    include "conexao.php";

    if(isset($_POST['descricao'])){
        //entrada

        $descricao = trim($_POST['descricao']); //trim retira os espaços desnecessários
        $preco = trim($_POST['preco']); 
        $estoque = trim($_POST['estoque']); 

        //processamento - inserindo dados no banco de dados
        $sql = "insert into produto(descricao,preco,estoque) values ('$descricao', '$preco', '$estoque')";
        $cadastrar = mysqli_query($conexao,$sql);
        //saída feedback ao usuário
        
        if($cadastrar){
            echo "            
        <script>
            alert('Produto Cadastrado com Sucesso!');
            window.location = 'listar_produtos.php'
            </script>
            ";
        } else{
            echo "
             <p>Banco de dados Temporariamente fora do ar. Tente novamente mais tarde. Entre em contato com o administrador do site para reportar o problema.</p>

             <p>Clique <a href='produtos.php'>aqui</a> para retornar ao formulário de cadastro</p>
            ";
        }
    } else { //tratamento de erro e redirecionamento

        echo"

        <p>Esta é uma página de tratamento de dados </p>
        <p>Clique <a href='produtos.php'>aqui</a> para acessar</p>
        
        ";

    }
?>