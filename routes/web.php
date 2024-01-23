<?php

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
})->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/itemgroup', [ItemsController::class, 'GetItemsGroup'])->name('itemgroup');

Route::post('/save/ItemGroup', [ItemsController::class, 'SaveGroupsItems'])->name('saveItemGroup');



Route::get('/item', [ItemsController::class, 'GetItems'])->name('item');

Route::post('/save/Item', [ItemsController::class, 'SaveItems'])->name('saveItem');



Route::get('/edit/{x}',[ItemsController::class, 'edit'])->name('edit');

Route::post('/update', [ItemsController::class, 'Update'])->name('update');


Route::get('/del/{x}', [ItemsController::class, 'del'])->name('del');



Route::get('/cpanel', [ItemsController::class, 'DisplayItems'])->name('controlpanel');


Route::get('/addgritem', [ItemsController::class, 'Displayadditemsgroup'])->name('addgritem');