<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*--
 PARA LA RUTA DE BUSQUEDA GENERAL
 */

Route::get('/search', 'SearchController@show');
Route::get('/products/json', 'SearchController@data');

/*--RUTA PARA LIBROS--*/

Route::prefix('libros')->group(function () {
    Route::match(['get','post'],'/', 'LibroController@index')->name('libros');

    Route::get('crear', 'LibroController@crear')->name('libros.crear');
    Route::post('crear', 'LibroController@guardar')->name('libros.guardar');

    Route::get('mostrar/{libro}', 'LibroController@editar')->name('libros.editar');
    Route::put('libro/{libro}', 'LibroController@actualizar')->name('libros.actualizar');


    Route::put('borrar/{libro}', 'LibroController@borrar')->name('libros.borrar');
});



/*--RUTA PARA LAS CATEGORIAS--*/
Route::prefix('categorias')->group(function () {
    Route::get('/', 'CategoriasController@index')->name('categorias');

    Route::get('crear', 'CategoriasController@crear')->name('categorias.crear');
    Route::post('crear', 'CategoriasController@guardar')->name('categorias.guardar');

});

/*--RUTA PARA CREAR CLIENTES*/
Route::prefix('clientes')->group(function () {
    Route::get('/', 'ClienteController@index')->name('clientes');

    Route::get('crear', 'ClienteController@crear')->name('clientes.crear');
    Route::post('crear', 'ClienteController@guardar')->name('clientes.guardar');

    Route::get('editar/{cliente}', 'ClienteController@editar')->name('clientes.editar');
    Route::put('editar/{cliente}', 'ClienteController@actualizar')->name('clientes.actualizar');

    Route::put('borrar/{cliente}', 'ClienteController@borrar')->name('clientes.borrar');

});



/*--RUTA PARA LOS ESTADOS--*/
Route::prefix('estados')->group(function () {
    Route::get('/', 'EstadoController@index')->name('estados');

    Route::get('crear', 'EstadoController@crear')->name('estados.crear');
    Route::post('crear', 'EstadoController@guardar')->name('estados.guardar');

});

/*--RUTA PARA PODER CREAR PRESTAMOS--*/
Route::prefix('prestamos')->group(function (){
    Route::get('/', 'PrestamoController@index')->name('prestamos');

    Route::get('crear', 'PrestamoController@crear')->name('prestamos.crear');
    Route::post('crear', 'PrestamoController@guardar')->name('prestamos.guardar');
    Route::put('prestamo/{prestamo}/actualizar', 'PrestamoController@actualizar')->name('prestamos.actualizar');

 });



// Admin Panel Routes
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {

    Route::resource('user', 'UserController');
    Route::get('/profile', 'UserController@profile')->name('user.profile');
    Route::post('/profile', 'UserController@profile_update')->name('user.profile.update');

    // setting
    Route::get('setting', 'SettingController@edit')->name('setting.index');
    Route::post('setting', 'SettingController@update')->name('setting.update');


});



//Route::get('ticket-list-pdf', 'DataTableController@exportPdf')->name('reportes.imprimir');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
