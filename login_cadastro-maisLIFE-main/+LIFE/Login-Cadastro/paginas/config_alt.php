<?php
session_start();

if (isset($_POST['submit'])) {
    include_once('../php/config.php');

    $nome = $_POST['name'];
    // $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    // Obtém o valor do email da sessão
    $email = $_SESSION['email'];

    // Consulta de seleção para obter o ID do usuário
    $selectQuery = "SELECT id_usuario FROM tb_usuario WHERE ds_email = '$email'";
    $selectResult = mysqli_query($conexao, $selectQuery);

    // Verifica se a consulta retornou resultados
    if ($selectResult && mysqli_num_rows($selectResult) > 0) {
        $row = mysqli_fetch_assoc($selectResult);
        $id_usuario = $row['id_usuario'];

        // Executa a atualização usando o ID do usuário obtido
        $updateQuery = "UPDATE tb_usuario SET ds_nome = '$nome', ds_senha = '$senha' WHERE id_usuario = '$id_usuario'";
        $result = mysqli_query($conexao, $updateQuery);

        header('Location: pagina_principal.php');
    } else {
        // Usuário não encontrado
        echo "Usuário não encontrado.";
    }
}
?>
