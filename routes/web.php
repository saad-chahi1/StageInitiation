<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Mail\ContactMail;
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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/',function(Request $request){
	Mail::send(new ContactMail($request));
	return redirect('/');
});

Route::get('/Qui-nous', function () {
    return view('filePages/Qui-nous');
});

Route::get('/nos-atelier', function () {
    return view('filePages/nos-atelier');
});

Route::get('/nos-aform', function () {
    return view('filePages/nos-form');
});

Route::get('/pedagogique', function () {
    return view('filePages/pedagogique');
});

Route::get('/individuels-ou-en-groupes', function () {
    return view('filePages/individuels-ou-en-groupes');
});

Route::get('/nos-professeurs-particuliers', function () {
    return view('filePages/nos-professeurs-particuliers');
});

Route::get('/le-soutien-scolaire', function () {
    return view('filePages/le-soutien-scolaire');
});

Route::get('/langues', function () {
    return view('filePages/langues');
});

Route::get('/missions', function () {
    return view('filePages/cours-type-mission');
});

Route::get('University', function () {
    return view('filePages/Biof');
});

Route::get('profil','HomeController@profil')->middleware('auth');


/* les informations */
Route::get('mes-info','HomeController@info')->middleware('auth');
Route::post('update/{id}','HomeController@updateForm')->middleware('auth');
Route::get('lessons/{id}/details','LessonController@detail');
Route::get('lessons/details/{id}','LessonController@show')->name('downloadfile');

/*lessons*/
Route::get('lessons','LessonController@index')->middleware('auth');
Route::get('lessons/create','LessonController@create')->middleware('auth');
Route::post('lessons','LessonController@store')->middleware('auth');
Route::get('lessons/{id}/edit','LessonController@edit')->middleware('auth');
Route::put('lessons/{id}','LessonController@update')->middleware('auth');
Route::delete('lessons/{id}','LessonController@destroy')->middleware('auth');
Route::get('/files/{id}','LessonController@view');

/*triee*/

Route::get('lessons/{category}/{niv}/details','LessonController@trie');
Route::get('lessons/{category}/to/{niv}/{mat}/details','LessonController@triemat');

/*pour les utilisateurs*/
Route::delete('lessons/{id}/user','LessonController@destroyu')->middleware('auth');
Route::get('users/{id}/details','LessonController@showu')->middleware('auth');
Route::get('users/{id}','LessonController@updateu')->middleware('auth');
Route::get('tt/users/{id}','LessonController@upda')->middleware('auth');
/*message*/
Route::get('messages/{id}','LessonController@indexm')->middleware('auth');
Route::get('boitechat/{id1}/to/{id2}','LessonController@createm')->middleware('auth');
Route::post('messages/{id1}/to/{id2}','LessonController@message')->middleware('auth');



Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::get('/logout', 'LoginController@logout');
