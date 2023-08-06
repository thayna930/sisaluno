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
  <div class="topo">

  </div>
  <br></br>

<?php
    require_once('conexao.php');

   $id = $_POST['id'];

   $sql = "SELECT * FROM disciplina where id= :id";
   
  
   $retorno = $conexao->prepare($sql);


   $retorno->bindParam(':id',$id, PDO::PARAM_INT);


   $retorno->execute();


   $array_retorno=$retorno->fetch();
   
  
   $nomedisciplina = $array_retorno['nomedisciplina'];
   $semestre = $array_retorno['semestre'];
   

   


?>

  <form method="POST" action="cruddisciplina.php">
        <input type="text" name="nomedisciplina" id="" value=<?php echo $nomedisciplina?> >
        <br></br>
                                                
        <input type="text" name="semestre" id="" value=<?php echo $semestre ?> >
        <br></br>

        

      
        <input type="hidden" name="id" id="" value=<?php echo $id ?> >
        
        <input type="submit" name="update" value="Alterar">
  </form>
</body>
</html>