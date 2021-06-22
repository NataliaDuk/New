<?php


namespace APP\View;

class View
{
    protected array $data;
    protected string $template;

    /**
     * @param array $data
     * @return $this
     */
    public function setData(array $data): static
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @param string $template
     * @return $this
     */
    public function setTemplate(string $template): static
    {
       $this->template=$template;
        return $this;
    }

    public function view()
    {
        include __DIR__ . "/../../templates/main.php";
    }

    public function body()
    {
        include __DIR__ . "/../../templates/$this->template.php";
    }

}