<?php $pageTitle = $pageTitle ?? 'TaskFlow';
$prefix = (strpos($_SERVER['PHP_SELF'], '/tarefas/') !== false || strpos($_SERVER['PHP_SELF'], '/chamados/') !== false) ? '../' : ''; ?>
<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?= htmlspecialchars($pageTitle) ?> | TaskFlow</title>
    <link rel="stylesheet" href="<?= $prefix ?>assets/css/style.css">
</head>

<body>
    <header class="top"><b style="font-size:23px">◈ TaskFlow</b>
        <nav><a href="<?= $prefix ?>index.php">Dashboard</a><a href="<?= $prefix ?>tarefas/index.php">Tarefas</a><a href="<?= $prefix ?>chamados/index.php">Central de chamados</a></nav><small>Treinamento · sem login</small>
    </header>
    <main class="wrap">