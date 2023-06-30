<?php
    session_start();
    // Verifica se os campos do formulário não estão vazios
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
        include_once('../php/config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // Verificação se existe no banco de dados o email e a senha fornecida

        $sql = "SELECT ds_senha FROM tb_usuario WHERE ds_email = '$email'";

        $result = $conexao->query($sql);
        $senha_bd = mysqli_fetch_assoc($result);
        

        if(!password_verify($senha, $senha_bd['ds_senha'])) // Se não houver nenhuma correspondência para o email e senha fornecidos 
        {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: ../paginas/index.php');
            
        }
        else 
        {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: ../paginas/pagina_principal.php');
        }
    }
    else
    {
        header('Location: ../paginas/index.php');
    }
    
?>

