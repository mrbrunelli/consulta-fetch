<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FETCH</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>

    <div class="row justify-content-center mt-4">
        <h1 class="text-center display-4 text-muted mr-4">Requisições fetch </h1>
        <img src="./javascript.png" width="70" height="70">
    </div>

    <div class="row justify-content-around mt-5">
        <div class="shadow p-4">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" autofocus>
            <button class="btn btn-primary btn-block mt-4" onclick="fnConsultarDados()">Consultar dados</button>
        </div>



        <div class="shadow p-4">
            <label for="mensagem">Mensagem</label>
            <textarea name="mensagem" id="mensagem" cols="30" rows="10" class="form-control">

            </textarea>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="./fetch.js"></script>
</body>

</html>