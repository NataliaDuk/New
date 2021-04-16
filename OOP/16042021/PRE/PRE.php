<?php
class Pre
{
    protected string $innerText;

    /**
     * @param string $innerText
     * @return Pre
     */
    public function setInnerText(string $innerText): static
    {
        $this->innerText = $innerText;
        return $this;
    }

    public function html(): string
    {
        return "<pre>$this->innerText</pre>";
    }
}

