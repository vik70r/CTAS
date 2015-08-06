<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/',array('uses'=>'ClienteController@inicio'));
Route::get('inicio.html',array('uses'=>'ClienteController@inicio'));

Route::get('ReservaBoleto.html',array('uses'=>'ClienteController@ReservaBoleto'));
Route::get('insertCliente.html',array('uses'=>'ClienteController@insertCliente'));

Route::get('about-us.html',array('uses'=>'ClienteController@about'));
Route::get('blog.html',array('uses'=>'ClienteController@blog'));
Route::get('services.html',array('uses'=>'ClienteController@services'));
Route::get('paquetes.html',array('uses'=>'ClienteController@paquetes'));

Route::get('reserva.html',array('uses'=>'ClienteController@reserva'));
Route::get('reserva2.html',array('uses'=>'ClienteController@reserva2'));



Route::get('login',function()
{
    Auth::logout();
    return Redirect::to('/');
});

Route::get('/login', function()
{
    if (Auth::check())
        if(Auth::user()->tipoUsuario == 'Personal')
            return Redirect::to('personal');
        else

            if(Auth::user()->tipoUsuario == 'Agencia')
                return Redirect::to('agencia');
           
    return View::make('login');
});
// Errors
Route::get('404.html',array('uses'=>'ErrorController@mostrar404'));
Route::get('500.html',array('uses'=>'ErrorController@mostrar500'));
Route::get('blank.html',array('uses'=>'ErrorController@blank'));

//login
Route::get('salir',function()
{
	Auth::logout();
	return Redirect::to('/');
});
Route::post('check',array('uses'=>'AgenciaController@perfil'));
Route::post('check',array('uses'=>'Login@postUser'));


// Cliente
Route::get('clientes',array('uses'=>'ClienteController@index'));

Route::get('cliente/edit/{id}',array('uses'=>'ClienteController@edit'));
Route::get('cliente/deshabilitar/{id}',array('uses'=>'ClienteController@deshabilitar'));
Route::get('cliente/habilitar/{id}',array('uses'=>'ClienteController@habilitar'));
Route::post('cliente/update/{id}',array('uses'=>'ClienteController@update'));

Route::get('cliente/profile/{id}',array('uses'=>'ClienteController@profile'));
Route::get('cliente/imagen/{id}',array('uses'=>'ClienteController@imagen'));
Route::post('cliente/imagen/{id}',array('uses'=>'ClienteController@uploadImage'));
Route::get('cliente/change-pass/{id}',array('uses'=>'ClienteController@changepass'));
Route::post('cliente/updatePass/{id}',array('uses'=>'ClienteController@updatePass'));



Route::group(['before' => 'auth'], function()
{
    Route::get('agencia/profile/{id}',array('uses'=>'AgenciaController@profile'))->where('id','[0-9]+');
    Route::get('agencias',array('uses'=>'AgenciaController@index'));
Route::get('agencia/add.html',array('uses'=>'AgenciaController@add'));
Route::get('agencia/login.html',array('uses'=>'AgenciaController@login'));
Route::post('agencia/login',array('uses'=>'AgenciaController@loginInit'));
Route::get('agencia/logout.html',array('uses'=>'AgenciaController@logout'));
Route::get('agencia/edit/{id}',array('uses'=>'AgenciaController@edit'))->where('id','[0-9]+');
Route::post('agencia/update/{id}',array('uses'=>'AgenciaController@update'))->where('id','[0-9]+');

Route::post('agencia/insert.html',array('uses'=>'AgenciaController@insert'));
Route::get('agencia/delete/{idA}',array('uses'=>'AgenciaController@delete'))->where('id','[0-9]+');
Route::get('agencia/change-pass/{id}',array('uses'=>'AgenciaController@changepass'))->where('id','[0-9]+');
Route::get('agencia/delete/{id}',array('uses'=>'AgenciaController@delete'))->where('id','[0-9]+');
Route::get('agencia/change-pass/{id}',array('uses'=>'AgenciaController@changepass'))->where('id','[0-9]+');
Route::get('agencia/imagen/{id}',array('uses'=>'AgenciaController@imagen'))->where('id','[0-9]+');
Route::post('agencia/imagen/{id}',array('uses'=>'AgenciaController@uploadImage'))->where('id','[0-9]+');

});



// Personal

