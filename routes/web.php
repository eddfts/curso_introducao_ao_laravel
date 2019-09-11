<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
 *Definindo uma nova Rota
Route::get('/contato/{id?}',function( $id = null){
    return "Contato id = $id";
});
*/
/*
 *Controller
 */

Route::get('/contato/{id?}',[ 'uses'=>'ContatoController@index']);

/*Route::post('/contato' ,function(){
     dd($_POST); //semelhante ao var_dump() exibe em modo debug
     return "Contato POST";
});*/
Route::post('/contato/{id?}',[ 'uses'=>'ContatoController@criar']);
/*Route::put('/contato' ,function(){
       return "Contato PUT";
});*/
Route::put('/contato/{id?}',[ 'uses'=>'ContatoController@editar']);

Route::get('/admin/cursos',['as'=>'admin.cursos','uses'=>'Admin\CursosController@index']);
Route::get('/admin/cursos/adicionar',['as'=>'admin.cursos.adicionar','uses'=>'Admin\CursosController@adicionar']);
Route::get('/admin/cursos/salvar',['as'=>'admin.cursos.salvar','uses'=>'Admin\CursosController@salvar']);
Route::get('/admin/cursos/editar/{id}',['as'=>'admin.cursos.editar','uses'=>'Admin\CursosController@editar']);
Route::get('/admin/cursos/atualizar/{id}',['as'=>'admin.cursos.atualizar','uses'=>'Admin\CursosController@atualizar']);
Route::get('/admin/cursos/deletar/{id}',['as'=>'admin.cursos.deletar','uses'=>'Admin\CursosController@deletar']);
