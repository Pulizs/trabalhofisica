<?php

    $Qq = $_POST['Qq'];
    $Qf = $_POST['Qf'];

    function calcularRendimento($qq, $qf)
    {
        $rendimento = $qf/$qq;
        return $rendimento;
    }

    $rendimento = calcularRendimento($Qq, $Qf);
    echo $rendimento;

?>