<?php

class Map
{
    protected array $map = [];

    /**
     * @param array $map
     */
    public function setMap(array $map): static
    {
        $this->map = $map;
        return $this;
    }

    public function GetHtmlTable(): string
    {
        $html = "<table class='tictac'>";
        foreach ($this->map as $row) {
            $html .= "<tr>";
            foreach ($row as $cell) {
                if ($cell == "X") {
                    $html .= "<td>❌</td>";
                } elseif ($cell == "O") {
                    $html .= "<td>⭕</td>";
                } else {
                    $html .= "<td></td>";
                }
            }
            $html .= "</tr>";
        }
        $html .= "</table>";

        return $html;
    }
}