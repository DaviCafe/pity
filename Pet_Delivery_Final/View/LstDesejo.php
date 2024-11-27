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
            justify-content:space-evenly;
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
        .all{
            height: 50em;
            text-align: center;
            align-items: center;
            background-color: #ffffff;
            margin-left: 20%;
            margin-right: 20%;
        }
        .container {
            padding: 20px;
            position: relative;
        }

        .button {
            background-color: #ffa55b;
            color: black;
            padding: 10px 10px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #ff9640;
        }
        .title {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 4vh;
            font-weight: bold;
            margin-bottom: 20px;
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
        li{
            text-decoration: none;
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

    <div class="all">
        <div class="title">Minha Lista de Desejos</div>

        <div>  
            <a class="button" href="Produtos.php">Voltar para a página anterior</a>
            <br><br>
        </div>

        <!-- Exibe os produtos da lista de desejos -->
        <ul>
            <?php foreach ($_SESSION['wishlist'] as $product): ?>
                <li>
                    <strong><?= $product['title']; ?></strong> - <?= $product['price']; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Processar os dados do formulário aqui
        
        // Redirecionar o usuário para a tela específica
        header("Location: obrigado.php");
        exit(); // Certifique-se de sair do script após o redirecionamento
    }
    ?>
    
    <?php
        session_start(); // Inicia a sessão (se ainda não estiver iniciada)

        // Verifica se há uma lista de desejos na sessão; se não houver, inicializa como um array vazio
        if (!isset($_SESSION['wishlist'])) {
            $_SESSION['wishlist'] = [];
        }

        // Adiciona o produto à lista de desejos (recebido via POST)
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $productDetails = json_decode(file_get_contents("php://input"), true);

            // Adiciona o produto à lista de desejos
            $_SESSION['wishlist'][] = $productDetails;

            // Retorna uma resposta de sucesso (opcional)
            echo json_encode(['message' => 'Produto adicionado à lista de desejos com sucesso!']);
            exit();
        }
    ?>
    
</body>
</html>