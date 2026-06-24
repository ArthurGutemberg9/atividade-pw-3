# Site Institucional ETEC Zona Leste

Um site institucional moderno e responsivo desenvolvido em **Laravel 11** com **Breeze** para a Escola Técnica da Zona Leste (ETEC), localizada em São Paulo, SP.

## 📋 Sobre o Projeto

Este projeto foi desenvolvido como atividade de desenvolvimento web, seguindo as especificações de um professor de programação. O site apresenta informações institucionais da ETEC Zona Leste, cursos técnicos oferecidos, eventos, formulário de contato e um sistema de gerenciamento de notas para usuários autenticados.

## ✨ Funcionalidades

### Públicas
- **Página Home**: Apresentação institucional com informações sobre a ETEC Zona Leste
- **Página Cursos**: Listagem dos cursos técnicos oferecidos (Administração, Contabilidade, Desenvolvimento de Sistemas, Finanças, Recursos Humanos)
- **Página Eventos**: Agenda de eventos e atividades da escola
- **Formulário de Contato**: Formulário com validação CSRF para mensagens de visitantes
- **Página 404 Personalizada**: Página de erro customizada mantendo a identidade visual

### Autenticadas
- **Sistema de Autenticação**: Login, registro e recuperação de senha com Laravel Breeze
- **Gerenciamento de Notas**: Área onde usuários autenticados podem criar, editar e deletar suas notas acadêmicas
- **Dashboard**: Painel de controle para usuários autenticados

## 🎨 Design e Identidade Visual

O site utiliza as cores institucionais do Centro Paula Souza:
- **Vermelho Institucional**: `#C41E3A`
- **Cinza Escuro**: `#2C3E50`
- **Cinza Claro**: `#ECF0F1`

### Responsividade
- Layout totalmente responsivo para dispositivos móveis, tablets e desktops
- Menu hamburguer funcional para navegação mobile
- Navbar e footer adaptáveis a diferentes tamanhos de tela

## 🛠️ Tecnologias Utilizadas

- **Backend**: Laravel 11
- **Autenticação**: Laravel Breeze
- **Banco de Dados**: SQLite (desenvolvimento)
- **Frontend**: Blade Templates + Tailwind CSS
- **Gerenciador de Pacotes**: Composer (PHP) e npm (Node.js)

## 📦 Estrutura do Projeto

```
site-etec-zonaleste/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       ├── HomeController.php
│   │       ├── CourseController.php
│   │       ├── EventController.php
│   │       ├── ContactController.php
│   │       └── NoteController.php
│   └── Models/
│       ├── User.php
│       ├── Course.php
│       ├── Event.php
│       ├── Note.php
│       └── Contact.php
├── database/
│   ├── migrations/
│   │   ├── create_courses_table.php
│   │   ├── create_events_table.php
│   │   ├── create_notes_table.php
│   │   └── create_contacts_table.php
│   └── seeders/
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php
│       ├── home.blade.php
│       ├── courses/
│       │   ├── index.blade.php
│       │   └── show.blade.php
│       ├── events/
│       │   ├── index.blade.php
│       │   └── show.blade.php
│       ├── contact/
│       │   └── create.blade.php
│       ├── notes/
│       │   ├── index.blade.php
│       │   ├── create.blade.php
│       │   └── edit.blade.php
│       └── errors/
│           └── 404.blade.php
├── routes/
│   ├── web.php
│   └── auth.php
└── config/
```

## 🚀 Como Instalar e Executar

### Pré-requisitos
- PHP >= 8.2
- Composer 2.x
- Node.js >= 18.x
- npm ou yarn

### Passos de Instalação

1. **Clone o repositório**
   ```bash
   git clone https://github.com/seu-usuario/site-etec-zonaleste.git
   cd site-etec-zonaleste
   ```

2. **Instale as dependências do PHP**
   ```bash
   composer install
   ```

3. **Configure o arquivo .env**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Instale as dependências do Node.js**
   ```bash
   npm install
   ```

5. **Execute as migrations**
   ```bash
   php artisan migrate
   ```

6. **Compile os assets**
   ```bash
   npm run build
   ```

7. **Inicie o servidor**
   ```bash
   php artisan serve
   ```

O site estará disponível em `http://localhost:8000`

## 📝 Rotas Disponíveis

### Públicas
- `GET /` - Página inicial
- `GET /cursos` - Listagem de cursos
- `GET /cursos/{id}` - Detalhes de um curso
- `GET /eventos` - Listagem de eventos
- `GET /eventos/{id}` - Detalhes de um evento
- `GET /contato` - Formulário de contato
- `POST /contato` - Enviar mensagem de contato

