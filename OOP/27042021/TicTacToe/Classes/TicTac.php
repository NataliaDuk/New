<?php


class TicTac
{
    protected array $map;

    /**
     * @return array
     */
    public function getMap(): array
    {
        return $this->map;
    }

    public function init(int $size): static
    {
        $this->map = [];
        for ($i = 0; $i < $size; $i++) {
            for ($j = 0; $j < $size; $j++) {
                $this->map[$i][$j] = "";
            }
        }
        return $this;
    }

    public function putCross(int $i, int $j): static
    {

        if (isset($this->map[$i]) && isset($this->map[$i][$j]) && $this->map[$i][$j] == "" ) {
            $this->map[$i][$j] = "X";
        }
        return $this;
    }
    public function putZero(int $i, int $j): static
    {

        if (isset($this->map[$i]) && isset($this->map[$i][$j]) && $this->map[$i][$j] == "" ) {
            $this->map[$i][$j] = "O";
        }
        return $this;
    }
}