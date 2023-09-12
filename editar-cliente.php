<h1>Editar Cliente</h1>
<?php
    $sql = "select * from cliente where cpf=".$_REQUEST["id"];

    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<form action="?page=salvar_cliente" method="post">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->cpf; ?>">
    <div class="mb-3">
        <label>CPF:</label>
        <input type="text" disabled name="cpf" value="<?php print $row->cpf; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Nome:</label>
        <input type="text" name="nome" value="<?php print $row->nome; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Telefone:</label>
        <input type="tel" name="contato"
        value="<?php print $row->contato; ?>"
        class="form-control">
    </div>
    <div class="mb-3">
        <label>Email:</label>
        <input type="email" name="email" value="<?php print $row->email; ?>" class="form-control">
    </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
</form>