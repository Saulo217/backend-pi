<?php

function part(&$vetor, int $inicio, $fim)
{
    $pivo = $vetor[intval(($inicio + $fim) / 2)];

    while ($inicio < $fim) {
        while ($inicio < $fim && array_values($vetor[$inicio])[1] <= $pivo) {
            $inicio++;
        }
        while ($inicio < $fim && array_values($vetor[$fim])[1] >= $pivo) {
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
