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
            margin-bottom: 20px;
        }

        input[type=submit]:hover {
            background-color:  #DCDCDC;
        }

        h1 {
            text-align: center;
        }

        .back-button {
            display: inline;
            border: 1px solid transparent;
            padding: 10px 15px;
            background-color: #FFF;

            margin-left:930px;
        }

        .back-button:hover {
            background-color: #DCDCDC;
        }

        .back-button a {
            color: #000;
            text-decoration: none;
            font-weight: 700;
        }
    </style>
</head>
<body>

    <?php
        require_once './dao/DaoStudent.php';
        require_once './model/Student.php';
        
        $id = filter_input(INPUT_GET, 'id');
        $dao = new DaoStudent();
        $list = $dao->localiza($id);

        $student = $list[0];
    ?>

    <h1>Edição de Estudante</h1>

    <div id="form">
        <form action="edicaoEstudante.php" method="POST">
            <label for="student_id">ID: </label>
            <input type="hidden" name="student_id" value="<?= $student['id'] ?>">
            <label for="student_name">Nome: </label>
            <input type="text" name="student_name" id="student_ra" value="<?= $student['name'] ?>"required>
    
            <label for="student_ra">RA: </label>
            <input type="text" name="student_ra" id="student_ra" value="<?= $student['ra'] ?>" required><br><br>
    
            <input type="submit" name="button-submit" value="Enviar dados">
        </form>
    </div>

    <div class="back-button">
        <a href="index.php">Voltar</a>
    </div>
</body>
</html>