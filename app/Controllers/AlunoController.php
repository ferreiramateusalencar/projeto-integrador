<?php

class AlunoController extends Controller
{
    public function index()
    {
        $alunoModel = new Aluno();
        $alunos = $alunoModel->listarTodos();

        $message = null;

        if (isset($_SESSION['message'])) {
            $message = $_SESSION['message'];
            unset($_SESSION['message']);
        }

        $this->view('alunos.index', array(
            'title' => 'Alunos',
            'alunos' => $alunos,
            'message' => $message
        ));
    }

    public function create($errors = array(), $old = array())
    {
        $this->view('alunos.create', array(
            'title' => 'Novo aluno',
            'errors' => $errors,
            'old' => $old
        ));
    }

    public function store()
    {
        $old = array(
            'nome' => isset($_POST['nome']) ? trim($_POST['nome']) : '',
            'email' => isset($_POST['email']) ? trim($_POST['email']) : '',
            'matricula' => isset($_POST['matricula']) ? trim($_POST['matricula']) : '',
            'turma' => isset($_POST['turma']) ? trim($_POST['turma']) : ''
        );

        $errors = $this->validate($old);

        if (!empty($errors)) {
            $this->create($errors, $old);
            return;
        }

        $_SESSION['message'] = 'Aluno validado com sucesso. O banco de dados sera ligado na proxima etapa.';
        $this->redirect('/alunos');
    }

    public function edit($id)
    {
        $alunoModel = new Aluno();
        $aluno = $alunoModel->buscarPorId($id);

        if ($aluno == null) {
            $_SESSION['message'] = 'Aluno nao encontrado.';
            $this->redirect('/alunos');
        }

        $this->view('alunos.create', array(
            'title' => 'Editar aluno',
            'errors' => array(),
            'old' => $aluno,
            'editing' => true,
            'id' => $id
        ));
    }

    public function update($id)
    {
        $_SESSION['message'] = 'Aluno #' . $id . ' validado para atualizacao. O banco de dados sera ligado na proxima etapa.';
        $this->redirect('/alunos');
    }

    public function delete($id)
    {
        $_SESSION['message'] = 'Aluno #' . $id . ' marcado para exclusao. O banco de dados sera ligado na proxima etapa.';
        $this->redirect('/alunos');
    }

    private function validate($data)
    {
        $errors = array();

        if ($data['nome'] == '') {
            $errors['nome'] = 'Informe o nome do aluno.';
        }

        if ($data['email'] == '') {
            $errors['email'] = 'Informe o e-mail do aluno.';
        } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Informe um e-mail valido.';
        }

        if ($data['matricula'] == '') {
            $errors['matricula'] = 'Informe a matricula.';
        }

        if ($data['turma'] == '') {
            $errors['turma'] = 'Informe a turma.';
        }

        return $errors;
    }
}
