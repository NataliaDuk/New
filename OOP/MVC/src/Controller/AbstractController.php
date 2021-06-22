<?php


namespace APP\Controller;


abstract class AbstractController
{
    protected View $view;

    public function __construct()
    {
        $this->view = new View();
    }

    public function redirect(string $url): void
    {
        header("Location: $url");
    }
}