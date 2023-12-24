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

/* se não usar uma função callback o laravel entende que
 vamos usar um controller e uma action */
Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.index');
Route::get('/sobre', [\App\Http\Controllers\SobreNosController::class, 'sobreNos'])->name('site.sobrenos');
Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'contato'])->name('site.contato');
Route::get('/login', function () { return 'login'; })->name('site.login');



Route::prefix('/app')->group(function() {
    Route::get('/clientes', function () { return 'clientes'; })->name('app.clientes');
    Route::get('/fornecedores', function () { return 'fornecedores'; })->name('app.fornecedores');
    Route::get('/produtos', function () { return 'produtos'; })->name('app.produtos');
});

Route::get('/rota1', function() {
    echo 'Rota 1';
})->name('site.rota1');


//  ======Redirecionamento de rotas======
Route::get('/rota2', function() {
    return redirect()->route('site.rota1');
})->name('site.rota2');
// Route::redirect('/rota2', '/rota1');



Route::fallback(function() {
    echo 'A rota acessada não existe. <a href="'.route('site.index').'">clique aqui<a/> para is para a página inicial';
});



// ======Parâmetros======
// nome, categoria, assunto, mensagem
Route::get('/contato/{nome}/{categoria}/{assunto}/{mensagem?}', 
function(
    string $nome, 
    string $categoria, 
    string $assunto, 
    string $mensagem = 'mensagem não informada') {
    // echo 'Estamos aqui: '.$nome.' - '.$categoria. ' | '.$assunto. ' - '.$mensagem;
    echo "Estamos aqui $nome: $categoria | $assunto: $mensagem";
});

Route::get('/contato/{nome}/{categoria_id}', 
function(
    string $nome, 
    int $categoria_id = 1 // 1 - informação
    ) {
    echo "Estamos aqui $nome: $categoria_id";
}) -> where('categoria_id', '[0-9]+') -> where('nome', '[A-Za-z]+'); // expressão regular

