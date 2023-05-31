
# Pocket Option - Ferramenta de Análise

Requisitos:
- MYSQL
- PHP8+

Passos para utilização:
1. Baixe o repositório e crie um banco de dados MySQL.
2. Atualize as bibliotecas usando o comando 'composer update'.
3. Altere a conexão com o banco de dados no arquivo .env.
4. Gere as tabelas no banco de dados usando o comando 'php artisan migrate --force'.
5. Insira os ativos com os quais deseja operar no banco de dados. Por exemplo:

Exemplo
```
INSERT INTO `ativo` (`id`, `tipo`, `nome`, `created_at`, `updated_at`) VALUES
(1, 'FX', 'GBPJPY', NULL, NULL),
(2, 'FX', 'AUDUSD', NULL, NULL),
(3, 'FX', 'CADCHF', NULL, NULL);
```

6. Execute a aplicação usando o comando 'php artisan serve'.
7. Abra o navegador e acesse o endereço 127.0.0.1:8000.

Observação: Este projeto é distribuído como código aberto. Caso deseje contribuir com o desenvolvimento, você pode fazer uma doação através da chave PIX ranieu.sousa.9@gmail.com.

Espero que essas informações sejam úteis para você!