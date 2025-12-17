<h1>Salvar Artigo</h1>
<?php
switch($_REQUEST['acao']){
    case 'cadastrar':
        $titulo = $_POST['titulo_artigo'];
        $data = $_POST['data_publi_artigo'];
        $id_autor = $_POST['autor_id_autor'];
        $id_cat = $_POST['categoria_id_categoria'];

        $sql = "INSERT INTO artigo(titulo_artigo, data_publi_artigo, autor_id_autor, categoria_id_categoria) VALUES('{$titulo}', '{$data}', {$id_autor}, {$id_cat})";

        $res = $conn->query($sql);
        if($res == true){
            print "<script>alert('Cadastrou com sucesso!');</script>";
            print "<script>location.href='?page=listar-artigo';</script>";
        }else{
            print "<script>('Não foi possível cadastrar');</script>";
            print "<script>location.href='?page=listar-artigo';</script>";
        }
        break;
        case 'editar':
            $titulo = $_POST['titulo_artigo'];
            $data = $_POST['data_publi_artigo'];
            $id_autor = $_POST['autor_id_autor'];
            $id_cat = $_POST['categoria_id_categoria'];

            $sql = "UPDATE artigo SET titulo_artigo='{$titulo}', data_publi_artigo='{$data}', autor_id_autor='{$id_autor}', categoria_id_categoria='{$id_cat}' WHERE id_artigo=".$_REQUEST['id_artigo'];

            $res = $conn->query($sql);
            if($res == true){
                print "<script>alert('Editou com sucesso!');</script>";
                print "<script>location.href='?page=listar-artigo'</script>";
            }else{
                print "<script>alert('Não foi possível editar');</script>";
                print "<script>location.href='?page=listar-artigo';</script>";
            }
            break;
            case 'excluir':
                $sql = "DELETE FROM artigo WHERE id_artigo=".$_REQUEST['id_artigo'];
                $res = $conn->query($sql);

                if($res == true){
                    print "<script>alert('Excluiu com sucesso!');</script>";
                    print "<script>location.href='?page=listar-artigo';</script>";
                }else{
                    print "<script>alert('Não foi possível excluir');</script>";
                    print "<script>location.href='?page=listar-artigo';</script>";
                }
                break;
}
?>