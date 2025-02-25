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
    //Gera criptografia individual, que não é repetida em valores iguais como o md5
    $hashSenha = password_hash($senha, PASSWORD_DEFAULT);

        //montando query de cadastro
        $cadastro = "INSERT usuario values (0,'$nome','$email','$telefone', '$hashSenha')";

        //resultado da query
        $sql = $conn->prepare($cadastro);
        if ($sql->execute()){ 
            echo "<script>alert('Cadastro feito!')</script>";
        
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
    <title>GreenIT - Cadastro</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/form.css">
</head>

<body>
    <header>
        <a href="index.php"><img src="images/GreenIT.png" alt=""></a>
        <nav>
            <menu>
                <li><a href="conceitos.php">Conceitos</a></li>
                <li><a href="importancia.php">Importância</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="cadastro.php">Cadastro</a></li>
            </menu>
        </nav>
    </header>
    <main>
        <div class="formulario">
            <div>  
                <h1>Cadastro</h1>
            </div>      
            <hr>
            <form action="cadastro.php" method="post">
                <!-- aria-autocomplete="none" faz com que o navegador não complete o texto -->
                <label for="nome">Nome:</label>
                <input type=text name="nome" required aria-autocomplete="none" placeholder="Digite seu nome">
                <label for="email">E-mail:</label>
                <input type=email name="email" required aria-autocomplete="none" placeholder="Digite seu e-mail">
                <label for="telefone">Telefone:</label>
                <input type=text name="telefone" required aria-autocomplete="none" placeholder="Digite seu telefone">
                <label for="senha">Senha:</label>
                <input type=password name="senha" required aria-autocomplete="none" placeholder="Digite sua senha">
                <input type="submit" value="Cadastrar" id="button">
            </form>
        </div>
    </main>
</body>

</html>