<?php

namespace W1020;

class Db
{
    protected \mysqli $mysqli;

    public function __construct(array $config)
    {
        $this->mysqli = new \mysqli($config["servername"], $config["username"], $config["password"], $config["dbname"]);
    }

    /**
     * @param string $sql
     * @return array
     * @throws \Exception
     */
    public function query(string $sql): array
    {
        $result = $this->runSQL($sql);

        if (is_object($result)) {
            $res = [];

            while ($row = $result->fetch_assoc()) {
                $res[] = $row;
            }
            return $res;
        } else {
            throw new \Exception('Ошибка выполнения sql запроса');
        }
//        return $result;
    }

    /** Выполняет sql запрос
     * @param string $sql
     * @return object|bool
     */
    public function runSQL(string $sql)
    {
        return $this->mysqli->query($sql);
    }
}