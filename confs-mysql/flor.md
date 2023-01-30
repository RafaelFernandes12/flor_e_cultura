# SQL da tabela 'flor'
Nessa pasta estão comandos SQL para configuração inicial da tabela *flor*.

## Criando a tabela - Create
    CREATE TABLE flor (
        id INT(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
        nome VARCHAR(50) NOT NULL,
        preco DECIMAL(10,2) NOT NULL
    );
    
