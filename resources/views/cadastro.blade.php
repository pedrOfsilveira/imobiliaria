<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f4fc;
            padding: 1rem;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        input[type="submit"] {
            background-color: #306dd0;
            border: 0;
            padding: 8px;
            color: #f0f4fc;
            transition: .5s all;
        }

        input[type="submit"]:hover {
            scale: 1.1;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #e393e7;
        }

        thead {
            font-weight: bold;
        }

        label {
            padding: 4px;
        }

        form * {
            margin: 4px 0;
        }
    </style>
    <title>Cadastro de Casa</title>
</head>

<body>
    <div class="container">
        <h1>Cadastrar Casa</h1>
        <form action="cadastrar" method="post">
            @csrf
            <label for="endereco">Endereço:</label>
            <input type="text" name="endereco">
            <br>
            <label for="imobiliaria">Imobiliária:</label>
            <input type="text" name="imobiliaria">
            <br>
            <label for="tipo">Tipo:</label>

            <input type="radio" name="tipo" value="Aluguel">
            <label for="tipo">Aluguel</label>
            <input type="radio" name="tipo" value="Venda">
            <label for="tipo">Venda</label>
            <br>
            <label for="preco">Preço:</label>
            <input type="number" step="0.01" name="preco">
            <br>
            <input type="submit" value="Cadastrar">
        </form>
    </div>
</body>

</html>