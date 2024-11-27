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

        .container {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            position: relative;
        }
        .left-div, .right-div{
            width: 45%; /* Define a largura de cada div */
            height: auto; /* Altura automática */
            border-radius: 10px;
            padding: 20px;
        }
        .bottom-left, .bottom-right{
            width: 45%; /* Define a largura de cada div */
            height: auto; /* Altura automática */
            background-color: #ffffff; /* Cor de fundo */
            border-radius: 10px;
            padding: 20px;
        
        }
        .right-div {
            margin-left: 20px; /* Espaço entre as divs */
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

        .quiz-container {
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
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .quiz-question {
            margin-bottom: 20px;
        }

        .quiz-question label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .quiz-question select {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
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

        .quiz-result {
            margin-top: 20px;
            font-size: 16px;
            font-weight: bold;
            color: #333;
            text-align: center;
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

    <div class="quiz-container">
        <h2 class="title">Quiz: Encontre a Melhor Ração para Seu Pet</h2>
        <form id="quiz-form">
            <div class="quiz-question">
                <label for="pet-type">Qual é o tipo do seu pet?</label>
                <select id="pet-type" name="pet-type" required>
                    <option value="dog">Cachorro</option>
                    <option value="cat">Gato</option>
                    <option value="other">Outro</option>
                </select>
            </div>
            
            <div class="quiz-question">
                <label for="pet-age">Qual é a idade do seu pet?</label>
                <select id="pet-age" name="pet-age" required>
                    <option value="puppy">Filhote (0-1 ano)</option>
                    <option value="adult">Adulto (1-7 anos)</option>
                    <option value="senior">Sênior (7+ anos)</option>
                </select>
            </div>
            
            <div class="quiz-question">
                <label for="pet-size">Qual é o porte do seu pet?</label>
                <select id="pet-size" name="pet-size" required>
                    <option value="small">Pequeno</option>
                    <option value="medium">Médio</option>
                    <option value="large">Grande</option>
                </select>
            </div>
            
            <div class="quiz-question">
                <label for="food-preference">Seu pet tem alguma preferência alimentar?</label>
                <select id="food-preference" name="food-preference" required>
                    <option value="no-preference">Sem preferência</option>
                    <option value="chicken">Frango</option>
                    <option value="beef">Carne</option>
                    <option value="fish">Peixe</option>
                </select>
            </div>
            
            <div class="quiz-question">
                <button type="submit" class="button">Ver Resultado</button>
            </div>
        </form>
        <div id="result" class="quiz-result"></div>
    </div>

    <script>
        document.getElementById('quiz-form').addEventListener('submit', function(event) {
            event.preventDefault();
            const petType = document.getElementById('pet-type').value;
            const petAge = document.getElementById('pet-age').value;
            const petSize = document.getElementById('pet-size').value;
            const foodPreference = document.getElementById('food-preference').value;
            
            let result = `Seu pet é um ${petType} `;
            if (petType === "dog") {
                result += `de porte ${petSize} `;
            }
            result += `com ${petAge} anos e prefere ${foodPreference === 'no-preference' ? 'qualquer tipo de ração' : foodPreference}.`;

            document.getElementById('result').innerText = result;
        });
    </script>
</body>
</html>