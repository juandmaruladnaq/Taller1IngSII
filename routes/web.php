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

Route::get('date1', function () {
    $nombre='JUAN DAVID MARULANDA';
    $documento='1060655865';

    return view('date')->with([
                                'nombre'=>$nombre,
                                'documento'=>$documento
                                ]);
    
});

Route::get('date2', function () {
    $nombre='JUAN DAVID MARULANDA';
    $documento='1060655865';
    
    return view('date',[
                        'nombre'=>$nombre,
                        'documento'=>$documento
                        ]);
});

Route::get('date3', function () {
    $nombre='JUAN DAVID MARULANDA';
    $documento='1060655865';
    return view('date',compact('nombre','documento'));
    
});

$links=[
    ['ruta'=>'https://nodejs.org/es/','nombre'=>'node js'],
    ['ruta'=>'https://www.java.com/es/'],
    ['ruta'=>'https://www.ruby-lang.org/es/'],
    ['ruta'=>'https://angular.io/']
];

Route::view('links', 'links',compact('links'));
