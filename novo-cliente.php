<!-- Título da página ou seção -->
<h1>Novo Cliente</h1>

<!-- Formulário para adicionar um novo cliente -->
<form action="?page=salvar_cliente" method="POST">
    <!-- Campo oculto para definir a ação como "cadastrar" -->
    <input type="hidden" name="acao" value="cadastrar">
    
    <!-- Campo para inserir o CPF do cliente -->
    <div class="mb-3">
        <label>CPF:</label>
        <input type="text" name="cpf" class="form-control">
    </div>
    
    <!-- Campo para inserir o nome do cliente -->
    <div class="mb-3">
        <label>Nome:</label>
        <input type="text" name="nome" class="form-control">
    </div>
    
    <!-- Campo para inserir o telefone do cliente -->
    <div class="mb-3">
        <label>Telefone:</label>
        <input type="tel" name="contato" class="form-control">
    </div>
    
    <!-- Campo para inserir o email do cliente -->
    <div class="mb-3">
        <label>Email:</label>
        <input type="email" name="email" class="form-control">
    </div>
    
    <!-- Botão para enviar o formulário -->
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
