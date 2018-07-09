<?php

class Portfolio_Controller extends Controller
{
    function __construct()
    {
        $this->model = new Model_Portfolio();
        $this->view  = new View();
    }

    function action_index()
    {
        $data = $this->model->get_data();
        $this->view->generate('Portfolio_view.php', 'Template_view.php', $data);
    }
}