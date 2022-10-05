<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexão</title>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(90deg, #7FFFD4 0%, #0000FF 100%);
            color: #FFF;
        }

        table {
            border-collapse: collapse;
            width: 600px;
            margin-bottom: 20px; 
        }

        table td, table th {
            border: 1px solid #000;
            padding: 5px;
            text-align: center;
        }

        table caption {
            caption-side: top;
            text-align: center;
            font-size: 40px;
            margin-bottom: 10px;
            margin-left: 30px;
            font-weight: bold;
        }

        table th {
            background: #000;
        }

        .students-table {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .teacher-table {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .teacher-table #back-button {
            color: #000;
            text-decoration: none;
            font-weight: 700;
            border: 1px solid transparent;
            padding: 10px 15px;
            background-color: #FFF;
        }

        #back-button:hover {
            background-color: #DCDCDC;
        }

        #excluirAluno {
            background-color: transparent;
            border-color: transparent;
        }

        #excluirAluno:hover {
            color: #FFF;
            cursor: pointer;
        }
        #excluirProfessor {
            background-color: transparent;
            border-color: transparent;
        }

        #excluirProfessor:hover {
            color: #FFF;
            cursor: pointer;
        }

        .delete-button {
            text-decoration: none;
            color: #FFF;
        }

        .delete-button:hover {
            background-color: #CCC;
        }

        #edit-student {
            text-decoration: none;
            color: #000;
        }

        #edit-student:hover {
            color: #FFF;
            cursor: pointer;
        }

        #acoes {
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
            align-items: center;
        }

        nav ul {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            list-style: none;
        }

        li {
            padding: 5px;
        }

        main {
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            flex-wrap: wrap;
        }

        .teste {
            width: 50%;
        }
    </style>
</head>
<body>

    <header>
        <nav>
            <ul>
                <li>Home</li>
                <li>Loja</li>
                <li>Sobre</li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="teste">Div 01</div>
        <div class="teste">Div 02</div>
        <div class="teste">Div 03</div>
        <div class="teste">Div 04</div>
    </main>
    <div class="students-table">
        <table>
        <caption>Lista de alunos</caption>
            <?php 
                require_once './dao/DaoStudent.php';
                $dao = new DaoStudent();
                $list = $dao->list();
            ?>
            
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>RA</th>
                <th>Ações</th>
            </tr>
    
            <tr>
                <?php 
                    foreach ($list as $value){
                        echo "<tr>";
                        echo "<td>" . $value['id'] . "</td>";
                        echo "<td>" . $value['name'] . "</td>";
                        echo "<td>" . $value['ra'] . "</td>";
                        echo '<td id="acoes">
                            <a id="edit-student" href="formPrincipal.php?id=' . $value['id'] .'&value=2">Editar</a>
                            <form action="excluiEstudante.php" method="POST">
                                <input type="hidden" name="id" value="' . $value['id'] . '">
                                <input type="submit" id="excluirAluno" value="Excluir">
                            </form>
                        </td>';
                    } 
                ?>
            </tr>
        </table>
    </div>

    <div class="teacher-table">
        <table>
        <caption>Lista de professores</caption>
            <?php 
                require_once './dao/DaoTeacher.php';
                $dao = new DaoTeacher();
                $list = $dao->list();
            ?>
            
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Matéria</th>
                <th>Ações</th>
            </tr>
    
            <tr>
                <?php 
                    foreach ($list as $value){
                        echo "<tr>";
                        echo "<td>" . $value['id'] . "</td>";
                        echo "<td>" . $value['name'] . "</td>";
                        echo "<td>" . $value['subject'] . "</td>";
                        echo '<td>
                            <form action="excluiProfessor.php" method="POST">
                                <input type="hidden" name="id" value="' . $value['id'] . '">
                                <input type="submit" id="excluirProfessor" value="Excluir">
                            </form>
                        </td>';
                    } 
                ?>
            </tr>
        </table>

        <a id="back-button" href="index.php">Voltar</a>
    </div>
</body>
</html>