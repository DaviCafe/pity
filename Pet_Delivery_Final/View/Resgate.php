
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Processar os dados do formulário aqui
    
    // Redirecionar o usuário para a tela específica
    header("Location: obrigado.php");
    exit(); // Certifique-se de sair do script após o redirecionamento
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
            color: #333;
            background-color: #e5e9e9;
        }

        header {
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .top_bar {
            background-color: rgb(34, 34, 34);
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            padding: 1px 1px;
        }

        .logo img {
            width: 80px;
            height: auto;
        }

        .logo-text {
            margin-left: 10px;
            font-size: 3em;
            color: #ffffff;
        }
        
        .top_bar a {
            margin: 0 10px;
            text-decoration: none;
            color: #ffffff;
            font-weight: bold;
        }

        .top_bar a:hover {
            color: #ff9640;
        }

        .divider {
            width: calc(100%); /* Largura igual à da top-bar menos o padding de 20px de cada lado */
            height: 1px;
            background-color: #ff9640; /* Cor mais escura */
            position: absolute;
        }

        .divider {
            width: calc(100% - 40px); /* Largura igual à da top-bar menos o padding de 20px de cada lado */
            height: 2vh;
            background-color: #693c17; /* Cor mais escura */
            position: absolute;
            bottom: 0;
            left: 0px; /* Posição esquerda igual ao padding da top-bar */
        }
        .container {
            text-align: center;
            background-color: #ffffff;
            border-radius: 10px;
            padding: 30px;
            width: 80%;
            max-width: 500px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-left:65vh;
            margin-top:10vh;
        }
        .bottom-left, .bottom-right{
            width: 45%; /* Define a largura de cada div */
            height: auto; /* Altura automática */
            background-color: #ffffff; /* Cor de fundo */
            border-radius: 10px;
            padding: 20px;
        
        }
        .title {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 4vh;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .profile-img {
            position: absolute;
            top: 20px;
            right: 80px;
            width: 70px;
            height: 70px;
            border-radius: 50%;
        }
        .button {
            background-color: #ffa55b;
            color: black;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
            transition: background-color 0.3s;
        }
        .button:hover {
            background-color: #ff9640;
        }
        .login-text {
            font-size: 12px;
            font-weight: bold;
            color: #444; /* Cor do texto */
            margin-right: 10px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            font-weight: bold;
        }
        .form-group input[type="text"], 
        .form-group input[type="file"],
        .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }
    </style>
<body>
    <header>
        <nav class="top_bar">
            <a class="logo" href="menu.php">
                <img src="logo.png" alt="Logo Pet Delivery">
            </a>
            <div></div>
            <a href="menu.php" class="logo-text" >
                Pet Delivery
            </a>
            <div></div>
            <div>
                <a href="Chat.php">Suporte</a>
                <a href="Cadastro.php">Cadastrar</a>
                <a href="Log.php">Login</a>
            </div>
        </nav>
    </header>

    <div class="divider"></div>

    <div class="container">
        <div>
            <h2 class="title">Informações do Animal</h2>
            <form action="envio.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome">
                </div>
                <div class="form-group">
                    <label for="raca">Raça:</label>
                    <input type="text" id="raca" name="raca">
                </div>
                <div class="form-group">
                    <label for="sexo">Sexo:</label>
                    <select id="sexo" name="sexo">
                        <option value="macho">Macho</option>
                        <option value="femea">Fêmea</option>
                    </select>
                </div>
                <div class="form-group">
                   <label for="localizacao">Localização:</label>
                    <input type="text" id="localizacao" name="localizacao">
                </div>
                <div class="form-group">
                    <label for="imagem">Imagem:</label>
                    <input type="file" id="imagem" name="imagem">
                </div>
                <button type="submit" class="button">Enviar</button>
            </form>
        </div>
    </div>

    <?php
    // Verifica se o método de requisição é POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Conexão com o banco de dados (substitua os valores conforme necessário)
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "PROJ_SOFT";

        // Cria a conexão
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verifica a conexão
        if ($conn->connect_error) {
            die("Conexão falhou: " . $conn->connect_error);
        }

        // Prepara os dados do formulário para inserção no banco de dados
        $nome = $_POST['NOME'];
        $raca = $_POST['RAÇA'];
        $sexo = $_POST['SEXO'];
        $localizacao = $_POST['LOCALIZACAO'];

        // Instrução SQL para inserir dados
        $sql = "INSERT INTO RESGATE (NOME, RAÇA, SEXO, LOCALIZACAO) VALUES ('$nome', '$raca', '$sexo', '$localizacao')";

        if ($conn->query($sql) === TRUE) {
            // Redireciona o usuário para a tela específica
            header("location: obrigado.php");
            exit(); // Certifique-se de sair do script após o redirecionamento
        } else {
            echo "Erro ao inserir dados: " . $conn->error;
        }

        // Fecha a conexão
        $conn->close();
    }
    ?>
</body>
</html>
