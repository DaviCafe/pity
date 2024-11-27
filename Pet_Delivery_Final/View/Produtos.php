<!DOCTYPE html>
<html lang="en">
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
            height: 100%;
            text-align: center;
            align-items: center;
            background-color: #ffffff;
            margin-left: 20%;
            margin-right: 20%;
        }

        .title {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 4vh;
            font-weight: bold;
            margin-bottom: 20px;
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

        .category-select {
            background-color: #fff;
            border: 2px solid #693c17;
            border-radius: 5px;
            padding: 10px;
            font-size: 16px;
            color: #444;
            margin-bottom: 20px;
        }
        .product-list {
            display: flex;
            justify-content: space-evenly;
            padding: 5px;
        }
        .product-item {
            width: 30%;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 10px;
            margin: 10px;
            padding: 15px;
            box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.1);
        }
        .product-item img {
            width: 100%;
            border-radius: 10px;
        }
        .product-title {
            font-size: 18px;
            font-weight: bold;
            margin: 10px 0;
        }
        .product-price {
            color: #ff8a43;
            font-size: 16px;
            font-weight: bold;
        }

        .search-bar {
            
            padding: 10px;
            width: 70vh;
            font-size: 16px;
            border: 2px solid #693c17;
            border-radius: 5px;
            margin-left:5vh
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
    <div class="container">
            <div class="title">Categorias</div>
            <select id="category-select" class="category-select">
                <option value="todas">Todas as Categorias</option>
                <option value="cachorros">Cachorros</option>
                <option value="gatos">Gatos</option>
                <option value="passaros">Pássaros</option>
                <option value="peixes">Peixes</option>
                <option value="roedores">Roedores</option>
            </select>
            <select id="type-select" class="category-select">
                <option value="todos">Todos os Tipos</option>
                <option value="alimento">Alimento</option>
                <option value="brinquedos">Brinquedos</option>
                <option value="acessorios">Acessórios</option>
                <option value="adicionais">Adicionais</option>
            </select>
            <br>
            <a href="Calculadora.php" class="button">Calculadora de Ração</a>
            <a href="assinar.php" class="button">Assinatura</a>
            <br><br>
            <input type="text" id="search-bar" class="search-bar" placeholder="Buscar produto...">
    </div>

    

    <div class="product-list" id="product-list">
        <div class="product-item" data-category="cachorros" data-type="alimento">
            <img src="https://cobasi.vteximg.com.br/arquivos/ids/939251/racao-golden-special-para-caes-adultos-frango-e-carne-3310549-15kg-Lado.jpg?v=638122446361370000" alt="Produto 1">
            <div class="product-title">Ração Golden Special para Cães Adultos Frango e Carne 15 kg</div>
            <div class="product-price">R$ 133,41</div>
            <a href="LstDesejo.php" class="button" class="add-to-wishlist-button"> Lista de Desejos</a>
            <a href="Carrinho.php" class="button" class="add-to-cart-button"> Carrinho</a>
            <a href="Avaliacao.php" class="button">Avaliar</a>

            
        </div>
        <div class="product-item" data-category="cachorros" data-type="alimento">
            <img src="https://cdn.awsli.com.br/600x450/1250/1250681/produto/90266366/a8a3dcfdd3.jpg" alt="Produto 2">
            <div class="product-title">Ração Seca Quatree Supreme Adultos Raças Pequenas Sabor Frango e Batata Doce 15kg</div>
            <div class="product-price">R$ 215,70</div>
            <a href="LstDesejo.php" class="button" class="add-to-wishlist-button"> Lista de Desejos</a>
            <a href="Carrinho.php" class="button" class="add-to-cart-button"> Carrinho</a>
            <a href="Avaliacao.php" class="button">Avaliar</a>

        </div>
        <div class="product-item" data-category="cachorros" data-type="alimento">
            <img src="https://imgs.casasbahia.com.br/1532746171/1xg.jpg" alt="Produto 3">
            <div class="product-title">Ração Magnus - Cães de Grande Porte</div>
            <div class="product-price">R$ 149,99</div>
            <a href="LstDesejo.php" class="button" class="add-to-wishlist-button"> Lista de Desejos</a>
            <a href="Carrinho.php" class="button" class="add-to-cart-button"> Carrinho</a>
            <a href="Avaliacao.php" class="button">Avaliar</a>
            
        </div>
    </div>
    <div class="product-list" id="product-list">
        <div class="product-item" data-category="gatos" data-type="brinquedos">
            <img src=https://cdn.awsli.com.br/2500x2500/1233/1233228/produto/145194115/7fc378df50.jpg alt="Produto 4">
            <div class="product-title">Arranhador Mini Poste Cinza</div>
            <div class="product-price">R$ 39,50</div>
            <a href="LstDesejo.php" class="button" class="add-to-wishlist-button"> Lista de Desejos</a>
            <a href="Carrinho.php" class="button" class="add-to-cart-button"> Carrinho</a>
            <a href="Avaliacao.php" class="button">Avaliar</a>

        </div>
        <div class="product-item" data-category="gatos" data-type="brinquedos">
            <img src="https://images.petz.com.br/fotos/1725983287297.jpg" alt="Produto 5">
            <div class="product-title">Brinquedo Petz Laser para Gatos - Cores Sortidas</div>
            <div class="product-price">R$ 28,99</div>
            <a href="LstDesejo.php" class="button" class="add-to-wishlist-button"> Lista de Desejos</a>
            <a href="Carrinho.php" class="button" class="add-to-cart-button"> Carrinho</a>
            <a href="Avaliacao.php" class="button">Avaliar</a>

        </div>
        <div class="product-item" data-category="gatos" data-type="brinquedos">
            <img src="https://img.irroba.com.br/fit-in/2000x2000/filters:format(webp):fill(fff):quality(80)/brincalh/catalog/brinquedos-brincat/varinhas/penas-28-5/39140-39184-1.jpg" alt="Produto 6">
            <div class="product-title">Varinha Penas 28,5cm Cores Sortidas</div>
            <div class="product-price">R$ 9,90</div>
            <a href="LstDesejo.php" class="button" class="add-to-wishlist-button"> Lista de Desejos</a>
            <a href="Carrinho.php" class="button" class="add-to-cart-button"> Carrinho</a>
            <a href="Avaliacao.php" class="button">Avaliar</a>

        </div>
    </div>

    <div class="product-list" id="product-list">
        <div class="product-item" data-category="passaros" data-type="alimento">
            <img src="https://down-br.img.susercontent.com/file/sg-11134201-7rbni-lm51h7qr9dz90a" alt="Produto 1">
            <div class="product-title">Alpiste 500g - Reino das Aves</div>
            <div class="product-price">R$20,12</div>
            <a href="LstDesejo.php" class="button" class="add-to-wishlist-button"> Lista de Desejos</a>
            <a href="Carrinho.php" class="button" class="add-to-cart-button"> Carrinho</a>
            <a href="Avaliacao.php" class="button">Avaliar</a>

        </div>
        <div class="product-item" data-category="passaros" data-type="acessorios">
            <img src="https://images.tcdn.com.br/img/img_prod/928979/gaiola_amasavi_n6_cb_1895_1_eb0a57fe0f3e76cf249352350f9b97ff.png" alt="Produto 2">
            <div class="product-title">Gaiola Amasavi n6 CB</div>
            <div class="product-price">R$ 252,00</div>
            <a href="LstDesejo.php" class="button" class="add-to-wishlist-button"> Lista de Desejos</a>
            <a href="Carrinho.php" class="button" class="add-to-cart-button"> Carrinho</a>
            <a href="Avaliacao.php" class="button">Avaliar</a>

        </div>
        <div class="product-item" data-category="passaros" data-type="acessorios">
            <img src="https://acdn.mitiendanube.com/stores/002/668/514/products/91-7fcc1c0feffc467ecb16724548340554-640-0.webp" alt="Produto 3">
            <div class="product-title">Bebedouro Para Passarinho Tamanho Medio 120ml</div>
            <div class="product-price">R$ 3,50</div>
            <a href="LstDesejo.php" class="button" class="add-to-wishlist-button"> Lista de Desejos</a>
            <a href="Carrinho.php" class="button" class="add-to-cart-button"> Carrinho</a>
            <a href="Avaliacao.php" class="button">Avaliar</a>

        </div>
    </div>
    </div>
    <script>
        document.getElementById('category-select').addEventListener('change', filterProducts);
        document.getElementById('type-select').addEventListener('change', filterProducts);
        document.getElementById('search-bar').addEventListener('input', filterProducts);

        function filterProducts() {
            const category = document.getElementById('category-select').value;
            const type = document.getElementById('type-select').value;
            const searchText = document.getElementById('search-bar').value.toLowerCase();
            const products = document.querySelectorAll('.product-item');

            products.forEach(product => {
                const productCategory = product.getAttribute('data-category');
                const productType = product.getAttribute('data-type');
                const productTitle = product.querySelector('.product-title').textContent.toLowerCase();

                const categoryMatch = (category === 'todas' || productCategory === category);
                const typeMatch = (type === 'todos' || productType === type);
                const textMatch = productTitle.includes(searchText);

                if (categoryMatch && typeMatch && textMatch) {
                    product.style.display = 'block';
                } else {
                    product.style.display = 'none';
                }
            });

            const addToWishlistButtons = document.querySelectorAll('.add-to-wishlist-button');

    addToWishlistButtons.forEach(button => {
        button.addEventListener('click', addToWishlist);
    });

    function addToWishlist(event) {
        const productItem = event.target.closest('.product-item');
        const productDetails = {
            title: productItem.querySelector('.product-title').textContent,
            price: productItem.querySelector('.product-price').textContent
        };

        // Enviar os dados para a página PHP
        fetch('LstDesejo.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(productDetails),
        }).then(response => {
            // Lógica opcional após enviar os dados (por exemplo, atualizar a interface)
            console.log('Produto adicionado à lista de desejos!');
        }).catch(error => {
            console.error('Erro ao adicionar produto à lista de desejos:', error);
        });
    }
        }

        const addToCartButtons = document.querySelectorAll('.add-to-cart-button');

    addToCartButtons.forEach(button => {
        button.addEventListener('click', addToCart);
    });

    function addToCart(event) {
        const productItem = event.target.closest('.product-item');
        const productDetails = {
            title: productItem.querySelector('.product-title').textContent,
            price: productItem.querySelector('.product-price').textContent
        };

        // Enviar os dados para a página PHP
        fetch('adicionar_carrinho_compras.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(productDetails),
        }).then(response => {
            // Lógica opcional após enviar os dados (por exemplo, atualizar a interface)
            console.log('Produto adicionado ao carrinho de compras!');
        }).catch(error => {
            console.error('Erro ao adicionar produto ao carrinho de compras:', error);
        });
    }
    </script>
</body>
</html>