<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/bootstrap.min.css">
    <title>Calor Latente</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <a class="navbar-brand" href="http://localhost/trabalhofisica/index.php">Rendimento de máquinas térmicas</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="http://localhost/trabalhofisica/calorlatente/calorLatente.php">Calor latente</a>
                <a class="nav-item nav-link" href="http://localhost/trabalhofisica/formula/formula.php">Formula</a>
                <a class="nav-item nav-link" href="http://localhost/trabalhofisica/sobre/sobre.php">Sobre</a>
            </div>
        </div>
    </nav>
    <div class="container">
        <form method="post" action="./resultado.php">
            <label for="">Calculo para achar o calor latente de uma fusão:</label>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" name="massa" placeholder="Massa">
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="Qe" placeholder="Calor Específico">
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Calcular</button>
        </form>
    </div>
</body>

</html>