<?php

class HomeController extends Controller
{
    public function index()
    {
        $cards = array(
            array('label' => 'Alunos', 'value' => 'Modulo inicial'),
            array('label' => 'MVC', 'value' => 'Estrutura criada'),
            array('label' => 'Rotas', 'value' => 'Funcionando')
        );

        $this->view('home.index', array(
            'title' => 'Inicio',
            'cards' => $cards
        ));
    }
}
