<?php
    $massa = $_POST['massa'];
    $calorEspecifico = $_POST['Qe'];

    function calcularFusao($ms, $qe){
        $calorLatente = $ms * $qe;
        return $calorLatente;
    }

    $calorLatente = calcularFusao($massa, $calorEspecifico);
    echo "O calor latente desta fusão é: " . $calorLatente . "J";
?>