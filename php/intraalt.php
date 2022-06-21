<?php
    session_start();
    include ('conexao.php');

    //Tabela Login
    $id = $_POST['id'];
    $usuario = mysqli_real_escape_string($conexao, ucwords(trim($_POST['usuario'])));
    $senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));
    $nome = mysqli_real_escape_string($conexao, ucwords(trim($_POST['nome'])));
    $email = mysqli_real_escape_string($conexao, trim($_POST['email']));
    $telefone = mysqli_real_escape_string($conexao, trim($_POST['telefone']));
    $cep = mysqli_real_escape_string($conexao, trim($_POST['cep']));
    $endereco = mysqli_real_escape_string($conexao, trim($_POST['endereco']));
    $numero = mysqli_real_escape_string($conexao, trim($_POST['numero']));
    $bairro = mysqli_real_escape_string($conexao, trim($_POST['bairro']));
    $cidade = mysqli_real_escape_string($conexao, trim($_POST['cidade']));
    $estado = mysqli_real_escape_string($conexao, trim($_POST['estado']));


    $sql = "UPDATE usuario SET usuario = '$usuario', senha = '$senha', nome = '$nome', email = '$email', telefone = '$telefone', cep = '$cep', endereco = '$endereco', numero = '$numero', bairro = '$bairro', cidade = '$cidade', estado = '$estado' WHERE usuario_id = '$id'";
    mysqli_query($conexao, $sql);

    $conexao->close();
    
    header('Location: pesquisa.php');
    exit;
    ?>