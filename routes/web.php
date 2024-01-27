<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemsController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');


Route::get('/logout', [DashboardController::class, 'logout'])->name('logout')->middleware('auth');




Route::get('/itemgroup', [ItemsController::class, 'GetItemsGroup'])->name('itemgroup')->middleware('auth');

Route::post('/save/ItemGroup', [ItemsController::class, 'SaveGroupsItems'])->name('saveItemGroup')->middleware('auth');



Route::get('/item', [ItemsController::class, 'GetItems'])->name('item')->middleware('auth');

Route::post('/save/Item', [ItemsController::class, 'SaveItems'])->name('saveItem')->middleware('auth');



Route::get('/editG/{x}',[ItemsController::class, 'editGroup'])->name('editG')->middleware('auth');

Route::post('/updateG', [ItemsController::class, 'updateGroup'])->name('updateG')->middleware('auth');


Route::get('/delG/{x}', [ItemsController::class, 'delGroup'])->name('delG')->middleware('auth');



Route::get('/editI/{x}',[ItemsController::class, 'editItem'])->name('editI')->middleware('auth');

Route::post('/updateI', [ItemsController::class, 'updateItem'])->name('updateI')->middleware('auth');


Route::get('/delI/{x}', [ItemsController::class, 'delItem'])->name('delI')->middleware('auth');




Route::get('/cpanel', [DashboardController::class, 'welcomeAdmin'])->name('controlpanel')->middleware('auth');


Route::get('/addgritem', [DashboardController::class, 'welcomeAdmin'])->name('addgritem')->middleware('auth');


Route::get('/', [ItemsController::class, 'showGroup'])->name('showGroup')->middleware('auth');

Route::get('/showProd/{id}', [ItemsController::class, 'showProduct'])->name('showProd')->middleware('auth');


Route::get('/addtocart/{id}', [ItemsController::class, 'AddtoCart'])->name('addtocart')->middleware('auth');

route::get('/checkout',[ItemsController::class,'checkout'])->name('checkout');

Route::get('/aboutMe', [ItemsController::class, 'about'])->name('about');