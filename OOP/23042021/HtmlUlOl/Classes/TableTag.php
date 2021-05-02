<?php
class TableTag
{
    protected array $data = [];
    protected array $headers = [];
    protected string $class = "";
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
     * @param array $headers
     * @return Table
     */
    public function setHeaders(array $headers): static
    {
        $this->headers = $headers;
        return $this;
    }
    /**
     * @param string $class
     * @return Table
     */
    public function setClass(string $class): static
    {
        $this->class = $class;
        return $this;
    }

    /**
     * @return string
     */
    public function html(): string
    {
        $header = "<tr>" . implode("", array_map(fn($cell) => "<th>$cell</th>", $this->headers)) . "</tr>";

        $html = array_map(
            fn($row) => "<tr>" . implode("", array_map(fn($cell) => "<td>$cell</td>", $row)) . "</tr>",
            $this->data
        );

        return "<table class='$this->class'>$header" . implode("", $html) . "</table>";

    }
}