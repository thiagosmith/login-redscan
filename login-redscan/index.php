<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - RedScanAcademy</title>
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
        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            background: #282828;
            color: white;
            font-size: 16px;
        }
        input:focus {
            outline: 2px solid #ff5252;
        }
        label {
            font-size: 18px;
            font-weight: bold;
            display: block;
            margin-top: 10px;
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

<header>Login - RedScanAcademy</header>

<div class="container">
    <h2>Página de Login</h2>
    <form action="acesso.php" method="post">
        <label for="user">Usuário:</label>
        <input type="text" id="user" name="user">

        <label for="pass">Senha:</label>
        <input type="password" id="pass" name="pass">

        <input type="submit" class="btn" value="Entrar">
    </form>

    <img src="https://media.licdn.com/dms/image/v2/D4D22AQG9Mz63QoyGTQ/feedshare-shrink_2048_1536/B4DZVirjfNHwAs-/0/1741117340295?e=1744243200&v=beta&t=aCTNh2HIe0VS5pICrkZX2_myzaPtjZxV1JYIaPxtIoQ" alt="RedScanAcademy">
</div>

<footer>
    &copy; 2025 RedScanAcademy - Todos os direitos reservados.
</footer>

</body>
</html>
