<section class="page-header">
    <p class="eyebrow">Projeto Integrador</p>
    <h1>Base MVC do Sistema de Gestao Escolar</h1>
    <p>Aplicacao em PHP organizada com controllers, views, rotas amigaveis e estrutura inicial para evoluir o CRUD escolar.</p>
</section>

<section class="summary-grid" aria-label="Resumo da implementacao">
    <?php foreach ($cards as $card): ?>
        <article class="summary-card">
            <span><?= e($card['label']) ?></span>
            <strong><?= e($card['value']) ?></strong>
        </article>
    <?php endforeach; ?>
</section>

<section class="panel">
    <div class="panel-header">
        <h2>Rotas iniciais</h2>
        <a class="button" href="<?= e(url('/alunos')) ?>">Abrir alunos</a>
    </div>
    <div class="route-list">
        <code>/</code>
        <code>/dashboard</code>
        <code>/login</code>
        <code>/alunos</code>
        <code>/alunos/criar</code>
        <code>/professores</code>
        <code>/turmas</code>
        <code>/disciplinas</code>
        <code>/matriculas</code>
    </div>
</section>
