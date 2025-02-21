<?php

//------------------------------------------------------
//                        LOGIN
//------------------------------------------------------

session_start();

if ($_POST) {
    include 'conexao.php';
    $emailLogin = $_POST['email-login'];
    $senhaLogin = $_POST['senha-login'];
    if (isset($emailLogin) && isset($senhaLogin)) {
        //montando query para verificar o email e senha do login
        $login = "SELECT * from usuario where email = :e and senha = :s";
        //resultado da query
        $sql = $conn->prepare($login);
        $sql->bindParam(':e', $emailLogin);
        $sql->bindParam(':s', $senhaLogin);
        $sql->execute();
        //Pega a linha de resultado
        $result = $sql->fetch(PDO::FETCH_ASSOC);

        if ($result['id'] > 0) {
            //login bem sucedido
            $_SESSION['usuario'] = $user; ?>
            <script>alert("Login efetuado com sucesso! Bem vindo, <?php echo $user;?>")</script>
        <?php } else {
            //falha no logon ?>
            <script> alert("Usuario ou senha incorretos");</script>
        <?php }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/form.css">
</head>

<body>
    <header>
        <h1><a href="index.php">GreenIT</a></h1>
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
                E-mail:<input type=text name="email-login" required>
                Senha:<input type=password name="senha-login" required>
                <input type="submit" value="Entrar" id="button">
            </form>
        </div>
    </main>
</body>

</html>