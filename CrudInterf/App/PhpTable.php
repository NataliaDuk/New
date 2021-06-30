<?php


namespace APP;


class PhpTable extends AbstractTable implements ICrud
{

    public function read(): array
    {
        if (file_exists($this->fileName)) {
            return include $this->fileName;
        } else {
            return [];
        }
    }

   protected function save(array $table): void
    {
        file_put_contents($this->fileName, "<?php return " . var_export(($table), true) . ";");
    }

}