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

Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal']); //LocalDoController ::class, 'ActionQueSeráUsada'
Route::get('/sobre-nos', [\App\Http\Controllers\SobreNosController::class, 'sobreNos']); //LocalDoController ::class, 'ActionQueSeráUsada'
Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'contato']); //LocalDoController ::class, 'ActionQueSeráUsada'

// Indicando um parâmetro, usando chaves no diretório
Route::get(
    '/contato/{nome}/{categoria_id}', 
    function(string $nome, int $categoria_id = 1) {
    echo "Esses são os parâmetros: $nome - $categoria_id";
})->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+'); 
// Se o valor do id nao for numero de 0 a 9, vai dar um erro do laravel
// O nome deve ser apenas em letras e pelo menos um digito

/*
VERBOS HTTP
get
post
put
patch
delete
options
*/