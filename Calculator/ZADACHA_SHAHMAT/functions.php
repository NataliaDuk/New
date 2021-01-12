<?php

function createTable($n, $m)
{
    $table = '<table class="shahmat">';

    for ($i = 1; $i <= $n; $i++) {

        $table .= '<tr>';

        for ($j = 1; $j <= $m; ++$j) {

            $table .= '<td></td>';
        }

        $table .= '</tr>';
    }

    $table .= '</table>';
    return $table;
}

function countZerno($n, $m)
{
    $c = 1;
    $s = 0;

    for ($i = 1; $i <= $n * $m; $i++) {
        $s += $c;
        $c *= 2;
    }
    
    return $s;
}
