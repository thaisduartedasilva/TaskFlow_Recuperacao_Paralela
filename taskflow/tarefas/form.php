<?php require '../config/database.php';
$id=(int)($_GET['id']??0);
$t=['titulo'=>'','descricao'=>'','responsavel'=>'','categoria'=>'Geral','prazo'=>date('Y-m-d'),'prioridade'=>'Média','status'=>'Pendente'];
if($id){
    $q=$pdo->prepare('SELECT * FROM tarefas WHERE id=?');
    $q->execute([$id]);
    $t=$q->fetch()?:
    $t;
    }
    $pageTitle=$id?'Editar tarefa':'Nova tarefa';
    require '../includes/header.php';
?>
<div class="head">
    <h1><?=$pageTitle?></h1>
    <a class="btn gray" href="index.php">Voltar</a>
</div>

    <section class="panel">
        <form method="post" action="salvar.php" class="grid">
            <input type="hidden" name="id" value="<?=$id?>">
            <div class="field full"><label>Título *</label>
            <input name="titulo" required value="<?=htmlspecialchars($t['titulo'])?>"></div>
            <div class="field full">
                <label>Descrição</label>
                <textarea name="descricao"><?=htmlspecialchars($t['descricao'])?></textarea>
            </div>
            <div class="field">
                <label>Responsável *</label>
                <input name="responsavel" required value="<?=htmlspecialchars($t['responsavel'])?>"></div>
                <div class="field">
                    <label>Categoria</label>
                    <select name="categoria"><?php foreach(['Geral','Desenvolvimento','Documentação','Suporte','Qualidade'] as $v):?>
                        <option <?=$t['categoria']===$v?'selected':''?>><?=$v?></option>
                        <?php endforeach;?>
                    </select>
                </div>
                <div class="field">
                    <label>Prazo *</label>
                    <input type="date" name="prazo" required value="<?=$t['prazo']?>">
                </div>
                    <div class="field">
                        <label>Prioridade</label>
                        <select name="prioridade">
                            <?php foreach(['Baixa','Média','Alta'] as $v):?>
                                <option <?=$t['prioridade']===$v?'selected':''?>><?=$v?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                        <div class="field">
                            <label>Status</label>
                            <select name="status"><?php foreach(['Pendente','Em andamento','Concluída'] as $v):?>
                                <option <?=$t['status']===$v?'selected':''?>><?=$v?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                        <div class="field full">
                            <button class="btn">Gravar tarefa</button>
                        </div>
                    </form>
                </section>
                <?php require '../includes/footer.php';?>
