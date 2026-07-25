<section class="page-header compact">
    <p class="eyebrow">Painel</p>
    <h1>Dashboard</h1>
    <p>Area inicial para acompanhar os modulos principais da gestao escolar.</p>
</section>

<section class="panel">
    <?php if ($usuario): ?>
        <p class="success">Sessao ativa para <?= e($usuario['nome']) ?>, perfil <?= e($usuario['perfil']) ?>.</p>
    <?php else: ?>
        <p class="notice">Nenhum usuario autenticado. A protecao de rotas sera aprofundada na etapa de autenticacao.</p>
    <?php endif; ?>

    <div class="module-grid">
        <a href="<?= e(url('/alunos')) ?>">Alunos</a>
        <a href="<?= e(url('/professores')) ?>">Professores</a>
        <a href="<?= e(url('/turmas')) ?>">Turmas</a>
        <a href="<?= e(url('/disciplinas')) ?>">Disciplinas</a>
        <a href="<?= e(url('/matriculas')) ?>">Matriculas</a>
        <a href="<?= e(url('/usuarios')) ?>">Usuarios</a>
    </div>
</section>
