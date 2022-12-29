# SQL da tabela 'tipo'
Nessa pasta estão comandos SQL para configuração inicial da tabela *tipo*.

## Criando a tabela - Create
    CREATE TABLE tipo (
        id INT(6) PRIMARY KEY AUTO_INCREMENT NOT NULL,
        nome VARCHAR(50) NOT NULL
    );
    
![image](https://user-images.githubusercontent.com/78737572/210020127-5900164a-e681-43ab-85e6-d4cb6525bfce.png)

## Adicionando um objeto qualquer

    INSERT INTO tipo VALUES (1, 'Vaso');
    
![image](https://user-images.githubusercontent.com/78737572/210020147-47412934-6267-4936-b174-bb74ff090593.png)