### Autenticadas
- `GET /dashboard` - Dashboard do usuário
- `GET /notas` - Listagem de notas
- `GET /notas/criar` - Criar nova nota
- `POST /notas` - Armazenar nova nota
- `GET /notas/{id}/editar` - Editar nota
- `PUT /notas/{id}` - Atualizar nota
- `DELETE /notas/{id}` - Deletar nota

### Autenticação (Breeze)
- `GET /login` - Página de login
- `GET /register` - Página de registro
- `GET /forgot-password` - Recuperação de senha
- `POST /logout` - Logout

## 🗄️ Banco de Dados

### Tabelas Principais

**courses**
- id (PK)
- name (string)
- description (text)
- image_url (string, nullable)
- timestamps
- soft deletes

**events**
- id (PK)
- title (string)
- description (text)
- date (date)
- image_url (string, nullable)
- timestamps
- soft deletes

**notes**
- id (PK)
- user_id (FK)
- course_id (FK, nullable)
- title (string)
- content (text)
- timestamps
- soft deletes

**contacts**
- id (PK)
- name (string)
- email (string)
- subject (string)
- message (text)
- timestamps
- soft deletes

## ✅ Requisitos Atendidos

- ✅ **VIEW HOME**: Página inicial com informações institucionais
- ✅ **VIEW CURSOS**: Listagem e detalhes dos cursos técnicos
- ✅ **VIEW EVENTOS**: Listagem e detalhes dos eventos
- ✅ **VIEW FORMULÁRIO**: Formulário de contato com validação
- ✅ **AUTENTICAÇÃO BREEZE**: Sistema completo de login/registro
- ✅ **BACKEND DE NOTAS**: Área autenticada para gerenciar notas
- ✅ **ROTA FALLBACK**: Página 404 personalizada
- ✅ **MIGRATIONS**: Estrutura de banco de dados bem definida
- ✅ **PROTEÇÃO CSRF**: Todos os formulários protegidos com tokens CSRF
- ✅ **COMENTÁRIOS NO ALGORITMO**: Código bem documentado com comentários
- ✅ **NAVBAR RESPONSIVA**: Navegação funcional em todos os dispositivos
- ✅ **FOOTER INSTITUCIONAL**: Rodapé com informações de contato
- ✅ **DESIGN RESPONSIVO**: Layout adaptável a diferentes tamanhos de tela
- ✅ **CORES INSTITUCIONAIS**: Uso das cores oficiais da ETEC/Centro Paula Souza

## 📸 Visualizações das Views

### Home
Página inicial com apresentação da ETEC, informações institucionais e destaques.

![Screenshot da Página Home](https://files.manuscdn.com/user_upload_by_module/session_file/310519663774038413/NPrhnjfBgWqeQyhw.png)

### Cursos
Listagem de cursos técnicos com cards informativos e links para detalhes.

![Screenshot da Página de Cursos](https://files.manuscdn.com/user_upload_by_module/session_file/310519663774038413/zxlOADInQUBJpzOs.png)

### Eventos
Agenda de eventos com datas, descrições e imagens.

![Screenshot da Página de Eventos](https://files.manuscdn.com/user_upload_by_module/session_file/310519663774038413/caVPNnnILrKLSHEh.png)

### Formulário de Contato
Formulário com campos de nome, email, assunto e mensagem com validação completa.

![Screenshot da Página de Contato](https://files.manuscdn.com/user_upload_by_module/session_file/310519663774038413/iWdcGouZLCkoiUOr.png)

### Notas (Autenticado)
Painel de gerenciamento de notas com opções de criar, editar e deletar.

![Screenshot da Página de Login (para Notas)](https://files.manuscdn.com/user_upload_by_module/session_file/310519663774038413/JwzRyGkHqSzGtgKu.png)

### 404
Página de erro personalizada mantendo a identidade visual da ETEC.

![Screenshot da Página 404](https://files.manuscdn.com/user_upload_by_module/session_file/310519663774038413/QVzonIWPjhXRdEov.png)

## 🔐 Segurança

- Proteção CSRF em todos os formulários
- Validação de entrada em todos os campos
- Autenticação segura com Laravel Breeze
- Senhas criptografadas com bcrypt
- Proteção de rotas autenticadas

## 📞 Informações de Contato da ETEC

- **Endereço**: Av. Águia de Haia, 2633 - A.E Carvalho, São Paulo - SP
- **Telefone**: (11) 2045-4000
- **E-mail**: e211dir@cps.sp.gov.br
- **Website**: https://eteczonaleste.cps.sp.gov.br/

## 📄 Licença

Este projeto é fornecido como atividade educacional. Todos os direitos reservados à ETEC Zona Leste e ao Centro Paula Souza.

## 👨‍💻 Desenvolvedor

Desenvolvido como atividade de Programação Web III - 2º Bimestre 2026

---

**Nota**: Este é um projeto educacional desenvolvido para fins de aprendizado em desenvolvimento web com Laravel.
