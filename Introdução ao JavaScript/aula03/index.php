<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 03</title>
</head>
<body>
    <form action="">
        <label for="nome">Nome:</label><br>
        <input name="nome" type="text" placeholder="Digite seu nome"><br><br>
        <label for="endereco">Endereço:</label><br>
        <input name="endereco" type="text" placeholder="Digite seu endereço"><br><br>
        <label for="estado">Estados</label><br>
        <select name="estado" id="estado">
            <option value="">Selecione um estado</option>
        </select>
        <br>
        <label for="cidade">Cidades</label><br>
        <select name="cidade" id="cidade">
            <option value="">Selecione uma cidade</option>
        </select>
        <button>Salvar</button>
    </form>

    <p></p>

    <script src="index.js"></script>
</body>
</html>