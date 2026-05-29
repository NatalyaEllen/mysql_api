
# MySQL API - Laravel

## Descrição do Projeto

Este projeto foi desenvolvido utilizando Laravel Framework com integração ao banco de dados MySQL.

A aplicação possui:

* API REST para cadastro e listagem de produtos;
* Integração com banco MySQL;
* Interface Web estilizada;
* Uso de rotas Web e API;
* Frontend utilizando Blade + CSS + Vite.

---

## Tecnologias Utilizadas

* PHP 8
* Laravel
* MySQL
* DBeaver
* Laragon
* VS Code
* Thunder Client
* Vite
* CSS

---

## Funcionalidades

### API de Produtos

#### Listar Produtos

```txt
GET /api/products
```

Retorna todos os produtos cadastrados em JSON.

#### Cadastrar Produtos

```txt
POST /api/products
```

Exemplo:

```json
{
  "name": "Notebook",
  "price": 3500
}
```

---

## Interface Web

### Produtos

```txt
/products-view
```

Exibe os produtos cadastrados em uma tabela estilizada.

### Rick and Morty

```txt
/rickmorty-view
```

Exibe personagens da API pública Rick and Morty.

---

## Banco de Dados

Banco utilizado:

```txt
mysql_api
```

Tabela:

```txt
products
```

Campos:

```txt
id
name
price
created_at
updated_at
```

---

# Como Executar o Projeto

## Pré-requisitos

* PHP 8
* Composer
* MySQL
* Laragon
* VS Code

---

## 1. Iniciar o Laragon

Abrir o Laragon e clicar em:

```txt
Start All
```

Verificar se:

```txt
Apache Running
MySQL Running
```

estão ativos.

---

## 2. Clonar o repositório

```bash
git clone https://github.com/NatalyaEllen/mysql_api.git
```

---

## 3. Entrar na pasta

```bash
cd mysql_api
```

---

## 4. Instalar dependências

```bash
composer install
```

---

## 5. Configurar arquivo .env

### Windows

```bash
copy .env.example .env
```

### Linux / macOS

```bash
cp .env.example .env
```

---

## 6. Gerar chave do Laravel

```bash
php artisan key:generate
```

---

## 7. Configurar banco de dados

Editar o arquivo `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=mysql_api
DB_USERNAME=root
DB_PASSWORD=
CACHE_STORE=file
```

---

## 8. Criar banco de dados

```sql
CREATE DATABASE mysql_api;
```

---

## 9. Criar tabela products

```sql
USE mysql_api;

CREATE TABLE products (
    id BIGINT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    price FLOAT,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL
);
```

---

## 10. Executar o projeto

```bash
php artisan serve --port=8000
```

Será exibido:

```txt
INFO Server running on http://127.0.0.1:8000
```

---

## Rotas Disponíveis

### Página de Produtos

```txt
http://127.0.0.1:8000/products-view
```

Exibe os produtos cadastrados em uma interface Web.

### Página Rick and Morty

```txt
http://127.0.0.1:8000/rickmorty-view
```

Exibe personagens consumidos da API pública Rick and Morty.

### API de Produtos

```txt
http://127.0.0.1:8000/api/products
```

Retorna os produtos em formato JSON.

---

## Testando Cadastro de Produtos

Método:

```txt
POST
```

URL:

```txt
http://127.0.0.1:8000/api/products
```

Body JSON:

```json
{
  "name": "Notebook",
  "price": 3500
}
```

---

## Tecnologias e Conceitos Aplicados

* Laravel MVC
* API REST
* MySQL
* CRUD básico
* Rotas Web e API
* Blade
* JSON
* Integração com banco de dados
* Consumo de API externa
* Vite
* CSS
* Thunder Client


