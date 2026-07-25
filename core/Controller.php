<?php

class Controller
{
    protected function view($view, $data = array())
    {
        $viewFile = VIEW_PATH . '/' . str_replace('.', '/', $view) . '.php';

        if (!file_exists($viewFile)) {
            die('View nao encontrada: ' . $view);
        }

        extract($data);
        require VIEW_PATH . '/layouts/main.php';
    }

    protected function redirect($path)
    {
        header('Location: ' . url($path));
        exit;
    }
}
