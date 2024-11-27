<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro - Pet Delivery</title>
</head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .top-bar {
            text-align: center;
            margin-bottom: 20px;
        }
        .top-bar h1 {
            margin: 0;
            font-size: 24px;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 300px;
            margin-bottom: 20px;
        }
        .title {
            font-size: 20px;
            margin-bottom: 20px;
            text-align: center;
        }
        .input-group {
            margin-bottom: 15px;
        }
        .input-group label {
            display: block;
            margin-bottom: 5px;
        }
        .input-group input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        .btn-submit {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn-submit:hover {
            background-color: #218838;
        }
        .login-link {
            text-align: center;
            margin-top: 15px;
        }
        .login-link a {
            color: #007bff;
            text-decoration: none;
            cursor: pointer;
        }
        .login-link a:hover {
            text-decoration: underline;
        }
        .menu-link {
            text-align: center;
            margin-top: 15px;
        }
        .menu-link a {
            color: #007bff;
            text-decoration: none;
            cursor: pointer;
        }
        .menu-link a:hover {
            text-decoration: underline;
        }
    </style>
<body>
    <div class="top-bar">
        <h1>Pet Delivery</h1>
    </div>

    <div class="container">
        <div class="title">Cadastro</div>
        <form action="Cadastro.php" method="post">
            <div class="input-group">
                <label for="email">E-mail/Telefone:</label>
                <input type="text" id="email" name="email" placeholder="Digite seu e-mail ou telefone" required>
            </div>
            <div class="input-group">
                <label for="password">Senha:</label>
                <input type="password" id="password" name="password" placeholder="Digite sua senha" required>
            </div>
            <button type="submit" class="btn-submit">Confirmar Cadastro</button>
        </form>
        <div class="login-link"><a href="Log.php">Fazer login</a></div>
    </div>
    <div class="menu-link"><a href="menu.php">Voltar para o menu</a></div>  

    <?php
    session_start();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        
        $servername = "localhost";
        $username = "root";
        $dbname = "PROJ_SOFT";
        
        $conn = new mysqli($servername, $username, "", $dbname);
        
        if ($conn->connect_error) {
            die("Conexão falhou: " . $conn->connect_error);
        }
        
        $stmt = $conn->prepare("INSERT INTO CADASTRO (email, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $email, $password);
        
        if ($stmt->execute()) {
            $_SESSION['email'] = $email; // Inicia a sessão do usuário
            header("Location: menu.php"); // Redireciona para a página de menu
            exit();
        } else {
            echo "<p style='color: red; text-align: center;'>Erro: " . $stmt->error . "</p>";
        }
        
        $stmt->close();
        $conn->close();
    }
    ?>
</body>
</html>
