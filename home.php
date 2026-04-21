<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SITE | GN</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: "Archivo", sans-serif;
        }

        :root {
            font-size: 62.5%; /* 1rem = 10px */

            --body-bg-color: #06090F;
            --green-color: #8edd65;
            --modal-bg-color: #1b1b33;
            --input-bg-color: #48488f;
            --bg-color-expense: #D92525;
        }

        body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: var(--body-bg-color);
            text-align: center;
            color: white;
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 30px;
            border-radius: 10px;
        }
        a{
            text-decoration: none;
            color: white;
            border: 3px solid dodgerblue;
            border-radius: 10px;
            padding: 10px;
        }
        a:hover{
            background-color: dodgerblue;
        }
    </style>
</head>
<body>
    <h1>Seja bem vindo ao PHP!</h1>
    <h2>Faça seu Login!</h2>
    <div class="box">
        <a href="login.php">Login</a>
        <a href="form.php">Cadastre-se</a>
    </div>
</body>
</html>