<?php


use App\Http\Controllers\BusinessOrderController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\KnowledgeBaseController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SurveyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/search', [ItemController::class, 'search']);
Route::get('/search2', [OrderController::class, 'search2']);
Route::get('/search3', [BusinessOrderController::class, 'search3']);
Route::get('/search4', [SurveyController::class, 'search4']);

Route::redirect('/dashboard', '/order.index')->name('order');
Route::get('/order', function () {
    return view('order');
})->middleware(['auth', 'verified'])->name('order');



Route::middleware(['auth', 'verified'])->group(function (){
    Route::resource('order', OrderController::class);
    Route::resource('item', ItemController::class);
    Route::resource('business_order', BusinessOrderController::class);
    Route::resource('knowledge_base', KnowledgeBaseController::class);
    Route::resource('survey', SurveyController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

