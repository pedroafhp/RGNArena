<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RGN Arena</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        header {
            background-color:#f8f5ee;
            padding: 20px;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        header img {
            height: 100px;
        }
        nav a {
            color: black;
            text-decoration: none;
            margin: 0 10px;
        }
        .hero {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 50px;
            background-image: url('../RGN Arena/champions.jpeg'); /* Imagem de fundo */
            background-size: cover; /* Cobrir toda a área */
            background-position: center; /* Centralizar a imagem */
            color: white; /* Cor do texto para contraste */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Sombra no texto para melhor legibilidade */
            height: 500px; /* Altura da seção hero */
        }
        
        footer {
            background-color: #333;
            color: white;
            padding: 10px;
        }
        footer a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
        }
        .button-cor {
        color: black;
        background-color: transparent; 
        border: 2px solid #2196F3; 
        padding: 5px 10px; /
        text-decoration: none; 
        border-radius: 5px; 
        }

    </style>
</head>
<body>
    <header>
        <img src="../RGN Arena/champions.jpeg" alt="Estadio">
        <nav>
            <a href="ajuda.html" class="">Ajuda</a>
            <a href="Acessar.php" class="button-cor">Login</a>

        </nav>
    </header>

    <section class="hero">

    </section>

    <footer>
        <p>&copy; 2025 RGN Arena - Todos os direitos reservados.</p>
    </footer>
</body>
</html>