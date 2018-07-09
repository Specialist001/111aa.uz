<?php

class Contacts_Controller extends Controller
{
    function action_index()
    {
        $this->view->generate('Contacts_view.php', 'Template_view.php');
    }
}