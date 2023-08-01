<?php
define('SERVER', 'localhost');
define('BANCO', 'sisaluno');
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