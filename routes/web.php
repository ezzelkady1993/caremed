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


Route::get('/','FrontController@index')->name('home');

Route::get('/services','FrontController@services')->name('services');

Route::get('/news','FrontController@news')->name('news');

Route::get('/about','FrontController@about')->name('about');

Route::get('/contact','FrontController@contact')->name('contact');

Route::get('/ourMedicalTeam','FrontController@ourMedicalTeam')->name('ourMedicalTeam');

Route::get('/healthbooks','ServicesController@index')->name('healthbooks');

Route::get('/livingprog','ServicesController@livingprog')->name('livingprog');

Route::get('/sportmed','ServicesController@sportmed')->name('sportmed');

Route::get('/healthletter','ServicesController@healthletter')->name('healthletter');

Route::get('/adviceserv','ServicesController@adviceserv')->name('adviceserv');

Route::get('/research','ServicesController@research')->name('research');

Route::get('/admin/Hbook','ServicesController@Hbook')->name('service.Hbook');

Route::post('/admin/bookstore','ServicesController@bookstore')->name('service.bookstore');

Route::get('/admin/Hliveprog','ServicesController@Hliveprog')->name('service.Hliveprog');

Route::post('/admin/liveprog','ServicesController@liveprog')->name('service.liveprog');

Route::get('/admin/Hsportmed','ServicesController@Hsportmed')->name('service.Hsportmed');

Route::post('/admin/sportmedicine','ServicesController@sportmedicine')->name('service.sportmedicine');

Route::get('/admin/healthLett','ServicesController@healthLett')->name('service.healthLett');

Route::post('/admin/addHealthLetter','ServicesController@addHealthLetter')->name('service.addHealthLetter');

Route::get('/admin/addminresearch','ServicesController@addminresearch')->name('service.addminresearch');

Route::post('/admin/addResearch','ServicesController@addResearch')->name('service.addResearch');

Auth::routes();

Route::get('/logout','auth\LoginController@logout');

//Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin' , 'middleware' =>'auth'] , function(){
	Route::get('/',function(){
		return view('admin.index');
	})->name('admin.index');

	Route::resource('doctor','DoctorsController');
	Route::resource('department','DepartmentsController');
	Route::resource('service','ServicesController');
});

