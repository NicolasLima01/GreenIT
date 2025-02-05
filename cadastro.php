<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="cadastro.css">
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
        <div class="cadastro">
        <h1>Cadastro</h1>
        <hr>
        <form action="index.php" method="post">            
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