<?php
switch ($_REQUEST["acao"]) {
    case 'cadastrar':

        $tipo_servico = $_POST["tipo_servico"];
        $valor_servico = $_POST["valor_servico"];
        $cod_servico = $_POST["cod_servico"];

        $sql = "INSERT INTO servico (cod_servico, tipo_servico, valor_servico) VALUES ('{$cod_servico}','{$tipo_servico}','{$valor_servico}')";

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Serviço cadastrado com sucesso!!!')</script>";
            print "<script>location.href='?page=listar_servico'</script>";
        } else {
            print "<script>alert('Erro ao realizar cadastro!!!');</script>";
            print "<script>location.href='?page=novo_servico'</script>";
        }
        break;
    case 'editar':

        $desc = $_POST["desc"];
        $categoria = $_POST["categoria"];

        $sql = "UPDATE quarto SET descricao='{$desc}', idcategoria='{$categoria}' WHERE id_quarto=" . $_REQ1UEST["id"];

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Alteração OK')</script>";
            print "<script>location.href='?page=listar_quarto';</script>";
        } else {
            print "<script>alert('ERRO!')</script>";
            print "<script>location.href='?page=listar_quarto';</script>";
        }
        break;
    case 'excluir':
        break;
    default: 
        print "<script>alert('ERRO!')</script>";
        print "<script>location.href='?page=novo_quarto';</script>";
        break;
}
