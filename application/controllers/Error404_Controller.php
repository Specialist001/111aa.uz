<?php

class Error404_Controller extends Controller
{

    function action_index()
    {
        $this->view->generate('Error404_view.php', 'Template_view.php');
    }

}