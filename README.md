# Projeto - Site dos Cursos de Informática Campos Caicó

O presente projeto tem por objetivo o desenvolvimento de um website para os cursos de informática do campus [Caicó](https://portal.ifrn.edu.br/campus/caico). O desenvolvimento será realizado por alunos do curso utilizando as principais ferramentas e tecnologias do mercado de trabalho. Dessa maneira, busca através do projeto tanto o desenvolvimento de um espaço para divulgação das ações do curso como também uma maneira de integrar ensino e pesquisa mediante a inclusão de alunos no processo de construção. O projeto será desenvolvido através de metodologias ágeis e uso de tecnologias de desenvolvimento de aplicações para Internet como Laravel, Nginx entre outros.

## Requisitos

O projeto tem como requisitos a instalação do PHP e composer. Para testes, é possível utilizar o SQLite. Por padrão, o projeto vem pronto para ser iniciado com as configurações necessárias para o uso do SQLite. Entretanto, você pode modificar essas configurações para testar outro banco de dados.

Requisitos:
- [PHP](www.php.net)
- [composer](https://www.getcomposer.org/)
- [Laravel](https://laravel.com)


## Configurar ambiente de desenvolvimento

Clonar o projeto
> git clone https://github.com/InformaticaCaico/siteinfo.git

Instalar as dependências 
> composer install 

Preparar o ambiente para desenvolvimento com Sqlite
> php artisan setup:start

