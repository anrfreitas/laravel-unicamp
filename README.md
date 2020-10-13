# Estudos em Laravel para Concurso Público 013/2019 (UNICAMP)
Este projeto destina-se para estudos tecnico cientificos com finalidade de aprovacao em concurso publico em universidade publica no interior do estado de sao paulo.

## Objetivo
Desenvolver um cadastro de clientes por meio de Blades Layouts, Model, Controllers, Routers, Migration, Factory e Seeder na linguagem PHP utilizando Laravel 5.6 framework. Nesse teste os avaliadores irao avaliar toda a capacidade de criação de arquitetura, qualidade do código, validações, elaboração de layout e usabilidade.

## O que fazer?
A raiz deste repositório é um workspace do projeto em laravel 5.6. Para rodar o projeto, deve-se usar as seguintes tecnologias:
- PHP 7.4
- PHP 7.4 - cli
- PHP 7.4 - mbstring
- PHP 7.4 - gd
- PHP 7.4 - mysql
- PHP 7.4 - pgsql
- PHP 7.4 - sqlite
- PHP 7.4 - bcmath
- PHP 7.4 - bz2
- PHP 7.4 - intl
- PHP 7.4 - zip
- PHP 7.4 - xml
- Apache2 Server
- mySQL Server

## Comandos e localização de objetos no framework

### comandos básicos
- php artisan make:model “model”
- php artisan make:controller “controller”
- php artisan make:model -m -f “model” - creates factory and migration
- php artisan make:seeder “seeder”
- php artisan tinker

### criando projeto
- criando projecto: composer create-project laravel/laravel “nome” “versao” --prefer-dist

### atualizando database com migration
- php artisan migrate:install
- config/database.php (arquivo de configuraçao)
- root/ .env (arquivo de configuraçao)
- php artisan cache:clear

### comandos de migration
- commit: php artisan migrate –seed
- rollback: php artisan migrate:rollback

### comando para popular seeds
- php artisan db:seed --class=”nome” se omitido class popula todos

### atualizando projeto / baixando dependencias
- composer update --no-scripts
- composer dump-autoload

### localização dos objetos
- models: 			app/
- controllers:		app/http/controllers/
- factories:		database/factories
- seeders:			database/seeds/
- migrations:		database/migrations/
- config:			config/app.php
- database:		config/database.php e (.env)
- routes:			routes/web.php
- views:			resources/views/ (arq. .blade.php) – blade layouts
- storage:			storage/app/public/
- libs:			vendor/
