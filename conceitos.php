<?php

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <!-- janela de visualização, fornece ao navegador instruções 
     sobre como controlar as dimensões da página -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GreenIT - Conceitos</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="stylesheet" href="css/style.css">
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
                <li><a href="logout.php"><img src="images/logout.png" alt="Logout"></a></li>
            </menu>
        </nav>
        <div></div>

        <div class="dropdown">
            <!-- Menu dropdown -->
            <img height="40px" width="40px" src="images/cardapio.png" alt="Menu">
                <ul>
                    <li><a href="#">Conceitos</a></li>
                    <hr>
                    <li><a href="#">Importância</a></li>
                    <hr>
                    <li><a href="login.php">Login</a></li>
                    <hr>
                    <li><a href="cadastro.php">Cadastro</a></li>
                    <hr>
                    <li><a href="logout.php">Logout</a></li>
                </ul> 
        </div> 
    </header>
    <div class="session-user" aria-hidden="true">
        <!-- Só aparece valor após usar session -->
    </div>


    <main>
        <div class="container">
            
        </div>

    </main>

    <footer>
        <p>&copy GreenIT - Todos os direitos reservados</p>
    </footer>

</body>
