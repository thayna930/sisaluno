<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Excluir</title>
</head>
<body>
    



<?php
##permite acesso as variaves dentro do aquivo conexao
require_once('conexao.php');



##cadastrar
if(isset($_POST['cadastrar'])){
        ##<dados recebidos pelo metodo GET
        $nome = $_POST["nome"];
        $idade = $_POST["idade"];
        $cpf = $_POST["cpf"];
          $endereco = $_POST["endereco"];
         
            
          


        ##codigo SQL
        $sql = "INSERT INTO professor(nome, idade, cpf, endereco) 
                VALUES('$nome','$idade', '$cpf', '$endereco')";

        ##junta o codigo sql a conexao do banco
        $sqlcombanco = $conexao->prepare($sql);

        ##executa o sql no banco de dados
        if($sqlcombanco->execute())
            {
                echo " <strong>OK!</strong> o professor
                $nome foi Incluido com sucesso!!!"; 
                echo " <button class='button'><a href='index.php'>voltar</a></button>";
            }
        }
#######alterar
if(isset($_POST['update'])){

    ##dados recebidos pelo metodo POST
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $cpf = $_POST['cpf'];
          $endereco = $_POST["endereco"];
      
          
             

    $id = $_POST["id"];
   
      ##codigo sql
    $sql = "UPDATE  professor SET nome= :nome, idade= :idade, cpf= :cpf, endereco= :endereco  WHERE id= :id ";
   
    ##junta o codigo sql a conexao do banco
    $stmt = $conexao->prepare($sql);

    ##diz o paramentro e o tipo  do paramentros
    $stmt->bindParam(':id',$id, PDO::PARAM_INT);
    $stmt->bindParam(':nome',$nome, PDO::PARAM_STR);
    $stmt->bindParam(':idade',$idade, PDO::PARAM_STR);
    $stmt->bindParam(':cpf',$cpf, PDO::PARAM_STR);
    $stmt->bindParam(':endereco',$endereco, PDO::PARAM_STR);
  
   

   
    $stmt->execute();
 


    if($stmt->execute())
        {
            echo " <strong>OK!</strong> o professor
             $nome foi Alterado com sucesso!!!"; 
            

            echo " <button class='button'><a href='index.php'>voltar</a></button>";
        }

}        


##Excluir
if(isset($_GET['excluir'])){
    $id = $_GET['id'];
    $sql ="DELETE FROM `professor` WHERE id={$id}";
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
    $stmt = $conexao->prepare($sql);
    $stmt->execute();

    if($stmt->execute())
        {
            echo " <strong>OK!</strong> o professor
             $id foi excluido!!!"; 

            echo " <button class='button'><a href='listaprofessor.php'>voltar</a></button>";
        }

}

        
?>

</body>
</html>