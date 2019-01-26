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

function printTable($forOperation)
{
    $outputString = '<table class="table table-bordered col-md-2">
    <tr>
        <th>a</th>
        <th>b</th>
        <th>a ' . $forOperation . ' b</th>
    </tr>';
    $a = false;
    $b = false;

    $outputString .= printCells($a, $b, $forOperation);
    $outputString .= printCells($a, !$b, $forOperation);
    $outputString .= printCells(!$a, $b, $forOperation);
    $outputString .= printCells(!$a, !$b, $forOperation);
    $outputString .= '</table>';
    return $outputString;
}