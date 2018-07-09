<?php

class About_Controller extends Controller
{
    function action_index()
    {
        $this->view->generate('About_view.php', 'Template_view.php');
    }
}