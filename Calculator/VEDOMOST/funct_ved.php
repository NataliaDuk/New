<?php
function htmlTable($table)
{
    $html = "<table>";

    foreach ($table as $rows) {

        $html .= "<tr>";

        foreach ($rows as $cols) {
            $html .= "<td>$cols</td>";
        }

        $html .= "</tr>";
    }

    $html .= "</table>";

    return $html;
}
?>