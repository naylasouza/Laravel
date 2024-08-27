<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Este é um projeto CRUD (Create, Read, Update, Delete) desenvolvido em Laravel. O objetivo deste projeto é fornecer uma aplicação simples que permita criar, editar e excluir itens no banco de dados.


## Requisitos

- PHP >= 8.0
- Composer
- MySQL ou MariaDB
- XAMPP (para gerenciamento de servidor local)

## Instale as dependências do Composer

composer install


### Crie o banco de dados

No seu gerenciador de banco de dados, como o phpMyAdmin, crie um banco de dados com o nome desejado.


## Configure o arquivo .env

cp .env.example .env


## Configure o arquivo .env
Copie o arquivo de exemplo .env.example para criar o arquivo .env usando cp .env.example .env.

Em seguida, configure as informações do banco de dados no arquivo .env com os detalhes correspondentes ao seu ambiente:

Defina o nome do banco de dados, o usuário e a senha conforme o seu ambiente.
## Gere a chave da aplicação
Para gerar a chave da aplicação Laravel, use o comando php artisan key:generate.

## Execute as migrações
Para criar as tabelas do banco de dados necessárias para o funcionamento da aplicação, execute as migrações com o comando php artisan migrate. php artisan migrate

## Inicie o servidor de desenvolvimento
Finalmente, inicie o servidor de desenvolvimento para rodar a aplicação usando php artisan serve.

Agora você pode acessar a aplicação no navegador em http://localhost:8000.
