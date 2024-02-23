<h1>Editar Reserva </h1>

<?php
// Consulta SQL para obter a lista de reservas, juntamente com informações do cliente, quarto e categoria
// Consulta para buscar todos os clientes
$sql_cliente = "SELECT * FROM cliente";

// Consulta para buscar todos os quartos e suas categorias
$sql_quarto = "SELECT q.id_quarto, q.descricao AS desc_quarto, c.descricao AS desc_categoria, c.valor 
               FROM quarto AS q
               INNER JOIN categoria AS c ON c.id_categoria=q.idcategoria";
// Executando a consulta e armazenando o resultado
// $res = $conn->query($sql);

// // Buscando o objeto da categoria do resultado
// $qtd = $res->num_rows;

// Executa as consultas
$res_cliente = $conn->query($sql_cliente);
$res_quarto = $conn->query($sql_quarto);
?>

<!-- Formulario para editar a reserva -->
<form action="?page=salvar_reserva" method="POST">
    <input type="hidden" name="acao" value="editar">


    <!-- Campo para Data de Entrada -->
    <div class="mb-3">
        <label>Data de Entrada:</label>
        <input type="date" name="entrada" value="<?php print $row->dt_inicial;?>" class="form-control" >
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
                <option value="<?php print $row_cliente->id_cliente; ?>">
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
                <option value="<?php  $row_quarto->id_quarto; ?>">
                    <?php echo $row_quarto->desc_quarto . ' - ' . $row_quarto->desc_categoria . ' - ' . $row_quarto->valor; ?>
                </option>
            <?php } ?>
        </select>
    </div>

    <!-- Botão para salvar as alterações -->
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>