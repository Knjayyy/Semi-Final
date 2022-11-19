<?php

use App\Http\Controllers\InventoryItemController;
use Illuminate\Support\Facades\Route;
use Illuminate\Html\FormFacade;

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



Route::get('/items',[InventoryItemController::class, 'index']);
Route::post('/items',[InventoryItemController::class, 'store']);

Route::get('/edit-item/{items}',[InventoryItemController::class, 'edit']);
Route::put('/edit-item/{items}',[InventoryItemController::class, 'up']);

Route::get('/delete-item/{items}',[InventoryItemController::class, 'del']);
Route::delete('/confirmdelete-item/{items}',[InventoryItemController::class, 'des']);
