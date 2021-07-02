<?php


namespace APP;


abstract class AbstractTable
{

    protected string $fileName;

    public function __construct(string $fileName)
    {
        $this->fileName = $fileName;
    }

    public function delete(int $id): static
    {
        $table = $this->read();
        unset($table[$id]);
        $this->save($table);
        return $this;
    }

    public
    function create(array $row): static
    {
        $table = $this->read();
        $table[] = $row;
        $this->save($table);
        return $this;
    }

    public function update(int $id, array $row): static
    {
        $table = $this->read();
        $table[$id] = $row;
        $this->save($table);
        return $this;
    }

    abstract public function read(): array;

    abstract protected function save(array $table): void;
}