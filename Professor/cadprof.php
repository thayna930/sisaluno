<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">

    <title>Formulário de Cadastro de Professor</title>
 
</head>
<body>
    <div class="topo">
        
    </div>


<div class="conteudo">
    <h1>Cadastro do Professor</h1>

    <form action="crudprof.php" method="POST">

        <input type="text" name="nome" placeholder="Nome completo" class="input-text">

        <input type="number" name="cpf" placeholder="CPF" class="input-number">
        <br></br>


        <input type="number" name="idade" placeholder="Idade" class="input-number">
        <br></br>

        <input type="text" name="endereco" placeholder="Endereço" class="input-text">

        

        
       

     
       
       
        <input type="submit" name="cadastrar" value="Cadastrar" class="submit">
    </form>

    </div>
    </div>
    <br></br>
    <div class="rodape">
        <p>Thayná Mendes</p>
    </div>

</body>
</html>