<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <link href="https://fonts.googleapis.com/css2?family=Mansalva&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Cadastro</title>
    <style>
    h1{
        color: white;
    }

    body{
        background-color: #363636;
    }

    .btn-dark{
        font-family: 'Mansalva', cursive;
        padding: 10px;
        font-size: 40px;
        background-color: #363636;
        width: 400px;
        height: 80px;
        border: 2px #1C1C1C solid;
        border-radius: 5px;
        text-align: center;
        color: #4682B4;
    }
    
</style>
  </head>
  <body>
      <center>
        <h1>Cadastro</h1>
        <hr>
        <hr>

        <form action="/produto/form" method="post">
        <button class="btn btn-dark">Produto</button>
        </form>
        <br>
        <br>

        <form action="/categoriaproduto/form" method="post">
        <button class="btn btn-dark">Categoria do Produto</button>
        </form>
        <br>
        <br>

        <form action="/pessoa/form" method="post">
        <button class="btn btn-dark">Pessoa</button>
        </form>
        <br>
        <br>

        <form action="/funcionario/form" method="post">
        <button class="btn btn-dark">Funcionário</button>
        </form>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      </center>
    </body>
</html>