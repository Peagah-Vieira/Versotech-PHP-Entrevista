# Versotech-PHP-Teste

Um pequeno projeto realizado com base no que foi pedido para o teste da [Versotech](versotech.com.br)

Repositório base: [GitHub - dlimars/prova-php-entrevista: Teste de conhecimentos para entrevista em php](https://github.com/dlimars/prova-php-entrevista)

## Estrutura do banco de dados

```sql
    tabela: users
        id INTEGER NOT NULL PRIMARY KEY,
        name VARCHAR(100) NOT NULL,
        email VARCHAR(100) NOT NULL,
        color_id FOREIGN KEY (color_id) REFERENCES colors (id)    
```

```sql
    tabela: colors
        id INTEGER NOT NULL PRIMARY KEY,
        color_name varchar(50) NOT NULL
```

## Rodando localmente

Clone o projeto

```bash
git clone https://github.com/Peagah-Vieira/Versotech-PHP-Teste.git
```

Execute o composer-autoload

```bash
composer dump-autoload
```

Inicie o servidor

```bash
php -S 0.0.0.0:7070
```

Digite no navegador

```bash
http://localhost:7070
```
