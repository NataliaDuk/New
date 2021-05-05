<?php


class NewCalcTwo extends NewCalc
{
    public function sinA(): float
    {
        return sin($this->a);

    }

    /**
     * @return float
     */
    public function sinB(): float
    {
        return sin($this->b);
    }

    public function cosA(): float
    {
        return cos($this->a);
    }
public function cosB(): float
{
    return cos($this->b);
}
}