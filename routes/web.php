<?php

use Illuminate\Support\Facades\Route;

/** Ruta para obtener vehiculos por placa **/
Route::get('/vehiculos/{placa?}', [	'as' => 'vehiculos.vehiculoplaca', 
									'uses' => 'VehiculosController@vehiculoplaca']);

/** Obtiene todas las facturas de un vehículo **/
Route::get('facturas/{idVehiculo}', [ 	'as' => 'facturas.facturasvehiculo',
										'uses' => 'FacturasController@facturasvehiculo']);
/** Obtiene una factura especifica **/
Route::get('factura/{id}', ['as' => 'facturas.obtenerfactura', 'uses' => 'FacturasController@obtenerfactura']);

/** Obtiene todas las ordenes de trabajo asociadas a un vehiculo **/
Route::get('ordentrabajos/{idVehiculo}', [	'as' => 'ordentrabajos.ordenesvehiculo',
											'uses' => 'OrdentrabajosController@ordenesvehiculo']);

Route::get('ordentrabajo/{id}', [	'as' => 'ordentrabajos.obtenerordentrabajo', 
									'uses' => 'OrdentrabajosController@obtenerordentrabajo']);
									
Route::get('header/{id}', [	'as' => 'publicidadmoviles.headerAdvertising', 
									'uses' => 'PublicidadmovilesController@headerAdvertising']);
									
Route::get('footer/{id}', [	'as' => 'publicidadmoviles.footerAdvertising', 
									'uses' => 'PublicidadmovilesController@footerAdvertising']);									
									