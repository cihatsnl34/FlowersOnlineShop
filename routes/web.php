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

require __DIR__ . '/auth.php';

Route::get('/', function () {
    return redirect(route('index'));
})->name('home');

Route::get('iletisim', 'HomeController@contact')->name('iletisim');
Route::get('anasayfa', 'HomeController@index')->name('index');
Route::get('cicekler', 'HomeController@flower')->name('flower');
Route::get('ciceklerDetay/{id}', 'HomeController@flowerDetails')->name('flowerDetails');

Route::post('register','RegisterController@store')->name('register');
        Route::get('register', function () {
            return view('register');
        });

Route::get('/admin', function () {
    return redirect('/admin/login');
});


//admin
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
    Route::namespace('Auth')->middleware('guest:admin')->group(function () {
        //login route
        Route::get('login', 'AuthenticatedSessionController@create')->name('login');
        Route::post('login', 'AuthenticatedSessionController@store')->name('adminlogin');
    });
    Route::middleware('admin')->group(function () {
        
        Route::get('dashboard', 'HomeController@index')->name('dashboard');
        //Flower
        Route::get('flower', 'FlowerController@index')->name('flower');
        Route::post('flower/add','FlowerController@store')->name('flower_add');
        Route::get('flower/add', function () {
            return view('admin.flower.flower-add');
        });
        Route::get('flower/edit/{id}', 'FlowerController@edit')->name('flower_edit');
        Route::post('flower/update/{id}','FlowerController@update')->name('flower_update');
        Route::get('flower/delete/{id}', 'FlowerController@destroy')->name('flower_delete');
        
        Route::get('siparisler', 'HomeController@siparisler')->name('siparisler');
        
        //Uyeler
        Route::get('uyeler', 'HomeController@userList')->name('userList');
        Route::get('uyeler/delete/{id}', 'HomeController@userDelete')->name('user_delete');

    });
    Route::get('logout', 'Auth\AuthenticatedSessionController@destroy')->name('logout');
});

//User
Route::namespace('User')->prefix('user')->name('user.')->group(function () {
    Route::namespace('Auth')->middleware('guest:user')->group(function () {
        //login route
        Route::get('login', 'AuthenticatedSessionController@create')->name('login');
        Route::post('login', 'AuthenticatedSessionController@store')->name('userlogin');
    });
    Route::middleware('user')->group(function () {
        Route::get('dashboard', 'HomeController@index')->name('dashboard');
        Route::post('sepetEkle/{id}', 'HomeController@sepetEkle')->name('sepetEkle');
        Route::get('sepetim', 'HomeController@sepetim')->name('sepetim');
        Route::get('sepetSil/{id}', 'HomeController@sepetDelete')->name('sepetDelete');
        Route::post('sepetOnayla','HomeController@sepetOnayla')->name('sepetOnayla');
        Route::get('sepetOnayla', function () {
            return view('user.sepetOnayla');
        });
    });
    Route::get('logout', 'Auth\AuthenticatedSessionController@destroy')->name('logout');
});
