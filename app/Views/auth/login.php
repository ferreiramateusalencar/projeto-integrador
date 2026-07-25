<section class="page-header compact">
    <p class="eyebrow">Acesso</p>
    <h1>Login</h1>
    <p>Formulario inicial para validar o fluxo de autenticacao e sessoes.</p>
</section>

<section class="panel narrow">
    <form class="form" action="<?= e(url('/login')) ?>" method="post" novalidate>
        <label for="email">E-mail</label>
        <input id="email" name="email" type="email" value="<?= e($old['email'] ?? '') ?>" placeholder="admin@escola.com">
        <?php if (isset($errors['email'])): ?>
            <small class="error"><?= e($errors['email']) ?></small>
        <?php endif; ?>

        <label for="senha">Senha</label>
        <input id="senha" name="senha" type="password" placeholder="Digite sua senha">
        <?php if (isset($errors['senha'])): ?>
            <small class="error"><?= e($errors['senha']) ?></small>
        <?php endif; ?>

        <button class="button full" type="submit">Entrar</button>
    </form>
</section>
