<section class="page-header compact">
    <p class="eyebrow">Cadastro</p>
    <h1>Alunos</h1>
    <p>Modulo inicial com listagem, formulario e rotas preparadas para CRUD.</p>
</section>

<?php if ($message): ?>
    <p class="success"><?= e($message) ?></p>
<?php endif; ?>

<section class="panel">
    <div class="panel-header">
        <h2>Alunos cadastrados</h2>
        <a class="button" href="<?= e(url('/alunos/criar')) ?>">Novo aluno</a>
    </div>

    <div class="table-wrap">
        <table>
            <thead>
                <tr>
                    <th>Matricula</th>
                    <th>Nome</th>
                    <th>Turma</th>
                    <th>Acoes</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($alunos as $aluno): ?>
                    <tr>
                        <td><?= e($aluno['matricula']) ?></td>
                        <td><?= e($aluno['nome']) ?></td>
                        <td><?= e($aluno['turma']) ?></td>
                        <td class="actions">
                            <a href="<?= e(url('/alunos/editar/' . $aluno['id'])) ?>">Editar</a>
                            <form action="<?= e(url('/alunos/excluir/' . $aluno['id'])) ?>" method="post">
                                <button type="submit">Excluir</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>
