<?php

$Qq = $_POST['Qq'];
$Qf = $_POST['Qf'];

function calcularRendimento($qq, $qf)
{
    $trabalho = $qq - $qf;
    $rendimento = $trabalho / $qq;
    return $rendimento * 100;
}

$rendimento = calcularRendimento($Qq, $Qf);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/bootstrap.min.css">
    <title>Resultado</title>
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
                <a class="nav-item nav-link" href="http://localhost/trabalhofisica/calorlatente/calorLatente.php">Calor
                    latente</a>
                <a class="nav-item nav-link" href="http://localhost/trabalhofisica/formula/formula.html">Formula</a>
                <a class="nav-item nav-link" href="http://localhost/trabalhofisica/sobre/sobre.html">Sobre</a>
            </div>
        </div>
    </nav>
    <div class="container">
        <br>
        <h2>O rendimeto é: <?php echo $rendimento . "%"; ?></h2>
        <br>
        <a class="btn btn-primary" href="http://localhost/trabalhofisica/index.php" role="button">Voltar</a>
    </div>
</body>

</html>