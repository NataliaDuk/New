<?php


class Marquee extends TagPaired
{
    protected string $behavior;

    /**
     * @param string $behavior
     * @return Marquee
     */
    public function setBehavior(string $behavior): static
    {
        $this->behavior = $behavior;
        return $this;
    }

    public function html(): string
    {
        return "<marquee behavior='$this->behavior' style='$this->style'>$this->innerText</marquee>";
    }


}