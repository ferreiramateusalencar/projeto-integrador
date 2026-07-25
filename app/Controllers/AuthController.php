<?php

class AuthController extends Controller
{
    public function login($errors = array(), $old = array())
    {
        $this->view('auth.login', array(
            'title' => 'Login',
            'errors' => $errors,
            'old' => $old
        ));
    }

    public function authenticate()
    {
        $email = isset($_POST['email']) ? trim($_POST['email']) : '';
        $senha = isset($_POST['senha']) ? trim($_POST['senha']) : '';
        $errors = array();

        if ($email == '') {
            $errors['email'] = 'Informe o e-mail.';
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Informe um e-mail valido.';
        }

        if ($senha == '') {
            $errors['senha'] = 'Informe a senha.';
        }

        if (!empty($errors)) {
            $this->login($errors, array('email' => $email));
            return;
        }

        $_SESSION['usuario'] = array(
            'nome' => 'Administrador',
            'email' => $email,
            'perfil' => 'Administrador'
        );

        $this->redirect('/dashboard');
    }

    public function logout()
    {
        session_destroy();
        $this->redirect('/login');
    }
}
