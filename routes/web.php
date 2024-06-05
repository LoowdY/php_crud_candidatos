<?php

use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Route;
use App\Models\Candidato;

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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/cadastro-candidato', function (Request $request) {
    
    Candidato::create([
        'nome' => $request->candidato_nome,
        'telefone' => $request->candidato_telefone
    ]);

    echo 'candidato cadastrado!';

    //dd($request->all());
});


Route::get('/buscar-candidato/{id_do_candidato}', function ($id_do_candidato) {
    $candidato = Candidato::findOrFail($id_do_candidato);
    echo $candidato->nome;
    echo "<br />";
    echo $candidato->telefone;

   //dd($id_do_candidato);
});


Route::get('/editar-candidato/{id_do_candidato}', function ($id_do_candidato) {
    $candidato = Candidato::findOrFail($id_do_candidato);
    return view('editar_candidato', ['candidato' => $candidato]);

   //dd($id_do_candidato);
});


Route::put('/atualizar-candidato/{id_do_candidato}', function(Request $infos, $id_do_candidato){
    $candidato = Candidato::findOrFail($id_do_candidato);
    $candidato->nome = $infos->candidato_nome;
    $candidato->telefone = $infos->candidato_telefone;
    $candidato->save();
    echo "candidato atualizado!";
});

Route::get('/excluir-candidato/{id_do_candidato}', function ($id_do_candidato) {
    $candidato = Candidato::findOrFail($id_do_candidato);
    $candidato->delete();
    echo "candidato excluido!";
   //dd($id_do_candidato);
});