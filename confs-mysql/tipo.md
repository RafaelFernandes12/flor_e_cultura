# SQL da tabela 'tipo'
Nessa pasta estão comandos SQL para configuração inicial da tabela *tipo*.

## Criando a tabela - Create
    CREATE TABLE tipo (
        id INT(6) PRIMARY KEY AUTO_INCREMENT NOT NULL,
        nome VARCHAR(50) NOT NULL
    );
	
## Adicionando um objeto qualquer

    INSERT INTO tipo VALUES (1, 'Vaso');
