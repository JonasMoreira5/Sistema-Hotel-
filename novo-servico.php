<h1>Novo serviço</h1>

<?php
// Consulta para buscar todas as categorias
$sql = "SELECT * FROM categoria";

// Executa a consulta
$res = $conn->query($sql);

// Obtém a quantidade de categorias retornadas
$qtd = $res->num_rows;
?>

<!-- Formulário para adicionar um novo serviço -->
<form action="?page=salvar_servico" method="post">
    <!-- Campo oculto para definir a ação como "cadastrar" -->
    <input type="hidden" name="acao" value="cadastrar">

    <!-- Campo para inserir a descrição da categoria -->
    <div class="mb-3">
        <label>Descrição:</label>
        <input type="text" name="desc" required="required" class="form-control">
    </div>

    <!-- Campo para inserir o valor da categoria. O valor é formatado para ter duas casas decimais -->
    <div class="mb-3">
        <label>Valor:</label>
        <input type="number" name="valor" step="0.010" min="0" max="9999" class="form-control">
    </div>

    <!-- Dropdown para seleção de Categoria-->
    <div class="mb-5">
        <label>Categoria:</label>
        <select name="categoria" required="required"  class="form-control">
        <option value="" selected>Selecione uma Categoria</option>
            <?php
                while($row = $res->fetch_object()){
             ?>
            <option value="<?php print $row->cat_id ?>"><?php print $row->descricao ?></option>
            <?php } ?>
        </select>
    </div>

    <!-- Botão para enviar o formulário -->
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>