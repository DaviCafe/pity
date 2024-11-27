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
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            margin-top: 20px;
        }
        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 400px;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin: 10px 0 5px;
        }
        input, select {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
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
        #result {
            margin-top: 20px;
            text-align: center;
        }
        #rationAmount {
            font-size: 1.5em;
            font-weight: bold;
        }
        .ok{font-size:20px}
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
        <div class="form-container">
            <h1>Calculadora de Porção de Ração</h1>
            <form id="rationForm">
                <label for="animalType">Tipo de Animal:</label>
                <select id="animalType" required>
                    <option value="dog">Cachorro</option>
                    <option value="cat">Gato</option>
                </select>
                <label for="weight">Peso (em kg):</label>
                <input type="number" id="weight" step="0.1" required>
                <label for="age">Idade (em anos):</label>
                <input type="number" id="age" step="0.1" required>
                <label for="activity">Nível de Atividade:</label>
                <select id="activity" required>
                    <option value="low">Baixo</option>
                    <option value="moderate">Moderado</option>
                    <option value="high">Alto</option>
                </select>
                <button type="button" onclick="calculateRation()">Calcular</button>
            </form>
            <div id="result">
                <h2>Quantidade Recomendada:</h2>
                <p id="rationAmount">0 kg</p>
            </div>
        </div>
    </div>

    <script>
        function calculateRation() {
            const animalType = document.getElementById('animalType').value;
            const weight = parseFloat(document.getElementById('weight').value);
            const activity = document.getElementById('activity').value;
            
            let rationAmount = 0;

            if (animalType === 'dog') {
                if (activity === 'low') {
                    rationAmount = weight * 0.03;
                } else if (activity === 'moderate') {
                    rationAmount = weight * 0.05;
                } else if (activity === 'high') {
                    rationAmount = weight * 0.07;
                }
            } else if (animalType === 'cat') {
                if (activity === 'low') {
                    rationAmount = weight * 0.04;
                } else if (activity === 'moderate') {
                    rationAmount = weight * 0.06;
                } else if (activity === 'high') {
                    rationAmount = weight * 0.08;
                }
            }

            document.getElementById('rationAmount').textContent = `${rationAmount.toFixed(2)} kg`;
        }
    </script>
</body>
</html>
