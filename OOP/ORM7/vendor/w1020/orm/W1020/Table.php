<?php


namespace W1020;


class Table extends CRUD
{
    protected int $pageSize;

    /**
     * @return int
     * @throws \Exception
     */
    public function rowCount(): int
    {
        return $this->query("SELECT COUNT(*) as COUNT FROM `$this->tableName`")[0]["COUNT"];
    }

    /**
     * @param int $pageSize
     * @return $this
     */
    public function setPageSize(int $pageSize)
    {
        $this->pageSize = $pageSize;
        return $this;
    }


    /**
     * @return int
     * @throws \Exception
     */
    public function pageCount(): int
    {
        return ceil($this->rowCount() / $this->pageSize);

    }

    /**
     * @param int $page
     * @return array
     */
    public function getPage(int $page = 1): array
    {
        return $this->query(
            "SELECT * FROM `$this->tableName` LIMIT " . (($page - 1) * $this->pageSize) . " ,$this->pageSize;"
        );
    }

}