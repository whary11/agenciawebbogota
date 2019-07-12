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

Route::get('/', 'IndexController@index')->name('principal');
Route::get('/paginas-web', 'IndexController@paginaWeb');
Route::get('/landing-page', 'IndexController@landing');
Route::get('/tiendas-online', 'IndexController@tiendaOnline');
Route::get('/programacion-web', 'IndexController@programacionWeb');
Route::get('/google-apps', 'IndexController@googleApps');
Route::get('/redes-sociales', 'IndexController@redesSociales');
Route::get('/posicionamiento-web', 'IndexController@posicionamientoWeb');
Route::get('/marketing-automatizado', 'IndexController@marketingAutomatizado');
Route::get('/blog', 'IndexController@blog');
Route::get('/contacto', 'IndexController@contacto');

Route::get('/ticket', 'IndexController@ticket');
Route::get('/tickets/get', 'TicketController@getTickets')->middleware('auth');
Route::post('/tickets/create', 'TicketController@createTicket');
Route::get('/tickets/{num}/view', 'TicketController@updateTicket')->middleware('auth');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
