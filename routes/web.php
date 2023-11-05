<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});
*/

//LocalDoController ::class, 'ActionQueSeráUsada'
Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.index'); 
Route::get('/sobre-nos', [\App\Http\Controllers\SobreNosController::class, 'sobreNos'])->name('site.sobrenos');
Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'contato'])->name('site.contato');
Route::get('/login', function() { return 'login'; })->name('site.login');

//Parte privada do site, apenas entrar com login
// /app
Route::prefix('/app')->group(function() {
    Route::get('/clientes', function() { return 'clientes'; })->name('app.clientes');
    Route::get('/fornecedores', function() { return 'fornecedores'; })->name('app.fornecedores');
    Route::get('/produtos', function() { return 'produtos'; })->name('app.produtos');

});

Route::get('/teste/{param1}/{param2}', [\App\Http\Controllers\TesteController::class, 'teste'])->name('teste');


//Adicionando redirecionamento entre rotas
Route::get('/rota1', function() { echo 'rota 1'; })->name('site.rota1');

// Podemos fazer o redirect dentro da função/controller da rota 2 da Rota 2
Route::get('/rota2', function() { return redirect()->route('site.rota1'); })->name('site.rota2');

// Segunda forma => Route::redirect('/rota2','rota1');  Quando alguem mandar para diretório rota2 ele manda para 1

// ---------------------------------

// Criando FALLBACK(quando a rota nao é encontrada mandamos para a fallback para evitar que o user receba um erro)
Route::fallback(function() {
     echo 'A rota não existe.<a href="'.route('site.index').'">Clique para voltar</a>';
});

/* Indicando um parâmetro, usando chaves no diretório
Route::get(
    '/contato/{nome}/{categoria_id}', 
    function(string $nome, int $categoria_id = 1) {
    echo "Esses são os parâmetros: $nome - $categoria_id";
})->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+'); 
 Se o valor do id nao for numero de 0 a 9, vai dar um erro do laravel
 O nome deve ser apenas em letras e pelo menos um digito

VERBOS HTTP
get
post
put
patch
delete
options
*/