<h1>Editar Categoria</h1>

<?php
    // Consulta SQL para buscar a categoria pelo ID fornecido
    $sql = "SELECT * FROM categoria WHERE cat_id=" . $_REQUEST["id"];

    // Executando a consulta e armazenando o resultado
    $res = $conn->query($sql);

    // Buscando o objeto da categoria do resultado
    $row = $res->fetch_object();
?>

<!-- Script para formatar o valor para duas casas decimais quando alterado -->
<script>
    document.getElementById("valor").addEventListener("change", function() {
        this.value = parseFloat(this.value).toFixed(2);
    });
</script>

<!-- Formulário para editar a categoria -->
<form action="?page=salvar_categoria" method="post">
    <!-- Campo oculto para armazenar a ação de edição -->
    <input type="hidden" name="acao" value="editar">
    
    <!-- Campo oculto para armazenar o ID da categoria -->
    <input type="hidden" name="id" value="<?php print $row->cat_id; ?>">

    <!-- Campo para editar a descrição da categoria -->
    <div class="mb-3">
        <label>Descrição:</label>
        <input type="text" name="desc" value="<?php print $row->descricao; ?>" class="form-control">
    </div>

    <!-- Campo para editar o valor da categoria -->
    <div class="mb-3">
        <label>Valor:</label>
        <input type="number" name="valor" value="<?php print $row->valor; ?>" step="0.010" class="form-control">
    </div>

    <!-- Botão para salvar as alterações -->
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
