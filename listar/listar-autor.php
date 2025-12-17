<h1>Listar Autor</h1>
<?php 
$sql = "SELECT * FROM autor";
$res = $conn->query($sql);
$qtd = $res->num_rows;

if($qtd > 0){
    print "<p>Encontrou <br>$qtd</br> resultado(s)</p>";
    print "<table class= table table-bordered table-striped table-houver>";
    print "<tr>";
    print "<th>#</th>";
    print "<th>Nome</th>";
    print "<th>Formação</th>";
    print "<th>Email</th>";
    print "<th>Data de Nascimento</th>";
    print "</tr>";

    while($row = $res->fetch_object()){
        print "<tr>";
        print "<td>{$row->id_autor}</td>";
        print "<td>{$row->nome_autor}</td>";
        print "<td>{$row->formacao_autor}</td>";
        print "<td>{$row->email_autor}</td>";
        print "<td>{$row->data_nasc_autor}</td>";
        print "<td>
        
                <button class= 'btn btn-success' onclick=\"location.href='?page=editar-autor&id_autor={$row->id_autor}';\">Editar</button>

                <button class= 'btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-autor&acao=excluir&id_autor={$row->id_autor}';}else{false;}\">Excluir</button>
        </td>";
        print "</tr>";
    }
        print "</table>";
}else{
        print "<p>Não encontrou resultados</p>";
}
?>