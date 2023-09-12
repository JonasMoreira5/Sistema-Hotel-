<h1>Lista de Quartos</h1>

<?php
    $sql = "select q.descricao as desc_quarto, c.descricao as desc_cat, c.valor from quarto as q inner join categoria as c where idcategoria=cat_id";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if ($qtd > 0){
        print "<table class='table table-hover'>";
            print "<tr>";
            print "<th>Descrição:</th>";
            print "<th>Categoria:</th>";
            print "<th>Valor:</th>";
            print "<th>Ações</th>";
            print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->desc_quarto."</td>";
            print "<td>".$row->desc_cat."</td>";
            print "<td>".$row->valor."</td>";
            print "<td>
            
            <button onclick=\"location.href='?page=editar_quarto&id=".$row->id_quarto."'\" class='btn btn-success'>Editar</button>
            
            <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar_quarto&acao=excluir&id=".$row->id_quarto."'}else{false;}\" class='btn btn-danger'>Excluir</button>
            
            </td>";
            print "</tr>";
        }
        print "</table>";
    }else{
        print "<p class='alert alert-danger'>Sem resultados!</p>";
    }
?>