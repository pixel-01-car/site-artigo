<h1>Editar Autor</h1>
<?php
$sql = "SELECT * FROM autor WHERE id_autor=".$_REQUEST['id_autor'];

$res = $conn->query($sql);
$row = $res->fetch_object();
?>
<form action="?page=salvar-autor" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_autor" value="<?php print $row->id_autor; ?>">
    <div class="mb-3">
        <label>Nome
            <input type="text" name="nome_autor" class="form-control" value="<?php print $row->nome_autor ?>">
        </label>
    </div>
    <div class="mb-3">
        <label>Formação
            <input type="text" name="formacao_autor" class="form-control" value="<?php print $row->formacao_autor; ?>">
        </label>
    </div>
    <div class="mb-3">
        <label>E-mail
            <input type="email" name="email_autor" class="form-control" value="<?php print $row->email_autor; ?>">
        </label>
    </div>
    <div class="mb-3">
        <label>Data de Nascimento
            <input type="date" name="data_nasc_autor" class="form-control" value="<?php print $row->data_nasc_autor; ?>">
        </label>
    </div>
    <div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>   