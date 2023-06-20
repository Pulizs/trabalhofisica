<?php

    $Qq = $_POST['Qq'];
    $Qf = $_POST['Qf'];

    function calcularRendimento($qq, $qf)
    {
        $rendimento = (($qq - $qf) / $qq) * 100;
        return $rendimento;
    }

    $rendimento = calcularRendimento($Qq, $Qf);
    echo $rendimento;

?>