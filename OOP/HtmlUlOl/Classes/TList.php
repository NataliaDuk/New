<?php


abstract class TList

{
    protected array $data;
    protected string $type;
    protected string $tagName = "";

    /**
     * @param array $data
     */
    public function setData(array $data): static
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): static
    {
        $this->type = $type;
        return $this;
    }

    public function html(): string
    {
        $html = array_map(fn($item)=>"\t<li>$item</li>\n",$this->data);
        return "<$this->tagName type='$this->type'>" . implode("", $html) . "</$this->tagName >";
    }
}
