<h1>Listar Artigo</h1>
<?php
$sql = "SELECT * FROM artigo AS ar
        INNER JOIN autor AS au ON ar.autor_id_autor = au.id_autor
        INNER JOIN categoria AS cat ON ar.categoria_id_categoria = cat.id_categoria";

        $res = $conn->query($sql);

        $qtd = $res->num_rows;

        if($qtd > 0){
            print "<p>Encontrou <br>$qtd</br> resultado(s)</p>";
            print "<table class='table table-bordered table-striped table-houver'>";
            print "<tr>";
            print "<th>#</th>";
            print "<th>Autor</th>";
            print "<th>Formação</th>";
            print "<th>Categoria</th>";
            print "<th>Titulo</th>";
            print "<th>Data de Publicação</th>";
            print "<th>Ações</th>";
            print "</tr>";
            while($row = $res->fetch_object()){
                print "<tr>";
                print "<td>{$row->id_artigo}</td>";
                print "<td>{$row->nome_autor}</td>";
                print "<td>{$row->formacao_autor}</td>";
                print "<td>{$row->nome_categoria}</td>";
                print "<td>{$row->titulo_artigo}</td>";
                print "<td>{$row->data_publi_artigo}</td>";
                print "<td>
                
                        <button class='btn btn-success' onclick=\"location.href='?page=editar-artigo&id_artigo={$row->id_artigo}';\">Editar</button>

                        <button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-artigo&acao=excluir&id_artigo={$row->id_artigo}';}else{false;}\">Excluir</button>
                </td>";
                print "</tr>";
            }
                print "</table>";
        }else{
                print "<p>Não encontrou resultado</p>";
        }
?>
