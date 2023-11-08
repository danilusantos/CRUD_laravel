# CRUD Laravel

O desenvolvimento do projeto se destina a apuração de aptidões com as ferramentas da atualidade.
Foi realizado um CRUD utilizando a linguagem PHP, no framework Laravel. O visual para o CRUD foi feito com Bootstrap e para armazenamendo dos dados: o MySQL.

## Stack utilizada

**Front-end:** Bootstrap 5.3, JQuery, Ajax

**Back-end:** Laravel 10, PHP 8.1

**Banco de Dados:** MySQL 8.2

**Bibliotecas Adicionais Laravel:** [FakerPHP](https://fakerphp.github.io/), [Laravel-Breadcrumbs](https://github.com/diglactic/laravel-breadcrumbs)

## Levantar o Projeto

Baixe o repositório do Github, abra a pasta com o console e baixe as dependências

```bash
  composer install
```
Depois, crie uma cópia do arquivo .env.example para .env

```bash
  cp .env.example .env
```
Configure o arquivo .env, colocando as configurações do seu MySQL.

Após configurar, rode o comando para gerar a chave do Projeto

```bash
  php artisan key:generate
```

Limpe o cache do seu Projeto

```bash
  php artisan optimize
```

Rode as migrações e os seeders para o banco de dados

```bash
  php artisan migrate --seed
```

Levante o servidor para acessar o site

```bash
  php artisan serve
```
