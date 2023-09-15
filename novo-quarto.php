<h1>Novo Quarto</h1>

<?php
// Consulta para buscar todas as categorias
$sql = "SELECT * FROM categoria";

// Executa a consulta
$res = $conn->query($sql);

// Obtém a quantidade de categorias retornadas
$qtd = $res->num_rows;
?>

<form action="?page=salvar_quarto" method="post">
    <input type="hidden" name="acao" value="cadastrar">
    
    <!-- Campo para Descrição do Quarto -->
    <div class="mb-3">
        <label>Descrição:</label>
        <input type="text" name="desc" class="form-control">
    </div>

    <!-- Dropdown para seleção de Categoria -->
    <div class="mb-3">
        <label>Categoria:</label>
        <select name="categoria" class="form-control">
            <option value="" selected>Selecione uma categoria</option>
            <?php while($row = $res->fetch_object()){ ?>
                <option value="<?php echo $row->cat_id; ?>">
                    <?php echo $row->descricao; ?>
                </option>
            <?php } ?>
        </select>
    </div>

    <!-- Botão de envio do formulário -->
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
