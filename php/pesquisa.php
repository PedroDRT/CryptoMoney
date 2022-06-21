<?php
    session_start();
    include ('conexao.php');
    $cod_pessoa = "";

    $pesquisa = $_POST['busca'] ?? ''; 

    //$sql = "SELECT * FROM usuario INNER JOIN endereco ON usuario.usuario_id = endereco.endereco_id LIKE '%$pesquisa%'";
    $sql = "SELECT * FROM usuario WHERE usuario LIKE '%$pesquisa%'";

    $dados = mysqli_query($conexao,$sql);


    ?>


<!doctype html>
<html lang="pt-br">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../assets/icons/favicon.ico">
    <link rel="stylesheet" href="../css/notificacao.css"/>
    <link rel="stylesheet" href="../css/css-bt/bootstrap.min.css"/>  
    
    <title>Intranet Pesquisa - CryptoMoney</title>
  </head>
  <body>
      <div class="container">
        <div class="row">
            <div class="col">
                <h1>Pesquisar</h1>
                    <nav class="navbar navbar-light bg-light">
                        <div class="container-fluid">
                            <form class="d-flex" action="pesquisa.php" method="post" autocomplete="off" enctype="multipart/form-data">
                                <input class="form-control me-2" type="search" placeholder="Usuário" aria-label="Search" name="busca" autofocus>
                                <button class="btn btn-outline-success" type="submit">Pesquisa</button>
                                <div class="col px-md-2">
                                    <a class="btn btn-danger" href="index.php" role="button">Voltar</a>
                                </div>
                                
                            </form>
                        </div>
                    </nav>
                        <table class="table table-hover">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Usuário</th>
                            <th scope="col">Nome</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">CEP</th>
                            <th scope="col">Endereço</th>
                            <th scope="col">Número</th>
                            <th scope="col">Bairro</th>
                            <th scope="col">Cidade</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Funções</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            while ($linha = mysqli_fetch_assoc($dados)){
                                $usuario_id = $linha['usuario_id'];
                                $usuario = $linha['usuario'];
                                $nome = $linha['nome'];
                                $email = $linha['email'];
                                $telefone = $linha['telefone'];
                                $cep = $linha['cep'];
                                $endereco = $linha['endereco'];
                                $numero = $linha['numero'];
                                $bairro = $linha['bairro'];
                                $cidade = $linha['cidade'];
                                $estado = $linha['estado'];

                                echo "<tr>
                                        <th scope='row'>$usuario_id</th>
                                        <th>$usuario</th>
                                        <th>$nome</th>
                                        <th>$email</th>
                                        <th>$telefone</th>
                                        <th>$cep</th>
                                        <th>$endereco</th>
                                        <th>$numero </th>
                                        <th>$bairro</th>
                                        <th>$cidade</th>
                                        <th>$estado</th>
                                        <th width=150px>
                                        <a href='alteracao.php?id=$usuario_id' class='btn btn-success btn-sm'>Editar</a>
                                        <a href='#' class='btn btn-danger btn-sm' data-toggle='modal' data-target='#confirma' 
                                        onclick=". '"'."pegar_dados('$usuario_id','$usuario')" .'"' .">Excluir</a>
                                      <tr>";
                            }
                        ?>
                        </tbody>
                        </table>
            </div>
        </div>
      </div>
</div>
<!-- Modal -->
<div class="modal fade" id="confirma" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmação de exclusão</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="excluirintra.php" method="POST">
        <p>Deseja realmente excluir <b id="nome_pessoa">Nome da pessoa</b>?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
        <input type="hidden" name="nome" id="nome_pessoa1" value="">
        <input type="hidden" name="id" id="usuario_id" value="">
        <input type="submit" class="btn btn-primary" value="Sim">
        </form>
      </div>
    </div>
  </div>
</div>

                          
<script type="text/javascript">
        function pegar_dados(id, nome){
            document.getElementById('nome_pessoa').innerHTML = nome;
            document.getElementById('usuario_id').value = id;
            document.getElementById('nome_pessoa1').value = nome;
        }
    </script>   

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>