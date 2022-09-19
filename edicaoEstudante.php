<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status - Cadastro</title>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(90deg, #7FFFD4 0%, #0000FF 100%);
            color: #FFF;
        }
        
        a {
            margin-top: 10px;
            margin-left: 632px;
            display: block;
            border: 1px solid transparent;
            padding: 10px 15px;
            width: 100px;
            background-color: #FFF;

            text-justify: center;
            text-decoration: none;
            text-align: center;
            color: #000;
        }

        a:hover {
            background-color: #DCDCDC;
        }

        p {
            font-size: 15px;
            font-weight: 900;
            margin: 0 632px;
        }
    </style>
</head>
<body>
    <?php
        require_once './model/Student.php';
        require_once './dao/DaoStudent.php';

        $id = filter_input(INPUT_POST, 'student_id');
        $name = filter_input(INPUT_POST, 'student_name');
        $ra = filter_input(INPUT_POST, 'student_ra');

        if($id && $name && $ra) {
            $obj = new Student($id, $name, $ra);
            $dao = new DaoStudent();

            if($dao->updateStudent($obj)) echo '<p>Aluno atualizado com sucesso!</p>';
            else echo '<p>Aluno não foi atualizado!</p>';

        } else {
            echo '<p>Dados ausentes ou incorretos!</p>';
        }
    ?>

    <a href="listagem.php">Listar Alunos</a>
</body>
</html>