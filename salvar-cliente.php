<?php
// Início do script PHP

// Verifica a ação solicitada pelo usuário
switch ($_REQUEST["acao"]) {
    
    // Caso a ação seja 'cadastrar'
    case 'cadastrar':
        
        // Coleta os dados enviados pelo formulário
        $cpf = $_POST["cpf"];
        $nome = $_POST["nome"];
        $telefone = $_POST["contato"];
        $email = $_POST["email"];
        
        // Cria a consulta SQL para inserir um novo cliente
        $sql = "INSERT INTO cliente (cpf, nome, contato, email) 
                VALUES ('{$cpf}', '{$nome}', '{$telefone}', '{$email}')";
        
        // Executa a consulta SQL
        $res = $conn->query($sql);
        
        // Verifica se a consulta foi bem-sucedida
        if ($res == true) {
            // Exibe uma mensagem de sucesso e redireciona para a página de listagem de clientes
            print "<script>alert('Cadastro realizado com sucesso!!!');</script>";
            print "<script>location.href='?page=listar_cliente'</script>";
        } else {
            // Exibe uma mensagem de erro e redireciona para a página de listagem de clientes
            
            print "<script>alert('Erro ao realizar cadastro!!!');</script>";
            print "<script>location.href='?page=listar_cliente'</script>";
        }
        break;
    
    // Caso a ação seja 'editar'
    case 'editar':
        
        // Coleta os dados atualizados enviados pelo formulário
        $cpf = $_POST["cpf"];
        $nome = $_POST["nome"];
        $telefone = $_POST["contato"];
        $email = $_POST["email"];
        
        // Cria a consulta SQL para atualizar o registro do cliente com base no CPF
        $sql = "UPDATE cliente 
                SET nome='{$nome}', contato='{$telefone}', email='{$email}' 
                WHERE id=".$_REQUEST["cpf"];
        
        // Executa a consulta SQL
        $res = $conn->query($sql);
        
        // Verifica se a consulta foi bem-sucedida
        if ($res == true) {
            // Exibe uma mensagem de sucesso e redireciona para a página de listagem de clientes
            print "<script>alert('Editado com sucesso')</script>";
            print "<script>location.href='?page=listar_cliente';</script>";
        } else {
            // Exibe uma mensagem de erro e redireciona para a página de listagem de clientes
            print "<script>alert('ERRO!')</script>";
            print "<script>location.href='?page=listar_cliente';</script>";
        }
        break;
    
    // Caso a ação seja 'excluir'
    case 'excluir':
        
        // Cria a consulta SQL para excluir o registro do cliente com base no CPF
        $sql = "DELETE FROM cliente WHERE cpf=".$_REQUEST["id"];
        
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

?>