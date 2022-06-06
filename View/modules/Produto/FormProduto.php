<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Mansalva&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Produto</title>
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
            <form action="/produto/save" method="post">
                <fieldset>
                    <h1>Cadastro de Produto</h1>
                    <hr>
                    <input type="hidden" value="<?= $model->id ?>" name="id" />

                    <label for="nome">Nome:</label>
                    <input name="nome" id="nome" value="<?= $model->nome ?>" type="text" />

                    <label for="preco">Preço:</label>
                    <input name="preco" id="preco" value="<?= $model->preco ?>" type="number" />

                    <label for="descricao">Descrição:</label>
                    <input name="descricao" id="descricao" value="<?= $model->descricao ?>" type="text" />
                    <br>
                    <button class="btn btn-dark">Enviar</button>

                </fieldset>
            </form>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>   
        </center>
    </body>
</html>