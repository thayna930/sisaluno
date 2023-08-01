<?php 
define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', '');
define('DBNAME', 'sisaluno');

try {
    $conexao = new pdo ('mysql:host=' . HOST . ';dbname=' . DBNAME, USUARIO, SENHA);
  

} catch (PDOException $e) {
    echo "Erro: Conexão com banco de dados não foi realizada com sucesso. 
    Erro gerado" . $e->getMessage();
}




?>