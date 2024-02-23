<h1>Editar Cliente</h1>

<?php
// Verifica se existe um cliente válido com o CPF informado
$id = $_REQUEST["id"];
$sql = "SELECT * FROM cliente WHERE id_cliente=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 0) {
    print "<script>alert('Cliente não encontrado')</script>";
} else {
    $row = $result->fetch_object();
?>

    <!-- Formulário para editar o cliente -->
    <form action="?page=salvar_cliente" method="POST">
        <!-- Campos ocultos para a ação e ID do cliente -->
        <input type="hidden" name="acao" value="editar">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($row->id_cliente); ?>">


        <div class="mb-3">
            <label>Nome:</label>
            <input type="text" name="nome" value="<?php echo htmlspecialchars($row->nome); ?>" class="form-control">
        </div>

        <div class="mb-3">
            <label>Email:</label>
            <input type="email" name="email" value="<?php echo htmlspecialchars($row->email); ?>" class="form-control">
        </div>

        <!-- Botão para salvar as alterações -->
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>

<?php } ?>