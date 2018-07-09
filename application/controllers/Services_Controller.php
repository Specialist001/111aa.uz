<?php
class Services_Controller extends Controller
{

    function action_index()
    {
        $this->view->generate('Services_view.php', 'Template_view.php');
    }
}