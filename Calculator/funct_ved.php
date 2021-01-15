<?php
function htmlTable($table)
{
    $html = "<table border='2' width='800px'>";

    foreach ($table as $row) {

        $html .= "<tr>";

        foreach ($row as $col) {
            $html .= "<td>$col</td>";
        }

        $html .= "</tr>";
    }

    $html .= "</table>";

    return $html;
}
?>