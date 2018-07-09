<?php

class Login_Controller extends Controller
{
    function action_index()
    {
        if (isset($_POST['login']) && isset($_POST['password'])) {
            $login = $_POST['login'];
            $password = $_POST['password'];

            if ($login == "admin" && $password == "12345") {
                $data["login_status"] = "access_granted";

                session_start();
                echo $_SESSION['admin'];
                $_SESSION['admin'] = $password;
                header('Location: /admin/');
            }
            else{
                $data["login_status"] = "access_denied";
            }
        }
        else{
            $data["login_status"] = "";
        }

        $this->view->generate('Login_view.php', 'Template_view.php', $data);
    }
}