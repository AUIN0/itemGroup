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



Route::get('/edit/{x}',[ItemsController::class, 'edit'])->name('edit')->middleware('auth');

Route::post('/update', [ItemsController::class, 'Update'])->name('update')->middleware('auth');


Route::get('/del/{x}', [ItemsController::class, 'del'])->name('del')->middleware('auth');



Route::get('/cpanel', [DashboardController::class, 'welcomeAdmin'])->name('controlpanel')->middleware('auth');


Route::get('/addgritem', [ItemsController::class, 'Displayadditemsgroup'])->name('addgritem')->middleware('auth');


Route::get('/', [ItemsController::class, 'showGroup'])->name('showGroup')->middleware('auth');

Route::get('/showProd', [ItemsController::class, 'showProduct'])->name('showProd')->middleware('auth');
