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
use Illuminate\Http\Request;


Route::get('/', 'WelcomeController@index');
Route::post('/', 'WelcomeController@save');
Route::resource('/user', 'UserController');

/*Route::post('/', function(Request $request) {
    //dd(Request::all()); //mengambil semua data
    //dd(Request()->username); //mengambil salah satu data
    //return ['Just a text']; //repon berupa json
    //return 'Just a text'; //respon berupa html
    //return back(); //kembali ke route sebelumnyna
    return redirect('/not_found'); //setelah submit not found
});


Route::get('/{firstName?}/{lastName?}/{age?}', function ($firstName = 'Muthia', $lastName = null, $age = null) {
    dd($firstName, $lastName, $age);
}); */
