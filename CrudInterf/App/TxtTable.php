<?php

namespace APP;

class TxtTable extends AbstractTable //implements ICrud
{
    protected string $fileName;

    /**
     * @param string $fileName
     */
    public function setFileName(string $fileName): static
    {
        $this->fileName = $fileName;
        return $this;
    }

    /**
     * JsonTable constructor.
     * @param string $fileName
     */
    public function __construct(string $fileName)
    {
        $this->setFileName($fileName);
    }

    /**
     * @return array
     */
    public function read(): array
    {
        if (file_exists($this->fileName)) {
            return json_decode(file_get_contents($this->fileName), true);
        } else {
            return [];
        }
    }



    protected function save(array $table): void
    {
        file_put_contents($this->fileName, json_encode($table, JSON_FORCE_OBJECT));
    }
}