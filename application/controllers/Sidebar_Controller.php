<?php

class Sidebar_Controller extends Controller
{
    function action_index()
    {
        $this->view->generateSidebar('Sidebar_view.php', 'Template_view.php');
    }
}