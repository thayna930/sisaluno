<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title></title>
</head>
<body>
    



<?php

require_once('conexao.php');




if(isset($_POST['cadastrar'])){
      
        $nomedisciplina = $_POST["nomedisciplina"];
        $semestre = $_POST["semestre"];
       


       
        $sql = "INSERT INTO disciplina(nomedisciplina, semestre) 
                VALUES('$nomedisciplina','$semestre')";

        $sqlcombanco = $conexao->prepare($sql);

        
        if($sqlcombanco->execute())
            {
                echo " <strong>OK!</strong> a disciplina
                $nomedisciplina foi Incluido com sucesso!!!"; 
                echo " <button class='button'><a href='index.php'>voltar</a></button>";
            }
        }

if(isset($_POST['update'])){

    $nomedisciplina = $_POST["nomedisciplina"];
    $semestre = $_POST["semestre"];
         
             

    $id = $_POST["id"];
   
      
    $sql = "UPDATE  disciplina SET nomedisciplina= :nomedisciplina, semestre= :semestre   WHERE id= :id ";
   
   
    $stmt = $conexao->prepare($sql);

    
    $stmt->bindParam(':id',$id, PDO::PARAM_INT);
    $stmt->bindParam(':nomedisciplina',$nomedisciplina , PDO::PARAM_STR);
    $stmt->bindParam(':semestre',$semestre, PDO::PARAM_STR);

   
    $stmt->execute();
 


    if($stmt->execute())
        {
            echo " <strong>OK!</strong> a disciplina
             $nomedisciplina foi Alterado com sucesso!!!"; 

            echo " <button class='button'><a href='index.php'>voltar</a></button>";
        }

}        


##Excluir
if(isset($_GET['excluir'])){
    $id = $_GET['id'];
    $sql ="DELETE FROM `disciplina` WHERE id={$id}";
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
    $stmt = $conexao->prepare($sql);
    $stmt->execute();

    if($stmt->execute())
        {
            echo " <strong>OK!</strong> a Disciplina
             $id foi excluido!!!"; 

            echo " <button class='button'><a href='listadisciplina.php'>voltar</a></button>";
        }

}

        
?>

</body>
</html>