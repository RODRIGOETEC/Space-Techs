<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo/cabecalho.css">
    <title>Sobre Space Techs</title>
    <header>
    <h1 class="cabecalho">Space-Techs</h1>
    <nav>
    <ul id="menu">
            <li><a href="../home.php">Home</a>
            <li><a href="../noticia/noticia.php">Noticias</a></li>
            <li><a href="../sobre/sobre.php">Sobre</a></li>
            <li><a href="../recomendacao/recomendacao.php">Recomendações</a></li> 
            <li><a href="loja.php">Loja</a></li>
            <li><a href="../contato/contato.php">Contato</a></li>
            </li>        
        </ul>
</nav>
</header>
</head>
<style>
        /* Estilos CSS */
        body{
            align-items: center;
            justify-content: center;
            text-decoration-color: #00ff88;
            background-color: #2b134b;
        }
p{
    color:#ffffff;
}
h2{
    color: #00ff88;
}

        h1{
            color: #00ff88;
            text-align: center;
            justify-content: center ;
        }

        .item {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
            text-align: center;
justify-content: center;
        }
        #cart {
            border: 1px solid #ccc;
            padding: 10px;
            margin-top: 10px;
            text-align: center;
justify-content: center;
text-decoration-color: #ffffff;
        }

        .produto{
            height: 200px;
            width: 200px;
        }
    </style>
</head>
<body>
    <h1>Loja space-Techs</h1>
    <div id="items">
        <div class="item">
            <h2>Camisa do Luffy</h2>
            <img src="luffy.jpg" class="produto">
            <p>Camiseta do Luffy do Anime One Piece</p>
            <p>Preço: $60</p>
            <button onclick="addItem('Camisa do Luffy', 60)">Adicionar ao Carrinho</button>
        </div>
        <div class="item">
            <h2>Mortal Kombat X Standard Edition PS4</h2>
            <img src="https://http2.mlstatic.com/D_NQ_NP_663022-MLA45089552755_032021-O.webp" class="produto">
            <p>Jogo de Mortal Kombat X </p>
            <p>Preço: $43</p>
            <button onclick="addItem('Mortal Kombat X Standard Edition PS4', 43)">Adicionar ao Carrinho</button>
        </div>
        <div class="item">
            <h2>Harry Potter e a Pedra Filosofal: 1</h2>
            <img src="https://images-americanas.b2w.io/produtos/4997773485/imagens/livro-harry-potter-e-a-pedra-filosofal-volume-1-j-k-rowling/4997773549_1_large.jpg" class="produto">
            <p>Livro do Filme Harry Potter</p>
            <p>Preço: $30</p>
            <button onclick="addItem('Harry Potter e a Pedra Filosofal: 1', 30)">Adicionar ao Carrinho</button>
        </div>
         <div class="item">
            <h2>Caneca Anime Darling in the Franxx </h2>
            <img src="https://img.elo7.com.br/product/360x360/259E61A/caneca-anime-darling-in-the-franxx-lo006-caneca-de-jogo.jpg" class="produto">
            <p>Caneca da personagem Zero Two</p>
            <p>Preço: $50</p>
            <button onclick="addItem('Caneca Anime Darling in the Franxx', 50)">Adicionar ao Carrinho</button>
        </div>
    </div>
    <div id="cart">
        <h2>Carrinho</h2>
        <ul id="cart-items"></ul>
        <p id="cart-total">Total: $0</p>
        <input type="submit" name="Comprar" value="Comprar">
    </div>
    <script>
        // Script JavaScript
        var cartItems = []; // Array para armazenar os itens do carrinho

        function addItem(name, price) {
            cartItems.push({ name: name, price: price }); // Adiciona o item ao carrinho
            updateCart(); // Atualiza o carrinho
        }

        function updateCart() {
            var cartList = document.getElementById("cart-items");
            cartList.innerHTML = ""; // Limpa a lista do carrinho

            var total = 0;

            for (var i = 0; i < cartItems.length; i++) {
                var item = cartItems[i];
                var listItem = document.createElement("li");
                listItem.innerHTML = item.name + " - $" + item.price;
                cartList.appendChild(listItem); // Adiciona o item à lista do carrinho

                total += item.price; // Calcula o total
            }

            var cartTotal = document.getElementById("cart-total");
            cartTotal.innerHTML = "Total: $" + total; // Atualiza o total
        }
    </script>
</body>
</html>