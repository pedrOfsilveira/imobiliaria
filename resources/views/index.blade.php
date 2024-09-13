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

        button {
            background-color: #306dd0;
            border: 0;
            padding: 8px;
            color: #f0f4fc;
            transition: .5s all;
        }

        button:hover {
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

        input,
        select,
        button {
            height: 40px;
        }
    </style>
    <title>Imobiliária</title>
</head>

<body>
    <div class="container">
        <header>
            <form action="pesquisar" method="post">
                @csrf
                <input type="search" name="pesquisa">
                <select name="campo">
                    <option value="" disabled>Pesquisar por</option>
                    <option value="endereco">Endereço</option>
                    <option value="imobiliaria">Imobiliária</option>
                </select>
                <select name="tipo">
                    <option value="ambos">Ambos</option>
                    <option value="aluguel">Aluguel</option>
                    <option value="venda">Venda</option>
                </select>
                <select name="ordempor">
                    <option value="" disabled>Ordenar por</option>
                    <option value="preco">Preço</option>
                    <option value="endereco">Endereço</option>
                </select>
                <select name="ordem">
                    <option value="asc">Crescente</option>
                    <option value="desc">Decrescente</option>
                </select>
                <button type="submit">Pesquisar</button>
            </form>
        </header>
        <br>
        <div class="cadastro">
            <form action="cadastro" method="get">
                <button type="submit">Cadastrar Casa</button>
            </form>
        </div>
        <br>
        <div class="medicamentos">
            <table>
                <thead>
                    <tr>
                        <td>Endereço</td>
                        <td>Imobiliária</td>
                        <td>Preço</td>
                        <td>Tipo</td>
                        <td></td>
                        <td></td>
                    </tr>
                </thead>
                <?php
                for ($i = 0; $i < count($dados); $i++) {
                    $casa = $dados[$i];
                ?>
                    <tr>
                        <td><?= $casa['endereco'] ?></td>
                        <td><?= $casa['imobiliaria'] ?></td>
                        <td><?= $casa['preco'] ?></td>
                        <td><?= $casa['tipo'] ?></td>
                        <td><button><a href="{{ url('editar/'.$casa ->id) }}">Editar</a></button></td>
                        <td><button><a href="{{ url('remover/'.$casa ->id) }}">Remover</a></button></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
</body>

</html>