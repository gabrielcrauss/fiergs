# fiergs
Exercício entrevista

Este sistema tem como objetivo fazer o CRUD de categorias e produtos.

Foi utilizado o Framework Laravel verão 10 e PHP 8.1

Os arquivos principais para edição e manutenção do sistema são:

//////////////////
// .ENV
Arquivo de configuração da aplicação como informações do banco de dados

//////////////////
// ROTAS
Arquivo: \routes\web.php
Neste arquivo é encontrada as rotas da aplicação.
As rotas tem como objetivo "rotear" as URIs para os controllers
Exemplo
Route::post('/login', "\App\Http\Controllers\LoginController@login")->name('site.login');
Esta rota de URI /login envia a requisição para o Controller LoginController e executa o método login(), essa rota tem nome de "site.login"

//////////////////
// CONTROLLERS
Arquivo: app\Http\Controllers\LoginController.php
Aqui é encontrado o controller da URI Login. Aqui é realizada a lógica e o envio para a view('site.login') renderizar a página para o usuário

//////////////////
// VIEW
Arquivo: \resources\views\site\login.blade.php
Este arquivo irá conter o código de marcação que irá apresentar o formulário de login para o usuário
Nele temos extensão do arquivo \resources\views\site\layout\basico.blade.php
onde contém a estrutura básica de uma página HTML. 
É adicionado duas sections, uma de título da página e uma de conteúdo.
Essa referência é dada arquivo basico.blade.php pelo método @yield('conteudo') e @yield('titulo').
Também é utilizado component que referencia o formulário de login no arquivo \resources\views\site\layout\_components\login.blade.php
É neste arquivo onde de encontra a action do formulário de login.
Que é enviado de volta para o Controller Login, porém para o método login() onde será realizada a autenticação ou não do usuário. Caso a autenticação seja realizada com sucesso, é realizado um redirect para a rota site.produtos, que por sua vez também fará o mesmo fluxo de Controller e View

//////////////////
// MODELS
Arquivo: \app\Models\User.php
Foram utilizadas 3 models, SiteCategoria, SiteProduto e User
Na Model SiteProduto, foi necessário utilizar o código 
return $this->belongsTo('\App\Models\SiteCategoria', 'id_categoria');
para ser realizado o inner join entre a tabela Categoria e Produtos

//////////////////
// MIGRATIONS
Arquivos: \database\migrations\....
No arquivo \2023_10_05_132115_create_site_produtos_table.php é onde esta a configuração da tabela Produtos no banco de dados MariaDB
e no arquivo \2023_10_05_132517_create_site_categorias_table.php é onde se encontra a construção da tabela Categoria

//////////////////
// SEEDERS
Arquivo: \database\seeders\ProdutoSeeder.php
Neste arquivo esta configurado a população inicial da tabela Produtos no banco de dados e no arquivo 
\database\seeders\PopulaCategoriaSeeders.php a população inicial das categorias

Para criar o banco de dados e realizar a população é necessário que esteja instalado o composer e que seja executado os seguintes comandos:

php artisan migrate -> Irá executar os arquivos \database\migrations\, com isso o banco de dados será criado
e
php artisan make:seeder -> irá popular as tabelas do banco de dados
Caso queira zerar o banco de dados você deve executar o comando 
php artisan migrate:fresh 



