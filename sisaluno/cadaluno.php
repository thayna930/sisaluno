<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">

    <title>Formulário de Cadastro de Alunos</title>
 
</head>
<body>
    <div class="topo">
        
    </div>


<div class="conteudo">
    <h1>Cadastro do Aluno</h1>

    <form action="crudaluno.php" method="POST">

        <input type="text" name="nome" placeholder="Nome completo" class="input-text">

        <input type="number" name="idade" placeholder="Idade" class="input-number">
        <br></br>

        <input type="text" name="endereco" placeholder="Endereço" class="input-text">
        
        <input type="email" name="email" placeholder="E-mail" class="input-text">


        <input type="date" name="datanascimento" placeholder="Data de nascimento" class="input-text">
       
       
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