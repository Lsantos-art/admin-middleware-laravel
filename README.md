<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Sobre middlewares

O uso do middleware permite que os usuários executem solicitações como enviar formulários em um navegador da Web ou permitir que o servidor Web apresente páginas dinâmicas da web com base no perfil de um usuário.

## Tutorial de instalação

1 - Baixe ou clone este reposítorio.   

2 - Rode o comando: "composer install"  

3 - Rode o comando: "php artisan migrate"  

4 - Rode o comando: "php artisan db:seed"  

5 - Rode o comando: "php artisan serve" e clique em http://localhost:8000


## Detalhes da aplicação

Este projeto possui um middleware que controla o acesso admin através da coluna "role" da tabela de usuário. Caso necessite criar novos middlewares com outras validações faça:

1 - Rode o comando: "php artisan make:middleware nome_middleware"  

2 - Em App/Http/Kernel.php adicione um apelido para o seu middleware  


por exemplo:   

'master' => \App\Http\Middleware\Master::class,

Pronto, agora é só inserir o middleware nas rotas desejadas em web.php ou api.php


## Contribuição de Lsantos developer



