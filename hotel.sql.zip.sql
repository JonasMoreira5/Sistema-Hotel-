CREATE TABLE cliente 
( 
 cpf VARCHAR(11) PRIMARY KEY,  
 nome VARCHAR(200) NOT NULL,  
 contato VARCHAR(11) NOT NULL,  
 email VARCHAR(200) NOT NULL
); 

CREATE TABLE categoria 
( 
 cat_id INT PRIMARY KEY AUTO_INCREMENT,  
 descricao VARCHAR(200) NOT NULL,  
 valor DECIMAL(4,2) NOT NULL  
); 

CREATE TABLE quarto 
( 
 id_quarto INT PRIMARY KEY AUTO_INCREMENT,  
 descricao VARCHAR(200) NOT NULL,  
 idcategoria INT,
 CONSTRAINT fk_qua_cat FOREIGN KEY (idcategoria) REFERENCES categoria (cat_id)
); 

CREATE TABLE reserva 
( 
 dt_inicial DATE,  
 dt_final DATE,  
 cpf VARCHAR(11),  
 id_quarto INT,
 CONSTRAINT fk_res_cli FOREIGN KEY (cpf) REFERENCES cliente (cpf),
 CONSTRAINT fk_res_qua FOREIGN KEY (id_quarto) REFERENCES quarto (id_quarto)  
);
