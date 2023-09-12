<h1>Novo Quarto</h1>
<?php
    $sql = "select * from categoria";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;
?>
<form action="?page=salvar_quarto" method="post">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Descrição:</label>
        <input type="text" name="desc" class="form-control">
    </div>
    <div class="mb-3">
        <label>Categoria:</label>
        <select name="categoria" class="form-control">
        <?php while($row = $res->fetch_object()){ ?>
          <option value="<?php print $row->cat_id ?>"><?php print $row->descricao ?></option>
        <?php } ?>
        </select>
    </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
</form>