<h1>Categoria de Quartos</h1>

<script>
    document.getElementById("valor").addEventListener("change", function(){
            this.value = parseFloat(this.value).toFixed(2);
    });
</script>

<form action="?page=salvar_categoria" method="post">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Descrição:</label>
        <input type="text" name="desc" class="form-control">
    </div>
    <div class="mb-3">
        <label>Valor:</label>
        <input type="number" name="valor" step="0.010" min="0" max="9999" class="form-control">
    </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
</form>