<!-- Título da página ou seção -->
<h1>Categorias Existentes</h1>

<?php

    //$sql = "SELECT * FROM categoria";
    // Consulta SQL para buscar todas as categorias
    $sql = "select * from categoria";


    // Executando a consulta SQL e armazenando o resultado na variável $res
    $res = $conn->query($sql);

    // Contando o número de registros retornados pela consulta
    $qtd = $res->num_rows;

    // Se houver registros, exibe-os em uma tabela
    if ($qtd > 0){
        print "<table class='table table-hover'>";
            print "<tr>";
            print "<th>Descrição:</th>";
            print "<th>Valor:</th>";
            print "<th>Ações</th>";
            print "</tr>";
        // Loop para exibir cada registro em uma linha da tabela
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->descricao."</td>";
            print "<td>".$row->valor."</td>";
            print "<td>
            
            <!-- Botão para editar a categoria -->
            <button onclick=\"location.href='?page=editar_categoria&id=".$row->id_categoria."'\" class='btn btn-success'>Editar</button>
            
            <!-- Botão para excluir a categoria com confirmação -->
            <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar_categoria&acao=excluir&id=".$row->id_categoria."'}else{false;}\" class='btn btn-danger'>Excluir</button>
            
            </td>";
            print "</tr>";
        }
        print "</table>";
    }else{
        // Se não houver registros, exibe uma mensagem de alerta
        print "<p class='alert alert-danger'>Sem resultados!</p>";
    }
?>
                                                                                                                                            