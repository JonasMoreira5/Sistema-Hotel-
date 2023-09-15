<!-- Título da página ou seção -->
<h1>Categoria de Quartos</h1>

<script>
    // JavaScript para formatar o valor inserido no campo "valor" para duas casas decimais
    document.getElementById("valor").addEventListener("change", function(){
            this.value = parseFloat(this.value).toFixed(2);
    });
</script>

<!-- Formulário para adicionar uma nova categoria de quarto -->
<form action="?page=salvar_categoria" method="post">
    <!-- Campo oculto para definir a ação como "cadastrar" -->
    <input type="hidden" name="acao" value="cadastrar">
    
    <!-- Campo para inserir a descrição da categoria -->
    <div class="mb-3">
        <label>Descrição:</label>
        <input type="text" name="desc" class="form-control">
    </div>
    
    <!-- Campo para inserir o valor da categoria. O valor é formatado para ter duas casas decimais -->
    <div class="mb-3">
        <label>Valor:</label>
        <input type="number" name="valor" step="0.010" min="0" max="9999" class="form-control">
    </div>
    
    <!-- Botão para enviar o formulário -->
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
