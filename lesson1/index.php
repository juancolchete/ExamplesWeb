<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Exemplo PHP</title>
</head>
<body>
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
            <div class="container">
                <form action="postFile.php" method="POST">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Digite o nome</label>
                        <input type="text" class="form-control" name="nome" id="exampleFormControlInput1" placeholder="Caio">
                        <button class="btn btn-primary" type="submit">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-2">
        </div>
    </div>
</body>
</html>