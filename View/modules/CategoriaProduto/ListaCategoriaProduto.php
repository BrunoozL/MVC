<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Mansalva&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Categoria Produto</title>
    <style>
    h1{
        color: white;
    }

    body{
        background-color: #363636;
    }

    table, td{
        border: 1px solid black;
        border-collapse: collapse;
        text-align: center;
        color: white;
        font-size: 30px;
    }

    th{
        border: 1px solid black;
        background-color: #4682B4;
        text-align: center;
        color: black;
    }

    .btn-dark{
        font-family: 'Mansalva', cursive;
        padding: 10px;
        font-size: 20px;
        background-color: #363636;
        width: 110px;
        height: 50px;
        border: 2px #1C1C1C solid;
        border-radius: 5px;
        text-align: center;
        color: #4682B4;
        
    }
</style>
</head>
<body>
<center>
    <h1>Lista de Categoria do Produto</h1>
    <hr>
    <table>
        <tr>
            <th></th>
            <th>ID</th>
            <th>Nome</th>
        </tr>

        <?php foreach($model->rows as $item): ?>
        <tr>
            <td> <a href="/categoriaproduto/delete?id=<?= $item['id'] ?>">X</a> </td>
            <td><?= $item['id'] ?></td>
            <td> <a href="/categoriaproduto/form?id=<?= $item['id'] ?>"> <?= $item['nome'] ?> </a> </td>
        </tr>
        <?php endforeach ?>

        <?php if(count($model->rows) == 0): ?>
            <tr>
                <td colspan="5">Nenhum registro encontrado.</td>
            </tr>
        <?php endif ?>
    </table>
        <br>
        <br>
        <br>
    <form action="/menu" method="post">
        <button class="btn btn-dark">Menu</button>
    </form>
    </center>
</body>