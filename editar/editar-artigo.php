<h1>Editar Artigo</h1>
<?php
$sql = "SELECT * FROM artigo WHERE id_artigo=".$_REQUEST['id_artigo'];
$res = $conn->query($sql);
$row = $res->fetch_object();
?>
<form action="?page=salvar-artigo" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_artigo" value="<?php print $row->id_artigo; ?>">
    <div class="mb-3">
        <label>Nome do Autor
            <select name="autor_id_autor" class="form-control">
                <option>Autores</option>
                <?php
                    $sql_1 = "SELECT * FROM autor";
                    $res_1 = $conn->query($sql_1);
                    $qtd_1 = $res_1->num_rows;

                    if($qtd_1 > 0){
                        while($row_1 = $res_1->fetch_object()){
                            if($row->autor_id_autor == $row_1->id_autor){
                                print "<option value='{$row_1->id_autor}'selected>{$row_1->nome_autor}</option>";
                            }else{
                                print "<option value='{$row_1->id_autor}'>{$row_1->nome_autor}</option>";
                            }
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
            <select name="autor_id_autor" class='form-control'>
                <option>Formação</option>
                <?php
                    $sql_1 = "SELECT * FROM autor";
                    $res_1 = $conn->query($sql_1);
                    $qtd_1 = $res_1->num_rows;
                    
                    if($qtd_1 > 0){
                        while($row_1 = $res_1->fetch_object()){
                            if($row->autor_id_autor == $row_1->id_autor){
                                print "<option value='{$row_1->id_autor}'selected>{$row_1->formacao_autor}</option>";
                            }else{
                                print "<option value='{$row_1->id_autor}'>{$row_1->formacao_autor}</option>";
                            }
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
                    $sql_1 = "SELECT * FROM categoria";
                    $res_1 = $conn->query($sql_1);
                    $qtd_1 = $res_1->num_rows;

                    if($qtd_1 > 0){
                        while($row_1 = $res_1->fetch_object()){
                            if($row->categoria_id_categoria == $row_1->id_categoria){
                                print "<option value='{$row_1->id_categoria}'selected>{$row_1->nome_categoria}</option>";
                            }else{
                                print "<option value='{$row_1->id_categoria}'>{$row_1->nome_categoria}</option>";
                            }
                        }
                    }else{
                            print "<option>Não há categoria cadastrada</option>";
                    }
                ?>
            </select>
        </label>
    </div>
    <div class="mb-3">
        <label>Título
            <input type="text" name="titulo_artigo" class="form-control" value="<?php print $row->titulo_artigo; ?>">
        </label>
    </div>
    <div class="mb-3">
        <label>Data de Publicação
            <input type="date" name="data_publi_artigo" class="form-control" value="<?php print $row->data_publi_artigo; ?>">
        </label>
    </div>
    <div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>