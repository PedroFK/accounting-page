<?php

use App\Http\Middleware\AccessLoginMidd;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

//LocalDoController ::class, 'ActionQueSeráUsada'
Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'index'])->name('site.index'); 
Route::get('/about-us', [\App\Http\Controllers\AboutUsController::class, 'aboutUs'])->name('site.aboutus');
Route::get('/contact', [\App\Http\Controllers\SiteContactController::class, 'contact'])->name('site.contact');

Route::post('/contact', [\App\Http\Controllers\SiteContactController::class, 'store'])->name('site.contact');

Route::get('/login/{error?}', [\App\Http\Controllers\LoginController::class, 'index'])->name('site.login');
Route::post('/login', [\App\Http\Controllers\LoginController::class, 'authenticate'])->name('site.login');

//Parte privada do site, apenas entrar com login
// /app
//Route::middleware('AccessLoginMidd:pattern')->prefix('/app')->group(function() {
    
//});

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('app.home');
Route::get('/exit', [\App\Http\Controllers\LoginController::class, 'logout'])->name('app.exit');
Route::get('/client', [\App\Http\Controllers\ClientController::class, 'index'])->name('app.client');

Route::get('/supplier', [\App\Http\Controllers\SupplierController::class, 'index'])->name('app.supplier');

Route::post('/supplier/list', [\App\Http\Controllers\SupplierController::class, 'list'])->name('app.supplier.list');
Route::get('/supplier/list/{page?}', [\App\Http\Controllers\SupplierController::class, 'list'])->name('app.supplier.list');

Route::get('/supplier/add', [\App\Http\Controllers\SupplierController::class, 'add'])->name('app.supplier.add');
Route::post('/supplier/add', [\App\Http\Controllers\SupplierController::class, 'add'])->name('app.supplier.add');

Route::get('/supplier/edit/{id}', [\App\Http\Controllers\SupplierController::class, 'edit'])->name('app.supplier.edit');
Route::get('/supplier/delete/{id}', [\App\Http\Controllers\SupplierController::class, 'delete'])->name('app.supplier.delete');

Route::get('/product', [\App\Http\Controllers\ProductController::class, 'index'])->name('app.product.index');
Route::get('/product/create', [\App\Http\Controllers\ProductController::class, 'create'])->name('app.product.create');
Route::resource('products', ProductController::class);


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
    '/contact/{name}/{categoria_id}', 
    function(string $name, int $categoria_id = 1) {
    echo "Esses são os parâmetros: $name - $categoria_id";
})->where('categoria_id', '[0-9]+')->where('name', '[A-Za-z]+'); 
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