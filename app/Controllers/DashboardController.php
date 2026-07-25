<?php

class DashboardController extends Controller
{
    public function index()
    {
        $usuario = null;

        if (isset($_SESSION['usuario'])) {
            $usuario = $_SESSION['usuario'];
        }

        $this->view('dashboard.index', array(
            'title' => 'Dashboard',
            'usuario' => $usuario
        ));
    }
}
