<h1>Lista de Reservas</h1>

<?php
// Consulta SQL para obter a lista de reservas, juntamente com informações do cliente, quarto e categoria
$sql = "SELECT c.nome AS nome, 
               q.descricao AS descricao, 
               DATE_FORMAT(r.dt_inicial, '%d/%m/%Y') AS dt_inicial, 
               DATE_FORMAT(r.dt_final, '%d/%m/%Y') as dt_final, 
               cat.valor 
        FROM reserva as r
        INNER JOIN cliente as c ON c.cpf=r.cpf
        INNER JOIN quarto as q ON q.id_quarto=r.id_quarto
        INNER JOIN categoria as cat ON cat.cat_id=q.idcategoria";

$res = $conn->query($sql);
$qtd = $res->num_rows;

// Verifica se a consulta retornou resultados
if ($qtd > 0) {
    // Início da tabela
    print "<table class='table table-hover'>";
        print "<tr>";
            print "<th>Cliente:</th>";
            print "<th>Quarto:</th>";
            print "<th>Entrada:</th>";
            print "<th>Saída:</th>";
            print "<th>Ações</th>";
        print "</tr>";
    
    // Itera sobre os resultados e exibe na tabela
    while ($row = $res->fetch_object()) {
        print "<tr>";
            print "<td>" . $row->nome . "</td>";
            print "<td>" . $row->descricao . "</td>";
            print "<td>" . $row->dt_inicial . "</td>";
            print "<td>" . $row->dt_final . "</td>";
            print "<td>
                <button onclick=\"location.href='?page=editar_quarto&id=" . $row->id_quarto . "'\" class='btn btn-success'>Editar</button>
                <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar_quarto&acao=excluir&id=" . $row->id_quarto . "'}else{false;}\" class='btn btn-danger'>Excluir</button>
            </td>";
        print "</tr>";
    }
    print "</table>";
} else {
    // Mensagem exibida caso não haja resultados
    print "<p class='alert alert-danger'>Sem resultados!</p>";
}
?>
