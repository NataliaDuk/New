<?php

abstract class TList
{
    protected array $data;
    protected string $type;
    protected string $tagName;

    /**
     * TList constructor.
     * @param $data
     */
    public function __construct($data)
    {
        $this->data = $data;
        $this->tagName = strtolower(get_class($this));
    }

    /**
     * @param array $data
     * @return TList
     */
    public function setData(array $data): static
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @param string $type
     * @return TList
     */
    public function setType(string $type): static
    {
        $this->type = $type;
        return $this;
    }

    public function html(): string
    {
        $html = "";
        foreach ($this->data as $value) {
            $html .= "\t<li>$value</li>\n";
        }

        return "<$this->tagName type='$this->type'>\n$html</$this->tagName >";
    }
}