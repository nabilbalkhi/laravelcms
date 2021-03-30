<?php

use Illuminate\Support\Facades\Route;

//Admin Auth Routes
Route::get('admin/enter', 'Admin\AuthController@showLoginForm')->name('admin.login');
Route::post('admin/enter', 'Admin\AuthController@login')->name('admin.login.submit');
Route::get('admin/exit', 'Admin\AuthController@logout')->name('admin.logout');
Route::post('admin/changePassword', 'Admin\AuthController@changePassword')->name('admin.password.change');

//Admin CRUD Routes
Route::get('/admin', function(){ return redirect(route('admin.slider.index'));})->name('admin.dashboard');
  
  //Slider Routes
Route::name('admin.')->group(function () {
  Route::resource('admin/slider', 'Admin\SliderController');
});

  //About Routes
Route::get('admin/about', 'Admin\AboutController@index')->name('admin.about.index');
Route::patch('admin/about', 'Admin\AboutController@update')->name('admin.about.update');

  //Info Routes
Route::get('admin/info', 'Admin\InfoController@index')->name('admin.info.index');
Route::patch('admin/info', 'Admin\InfoController@update')->name('admin.info.update');

  //Testimonial Routes
Route::name('admin.')->group(function () {
  Route::resource('admin/testimonial', 'Admin\TestimonialController');
});

  //Team Member Routes
Route::name('admin.')->group(function () {
  Route::resource('admin/teamMember', 'Admin\TeamController');
});

  //Service Routes
Route::name('admin.')->group(function () {
  Route::resource('admin/service', 'Admin\ServiceController');
});

  //Department Routes
Route::name('admin.')->group(function () {
  Route::resource('admin/department', 'Admin\DepartmentController');
});

  //FAQ Routes
Route::name('admin.')->group(function () {
  Route::resource('admin/faq', 'Admin\FaqController');
});

  //FAQ Routes
Route::name('admin.')->group(function () {
  Route::resource('admin/counter', 'Admin\CounterController');
});
  

  //Contact Routes
Route::get('/admin/contacts', 'Admin\ContactController@index')->name('admin.contact.index');
Route::delete('/admin/contact/{contact}', 'Admin\ContactController@destroy')->name('admin.contact.destroy');

//Frontend Routes
Route::get('/', 'Front\HomeController@index')->name('home');