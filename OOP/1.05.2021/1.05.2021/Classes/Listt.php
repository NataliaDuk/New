<?php



class Listt
{
    protected array $arr;
    protected string $type;
    protected string $tag;

    public function __construct($arr)
    {
        $this->arr = $arr;
    }

    /**
     * @param array $arr
     * @return Listt
     */
    public function setArr(array $arr): static
    {
        $this->arr = $arr;
        return $this;
    }

    /**
     * @param string $type
     * @return Listt
     */
    public function setType(string $type): static
    {
        $this->type = $type;
        return $this;
    }


    /**
     * @param string $tag
     * @return Listt
     */
    public function setTag(string $tag): static
    {
        $this->tag = $tag;
        return $this;
    }

    public function html(): string
    {
        $html = "<$this->tag type='$this->type'>";
        foreach ($this->arr as $value) {
            $html .= "<li>$value</li>";
        }
        $html .= "</$this->tag>";
        return $html;
    }
}