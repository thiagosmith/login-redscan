<?php
// Inicia a sessão
session_start();

// Verifica se o usuário está autenticado
if (!isset($_SESSION['usuario'])) {
    // Usuário não autenticado, redireciona para a página de login
    header('Location: acesso.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Protegida - RedScanAcademy</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
            background-color: #121212;
            color: #ffffff;
        }
        header {
            background: #d32f2f;
            padding: 20px;
            font-size: 24px;
            font-weight: bold;
        }
        .container {
            margin: 40px auto;
            max-width: 400px;
            padding: 20px;
            background: #1e1e1e;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(255, 0, 0, 0.3);
        }
        p {
            font-size: 18px;
        }
        .btn {
            background: #d32f2f;
            color: white;
            padding: 12px;
            font-size: 18px;
            border: none;
            cursor: pointer;
            width: 100%;
            border-radius: 5px;
            transition: 0.3s;
            display: inline-block;
            text-decoration: none;
        }
        .btn:hover {
            background: #ff5252;
        }
        footer {
            margin-top: 20px;
            padding: 10px;
            background: #222;
            color: #ccc;
            font-size: 14px;
        }
        img {
            width: 100%;
            max-width: 400px;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(255, 0, 0, 0.3);
            margin-top: 20px;
        }
    </style>
</head>
<body>

<header>Página Protegida - RedScanAcademy</header>

<div class="container">
    <h2>Bem-vindo, <?php echo htmlspecialchars($_SESSION['usuario']); ?>!</h2>
    <p>Você está autenticado e pode acessar esta página.</p>
    
    <a href="index.php" class="btn">Sair</a>

    <img src="https://media.licdn.com/dms/image/v2/D4D22AQG9Mz63QoyGTQ/feedshare-shrink_2048_1536/B4DZVirjfNHwAs-/0/1741117340295?e=1744243200&v=beta&t=aCTNh2HIe0VS5pICrkZX2_myzaPtjZxV1JYIaPxtIoQ" alt="RedScanAcademy">
</div>

<footer>
    &copy; 2025 RedScanAcademy - Todos os direitos reservados.
</footer>

</body>
</html>
