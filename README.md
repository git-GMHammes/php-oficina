# php-oficina
Projeto para controle de Oficina. 
### Informação
O presente projeto esta sendo criado nos fianis de semana, por este mitivo não esta tendo um desenvolvimento muito agil. 

| Tecnologia        | Descrição           |
|-------------------|---------------------|
| PHP               | V.7.4.9 e 8.2       |
| Framework         | Codeigniter 4.3     |
| Banco de dados    | MySQL 5.3           |
| Ambiente e infra  | Docker Composer     |  

O presente projeto possui a seguinte estrutura:

- **C:\laragon\www\php-oficina\main**
  - *Código do framework original*
- **C:\laragon\www\php-oficina\mysql-init**
  - *Coloque no script.sql os scripts para criação do banco de dados*
  - **C:\laragon\www\php-oficina\src**
  - *Código fonte do projeto principal*
- **C:\laragon\www\php-oficina\.gitignore**
- **C:\laragon\www\php-oficina\docker-compose.yml**
  - *Abaixo desta estrutura acomapnha os comandos para construir (buid) e levantar (up) o projeto*
- **C:\laragon\www\php-oficina\Dockerfile**
  - *Imagem principal do PHP e do servidor web*
- **C:\laragon\www\php-oficina\README.md**

`Comando para o Docker:`

> docker-compose build

> docker-compose up

### Entre em contato:
Nome: Gustavo Hammes

Site: https://habilidade.com

E-mail: github@habilidade.com
