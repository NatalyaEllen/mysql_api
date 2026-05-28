# MySQL API - Laravel

## Descrição do Projeto

Este projeto foi desenvolvido utilizando Laravel Framework com integração ao banco de dados MySQL.

A aplicação possui:

* API REST para cadastro e listagem de produtos;
* Integração com banco MySQL;
* Interface Web estilizada;
* Consumo da API Rick and Morty;
* Uso de rotas Web e API;
* Frontend utilizando Blade + CSS + Vite.

---

# Tecnologias Utilizadas

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

# Funcionalidades

## API de Produtos

### Listar Produtos

```txt
GET /api/products
```

Retorna todos os produtos cadastrados em JSON.

---

### Cadastrar Produtos

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

# Interface Web

## Produtos

```txt
/products-view
```

Exibe os produtos cadastrados em uma tabela estilizada.

---

## Rick and Morty

```txt
/rickmorty-view
```

Exibe personagens da API Rick and Morty em cards estilizados.

---

# Banco de Dados

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

## 1. Clonar repositório

```bash
git clone https://github.com/NatalyaEllen/mysql_api.git
```

---

## 2. Entrar na pasta

```bash
cd mysql_api
```

---

## 3. Instalar dependências PHP

```bash
composer install
```

---

## 4. Instalar dependências frontend

```bash
npm install
```

---

## 5. Configurar arquivo .env

Copiar:

```bash
copy .env.example .env
```

---

## 6. Gerar chave do Laravel

```bash
php artisan key:generate
```

---

## 7. Configurar banco no .env

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

# Como Criar Banco de Dados

No DBeaver ou MySQL:

```sql
CREATE DATABASE mysql_api;
```

---

# Como Criar Tabela

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

# Executar o Projeto

## Terminal 1 — Vite

```bash
npm run dev
```

---

## Terminal 2 — Laravel

```bash
php artisan serve
```

---

# Acessar no Navegador

## Produtos

```txt
http://127.0.0.1:8000/products-view
```

---

## Rick and Morty

```txt
http://127.0.0.1:8000/rickmorty-view
```

---

## API Products

```txt
http://127.0.0.1:8000/api/products
```

---

# Testar POST no Thunder Client

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

# Conceitos Aplicados

* API REST
* Laravel MVC
* Rotas Web e API
* Integração MySQL
* Consumo de API externa
* JSON
* Blade
* Vite
* CSS
* CRUD básico
* Frontend e Backend integrados

