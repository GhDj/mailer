<?php

use Illuminate\Support\Facades\Route;
use App\Mail\NewRDVMail;
use Illuminate\Support\Facades\Mail;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'WelcomeController@index');

/*Route::get('/sendmail', function () {

    Mail::to('newuser@example.com')->send(new NewRDVMail());

    return 'A message has been sent from Biim Com!';

});*/

Route::post('/sendmail', "WelcomeController@sendmail")->name('sendmail');
