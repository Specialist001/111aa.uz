<?php
class Services_Controller extends Controller
{
    function __construct()
    {
        $this->model = new Model_Services();
        $this->view  = new View();
    }

    function action_index()
    {
        $data = $this->model->get_data();
        $this->view->generate('Services_view.php', 'Template_view.php', $data);
    }
}