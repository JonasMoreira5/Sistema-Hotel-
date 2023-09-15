<?php
// Início do script PHP

// Verifica a ação solicitada pelo usuário
switch ($_REQUEST["acao"]) {
    
    // Caso a ação seja 'cadastrar'
    case 'cadastrar':
        
        // Coleta os dados enviados pelo formulário
        $desc = $_POST["desc"];
        $categoria = $_POST["categoria"];
        
        // Cria a consulta SQL para inserir um novo quarto
        $sql = "INSERT INTO quarto (descricao, idcategoria) 
                VALUES ('{$desc}', '{$categoria}')";
        
        // Executa a consulta SQL
        $res = $conn->query($sql);
        
        // Verifica se a consulta foi bem-sucedida
        if ($res == true) {
            // Exibe uma mensagem de sucesso e redireciona para a página de listagem de quartos
            print "<script>alert('Cadastro realizado com sucesso!!!');</script>";
            print "<script>location.href='?page=listar_quarto'</script>";
        } else {
            // Exibe uma mensagem de erro e redireciona para a página de listagem de quartos
            print "<script>alert('Erro ao realizar cadastro!!!');</script>";
            print "<script>location.href='?page=listar_quarto'</script>";
        }
        break;
    
    // Caso a ação seja 'editar'
    case 'editar':
        
        // Coleta os dados atualizados enviados pelo formulário
        $desc = $_POST["desc"];
        $categoria = $_POST["categoria"];
        
        // Cria a consulta SQL para atualizar o registro do quarto com base no ID
        $sql = "UPDATE quarto 
                SET descricao='{$desc}', idcategoria='{$categoria}' 
                WHERE id_quarto=".$_REQUEST["id"];
        
        // Executa a consulta SQL
        $res = $conn->query($sql);
        
        // Verifica se a consulta foi bem-sucedida
        if ($res == true) {
            // Exibe uma mensagem de sucesso e redireciona para a página de listagem de quartos
            print "<script>alert('Alteração OK')</script>";
            print "<script>location.href='?page=listar_quarto';</script>";
        } else {
            // Exibe uma mensagem de erro e redireciona para a página de listagem de quartos
            print "<script>alert('ERRO!')</script>";
            print "<script>location.href='?page=listar_quarto';</script>";
        }
        break;
    
    // Caso a ação seja 'excluir'
    case 'excluir':
        
        // Cria a consulta SQL para excluir o registro do quarto com base no ID
        $sql = "DELETE FROM quarto WHERE id_quarto=".$_REQUEST["id"];
        
        // Executa a consulta SQL
        $res = $conn->query($sql);
        
        // Verifica se a consulta foi bem-sucedida
        if ($res == true) {
            // Exibe uma mensagem de sucesso e redireciona para a página de listagem de quartos
            print "<script>alert('Excluido com sucesso!')</script>";
            print "<script>location.href='?page=listar_quarto';</script>";
        } else {
            // Exibe uma mensagem de erro e redireciona para a página de listagem de quartos
            print "<script>alert('Erro ao excluir!')</script>";
            print "<script>location.href='?page=listar_quarto';</script>";
        }
        break;
}

// Fim do script PHP
?>
