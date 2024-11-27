<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat de Suporte</title>
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
        .container {
            text-align: center;
            background-color: #ffffff;
            border-radius: 10px;
            padding: 30px;
            width: 80%;
            max-width: 500px;
            height: 50%;
            max-height: 50%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-left:65vh;
            margin-top:10vh;
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
        .title {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 4vh;
            font-weight: bold;
            margin-bottom: 20px;
        }

        #fileInput {
            display: none;
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
    <h2>Chat de Suporte</h2>
    <div class="chat-box" id="chat-box"></div>
    <input type="text" id="message" class="chat-input" placeholder="Digite sua mensagem...">
    <button onclick="sendMessage()">Enviar</button>
    </div>

    <script>
        function sendMessage() {
            var message = document.getElementById('message').value;
            if (message.trim() === '') return;

            var chatBox = document.getElementById('chat-box');
            chatBox.innerHTML += '<div class="message"><strong>Você:</strong> ' + message + '</div>';
            chatBox.scrollTop = chatBox.scrollHeight;
            document.getElementById('message').value = '';

            var xhr = new XMLHttpRequest();
            xhr.open('POST', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    chatBox.innerHTML += '<div class="message"><strong>Suporte:</strong> ' + xhr.responseText + '</div>';
                    chatBox.scrollTop = chatBox.scrollHeight;
                }
            };
            xhr.send('message=' + encodeURIComponent(message));
        }
    </script>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $message = $_POST['message'];

        // Respostas simples de simulação
        $responses = [
            'Olá! Como posso ajudá-lo hoje?',
            'Pode me dar mais detalhes sobre o problema?',
            'Entendi, estamos trabalhando nisso.',
            'Obrigado por nos informar, vamos resolver isso o mais rápido possível.'
        ];

        // Seleciona uma resposta aleatória
        $response = $responses[array_rand($responses)];

        echo $response;
    }
    ?>
</body>
</html>

