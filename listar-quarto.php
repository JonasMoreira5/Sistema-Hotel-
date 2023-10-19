<!-- Título da página ou seção -->
<h1>Lista de Quartos</h1>

<?php
    // Consulta SQL para buscar todos os quartos e suas respectivas categorias
    $sql = "select q.descricao as desc_quarto, c.descricao as desc_cat, c.valor from quarto as q inner join categoria as c where idcategoria=cat_id";

    // Executando a consulta SQL e armazenando o resultado na variável $res
    $res = $conn->query($sql);

    // Contando o número de registros retornados pela consulta
    $qtd = $res->num_rows;

    // Se houver registros, exibe-os em uma tabela
    if ($qtd > 0){
        print "<table class='table table-hover'>";
            print "<tr>";
            print "<th>Descrição:</th>";
            print "<th>Categoria:</th>";
            print "<th>Valor:</th>";
            print "<th>Ações</th>";
            print "</tr>";
        // Loop para exibir cada registro em uma linha da tabela
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->desc_quarto."</td>";
            print "<td>".$row->desc_cat."</td>";
            print "<td>".$row->valor."</td>";
            print "<td>
            
            <!-- Botão para editar o quarto -->
            <button onclick=\"location.href='?page=editar_quarto&id=".$row->id_quarto."'\" class='btn btn-success'>Editar</button>            
    
            
            <!-- Botão para excluir o quarto com confirmação -->
            <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar_quarto&acao=excluir&id=".$row->id_quarto."'}else{false;}\" class='btn btn-danger'>Excluir</button>
            
            </td>";
            print "</tr>";
        }
        print "</table>";
    }else{
        // Se não houver registros, exibe uma mensagem de alerta
        print "<p class='alert alert-danger'>Sem resultados!</p>";
    }
?>
