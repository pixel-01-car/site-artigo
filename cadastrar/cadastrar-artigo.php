<h1>Cadastrar Artigo</h1>
<form action="?page=salvar-artigo" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome do Autor
            <select name="autor_id_autor" class="form-control">
                <option>Autores</option>
                <?php
                    $sql = "SELECT * FROM autor";
                    $res = $conn->query($sql);
                    $qtd = $res->num_rows;
                    if($qtd > 0){
                        while($row = $res->fetch_object()){
                            print "<option value='{$row->id_autor}'>{$row->nome_autor}</option>";
                        }
                    }else{
                            print "<option>Não há autor cadastrado</option>";
                        }
                ?>
            </select>
        </label>
    </div>
    <div class="mb-3">
        <label>Formação
            <select name="autor_id_autor" class="form-control">
                    <option>Formação</option>
                    <?php
                        $sql = "SELECT * FROM autor";
                        $res = $conn->query($sql);
                        $qtd = $res->num_rows;

                        if($qtd > 0){
                            while($row = $res->fetch_object()){
                                print "<option value='{$row->id_autor}'>{$row->formacao_autor}</option>";
                            }
                        }else{
                                print "<option>Não há formação de autor cadastrado</option>";
                        }
                    ?>
            </select>
        </label>
    </div>
    <div class="mb-3">
        <label>Nome da Categoria
            <select name="categoria_id_categoria" class="form-control">
                <option>Categorias</option>
                <?php
                    $sql = "SELECT * FROM categoria";
                    $res = $conn->query($sql);
                    $qtd = $res->num_rows;
                    if($qtd > 0){
                        while($row = $res->fetch_object()){
                            print "<option value='{$row->id_categoria}'>{$row->nome_categoria}</option>";
                        }
                    }else{
                        print "<option>Não há categoria cadastrada</option>";
                    }
                ?>
            </select>
        </label>
    </div>
    <div class="mb-3">
        <label>Título do Artigo
            <input type="text" name="titulo_artigo" class="form-control">
        </label>
    </div>
    <div class="mb-3">
        <label>Data de Publicação
            <input type="date" name="data_publi_artigo" class="form-control">
        </label>
    </div>
    <div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>