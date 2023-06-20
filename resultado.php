<?php

    $Qq = $_POST['Qq'];
    $Qf = $_POST['Qf'];

    function calcularRendimento($qq, $qf)
    {
        $trabalho = $qq - $qf;
        $rendimento = $trabalho / $qq;
        return $rendimento*100;
    }

    $rendimento = calcularRendimento($Qq, $Qf);
    echo $rendimento;
    echo "%";

?>