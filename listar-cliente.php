<!-- Título da página ou seção -->
<h1>Lista de Clientes</h1>

<?php
    // Consulta SQL para buscar todos os clientes
    $sql = "SELECT * FROM cliente";

    // Executando a consulta SQL e armazenando o resultado na variável $res
    $res = $conn->query($sql);

    // Contando o número de registros retornados pela consulta
    $qtd = $res->num_rows;

    // Se houver registros, exibe-os em uma tabela
    if ($qtd > 0){
        print "<table class='table table-hover'>";
            print "<tr>";
            print "<th>CPF:</th>";
            print "<th>Nome:</th>";
            print "<th>Telefone:</th>";
            print "<th>E-mail:</th>";
            print "<th>Ações</th>";
            print "</tr>";
        // Loop para exibir cada registro em uma linha da tabela
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->cpf."</td>";
            print "<td>".$row->nome."</td>";
            print "<td>".$row->contato."</td>";
            print "<td>".$row->email."</td>";
            print "<td>
            
            <!-- Botão para editar o cliente -->
            <button onclick=\"location.href='?page=editar_cliente&id=".$row->cpf."'\" class='btn btn-success'>Editar</button>
            
            <!-- Botão para excluir o cliente com confirmação -->
            <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar_cliente&acao=excluir&id=".$row->cpf."'}else{false;}\"
            class='btn btn-danger'>Excluir</button>
            
                </td>";
            print "</tr>";
        }
        print "</table>";
    }else{
        // Se não houver registros, exibe uma mensagem de alerta
        print "<p class='alert alert-danger'>Sem resultados!</p>";
    }
?>
