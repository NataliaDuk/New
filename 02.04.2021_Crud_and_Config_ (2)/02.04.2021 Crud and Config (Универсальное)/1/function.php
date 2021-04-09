<?php
/**
 * функция возвращает список полей таблицы, в саму функцию передаем подключение и имя таблицы
 * @param $dbLink
 * @param $tableName
 * @return array
 */
function fieldsList($dbLink, $tableName): array
{
    $sql = "SHOW COLUMNS FROM $tableName";
    $result = mysqli_query($dbLink, $sql);
    $fields = [];

    while ($row = mysqli_fetch_assoc($result)) {
        if ($row["Field"] != "id") {
            $fields[] = $row["Field"];
        }
    }

    return $fields;

}