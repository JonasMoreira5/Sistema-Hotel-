<h1>Lista de Clientes</h1>

<?php
    $sql = "select * from cliente";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if ($qtd > 0){
        print "<table class='table table-hover'>";
            print "<tr>";
            print "<th>CPF:</th>";
            print "<th>Nome:</th>";
            print "<th>Telefone:</th>";
            print "<th>E-mail:</th>";
            print "<th>Ações</th>";
            print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->cpf."</td>";
            print "<td>".$row->nome."</td>";
            print "<td>".$row->contato."</td>";
            print "<td>".$row->email."</td>";
            print "<td>
            
            <button onclick=\"location.href='?page=editar_cliente&id=".$row->cpf."'\" class='btn btn-success'>Editar</button>
            
            <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar_cliente&acao=excluir&id=".$row->cpf."'}else{false;}\" class='btn btn-danger'>Excluir</button>
            
            </td>";
            print "</tr>";
        }
        print "</table>";
    }else{
        print "<p class='alert alert-danger'>Sem resultados!</p>";
    }
?>