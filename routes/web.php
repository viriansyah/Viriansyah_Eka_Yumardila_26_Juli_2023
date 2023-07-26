<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;

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

route::controller(PegawaiController::class)->group(function (){
    route::get('/pegawai', 'index')->name('pegawai.index');
    route::post('/pegawai', 'store')->name('pegawai.store');
    route::get('/pegawai/create', 'create')->name('pegawai.create');
    route::put('/pegawai/{id}', 'update')->name('pegawai.update');
});

Route::get('/', function () {
    return view('welcome');
});

