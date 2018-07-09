<?php

class Main_Controller extends Controller
{
    function action_index()
    {
        $this->view->generate('Main_view.php', 'Template_view.php');
    }
}