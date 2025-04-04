<?php
// Para usar uma sessão já criada, 
// é necessário informar o nome da sessão
session_name("greenit");
session_start();
//Verificação do usuario no fim desse código
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <!-- janela de visualização, fornece ao navegador instruções 
     sobre como controlar as dimensões da página -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GreenIT - Home</title>
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
                <li class="dropdown">
                    <!-- Menu dropdown -->
                    <img height="40px" width="40px" src="images/cardapio.png" alt="Menu">
                    <ul>
                        <li><a href="conceitos.php">Conceitos</a></li>
                        <hr>
                        <li><a href="importancia.php">Importância</a></li>
                        <hr>
                        <li><a href="login.php">Login</a></li>
                        <hr>
                        <li><a href="cadastro.php">Cadastro</a></li>
                        <hr>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </li>
            </menu>
        </nav>
    </header>
    <div class="session-user" aria-hidden="true">
        <!-- Só aparece valor após usar session -->
    </div>


    <main>
        <div class="container">
            <div class="titulo">
                <h1>Green IT - O Futuro da Tecnologia</h1>
            </div>
            <section class="topico-sessao">
                <hr>
                <h2>O que é GreenIT?</h2><br>
                <p>GreenIT ou TI Verde compreende práticas que visam preservar o meio ambiente. Isto é, fazer uso dos recursos computacionais da maneira mais ‘limpa’ possível, prezando para que as atividades envolvidas nos avanços da TI não tragam tantas consequências negativas para o planeta.</p><br>
                <p>A adoção do Green IT não beneficia apenas o meio ambiente. As empresas que implementam práticas de TI Verde frequentemente experimentam reduções significativas nos custos operacionais, melhoram sua imagem perante o mercado e clientes e cumprem regulamentações ambientais mais rigorosas.</p>
            </section>

            <section class="topico-sessao">
                <hr>
                <h2>Benefícios</h2><br>
                <menu>
                    <h3>Redução de custos</h3><br>
                    <li>
                        Ao investir em equipamentos mais eficientes, as empresas podem reduzir significativamente o consumo de energia, refletindo diretamente em contas de eletricidade mais baixas.
                    </li><br>
                    <h3>Renova os processos</h3><br>
                    <li>
                        A implementação da TI Verde não se limita apenas ao hardware. Ela promove uma revisão abrangente de como a tecnologia é utilizada dentro da organização. Ao adotar práticas sustentáveis, as empresas são incentivadas a reavaliar e otimizar seus processos internos.
                    </li><br>
                    <h3>Cuida do ecossistema</h3><br>
                    <li>
                        A implementação da TI Verde não se limita apenas ao hardware. Ela promove uma revisão holística de como a tecnologia é utilizada dentro da organização. Ao adotar práticas sustentáveis, as empresas são incentivadas a reavaliar e otimizar seus processos internos.
                    </li><br>
                    <h3>Melhora a imagem da empresa</h3><br>
                    <li>
                        A responsabilidade ambiental tornou-se um diferencial competitivo no mercado global. Consumidores, parceiros e stakeholders estão cada vez mais atentos às práticas sustentáveis das empresas.
                    </li><br>
                </menu>
            </section>

            <section class="topico-sessao">
                <hr>
                <h2>Quais são as melhores práticas de Green IT?</h2><br>
                <b>Utilizar fontes de energia limpa:</b><br>
                <p>A transição para fontes de energia renováveis é uma das iniciativas mais impactantes no universo da TI Verde. Ao optar por fontes como energia solar ou eólica, as empresas podem significativamente reduzir sua pegada de carbono.</p><br>

                <b>Cloud Computing:</b><br>
                <p>A computação em nuvem revolucionou a forma como as empresas acessam e armazenam dados. Optar por soluções baseadas na nuvem, especialmente aquelas que seguem a abordagem cloud first, significa que as empresas podem reduzir significativamente a necessidade de hardware on-site.
                    Isso diminui o consumo de energia e reduz a necessidade de resfriamento, outro grande consumidor de energia em centros de dados. Além disso, os provedores de nuvem frequentemente atualizam e otimizam sua infraestrutura, garantindo que os recursos sejam usados da maneira mais eficiente possível.</p>

            </section>
        </div>

    </main>

    <footer>
        <p>&copy GreenIT - Todos os direitos reservados</p>
    </footer>

</body>

<script>
    function ativaSession(usuario) {
        let sessionUser = document.querySelector('div.session-user');
        sessionUser.setAttribute('style', 'height: 4vh');
        sessionUser.setAttribute('style', 'font-family: "Intro Rust"');
        sessionUser.style.color = "white";
        sessionUser.textContent = "Olá " + usuario;
    }
</script>

</html>

<?php
// Quando a sessão tiver um usuário logado, 
// ela irá mostrar uma área com um mensagem 
// para o usuário logado
if (isset($_SESSION['usuario'])) {
    $user = $_SESSION['usuario'];
    echo "<script> ativaSession('$user'); </script>";
}
?>