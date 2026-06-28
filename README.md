# Projeto Integrador - Sistema de Gestao Escolar

## 1. Descricao do Projeto

O projeto consiste no desenvolvimento de um sistema web de gestao escolar, criado para auxiliar uma instituicao de ensino no controle de informacoes academicas e administrativas.

A aplicacao permitira o cadastro e gerenciamento de alunos, professores, turmas, disciplinas, matriculas, usuarios do sistema e arquivos relacionados aos registros escolares. O sistema sera desenvolvido em PHP com arquitetura MVC, banco de dados relacional e interface web funcional.

O objetivo do sistema e centralizar dados importantes da escola, reduzir controles manuais e facilitar o acesso as informacoes por diferentes perfis de usuario, como administradores, secretaria e professores.

## 2. Tema

**Sistema de Gestao Escolar**

O sistema sera voltado para o gerenciamento basico de uma escola, contemplando rotinas como cadastro de alunos, professores, turmas, disciplinas, matriculas, controle de acesso e envio de arquivos.

## 3. Objetivo Geral

Desenvolver uma aplicacao web em PHP, utilizando arquitetura MVC e banco de dados relacional, para gerenciar informacoes escolares de forma organizada, segura e acessivel.

## 4. Objetivos Especificos

- Implementar uma estrutura MVC separando models, views e controllers.
- Criar um sistema de rotas para organizar o acesso as paginas.
- Utilizar banco de dados relacional com conexao via PDO.
- Desenvolver CRUD completo para os principais cadastros do sistema.
- Implementar login, logout e controle de sessoes.
- Controlar o acesso as funcionalidades conforme o perfil do usuario.
- Validar os formularios antes de cadastrar ou atualizar dados.
- Permitir upload de arquivos, como foto do aluno ou documentos escolares.
- Tratar erros comuns, como paginas inexistentes, acesso negado e falhas de validacao.
- Preparar a aplicacao para deploy em ambiente web.

## 5. Publico-alvo

O sistema sera destinado a pequenas e medias instituicoes de ensino que precisam organizar seus dados escolares em uma aplicacao simples e funcional.

Os principais usuarios previstos sao:

- **Administrador:** responsavel por gerenciar usuarios, permissoes e cadastros principais.
- **Secretaria:** responsavel por cadastrar alunos, professores, turmas, disciplinas e matriculas.
- **Professor:** responsavel por consultar turmas e, futuramente, registrar notas e frequencia.
- **Aluno ou responsavel:** perfil comum para consulta de informacoes academicas, quando implementado.

## 6. Tecnologias Obrigatorias

As tecnologias escolhidas para o desenvolvimento sao:

- **Linguagem:** PHP orientado a objetos.
- **Arquitetura:** MVC.
- **Banco de dados:** MySQL.
- **Conexao com banco:** PDO.
- **Ambiente local:** XAMPP.
- **Controle de versao:** Git.
- **Repositorio remoto:** GitHub.
- **Frontend:** HTML, CSS e JavaScript.

## 7. Estrutura MVC Prevista

A estrutura inicial do projeto sera organizada da seguinte forma:

```text
meu-projeto-web/
├── app/
│   ├── Controllers/
│   ├── Models/
│   └── Views/
├── config/
│   └── database.php
├── core/
│   ├── Controller.php
│   ├── Database.php
│   └── Router.php
├── public/
│   ├── css/
│   ├── js/
│   ├── uploads/
│   └── index.php
└── README.md
```

O arquivo `public/index.php` sera o ponto de entrada da aplicacao. Ele recebera as requisicoes, acionara o sistema de rotas e direcionara cada rota para o controller correto.

## 8. Funcionalidades Previstas

### 8.1 Autenticacao e sessoes

- Tela de login.
- Logout.
- Controle de sessao do usuario autenticado.
- Bloqueio de rotas privadas para usuarios nao autenticados.
- Senhas armazenadas com hash.

### 8.2 Controle de acesso por perfil

- Perfil administrador com acesso completo.
- Perfil secretaria com acesso aos cadastros escolares.
- Perfil professor com acesso as suas turmas e registros academicos.
- Perfil comum para consulta limitada de informacoes.

### 8.3 Gestao de alunos

