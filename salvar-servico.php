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

         // Coleta os dados atualizados enviados pelo formulário
         $tipo_servico = $_POST["tipo_servico"];
         $valor_servico = $_POST["valor_servico"];
         $cod_servico = $_POST["cod_servico"];
         $cat_id = $_POST["cat_id"];
         $cod_servico = $_POST["cod_servico"];


         
         // Cria a consulta SQL para atualizar o registro do cliente com base no CPF
         // Usa uma declaração preparada para atualizar as informações do cliente
         $sql = "UPDATE servico
                 SET tipo_servico=?, valor_servico=?, cat_id=? 
                 WHERE cod_servico=?";
         
         // Executa a consulta SQL
         // $res = $conn->query($sql);
         $stmt = $conn->prepare($sql);
         $stmt->bind_param("ssss", $tipo_servico,  $valor_servico,  $cod_servico, $cod_servicom, $cat_id);
 
         if ($stmt->execute()) {
             // Exibir uma mensagem de sucesso e redirecionar para a página da lista de clientes
             echo "<script>alert('Editado com sucesso');</script>";
             echo "<script>location.href='?page=listar_cliente';</script>";
         } else {
             // Exibir uma mensagem de erro e redirecionar para a página da lista de clientes
             echo "<script>alert('Erro ao editar o cliente.');</script>";
             echo "<script>location.href='?page=listar_cliente';</script>";
         }
         
        break;
    case 'excluir':
         // Cria a consulta SQL para excluir o registro do cliente com base no CPF
         $sql = "DELETE FROM servico WHERE cod_servico=".$_REQUEST["id"];
        
         // Executa a consulta SQL
         $res = $conn->query($sql);
         
         // Verifica se a consulta foi bem-sucedida
         if ($res == true) {
             // Exibe uma mensagem de sucesso e redireciona para a página de listagem de clientes
             print "<script>alert('Excluido com sucesso!')</script>";
             print "<script>location.href='?page=listar_servico';</script>";
         } else {
             // Exibe uma mensagem de erro e redireciona para a página de listagem de clientes
             print "<script>alert('Erro ao excluir!')</script>";
             print "<script>location.href='?page=listar_servico';</script>";
         }

        break;
    default: 
        print "<script>alert('ERRO!')</script>";
        print "<script>location.href='?page=listar_servico';</script>";
        break;
}
