<?php
    session_start();
    include_once('../php/config.php');
    
    if (!isset($_SESSION['email']) && !isset($_SESSION['senha'])) {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: index.php');
        exit();
    }
    
    $logado = $_SESSION['email'];
    
    if (!empty($_GET['search'])) {
        $data = $_GET['search'];
        $sql = "SELECT * FROM tb_usuario WHERE id_usuario LIKE '%$data%' OR ds_nome LIKE '%$data%' OR ds_email LIKE '%$data%' ORDER BY id_usuario DESC";
    } else {
        $sql = "SELECT * FROM tb_usuario ORDER BY id_usuario DESC";
    }
    
    $result = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página inicial</title>
</head>
<body>
<a href="alt_dado.php">Alterar Dados</a>
<br>
<a href="index.php">voltar para o login</a>
    <?php
        $email = $_SESSION['email']; 

        // Consulta para obter o nome do usuário logado
        $query = "SELECT ds_nome FROM tb_usuario WHERE ds_email = '$email'";
        $resultado = $conexao->query($query);

        if ($resultado && $resultado->num_rows > 0) {
        $row = $resultado->fetch_assoc();
        $nome = $row['ds_nome'];
        echo "<h1>Olá $nome</h1>";
        } else {
        echo "Nenhum resultado encontrado.";
        }

        $resultado->free();
        $conexao->close();
    ?>
</html>