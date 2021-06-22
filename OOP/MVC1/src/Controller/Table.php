<?php

namespace APP\Controller;

use APP\View\View;
use W1020\Table as ORMTable;

class Table
{
    protected ORMTable $model;
    protected View $view;

    public function __construct()
    {
        $config = include __DIR__ . "/../../config.php";

        $this->model = new ORMTable($config);
        $this->view = new View();
    }

    public function show()
    {
//        print_r($this->model->get());
        $this
            ->view
            ->setData($this->model->get())
            ->setTemplate("Table/show")
            ->view();
    }
}