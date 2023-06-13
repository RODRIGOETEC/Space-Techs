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
            <p>Descrição do item 1.</p>
            <p>Preço: $60</p>
            <button onclick="addItem('Camisa do Luffy', 60)">Adicionar ao Carrinho</button>
        </div>
        <div class="item">
            <h2>Item 2</h2>
            <p>Descrição do item 2.</p>
            <p>Preço: $20</p>
            <button onclick="addItem('Item 2', 20)">Adicionar ao Carrinho</button>
        </div>
        <div class="item">
            <h2>Item 3</h2>
            <p>Descrição do item 3.</p>
            <p>Preço: $30</p>
            <button onclick="addItem('Item 3', 30)">Adicionar ao Carrinho</button>
        </div>
         <div class="item">
            <h2>Item 4</h2>
            <p>Descrição do item 3.</p>
            <p>Preço: $70</p>
            <button onclick="addItem('Item 4', 70)">Adicionar ao Carrinho</button>
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