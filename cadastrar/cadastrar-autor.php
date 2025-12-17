<h1>Cadastrar Autor</h1>
<form action="?page=salvar-autor" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome
            <input type="text" name="nome_autor" class="form-control">
        </label>
    </div>
    <div class="mb-3">
        <label>Formação
            <input type="text" name="formacao_autor" class="form-control">
        </label>
    </div>
    <div class="mb-3">
        <label>E-mail
            <input type="email" name="email_autor" class="form-control">
        </label>
    </div>
    <div class="mb-3">
        <label>Data de Nascimento
            <input type="date" name="data_nasc_autor" class="form-control">
        </label>
    </div>
    <div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>