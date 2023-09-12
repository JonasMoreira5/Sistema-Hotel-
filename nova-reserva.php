<h1>Reserva de Quarto</h1>

<?php
$sql_cliente = "select * from cliente";

$sql_quarto = "select q.id_quarto, q.descricao as desc_quarto, c.descricao as desc_categoria, c.valor from quarto as q
inner join categoria as c on c.cat_id=q.idcategoria";

$res_cliente = $conn->query($sql_cliente);

$res_quarto = $conn->query($sql_quarto);
?>
<form action="?page=salvar_reserva" method="post">
    <input type="hidden" name="acao" value="cadastrar">
    
    <div class="mb-3">
        <label>Data de Entrada:</label>
        <input type="date" name="entrada" class="form-control">
    </div>
    <div class="mb-3">
        <label>Data de Saída:</label>
        <input type="date" name="saida" class="form-control">
    </div>
    <div class="mb-3">
        <label>Cliente:</label>
        <select name="cliente" required class="form-control">
            <option value="" selected>Selecione o cliente</option>
            <?php while($row_cliente = $res_cliente->fetch_object()){ ?>
            <option value="<?php print $row_cliente->cpf ?>"><?php print $row_cliente->nome ?>
            </option>
           <?php } ?>
        </select>
    </div>
    <div class="mb-3">
        <label>Quarto:</label>
        <select name="quarto" required class="form-control">
            <option value="" selected>Selecione o cliente</option>
            <?php while($row_quarto = $res_quarto->fetch_object()){ ?>
            <option value="<?php print $row_quarto->id_quarto ?>"><?php print $row_quarto->desc_quarto.' - '.$row_quarto->desc_categoria.' - '.$row_quarto->valor ?>
            </option>
           <?php } ?>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>