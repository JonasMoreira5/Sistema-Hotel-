<h1>Editar Cliente</h1>

<?php
    // Consulta SQL para buscar o cliente pelo CPF fornecido
    $sql = "SELECT * FROM cliente WHERE cpf=" . $_REQUEST["id"];

    // Executando a consulta e armazenando o resultado
    $res = $conn->query($sql);

    // Buscando o objeto do cliente do resultado
    $row = $res->fetch_object();
?>

<!-- Formulário para editar o cliente -->
<form action="?page=salvar_cliente" method="POST">
    <!-- Campo oculto para armazenar a ação de edição -->
    <input type="hidden" name="acao" value="editar">
    
    <!-- Campo oculto para armazenar o CPF do cliente -->
    <input type="hidden" name="id" value="<?php print $row->cpf; ?>">

    <!-- Campo para editar o CPF do cliente -->
    <div class="mb-3">
        <label>CPF:</label>
        <input type="text" name="cpf" value="<?php print $row->cpf; ?>" class="form-control">
    </div>

    <!-- Campo para editar o nome do cliente -->
    <div class="mb-3">
        <label>Nome:</label>
        <input type="text" name="nome" value="<?php print $row->nome; ?>" class="form-control">
    </div>

    <!-- Campo para editar o telefone do cliente -->
    <div class="mb-3">
        <label>Telefone:</label>
        <input type="tel" name="contato" value="<?php print $row->contato; ?>" class="form-control">
    </div>

    <!-- Campo para editar o email do cliente -->
    <div class="mb-3">
        <label>Email:</label>
        <input type="email" name="email" value="<?php print $row->email; ?>" class="form-control">
    </div>

    <!-- Botão para salvar as alterações -->
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
