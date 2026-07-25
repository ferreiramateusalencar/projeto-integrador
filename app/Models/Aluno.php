<?php

class Aluno
{
    public function listarTodos()
    {
        return array(
            array('id' => 1, 'nome' => 'Ana Silva', 'email' => 'ana@escola.com', 'matricula' => '2026001', 'turma' => '1A'),
            array('id' => 2, 'nome' => 'Bruno Santos', 'email' => 'bruno@escola.com', 'matricula' => '2026002', 'turma' => '2B')
        );
    }

    public function buscarPorId($id)
    {
        $alunos = $this->listarTodos();

        foreach ($alunos as $aluno) {
            if ($aluno['id'] == $id) {
                return $aluno;
            }
        }

        return null;
    }
}
