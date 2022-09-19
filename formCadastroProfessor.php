<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(90deg, #7FFFD4 0%, #0000FF 100%);
            color: #FFF;
        }

        #form {
            display: flex;
            justify-content: center;
        }

        input[type=submit] {
            background-color: #FFF;
            border: none;
            color: #000;
            cursor: pointer;
            padding: 16px 32px;
            margin-left: 175px;
            margin-bottom: 23px;
        }

        input[type=submit]:hover {
            background-color:  #DCDCDC;
        }

        a {
            background-color: #FFF;
            border: none;
            color: #000;
            cursor: pointer;
            padding: 16px 32px;
            margin-left: 635px;
            text-decoration: none;
        }

        a:hover {
            background-color:  #DCDCDC;
        }

        h1 {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Cadastro de Professor</h1>

    <div id="form">
        <form action="cadastroProfessor.php" method="POST">
            <label for="teacher_name">Nome: </label>
            <input type="text" name="teacher_name" id="teacher_name" required>
    
            <label for="teacher_subject">Matéria: </label>
            <input type="text" name="teacher_subject" id="teacher_subject" required><br><br>
    
            <input type="submit" name="button-submit" value="Enviar dados">
        </form>
    </div>

    <a href="index.php">Voltar</a>
</body>
</html>