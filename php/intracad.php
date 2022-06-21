<?php
    session_start();
    include ('conexao.php');

    //Tabela Login
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

    //Query Usuário
    $sql = "select count(*) as total from usuario where usuario = '$usuario'";
    $result = mysqli_query($conexao, $sql);
    $row = mysqli_fetch_assoc($result);

    //Query Email
    $sql1 = "select count(*) as total1 from usuario where email = '$email'";
    $result1 = mysqli_query($conexao, $sql1);
    $row1 = mysqli_fetch_assoc($result1);

    //Query Telefone
    $sql2 = "select count(*) as total2 from usuario where telefone = '$telefone'";
    $result2 = mysqli_query($conexao, $sql2);
    $row2 = mysqli_fetch_assoc($result2);


    if($row['total'] == 1) {
        $_SESSION['usuario_existe'] = true;
        header('Location: cadastrointra.php');
        exit;
    }

    if($row1['total1'] == 1) {
        $_SESSION['email_existe'] = true;
        header('Location: cadastrointra.php');
        exit;
    }

    if($row2['total2'] == 1) {
        $_SESSION['telefone_existe'] = true;
        header('Location: cadastrointra.php');
        exit;
    }

    $sql = "INSERT INTO usuario (usuario, senha, nome, email, telefone, cep, endereco, numero, bairro, cidade, estado, data_cadastro) VALUES ('$usuario', '$senha', '$nome', '$email', '$telefone' , '$cep', '$endereco', '$numero', '$bairro', '$cidade', '$estado', NOW())";
    mysqli_query($conexao, $sql);

    if($row[$sql] == 0) {
        $_SESSION['status_cadastro'] = true;
        header('Location: cadastrointra.php');
        exit;
    }

    $conexao->close();
    
    header('Location: index.php');
    exit;
    ?>