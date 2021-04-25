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
        $html = "";
        array_map(function ($li) {
          return "\t<li>$li</li>\n";
        }, $this->data);
        //        foreach ($this->data as $value) {
//            $html .= "\t<li>$value</li>\n";
//        }

        return "<$this->tagName type='$this->type'>\n$html</$this->tagName >";
    }
}
