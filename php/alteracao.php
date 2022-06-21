<?php
    session_start();
    include ('conexao.php');

    $id = $_GET['id'] ?? '';
    $sql = "SELECT * FROM usuario WHERE usuario_id = $id";

    $dados = mysqli_query($conexao,$sql);

    $linha = mysqli_fetch_assoc($dados);

?>

<?php
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

    <title>Intranet Alteração - CryptoMoney</title>
  </head>
  <body>
      <div class="container">
        <div class="row">
            <div class="col">
                <h1>Alteração</h1>
                <form action="intraalt.php" method="post" autocomplete="off" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="usuario">Usuário</label>
                        <input type="text" class="form-control" name="usuario" id="usuario" required autofocus value="<?php echo $linha['usuario']?>">
                    </div>
                    <div class="mb-3">
                        <label for="senha">Senha</label>
                        <input type="password" class="form-control" name="senha" id="senha" minlength="6" required value="<?php echo $linha['senha']?>">
                    </div>
                    <div class="mb-3">
                        <label for="nome">Nome</label>
                        <input type="nome" class="form-control" name="nome" id="nome" required value="<?php echo $linha['nome']?>">
                    </div>
                    <div class="mb-3">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" name="email" id="email" required value="<?php echo $linha['email']?>">
                    </div>
                    <div class="mb-3">
                        <label for="telefone">Telefone</label>
                        <input type="text" class="form-control" name="telefone" id="telefone" required maxlength="15" value="<?php echo $linha['telefone']?>">
                    </div>
                    <div class="mb-3">
                        <label for="cep">CEP</label>
                        <input type="text" class="form-control" name="cep" id="cep" required value="<?php echo $linha['cep']?>">
                    </div>
                    <div class="mb-3">
                        <label for="endereco">Endereço</label>
                        <input type="text" class="form-control" name="endereco" id="endereco" required value="<?php echo $linha['endereco']?>">
                    </div>
                    <div class="mb-3">
                        <label for="numero">Número</label>
                        <input type="text" class="form-control" name="numero" id="numero" required value="<?php echo $linha['numero']?>">
                    </div>
                    <div class="mb-3">
                        <label for="bairro">Bairro</label>
                        <input type="text" class="form-control" name="bairro" id="bairro" required value="<?php echo $linha['bairro']?>">
                    </div>
                    <div class="mb-3">
                        <label for="cidade">Cidade</label>
                        <input type="text" class="form-control" name="cidade" id="cidade" required value="<?php echo $linha['cidade']?>">
                    </div>
                    <div class="mb-3">
                        <label for="estado">Estado</label>
                        <input type="text" class="form-control" name="estado" id="estado" required value="<?php echo $linha['estado']?>">
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="btn btn-success" value="Salvar">
                        <input type="hidden" name="id" value="<?php echo $linha['usuario_id']?>">
                        <a class="btn btn-danger" href="pesquisa.php" role="button">Voltar</a>
                    </div>
                </form>
            </div>
        </div>
      </div>
  </body>
</html>