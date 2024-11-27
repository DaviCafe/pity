<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Delivery</title>
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
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-left:65vh;
            margin-top:10vh;
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

        button:hover {
            background-color: #ff9640;
        }
        .form-question {
            margin-bottom: 20px;
        }

        .form-question label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-question select {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
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

    <div class="container">
        <h2 class="title">Agendamento de Entrega</h2>
        <form id="schedule-form">
            <div class="form-question">
                <label for="pet-name">Nome do Pet</label>
                <input type="text" id="pet-name" name="pet-name" required>
            </div>

            <div class="form-question">
                <label for="delivery-date">Data da Entrega</label>
                <input type="date" id="delivery-date" name="delivery-date" required>
            </div>

            <div class="form-question">
                <label for="delivery-time">Horário da Entrega</label>
                <input type="time" id="delivery-time" name="delivery-time" required>
            </div>

            <div class="form-question">
                <label for="delivery-address">Endereço de Entrega</label>
                <input type="text" id="delivery-address" name="delivery-address" required>
            </div>

            <div class="form-question">
                <button type="submit" class="button">Agendar Entrega</button>
            </div>
        </form>
        <div id="schedule-result" class="schedule-result"></div>
    </div>

    <script>
        document.getElementById('schedule-form').addEventListener('submit', function(event) {
            event.preventDefault();
            const petName = document.getElementById('pet-name').value;
            const deliveryDate = document.getElementById('delivery-date').value;
            const deliveryTime = document.getElementById('delivery-time').value;
            const deliveryAddress = document.getElementById('delivery-address').value;
            
            const result = `Entrega agendada para ${petName} em ${deliveryDate} às ${deliveryTime} no endereço: ${deliveryAddress}.`;

            document.getElementById('schedule-result').innerText = result;
        });
    </script>
</body>
</html>