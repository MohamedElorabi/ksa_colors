<?php

use App\Http\Controllers\Dashboard\CategoriesController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::prefix('dashboard')->namespace('Dashboard')->group(function()
{

Route::get('/login', 'AuthController@index')->name('login.admin');
Route::post('/admin/login', 'AuthController@login')->name('admin.login');

});



Route::prefix('dashboard')->middleware(['auth','isAdmin'])->namespace('Dashboard')->group(function()
{
    Route::get('/logout', 'AuthController@logout')->name('logout');
    Route::get('/change-password', 'AuthController@changePassword')->name('changePassword');
    Route::post('/change-password', 'AuthController@changePasswordSave')->name('postChangePassword');
    Route::get('/index', 'HomeController@index')->name('index');
    Route::resource('categories', CategoriesController::class);
    Route::resource('products', ProductController::class);
    Route::resource('sliders', SliderController::class);
    Route::get('/genral_setting', 'GenralSettingController@index')->name('genral_setting');
    Route::put('/genral_setting/update', 'GenralSettingController@update')->name('setting.update');
    Route::get('/who_are_we', 'WhoController@index')->name('who_are_we');
    Route::put('/who_are_we/update', 'WhoController@update')->name('who.update');
    Route::get('/contact_us', 'Contact_UsController@index')->name('contact_us.index');
    Route::get('/contact_us/show/{id}', 'Contact_UsController@showContact')->name('contact_us.show');

});



Route::group(['namespace'=>'Front'],function ()
{

    Route::get('/', 'MainController@home_page')->name('home');
    Route::get('/search', 'MainController@search')->name('search');
    Route::get('/about', 'MainController@who_page')->name('about');
    Route::get('/products', 'MainController@products_page')->name('products');
    Route::get('/product_detailes/{id}', 'MainController@product_details')->name('product_detailes');
    Route::get('/contact_us', 'ContactUsController@index')->name('contact_us');
    Route::post('/contact_us/store', 'ContactUsController@store_contact_us')->name('contact_us.store');

});
