<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>alterar</title>
</head>
<body>

<?php
    require_once('conexao.php');

   $id = $_POST['id'];

   $sql = "SELECT * FROM aluno where idaluno= :id";
   
  
   $retorno = $conexao->prepare($sql);


   $retorno->bindParam(':id',$id, PDO::PARAM_INT);


   $retorno->execute();


   $array_retorno=$retorno->fetch();
   
  
   $nome = $array_retorno['nome'];
   $idade = $array_retorno['idade'];



?>

  <form method="POST" action="crudaluno.php">
        <input type="text" name="nome" id="" value=<?php echo $nome?> >
                                                
        <input type="text" name="idade" id="" value=<?php echo $idade ?> >
      
        <input type="hidden" name="id" id="" value=<?php echo $id ?> >
        
        <input type="submit" name="update" value="Alterar">
  </form>
</body>
</html>