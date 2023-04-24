

<h1 align="center">Listra_</h1>

<p align="center">
  <a href="#Objetivo">Objetivo</a> &#xa0; | &#xa0; 
  <a href="#Tecnologias">Tecnologias</a> &#xa0; | &#xa0;
  <a href="#Requisitos">Requisitos</a> &#xa0; | &#xa0;
  <a href="#Iniciando">Iniciando</a> &#xa0; | &#xa0;
  <a href="https://github.com/gabrielsouza988" target="_blank">Autor</a>
</p>

<br>

## :Objetivo ##

Este projeto possui como objetivo simular o financiamento de um veículo no qual o cliente possui interesse.

## :Tecnologias ##

As seguintes ferramentas foram usadas neste projeto:

- [PHP](https://www.php.net/)
- [Laravel](https://laravel.com/)
- [Html](https://developer.mozilla.org/pt-BR/docs/Web/HTML/)
- [Css](https://devdocs.io/css/)
- [VueJs](https://vuejs.org/)

## :white_check_mark: Requisitos ##

Antes de começar :checkered_flag:, você precisa ter o [Git](https://git-scm.com), [Composer](https://getcomposer.org/) e o pacote [Npm](https://nodejs.org/en/docs/) instalados na sua maquina.

## :Iniciando ##

```bash
# Clonar o repositorio
$ git clone https://github.com/gabrielsouza988/listra_.git

# Acessar onde o projeto foi instalado
$ cd listra_

#navegar até a pasta que esta o nosso Back-end
$ cd ./laravel/

# instalar dependencias do composer
$ composer install

# iniciar o nosso banco de dados
# Renomear o arquivo .env.example para .env
# gere uma chave para a sua aplicação
$ php artisan key:generate

# Agora inicie o banco de dados de sua preferencia
# Lembre-se de verificar as credenciais de acesso a ele no arquivo .env

# Agora rode o seguinte codigo para construir o nosso BD
$ php artisan migrate --seed

# Depois você irar até a pasta que esta o nosso Front-end
$ cd ./front-end

#Instalar dependecias do Front
$ npm i

# Para iniciar o projeto você deve rodar os seguintes comandos
# Dentro do diretorio do front-end rode
$ npm run serve

# Dentro do diretorio do Back-end
$ php artisan serve

# OBS: Caso queira mudar a porta do servidor da api do Back-end
# Tem uma const dentro do front-end chamada urlApi
# está no arquivo src/main.js
$ export const urlApi = 'http://127.0.0.1:SUAPORTA/api/';

```

# agora já pode acessar o projeto:
cole este link no seu navegador: http://localhost:8080

<a href="#top">Voltar para o início</a>
