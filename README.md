# Moodle App

Bem-vindo ao Moodle App, um projeto pessoal projetado para facilitar a interação entre estudantes e professores para envio de tarefas e avaliações.

## Recursos

- **Funções do Usuário:**
  - Estudantes podem se registrar e enviar arquivos de tarefas para revisão.
  - Professores podem fazer login, avaliar tarefas e especificar áreas de especialização para avaliação.

- **Fluxo de Trabalho de Tarefas:**
  - Estudantes:
    - Enviam arquivos de tarefas.
    - Especificam a área para a qual a tarefa se destina.
  - Professores:
    - Avaliam as tarefas enviadas.
    - Indicam as áreas para as quais estão licenciados para dar notas.

- **Construído com:**
  - [Laravel Breeze](https://laravel.com/docs/8.x/starter-kits#breeze-and-inertia)
  - PHP
  - Vue.js
  - Banco de dados MySQL

## Instalação

Para executar o Moodle App localmente, siga estas etapas:

1. Clone o repositório:
   ```bash
   git clone https://github.com/seu-nome/moodle-app.git
2. Instale as dependências:
   ```bash
    composer install
    npm install && npm run dev
3. Configure o banco de dados:
    Crie um novo banco de dados MySQL para o aplicativo.
    Copie o arquivo .env.example para .env e atualize a configuração do banco de dados.
    Execute as migrações e populadores do banco de dados:
   ```bash
   php artisan migrate --seed
4. Gere a chave da aplicação:
   ```bash
   php artisan key:generate
5. Inicie o servidor de desenvolvimento:
   ```bash
   php artisan serve

Acesse http://localhost:8000 no seu navegador para acessar o Moodle App.

## Uso

# Estudante

1. Registre-se para uma conta.
2. Faça login e vá para a seção "Enviar Tarefa".
3. Envie seu arquivo de tarefa e especifique a área para revisão.
# Professor

1. Registre-se para uma conta.
2. Faça login e vá para a seção "Avaliar Tarefas".
3. Avalie as tarefas enviadas e especifique as áreas para as quais você está licenciado para dar notas.

## Licença

Este projeto está licenciado sob a Licença MIT.
