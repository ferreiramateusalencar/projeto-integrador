<?php

class ErrorController extends Controller
{
    public function notFound()
    {
        $this->view('errors.404', array('title' => 'Pagina nao encontrada'));
    }

    public function methodNotAllowed()
    {
        $this->view('errors.405', array('title' => 'Metodo nao permitido'));
    }
}
