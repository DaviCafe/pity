<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rastreamento de Entrega</title>
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

        h1 {
            text-align: center;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin: 10px 0 5px;
        }

        input {
            width: calc(100% - 22px);
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

        .button:hover {
            background-color: #ff9640;
        }

        #tracking-info {
            margin-top: 20px;
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

    <h1>Rastreamento de Entrega</h1>
    <form id="tracking-form">
        <label for="orderId">ID do Pedido:</label>
        <input type="text" id="orderId" name="orderId" required>
        <button type="submit">Rastrear</button>
    </form>

    <script>
        document.getElementById('tracking-form').addEventListener('submit', function(event) {
        event.preventDefault();
    
        const orderId = document.getElementById('orderId').value;
    
        fetch(`/track/${orderId}`)
            .then(response => response.json())
            .then(data => {
                const trackingInfo = document.getElementById('tracking-info');
                if (data.success) {
                    trackingInfo.innerHTML = `
                        <h2>Status da Entrega:</h2>
                        <p><strong>Entrega:</strong> ${data.status}</p>
                        <p><strong>Localização:</strong> ${data.location}</p>
                        <p><strong>Tempo Estimado:</strong> ${data.estimatedTime}</p>
                    `;
                } else {
                    trackingInfo.innerHTML = `<p>Pedido não encontrado.</p>`;
                }
            })
            .catch(error => {
                console.error('Erro:', error);
                document.getElementById('tracking-info').innerHTML = `<p>Erro ao rastrear o pedido.</p>`;
            });
        });
        
        const express = require('express');
        const app = express();
        const port = 3000;
        
        // Middleware
        app.use(express.static('public'));
        
        // Dados fictícios para rastreamento
        const trackingData = {
            '12345': {
                status: 'Em trânsito',
                location: 'São Paulo - SP',
                estimatedTime: '30 minutos'
            },
            '67890': {
                status: 'Entregue',
                location: 'Endereço final',
                estimatedTime: 'N/A'
            }
        };
        
        // Rota para rastreamento de pedidos
        app.get('/track/:orderId', (req, res) => {
            const orderId = req.params.orderId;
            const data = trackingData[orderId];
        
            if (data) {
                res.json({ success: true, ...data });
            } else {
                res.json({ success: false });
            }
        });
        
        app.listen(port, () => {
            console.log(`Servidor rodando na porta ${port}`);
        });
    </script>
</body>
</html>