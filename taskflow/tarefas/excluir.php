<?php require '../config/database.php';
$id = (int)($_GET['id'] ?? 0);
if ($id) {
    $q = $pdo->prepare('DELETE FROM tarefas WHERE id=?');
    $q->execute([$id]);
}
header('Location: index.php');
exit;
