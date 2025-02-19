<?php

//------------------------------------------------------
//                        CADASTRO
//------------------------------------------------------

//iniciando sessao
session_start();

//Incluir arquivo de conexao
if ($_POST) {
    include 'conexao.php';
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];

        //montando query de cadastro
        $cadastro = "INSERT usuario values (0,'$nome','$email','$telefone','$senha')";

        //resultado da query
        $sql = $conn->prepare($cadastro);
        if ($sql->execute()){ 
            echo "<script>alert('Cadastro feito!')<script>";
        
        } else { 
            echo "<script>alert('Erro no cadastro!');</script>";
        } 
    
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/form.css">
</head>

<body>
    <header>
        <h1><a href="index.php">GreenIT</a></h1>
        <nav>
            <menu>
                <li><a href="#">Conceitos</a></li>
                <li><a href="#">Importância</a></li>
                <li><a href="#">Benefícios</a></li>
                <li><a href="cadastro.php">Cadastro</a></li>
            </menu>
        </nav>
    </header>
    <main>
        <div class="formulario">
            <h1>Cadastro</h1>
            <hr>
            <form action="cadastro.php" method="post">
                Nome:<input type=text name="nome" required>
                E-mail:<input type=text name="email" required>
                Telefone:<input type=text name="telefone" required>
                Senha:<input type=password name="senha" required>
                <input type="submit" value="Cadastrar" id="button">
            </form>
        </div>
    </main>
</body>

</html>