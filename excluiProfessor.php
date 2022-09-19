<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status - Exclusão</title>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(90deg, #7FFFD4 0%, #0000FF 100%);
            color: #FFF;
        }

        .delete-teacher {
            margin: 0 0 20px 490px;
        }

        p {
            margin-left: 45px;
        }

        a {
            display: block;
            border: 1px solid transparent;
            padding: 10px 15px;
            width: 100px;
            margin-left: 115px;
            background-color: #FFF;

            text-justify: center;
            text-decoration: none;
            text-align: center;
            color: #000;
        }

        a:hover {
            background-color: #DCDCDC;
        }
    </style>
</head>
<body>
    <div class="delete-teacher">
        <h1>Exclusão de Professores</h1>
        <?php
            require_once './model/Teacher.php';
            require_once './dao/Connection.php';
            require_once './dao/DaoTeacher.php';
            $id = filter_input(INPUT_POST, 'id');
            $teacher = new Teacher($id, null, null);
            $dao = new DaoTeacher();
            if($dao->delete($teacher)) {
                echo '<p>Professor deletado com sucesso!</p>';
            } else {
                echo '<p>Não foi possível deletar o Professor!</p>';
            }
        
        ?>
        <a href="listagem.php">Voltar</a>
    </div>
</body>
</html>