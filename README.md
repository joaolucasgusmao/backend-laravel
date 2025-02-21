# Products API

API RESTful desenvolvida com **Laravel** para gerenciar informações de produtos.

## Tecnologias

- PHP
- Laravel
- Nginx
- Redis
- MySQL
- Docker

## Instalação

Para instalar e executar a API, siga os passos abaixo:

1. Clone o repositório:
   ```bash
   $ git clone https://github.com/joaolucasgusmao/products_api.git
   ```
2. Navegue até o diretório do projeto:
   ```bash
   $ cd products_api
   ```
3. Copie o arquivo `.env.example` para `.env` e configure as variáveis de ambiente:
   ```bash
   $ cp .env.example .env
   ```
4. Copie e cole as seguintes variáveis de ambiente no arquivo `.env`:
   ```env
   APP_NAME="Laravel"
   APP_URL=http://localhost:8989

   DB_CONNECTION=mysql
   DB_HOST=db
   DB_PORT=3306
   DB_DATABASE=laravel
   DB_USERNAME=root
   DB_PASSWORD=root

   CACHE_DRIVER=redis
   QUEUE_CONNECTION=redis
   SESSION_DRIVER=redis

   REDIS_HOST=redis
   REDIS_PASSWORD=null
   REDIS_PORT=6379
   ```
5. Suba os containers Docker:
   ```bash
   $ docker-compose up -d
   ```
6. Acesse o container da aplicação:
   ```bash
   $ docker-compose exec app bash
   ```
7. Gere a chave da aplicação Laravel:
   ```bash
   $ php artisan key:generate
   ```
8. Execute as migrações do banco de dados:
   ```bash
   $ php artisan migrate
   ```

A API estará disponível em `http://localhost:8989`.

## Endpoints

### 1. `POST /api/products`

- **Descrição**: Cria um novo Produto.
  - **Corpo**:
  ```json
  {
    "name": "Nome do Produto",
    "description": "Descrição do Produto",
    "price": 100.00,
    "image": "URL da Imagem"
  }
  ```
- **Resposta**:
  - **Código 201**: Created
  - **Corpo**:
  ```json
  {
    "id": 1,
    "name": "Nome do Produto",
    "description": "Descrição do Produto",
    "price": 100.00,
    "image": "URL da Imagem"
  }
  ```

### 2. `GET /api/products`

- **Descrição**: Retorna todos os Produtos.
- **Parâmetros**: Nenhum
- **Resposta**:
  - **Código 200**: OK
  - **Corpo**:
  ```json
  [
    {
      "id": 1,
      "name": "Nome do Produto",
      "description": "Descrição do Produto",
      "price": 100.00,
      "image": "URL da Imagem"
    }
  ]
  ```

### 3. `GET /api/products/{id}`

- **Descrição**: Retorna detalhes de um Produto específico.
- **Parâmetros**:
  - `id`: ID do Produto
- **Respostas**:
  - **Código 200**: OK
  - **Corpo**:
  ```json
  {
    "id": 1,
    "name": "Nome do Produto",
    "description": "Descrição do Produto",
    "price": 100.00,
    "image": "URL da Imagem"
  }
  ```
  - **Código 404**: Not found
  - **Corpo**:
  ```json
  {
    "message": "Product not found."
  }
  ```

### 4. `PATCH /api/products/{id}`

- **Descrição**: Atualiza as informações de um Produto específico.
- **Parâmetros**:
  - `id`: ID do Produto
  - **Corpo**:
  ```json
  {
    "name": "Novo Nome do Produto",
    "description": "Nova Descrição do Produto",
    "price": 150.00,
    "image": "Nova URL da Imagem"
  }
  ```
- **Respostas**:
  - **Código 200**: OK
  - **Corpo**:
  ```json
  {
    "id": 1,
    "name": "Novo Nome do Produto",
    "description": "Nova Descrição do Produto",
    "price": 150.00,
    "image": "Nova URL da Imagem"
  }
  ```
  - **Código 404**: Not found
  - **Corpo**:
  ```json
  {
    "message": "Product not found."
  }
  ```

### 5. `DELETE /api/products/{id}`

- **Descrição**: Remove um Produto específico.
- **Parâmetros**:
  - `id`: ID do Produto
- **Respostas**:
  - **Código 204**: No content
  - **Código 404**: Not found
  - **Corpo**:
  ```json
  {
    "message": "Product not found."
  }
  ```
