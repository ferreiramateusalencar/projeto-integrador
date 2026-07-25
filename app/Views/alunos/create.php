<section class="page-header compact">
    <p class="eyebrow">Formulario</p>
    <h1><?= e($title) ?></h1>
    <p>Validacao inicial dos campos obrigatorios do cadastro de alunos.</p>
</section>

<section class="panel">
    <form class="form grid" action="<?= e(isset($editing) ? url('/alunos/atualizar/' . $id) : url('/alunos/salvar')) ?>" method="post" enctype="multipart/form-data" novalidate>
        <div>
            <label for="nome">Nome completo</label>
            <input id="nome" name="nome" type="text" value="<?= e($old['nome'] ?? '') ?>">
            <?php if (isset($errors['nome'])): ?>
                <small class="error"><?= e($errors['nome']) ?></small>
            <?php endif; ?>
        </div>

        <div>
            <label for="email">E-mail</label>
            <input id="email" name="email" type="email" value="<?= e($old['email'] ?? '') ?>">
            <?php if (isset($errors['email'])): ?>
                <small class="error"><?= e($errors['email']) ?></small>
            <?php endif; ?>
        </div>

        <div>
            <label for="matricula">Matricula</label>
            <input id="matricula" name="matricula" type="text" value="<?= e($old['matricula'] ?? '') ?>">
            <?php if (isset($errors['matricula'])): ?>
                <small class="error"><?= e($errors['matricula']) ?></small>
            <?php endif; ?>
        </div>

        <div>
            <label for="turma">Turma</label>
            <input id="turma" name="turma" type="text" value="<?= e($old['turma'] ?? '') ?>">
            <?php if (isset($errors['turma'])): ?>
                <small class="error"><?= e($errors['turma']) ?></small>
            <?php endif; ?>
        </div>

        <div class="full-row">
            <label for="arquivo">Foto ou documento</label>
            <input id="arquivo" name="arquivo" type="file">
        </div>

        <div class="form-actions full-row">
            <a class="button secondary" href="<?= e(url('/alunos')) ?>">Cancelar</a>
            <button class="button" type="submit">Salvar</button>
        </div>
    </form>
</section>
