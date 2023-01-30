# SQL da tabela 'buque'
Nessa pasta estão comandos SQL para configuração inicial da tabela *buque*.

## Criando a tabela - Create
    CREATE TABLE buque (
        id INT(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
        nome VARCHAR(100) NOT NULL,
        preco DECIMAL(10,2) NOT NULL,
        flor_id INT(11) NOT NULL,
        FOREIGN KEY (flor_id) REFERENCES flor(id)
    );
