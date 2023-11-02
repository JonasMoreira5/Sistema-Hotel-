<h1>Editar Reserva </h1>


<?php
// Consulta SQL para obter a lista de reservas, juntamente com informações do cliente, quarto e categoria
$sql = "SELECT c.nome AS nome, 
               q.descricao AS descricao, 
               DATE_FORMAT(r.dt_inicial, '%d/%m/%Y') AS dt_inicial, 
               DATE_FORMAT(r.dt_final, '%d/%m/%Y') AS dt_final, 
               cat.valor 
        FROM reserva AS r
        INNER JOIN cliente AS c ON c.cpf=r.cpf
        INNER JOIN quarto AS q ON q.id_quarto=r.id_quarto
        INNER JOIN categoria AS cat ON cat.id_categoria=q.idcategoria";
// Executando a consulta e armazenando o resultado
$res = $conn->query($sql);

// Buscando o objeto da categoria do resultado
$qtd = $res->num_rows;

?>

<!-- Formulario para editar a reserva -->
<form action="?page=salvar_reserva" method="POST">
    <input type="hidden" name="acao" value="editar">

    <!-- Campo para Data de Entrada -->
    <div class="mb-3">
        <label>Data de Entrada:</label>
        <input type="date" name="entrada" class="form-control">
    </div>

    <!-- Campo para Data de Saída -->
    <div class="mb-3">
        <label>Data de Saída:</label>
        <input type="date" name="saida" class="form-control">
    </div>

    <!-- Dropdown para seleção de Cliente -->
    <div class="mb-3">
        <label>Cliente:</label>
        <select name="cliente" required class="form-control">
            <option value="" selected>Selecione o cliente</option>
            <?php while ($row_cliente = $res_cliente->fetch_object()) { ?>
                <option value="<?php echo $row_cliente->cpf; ?>">
                    <?php echo $row_cliente->nome; ?>
                </option>
            <?php } ?>
        </select>
    </div>


    <!-- Dropdown para seleção de Quarto -->
    <div class="mb-3">
        <label>Quarto:</label>
        <select name="quarto" required class="form-control">
            <option value="" selected>Selecione o quarto</option>
            <?php while ($row_quarto = $res_quarto->fetch_object()) { ?>
                <option value="<?php echo $row_quarto->id_quarto; ?>">
                    <?php echo $row_quarto->desc_quarto . ' - ' . $row_quarto->desc_categoria . ' - ' . $row_quarto->valor; ?>
                </option>
            <?php } ?>
        </select>
    </div>

    <!-- Botão para salvar as alterações -->
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>