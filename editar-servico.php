<h1>Editar Serviço</h1>

<?php
    // Consulta SQL para buscar a categoria pelo ID fornecido
    $sql = "SELECT * FROM servico WHERE cod_servico=" . $_REQUEST["id"];

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

<!-- Formulário para editar o serviço -->
<form action="?page=salvar_servico" method="post">
    <!-- Campo oculto para armazenar a ação de edição -->
    <input type="hidden" name="acao" value="editar">
    
    <!-- Campo oculto para armazenar o ID do servico -->
    <input type="hidden" name="id" value="<?php print $row->cod_servico; ?>">

    <!-- Campo para editar a descrição do serviço -->
    <div class="mb-3">
        <label>Descrição:</label>
        <input type="text" name="desc" value="<?php print $row->tipo_servico; ?>" class="form-control">
    </div>

     <!-- Campo para editar o valor do Serviço -->
     <div class="mb-3">
        <label>Valor:</label>
        <input type="number" name="valor" value="<?php print $row->valor_servico; ?>" step="0.010" class="form-control">
    </div>

    <!-- Dropdown para seleção de edição de Categoria-->
    <div class="mb-5">
        <label>Categoria:</label>
        <select name="categoria" required="required"  class="form-control">
        <option value="" selected>Selecione uma Categoria</option>
            <?php
                while($row = $res->fetch_object()){
             ?>
            <option value="<?php print $row->id_categoria ?>"><?php print $row->descricao?></option>
            <?php } ?>
        </select>
    </div>


    <!-- Botão para salvar as alterações -->
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
