<h1>Categorias Existentes</h1>

<?php
    $sql = "select * from categoria";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if ($qtd > 0){
        print "<table class='table table-hover'>";
            print "<tr>";
            print "<th>Descrição:</th>";
            print "<th>Valor:</th>";
            print "<th>Ações</th>";
            print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->descricao."</td>";
            print "<td>".$row->valor."</td>";
            print "<td>
            
            <button onclick=\"location.href='?page=editar_categoria&id=".$row->cat_id."'\" class='btn btn-success'>Editar</button>
            
            <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar_categoria&acao=excluir&id=".$row->cat_id."'}else{false;}\" class='btn btn-danger'>Excluir</button>
            
            </td>";
            print "</tr>";
        }
        print "</table>";
    }else{
        print "<p class='alert alert-danger'>Sem resultados!</p>";
    }
?>