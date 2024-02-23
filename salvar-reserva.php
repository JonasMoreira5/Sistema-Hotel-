<?php
switch ($_REQUEST["acao"]) {
    case 'cadastrar':

        $entrada = $_POST["entrada"];
        $saida = $_POST["saida"];
        $cliente = $_POST["cliente"];
        $quarto = $_POST["quarto"];

        $sql = "insert into reserva (dt_inicial, dt_final, idcliente, idquarto) values ('{$entrada}','{$saida}','{$cliente}','{$quarto}')";

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Reserva realizada com sucesso!!!');</script>";
            print "<script>location.href='?page=listar_reserva'</script>";
        } else {
            print "<script>alert('Erro ao realizar reserva!!!');</script>";
            print "<script>location.href='?page=listar_reserva'</script>";
        }
        break;

    case 'editar':
        $entrada = $_POST["entrada"];
        $saida = $_POST["saida"];
        $cliente = $_POST["cliente"];
        $quarto = $_POST["quarto"];

        //$sql = "UPDATE reserva SET (dt_inicial, dt_final, cpf, id_quarto) VALUES ('{$entrada}','{$saida}','{$cliente}','{$quarto}')";
        $sql = "UPDATE reserva SET dt_inicial='{$entrada}', dt_final='{$saida}', id_cliente='{$cliente}', quarto='{$quarto}'  WHERE id_cliente=" . $_REQUEST["id"];

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Reserva atualizada com sucesso!!!');</script>";
            print "<script>location.href='?page=listar_reserva'</script>";
        } else {
            print "<script>alert('Erro ao atualizar reserva!!!');</script>";
            print "<script>location.href='?page=listar_reserva'</script>";
        }
        break;

    case 'excluir':
        // Cria a consulta SQL para excluir o registro do cliente com base no CPF
        $sql = "DELETE FROM c WHERE id_cliente=".$_REQUEST["id"];

        // Executa a consulta SQL
        $res = $conn->query($sql);

        // Verifica se a consulta foi bem-sucedida
        if ($res == true) {
            // Exibe uma mensagem de sucesso e redireciona para a página de listagem de clientes
            print "<script>alert('Excluido com sucesso!')</script>";
            print "<script>location.href='?page=listar_cliente';</script>";
        } else {
            // Exibe uma mensagem de erro e redireciona para a página de listagem de clientes
            print "<script>alert('Erro ao excluir!')</script>";
            print "<script>location.href='?page=listar_cliente';</script>";
        }
        break;
}
