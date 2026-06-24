# Site Institucional ETEC Zona Leste

Site institucional desenvolvido em Laravel 11 com Breeze para a Escola Técnica da Zona Leste (ETEC), localizada em São Paulo, SP.

## Sobre o Projeto

Este projeto foi desenvolvido como atividade de Programação Web III. O site apresenta informações institucionais da ETEC Zona Leste, cursos técnicos oferecidos, eventos, formulário de contato e um sistema de gerenciamento de notas para usuários autenticados.

## Funcionalidades

### Públicas
- Página Home com apresentação institucional
- Listagem de cursos técnicos (Administração, Contabilidade, Desenvolvimento de Sistemas, Finanças, Recursos Humanos)
- Agenda de eventos e atividades
- Formulário de contato com validação CSRF
- Página 404 personalizada

### Autenticadas
- Sistema de autenticação com login, registro e recuperação de senha
- Gerenciamento de notas acadêmicas (criar, editar, deletar)
- Dashboard do usuário

## Tecnologias

- Backend: Laravel 11
- Autenticação: Laravel Breeze
- Banco de Dados: SQLite
- Frontend: Blade Templates + Tailwind CSS
- Gerenciadores: Composer (PHP) e npm (Node.js)

## Estrutura do Projeto

```
app/
├── Http/Controllers/
│   ├── HomeController.php
│   ├── CourseController.php
│   ├── EventController.php
│   ├── ContactController.php
│   └── NoteController.php
└── Models/
    ├── User.php
    ├── Course.php
    ├── Event.php
    ├── Note.php
    └── Contact.php

database/
├── migrations/
│   ├── create_courses_table.php
│   ├── create_events_table.php
│   ├── create_notes_table.php
│   └── create_contacts_table.php
└── seeders/

resources/views/
├── layouts/app.blade.php
├── home.blade.php
├── courses/
├── events/
├── contact/
├── notes/
└── errors/404.blade.php

routes/
├── web.php
└── auth.php
```

## Instalação

### Pré-requisitos
- PHP >= 8.2
- Composer 2.x
- Node.js >= 18.x

### Passos

1. Clone o repositório
   ```bash
   git clone https://github.com/ArthurGutemberg9/atividade-pw-3.git
   cd atividade-pw-3/etec-plus-laravel
   ```

2. Instale as dependências
   ```bash
   composer install
   npm install
   ```

3. Configure o ambiente
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. Execute as migrations
   ```bash
   php artisan migrate
   ```

5. Compile os assets
   ```bash
   npm run build
   ```

6. Inicie o servidor
   ```bash
   php artisan serve
   ```

O site estará disponível em `http://localhost:8000`

## Rotas

### Públicas
- GET / - Página inicial
- GET /cursos - Listagem de cursos
- GET /cursos/{id} - Detalhes do curso
- GET /eventos - Listagem de eventos
- GET /eventos/{id} - Detalhes do evento
- GET /contato - Formulário de contato
- POST /contato - Enviar mensagem

### Autenticadas
- GET /dashboard - Dashboard
- GET /notas - Listagem de notas
- GET /notas/criar - Criar nota
- POST /notas - Armazenar nota
- GET /notas/{id}/editar - Editar nota
- PUT /notas/{id} - Atualizar nota
- DELETE /notas/{id} - Deletar nota

### Autenticação
- GET /login - Login
- GET /register - Registro
- GET /forgot-password - Recuperação de senha
- POST /logout - Logout

## Banco de Dados

**courses**
- id (PK)
- name (string)
- description (text)
- image_url (string, nullable)
- timestamps

**events**
- id (PK)
- title (string)
- description (text)
- date (date)
- image_url (string, nullable)
- timestamps

**notes**
- id (PK)
- user_id (FK)
- course_id (FK, nullable)
- title (string)
- content (text)
- timestamps

**contacts**
- id (PK)
- name (string)
- email (string)
- subject (string)
- message (text)
- timestamps

## Visualizações

### Home
![Screenshot da Página Home](https://files.manuscdn.com/user_upload_by_module/session_file/310519663774038413/NPrhnjfBgWqeQyhw.png)

### Cursos
![Screenshot da Página de Cursos](https://files.manuscdn.com/user_upload_by_module/session_file/310519663774038413/zxlOADInQUBJpzOs.png)

### Eventos
![Screenshot da Página de Eventos](https://files.manuscdn.com/user_upload_by_module/session_file/310519663774038413/caVPNnnILrKLSHEh.png)

### Contato
![Screenshot da Página de Contato](https://files.manuscdn.com/user_upload_by_module/session_file/310519663774038413/iWdcGouZLCkoiUOr.png)

### Login
![Screenshot da Página de Login](https://files.manuscdn.com/user_upload_by_module/session_file/310519663774038413/JwzRyGkHqSzGtgKu.png)

### Página 404
![Screenshot da Página 404](https://files.manuscdn.com/user_upload_by_module/session_file/310519663774038413/QVzonIWPjhXRdEov.png)

## Segurança

- Proteção CSRF em todos os formulários
- Validação de entrada em todos os campos
- Autenticação segura com Laravel Breeze
- Senhas criptografadas com bcrypt
- Proteção de rotas autenticadas

## Design

O site utiliza as cores institucionais do Centro Paula Souza:
- Vermelho: #C41E3A
- Cinza Escuro: #2C3E50
- Cinza Claro: #ECF0F1

Layout totalmente responsivo para dispositivos móveis, tablets e desktops.

## Informações da ETEC

- Endereço: Av. Águia de Haia, 2633 - A.E Carvalho, São Paulo - SP
- Telefone: (11) 2045-4000
- E-mail: e211dir@cps.sp.gov.br
- Website: https://eteczonaleste.cps.sp.gov.br/

## Licença

Projeto educacional desenvolvido para fins de aprendizado em desenvolvimento web com Laravel.
