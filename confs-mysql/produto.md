# SQL da tabela 'produto'
Nessa pasta estão comandos SQL para configuração inicial da tabela *produto*.

## Criando a tabela - Create
    CREATE TABLE produto (
        id INT(6) PRIMARY KEY AUTO_INCREMENT NOT NULL,
        nome VARCHAR(30) NOT NULL,
        preco FLOAT(4) NOT NULL,
        tipo_id INT(6) NOT NULL,
        FOREIGN KEY (tipo_id) REFERENCES tipo(id)
    );
    
![image](https://user-images.githubusercontent.com/78737572/210020333-7d506b7f-1df6-4d0e-bce0-df686ecd569a.png)

## Adicionando um objeto qualquer

    INSERT INTO produto VALUES (1, 'Vaso de ceramica', 24.99, 1);
    
![image](https://user-images.githubusercontent.com/78737572/210020327-28402a1d-429a-44e8-9442-69cb73052e67.png)
