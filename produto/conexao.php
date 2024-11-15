
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$local = "localhost";
$usuario = "root"; /*usuario/moderador (ele tem "poderes" e faz tudo)*/
$senha = "";
$banco = "infolindos";

$conexao = mysqli_connect($local, $usuario, $senha, $banco);

header("Content-Type:text/html; charset=utf-8");
mysqli_query($conexao,"SET NAMES 'utf8'");
mysqli_query($conexao, "SET character_set_connection = utf8");
mysqli_query($conexao,"SET character_set_client = utf8");
mysqli_query($conexao, "SET character_set_results = utf8");
?>

</body>
</html>
