<?php

    $Qq = $_POST['Qq'];
    $Qf = $_POST['Qf'];

    function calcularRendimento($qq, $qf)
    {
        $rendimento = 1 - $qf/$qq;
        return $rendimento*100;
    }

    $rendimento = calcularRendimento($Qq, $Qf);
    echo $rendimento;

?>