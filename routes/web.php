<?php

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

Auth::routes();
// $this->get('admin/login', 'Auth\LoginController@showLoginForm')->name('login');
// $this->post('admin/login', 'Auth\LoginController@login');
// $this->post('admin/logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
// $this->get('admin/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// $this->post('admin/register', 'Auth\RegisterController@register');

// Password Reset Routes...
// $this->get('admin/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
//  $this->post('admin/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
// $this->get('admin/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
// $this->post('admin/password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/', 'HomeController@index');

Route::resource('categorie', 'CategorieController');

// TODO: route mes-annonces seulement accessible pour les asso
// annonce display all
Route::resource('annonce', 'AnnonceController');

Route::resource('commentaire', 'CommentaireController');
Route::resource('annoncetag', 'AnnonceTagController');
Route::resource('tag', 'TagController');

Route::get('annonce/{slug}', 'AnnonceController@showBySlug');

// TODO: Gestion utilisateur... ACL
// Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function() {
//     Route::get('tickets', 'TicketsController@index');
//     Route::post('close_ticket/{ticket_id}', 'TicketsController@close');
// });

/*

Route::resource('users', 'UserController');

Route::resource('roles', 'RoleController');

Route::resource('permissions', 'PermissionController');

*/
