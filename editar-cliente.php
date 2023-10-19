<h1>Editar Cliente</h1>

<?php
// Verifica se existe um cliente válido com o CPF informado
$cpf = $_REQUEST["id"];
$sql = "SELECT * FROM cliente WHERE cpf=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $cpf);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 0) {
    echo "Cliente não encontrado";
    print "<script>alert('Cliente não encontrado')</script>";
} else {
    $row = $result->fetch_object();
?>

    <!-- Formulário para editar o cliente -->
    <form action="?page=salvar_cliente" method="POST">
        <!-- Campos ocultos para a ação e ID do cliente -->
        <input type="hidden" name="acao" value="editar">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($row->cpf); ?>">

        <!-- Campos editáveis ​​para CPF, nome, telefone e e-mail -->
        <div class="mb-3">
            <label>CPF:</label>
            <input type="text" name="cpf" value="<?php echo htmlspecialchars($row->cpf); ?>" class="form-control">
        </div>

        <div class="mb-3">
            <label>Nome:</label>
            <input type="text" name="nome" value="<?php echo htmlspecialchars($row->nome); ?>" class="form-control">
        </div>

        <div class="mb-3">
            <label>Telefone:</label>
            <input type="tel" name="contato" value="<?php echo htmlspecialchars($row->contato); ?>" class="form-control">
        </div>

        <div class="mb-3">
            <label>Email:</label>
            <input type="email" name="email" value="<?php echo htmlspecialchars($row->email); ?>" class="form-control">
        </div>

        <!-- Botão para salvar as alterações -->
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>

<?php } ?>