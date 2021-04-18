<?php

abstract class TableCost
{
    protected float $width;
    protected float $height;
    protected float $length;
    protected float $priceWork = 20;
    protected float $priceSquare = 1;
    protected float $priceHeight = 1;


    public function __construct($width = 0, $height = 0, $length = 0)
    {
        $this->setWidthSm($width);
        $this->setHeightSm($height);
        $this->setLengthSm($length);
    }

    /**
     * рассчитывает длину стола  из дм в см
     * @param float $width
     */
    public function setWidthSm(float $width): void
    {
        $this->width = $width / 10;
    }

    /**
     *  рассчитывает ширину стола  из дм в см
     * @param float $height
     */
    public function setHeightSm(float $height): void
    {
        $this->height = $height / 10;
    }

    /**
     *  рассчитывает высоту стола  из дм в см
     * @param float $length
     */
    public function setLengthSm(float $length): void
    {
        $this->length = $length / 10;
    }

    /**
     *  ширина стола в дm
     * @param float $width
     */
    public function setWidthDm(float $width): void
    {
        $this->width = $width;
    }

    /**
     * длина стола  в дм
     * @param float $length
     */
    public function setLengthDm(float $length): void
    {
        $this->length = $length;
    }

    /**
     * высота ножки стола в дм
     * @param float $height
     */
    public function setHeightDm(float $height): void
    {
        $this->height = $height;
    }

    /**
     * рассчитывает ширину стола  из дм в м
     * @param float $width
     */
    public function setWidthM(float $width): void
    {
        $this->width = $width * 10;
    }

    /**
     *  рассчитывает длину стола  из дм в дюймы
     * @param float $length
     */
    public function setLengthM(float $length): void
    {
        $this->length = $length * 10;
    }

    /**
     *  рассчитывает высоту ножки стола  из дм в м
     * @param float $height
     */
    public function setHeightM(float $height): void
    {
        $this->height = $height * 10;
    }

    /**
     * рассчитывает ширину стола  из дм в м
     * @param float $width
     */
    public function setWidthInc(float $width): void
    {
        $this->width = $width / 3.937;
    }

    /**
     *  рассчитывает длину стола  из дм в дюймы
     * @param float $length
     */
    public function setLengthInc(float $length): void
    {
        $this->length = $length / 3.937;
    }

    /**
     *  рассчитывает высоту ножки стола  из дм в дюймы
     * @param float $height
     */
    public function setHeightInc(float $height): void
    {
        $this->height = $height / 3.937;
    }

    abstract public function payment(): float;

}
