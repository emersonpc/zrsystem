## Como instalar o projeto?

O projeto se encontra na branch master.

- Baixe o projeto com o comando: git clone https://github.com/emersonpc/zrsystem.git
- Configure no MariaDB ou Mysql um banco de dados com o nome: zrsystem
- No .env do Laravel as configuraçoes do banco é usuario: root e senha: [em branco]
- Após isso rode as migrate para gravar a estrutura do banco: php artisan migrate
- Execute o projeto com: php artisan serve
- E abra o endereço no navegador: localhost:8000
