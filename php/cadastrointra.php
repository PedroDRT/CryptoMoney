<?php
            session_start();
            if (isset($_SESSION['status_cadastro'])) :
            ?>
                <div class="cadastro">
                    <p>Cadastro efetuado!</p>
                    <p>Volte para o menu clicando <a href="index.php">aqui</a>.</p>
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

<!doctype html>
<html lang="pt-br">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../assets/icons/favicon.ico">
    <link rel="stylesheet" href="../css/notificacao.css"/>
    <link rel="stylesheet" href="../css/css-bt/bootstrap.min.css"/>
    <script src="../js/main.js" type='module' defer></script>
    <script type="text/javascript" src="../js/mascara.js"></script>

    <title>Intranet Cadastro - CryptoMoney</title>
  </head>
  <body>
      <div class="container">
        <div class="row">
            <div class="col">
                <h1>Cadastro</h1>
                <form action="intracad.php" method="post" autocomplete="off" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="usuario">Usuário</label>
                        <input type="text" class="form-control" name="usuario" id="usuario" required autofocus>
                    </div>
                    <div class="mb-3">
                        <label for="senha">Senha</label>
                        <input type="password" class="form-control" name="senha" id="senha" minlength="6" required>
                    </div>
                    <div class="mb-3">
                        <label for="nome">Nome</label>
                        <input type="nome" class="form-control" name="nome" id="nome" required>
                    </div>
                    <div class="mb-3">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" name="email" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="telefone">Telefone</label>
                        <input type="text" class="form-control" name="telefone" id="telefone" required maxlength="15">
                    </div>
                    <div class="mb-3">
                        <label for="cep">CEP</label>
                        <input type="text" class="form-control" name="cep" id="cep" required>
                    </div>
                    <div class="mb-3">
                        <label for="endereco">Endereço</label>
                        <input type="text" class="form-control" name="endereco" id="endereco" required>
                    </div>
                    <div class="mb-3">
                        <label for="numero">Número</label>
                        <input type="text" class="form-control" name="numero" id="numero" required>
                    </div>
                    <div class="mb-3">
                        <label for="bairro">Bairro</label>
                        <input type="text" class="form-control" name="bairro" id="bairro" required>
                    </div>
                    <div class="mb-3">
                        <label for="cidade">Cidade</label>
                        <input type="text" class="form-control" name="cidade" id="cidade" required>
                    </div>
                    <div class="mb-3">
                        <label for="estado">Estado</label>
                        <input type="text" class="form-control" name="estado" id="estado" required>
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="btn btn-success" value="Cadastrar">
                        <a class="btn btn-danger" href="index.php" role="button">Voltar</a>
                    </div>
                </form>
            </div>
        </div>
      </div>
  </body>
</html>