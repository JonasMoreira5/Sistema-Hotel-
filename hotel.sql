-- Criação da tabela cliente
CREATE TABLE cliente 
( 
    cpf VARCHAR(11) PRIMARY KEY,  -- CPF do cliente como chave primária
    nome VARCHAR(200) NOT NULL,  -- Nome do cliente
    contato VARCHAR(11) NOT NULL,  -- Contato telefônico do cliente
    email VARCHAR(200) NOT NULL  -- Email do cliente
); 

-- Criação da tabela categoria
CREATE TABLE categoria 
( 
    id_categoria INT PRIMARY KEY AUTO_INCREMENT,  -- ID da categoria como chave primária e auto-incremento
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

-- TO DO// tabela funcionario
CREATE TABLE funcionario (
    id_funcionario INT(4) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    login VARCHAR(15) NOT NULL,
    senha VARCHAR(8) NOT NULL
);

-- TO DO// tabela serviços
CREATE TABLE Servico (
    cod_servico INT PRIMARY KEY AUTO_INCREMENT,
    tipo_servico INT AUTO_INCREMENT,
    valor_servico DECIMAL(4,2) NOT NULL,
    CONSTRAINT fk_Cliente_cpf FOREIGN KEY (cpf) REFERENCES cliente (cpf),  -- Restrição de chave estrangeira para cliente
    CONSTRAINT fk_Quarto_id_quarto FOREIGN KEY (id_quarto) REFERENCES quarto (id_quarto)
);