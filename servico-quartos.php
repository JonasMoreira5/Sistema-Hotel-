<h1>Serviços de Quarto</h1>

<!-- Formulário para adicionar uma nova categoria de quarto -->
<form action="?page=salvar_categoria" method="post">
    <!-- Campo oculto para definir a ação como "cadastrar" -->
    <input type="hidden" name="acao" value="cadastrar">
    
    <div class="mb-3">
        <label>Cliente:</label>
        <select name="cliente" required class="form-control">
            <option value="" selected>Selecione o cliente</option>
            <?php while($row_cliente = $res_cliente->fetch_object()){ ?>
                <option value="<?php echo $row_cliente->cpf; ?>">
                    <?php echo $row_cliente->nome; ?>
                </option>
            <?php } ?>
        </select>
    </div>

    <!-- Campo para Descrição do Serviço -->
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