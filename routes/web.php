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

Route::get('/', 'IndexController@index');
Route::get('/paginas-web', 'IndexController@paginaWeb');
Route::get('/landing-page', 'IndexController@landing');//tiendaOnline
Route::get('/tiendas-online', 'IndexController@tiendaOnline');//programacion-web
Route::get('/programacion-web', 'IndexController@programacionWeb');//googleApps
Route::get('/google-apps', 'IndexController@googleApps');//googleApps
Route::get('/redes-sociales', 'IndexController@redesSociales');//posicionamientoWeb
Route::get('/posicionamiento-web', 'IndexController@posicionamientoWeb');//posicionamientoWeb
Route::get('/marketing-automatizado', 'IndexController@marketingAutomatizado');//posicionamientoWeb
Route::get('/blog', 'IndexController@blog');//posicionamientoWeb
Route::get('/contacto', 'IndexController@contacto');//posicionamientoWeb

Route::get('/ticket', 'IndexController@ticket');
Route::get('/tickets/get', 'TicketController@getTickets')->middleware('auth');//posicionamientoWeb
Route::post('/tickets/create', 'TicketController@createTicket');
Route::get('/tickets/{num}/view', 'TicketController@updateTicket')->middleware('auth');//posicionamientoWeb


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
