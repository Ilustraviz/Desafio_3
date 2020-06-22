## Desafio Ilustraviz 3

O desafio consiste em:
- Layoutar a pagina conforme desafio 2
- Carregar os dados do usuários através de uma REST API
- Exibir os usuários através dos dados retornados do banco de dados pela REST API
- Exibir todos os telefones no card do usuário
- Programar a busca de usuários através do input

## O que pode ser feito

- Uso de sass para layoutar
- Uso de Vue.js

## Bonus

- Criar uma página de usuário
- Criar uma rota para adição de mais usuários

## Instalação

### xamp ou direto servidor
- Baixe o repositório
- Coloque os arquivos em **/var/www/html** ou em **htdocs** caso esteja utilizando o xamp no Windows
- Em **/var/www** (ou htdocs), crie as pastas **configs**
- Em **configs**, crie um arquivo **configs.php** e cole o codigo a seguir setando as variáveis:

```
<?php

const ROUTE = "http://192.168.0.20"; //endereço onde esta o site
const ROUTE_WEBSITE = "http://192.168.0.20/website"; //pasta website do projeto, se nao for diferente, altere o ip
const ROUTE_API = "http://192.168.0.20"; //mesmo endereço do site para este projeto
const TPL_DIR_BASE = "/"; //pasta template html, colocar da raiz do servidor até a pasta do projeto

const SQL_HOSTNAME = "localhost"; //endereço do banco de dados
const SQL_USERNAME = "root"; //usuario
const SQL_PASSWORD = ""; //senha
const SQL_DBNAME = "my_bd"; //banco de dados

?>
```
- Crie um banco de dados e chame de **my_bd**, caso deseje chamar de outro nome, lembre-se de setar o nome no arquivo **configs.php**

### Vagrant
- Baixe o repositório
- Abra o terminal e digite **vagrant up teste_ilustraviz**
- O ip de instalação é o **192.168.0.180**, caso queira outro ip, modificar no Vagrantfile e o arquivo **./vagrant-configs/configs.php**



Este projeto utiliza como base o slim framework para gerenciar as rotas, porém, ao iniciar o projeto, há uma instrução de onde e como modificar os arquivos caso não haja experiencia com o framework.

É necessário liberar o servidor apache para ler o arquivo **.htaccess**

Após finalizado, enviar os arquivos por e-mail ou repositório do git