- Cadastro de alunos.
- Listagem de alunos.
- Visualizacao de dados do aluno.
- Edicao de dados do aluno.
- Exclusao de aluno.
- Upload de foto ou documento do aluno.
- Validacao de campos obrigatorios, e-mail, data de nascimento e dados duplicados.

### 8.4 Gestao de professores

- Cadastro de professores.
- Listagem de professores.
- Edicao de professores.
- Exclusao de professores.
- Vinculo entre professor e disciplina.

### 8.5 Gestao de turmas

- Cadastro de turmas.
- Listagem de turmas.
- Edicao de turmas.
- Exclusao de turmas.
- Vinculo de alunos matriculados.

### 8.6 Gestao de disciplinas

- Cadastro de disciplinas.
- Listagem de disciplinas.
- Edicao de disciplinas.
- Exclusao de disciplinas.

### 8.7 Gestao de matriculas

- Cadastro de matricula de aluno em uma turma.
- Consulta de matriculas ativas.
- Edicao de dados da matricula.
- Cancelamento ou exclusao de matricula.

### 8.8 Notas e frequencia

- Lancamento de notas por aluno e disciplina.
- Registro de frequencia.
- Consulta de boletim.
- Relatorios simples para acompanhamento academico.

### 8.9 Upload de arquivos

- Upload de foto do aluno.
- Upload de documentos escolares.
- Validacao de tipo e tamanho de arquivo.
- Armazenamento do caminho do arquivo no banco de dados.

### 8.10 Tratamento de erros

- Pagina de erro 404 para rota inexistente.
- Pagina de erro 403 para acesso negado.
- Mensagens de erro para formularios invalidos.
- Tratamento de excecoes em operacoes com banco de dados.

## 9. CRUD Principal

O CRUD principal da aplicacao sera o cadastro de **alunos**, pois essa entidade representa o centro do sistema escolar.

Operacoes previstas:

- **Create:** cadastrar novo aluno.
- **Read:** listar e visualizar alunos cadastrados.
- **Update:** editar informacoes do aluno.
- **Delete:** excluir aluno, respeitando regras de vinculo com matriculas.

Outros CRUDs tambem serao implementados conforme a evolucao do projeto, como professores, turmas, disciplinas, matriculas e usuarios.

## 10. Entidades Previstas para o Banco de Dados

Nesta etapa inicial, as principais entidades previstas sao:

- **usuarios:** usuarios que acessam o sistema.
- **perfis:** tipos de acesso dos usuarios.
- **alunos:** dados pessoais e escolares dos alunos.
- **professores:** dados dos professores.
- **turmas:** agrupamento de alunos por periodo, ano ou serie.
- **disciplinas:** materias oferecidas pela escola.
- **matriculas:** vinculo entre aluno e turma.
- **notas:** registros de notas por aluno e disciplina.
- **frequencias:** registros de presenca e ausencia.
- **arquivos:** documentos ou imagens enviados ao sistema.

O DER/MER sera desenvolvido em uma etapa posterior da entrega parcial.

## 11. Rotas Previstas

Algumas rotas planejadas para o sistema:

```text
/login
/logout
/dashboard
/alunos
/alunos/criar
/alunos/editar/{id}
/alunos/excluir/{id}
/professores
/turmas
/disciplinas
/matriculas
/usuarios
/perfil
```

As rotas privadas deverao verificar se existe usuario autenticado na sessao e se o perfil possui permissao para acessar a funcionalidade.

## 12. Validacoes Previstas

Os formularios deverao validar:

- Campos obrigatorios.
- Formato de e-mail.
- Datas validas.
- Tamanho minimo e maximo de textos.
- Senhas com tamanho minimo.
- Confirmacao de senha.
- Dados duplicados, como e-mail ou matricula.
- Tipo e tamanho de arquivos enviados.

## 13. Deploy da Aplicacao

O deploy sera planejado para uma etapa posterior do projeto. A aplicacao devera ser publicada em um ambiente que suporte PHP e MySQL.

Possibilidades de deploy:

- Hospedagem compartilhada com suporte a PHP e MySQL.
- Servidor configurado com Apache, PHP e MySQL.
- Ambiente Docker publicado em servidor ou plataforma de nuvem.

