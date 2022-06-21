<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="../js/main.js" type='module' defer></script>
    <link rel="stylesheet" href="../css/notificacao.css"/>
    <link rel="stylesheet" href="../css/form.css"/>
    <script type="text/javascript" src="../js/mascara.js"></script>
    <link rel="shortcut icon" href="../assets/icons/favicon.ico">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crypto Money | Cadastro</title>
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
                                        <a class="nav-link" href="login.php">Entrar</a>
                                    </li>
                                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                        <a class="nav-link" href="cadastro.php">Cadastrar</a>
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
        <form class="containeer" action="cadastrar.php" method="post" autocomplete="off" enctype="multipart/form-data">
            <h1 class="titulo-principal">Crie sua conta em menos<b class="orage"> de 5 minutos</b></h1>

            <?php
            session_start();
            if (isset($_SESSION['status_cadastro'])) :
            ?>
                <div class="cadastro">
                    <p>Cadastro efetuado!</p>
                    <p>Faça login informando o seu usuário e senha <a href="login.php">aqui</a>.</p>
                </div>
            <?php
            endif;
            unset($_SESSION['status_cadastro']);
            ?>

            <?php
            if (isset($_SESSION['usuario_existe'])) :
            ?>
                <div class="usuario">
                    <p>O usuário escolhido já existe. Informe outro e tente novamente.</p>
                </div>
            <?php
            endif;
            unset($_SESSION['usuario_existe']);
            ?>


            <?php
            if (isset($_SESSION['email_existe'])) :
            ?>
                <div class="email">
                    <p>Cadastro falhou!</p>
                    <p>Já existe um usuário cadastrado com este email.</p>
                </div>
            <?php
            endif;
            unset($_SESSION['email_existe']);
            ?>


            <?php
            if (isset($_SESSION['telefone_existe'])) :
            ?>
                <div class="telefone">
                    <p>Telefone já cadastrado. Informe outro e tente novamente.</p>
                </div>
            <?php
            endif;
            unset($_SESSION['telefone_existe']);
            ?>

            <label for="usuario">Usuário</label>
            <input type="text" id="usuario" name="usuario" class="input-padrao" required placeholder="Usuário" autofocus>

            <label for="sobrenome">Nome</label>
            <input type="text" id="nome" name="nome" class="input-padrao" required placeholder="Nome">

            <label for="email">Email</label>
            <input type="email" id="email" name="email" class="input-padrao" required placeholder="seuemail@dominio.com">

            <label for="senha">Senha</label>
            <input type="password" id="senha" name="senha" class="input-padrao" minlength="6" required placeholder="****************">

            <label for="telefone">Telefone</label>
            <input type="text" id="telefone" name="telefone" class="input-padrao" maxlength="15" required placeholder="(XX) XXXXX-XXXX">

            <label for="cep">CEP</label>
            <input type="text" id="cep" name="cep" class="input-padrao" required placeholder="XXXXX-XXX">

            <label for="endereco">Endereço</label>
            <input type="text" id="endereco" name="endereco" for="" class="input-padrao" required placeholder="Endereço">
            
            <label for="numero">Número</label>
            <input type="text" id="numero" name="numero" class="input-padrao" required placeholder="000">

            <label for="bairro">Bairro</label>
            <input type="text" id="bairro" name="bairro" class="input-padrao" required placeholder="Bairro">

            <label for="cidade">Cidade</label>
            <input type="text" id="cidade" name="cidade" class="input-padrao" required placeholder="Cidade">

            <label for="telefone">Estado</label>
            <input type="text" id="estado" name="estado" class="input-padrao" required placeholder="Estado">
            <br>
            <?php setlocale(LC_ALL, 'pt_br', 'pt_br.utf-8', 'portuguese');
            $data_atual = strftime('Jundiaí-SP, %d de %B de %Y', time()); ?>
            <p class="lead"><strong><?php echo $data_atual ?></strong></p>


            <input type="submit" value="Enviar" class="enviar">
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