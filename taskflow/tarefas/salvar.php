<?php require '../config/database.php';

$id = (int)($_POST['id'] ?? 0);

$d = [trim($_POST['titulo'] ?? ''), trim($_POST['descricao'] ?? ''), trim($_POST['responsavel'] ?? ''), $_POST['categoria'] ?? 'Geral', $_POST['prazo'] ?? date('Y-m-d'), $_POST['prioridade'] ?? 'Média', $_POST['status'] ?? 'Pendente'];
if ($id) {
    $q = $pdo->prepare('UPDATE tarefas SET titulo=?,descricao=?,responsavel=?,categoria=?,prazo=?,prioridade=? WHERE id=?');
    $q->execute([$d[0], $d[1], $d[2], $d[3], $d[4], $d[5], $id]);
    header('Location: index.php');
    exit;
}
if ($d[0] !== '') {
    header('Location: form.php?erro=1');
    exit;
}
$q = $pdo->prepare('INSERT INTO tarefas(titulo,descricao,responsavel,categoria,prazo,prioridade,status) VALUES(?,?,?,?,?,?,?)');
$q->execute($d);
header('Location: index.php');
exit;
?>
