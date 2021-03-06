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

// homepage
Route::get('/', 'homepageController@index')->name('home');
// page gallery
Route::get('/gallery', 'galleryController@index')->name('gallery');
// page comunications
Route::get('/comunications', 'comunicationsController@index')->name('comunications');
// page contact
Route::get('/contact', 'contactController@index')->name('contact');
Route::post('/contact', 'contactController@mail')->name('contact.mail');
// Route::match(['get', 'post'], '/contact', 'contactController@index')->name('contact.save');

Route::prefix('admin')->group(function(){
    // admin comunications
    Route::get('/comunications', 'adminComunicationsController@index')->name('admin.comunications');
    Route::get('/comunications/create', 'adminComunicationsController@create')->name('admin.comunications.create');
    Route::post('/comunications/create', 'adminComunicationsController@save')->name('admin.comunications.save');
    Route::get('/comunications/delete/{comunication}', 'adminComunicationsController@delete')->name('admin.comunications.delete');
    Route::match(['get', 'post'], '/comunications/edit/{comunication}', 'adminComunicationsController@edit')->name('admin.comunications.edit');

    // admin gallery
    Route::get('/gallery', 'adminGalleryController@index')->name('admin.gallery');
    Route::get('/gallery/create', 'adminGalleryController@create')->name('admin.gallery.create');
    Route::post('/gallery/create', 'adminGalleryController@save')->name('admin.gallery.save');
    Route::get('/gallery/delete/{galleries}', 'adminGalleryController@delete')->name('admin.gallery.delete');
    Route::match(['get', 'post'], '/gallery/edit/{galleries}', 'adminGalleryController@edit')->name('admin.gallery.edit');

});
