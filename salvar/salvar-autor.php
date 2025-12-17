<h1>Salvar Autor</h1>
<?php
switch($_REQUEST['acao']){
    case 'cadastrar':
        $nome = $_POST['nome_autor'];
        $data_nasc = $_POST['data_nasc_autor'];
        $email = $_POST['email_autor'];
        $formacao = $_POST['formacao_autor'];

        $sql = "INSERT  INTO autor(nome_autor, data_nasc_autor, email_autor, formacao_autor) VALUES('{$nome}', '{$data_nasc}', '{$email}', '{$formacao}')";

        $res = $conn->query($sql);

        if($res == true){
            print "<script>alert('Cadastrou com sucesso!');</script>";
            print "<script>location.href='?page=listar-autor';</script>";
        }else{
            print "<script>alert('Não foi possível cadastrar');</script>";
            print "<script>location.href='?page=listar-autor';</script>";
        }
        break;
        case 'editar':
            $nome = $_REQUEST['nome_autor'];
            $data_nasc = $_REQUEST['data_nasc_autor'];
            $email = $_REQUEST['email_autor'];
            $formacao = $_REQUEST['formacao_autor'];

            $sql = "UPDATE autor SET nome_autor='{$nome}', data_nasc_autor='{$data_nasc}', email_autor='{$email}', formacao_autor='{$formacao}' WHERE id_autor=".$_REQUEST['id_autor'];

            $res = $conn->query($sql);

            if($res == true){
                print "<script>alert('Editou com sucesso!');</script>";
                print "<script>location.href='?page=listar-autor';</script>";
            }else{
                print "<script>alert('Não foi possível editar');</script>";
                print "<script>location.href='?page=listar-autor';</script>";
            }
            break;
            case 'excluir':
                $sql = "DELETE FROM autor WHERE id_autor=".$_REQUEST['id_autor'];

                $res = $conn->query($sql);
                    if($res == true){
                        print "<script>alert('Excluiu com sucesso!');</script>";
                        print "<script>location.href='?page=listar-autor';</script>";
                    }else{
                        print "<script>alert('Não foi possível excluir');</script>";
                        print "<script>location.href='?page=listar-autor';</script>";
                    }
                break;
}

?>