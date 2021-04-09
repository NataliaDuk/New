<?php

class Triangle
{
    protected float $k1;
    protected float $k2;

    public function __construct($k1, $k2)
    {
        $this->k1 = $k1;
        $this->k2 = $k2;
    }

    /**
     * @param float $k1
     */
    public function setK1(float $k1): void
    {
        if ($k1 > 0) {
            $this->k1 = $k1;
        }
    }

    /**
     * @param float $k2
     */
    public function setK2(float $k2): void
    {
        if ($k2 > 0) {
            $this->k2 = $k2;
        }
    }

    public function hypo()

    {
        return sqrt($this->k1 ** 2 + $this->k2 ** 2);

    }
}

$hup= new Triangle(2,2);
echo $hup->hypo();

$hup->setK1(5);
$hup->setK2(5);
echo $hup->hypo();

