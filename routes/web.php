<?php
use App\Ticket;


use App\Mail\TicketUpdate;
use App\Conversation;

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
Route::get('/redes-sociales', 'IndexController@redesSociales');
Route::get('/posicionamiento-web', 'IndexController@posicionamientoWeb');
Route::get('/blog', 'IndexController@blog');
Route::get('/contacto', 'IndexController@contacto');
Route::get('/servicios', 'IndexController@servicios');
Route::get('/administracion-de-sitios-web', 'IndexController@administracion');
Route::get('/enviar-un-pago', 'IndexController@pagos');
Route::get('/sitios-web-y-tiendas-online-en-alquiler', 'IndexController@alquiler');
Route::get('/confirmacion', 'IndexController@confirmacion');
Route::get('/politicas-de-privacidad', 'IndexController@politicas');
Route::get('/blog', 'IndexController@blog');
Route::get('/blog/alarmante-aumento-en-los-costos-de-alojamiento-de-paginas-web', 'IndexController@aumento');
Route::get('/blog/nuevas-funciones-para-mejorar-el-rendimiento-de-su-sitio-web', 'IndexController@nuevoservicios');
Route::get('/blog/renta-un-sitio-web-o-tienda-online', 'IndexController@websalquiler');
Route::get('/blog/diez-consejos-para-trabajar-en-equipo-a-distancia-con-GSuite', 'IndexController@consejosGSuite');
Route::get('/gsuite', 'IndexController@gsuite');
Route::get('/consultorias', 'IndexController@consultorias');


// Url para el formulario de contacto

Route::post('formcontacto/crear', 'ContactoController@create');



// Route::get('mailable', function () {
//     $ticket = Ticket::first();
//     return new App\Mail\TicketUpdate($ticket);

//     // return Conversation::with(['tickets' => function ($q){
//     //     $q->where('num_ticket', 1564310853);
//     // }])->get();
// });

// Url para los tickets

Route::get('/ticket', 'IndexController@ticket');
Route::get('/ticket/consultar', 'TicketController@getTicket');
Route::get('/tickets/get', 'TicketController@getTickets')->middleware('auth');
Route::post('/tickets/create', 'TicketController@createTicket');
Route::put('/tickets/update', 'TicketController@updateTicket');
Route::post('/tickets/create/conversacion', 'TicketController@createConversacion');
Route::get('/ticket/numero_ticket/{num_ticket}', 'TicketController@getNumTicket');
Route::get('/tickets/{num}/view', 'TicketController@updateTicket')->middleware('auth');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
