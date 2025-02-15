# Projeto de Cadastro de Alunos - CRUD

Este projeto tem como objetivo criar uma aplicação simples de CRUD (Create, Read, Update, Delete) para o cadastro de alunos em uma escola. O sistema permite registrar, visualizar, editar e excluir dados dos alunos.
Requisitos

### Para rodar o projeto, você precisa ter o seguinte instalado em seu computador:


```bash
    - WAMP Server (Windows Apache MySQL PHP)
    - PHP (o WAMP já inclui o PHP, então não é necessário instalá-lo separadamente).
    - MySQL (também incluso no WAMP, para gerenciar o banco de dados).
```
Baixe o WAMP [AQUI](https://www.wampserver.com/).

## Instruções de Instalação

```bash
    Baixe o WAMP Server no site oficial, se ainda não tiver.
    
    Instale o WAMP Server e execute-o. O ícone do WAMP deve aparecer na bandeja do sistema.

    Baixe ou clone este repositório:
        Se você tiver o Git instalado, pode clonar o repositório com o comando:

    git clone https://github.com/seu-usuario/projeto-cadastro-alunos.git
```
### Coloque o projeto na pasta do WAMP:
```bash
    Acesse a pasta www dentro do diretório onde o WAMP foi instalado.
    Mova ou copie o projeto para dentro dessa pasta.
```
### Crie o Banco de Dados:
```bash
    Acesse o phpMyAdmin no seu navegador através do link: http://localhost/phpmyadmin/
    Crie um novo banco de dados chamado escola.
    Importe o arquivo SQL que acompanha o projeto para criar as tabelas necessárias.
```
### Configure o arquivo de conexão com o banco:
```bash
    Dentro da pasta do projeto, procure pelo arquivo config.php (ou o nome que você escolher para o arquivo de configuração).
    Verifique e altere as configurações de conexão com o banco de dados se necessário:

        $host = 'localhost';
        $usuario = 'root';   // usuário padrão do MySQL no WAMP
        $senha = '';         // senha padrão (geralmente em branco)
        $banco = 'escola';   // nome do banco de dados

    Execute o servidor local:
        No WAMP, clique no ícone na bandeja do sistema e certifique-se de que o Apache e o MySQL estão iniciados (verifique se as luzes verdes estão acesas).

    Acesse a aplicação:
        No seu navegador, acesse a aplicação no seguinte link: http://localhost/projeto-cadastro-alunos.
```


## Funcionalidades
```bash
Este CRUD permite realizar as seguintes ações:

    Cadastrar aluno: Formulário para adicionar novos alunos com nome, idade, email, entre outros campos.
    Listar alunos: Página que exibe todos os alunos cadastrados, com opções para editar ou excluir.
    Editar aluno: Editar os dados de um aluno já registrado.
    Excluir aluno: Remover um aluno do banco de dados.
```
## Tecnologias Utilizadas
```bash
    PHP: Linguagem de programação para o backend.
    MySQL: Banco de dados utilizado para armazenar os registros dos alunos.
    HTML/CSS: Para a estrutura e estilização das páginas.
```
## Como Contribuir
```bash
    Faça um fork do projeto.
    Crie uma nova branch (git checkout -b minha-feature).
    Faça suas modificações e commit (git commit -am 'Adicionei uma nova feature').
    Faça push para a branch (git push origin minha-feature).
    Abra um Pull Request no GitHub.
```
## Licença

Este projeto está sob a licença MIT - veja o arquivo LICENSE para mais detalhes.