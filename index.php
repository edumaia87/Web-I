<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        background-image: linear-gradient(90deg, #7FFFD4 0%, #0000FF 100%);
        color: #FFF;
    }

    * {
        margin: 0;
        padding: 0;

    }

    #register-student {
        display: block;
        width: 80px;
        border: 1px solid transparent;
        background-color: #FFF;
        padding: 10px 15px;
        text-decoration: none;
        color: #000;

        margin: 20px 632px;
    }

    #register-student:hover {
        background-color: #DCDCDC;
    }

    #register-teacher {
        display: block;
        width: 80px;
        border: 1px solid transparent;
        background-color: #FFF;
        padding: 10px 15px;
        text-decoration: none;
        color: #000;

        margin: 20px 632px;
    }

    #register-teacher:hover {
        background-color: #DCDCDC;
    }
</style>

<body>
    <?php
        /*require_once './model/Student.php';
        require_once './dao/DaoStudent.php';

        $obj = new Student('4', 'Pedro', '0057555');
        $dao = new DaoStudent();

        if ($dao->insert($obj) > 0) echo 'Aluno inserido com sucesso!';
        else echo 'Não foi possível inserir o aluno!';


        if($dao->deleteStudent($obj) > 0) echo 'Aluno removido com sucesso!'; 
        else echo 'Não foi possível remover o aluno!';

        if ($dao->updateStudent($obj) > 0) echo 'Aluno atualizado com sucesso!';
        else echo 'Não foi possível atualizar os dados do aluno!';

        $list = $dao->list();

        echo "<br>******LISTA DE VEÍCULO******<br>";
        for ($i=0; $i < count($list); $i++) { 
            foreach ($list[$i] as $key => $value) {
                echo strtoupper($key) . ': ' . $value . '<br>';
            }
            echo "-----------------------<br>";
        }*/
    ?>

    <a id="register-student" href="formPrincipal.php?value=1">Cadastrar aluno</a>
    <a id="register-teacher" href="formCadastroProfessor.php">Cadastrar professor</a>
    <a id="register-student" href="listagem.php">Listar Alunos e professores</a>

</body>
</html>

