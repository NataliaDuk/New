<?php
// <bdo></bdo> устанавливает направление вывода текста

class Bdo extends TagPaired
{
    //Указывает направление текста
    protected string $dir;

    /**
     * @param string $dir
     * @return Bdo
     */
    public function setDir(string $dir): static
    {
        $this->dir = $dir;
        return $this;
    }

    public function html(): string
    {
        return "<bdo dir='$this->dir' style='$this->style'>$this->innerText</bdo>";
    }


}