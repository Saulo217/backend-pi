<?php

function part(&$vetor, int $inicio, $fim)
{
    $pivo = $vetor[intval(($inicio + $fim) / 2)];

    while ($inicio < $fim) {
        while ($inicio < $fim && $vetor[$inicio] <= $pivo) {
            $inicio++;
        }
        while ($inicio < $fim && $vetor[$fim] >= $pivo) {
            $fim--;
        }
        $auxiliar = $vetor[$inicio];
        $vetor[$inicio] = $vetor[$fim];
        $vetor[$fim] = $auxiliar;
    }
    return $inicio;
}

function quick_sort(&$vetor, $inicio, $fim)
{
    if ($inicio < $fim) {
        $pos = part($vetor, $inicio, $fim);
        quick_sort($vetor, $inicio, $pos - 1);
        quick_sort($vetor, $pos, $fim);
    }
}
