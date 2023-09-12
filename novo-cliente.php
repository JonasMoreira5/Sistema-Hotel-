<h1>Novo Cliente</h1>

<form action="?page=salvar_cliente" method="post">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>CPF:</label>
        <input type="text" name="cpf" class="form-control">
    </div>
    <div class="mb-3">
        <label>Nome:</label>
        <input type="text" name="nome" class="form-control">
    </div>
    <div class="mb-3">
        <label>Telefone:</label>
        <input type="tel" name="contato" class="form-control">
    </div>
    <div class="mb-3">
        <label>Email:</label>
        <input type="email" name="email" class="form-control">
    </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
</form>