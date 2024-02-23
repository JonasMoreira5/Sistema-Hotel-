<?php
// Início do script PHP

// Verifica a ação solicitada pelo usuário
switch ($_REQUEST["acao"]) {

        // Caso a ação seja 'cadastrar'
    case 'cadastrar':


        // // Coleta os dados enviados pelo formulário
        $nome = $_POST["nome"];
        $email = $_POST["email"];

        $sql = "INSERT INTO cliente (nome, email) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $_POST["nome"], $_POST["email"]);
        if ($stmt->execute()) {
            print "<script>alert('Cadastro realizado com sucesso!!!');</script>";
            print "<script>location.href='?page=listar_cliente'</script>";
            // $message = "Cadastro realizado com sucesso!";
        } else {
            // $message = "Erro ao realizar cadastro: " . $stmt->error;
            print "<script>alert('Erro ao realizar cadastro!!!');</script>";
            print "<script>location.href='?page=listar_cliente'</script>";
        }
        break;

        // Verifica se a consulta foi bem-sucedida
        // if ($res == true) {
        //     // Exibe uma mensagem de sucesso e redireciona para a página de listagem de clientes
        //     print "<script>alert('Cadastro realizado com sucesso!!!');</script>";
        //     print "<script>location.href='?page=listar_cliente'</script>";
        // } else {
        //     // Exibe uma mensagem de erro e redireciona para a página de listagem de clientes

        //     print "<script>alert('Erro ao realizar cadastro!!!');</script>";
        //     print "<script>location.href='?page=listar_cliente'</script>";
        // }
        // break;


        // Caso a ação seja 'editar'
    case 'editar':
        $nome = $_POST["nome"];
        $email = $_POST["email"];

        $sql = "UPDATE cliente SET nome=?, email=? WHERE id_cliente=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssi", $_POST["nome"], $_POST["email"], $_REQUEST["id"]);
        if ($stmt->execute()) {
            print "<script>alert('Editado com sucesso')</script>";
            print "<script>location.href='?page=listar_cliente';</script>";
            // print "<script>alert('Alteração feita com sucesso!')</script>";
        } else {
            print "<script>alert('ERRO!')</script>";
            print "<script>location.href='?page=listar_cliente';</script>";
            // $message = "Erro ao editar: " . $stmt->error;
        }
        print "<script>location.href='?page=listar_cliente';</script>";
        break;

        // Verifica se a consulta foi bem-sucedida
        // if ($res == true) {
        //     // Exibe uma mensagem de sucesso e redireciona para a página de listagem de clientes
        //     print "<script>alert('Editado com sucesso')</script>";
        //     print "<script>location.href='?page=listar_cliente';</script>";
        // } else {
        //     // Exibe uma mensagem de erro e redireciona para a página de listagem de clientes
        //     print "<script>alert('ERRO!')</script>";
        //     print "<script>location.href='?page=listar_cliente';</script>";
        // }
        // break;

        //     // Caso a ação seja 'excluir'
        //     case 'excluir':

        //         // Cria a consulta SQL para excluir o registro do cliente com base no CPF
        //         $sql = "DELETE FROM cliente WHERE cpf=".$_REQUEST["id"];

        //         // Executa a consulta SQL
        //         $res = $conn->query($sql);

        //         // Verifica se a consulta foi bem-sucedida
        //         if ($res == true) {
        //             // Exibe uma mensagem de sucesso e redireciona para a página de listagem de clientes
        //             print "<script>alert('Excluido com sucesso!')</script>";
        //             print "<script>location.href='?page=listar_cliente';</script>";
        //         } else {
        //             // Exibe uma mensagem de erro e redireciona para a página de listagem de clientes
        //             print "<script>alert('Erro ao excluir!')</script>";
        //             print "<script>location.href='?page=listar_cliente';</script>";
        //         }
        //         break;
        // }
}
