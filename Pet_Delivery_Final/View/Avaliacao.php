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

        .button {
            background-color: #4CAF50; /* Green */
            border: none;
            color: black;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 10px;
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

        .rating {
        direction: ltr; /* Exibe as estrelas da esquerda para a direita */
        font-size: 2em; /* Aumenta o tamanho das estrelas */
        margin-bottom: 10px;
        }

        .star::before {
            content: "\2605"; /* Caractere Unicode para estrela */
            color: #ccc; /* Cor das estrelas não selecionadas */
            cursor: pointer; /* Indica que as estrelas são interativas */
            font-size: 2em;
        }

        .star.hovered::before,
        .star.selected::before {
            color: #25da73; /* Cor das estrelas selecionadas */
        }

        textarea {
            width: 100%;
            height: 80px;
            margin-bottom: 10px;
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
            color: black;
        }

        button:hover {
            background-color: #ff9640;
        }

        #comment-display {
            font-size: 0.9em; /* Tamanho de fonte pequeno para os comentários exibidos */
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
    <h1> Avaliações </h1>
    <div class="rating">
        <span class="star" data-value="1"></span>
        <span class="star" data-value="2"></span>
        <span class="star" data-value="3"></span>
        <span class="star" data-value="4"></span>
        <span class="star" data-value="5"></span>
    </div>

    <input type="hidden" id="rating-value" name="rating" value="">

    <p>Avaliação: 
        <span id="selected-rating">0</span> estrelas
    </p>

    <!-- Campo de comentário -->
    <textarea id="comment" placeholder="Digite seu comentário aqui..."></textarea>
    <button onclick="submitComment()">Enviar Comentário</button>

    <!-- Exibição do comentário e avaliação -->
    <div id="comment-display" style="margin-top: 20px;">
        <p><strong>Seu Comentário:</strong> <span id="display-comment">Nenhum comentário enviado</span></p>
        <p><strong>Avaliação:</strong> <span id="display-rating">0</span> estrelas</p>
    </div>

    <button onclick="clearComment()">Limpar Comentário</button>

    <p><strong>Data e Hora da Avaliação:</strong> <span id="display-date-time">Não disponível</span></p>
    </div>


    <script>
        
        const stars = document.querySelectorAll('.star');
        const ratingValue = document.getElementById('rating-value');
        const selectedRating = document.getElementById('selected-rating');
        const commentField = document.getElementById('comment');
        const displayComment = document.getElementById('display-comment');
        const displayRating = document.getElementById('display-rating');

        stars.forEach(star => {
        star.addEventListener('mouseover', () => {
            resetStars();
            highlightStars(star);
        });

        star.addEventListener('click', () => {
            ratingValue.value = star.getAttribute('data-value');
            selectedRating.innerText = ratingValue.value;
            setSelectedStars(ratingValue.value); // Atualiza a seleção das estrelas
        });

        star.addEventListener('mouseout', () => {
            resetStars();
            setSelectedStars(ratingValue.value); // Mantém a seleção após o mouse sair
        });
        });

        function resetStars() {
            stars.forEach(star => {
                star.classList.remove('hovered');
                star.classList.remove('selected');
            });
        }

        function highlightStars(star) {
            star.classList.add('hovered');
            let previousSibling = star.previousElementSibling;
            while (previousSibling) {
                previousSibling.classList.add('hovered');
                previousSibling = previousSibling.previousElementSibling;
            }
        }

        function setSelectedStars(value) {
            stars.forEach(star => {
                if (star.getAttribute('data-value') <= value) {
                    star.classList.add('selected');
                }
            });
        }

        function submitComment() {
            const comment = commentField.value.trim();
            const rating = ratingValue.value;
            if (comment !== "" && rating !== "") {
                displayComment.innerText = comment;
                displayRating.innerText = rating;
            } else {
                displayComment.innerText = "Por favor, insira um comentário e uma avaliação.";
            }
        }

        function clearComment() {
            commentField.value = "";
            ratingValue.value = "";
            selectedRating.innerText = "0";
            displayComment.innerText = "Nenhum comentário enviado";
            displayRating.innerText = "0";
            resetStars(); // Remove a seleção das estrelas
        }

        function submitComment() {
            const comment = commentField.value.trim();
            const rating = ratingValue.value;
            if (comment !== "" && rating !== "") {
                displayComment.innerText = comment;
                displayRating.innerText = rating;

                // Exibir a data e hora atual
                const now = new Date();
                const dateTimeString = now.toLocaleString();
                document.getElementById('display-date-time').innerText = dateTimeString;
            } else {
                displayComment.innerText = "Por favor, insira um comentário e uma avaliação.";
                document.getElementById('display-date-time').innerText = "Não disponível";
            }
        }

    </script>
</body>
</html>