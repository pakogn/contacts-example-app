<?php

use App\Mail\ContactMe;

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

Route::get('/', ['as' => 'index', function () {
    return 'Contactos!';
}]);

Route::get('contacts/{contact}/confirm-deletion', [
    'as' => 'contacts.confirm.destroy',
    'uses' => 'ContactsController@confirmDestroy',
]);
Route::resource('contacts', 'ContactsController');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('send-my-contact-information', function () {
    Mail::to('pako.gn@hotmail.com')->send(new ContactMe());

    return 'Datos enviados!';
});
