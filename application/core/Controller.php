<?php

class Controller
{
    public $model;
    public $view;

    function __construct()
    {
        //$this->model = new Model_Portfolio();
        $this->view = new View();
    }

    function action_index()
    {

    }
}