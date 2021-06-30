<?php

namespace APP;
interface ICrud
{
    /** метод, который добавляет строку данных в таблицу
     * @return $this
     */
    public function create(array $row): static;

    /**метод, который возвращает всю таблицу
     * @return array
     */
    public function read(): array;

    /**метод, который изменяет строку данных в таблице
     * @return $this
     */
    public function update(int $id, array $row): static;
    /**метод, который удаляет строку данных в таблице
     * @return $this
     */
    public function delete(int $id): static;
}