Route::group(['before' => 'auth'], function()
{
	Route::get('personal',array('uses'=>'PersonalController@index'));
    Route::post('personal/insertC.html',array('uses'=>'PersonalController@insertc'));
    Route::get('personal/addC.html',array('uses'=>'PersonalController@addc'));
    
    Route::get('clientes',array('uses'=>'ClienteController@index'));
Route::get('cliente/add.html',array('uses'=>'ClienteController@add'));
Route::post('cliente/insert.html',array('uses'=>'ClienteController@insert'));


Route::get('tours',array('uses'=>'TourController@index'));    
Route::get('tour/add.html',array('uses'=>'TourController@add'));
Route::post('tour/insert.html',array('uses'=>'TourController@insert'));        

Route::get('guias',array('uses'=>'GuiaController@index'));    
Route::get('guia/add.html',array('uses'=>'GuiaController@add'));
Route::post('guia/insert.html',array('uses'=>'GuiaController@insert'));
        

Route::get('hotels',array('uses'=>'HotelController@index'));    
Route::get('hotel/add.html',array('uses'=>'HotelController@add'));
Route::post('hotel/insert.html',array('uses'=>'HotelController@insert'));


    Route::get('personal/cargos',array('uses'=>'CargoController@index'));
    Route::get('personal/cargo/add.html',array('uses'=>'CargoController@add'));
    Route::post('personal/cargo/insert.html',array('uses'=>'CargoController@insert'));

    Route::get('personal/add.html',array('uses'=>'PersonalController@add'));
    Route::post('personal/insert.html',array('uses'=>'PersonalController@insert'));
    Route::get('personal/profile/{id}',array('uses'=>'PersonalController@profile'))->where('id','[0-9]+');
    Route::get('personal/edit/{id}',array('uses'=>'PersonalController@edit'))->where('id','[0-9]+');
    Route::post('personal/update/{id}',array('uses'=>'PersonalController@update'))->where('id','[0-9]+');
    Route::get('personal/change-pass-personal/{id}',array('uses'=>'PersonalController@changePassPersonal'))->where('id','[0-9]+');
    Route::get('personal/delete/{id}',array('uses'=>'PersonalController@delete'))->where('id','[0-9]+');
    Route::get('personal/imagen/{id}',array('uses'=>'PersonalController@imagen'))->where('id','[0-9]+');
    Route::post('personal/imagen/{id}',array('uses'=>'PersonalController@uploadImage'))->where('id','[0-9]+');

});

//Servicios mantenimiento
Route::get('servicio',array('uses'=>'ServicioController@index'));
Route::get('servicio/nuevo.html',array('uses'=>'ServicioController@nuevo'));
Route::get('servicio/actualizar.html',array('uses'=>'ServicioController@actualizar'));
Route::post('servicio/crear',array('uses'=>'ServicioController@crear'));
Route::get('modalidad_pago/nuevo.html',array('uses'=>'ServicioController@nuevo'));

Route::get('modalidad_pago',array('uses'=>'ModalidadPagoController@index'));
Route::get('modalidad_pago/nuevo.html',array('uses'=>'ModalidadPagoController@nuevo'));
Route::get('modalidad_pago/actualizar.html',array('uses'=>'ModalidadPagoController@actualizar'));
Route::post('modalidad_pago/crear',array('uses'=>'ModalidadPagoController@crear'));

/*Begin Caja y Facturacion*/
Route::post('modalidad/store','ModalidadController@store');
Route::post('modalidad/update/{id}','ModalidadController@update');
Route::get('modalidad/destroy/{id}','ModalidadController@destroy');
Route::post('modalidad/index','ModalidadController@index');
Route::controller('modalidad','ModalidadController');

//Route::post('pagos/update/{id}','PagosController@update');
Route::post('pagos/store','PagosController@store');

Route::get('pagos/destroy/{id}','PagosController@destroy');
Route::post('pagos/index','PagosController@index');
Route::get('pagos/create',array('uses'=>'PagosController@add'));
//Route::post('pagos/showCliente/{id}','PagosController@getCliente');
Route::get('pagos/showCliente/{id}',array('uses'=>'PagosController@profile'))->where('id','[0-9]+');
Route::post('pagos/create',array('uses' => 'PagosController@store'));
Route::post('pagos/showCliente/store','PagosController@store');
Route::post('pagos/search',array('uses'=>'PagosController@search'));
Route::get('pagos/search_pagos',array('uses'=>'PagosController@search_pagos'));

Route::controller('pagos','PagosController');
/*End Caja y Facturacion*/


//mantenimiento de tablas libres
Route::resource('dia','DiaController');
Route::resource('grupo','GrupoController');
Route::resource('horario','HorarioController');
Route::resource('servicio','ServicioController');
Route::resource('turno','TurnoController');


//***

