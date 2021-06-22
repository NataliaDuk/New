<?php


namespace APP\Controller;
use APP\View\View;

class Main extends AbstractController
{
    protected View $view;
    public function __construct()
    {
        $this->view = new View();
    }
    public function actionIndex()
    {
        $this
            ->view
            ->setTemplate("Main/index")
            ->view();
    }
}