<?php

function calcularRendimento()
{
    $Qq = $_POST['Qq'];
    $Qf = $_POST['Qf'];

    $rendimento = (($Qq-$Qf)/ $Qq)*100;
    echo $rendimento;

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/bootstrap.min.css">
    <title>Rendimento</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <a class="navbar-brand" href="#">Rendimento de máquinas térmicas</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="#">Calor latente</a>
                <a class="nav-item nav-link" href="#">Formula</a>
                <a class="nav-item nav-link" href="#">Sobre</a>
            </div>
        </div>
    </nav>
    <div class="container">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="">Calculo para achar o trabalho:</label>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" name="Qq" placeholder="Fonte quente">
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="Qf" placeholder="Fonte fria">
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Calcular</button>
        </form>

        <label for="resultadp">Resultado:</label>
        <?php  calcularRendimento()?>
    </div>
</body>

</html>