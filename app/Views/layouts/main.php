<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= e($title ?? 'Sistema Escolar') ?> | Sistema Escolar</title>
    <link rel="stylesheet" href="<?= e(url('/css/style.css')) ?>">
</head>
<body>
    <header class="topbar">
        <a class="brand" href="<?= e(url('/')) ?>">Sistema Escolar</a>
        <nav class="nav" aria-label="Menu principal">
            <a class="<?= e(isActive('/')) ?>" href="<?= e(url('/')) ?>">Inicio</a>
            <a class="<?= e(isActive('/dashboard')) ?>" href="<?= e(url('/dashboard')) ?>">Dashboard</a>
            <a class="<?= e(isActive('/alunos')) ?>" href="<?= e(url('/alunos')) ?>">Alunos</a>
            <a class="<?= e(isActive('/professores')) ?>" href="<?= e(url('/professores')) ?>">Professores</a>
            <a class="<?= e(isActive('/turmas')) ?>" href="<?= e(url('/turmas')) ?>">Turmas</a>
            <a class="<?= e(isActive('/disciplinas')) ?>" href="<?= e(url('/disciplinas')) ?>">Disciplinas</a>
            <a class="<?= e(isActive('/matriculas')) ?>" href="<?= e(url('/matriculas')) ?>">Matriculas</a>
            <a class="<?= e(isActive('/login')) ?>" href="<?= e(url('/login')) ?>">Login</a>
        </nav>
    </header>

    <main class="page">
        <?php require $viewFile; ?>
    </main>

    <script src="<?= e(url('/js/app.js')) ?>"></script>
</body>
</html>
