<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
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
        }
        div{
            background-color: var(--modal-bg-color);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border-radius: 15px;
            color: #fff;
        }
        input{
            padding: 15px;
            border: none;
            border-radius: 1rem;
            outline: none;
            font-size: 15px;
        }
        .input_submit{
            background-color: var(--input-bg-color);
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            
        }
        .input_submit:hover{
            background-color: #0054C6;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div>
        <h1>Login</h1>
        <form action="test_login.php" method="POST">
          <input type="text" name="email" placeholder="Email">
          <br><br>
          <input type="password" name="senha" placeholder="Senha">
          <br><br>
          <input type="submit" name="submit" value="Enviar" class="input_submit">
        </form>
    </div>
</body>
</html>