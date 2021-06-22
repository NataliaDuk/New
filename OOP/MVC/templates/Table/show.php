<?php

use W1020\HTML\Table;

echo (new Table())
    ->setData($this->data["table"])
    ->setHeaders($this->data["comments"])
    ->setClass("table table-secondary")
    ->addColumn(fn($row) => "<a href='?type=Table&action=del&id=$row[id]'>Удалить</a>")
    ->addColumn(fn($row) => "<a href='?type=Table&action=showedit&id=$row[id]'>Редактировать</a>")
    ->html();
?>
<a href="?type=Table&action=showadd" class="btn btn-primary">Добавить</a>
