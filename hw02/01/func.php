<?php

function printCells($a, $b, $operation)
{
    $outputString = '<tr>';
    $outputString .= '<td>' . (int)$a . '</td>';
    $outputString .= '<td>' . (int)$b . '</td>';
    switch ($operation) {
        case '&&':
            $outputString .= '<td>' . (int)($a && $b) . '</td>';
            break;
        case '||':
            $outputString .= '<td>' . (int)($a || $b) . '</td>';
            break;
        case 'xor':
            $outputString .= '<td>' . (int)($a xor $b) . '</td>';
            break;
    }

    $outputString .= '</tr>' . PHP_EOL;
    return $outputString;
}

function printTable($withOperation)
{
    $outputString = '<table class="table table-bordered col-md-2">
    <tr>
        <th>a</th>
        <th>b</th>
        <th>a ' . $withOperation . ' b</th>
    </tr>';
    $a = false;
    $b = false;

    $outputString .= printCells($a, $b, $withOperation);
    $outputString .= printCells($a, !$b, $withOperation);
    $outputString .= printCells(!$a, $b, $withOperation);
    $outputString .= printCells(!$a, !$b, $withOperation);
    $outputString .= '</table>' . PHP_EOL;
    return $outputString;
}