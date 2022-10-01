<?php

use Illuminate\Support\Facades\Route;

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

//Mostrar todos lo clientes

Route::get('/clientes', function () {
    //
    $clientes = Cliente::all();
    return view('clientes', [ 'clientes' => $clientes ]);
});


//Agregar un nuevo cliente
Route::post('/cliente', function(Request $request){
    //
    $validator = validator::make($request->all(),[
        'name'    => 'required|max:70',//es requido el nombre con una longitud maxima de 255 caracteres
        'ruc'     => 'required|digits:11',
        'phone'   => 'min:6',
        'email'   => 'email'
    ]);

    if($validator->fails())
    {
        return redirect('/clientes')
            ->withInput()
            ->withErrors($validator);
    }

    $client = new Client;
    $client -> name    = $request -> name;
    $client -> ruc     = $request -> ruc;
    $client -> phone   = $request -> phone;
    $client -> address = $request -> address;
    $client -> email   = $request -> email;
    
    $client -> save();

    return redirect('/clientes');


});


//Eliminar un cliente existente
Route::delete('/cliente/{id}',function($id){
    //
    Client::findOrFail($id)->delete();
    return redirect('/clientes');
});