<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
});


Route::get('foodList',[\App\Http\Controllers\MainController::class,'index'])->name('foodList');
Route::get('deleteFood/{id}',[\App\Http\Controllers\MainController::class,'delete'])->name('deletefood');
Route::get('foodDetail/{id}',[\App\Http\Controllers\MainController::class,'viewDetail'])->name('foodDetail');
Route::get('create/food',[\App\Http\Controllers\MainController::class,'create'])->name('create.food');
Route::post('store/food',[\App\Http\Controllers\MainController::class,'store'])->name('store.food');
Route::get('foodDeatils/{id}/edit',[\App\Http\Controllers\MainController::class,'viewEdit'])->name('edit.food');
Route::post('foodDeatils/{id}/edit',[\App\Http\Controllers\MainController::class,'edit'])->name('edit.food.now');

Route::get('/home',function (){
    return 'welcome peshin';
});

Route::get('sum/{x}/{y}', function($x,$y){
        return $x+$y;
});

Route::get('divide/{x}/{y}',[\App\Http\Controllers\MainController::class,'divide']);



//Route::get('foods',[\App\Http\Controllers\MainController::class,'index']);
//Route::get('food/{id}',[\App\Http\Controllers\MainController::class,'delete'])->name('deleteFood');
//Route::get('even/{x}',[\App\Http\Controllers\MainController::class,'even']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
