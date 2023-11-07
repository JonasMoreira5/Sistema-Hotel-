<h1>Serviços Disponiveis</h1>

<?php
    // Consulta SQL para buscar todos os quartos e suas respectivas categorias
    $sql = "SELECT q.cod_servico, q.tipo_servico, q.valor_servico FROM servico q";
    //-- INNER JOIN categoria AS c ON q.cat_id = c.idcategoria";

    //Executando a consulta SQL e armazenando o resultado na variável $res
    $res = $conn->query($sql);

    // Contando o número de registros retornados pela consulta
    $qtd = $res->num_rows;

    // Se houver registros, exibe-os em uma tabela
    if ($qtd > 0){
        print "<table class='table table-hover'>";
            print "<tr>";
            print "<th>Descrição:</th>";
            print "<th>Valor:</th>";
            print "<th>Categoria</th>";
            print "<th>Ações</th>";
            print "</tr>";
        // Loop para exibir cada registro em uma linha da tabela
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->tipo_servico."</td>";
            print "<td>".$row->valor_servico."</td>";
            print "<td>".$row->cod_servico."</td>";
            print "<td>
            
            <!-- Botão para editar o servico -->
            <button onclick=\"location.href='?page=editar_servico&id=".$row->cod_servico."'\" class='btn btn-success'>Editar</button>
            
            <!-- Botão para excluir um servico com uma confirmação -->
            <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar_servico&acao=excluir&id=".$row->cod_servico."'}else{false;}\" class='btn btn-danger'>Excluir</button>
            
            </td>";
            print "</tr>";
        }
        print "</table>";
    }else{
        // Se não houver registros, exibe uma mensagem de alerta
        print "<p class='alert alert-danger'>Sem resultados!</p>";
    }
?>
                                                                                                                                            