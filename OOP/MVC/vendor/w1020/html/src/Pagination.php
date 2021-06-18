<?php


namespace W1020\HTML;


class Pagination
{
    protected int $pageCount;
    protected int $activePage;
    protected string $urlPrefix = "?page=";

    /**
     * @param int $pageCount
     * @return $this
     */
    public function setPageCount(int $pageCount)
    {
        $this->pageCount = $pageCount;
        return $this;
    }

    /**
     * @param int $activePage
     * @return $this
     */
    public function setActivePage(int $activePage)
    {
        $this->activePage = $activePage;
        return $this;
    }

    /**
     * @param string $urlPrefix
     * @return $this
     */
    public function setUrlPrefix(string $urlPrefix)
    {
        $this->urlPrefix = $urlPrefix;
        return $this;
    }


    public function html()
    {
        $previous = max(1, $this->activePage - 1);
        $html = <<<EOT
<nav aria-label="...">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="$this->urlPrefix$previous">&laquo;</a>
    </li>
EOT;

        for ($i = 1; $i <= $this->pageCount; $i++) {
            $html .= "<li class='page-item" . ($i == $this->activePage ? " active" : "") .
                "'><a class='page-link' href='$this->urlPrefix$i'>$i</a></li>";

        }

        $next = min($this->pageCount, $this->activePage + 1);
        $html .= <<<EOT
    <li class="page-item">
      <a class="page-link" href="$this->urlPrefix$next">&raquo;</a>
    </li>
  </ul>
</nav>
EOT;
        return $html;
    }

}