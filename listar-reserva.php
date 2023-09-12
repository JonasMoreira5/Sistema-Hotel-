<h1>Lista de Reservas</h1>

<?php
    $sql = "select c.nome as nome, q.descricao as descricao, DATE_FORMAT(r.dt_inicial, '%d/%m/%Y') as dt_inicial, DATE_FORMAT(r.dt_final, '%d/%m/%Y') as dt_final, cat.valor from reserva as r
inner join cliente as c on c.cpf=r.cpf
inner join quarto as q on q.id_quarto=r.id_quarto
inner join categoria as cat on cat.cat_id=q.idcategoria";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if ($qtd > 0){
        print "<table class='table table-hover'>";
            print "<tr>";
            print "<th>Cliente:</th>";
            print "<th>Quarto:</th>";
            print "<th>Entrada:</th>";
            print "<th>Saída:</th>";
            print "<th>Ações</th>";
            print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->nome."</td>";
            print "<td>".$row->descricao."</td>";
            print "<td>".$row->dt_inicial."</td>";
            print "<td>".$row->dt_final."</td>";
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