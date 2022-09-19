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
        }

        input[type=submit]:hover {
            background-color:  #DCDCDC;
        }

        h1 {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Cadastro de Estudante</h1>

    <div id="form">
        <form action="cadastroEstudante.php" method="POST">
            <label for="student_name">Nome: </label>
            <input type="text" name="student_name" id="student_ra" required>
    
            <label for="student_ra">RA: </label>
            <input type="text" name="student_ra" id="student_ra" required><br><br>
    
            <input type="submit" name="button-submit" value="Enviar dados">
        </form>
    </div>
</body>
</html>