<?php

if(isset($_POST['submit'])) {
    include_once('../php/config.php');

    $nome = $_POST['name'];
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    $result = mysqli_query($conexao, "INSERT INTO tb_usuario(id_usuario, ds_email, ds_nome, id_status, ds_senha) VALUES ('$usuario', '$email', '$nome', '1', '$senha_hash')");

    header('Location: index.php');

}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="../estilos/cadastro.css">
</head>
<body>
<a href="../paginas/index.php">voltar para o Login</a>

    <form action="cadastro.php" method="post">
        <h2>Faça seu cadastro para ser um volutário e Doador </h2>

        <div id="container">
            <div>
                <img src="../imagens/cadastro.jpg" alt="">
            </div>

            <div id="container-inputs">
                <input type="text" id="name" name='name' placeholder="Nome completo">

                <input type="text" id="usuario" name='usuario' placeholder="Nome de usuário">

                <input type="text" id="email" name='email' placeholder="E-mail">

                <input type="text" id="senha" name='senha' placeholder="Senha">
            
                <div id="termos">
                    <input type="checkbox" id="check">
                    <p>Concordo com os <strong>Termos de Uso</strong></p>
                </div>
            
                <input type="submit" name="submit" id="submit">
            </div>
        </div>
    </form>
</body>
</html>