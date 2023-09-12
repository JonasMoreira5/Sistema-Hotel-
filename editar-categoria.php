<h1>Editar Categoria</h1>

<?php
    $sql = "select * from categoria where cat_id=".$_REQUEST["id"];

    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<script>
    document.getElementById("valor").addEventListener("change", function(){
            this.value = parseFloat(this.value).toFixed(2);
    });
</script>

<form action="?page=salvar_categoria" method="post">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->cat_id; ?>">
    <div class="mb-3">
        <label>Descrição:</label>
        <input type="text" name="desc" value="<?php print $row->descricao; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Valor:</label>
        <input type="number" name="valor" value="<?php print $row->valor; ?>" step="0.010" class="form-control">
    </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
</form>