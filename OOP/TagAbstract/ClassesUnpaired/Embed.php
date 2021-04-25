<?php
//<embed> используется для загрузки и отображения объектов, которые исходно браузер не понимает.

class Embed extends AbstractTag
{
    protected string $src;

    /**
     * @param string $src
     * @return Embed
     */
    public function setSrc(string $src): static
    {
        $this->src = $src;
        return $this;
    }

    public function html(): string
    {
        return "<embed src='$this->src' style='$this->style'>";
    }
}