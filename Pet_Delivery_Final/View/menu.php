<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Delivery - Página Inicial</title>
    <link rel="stylesheet" href="style.css">
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

        .all{
            background-color: #ffffff;
            margin-left: 20%;
            margin-right: 20%;
        }

        .hero {
            background-color: #000000;
            transition: opacity 3s;
            height: 500px;
            background-image: url('fundo.jpg');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
        }
        .descrição {
            text-align: left;
            padding: 20px;
        }

        .descrição h1 {
            margin-bottom: 20px;
        }

        .descrição p {
            font-size: 18px;
            line-height: 1.8;
        }

        .produtos {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            padding: 20px;
        }

        .produto {
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            transition: transform 0.2s;
        }

        .produto:hover {
            transform: scale(1.05);
        }

        .produto h3 {
            margin-bottom: 10px;
            font-size: 20px;
            color: #ffa55b;
        }

        .produto p {
            margin-bottom: 15px;
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

        .espaco {
            display: none;
        }

        @media (min-width: 768px) {
            .espaco {
                display: block;
            }
        }
    </style>
</head>
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
    <section class="hero">
        <h1></h1>
    </section>

    <section class="descrição">
        <h1>Quem somos?</h1>
        <p>
            A Pet Delivery é uma loja virtual especializada em produtos para pets, como rações, brinquedos e acessórios, garantindo praticidade e qualidade para você e seu amigo de quatro patas.
            <br><br>
            Além disso, parte das suas compras ajuda no resgate e cuidado de animais de rua, contribuindo para oferecer amor e esperança a quem mais precisa. Aqui, você cuida do seu pet e transforma vidas!
        </p>
    </section>

    <section class="produtos">
        <div class="produto">
            <h3>Produtos</h3>
            <p>Confira nossa variedade de produtos para pets.</p>
            <a href="Produtos.php" class="button">Ver Mais</a>
        </div>
        <div class="produto">
            <h3>Quiz para Pets</h3>
            <p>Descubra o que seu pet mais gosta.</p>
            <a href="Quiz.php" class="button">Fazer Quiz</a>
        </div>
        <div class="produto">
            <h3>Agendamentos</h3>
            <p>Agende serviços para o seu pet com facilidade.</p>
            <a href="Agendamento.php" class="button">Agendar</a>
        </div>
        <div class="produto">
            <h3>Resgate</h3>
            <p>Saiba como ajudamos animais de rua.</p>
            <a href="Resgate.php" class="button">Saiba Mais</a>
        </div>
    </section>
    </div>  
    <script>
        document.getElementById('saveProfile').addEventListener('click', function() {
            const fileInput = document.getElementById('fileInput');
            const profileName = document.getElementById('profileName').value;

            if (fileInput.files && fileInput.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('profileImage').src = e.target.result;
                }
                reader.readAsDataURL(fileInput.files[0]);
            }
        });

    </script>
</body>
</html>
