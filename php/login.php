<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/notificacao.css">
    <link rel="stylesheet" href="../css/form.css">
    <link rel="shortcut icon" href="../assets/icons/favicon.ico">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crypto Money | Login</title>
</head>

<body>
    <header>
        <div style="background-color: #3e1f47" class="navigation-wrap start-header start-style">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav class="navbar navbar-expand-md navbar-light">

                            <a class="nav-link"><img src="../assets/images/bitcoin.png" alt="">Crypto Money</a>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto py-4 py-md-0">
                                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                        <a class="nav-link" href="../html/index.html">Início</a>
                                    </li>
                                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                        <a class="nav-link" href="../html/index.html">Como funciona</a>
                                    </li>
                                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                        <a class="nav-link" href="../html/index.html">Moedas</a>
                                    </li>
                                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                        <a class="nav-link" href="../php/login.php">Entrar</a>
                                    </li>
                                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                        <a class="nav-link" href="../php/cadastro.php">Cadastrar</a>
                                    </li>
                                </ul>
                            </div>

                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        <form action="logar.php" method="post" autocomplete="off">
            <h1 class="titulo-principal">Login na<b class="orage"> Crypto Money</b></h1>

            <?php
            if (isset($_SESSION['nao_autenticado'])) :
            ?>
                <div class="login">
                    <p>ERRO: Usuário ou senha inválidos.</p>
                </div>
            <?php
            endif;
            unset($_SESSION['nao_autenticado']);
            ?>

            <label for="usuario">Usuário</label>
            <input type="text" id="usuario" name="usuario" class="input-padrao" placeholder="Usuário" autofocus>

            <label for="senha">Senha</label>
            <input type="password" id="senha" name="senha" class="input-padrao" placeholder="**********">

            <label class="checkbox"><input type="checkbox" checked>Gostaria de manter-se conectado ?</label>

            <input type="submit" value="Entrar" class="enviar">
            <br>
            <br>
            <p class="center">Quer uma conta ?<a href="../php/cadastro.php">Inscreva-se agora</a></p>
        </form>
        <footer class="container-fluid sec-footer">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="card desc-box">
                            <div class="card-body">
                                <div class="card-title">Sobre</div>
                                <div class="card-text">
                                    <span>A ideia era simples: criar uma plataforma amigável, onde os usuários com apenas um clique pudessem conectar e negociar em várias exchanges, brasileiras ou internacionais, poupando o trabalho de se cadastrar, validar documento e realizar o depósito em diferentes plataformas</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card desc-box">
                            <div class="card-body">
                                <div class="card-title">Contatos</div>
                                <div class="card-text">
                                    <div class="row">
                                        <div class="col">
                                            <i class="fas fa-phone ml-3"></i>
                                            <span> 9.9525-0771 (11)</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <i class="fas fa-map-marker ml-3"></i>
                                            <span>Jundiaí - SP</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <i class="fas fa-envelope-open ml-3"></i>
                                            <span>cryptomoney@gmail.com</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col text-center">
                        <img src="../assets/images/bitcoin_footer.png" alt="logotipo" class="mb-3">
                        <br class="clearfix">
                        <a href="https://www.instagram.com" target="_blank" class="snip1472"><i class="fab fa-instagram"></i></a>
                        <a href="https://api.whatsapp.com/send?l=pt&amp;phone=5511942148319" class="snip1472"><i class="fab fa-whatsapp"></i></a>
                        <a href="https://www.facebook.com" target="_blank" class="snip1472"><i class="fab fa-facebook-f"></i></a>
                        <div class="footer-copyright text-center py-3"><a>Pedro Dutra & Guilherme Lopes &copy;</a></div>
                    </div>
                </div>
            </div>
        </footer>
</body>

</html>