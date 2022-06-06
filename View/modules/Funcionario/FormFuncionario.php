<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Mansalva&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Funcionario</title>
    <style>
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
        h1{
            color: white;
        }
        body{
            background-color: #363636;
        }

        label{
            color: #9C9C9C;
        }
        label, input { display: block;}
    </style>
</head>
<body>
<center>
    <form action="/funcionario/save" method="post">
        <fieldset>
            <h1>Cadastro de Funcionario</h1>
            <hr>
            <input type="hidden" value="<?= $model->id ?>" name="id" />

            <label for="nome">Nome:</label>
            <input name="nome" id="nome" value="<?= $model->nome ?>" type="text" />

            <label for="salario">Salario:</label>
            <input name="salario" id="salario" value="<?= $model->salario ?>" type="number" />

            <label for="cargo">Cargo:</label>
            <input name="cargo" id="cargo" value="<?= $model->cargo ?>" type="text" />
            <br>
            <button class="btn btn-dark">Enviar</button>

        </fieldset>
    </form>  
    </center>  
</body>
</html>