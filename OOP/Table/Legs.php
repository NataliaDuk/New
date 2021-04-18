<?php
class Legs extends TableCost
{
    public function costD(): float
    {
        return $this->heigt * 4 * 1;
    }
}