<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assinatura de Produtos</title>
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


        form {
            max-width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin: 10px 0 5px;
        }

        input, select {
            width: 100%;
            max-width: 400px;
            padding: 8px;
            margin-bottom: 10px;
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
        button {
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
        #fileInput {
            display: none;
        }

    </style>
<body>
    <header>
        <nav class="top_bar">
            <a class="logo" href="menu.html">
                <img src="logo.png" alt="Logo Pet Delivery">
            </a>
            <div></div>
            <a href="menu.html" class="logo-text" >
                Pet Delivery
            </a>
            <div></div>
            <div>
                <a href="Chat.html">Suporte</a>
                <a href="Cadastro.html">Cadastrar</a>
                <a href="Log.html">Login</a>
            </div>
        </nav>
    </header>

    
    <div class="divider"></div>

    <div class="container">
        <h1>Assinatura de Produtos</h1>
        <form id="subscription-form">
            <label for="product">Escolha o produto:</label>
            <select id="product" name="product">
                <option value="racao-cachorro">Ração para Cachorro</option>
                <option value="racao-gato">Ração para Gato</option>
                <!-- Adicione mais opções conforme necessário -->
            </select>

            <label for="quantity">Quantidade:</label>
            <input type="number" id="quantity" name="quantity" min="1" required>

            <label for="frequency">Frequência de Entrega:</label>
            <select id="frequency" name="frequency">
                <option value="semanal">Semanal</option>
                <option value="quinzenal">Quinzenal</option>
                <option value="mensal">Mensal</option>
            </select>

            <button type="submit">Assinar</button>
        </form>
        </div>

    <script>
        document.getElementById('subscription-form').addEventListener('submit', function(event) {
        event.preventDefault();
    
        const product = document.getElementById('product').value;
        const quantity = document.getElementById('quantity').value;
        const frequency = document.getElementById('frequency').value;
    
        fetch('/subscribe', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                product: product,
                quantity: quantity,
                frequency: frequency
            })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Assinatura criada com sucesso!');
            } else {
                alert('Erro ao criar assinatura.');
            }
        })
        .catch(error => {
            console.error('Erro:', error);
            alert('Erro ao criar assinatura.');
        });
        });
    
        const express = require('express');
        const bodyParser = require('body-parser');
        const app = express();
        const port = 3000;
    
        // Middleware
        app.use(bodyParser.json());
        app.use(express.static('public'));
    
        // Rota para criar a assinatura
        app.post('/subscribe', (req, res) => {
            const { product, quantity, frequency } = req.body;
    
            // Aqui você deve adicionar a lógica para armazenar a assinatura no banco de dados
            // Este é um exemplo de resposta de sucesso
            console.log(`Produto: ${product}, Quantidade: ${quantity}, Frequência: ${frequency}`);
    
            res.json({ success: true });
        });
    
        app.listen(port, () => {
            console.log(`Servidor rodando na porta ${port}`);
        });
    </script>
</body>
</html>