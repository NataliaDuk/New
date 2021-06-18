<?php


namespace W1020;


class Table extends CRUD
{
    protected int $pageSize;

    /**
     * @return int;
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
    public function setPageSize(int $pageSize): static
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
            "SELECT * FROM $this->tableName LIMIT " . (($page - 1) * $this->pageSize) . ",$this->pageSize;"
        );
    }

    /**
     * @return array
     */
    public function columnsInfo(): array
    {
        $table = $this->query(
            "SHOW COLUMNS FROM `$this->tableName`;"
        );
        $result = [];
        foreach ($table as $field) {
            if ($field['Field'] != $this->idName) {
                $result[$field['Field']] = $field['Type'];
            }
        }
        return $result;
    }

    /**
     * @return array
     */
    public function columns(): array
    {
        $info = $this->columnsInfo();
        return array_keys($info);
    }

    /**
     * @return array
     */
    public function columnComments(): array
    {
        $table = $this->query(
            "SHOW FULL COLUMNS FROM `$this->tableName`;"
        );
        $result = [];
        foreach ($table as $field) {
            if ($field['Field'] != $this->idName) {
                $result[$field['Field']] = $field['Comment'];
            }
        }
        return $result;
    }
}