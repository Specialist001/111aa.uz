<?php

class Controller_Sidebar extends Controller
{
    function action_index()
    {
        $this->view->generateSidebar('sidebar_view.php', 'template_view.php');
    }
}