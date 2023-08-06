<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>alterar</title>
</head>
<body>

<?php
    require_once('conexao.php');

   $id = $_POST['id'];

   $sql = "SELECT * FROM professor where id= :id";
   
  
   $retorno = $conexao->prepare($sql);


   $retorno->bindParam(':id',$id, PDO::PARAM_INT);


   $retorno->execute();


   $array_retorno=$retorno->fetch();
   
  
   $nome = $array_retorno['nome'];
   $idade = $array_retorno['idade'];
   $cpf = $array_retorno['cpf'];
   $endereco = $array_retorno['endereco'];

 
  
   


?>

  <form method="POST" action="crudprof.php">
        <input type="text" name="nome" id="" value=<?php echo $nome?> >
        <br></br>
                                                
        <input type="number" name="idade" id="" value=<?php echo $idade ?> >
        <br></br>

        <input type="number" name="cpf" id="" value=<?php echo $cpf ?> >
        <br></br>

        <input type="text" name="endereco" id="" value=<?php echo $endereco ?> >
        <br></br>


      
        <br></br>
      
        <input type="hidden" name="id" id="" value=<?php echo $id ?> >
        
        <input type="submit" name="update" value="Alterar">
  </form>
</body>
</html>