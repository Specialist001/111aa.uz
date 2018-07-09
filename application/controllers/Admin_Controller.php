<?php

class Admin_Controller extends Controller
{
    function action_index()
    {
        session_start();

        if ($_SESSION['admin'] == "12345") {
            $this->view->generate('Admin_view.php', 'Template_view.php');
        }
        else {
            session_destroy();
            Route::ErrorPage404();
        }
    }

    // Действие для разлогинивания администратора
    function action_logout()
    {
        session_start();
        session_destroy();
        header('Location: /');
    }
}