# confs-apache2
Nessa pasta estão os arquivos de configuração do Apache2 na máquina usada como **servidor web**.

## Funcionamento
Os arquivos salvos aqui foram criados no caminho **/etc/apache2/sites-available**. Após isso, usamos o comando **a2ensite** para habilitá-lo, criando uma cópia sua em **/etc/apache2/sites-enabled**.

Acessamos então a máquina do cliente, que possui interface gráfica. Adicionamos no arquivo em **/etc/hosts** o IP da placa de rede cadastrada previamente na máquina do servidor web e o nome do site que desejamos cadastrar.

Fazendo isso é possível acessar o site direto do navegador na máquina cliente.
