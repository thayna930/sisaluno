<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Testa Conexão</title>
</head>
<body>


<?php
define('SERVER', 'localhost');
define('BANCO', 'Empresa');
define('SENHA', '');
define('USER', 'root');

try{
    $conexao = new pdo('mysql:host=' . SERVER . ';dbname=' . BANCO, USER, SENHA);
    echo "conexao ok";

}

catch(PDOExeption $e){
    echo "Erro gerado" . $e->getMessage();
}



?>
      
</body>
</html>