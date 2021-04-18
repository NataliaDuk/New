<?php

class Cost extends TableCost
{
    public function payment(): float
    {
        return ($this->width * $this->length * $this->priceSquare +
            $this->height * 4 * $this->priceHeight +
            $this->priceWork);
    }
}