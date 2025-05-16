<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 09 - Parte 2</title>
</head>
<body>
    
    <h1>Aula 09 -Parte 2 - Excluir Cliente</h1>

    <p>
        <a href="index.php">Home</a>
        <a href="Clientes.php">Clientes Cadastrados</a>
        
    </p>
    <?php
        require_once 'validacao.php';
        
        id_nao_enviado(); // verifica se o id do cliente foi enviado

        // se o id foi enviado para esta pagina, armazenamos ele numa variavel
        $id = (int)$_GET['id'];

        require_once 'conexao.php'
    ?>
</body>
</html>