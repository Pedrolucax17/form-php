<?php
    if(isset($_POST['submit'])){
        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $data_nasc = $_POST['data_nascimento'];
        $senha = $_POST['password'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, telefone, sexo, data_nasc, senha) VALUES ('$nome', '$email', '$telefone', '$sexo', '$data_nasc', '$senha')");

        header('Location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário | GN</title>
    <style>
         * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: "Archivo", sans-serif;
        }

        :root {
            font-size: 62.5%;

            --body-bg-color: #06090F;
            --green-color: #8edd65;
            --modal-bg-color: #1b1b33;
            --input-bg-color: #48488f;
            --text-color: #e4e6f1;
            --border-color: #2e2e5e;
        }

        body {
            background: radial-gradient(circle at top, #0b0f1f, #06090F);
            height: 100vh;
        }

        /* CONTAINER */
        .box {
            color: var(--text-color);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            
            background: var(--modal-bg-color);
            padding: 3rem;
            border-radius: 1.6rem;
            width: 32rem;
            height: 100%;

            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.6);
            border: 1px solid var(--border-color);
        }

        /* FIELDSET */
        fieldset {
            border: none;
        }

        legend {
            text-align: center;
            font-size: 1.8rem;
            margin-bottom: 2rem;
            color: white;
        }

        /* INPUT BOX */
        .inputBox {
            position: relative;
            margin-bottom: 2rem;
        }

        /* INPUT */
        .inputUser {
            width: 100%;
            padding: 1.2rem;
            border-radius: 0.8rem;
            border: 1px solid var(--border-color);
            background: var(--input-bg-color);
            color: white;
            font-size: 1.4rem;
            outline: none;

            transition: 0.3s;
        }

        /* FOCUS */
        .inputUser:focus {
            border-color: var(--green-color);
            box-shadow: 0 0 0 2px rgba(142, 221, 101, 0.2);
        }

        /* LABEL */
        .labelInput {
            position: absolute;
            left: 1.2rem;
            top: 50%;
            transform: translateY(-50%);
            color: #aaa;
            font-size: 1.3rem;
            pointer-events: none;
            transition: 0.3s;
        }

        /* FLOAT LABEL */
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput {
            top: -0.8rem;
            left: 1rem;
            font-size: 1.1rem;
            background: var(--modal-bg-color);
            padding: 0 0.5rem;
            color: var(--green-color);
        }

        /* RADIO */
        p {
            margin-bottom: 0.5rem;
            font-size: 1.3rem;
        }

        input[type="radio"] {
            margin-right: 0.5rem;
            accent-color: var(--green-color);
        }

        label {
            font-size: 1.3rem;
            margin-right: 1rem;
        }

        /* DATE */
        #data_nascimento {
            width: 100%;
            margin-top: 0.5rem;
            padding: 1rem;
            border-radius: 0.8rem;
            border: 1px solid var(--border-color);
            background: var(--input-bg-color);
            color: white;
            outline: none;
        }

        /* BUTTON */
        #submit {
            width: 100%;
            padding: 1.4rem;
            border-radius: 1rem;
            border: none;
            background: linear-gradient(135deg, #8edd65, #4b9f3a);
            color: #06090F;
            font-size: 1.5rem;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        /* HOVER */
        #submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(142, 221, 101, 0.3);
        }

        /* ACTIVE */
        #submit:active {
            transform: scale(0.98);
        }
    </style>
</head>
<body>
    <div class="box">
        <form action="form.php" method="POST">
            <fieldset>
                <legend><b>Fórmulário de Clientes</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="password" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>