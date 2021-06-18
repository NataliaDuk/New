<?php


namespace W1020;


class CRUD extends Db
{
    protected string $tableName;
    protected string $idName = "id";

    public function __construct(array $config)
    {
        parent::__construct($config);
        $this->setTableName($config["table"]);
    }

    /**
     * @param string $tableName
     * @return $this
     */
    public function setTableName(string $tableName)
    {
        $this->tableName = $tableName;
        return $this;
    }

    /**
     * @param string $idName
     * @return CRUD
     */
    public function setIdName(string $idName)
    {
        $this->idName = $idName;
        return $this;
    }

    /** читает данные из таблицы
     * @return array
     */
    public function get(): array
    {
        return $this->query("SELECT * FROM $this->tableName;");
    }

    /** удаляет строку из таблицы
     * @param $id
     * @return bool
     */
    public function del($id): bool
    {
        return $this->runSQL("DELETE FROM $this->tableName  WHERE $this->idName=$id;");
    }

    /** добавляет строку в таблицу
     * @param array $data
     * @return bool
     */
    public function ins(array $data): bool
    {
//        $columns = array_keys($data);
//        $stringColumns = "`" . implode('`, `', $columns) . "`";
//        $stringValues = "'" . implode("', '", $data) . "'";
//        $sql = "INSERT INTO `$this->tableName` ($stringColumns) VALUES ($stringValues);";
//        return $this->runSQL($sql);

        return $this->runSQL("INSERT INTO `$this->tableName`" .
            " (`" . implode('`, `', array_keys($data)) . "`)" .
            " VALUES ('" . implode("', '", $data) . "');");
    }

    /** Изменяет стоку в таблице
     * @param int $id
     * @param array $data
     * @return bool
     */
    public function upd(int $id, array $data): bool
    {
        $arr = [];
        foreach ($data as $column => $value) {
            $arr[] = "`$column` = '$value'";
        }
        $set = implode(", ", $arr);

        $sql = "UPDATE `$this->tableName` SET $set WHERE `$this->idName` = $id;";

        return $this->runSQL($sql);
    }
}