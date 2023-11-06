-- Criação da tabela cliente
CREATE TABLE cliente 
(    
    cpf VARCHAR(11) PRIMARY KEY,  -- CPF do cliente como chave primária
    nome VARCHAR(200) NOT NULL,  -- Nome do cliente
    contato VARCHAR(11) NOT NULL,  -- Contato telefônico do cliente
    email VARCHAR(200) NOT NULL  -- Email do cliente
); 

-- Criação da tabela Funcionario
CREATE TABLE Funcionario 
(   
    nome VARCHAR(200) NOT NULL,  -- Nome do Funcionario
    cpf VARCHAR(11) PRIMARY KEY,  -- CPF do Funcionario como chave primária
    login VARCHAR(255) NOT NULL, -- login do Fucionario
    senha VARCHAR(255) NOT NULL,  -- senha do Funcionario
);

-- Criação da tabela categoria
CREATE TABLE categoria 
( 
    id_categoria INT PRIMARY KEY AUTO_INCREMENT,  -- ID da categoria como chave primária e auto-incremento
    idservico INT; -- Chave estrangeira referenciando a categoria do servico
    descricao VARCHAR(200) NOT NULL,  -- Descrição da categoria
    valor DECIMAL(4,2) NOT NULL  -- Valor associado à categoria
); 

-- Criação da tabela quarto
CREATE TABLE quarto 
( 
    id_quarto INT PRIMARY KEY AUTO_INCREMENT,  -- ID do quarto como chave primária e auto-incremento
    descricao VARCHAR(200) NOT NULL,  -- Descrição do quarto
    idcategoria INT,  -- Chave estrangeira referenciando a categoria do quarto
    CONSTRAINT fk_qua_cat FOREIGN KEY (idcategoria) REFERENCES categoria (id_categoria)  -- Restrição de chave estrangeira
); 

-- Criação da tabela reserva
CREATE TABLE reserva 
(    
    dt_inicial DATE,  -- Data inicial da reserva
    dt_final DATE,  -- Data final da reserva
    cpf VARCHAR(11),  -- CPF do cliente que fez a reserva
    id_quarto INT,  -- ID do quarto reservado
    CONSTRAINT fk_res_cli FOREIGN KEY (cpf) REFERENCES cliente (cpf),  -- Restrição de chave estrangeira para cliente
    CONSTRAINT fk_res_qua FOREIGN KEY (id_quarto) REFERENCES quarto (id_quarto)  -- Restrição de chave estrangeira para quarto

);

-- TO DO// tabela serviços
CREATE TABLE servico (
    cod_servico INT PRIMARY KEY AUTO_INCREMENT,
    tipo_servico VARCHAR(100) NOT NULL,
    valor_servico DECIMAL(4,2) NOT NULL
    cat_id INT -- Chave estrangeira referenciando o servico da categoria
    CONSTRAINT fk_cat_id FOREIGN KEY (cat_id) REFERENCES categoria (idservico)  -- Restrição de chave estrangeira
);