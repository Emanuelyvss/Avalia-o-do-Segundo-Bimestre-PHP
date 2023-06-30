<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../estilos/index.css">
    <link rel="shortcut icon" href="favicon." type="imagens/x-icon">
</head>
<body>


    <div id="up">
    <h1>TORNE-SE UM MEMBRO DA +LIFE</h1>
    </div>
    <form action="../php/validacaoUser.php" method="post">
        <div id="menu">
            <div id="imagem">
                 <img src="../imagens/image.png"> 
            </div>
    
            <div id="inputs">
                <h1>ACESSE A +LIFE</h1>

                <label for="email">Email</label>
                <input type="text" placeholder="Digite seu e-mail" id="email" name="email" class="on">

                <label for="senha">Senha</label>
                <input type="password" placeholder="Digite sua senha" class="on" id="senha" name="senha">
                
                <input type="submit" name="submit" value="Enviar">

                <h3><a href="#">Esqueceu a senha?</a></h3>
                <h3><a href="../paginas/cadastro.php">Cadastre-se</a></h3>
            </div>
        </div>
    </form>
                    
                </div>
            </div>
        </div>
    </div>
   

</body>
</html> 