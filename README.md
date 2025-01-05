Repositório do projeto exemplo de um CRUD usando padrão de projetos MVC com PHP 8.4 e MySQL

## Playlist com todas as videoaulas de construção desse projeto
- https://www.youtube.com/watch?v=4h6j3ODwsEw&list=PLHVpcBDJr5dmL-5tYqBmf_PxJrtrdAMT6

## Conteúdo das Videoaulas
### AULA 1 - COMO FAZER MVC COM PHP 8.4 E MYSQL - AMBIENTE DE DESENVOLVIMENTO (37mim)
- 00:00 Introdução
- 01:47 Materiais usados no curso
- 02:18 Porque instalar PHP puro?
- 03:22 Download do PHP
- 03:40 Diferença entre NTS e TS do PHP
- 04:17 Download do MySQL
- 05:26 Download do Visual Studio Code
- 05:42 Instalação do MySQL
- 07:16 Instalação do Visual Studio Code
- 08:23 Instalação do PHP
- 10:43 Arquivo de Configuração do PHP
- 12:11 Configurar PHP para mostrar erros
- 12:50 Definindo diretório das extensões
- 13:57 Habilitando as extensões do PHP
- 15:30 Adicionando o PHP ao PATH do Windows
- 17:48 Adicionando o VC Runtime 14.38
- 20:38 Configurando o MySQL 
- 20:27 A porta 3306, veja isso
- 22:50 Definindo a senha do MySQL
- 24:02 Finalizando configuração do MySQL
- 24:25 Configurando a conexão com Workbench
- 26:04 Configurando o Visual Studio Code
- 28:50 Ajustando o PATH do PHP no Windows
- 29:55 Resolvendo VC Runtime 14.38 com x64
- 31:36 Testando Servidor Interno do PHP
- 33:47 Testando configurações do PHP
- 34:15 Inicializando o Servidor Interno do PHP

### AULA 2 - COMO FAZER MVC COM PHP 8.4 E MYSQL - ESTRUTURA E BANCO DE DADOS DA APLICAÇÃO (42mim)
- 00:00 Introdução
- 01:09 Modelagem DER do Banco de Dados
- 02:47 Modelo lógico do Banco de Dados
- 03:26 Construindo o Projeto Físico do Banco de Dados
- 23:10 Definindo a estrutura da aplicação
- 23:56 Definição do MVC
- 27:27 Atenção a qual pasta abrir no VS Code
- 28:20 Definindo os arquivos do Projeto
- 32:28 Enviando o projeto ao GitHub
- 35:46 Mudando a pasta aberta no VS Code
- 38:00 Criando arquivo index
- 39:15 Inicializando o servidor do PHP
- 40:17 Enviando alterações para o github

### AULA 3 - COMO FAZER MVC COM PHP 8.4 E MYSQL - COMO FUNCIONA AUTOLOAD DE CLASSES E NAMESPACES (51mim)
- 00:00 Introdução
- 01:09 Inicializando o servidor interno do PHP
- 03:20 Como parar servidor do PHP
- 03:52 Carregando comandos anteriores do Terminal
- 04:16 Funções usadas na aula
- 04:38 Como funciona a função include do PHP
- 07:30 Demonstração de funcionamento do include
- 08:12 Uso da função ```var_dump```
- 10:56 Definindo as configurações do projeto
- 12:42 Função ```define``` para constantes em PHP
- 14:20 Função ```dirname``` e constante mágica ```_FILE_```
- 21:55 Variável super global ```$_ENV```
- 24:23 Criando o mecanismo de autoload de classes no PHP
- 24:52 Como funciona a função ```sql_autoload_register```
- 27:45 Demonstrando a função ```sql_autoload_register```
- 29:45 Autoload com Namespaces no PHP
- 33:06 Implementando o include dentro da ```sql_autoload_register```
- 33:25 Função ```file_exists```
- 35:29 Parâmetro ```levels``` da função ```dirname``` e namespaces
- 38:27 Definindo as rotas da aplicação
- 39:57 Comando ```use``` para trabalhar com namespaces
- 40:28 Como funciona a função ```parse_url```
- 43:37 Uso switch case para tratar as rotas
- 46:48 Encapsulando funcionalidades na Controller
- 47:43 Porque declaramos métodos estáticos

### AULA 4 - COMO FAZER MVC COM PHP 8.4 E MYSQL - CRUD NO MYSQL PARTE I - CAMADA MODEL E DAO (1h6mim)
- 00:00:00 Introdução
- 00:02:11 Análise da modelagem do banco de dados
- 00:03:35 Análise do projeto físico do banco de dados
- 00:04:17 Definindo a Model de Alunos
- 00:05:08 Conceitos iniciais de Orientação a Objetos
- 00:05:50 Funcionalidades (métodos) da Model
- 00:06:51 Definindo tipo de retorno de métodos em PHP
- 00:08:56 Tipo anulável de retorno
- 00:11:34 Criando e preenchendo o objeto model de Aluno
- 00:12:15 Definindo namespace da Model
- 00:12:45 Comando use de Model na camada Controller
- 00:13:47 Definindo a camada DAO
- 00:14:40 Implementando os métodos da DAO
- 00:18:27 Uso do operador ternário
- 00:21:50 Instanciando a DAO dentro da Model
- 00:22:09 Objetos anônimos em PHP
- 00:22:47 Enviando um model preenchido para DAO
- 00:24:40 Criando e demonstrando um model na Controller
- 00:33:23 Definindo a conexão com o MySQL
- 00:34:11 Implementando o classe DAO
- 00:34:36 Propriedade para armazenar a conexão com MySQL
- 00:35:30 Definindo relação de herança entre AlunoDAO e DAO
- 00:36:14 Declarando método construtor da DAO
- 00:36:40 Classe PDO do PHP para MySQL
- 00:37:26 Definindo o parâmetro DSN do PDO
- 00:38:52 Estabelecendo relação de herança entre DAO e PDO
- 00:39:50 Definindo a conexão com MySQL via PDO
- 00:44:25 Implementando padrão Singleton para conexão com MySQL
- 00:46:17 Conceito de classe abstrata para a classe DAO
- 00:46:46 Definindo construtor na classe AlunoDAO
- 00:48:40 Implementando ```insert``` com Preparated Statements
- 00:51:43 Obtendo id inserida com ```last_insert_id```
- 00:53:21 Implementando método ```update```
- 00:54:33 Implementando método ```selectById```
- 00:57:06 Implementando método ```select```
- 00:58:16 Implementando método ```delete```
- 00:59:41 Chamando os métodos da DAO na Model
- 01:01:14 Implementando "testes" na Controller
- 01:02:26 Definindo tipo de retorno ```void``` na Controller
- 01:02:30 Palavra chave ```final``` no contexto do projeto
- 01:03:39 Testando interação com MySQL

## CURTIU MEU TRABALHO?
Você pode me ajudar com um pix para tiago@tiago.blog.br 🍻
