<!-- Título da página ou seção -->
<h1>Lista de Reservas</h1>

<?php
<<<<<<< HEAD
    // Consulta SQL para buscar todas as reservas, clientes, quartos e suas respectivas categorias
=======
>>>>>>> 23fcb1eb01859ecc6b995b291424327126a80044
    $sql = "SELECT c.nome AS nome, q.descricao AS descricao, DATE_FORMAT(r.dt_inicial, '%d/%m/%Y') AS dt_inicial, DATE_FORMAT(r.dt_final, '%d/%m/%Y') as dt_final, cat.valor from reserva as r
inner join cliente as c on c.cpf=r.cpf
inner join quarto as q on q.id_quarto=r.id_quarto
inner join categoria as cat on cat.cat_id=q.idcategoria";

    // Executando a consulta SQL e armazenando o resultado na variável $res
    $res = $conn->query($sql);

    // Contando o número de registros retornados pela consulta
    $qtd = $res->num_rows;

    // Se houver registros, exibe-os em uma tabela
    if ($qtd > 0){
        print "<table class='table table-hover'>";
            print "<tr>";
            print "<th>Cliente:</th>";
            print "<th>Quarto:</th>";
            print "<th>Entrada:</th>";
            print "<th>Saída:</th>";
            print "<th>Ações</th>";
            print "</tr>";
        // Loop para exibir cada registro em uma linha da tabela
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->nome."</td>";
            print "<td>".$row->descricao."</td>";
            print "<td>".$row->dt_inicial."</td>";
            print "<td>".$row->dt_final."</td>";
            print "<td>
            
            <!-- Botão para editar a reserva -->
            <button onclick=\"location.href='?page=editar_quarto&id=".$row->id_quarto."'\" class='btn btn-success'>Editar</button>
            
            <!-- Botão para excluir a reserva com confirmação -->
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
