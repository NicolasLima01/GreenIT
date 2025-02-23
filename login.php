<?php

//------------------------------------------------------
//                        LOGIN
//------------------------------------------------------

if ($_POST) {
    include 'conexao.php';
    $emailLogin = $_POST['email-login'];
    $senhaLogin = $_POST['senha-login'];
    //montando query para verificar o email e senha do login
    $login = "SELECT * from usuario where email = :e LIMIT 1";

    //resultado da query
    $sql = $conn->prepare($login);
    $sql->bindParam(':e', $emailLogin);
    $sql->execute();

    //Pega a linha de resultado do usuario
    $usuario = $sql->fetch(PDO::FETCH_ASSOC);

    //Verificando a senha criptografada
    $hash = password_verify($senhaLogin, $usuario['senha']);

    if ($usuario['id'] > 0 && $hash == true)
    {
        //login bem sucedido
        session_name("greenit");
        session_start();
        $_SESSION['usuario'] = $usuario['nome'];
        //echo "<script>alert('Login efetuado com sucesso! Bem vindo!');</script>";
        header('../index.php');
    }
    else {
        //falha no logon 
        echo "<script> alert('Usuario ou senha incorretos');</script>";
    }
    
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GreenIT - Login</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/form.css">
</head>

<body>
    <header>
        <a href="index.php"><img src="images/GreenIT.png" alt=""></a>
        <nav>
            <menu>
                <li><a href="#">Conceitos</a></li>
                <li><a href="#">Importância</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="cadastro.php">Cadastro</a></li>
            </menu>
        </nav>
    </header>
    <main>
        <div class="formulario">
            <div>
                <h1>Login</h1>
            </div>
            <hr>
            <form action="login.php" method="post">
                <label for="email-login">E-mail:</label>
                <input type=email name="email-login" required aria-autocomplete="none" placeholder="Digite seu e-mail">
                <label for="senha-login">Senha:</label>
                <input type=password name="senha-login" required
                    aria-autocomplete="none" placeholder="Digite sua senha">
                <input type="submit" value="Entrar" id="button">
            </form>
        </div>
    </main>
</body>

</html>