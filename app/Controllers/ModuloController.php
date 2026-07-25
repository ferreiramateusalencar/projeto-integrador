<?php

class ModuloController extends Controller
{
    public function professores()
    {
        $this->module('Professores', 'Cadastro e consulta de professores.');
    }

    public function turmas()
    {
        $this->module('Turmas', 'Organizacao de alunos por ano, serie ou periodo.');
    }

    public function disciplinas()
    {
        $this->module('Disciplinas', 'Cadastro das materias oferecidas pela escola.');
    }

    public function matriculas()
    {
        $this->module('Matriculas', 'Vinculo entre alunos, turmas e periodo letivo.');
    }

    public function usuarios()
    {
        $this->module('Usuarios', 'Controle de acesso e perfis do sistema.');
    }

    private function module($title, $description)
    {
        $this->view('modulos.show', array(
            'title' => $title,
            'description' => $description
        ));
    }
}
